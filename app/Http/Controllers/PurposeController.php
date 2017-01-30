<?php
namespace App\Http\Controllers;

use App\Purpose;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PurposeController extends Controller
{
    public function getIndex()
    {
        return view('purpose.index');
    }

    public function getList()
    {
        Session::put('purpose_search', Input::has('ok') ? Input::get('search') : (Session::has('purpose_search') ? Session::get('purpose_search') : ''));
        Session::put('purpose_field', Input::has('field') ? Input::get('field') : (Session::has('purpose_field') ? Session::get('purpose_field') : 'PurposeName'));
        Session::put('purpose_sort', Input::has('sort') ? Input::get('sort') : (Session::has('purpose_sort') ? Session::get('purpose_sort') : 'asc'));
        $purposes = Purpose::where('id', 'like', '%' . Session::get('purpose_search') . '%')
            ->orderBy(Session::get('purpose_field'), Session::get('purpose_sort'))->paginate(8);
        return view('purpose.list', ['purposes' => $purposes]);
    }

    public function getUpdate($id)
    {
        return view('purpose.update', ['purpose' => Purpose::find($id)]);
    }

    public function postUpdate($id)
    {
        $purpose = Purpose::find($id);
        $rules = ["PurposeName" => "required"];
        if ($purpose->PurposeName != Input::get('PurposeName'))
            $rules += ['PurposeName' => 'required|unique:purposes'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $purpose->PurposeCode = Input::get('PurposeCode');
        $purpose->PurposeName = Input::get('PurposeName');
        $purpose->save();
        return ['url' => 'purpose/list'];
    }

    public function getCreate()
    {
        return view('purpose.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "PurposeName" => "required|unique:purposes",
            "PurposeCode" => "required|unique:purposes"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $purpose = new Purpose();
        $purpose->PurposeCode = Input::get('PurposeCode');
        $purpose->PurposeName = Input::get('PurposeName');
        $purpose->save();
        return ['url' => 'purpose/list'];
    }

    public function getDelete($id)
    {
        Purpose::destroy($id);
        return Redirect('purpose/list');
    }

}