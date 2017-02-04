<?php
namespace App\Http\Controllers;

use App\Division;
use App\Postoffice;
use App\Union;
use App\Ward;
use App\Zone;
use DB;
use App\District;
use App\Thana;
use App\Brn;
use App\Area;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BrnController extends Controller
{
    public function getIndex()
    {
        return view('brn.index');
    }

    public function getList()
    {
        Session::put('brn_search', Input::has('ok') ? Input::get('search') : (Session::has('brn_search') ? Session::get('brn_search') : ''));
        Session::put('brn_field', Input::has('field') ? Input::get('field') : (Session::has('brn_field') ? Session::get('brn_field') : 'id'));
        Session::put('brn_sort', Input::has('sort') ? Input::get('sort') : (Session::has('brn_sort') ? Session::get('brn_sort') : 'asc'));
        $brns = Brn::join('areas', 'brns.AreaId', '=', 'areas.AreaName')->where('id', 'like', '%' . Session::get('brn_search') . '%')
            ->orderBy(Session::get('brn_field'), Session::get('brn_sort'))->paginate(8);
        $result = User
            ::join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.id', 'contacts.phone', 'orders.price')
            ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
            ->get();
        $area_data=DB::table('brns')
            ->join('areas', 'brns.AreaId', '=', 'areas.id')
            ->select('*')
            ->get();
        return view('brn.list', ['brns' => $brns],['area_data' => $area_data]);

        //return view('brn.list', ['brns' => $brns],['area_data' => $area_data]);
    }

    public function getUpdate($id)
    {
        $area = Area::lists('AreaName', 'id');
        $Zone_info = Zone::lists('ZoneName', 'id');
        $ThanaInfo = Thana::lists('ThanaName', 'id');
        $DivisionInfo = Division::lists('DivisionName', 'id');
        $UnionInfo = Union::lists('UnionName', 'id');
        $WardInfo = Ward::lists('WardName', 'id');
        $PostOfficeInfo = Postoffice::lists('PostofficeName', 'id');
        $district_info = District::lists('DistrictName', 'id');
        return view('brn.update', ['brn' => Brn::find($id)])->with('area',$area)->with('Zone_info',$Zone_info)->with('ThanaInfo',$ThanaInfo)->with('district_info',$district_info)->with('DivisionInfo',$DivisionInfo)
            ->with('UnionInfo',$UnionInfo)->with('PostOfficeInfo',$PostOfficeInfo)->with('WardInfo',$WardInfo);
    }

    public function postUpdate($id)
    {
        $brn = Brn::find($id);
        /*$rules = ["BranchCode" => "required"];
        if ($brn->BranchName != Input::get('BranchName'))
            $rules += ['BranchName' => 'required|unique:brns'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $brn->ZoneId = Input::get('ZoneId');
        $brn->AreaId = Input::get('AreaId');
        $brn->BranchName = Input::get('BranchName');
        $brn->BranchCode = Input::get('BranchCode');
        $brn->BranchAddress = Input::get('BranchAddress');
        $brn->BranchMobileNo = Input::get('BranchMobileNo');
        $brn->BranchEmail = Input::get('BranchEmail');
        $brn->BranchDistrictId = Input::get('BranchDistrictId');
        $brn->BranchThanaId = Input::get('BranchThanaId');
        $brn->BranchDivisionId = Input::get('BranchDivisionId');
        $brn->BranchUnionId = Input::get('BranchUnionId');
        $brn->BranchWardId = Input::get('BranchWardId');
        $brn->BranchPostOfficeId = Input::get('BranchPostOfficeId');
        $brn->save();
        return ['url' => 'brn/list'];
    }

    public function getCreate()
    {
        $area = Area::lists('AreaName', 'id');
        $Zone_info = Zone::lists('ZoneName', 'id');
        $ThanaInfo = Thana::lists('ThanaName', 'id');
        $DivisionInfo = Division::lists('DivisionName', 'id');
        $UnionInfo = Union::lists('UnionName', 'id');
        $WardInfo = Ward::lists('WardName', 'id');
        $PostOfficeInfo = Postoffice::lists('PostofficeName', 'id');
        $district_info = District::lists('DistrictName', 'id');
        return view('brn.create')->with('area',$area)->with('Zone_info',$Zone_info)->with('ThanaInfo',$ThanaInfo)->with('district_info',$district_info)->with('DivisionInfo',$DivisionInfo)
            ->with('UnionInfo',$UnionInfo)->with('PostOfficeInfo',$PostOfficeInfo)->with('WardInfo',$WardInfo);
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            "AreaId" => "required",
            "BranchName" => "required|unique:brns",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $brn = new Brn();
        $brn->ZoneId = Input::get('ZoneId');
        $brn->AreaId = Input::get('AreaId');
        $brn->BranchName = Input::get('BranchName');
        $brn->BranchCode = Input::get('BranchCode');
        $brn->BranchAddress = Input::get('BranchAddress');
        $brn->BranchMobileNo = Input::get('BranchMobileNo');
        $brn->BranchEmail = Input::get('BranchEmail');
        $brn->BranchDistrictId = Input::get('BranchDistrictId');
        $brn->BranchThanaId = Input::get('BranchThanaId');
        $brn->BranchDivisionId = Input::get('BranchDivisionId');
        $brn->BranchUnionId = Input::get('BranchUnionId');
        $brn->BranchWardId = Input::get('BranchWardId');
        $brn->BranchPostOfficeId = Input::get('BranchPostOfficeId');
        $brn->save();
        return ['url' => 'brn/list'];
    }

    public function getDelete($id)
    {
        Brn::destroy($id);
        return Redirect('brn/list');
    }

}