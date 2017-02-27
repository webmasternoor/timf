<?php
namespace App\Http\Controllers;

use App\Configurationsav;
use App\Product;
use App\Status;
use App\Statuseser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ConfigurationsavController extends Controller
{
    public function getIndex()
    {
        return view('configurationsav.index');
    }

    public function getList()
    {
        Session::put('configurationsav_search', Input::has('ok') ? Input::get('search') : (Session::has('configurationsav_search') ? Session::get('configurationsav_search') : ''));
        Session::put('configurationsav_field', Input::has('field') ? Input::get('field') : (Session::has('configurationsav_field') ? Session::get('configurationsav_field') : 'id'));
        Session::put('configurationsav_sort', Input::has('sort') ? Input::get('sort') : (Session::has('configurationsav_sort') ? Session::get('configurationsav_sort') : 'asc'));
        $configurationsavs = Configurationsav::where('id', 'like', '%' . Session::get('configurationsav_search') . '%')
            ->orderBy(Session::get('configurationsav_field'), Session::get('configurationsav_sort'))->paginate(8);

        $configurationsavsInfo = Configurationsav::select('*')
            -> join('products', 'configurationsavs.ProductID', '=','products.id')
            -> join('statuses', 'configurationsavs.IsActive', '=','statuses.id')
            -> join('statusesers', 'configurationsavs.MultipleSavings', '=','statusesers.id')
//            ->where('id', 'like', '%' . Session::get('configurationsav_search') . '%')
//            ->orderBy(Session::get('configurationsav_field'), Session::get('configurationsav_sort'))
            ->paginate(8);

        return view('configurationsav.list', ['configurationsavs' => $configurationsavs])->with('configurationsavsInfo',$configurationsavsInfo);
    }

    public function getUpdate($id)
    {
        $StatusInfo =[''=>'--select--'] + Status::lists('Status','id')->all();
        $StatuserInfo =[''=>'--select--'] + Statuseser::lists('name','id')->all();
        $ProductInfo =[''=>'--select--'] + Product::lists('ProductName','id')->all();

        return view('configurationsav.update', ['configurationsav' => Configurationsav::find($id)])->with('StatusInfo',$StatusInfo)->with('ProductInfo',$ProductInfo)
            ->with('StatuserInfo',$StatuserInfo);
    }

    public function postUpdate($id)
    {
        $configurationsav = Configurationsav::find($id);
        $rules = ["ProductID" => "required"];
        if ($configurationsav->ProductID != Input::get('ProductID'))
            $rules += ['ProductID' => 'required'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }

        $configurationsav->ProductID = Input::get('ProductID');
        $configurationsav->InterestPercentage = Input::get('InterestPercentage');
        $configurationsav->EffectiveFrom = Input::get('EffectiveFrom');
        $configurationsav->EffectiveTo = Input::get('EffectiveTo');
        $configurationsav->IsActive = Input::get('IsActive');
        $configurationsav->MultipleSavings = Input::get('MultipleSavings');
        $configurationsav->WithdrawlFacility = Input::get('WithdrawlFacility');
        $configurationsav->MinAmount = Input::get('MinAmount');
        $configurationsav->MaxAmount = Input::get('MaxAmount');
        $configurationsav->MinBalance = Input::get('MinBalance');
        $configurationsav->MaxDueCycle = Input::get('MaxDueCycle');
        $configurationsav->save();
        return ['url' => 'configurationsav/list'];
    }

    public function getCreate()
    {
        $StatusInfo =[''=>'--select--'] + Status::lists('Status','id')->all();
        $StatuserInfo =[''=>'--select--'] + Statuseser::lists('name','id')->all();
        $ProductInfo =[''=>'--select--'] + Product::lists('ProductName','id')->all();
        return view('configurationsav.create')->with('StatusInfo',$StatusInfo)->with('ProductInfo',$ProductInfo) ->with('StatuserInfo',$StatuserInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ProductID" => "required"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $configurationsav = new Configurationsav();
        $configurationsav->ProductID = Input::get('ProductID');
        $configurationsav->InterestPercentage = Input::get('InterestPercentage');
        $configurationsav->EffectiveFrom = Input::get('EffectiveFrom');
        $configurationsav->EffectiveTo = Input::get('EffectiveTo');
        $configurationsav->IsActive = Input::get('IsActive');
        $configurationsav->MultipleSavings = Input::get('MultipleSavings');
        $configurationsav->WithdrawlFacility = Input::get('WithdrawlFacility');
        $configurationsav->MinAmount = Input::get('MinAmount');
        $configurationsav->MaxAmount = Input::get('MaxAmount');
        $configurationsav->MinBalance = Input::get('MinBalance');
        $configurationsav->MaxDueCycle = Input::get('MaxDueCycle');
        $configurationsav->save();
        return ['url' => 'configurationsav/list'];
    }

    public function getDelete($id)
    {
        Configurationsav::destroy($id);
        return Redirect('configurationsav/list');
    }

}