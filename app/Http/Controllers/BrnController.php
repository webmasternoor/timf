<?php
namespace App\Http\Controllers;

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
        $brns = Brn::where('id', 'like', '%' . Session::get('brn_search') . '%')
            ->orderBy(Session::get('brn_field'), Session::get('brn_sort'))->paginate(8);
        /*$area_data=DB::table('areas')
            ->join('brns', 'brns.AreaId', '=', 'areas.id')
            ->select('*')
            ->get();*/
        $area_data=DB::table('brns')
            ->join('areas', 'brns.AreaId', '=', 'areas.id')
            ->select('*')
            ->get();
        return view('brn.list', ['brns' => $brns],['area_data' => $area_data]);

        //return view('brn.list', ['brns' => $brns],['area_data' => $area_data]);
    }

    public function getUpdate($id)
    {
        $thana_info = Thana::lists('ThanaName', 'id');
        $district_info = District::lists('DistrictName', 'id');
        $area = Area::lists('AreaName', 'id');
        return view('brn.update', ['brn' => Brn::find($id)])->with('area',$area)->with('thana_info',$thana_info)->with('district_info',$district_info);
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
        $brn->AreaId = Input::get('AreaId');
        $brn->BranchName = Input::get('BranchName');
        $brn->BranchCode = Input::get('BranchCode');
        $brn->BranchAddress = Input::get('BranchAddress');
        $brn->BranchMobileNo = Input::get('BranchMobileNo');
        $brn->BranchDistrictId = Input::get('BranchDistrictId');
        $brn->BranchThanaId = Input::get('BranchThanaId');
        $brn->save();
        return ['url' => 'brn/list'];
    }

    public function getCreate()
    {
        $thana_info = Thana::lists('ThanaName', 'id');
        $district_info = District::lists('DistrictName', 'id');
        $area = Area::lists('AreaName', 'id');
        return view('brn.create')->with('area',$area)->with('thana_info',$thana_info)->with('district_info',$district_info);
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
        $brn->AreaId = Input::get('AreaId');
        $brn->BranchName = Input::get('BranchName');
        $brn->BranchCode = Input::get('BranchCode');
        $brn->BranchAddress = Input::get('BranchAddress');
        $brn->BranchMobileNo = Input::get('BranchMobileNo');
        $brn->BranchDistrictId = Input::get('BranchDistrictId');
        $brn->BranchThanaId = Input::get('BranchThanaId');
        $brn->save();
        return ['url' => 'brn/list'];
    }

    public function getDelete($id)
    {
        Brn::destroy($id);
        return Redirect('brn/list');
    }

}