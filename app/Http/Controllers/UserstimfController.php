<?php
namespace App\Http\Controllers;

use App\Userstimf;
use DB;
use App\Brn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserstimfController extends Controller
{
    public function getIndex()
    {
        return view('userstimf.index');
    }

    public function getList()
    {
        Session::put('userstimf_search', Input::has('ok') ? Input::get('search') : (Session::has('userstimf_search') ? Session::get('userstimf_search') : ''));
        Session::put('userstimf_field', Input::has('field') ? Input::get('field') : (Session::has('userstimf_field') ? Session::get('userstimf_field') : 'UserstimfyName'));
        Session::put('userstimf_sort', Input::has('sort') ? Input::get('sort') : (Session::has('userstimf_sort') ? Session::get('userstimf_sort') : 'asc'));
        $userstimfs = Userstimf::where('id', 'like', '%' . Session::get('userstimf_search') . '%')
            ->orderBy(Session::get('userstimf_field'), Session::get('userstimf_sort'))->paginate(8);
        return view('userstimf.list', ['userstimfs' => $userstimfs]);
    }

    public function getUpdate($id)
    {
        return view('userstimf.update', ['userstimf' => Userstimf::find($id)]);
    }

    public function postUpdate($id)
    {
        $userstimf = Userstimf::find($id);
        /*$rules = ["UserstimfyCode" => "required"];
        if ($userstimf->UserstimfyName != Input::get('UserstimfyName'))
            $rules += ['UserstimfyName' => 'required|unique:userstimfs'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        //$userstimf->UserstimfyName = Input::get('UserstimfyName');
        //$userstimf->UserstimfyCode = Input::get('UserstimfyCode');
        $userstimf->employee_id = Input::get('employee_id');
        $userstimf->employee_code = Input::get('employee_code');
        $userstimf->employee_firstname = Input::get('employee_firstname');
        $userstimf->employee_lastname = Input::get('employee_lastname');
        $userstimf->ZoneID = Input::get('ZoneID');
        $userstimf->AreaID = Input::get('AreaID');
        $userstimf->office_id = Input::get('office_id');
        $userstimf->designation = Input::get('designation');
        $userstimf->address = Input::get('address');
        $userstimf->phone1 = Input::get('phone1');
        $userstimf->phone2 = Input::get('phone2');
        $userstimf->email = Input::get('email');
        $userstimf->altemail = Input::get('altemail');
        $userstimf->gender = Input::get('gender');
        $userstimf->birthdate = Input::get('birthdate');
        $userstimf->joiningdate = Input::get('joiningdate');
        $userstimf->status = Input::get('status');
        $userstimf->releasedate = Input::get('releasedate');
        $userstimf->username = Input::get('username');
        $userstimf->password12 = Input::get('password12');
        $userstimf->comment = Input::get('comment');
        $userstimf->photo = Input::get('photo');
        $userstimf->org_id = Input::get('org_id');
        $userstimf->IsActiveDate = Input::get('IsActiveDate');
        $userstimf->save();
        return ['url' => 'userstimf/list'];
    }

    public function getCreate()
    {
        //$branchs = Brn::lists('BranchName', 'id');
        $zones= DB::table('zones')->get();
        $areas= DB::table('areas')->get();
        $branchs= DB::table('brns')->get();
        $designations= DB::table('grades')->get();
        //$designations = DB::table('designations')-> select('*')->get();
        return view('userstimf.create')->with('designations', $designations)->with('branchs', $branchs)->with('zones', $zones)->with('areas', $areas);
        //return view('userstimf.create');
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            "UserstimfyName" => "required|unique:userstimfs",
            "UserstimfyCode" => "required|unique:userstimfs",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $userstimf = new Userstimf();
        //$userstimf->UserstimfyName = Input::get('UserstimfyName');
        //$userstimf->UserstimfyCode = Input::get('UserstimfyCode');
        $userstimf->employee_id = Input::get('employee_id');
        $userstimf->employee_code = Input::get('employee_code');
        $userstimf->employee_firstname = Input::get('employee_firstname');
        $userstimf->employee_lastname = Input::get('employee_lastname');
        $userstimf->ZoneID = Input::get('ZoneID');
        $userstimf->AreaID = Input::get('AreaID');
        $userstimf->office_id = Input::get('office_id');
        $userstimf->designation = Input::get('designation');
        $userstimf->address = Input::get('address');
        $userstimf->phone1 = Input::get('phone1');
        $userstimf->phone2 = Input::get('phone2');
        $userstimf->email = Input::get('email');
        $userstimf->altemail = Input::get('altemail');
        $userstimf->gender = Input::get('gender');
        $userstimf->birthdate = Input::get('birthdate');
        $userstimf->joiningdate = Input::get('joiningdate');
        $userstimf->status = Input::get('status');
        $userstimf->releasedate = Input::get('releasedate');
        $userstimf->username = Input::get('username');
        $userstimf->password12 = Input::get('password12');
        $userstimf->comment = Input::get('comment');
        $userstimf->photo = Input::get('photo');
        $userstimf->org_id = Input::get('org_id');
        $userstimf->IsActiveDate = Input::get('IsActiveDate');
        $userstimf->save();
        return ['url' => 'userstimf/list'];
    }

    public function getDelete($id)
    {
        Userstimf::destroy($id);
        return Redirect('userstimf/list');
    }

}