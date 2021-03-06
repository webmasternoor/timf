<?php
namespace App\Http\Controllers;

use App\Investment;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class InvestmentController extends Controller
{
    public function getIndex()
    {
        return view('investment.index');
    }

    public function getList()
    {
        Session::put('investment_search', Input::has('ok') ? Input::get('search') : (Session::has('investment_search') ? Session::get('investment_search') : ''));
        Session::put('investment_field', Input::has('field') ? Input::get('field') : (Session::has('investment_field') ? Session::get('investment_field') : 'id'));
        Session::put('investment_sort', Input::has('sort') ? Input::get('sort') : (Session::has('investment_sort') ? Session::get('investment_sort') : 'asc'));
        $investments = Investment::where('id', 'like', '%' . Session::get('investment_search') . '%')
            ->orderBy(Session::get('investment_field'), Session::get('investment_sort'))->paginate(8);
        return view('investment.list', ['investments' => $investments]);
    }

    public function getUpdate($id)
    {
        $Product_info = Product::lists('ProductName', 'id');
        return view('investment.update', ['investment' => Investment::find($id)],['Product_info'=>$Product_info]);
    }

    public function postUpdate($id)
    {
        $investment = Investment::find($id);
        /*$rules = ["InvestmentyCode" => "required"];
        if ($investment->InvestmentyName != Input::get('InvestmentyName'))
            $rules += ['InvestmentyName' => 'required|unique:investments'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $investment->Memberid = Input::get('Memberid');
        $investment->SavingAmount = Input::get('SavingAmount');
        $investment->TransactionDate = Input::get('TransactionDate');
        $investment->ProductId = Input::get('ProductId');
        $investment->TransactionEntryDate = Input::get('TransactionEntryDate');
        $investment->save();
        return ['url' => 'investment/list'];
    }

    public function getCreate()
    {
        $Product_info = Product::lists('ProductName', 'id');
        return view('investment.create',compact('Product_info'));
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            "InvestmentyName" => "required|unique:investments",
            "InvestmentyCode" => "required|unique:investments",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $investment = new Investment();
        $investment->Memberid = Input::get('Memberid');
        $investment->SavingAmount = Input::get('SavingAmount');
        $investment->TransactionDate = Input::get('TransactionDate');
        $investment->ProductId = Input::get('ProductId');
        $investment->TransactionEntryDate = Input::get('TransactionEntryDate');
        $investment->save();
        return ['url' => 'investment/list'];
    }

    public function getDelete($id)
    {
        Investment::destroy($id);
        return Redirect('investment/list');
    }

}