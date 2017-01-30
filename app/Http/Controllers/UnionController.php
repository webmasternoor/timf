<?php
namespace App\Http\Controllers;

use DB;
use App\Union;
use App\Thana;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UnionController extends Controller
{
    public function getIndex()
    {
        return view('union.index');
    }

    public function getList()
    {
        Session::put('union_search', Input::has('ok') ? Input::get('search') : (Session::has('union_search') ? Session::get('union_search') : ''));
        Session::put('union_field', Input::has('field') ? Input::get('field') : (Session::has('union_field') ? Session::get('union_field') : 'id'));
        Session::put('union_sort', Input::has('sort') ? Input::get('sort') : (Session::has('union_sort') ? Session::get('union_sort') : 'asc'));
        $unions = Union::where('id', 'like', '%' . Session::get('union_search') . '%')
            ->orderBy(Session::get('union_field'), Session::get('union_sort'))->paginate(100);
        $thana_data=DB::table('unions')
            ->join('thanas', 'unions.ThanaId', '=', 'thanas.id')
            ->select('*')
            ->get();
        return view('union.list', ['unions' => $unions],['thana_data'=>$thana_data]);
    }

    public function getUpdate($id)
    {
        $thana = Thana::all();
        return view('union.update', ['union' => Union::find($id)],['thana'=>$thana]);
    }

    public function postUpdate($id)
    {
        $union = Union::find($id);
        $rules = ["ThanaId" => "required"];
        if ($union->UnionName != Input::get('UnionName'))
            $rules += ['UnionName' => 'required|unique:unions'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $union->UnionName = Input::get('UnionName');
        $union->ThanaId = Input::get('ThanaId');
        $union->save();
        return ['url' => 'union/list'];
    }

    public function getCreate()
    {
        $thana = Thana::all();
        return view('union.create', compact('thana'));
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "UnionName" => "required|unique:unions",
            "ThanaId" => "required"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $union = new Union();
        $union->UnionName = Input::get('UnionName');
        $union->ThanaId = Input::get('ThanaId');
        $union->save();
        return ['url' => 'union/list'];
    }

    public function getDelete($id)
    {
        Union::destroy($id);
        return Redirect('union/list');
    }

}