<?php
namespace App\Http\Controllers;

use App\Samity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SamityController extends Controller
{
    public function getIndex()
    {
        return view('samity.index');
    }

    public function getList()
    {
        Session::put('samity_search', Input::has('ok') ? Input::get('search') : (Session::has('samity_search') ? Session::get('samity_search') : ''));
        Session::put('samity_field', Input::has('field') ? Input::get('field') : (Session::has('samity_field') ? Session::get('samity_field') : 'id'));
        Session::put('samity_sort', Input::has('sort') ? Input::get('sort') : (Session::has('samity_sort') ? Session::get('samity_sort') : 'asc'));
        $samitys = Samity::where('id', 'like', '%' . Session::get('samity_search') . '%')
            ->orderBy(Session::get('samity_field'), Session::get('samity_sort'))->paginate(8);
        return view('samity.list', ['samitys' => $samitys]);
    }

    public function getUpdate($id)
    {
        return view('samity.update', ['samity' => Samity::find($id)]);
    }

    public function postUpdate($id)
    {
        $samity = Samity::find($id);
        $rules = ["SamityName" => "required"];
        if ($samity->SamityName != Input::get('SamityName'))
            $rules += ['SamityName' => 'required|unique:samitys'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $samity->SamityName = Input::get('SamityName');
        $samity->SamityCode = Input::get('SamityCode');
        $samity->save();
        return ['url' => 'samity/list'];
    }

    public function getCreate()
    {
        return view('samity.create');
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            //"SamityName" => "required|unique:samitys"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $samity = new Samity();
        $samity->sname = Input::get('sname');
        $samity->scode = Input::get('scode');
        $samity->save();
        return ['url' => 'samity/list'];
    }

    public function getDelete($id)
    {
        Samity::destroy($id);
        return Redirect('samity/list');
    }

}