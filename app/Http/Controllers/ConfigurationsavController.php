<?php
namespace App\Http\Controllers;

use App\Configurationsav;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ConfigurationsavController extends Controller
{
    public function getIndex()
    {
        return view('configurationsav.index');
    }

    public function getList()
    {
        Session::put('configurationsav_search', Input::has('ok') ? Input::get('search') : (Session::has('configurationsav_search') ? Session::get('configurationsav_search') : ''));
        Session::put('configurationsav_field', Input::has('field') ? Input::get('field') : (Session::has('configurationsav_field') ? Session::get('configurationsav_field') : 'id'));
        Session::put('configurationsav_sort', Input::has('sort') ? Input::get('sort') : (Session::has('configurationsav_sort') ? Session::get('configurationsav_sort') : 'asc'));
        $configurationsavs = Configurationsav::where('id', 'like', '%' . Session::get('configurationsav_search') . '%')
            ->orderBy(Session::get('configurationsav_field'), Session::get('configurationsav_sort'))->paginate(8);
        return view('configurationsav.list', ['configurationsavs' => $configurationsavs]);
    }

    public function getUpdate($id)
    {
        return view('configurationsav.update', ['configurationsav' => Configurationsav::find($id)]);
    }

    public function postUpdate($id)
    {
        $configurationsav = Configurationsav::find($id);
        $rules = ["TotalIncomeDescription" => "required"];
        if ($configurationsav->TotalIncomeDescription != Input::get('TotalIncomeDescription'))
            $rules += ['TotalIncomeDescription' => 'required|unique:configurationsavs'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $configurationsav->TotalIncomeDescription = Input::get('TotalIncomeDescription');
        $configurationsav->save();
        return ['url' => 'configurationsav/list'];
    }

    public function getCreate()
    {
        return view('configurationsav.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "TotalIncomeDescription" => "required|unique:configurationsavs"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $configurationsav = new Configurationsav();
        $configurationsav->TotalIncomeDescription = Input::get('TotalIncomeDescription');
        $configurationsav->save();
        return ['url' => 'configurationsav/list'];
    }

    public function getDelete($id)
    {
        Configurationsav::destroy($id);
        return Redirect('configurationsav/list');
    }

}