<?php
namespace App\Http\Controllers;

use App\Product;
use App\Saving1;
use App\Member;
use App\Zone1;
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
        Session::put('saving1_field', Input::has('field') ? Input::get('field') : (Session::has('saving1_field') ? Session::get('saving1_field') : 'id'));
        Session::put('saving1_sort', Input::has('sort') ? Input::get('sort') : (Session::has('saving1_sort') ? Session::get('saving1_sort') : 'asc'));
        $saving1s = Saving1::where('id', 'like', '%' . Session::get('saving1_search') . '%')
            ->orderBy(Session::get('saving1_field'), Session::get('saving1_sort'))
            ->paginate(8);

        $saving1sInfo = Saving1::select('*')
            -> join('members', 'saving1s.MemberId', '=','members.id')
            -> join('products', 'saving1s.ProductId', '=','products.id')
//            ->where('id', 'like', '%' . Session::get('saving1_search') . '%')
//            ->orderBy(Session::get('saving1_field'), Session::get('saving1_sort'))
            ->paginate(8);
        return view('saving1.list', ['saving1s' => $saving1s])->with('saving1sInfo',$saving1sInfo);
    }

    public function getUpdate($id)
    {
        $Member_info = [''=>'--select--'] +  Member::lists('FullNameBangla', 'id')->all();
        $Product_info =  [''=>'--select--'] + Product::lists('ProductName', 'id')->all();
//        $Product_info = Product::lists('ProductName', 'id');
        return view('saving1.update', ['saving1' => Saving1::find($id)],['Product_info'=>$Product_info])->with('Member_info',$Member_info);
    }

    public function postUpdate($id)
    {
        $saving1 = Saving1::find($id);
        $rules = ["ProductId" => "required"];
        if ($saving1->MemberId != Input::get('MemberId'))
            $rules += ['MemberId' => 'required'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
//        $saving1->ProductId = Input::get('ProductId');
        $saving1->MemberId = Input::get('MemberId');
        $saving1->SavingAmount = Input::get('SavingAmount');
        $saving1->WithdrawAmount = Input::get('WithdrawAmount');
        $saving1->TransactionDate = Input::get('TransactionDate');
        $saving1->EntryDate = Input::get('EntryDate');
        $saving1->save();
        return ['url' => 'saving1/list'];
    }

    public function getCreate()
    {
        $Member_info = [''=>'--select--'] +  Member::lists('FullNameBangla', 'id')->all();
        $Product_info =  [''=>'--select--'] + Product::lists('ProductName', 'id')->all();
//        $Product_info = Product::lists('ProductName', 'id');
        //return view('saving1.create',compact('Product_info'));
        return view('saving1.create')->with('Product_info', $Product_info)->with('Member_info', $Member_info);
    }

    public function getCreate1()
    {
        $Member_info = [''=>'--select--'] +  Member::lists('FullNameBangla', 'id')->all();
        $Product_info =  [''=>'--select--'] + Product::lists('ProductName', 'id')->all();
        $SamityId =  [''=>'--select--'] + Zone1::lists('SomitiName', 'id')->all();
//        $Product_info = Product::lists('ProductName', 'id');
        //return view('saving1.create',compact('Product_info'));
        return view('saving1.create1')->with('Product_info', $Product_info)->with('Member_info', $Member_info)->with('SamityId',$SamityId);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ProductId" => "required",
            "MemberId" => "required",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $saving1 = new Saving1();
        $saving1->ProductId = Input::get('ProductId');
        $saving1->MemberId = Input::get('MemberId');
        $saving1->SavingAmount = Input::get('SavingAmount');
        $saving1->WithdrawAmount = Input::get('WithdrawAmount');
        $saving1->SavingAmount = Input::get('SavingAmount');
        $saving1->Balance = Input::get('Currentbalance');
        $saving1->TransactionDate = Input::get('TransactionDate');
        $saving1->EntryDate = Input::get('EntryDate');
        $saving1->Remarks = Input::get('Remarks');
        $saving1->Flag = Input::get('Flage');
        $saving1->save();
        return ['url' => 'saving1/list'];
    }

    public function getDelete($id){
        Saving1::destroy($id);
        return Redirect('saving1/list');
    }

}