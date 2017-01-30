<?php
namespace App\Http\Controllers;

use App\Saving1;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Saving1Controller extends Controller
{
    public function getIndex()
    {
        return view('saving1.index');
    }

    public function getList()
    {
        Session::put('saving1_search', Input::has('ok') ? Input::get('search') : (Session::has('saving1_search') ? Session::get('saving1_search') : ''));
        Session::put('saving1_field', Input::has('field') ? Input::get('field') : (Session::has('saving1_field') ? Session::get('saving1_field') : 'Saving1yName'));
        Session::put('saving1_sort', Input::has('sort') ? Input::get('sort') : (Session::has('saving1_sort') ? Session::get('saving1_sort') : 'asc'));
        $saving1s = Saving1::where('id', 'like', '%' . Session::get('saving1_search') . '%')
            ->orderBy(Session::get('saving1_field'), Session::get('saving1_sort'))->paginate(8);
        return view('saving1.list', ['saving1s' => $saving1s]);
    }

    public function getUpdate($id)
    {
        return view('saving1.update', ['saving1' => Saving1::find($id)]);
    }

    public function postUpdate($id)
    {
        $saving1 = Saving1::find($id);
        $rules = ["Saving1yCode" => "required"];
        if ($saving1->Saving1yName != Input::get('Saving1yName'))
            $rules += ['Saving1yName' => 'required|unique:saving1s'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $saving1->Saving1yName = Input::get('Saving1yName');
        $saving1->Saving1yCode = Input::get('Saving1yCode');
        $saving1->save();
        return ['url' => 'saving1/list'];
    }

    public function getCreate()
    {
        return view('saving1.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "Saving1yName" => "required|unique:saving1s",
            "Saving1yCode" => "required|unique:saving1s",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $saving1 = new Saving1();
        $saving1->Saving1yName = Input::get('Saving1yName');
        $saving1->Saving1yCode = Input::get('Saving1yCode');
        $saving1->save();
        return ['url' => 'saving1/list'];
    }

    public function getDelete($id)
    {
        Saving1::destroy($id);
        return Redirect('saving1/list');
    }

}