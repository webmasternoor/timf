<?php
namespace App\Http\Controllers;

use App\District;
use App\Division;
use App\Postoffice;
use App\Thana;
use App\Union;
use App\Ward;
use App\Zone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ZoneController extends Controller
{
    public function getIndex()
    {
        return view('zone.index');
    }

    public function getList()
    {
        Session::put('zone_search', Input::has('ok') ? Input::get('search') : (Session::has('zone_search') ? Session::get('zone_search') : ''));
        Session::put('zone_field', Input::has('field') ? Input::get('field') : (Session::has('zone_field') ? Session::get('zone_field') : 'ZoneName'));
        Session::put('zone_sort', Input::has('sort') ? Input::get('sort') : (Session::has('zone_sort') ? Session::get('zone_sort') : 'asc'));
        $zones = Zone::where('id', 'like', '%' . Session::get('zone_search') . '%')
            ->orderBy(Session::get('zone_field'), Session::get('zone_sort'))->paginate(8);
        return view('zone.list', ['zones' => $zones]);
    }

    public function getUpdate($id)
    {
        $ThanaInfo = Thana::lists('ThanaName', 'id');
        $DivisionInfo = Division::lists('DivisionName', 'id');
        $UnionInfo = Union::lists('UnionName', 'id');
        $WardInfo = Ward::lists('WardName', 'id');
        $PostOfficeInfo = Postoffice::lists('PostofficeName', 'id');
        $district_info = District::lists('DistrictName', 'id');
        return view('zone.update',['zone' => Zone::find($id)])->with('ThanaInfo',$ThanaInfo)->with('district_info',$district_info)->with('DivisionInfo',$DivisionInfo)
            ->with('UnionInfo',$UnionInfo)->with('PostOfficeInfo',$PostOfficeInfo)->with('WardInfo',$WardInfo);
//        $thana_info = Thana::lists('ThanaName', 'id');
//        $district_info = District::lists('DistrictName', 'id');
//        return view('zone.update', ['zone' => Zone::find($id)])->with('thana_info', $thana_info)->with('district_info', $district_info);
    }

    public function postUpdate($id)
    {
        $zone = Zone::find($id);
        $rules = ["ZoneName" => "required"];
        if ($zone->ZoneName != Input::get('ZoneName'))
            $rules += ['ZoneName' => 'required|unique:zones'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone->ZoneName = Input::get('ZoneName');
        $zone->ZoneCode = Input::get('ZoneCode');
        $zone->ZoneAddress = Input::get('ZoneAddress');
        $zone->ZoneMobileNo = Input::get('ZoneMobileNo');
        $zone->ZoneThanaId = Input::get('ZoneThanaId');
        $zone->ZoneDistrictId = Input::get('ZoneDistrictId');
        $zone->ZoneDivisionId = Input::get('ZoneDivisionId');
        $zone->ZoneUnionId = Input::get('ZoneUnionId');
        $zone->ZoneWardId = Input::get('ZoneWardId');
        $zone->ZonePostOfficeId = Input::get('ZonePostOfficeId');
        $zone->ZoneEmail = Input::get('ZoneEmail');
        $zone->save();
        return ['url' => 'zone/list'];
    }

    public function getCreate()
    {
        $ThanaInfo = Thana::lists('ThanaName', 'id');
        $DivisionInfo = Division::lists('DivisionName', 'id');
        $UnionInfo = Union::lists('UnionName', 'id');
        $WardInfo = Ward::lists('WardName', 'id');
        $PostOfficeInfo = Postoffice::lists('PostofficeName', 'id');
        $district_info = District::lists('DistrictName', 'id');
        return view('zone.create')->with('ThanaInfo',$ThanaInfo)->with('district_info',$district_info)->with('DivisionInfo',$DivisionInfo)
            ->with('UnionInfo',$UnionInfo)->with('PostOfficeInfo',$PostOfficeInfo)->with('WardInfo',$WardInfo);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ZoneName" => "required|unique:zones"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone = new Zone();
        $zone->ZoneName = Input::get('ZoneName');
        $zone->ZoneCode = Input::get('ZoneCode');
        $zone->ZoneAddress = Input::get('ZoneAddress');
        $zone->ZoneMobileNo = Input::get('ZoneMobileNo');
        $zone->ZoneThanaId = Input::get('ZoneThanaId');
        $zone->ZoneDistrictId = Input::get('ZoneDistrictId');
        $zone->ZoneDivisionId = Input::get('ZoneDivisionId');
        $zone->ZoneUnionId = Input::get('ZoneUnionId');
        $zone->ZoneWardId = Input::get('ZoneWardId');
        $zone->ZonePostOfficeId = Input::get('ZonePostOfficeId');
        $zone->ZoneEmail = Input::get('ZoneEmail');
        $zone->save();
        return ['url' => 'zone/list'];
    }

    public function getDelete($id)
    {
        Zone::destroy($id);
        return Redirect('zone/list');
    }

}