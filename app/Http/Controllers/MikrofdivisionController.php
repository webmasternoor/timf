<?php
namespace App\Http\Controllers;

use App\Mikrofdivision;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MikrofdivisionController extends Controller
{
    public function getIndex()
    {
        return view('mikrofdivision.index');
    }

    public function getList()
    {
        Session::put('mikrofdivision_search', Input::has('ok') ? Input::get('search') : (Session::has('mikrofdivision_search') ? Session::get('mikrofdivision_search') : ''));
        Session::put('mikrofdivision_field', Input::has('field') ? Input::get('field') : (Session::has('mikrofdivision_field') ? Session::get('mikrofdivision_field') : 'id'));
        Session::put('mikrofdivision_sort', Input::has('sort') ? Input::get('sort') : (Session::has('mikrofdivision_sort') ? Session::get('mikrofdivision_sort') : 'asc'));
        $mikrofdivisions = Mikrofdivision::where('id', 'like', '%' . Session::get('mikrofdivision_search') . '%')
            ->orderBy(Session::get('mikrofdivision_field'), Session::get('mikrofdivision_sort'))->paginate(8);
        return view('mikrofdivision.list', ['mikrofdivisions' => $mikrofdivisions]);
    }

    public function getUpdate($id)
    {
        return view('mikrofdivision.update', ['mikrofdivision' => Mikrofdivision::find($id)]);
    }

    public function postUpdate($id)
    {
        $mikrofdivision = Mikrofdivision::find($id);
        $rules = ["TotalIncomeDescription" => "required"];
        if ($mikrofdivision->TotalIncomeDescription != Input::get('TotalIncomeDescription'))
            $rules += ['TotalIncomeDescription' => 'required|unique:mikrofdivisions'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $mikrofdivision->TotalIncomeDescription = Input::get('TotalIncomeDescription');
        $mikrofdivision->save();
        return ['url' => 'mikrofdivision/list'];
    }

    public function getCreate()
    {
        return view('mikrofdivision.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "TotalIncomeDescription" => "required|unique:mikrofdivisions"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $mikrofdivision = new Mikrofdivision();
        $mikrofdivision->TotalIncomeDescription = Input::get('TotalIncomeDescription');
        $mikrofdivision->save();
        return ['url' => 'mikrofdivision/list'];
    }

    public function getDelete($id)
    {
        Mikrofdivision::destroy($id);
        return Redirect('mikrofdivision/list');
    }

}