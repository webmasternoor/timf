<?php
namespace App\Http\Controllers;

use App\Cashinflow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CashinflowController extends Controller
{
    public function getIndex()
    {
        return view('cashinflow.index');
    }

    public function getList()
    {
        Session::put('cashinflow_search', Input::has('ok') ? Input::get('search') : (Session::has('cashinflow_search') ? Session::get('cashinflow_search') : ''));
        Session::put('cashinflow_field', Input::has('field') ? Input::get('field') : (Session::has('cashinflow_field') ? Session::get('cashinflow_field') : 'id'));
        Session::put('cashinflow_sort', Input::has('sort') ? Input::get('sort') : (Session::has('cashinflow_sort') ? Session::get('cashinflow_sort') : 'asc'));
        $cashinflows = Cashinflow::where('id', 'like', '%' . Session::get('cashinflow_search') . '%')
            ->orderBy(Session::get('cashinflow_field'), Session::get('cashinflow_sort'))->paginate(8);
        return view('cashinflow.list', ['cashinflows' => $cashinflows]);
    }

    public function getUpdate($id)
    {
        return view('cashinflow.update', ['cashinflow' => Cashinflow::find($id)]);
    }

    public function postUpdate($id)
    {
        $cashinflow = Cashinflow::find($id);
        $rules = ["TotalIncomeDescription" => "required"];
        if ($cashinflow->TotalIncomeDescription != Input::get('TotalIncomeDescription'))
            $rules += ['TotalIncomeDescription' => 'required|unique:cashinflows'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $cashinflow->TotalIncomeDescription = Input::get('TotalIncomeDescription');
        $cashinflow->save();
        return ['url' => 'cashinflow/list'];
    }

    public function getCreate()
    {
        return view('cashinflow.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "TotalIncomeDescription" => "required|unique:cashinflows"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $cashinflow = new Cashinflow();
        $cashinflow->TotalIncomeDescription = Input::get('TotalIncomeDescription');
        $cashinflow->save();
        return ['url' => 'cashinflow/list'];
    }

    public function getDelete($id)
    {
        Cashinflow::destroy($id);
        return Redirect('cashinflow/list');
    }

}