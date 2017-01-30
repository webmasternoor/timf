<?php
namespace App\Http\Controllers;

use App\Cashoutflow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CashoutflowController extends Controller
{
    public function getIndex()
    {
        return view('cashoutflow.index');
    }

    public function getList()
    {
        Session::put('cashoutflow_search', Input::has('ok') ? Input::get('search') : (Session::has('cashoutflow_search') ? Session::get('cashoutflow_search') : ''));
        Session::put('cashoutflow_field', Input::has('field') ? Input::get('field') : (Session::has('cashoutflow_field') ? Session::get('cashoutflow_field') : 'id'));
        Session::put('cashoutflow_sort', Input::has('sort') ? Input::get('sort') : (Session::has('cashoutflow_sort') ? Session::get('cashoutflow_sort') : 'asc'));
        $cashoutflows = Cashoutflow::where('TotalExpenditureDescription', 'like', '%' . Session::get('cashoutflow_search') . '%')
            ->orderBy(Session::get('cashoutflow_field'), Session::get('cashoutflow_sort'))->paginate(8);
        return view('cashoutflow.list', ['cashoutflows' => $cashoutflows]);
    }

    public function getUpdate($id)
    {
        return view('cashoutflow.update', ['cashoutflow' => Cashoutflow::find($id)]);
    }

    public function postUpdate($id)
    {
        $cashoutflow = Cashoutflow::find($id);
        $rules = ["TotalExpenditureDescription" => "required"];
        if ($cashoutflow->TotalExpenditureDescription != Input::get('TotalExpenditureDescription'))
            $rules += ['TotalExpenditureDescription' => 'required|unique:cashoutflows'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $cashoutflow->TotalExpenditureDescription = Input::get('TotalExpenditureDescription');
        $cashoutflow->save();
        return ['url' => 'cashoutflow/list'];
    }

    public function getCreate()
    {
        return view('cashoutflow.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "TotalExpenditureDescription" => "required|unique:cashoutflows"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $cashoutflow = new Cashoutflow();
        $cashoutflow->TotalExpenditureDescription = Input::get('TotalExpenditureDescription');
        $cashoutflow->save();
        return ['url' => 'cashoutflow/list'];
    }

    public function getDelete($id)
    {
        Cashoutflow::destroy($id);
        return Redirect('cashoutflow/list');
    }

}