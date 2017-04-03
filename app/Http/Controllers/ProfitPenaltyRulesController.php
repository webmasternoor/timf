<?php
namespace App\Http\Controllers;

use App\Savingsprofitpenaltyrule;
use App\Frequency;
use App\Product;
use App\Producttype;
use App\Servicechargcalculationmethod;
use App\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProfitPenaltyRulesController extends Controller
{
    public function getIndex()
    {
        return view('profitpenalty.index');
    }

    public function getList()
    {
        Session::put('profitpenalty_search', Input::has('ok') ? Input::get('search') : (Session::has('profitpenalty_search') ? Session::get('profitpenalty_search') : ''));
        Session::put('profitpenalty_field', Input::has('field') ? Input::get('field') : (Session::has('profitpenalty_field') ? Session::get('profitpenalty_field') : 'ProductID'));
        Session::put('profitpenalty_sort', Input::has('sort') ? Input::get('sort') : (Session::has('profitpenalty_sort') ? Session::get('profitpenalty_sort') : 'asc'));
        $products = Savingsprofitpenaltyrule::where('ProductID', 'like', '%' . Session::get('profitpenalty_search') . '%')
            ->orderBy(Session::get('profitpenalty_field'), Session::get('profitpenalty_sort'))->paginate(8);
        $profitpenalty_info = Savingsprofitpenaltyrule::select('*')
            -> join('products', 'savingsprofitpenaltyrules.ProductID', '=', 'products.id')
            -> join('statuses', 'savingsprofitpenaltyrules.ProductID', '=', 'statuses.id')
            -> join('servicechargcalculationmethods', 'savingsprofitpenaltyrules.ServiceChargeCalculationMethod', '=', 'servicechargcalculationmethods.id')
//            ->where('ProductID', 'like', '%' . Session::get('profitpenalty_search') . '%')
//            ->orderBy(Session::get('profitpenalty_field'), Session::get('profitpenalty_sort'))
//            ->select('*')
            ->paginate(8);
        return view('profitpenalty.list', ['products' => $products])->with('profitpenalty_info',$profitpenalty_info);
    }

    public function getUpdate($id)
    {
        $ProductInfo = ['' => '--select--'] + Product::lists('ProductNameBanglaFull', 'id')->all();
        $status = ['' => '--select--'] + Status::lists('Status', 'id')->all();
        $Methode = ['' => '--select--'] + Servicechargcalculationmethod::lists('Methods', 'id')->all();
        return view('profitpenalty.update', ['product' => Product::find($id)])->with('ProductInfo',$ProductInfo)->with('status',$status)
            ->with('Methode',$Methode);
    }

    public function postUpdate($id)
    {
        $SavingProfit = Savingsprofitpenaltyrule::find($id);
        $rules = ["ProductID" => "required"];
        if ($product->ServiceChargeCalculationMethod != Input::get('ServiceChargeCalculationMethod'))
            $rules += ['ProductID' => 'required|unique:products'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $SavingProfit->ProductID = Input::get('ProductID');
        $SavingProfit->ServiceChargeCalculationMethod = Input::get('ServiceChargeCalculationMethod');
        $SavingProfit->ServiceChargeCalculationDuration = Input::get('ServiceChargeCalculationDuration');
        $SavingProfit->LoanExpirayMemberEligibleforSavingsProfit = Input::get('LoanExpirayMemberEligibleforSavingsProfit');
        $SavingProfit->FiscalPeriodStartsMonth = Input::get('FiscalPeriodStartsMonth');
        $SavingProfit->FiscalPeriodEndsMonth = Input::get('FiscalPeriodEndsMonth');
        $SavingProfit->RulesEffectiveFrom = Input::get('RulesEffectiveFrom');
        $SavingProfit->RulesEffectiveTo = Input::get('RulesEffectiveTo');
        $SavingProfit->EffectiveFormula = Input::get('EffectiveFormula');
        $SavingProfit->save();
        return ['url' => 'product/list'];
    }

    public function getCreate()
    {
        $ProductInfo = ['' => '--select--'] + Product::lists('ProductNameBanglaFull', 'id')->all();
        $status = ['' => '--select--'] + Status::lists('Status', 'id')->all();
        $Methode = ['' => '--select--'] + Servicechargcalculationmethod::lists('Methods', 'id')->all();
        return view('profitpenalty.create')->with('ProductInfo',$ProductInfo)->with('status',$status)->with('Methode',$Methode);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ProductID" => "required|unique:products",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $SavingProfit = new Savingsprofitpenaltyrule();
        $SavingProfit->ProductID = Input::get('ProductID');
        $SavingProfit->ServiceChargeCalculationMethod = Input::get('ServiceChargeCalculationMethod');
        $SavingProfit->ServiceChargeCalculationDuration = Input::get('ServiceChargeCalculationDuration');
        $SavingProfit->LoanExpirayMemberEligibleforSavingsProfit = Input::get('LoanExpirayMemberEligibleforSavingsProfit');
        $SavingProfit->FiscalPeriodStartsMonth = Input::get('FiscalPeriodStartsMonth');
        $SavingProfit->FiscalPeriodEndsMonth = Input::get('FiscalPeriodEndsMonth');
        $SavingProfit->RulesEffectiveFrom = Input::get('RulesEffectiveFrom');
        $SavingProfit->RulesEffectiveTo = Input::get('RulesEffectiveTo');
        $SavingProfit->EffectiveFormula = Input::get('EffectiveFormula');
        $SavingProfit->save();
        return ['url' => 'profitpenalty/list'];
    }

    public function getDelete($id)
    {
        Savingsprofitpenaltyrule::destroy($id);
        return Redirect('profitpenalty/list');
    }

}