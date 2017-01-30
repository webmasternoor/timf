<?php
namespace App\Http\Controllers;

use App\Countr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CountrController extends Controller
{
    public function getIndex()
    {
        return view('countr.index');
    }

    public function getList()
    {
        Session::put('countr_search', Input::has('ok') ? Input::get('search') : (Session::has('countr_search') ? Session::get('countr_search') : ''));
        Session::put('countr_field', Input::has('field') ? Input::get('field') : (Session::has('countr_field') ? Session::get('countr_field') : 'CountryName'));
        Session::put('countr_sort', Input::has('sort') ? Input::get('sort') : (Session::has('countr_sort') ? Session::get('countr_sort') : 'asc'));
        $countrs = Countr::where('id', 'like', '%' . Session::get('countr_search') . '%')
            ->orderBy(Session::get('countr_field'), Session::get('countr_sort'))->paginate(8);
        return view('countr.list', ['countrs' => $countrs]);
    }

    public function getUpdate($id)
    {
        return view('countr.update', ['countr' => Countr::find($id)]);
    }

    public function postUpdate($id)
    {
        $countr = Countr::find($id);
        $rules = ["CountryCode" => "required"];
        if ($countr->CountryName != Input::get('CountryName'))
            $rules += ['CountryName' => 'required|unique:countrs'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $countr->CountryName = Input::get('CountryName');
        $countr->CountryCode = Input::get('CountryCode');
        $countr->save();
        return ['url' => 'countr/list'];
    }

    public function getCreate()
    {
        return view('countr.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "CountryName" => "required|unique:countrs",
            "CountryCode" => "required|unique:countrs",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $countr = new Countr();
        $countr->CountryName = Input::get('CountryName');
        $countr->CountryCode = Input::get('CountryCode');
        $countr->save();
        return ['url' => 'countr/list'];
    }

    public function getDelete($id)
    {
        Countr::destroy($id);
        return Redirect('countr/list');
    }

}