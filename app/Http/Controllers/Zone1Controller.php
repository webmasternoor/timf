<?php
namespace App\Http\Controllers;

use App\Brn;
use App\District;
use App\Division;
use App\Postoffice;
use App\Thana;
use App\Union;
use App\Ward;
use App\Zone1;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Zone1Controller extends Controller
{
    public function getIndex()
    {
        return view('zone1.index');
    }

    public function getList()
    {
        Session::put('zone1_search', Input::has('ok') ? Input::get('search') : (Session::has('zone1_search') ? Session::get('zone1_search') : ''));
        Session::put('zone1_field', Input::has('field') ? Input::get('field') : (Session::has('zone1_field') ? Session::get('zone1_field') : 'id'));
        Session::put('zone1_sort', Input::has('sort') ? Input::get('sort') : (Session::has('zone1_sort') ? Session::get('zone1_sort') : 'asc'));
        $zone1s = Zone1::where('SomitiName', 'like', '%' . Session::get('zone1_search') . '%')
            ->orderBy(Session::get('zone1_field'), Session::get('zone1_sort'))->paginate(8);
        return view('zone1.list', ['zone1s' => $zone1s]);
    }

    public function getUpdate($id)
    {
        $ThanaInfo = [''=>'--select--'] + Thana::lists('ThanaName', 'id')->all();
        $DivisionInfo = [''=>'--select--'] + Division::lists('DivisionName', 'id')->all();
        $UnionInfo = [''=>'--select--'] + Union::lists('UnionName', 'id')->all();
        $WardInfo = [''=>'--select--'] + Ward::lists('WardName', 'id')->all();
        $PostOfficeInfo = [''=>'--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
        $DistrictInfo = [''=>'--select--'] + District::lists('DistrictName', 'id')->all();
        $BranchInfo= [''=>'--select--'] + Brn::lists('BranchName','id')->all();
        return view('zone1.update', ['zone1' => Zone1::find($id)])->with('DivisionInfo',$DivisionInfo)->with('DistrictInfo',$DistrictInfo)
            ->with('ThanaInfo',$ThanaInfo)->with('UnionInfo',$UnionInfo)->with('WardInfo',$WardInfo)
            ->with('PostOfficeInfo',$PostOfficeInfo)->with('BranchInfo',$BranchInfo);
    }

    public function postUpdate($id)
    {
        $zone1 = Zone1::find($id);
        $rules = ["SomitiName" => "required"];
        if ($zone1->SomitiName != Input::get('SomitiName'))
            $rules += ['SomitiName' => 'required|unique:zone1s'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone1->SomitiName = Input::get('SomitiName');
        $zone1->SomitiAddress = Input::get('SomitiAddress');
        $zone1->SamitiOpenDate = Input::get('SamitiOpenDate');
        $zone1->SamitiEndDate = Input::get('SamitiEndDate');
        $zone1->BranchId = Input::get('BranchId');
        $zone1->BranchDivisionId = Input::get('BranchDivisionId');
        $zone1->BranchDistrictId = Input::get('BranchDistrictId');
        $zone1->BranchThanaId = Input::get('BranchThanaId');
        $zone1->BranchUnionId = Input::get('BranchUnionId');
        $zone1->BranchPostOfficeId = Input::get('BranchPostOfficeId');
        $zone1->BranchWardId = Input::get('BranchWardId');
        $zone1->SomitiCode = Input::get('SomitiCode');
        $zone1->save();
        return ['url' => 'zone1/list'];
    }

    public function getCreate()
    {
        $ThanaInfo = [''=>'--select--'] + Thana::lists('ThanaName', 'id')->all();
        $DivisionInfo = [''=>'--select--'] + Division::lists('DivisionName', 'id')->all();
        $UnionInfo = [''=>'--select--'] + Union::lists('UnionName', 'id')->all();
        $WardInfo = [''=>'--select--'] + Ward::lists('WardName', 'id')->all();
        $PostOfficeInfo = [''=>'--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
        $DistrictInfo = [''=>'--select--'] + District::lists('DistrictName', 'id')->all();
        $BranchInfo= [''=>'--select--'] + Brn::lists('BranchName','id')->all();
        return view('zone1.create')->with('DivisionInfo',$DivisionInfo)->with('DistrictInfo',$DistrictInfo)
            ->with('ThanaInfo',$ThanaInfo)->with('UnionInfo',$UnionInfo)->with('WardInfo',$WardInfo)
            ->with('PostOfficeInfo',$PostOfficeInfo)->with('BranchInfo',$BranchInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "SomitiName" => "required|unique:zone1s"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone1 = new Zone1();
        $zone1->SomitiName = Input::get('SomitiName');
        $zone1->SomitiAddress = Input::get('SomitiAddress');
        $zone1->SamitiOpenDate = Input::get('SamitiOpenDate');
        $zone1->SamitiEndDate = Input::get('SamitiEndDate');
        $zone1->BranchId = Input::get('BranchId');
        $zone1->BranchDivisionId = Input::get('BranchDivisionId');
        $zone1->BranchDistrictId = Input::get('BranchDistrictId');
        $zone1->BranchThanaId = Input::get('BranchThanaId');
        $zone1->BranchUnionId = Input::get('BranchUnionId');
        $zone1->BranchPostOfficeId = Input::get('BranchPostOfficeId');
        $zone1->BranchWardId = Input::get('BranchWardId');
        $zone1->SomitiCode = Input::get('SomitiCode');
        $zone1->save();
        return ['url' => 'zone1/list'];
    }

    public function getDelete($id)
    {
        Zone1::destroy($id);
        return Redirect('zone1/list');
    }

}