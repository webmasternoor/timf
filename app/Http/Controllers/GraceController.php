<?php
namespace App\Http\Controllers;

use App\Grace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class GraceController extends Controller
{
    public function getIndex()
    {
        return view('grace.index');
    }

    public function getList()
    {
        Session::put('grace_search', Input::has('ok') ? Input::get('search') : (Session::has('grace_search') ? Session::get('grace_search') : ''));
        Session::put('grace_field', Input::has('field') ? Input::get('field') : (Session::has('grace_field') ? Session::get('grace_field') : 'MemberName'));
        Session::put('grace_sort', Input::has('sort') ? Input::get('sort') : (Session::has('grace_sort') ? Session::get('grace_sort') : 'asc'));
        $graces = Grace::where('id', 'like', '%' . Session::get('grace_search') . '%')
            ->orderBy(Session::get('grace_field'), Session::get('grace_sort'))->paginate(8);
        return view('grace.list', ['graces' => $graces]);
    }

    public function getUpdate($id)
    {
        return view('grace.update', ['grace' => Grace::find($id)]);
    }

    public function postUpdate($id)
    {
        $grace = Grace::find($id);
        $rules = ["MemberName" => "required"];
        if ($grace->MemberName != Input::get('MemberName'))
            $rules += ['MemberName' => 'required|unique:graces'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $grace->GraceId = Input::get('GraceId');
        $grace->SomitiName = Input::get('SomitiName');
        $grace->MemberName = Input::get('MemberName');
        $grace->GraceStartTime = Input::get('GraceStartTime');
        $grace->GraceEndDate = Input::get('GraceEndDate');
        $grace->Description = Input::get('Description');
        $grace->save();
        return ['url' => 'grace/list'];
    }

    public function getCreate()
    {
        return view('grace.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "GraceId" => "required|unique:graces",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $grace = new Grace();
        $grace->GraceId = Input::get('GraceId');
        $grace->SomitiName = Input::get('SomitiName');
        $grace->MemberName = Input::get('MemberName');
        $grace->GraceStartTime = Input::get('GraceStartTime');
        $grace->GraceEndDate = Input::get('GraceEndDate');
        $grace->Description = Input::get('Description');
        $grace->save();
        return ['url' => 'grace/list'];
    }

    public function getDelete($id)
    {
        Grace::destroy($id);
        return Redirect('grace/list');
    }

}