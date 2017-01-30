<?php
namespace App\Http\Controllers;

use DB;
use App\Ward;
use App\Union;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class WardController extends Controller
{
    public function getIndex()
    {
        return view('ward.index');
    }

    public function getList()
    {
        Session::put('ward_search', Input::has('ok') ? Input::get('search') : (Session::has('ward_search') ? Session::get('ward_search') : ''));
        Session::put('ward_field', Input::has('field') ? Input::get('field') : (Session::has('ward_field') ? Session::get('ward_field') : 'id'));
        Session::put('ward_sort', Input::has('sort') ? Input::get('sort') : (Session::has('ward_sort') ? Session::get('ward_sort') : 'asc'));
        $wards = Ward::where('id', 'like', '%' . Session::get('ward_search') . '%')
            ->orderBy(Session::get('ward_field'), Session::get('ward_sort'))->paginate(8);
        $union_data=DB::table('wards')
            ->join('unions', 'wards.UnionId', '=', 'unions.id')
            ->select('*')
            ->get();
        return view('ward.list', ['wards' => $wards],['union_data'=>$union_data]);
    }

    public function getUpdate($id)
    {
        $union = Union::all();
        return view('ward.update', ['ward' => Ward::find($id)],['union' => $union]);
    }

    public function postUpdate($id)
    {
        $ward = Ward::find($id);
        $rules = ["UnionId" => "required"];
        if ($ward->WardName != Input::get('WardName'))
            $rules += ['WardName' => 'required|unique:wards'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $ward->WardName = Input::get('WardName');
        $ward->UnionId = Input::get('UnionId');
        $ward->save();
        return ['url' => 'ward/list'];
    }

    public function getCreate()
    {
        $union = Union::all();
        return view('ward.create',compact('union'));
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "WardName" => "required|unique:wards",
            "UnionId" => "required"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $ward = new Ward();
        $ward->WardName = Input::get('WardName');
        $ward->UnionId = Input::get('UnionId');
        $ward->save();
        return ['url' => 'ward/list'];
    }

    public function getDelete($id)
    {
        Ward::destroy($id);
        return Redirect('ward/list');
    }

}