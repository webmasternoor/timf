<?php
namespace App\Http\Controllers;

use App\Liab;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LiabController extends Controller
{
    public function getIndex()
    {
        return view('liab.index');
    }

    public function getList()
    {
        Session::put('liab_search', Input::has('ok') ? Input::get('search') : (Session::has('liab_search') ? Session::get('liab_search') : ''));
        Session::put('liab_field', Input::has('field') ? Input::get('field') : (Session::has('liab_field') ? Session::get('liab_field') : 'LiabilitiesDescription'));
        Session::put('liab_sort', Input::has('sort') ? Input::get('sort') : (Session::has('liab_sort') ? Session::get('liab_sort') : 'asc'));
        $liabs = Liab::where('id', 'like', '%' . Session::get('liab_search') . '%')
            ->orderBy(Session::get('liab_field'), Session::get('liab_sort'))->paginate(8);
        return view('liab.list', ['liabs' => $liabs]);
    }

    public function getUpdate($id)
    {
        return view('liab.update', ['liab' => Liab::find($id)]);
    }

    public function postUpdate($id)
    {
        $liab = Liab::find($id);
        $rules = ["LiabilitiesDescription" => "required"];
        if ($liab->LiabilitiesDescription != Input::get('LiabilitiesDescription'))
            $rules += ['LiabilitiesDescription' => 'required|unique:liabs'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $liab->LiabilitiesDescription = Input::get('LiabilitiesDescription');
        $liab->save();
        return ['url' => 'liab/list'];
    }

    public function getCreate()
    {
        return view('liab.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "LiabilitiesDescription" => "required|unique:liabs"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $liab = new Liab();
        $liab->LiabilitiesDescription = Input::get('LiabilitiesDescription');
        $liab->save();
        return ['url' => 'liab/list'];
    }

    public function getDelete($id)
    {
        Liab::destroy($id);
        return Redirect('liab/list');
    }

}