<?php
namespace App\Http\Controllers;

use App\Product;
use App\Producttype;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('product.index');
    }

    public function getList()
    {
        Session::put('product_search', Input::has('ok') ? Input::get('search') : (Session::has('product_search') ? Session::get('product_search') : ''));
        Session::put('product_field', Input::has('field') ? Input::get('field') : (Session::has('product_field') ? Session::get('product_field') : 'id'));
        Session::put('product_sort', Input::has('sort') ? Input::get('sort') : (Session::has('product_sort') ? Session::get('product_sort') : 'asc'));
        $products = Product::where('id', 'like', '%' . Session::get('product_search') . '%')
            ->orderBy(Session::get('product_field'), Session::get('product_sort'))->paginate(8);
        return view('product.list', ['products' => $products]);
    }

    public function getUpdate($id)
    {
        $ProductInfo = Producttype::lists('ProducttypeyName', 'id');
        return view('product.update', ['product' => Product::find($id)])->with('ProductInfo',$ProductInfo);
    }

    public function postUpdate($id)
    {
        $product = Product::find($id);
        $rules = ["ProductName" => "required"];
        if ($product->ProductName != Input::get('ProductName'))
            $rules += ['ProductName' => 'required|unique:products'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $product->ProductCode = Input::get('ProductCode');
        $product->ProductName = Input::get('ProductName');
        $product->ProductNameEng = Input::get('ProductNameEng');
        $product->ProductNameBanglaShort = Input::get('ProductNameBanglaShort');
        $product->ProductNameBanglaFull = Input::get('ProductNameBanglaFull');
        $product->ProductType = Input::get('ProductType');
        $product->ServiceChargeRate = Input::get('ServiceChargeRate');
        $product->Duration = Input::get('Duration');
        $product->MainProductName = Input::get('MainProductName');
        $product->MainItemName = Input::get('MainItemName');
        $product->LoanInstallation = Input::get('LoanInstallation');
        $product->InstallationServiceCharge = Input::get('InstallationServiceCharge');
        $product->SavingInstallment = Input::get('SavingInstallment');
        $product->MinimumLimit = Input::get('MinimumLimit');
        $product->MaximumLimit = Input::get('MaximumLimit');
        $product->ServiceChargeCalculationMethod = Input::get('ServiceChargeCalculationMethod');
        $product->PaymentFrequency = Input::get('PaymentFrequency');
        $product->InsuranceItemCode = Input::get('InsuranceItemCode');
        $product->InsuranceItemRate = Input::get('InsuranceItemRate');
        $product->save();
        return ['url' => 'product/list'];
    }

    public function getCreate()
    {
        $ProductInfo = ['' => '--select--'] + Producttype::lists('ProducttypeyName', 'id')->all();
        return view('product.create')->with('ProductInfo',$ProductInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ProductCode" => "required|unique:products",
            "ProductName" => "required|unique:products"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $product = new Product();
        $product->ProductCode = Input::get('ProductCode');
        $product->ProductName = Input::get('ProductName');
        $product->ProductNameEng = Input::get('ProductNameEng');
        $product->ProductNameBanglaShort = Input::get('ProductNameBanglaShort');
        $product->ProductNameBanglaFull = Input::get('ProductNameBanglaFull');
        $product->ProductType = Input::get('ProductType');
        $product->ServiceChargeRate = Input::get('ServiceChargeRate');
        $product->Duration = Input::get('Duration');
        $product->MainProductName = Input::get('MainProductName');
        $product->MainItemName = Input::get('MainItemName');
        $product->LoanInstallation = Input::get('LoanInstallation');
        $product->InstallationServiceCharge = Input::get('InstallationServiceCharge');
        $product->SavingInstallment = Input::get('SavingInstallment');
        $product->MinimumLimit = Input::get('MinimumLimit');
        $product->MaximumLimit = Input::get('MaximumLimit');
        $product->ServiceChargeCalculationMethod = Input::get('ServiceChargeCalculationMethod');
        $product->PaymentFrequency = Input::get('PaymentFrequency');
        $product->InsuranceItemCode = Input::get('InsuranceItemCode');
        $product->InsuranceItemRate = Input::get('InsuranceItemRate');
        $product->save();
        return ['url' => 'product/list'];
    }

    public function getDelete($id)
    {
        Product::destroy($id);
        return Redirect('product/list');
    }

}