<?php

namespace App\Http\Controllers;

use App\Accommodation;
use App\Holiday;
use App\Product;
use App\Accountstable;
use App\Age;
use App\Business_catagory;
use App\Businessleader;
use App\BusinessPlaceStatus;
use App\Businesstype;
use App\Count;
use App\Direction;
use App\Education;
use App\Familytype;
use App\Gender;
use App\Licenceauthority;
use App\Maritalstatus;
use App\Membertype;
use App\Mikrofdivision;
use App\Nametitle;
use App\OtherSource;
use App\Ownershiptype;
use App\Permanentemployee;
use App\Politicalstatus;
use App\Post;
use App\Productprivilege;
use App\Profession;
use App\Repaymenttype;
use App\Saving1;
use App\Savingpolicy;
use App\Savingtransactionsetup;
use App\Savingtype;
use App\Status;
use App\Survey;
use App\Countr;
use App\Division;
use App\District;
use App\Thana;
use App\Union;
use App\Postoffice;
use App\Ward;
use App\WeekEnd;
use App\Yearcalendar;
use App\Year_calendar;
use App\Zone;
use App\Area;
use App\Brn;
use App\Member;
use App\Zone1;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function getIndex()
    {
        return view('member.index');
    }

    public function getList()
    {
        Session::put('member_search', Input::has('ok') ? Input::get('search') : (Session::has('member_search') ? Session::get('member_search') : ''));
        Session::put('member_field', Input::has('field') ? Input::get('field') : (Session::has('member_field') ? Session::get('member_field') : 'id'));
        Session::put('member_sort', Input::has('sort') ? Input::get('sort') : (Session::has('member_sort') ? Session::get('member_sort') : 'asc'));
        /*$members = Member::where('id', 'like', '%' . Session::get('member_search') . '%')
            ->orderBy(Session::get('member_field'), Session::get('member_sort'))->paginate(8);*/
        $members = Member::where('Mobile', 'like', '%' . Session::get('member_search') . '%')
            ->where('grouppresident', '1' . Session::get('member_search') . '%')
            ->orderBy(Session::get('member_field'), Session::get('member_sort'))->paginate(8);

        $membersInfo = Member::select('members.id', 'members.Nid', 'members.Mobile', 'members.Email', 'members.MemberImage',
            'members.FullNameBangla')
            ->where('grouppresident', '1' . Session::get('member_search') . '%')
            ->orderBy(Session::get('member_field'), Session::get('member_sort'))
            ->paginate(8);

        return view('member.list', ['members' => $members])->with('membersInfo', $membersInfo);
    }

    public function getListpending()
    {
        $members = Member::where('grouppresident', '0' . Session::get('member_search') . '%')
            ->orderBy(Session::get('member_field'), Session::get('member_sort'))->paginate(8);
        return view('member.list1', ['members' => $members]);
    }

    /*public function getUpdate($id)
    {
        //$zone = Zone::all();
        //$area = Area::all();
        //$branch = Brn::all();
        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $Direction = Direction::lists('name','id');
        $Accommodation = Accommodation::lists('name','id');
        $BusinessPlaceStatus = BusinessPlaceStatus::lists('name','id');
        $Licenceauthority = Licenceauthority::lists('name','id');
        $OtherSources = Othersource::lists('name','id');
        $BusinessType = Businesstype::lists('name','id');
        $OwnershipType = Ownershiptype::lists('name','id');
        $Weekend = Weekend::lists('name','id');
        $OrgPermanentEmployee = Permanentemployee::lists('name','id');
        $BusinessLeader = Businessleader::lists('name','id');
        $Country = Countr::lists('CountryName','id');
        $District = District::lists('DistrictName','id');
        $Thana = Thana::lists('ThanaName','id');
        $PostOffice = Postoffice::lists('PostofficeName','id');
        $Union = Union::lists('UnionName','id');
        $Word = Ward::lists('WardName','id');
        $ZoneInfo = Zone::lists('ZoneName', 'id');
        $AreaInfo = Area::lists('AreaName', 'id');
        $BranchInfo = Brn::lists('BranchName', 'id');
        return view('member.update', ['member' => Member::find($id)])->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Accommodation',$Accommodation)
            ->with("Direction",$Direction)->with('BusinessPlaceStatus',$BusinessPlaceStatus)->with('Licenceauthority',$Licenceauthority)
            ->with('OtherSources',$OtherSources)->with('BusinessType',$BusinessType)->with('OwnershipType',$OwnershipType)
            ->with('Weekend',$Weekend)->with('OrgPermanentEmployee',$OrgPermanentEmployee)->with('BusinessLeader',$BusinessLeader);

        //return view('member.update', ['member' => Member::find($id)]);
    }*/

    public function getUpdate($id)
    {
        //$zone = Zone::all();
        //$area = Area::all();
        //$branch = Brn::all();
        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $DivisionOfficeInfo = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $divisionOfficeInfo = Mikrofdivision::all();
        $Direction = ['' => '--select--'] + Direction::lists('name', 'id')->all();
        $BusinessPlaceStatus = ['' => '--select--'] + BusinessPlaceStatus::lists('name', 'id')->all();
        $Licenceauthority = ['' => '--select--'] + Licenceauthority::lists('name', 'id')->all();
        $OtherSources = ['' => '--select--'] + Othersource::lists('name', 'id')->all();
        $BusinessType = ['' => '--select--'] + Businesstype::lists('name', 'id')->all();
        $OwnershipType = ['' => '--select--'] + Ownershiptype::lists('name', 'id')->all();
        $Weekend = ['' => '--select--'] + Weekend::lists('name', 'id')->all();
        $OrgPermanentEmployee = ['' => '--select--'] + Permanentemployee::lists('name', 'id')->all();
        $BusinessLeader = ['' => '--select--'] + Businessleader::lists('name', 'id')->all();
        $Status = ['' => '--select--'] + Status::lists('Status', 'id')->all();
//        $Country = [''=>'--select--'] + Countr::lists('CountryName', 'id')->all();
//        $District = [''=>'--select--'] + District::lists('DistrictName', 'id')->all();
//        $Thana = [''=>'--select--'] + Thana::lists('ThanaName', 'id')->all();
//        $PostOffice = [''=>'--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
//        $Union = [''=>'--select--'] + Union::lists('UnionName', 'id')->all();
//        $Word = [''=>'--select--'] + Ward::lists('WardName', 'id')->all();
        $ZoneInfo = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();

        $Age = ['' => '--select--'] + Age::lists('age', 'id')->all();
        $Familytypes = ['' => '--select--'] + Familytype::lists('name', 'id')->all();
        $Profession = ['' => '--select--'] + Profession::lists('name', 'id')->all();
        $profession = Profession::all();
        $MaritalStatus = ['' => '--select--'] + Maritalstatus::lists('name', 'id')->all();
        $Accommodation = ['' => '--select--'] + Accommodation::lists('name', 'id')->all();
        $Education = ['' => '--select--'] + Education::lists('name', 'id')->all();
        $PoliticalStatus = ['' => '--select--'] + Politicalstatus::lists('name', 'id')->all();
        $Gender = ['' => '--select--'] + Gender::lists('GenderName', 'id')->all();
        $Country = ['' => '--select--'] + Countr::lists('CountryName', 'id')->all();
        $Division = ['' => '--select--'] + Division::lists('DivisionName', 'id')->all();
        $District = ['' => '--select--'] + District::lists('DistrictName', 'id')->all();
        $Thana = ['' => '--select--'] + Thana::lists('ThanaName', 'id')->all();
        $PostOffice = ['' => '--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
        $Union = ['' => '--select--'] + Union::lists('UnionName', 'id')->all();
        $Word = ['' => '--select--'] + Ward::lists('WardName', 'id')->all();
        $Count_Data = ['' => '--select--'] + Count::lists('name', 'id')->all();
        $MemberType = ['' => '--select--'] + Membertype::lists('name', 'id')->all();
        $SavingTypes = ['' => '--select--'] + Savingtype::lists('name', 'id')->all();
        $SavingPolicy = ['' => '--select--'] + Savingpolicy::lists('name', 'id')->all();
        $SamityName = ['' => '--select--'] + Zone1::lists('SomitiName', 'id')->all();

        return view('member.update', ['member' => Member::find($id)])->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Accommodation', $Accommodation)
            ->with("Direction", $Direction)->with('BusinessPlaceStatus', $BusinessPlaceStatus)->with('Licenceauthority', $Licenceauthority)
            ->with('OtherSources', $OtherSources)->with('BusinessType', $BusinessType)->with('OwnershipType', $OwnershipType)
            ->with('Weekend', $Weekend)->with('OrgPermanentEmployee', $OrgPermanentEmployee)->with('BusinessLeader', $BusinessLeader)
            ->with('ZoneInfo', $ZoneInfo)->with('AreaInfo', $AreaInfo)->with('BranchInfo', $BranchInfo)->with('Count_Data', $Count_Data)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Education', $Education)->with('Status', $Status)
            ->with('Age', $Age)->with('Profession', $Profession)->with('Gender', $Gender)->with('Division', $Division)
            ->with('MaritalStatus', $MaritalStatus)->with('PoliticalStatus', $PoliticalStatus)->with('Familytypes', $Familytypes)
            ->with('profession', $profession)->with('MemberType', $MemberType)->with('SavingTypes', $SavingTypes)
            ->with('SavingPolicy', $SavingPolicy)->with('SamityName', $SamityName)->with('DivisionOfficeInfo', $DivisionOfficeInfo)->with('divisionOfficeInfo', $divisionOfficeInfo);

        //return view('member.update', ['member' => Member::find($id)]);
    }

    public function getView1212($id)
    {
        $data = Savingtransactionsetup::select('*')
            ->where('MemberId', '=', $id)
            ->get();

        view()->share('data', $data);
        $pdf = PDF::loadView('savingschedule')->setPaper('a4', 'landscape');

        return $pdf->download('savingschedule.pdf');
    }

    public function getView($id)
    {
        $memberid = $id;
        //$zone = Zone::all();
        //$area = Area::all();
        //$branch = Brn::all();
        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $DivisionOfficeInfo = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $divisionOfficeInfo = Mikrofdivision::all();
        $Direction = ['' => '--select--'] + Direction::lists('name', 'id')->all();
        $BusinessPlaceStatus = ['' => '--select--'] + BusinessPlaceStatus::lists('name', 'id')->all();
        $Licenceauthority = ['' => '--select--'] + Licenceauthority::lists('name', 'id')->all();
        $OtherSources = ['' => '--select--'] + Othersource::lists('name', 'id')->all();
        $BusinessType = ['' => '--select--'] + Businesstype::lists('name', 'id')->all();
        $OwnershipType = ['' => '--select--'] + Ownershiptype::lists('name', 'id')->all();
        $Weekend = ['' => '--select--'] + Weekend::lists('name', 'id')->all();
        $OrgPermanentEmployee = ['' => '--select--'] + Permanentemployee::lists('name', 'id')->all();
        $BusinessLeader = ['' => '--select--'] + Businessleader::lists('name', 'id')->all();
        $Status = ['' => '--select--'] + Status::lists('Status', 'id')->all();
//        $Country = [''=>'--select--'] + Countr::lists('CountryName', 'id')->all();
//        $District = [''=>'--select--'] + District::lists('DistrictName', 'id')->all();
//        $Thana = [''=>'--select--'] + Thana::lists('ThanaName', 'id')->all();
//        $PostOffice = [''=>'--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
//        $Union = [''=>'--select--'] + Union::lists('UnionName', 'id')->all();
//        $Word = [''=>'--select--'] + Ward::lists('WardName', 'id')->all();
        $ZoneInfo = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();

        $Age = ['' => '--select--'] + Age::lists('age', 'id')->all();
        $Familytypes = ['' => '--select--'] + Familytype::lists('name', 'id')->all();
        $Profession = ['' => '--select--'] + Profession::lists('name', 'id')->all();
        $profession = Profession::all();
        $MaritalStatus = ['' => '--select--'] + Maritalstatus::lists('name', 'id')->all();
        $Accommodation = ['' => '--select--'] + Accommodation::lists('name', 'id')->all();
        $Education = ['' => '--select--'] + Education::lists('name', 'id')->all();
        $PoliticalStatus = ['' => '--select--'] + Politicalstatus::lists('name', 'id')->all();
        $Gender = ['' => '--select--'] + Gender::lists('GenderName', 'id')->all();
        $Country = ['' => '--select--'] + Countr::lists('CountryName', 'id')->all();
        $Division = ['' => '--select--'] + Division::lists('DivisionName', 'id')->all();
        $District = ['' => '--select--'] + District::lists('DistrictName', 'id')->all();
        $Thana = ['' => '--select--'] + Thana::lists('ThanaName', 'id')->all();
        $PostOffice = ['' => '--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
        $Union = ['' => '--select--'] + Union::lists('UnionName', 'id')->all();
        $Word = ['' => '--select--'] + Ward::lists('WardName', 'id')->all();
        $Count_Data = ['' => '--select--'] + Count::lists('name', 'id')->all();
        $MemberType = ['' => '--select--'] + Membertype::lists('Membertype', 'id')->all();
        $SavingTypes = ['' => '--select--'] + Savingtype::lists('name', 'id')->all();
        $SavingPolicy = ['' => '--select--'] + Savingpolicy::lists('name', 'id')->all();
        $SamityName = ['' => '--select--'] + Zone1::lists('SomitiName', 'id')->all();
        $MemberData = Member::find($id);
//        echo $MemberData->MemberId;
//        die();
        $memberdata1 = $MemberData->MemberId;
        $AccountInfo = Accountstable::Select('*')
            ->join('products','accountstables.productid','=','products.id')
            ->where('memberid','=',$MemberData->MemberId)
            ->get();
        $savingSchedule_data = Savingtransactionsetup::where('MemberId', '=', $memberdata1)
            ->where('SavingType', '=', '2')
            ->get();
        $savingdata = Saving1::where('MemberId', '=', $memberdata1)
            ->where('ProductId', '=', '2')
            ->get();
        $savingSchedule_data1 = Savingtransactionsetup::where('MemberId', '=', $memberdata1)
            ->where('SavingType', '=', '3')
            ->get();
        $SavingsData = Saving1::where('MemberId', '=', $memberdata1)->get();

        return view('member.view', ['member' => Member::find($id)])->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Accommodation', $Accommodation)
            ->with("Direction", $Direction)->with('BusinessPlaceStatus', $BusinessPlaceStatus)->with('Licenceauthority', $Licenceauthority)
            ->with('OtherSources', $OtherSources)->with('BusinessType', $BusinessType)->with('OwnershipType', $OwnershipType)
            ->with('Weekend', $Weekend)->with('OrgPermanentEmployee', $OrgPermanentEmployee)->with('BusinessLeader', $BusinessLeader)
            ->with('ZoneInfo', $ZoneInfo)->with('AreaInfo', $AreaInfo)->with('BranchInfo', $BranchInfo)->with('Count_Data', $Count_Data)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Education', $Education)->with('Status', $Status)->with('SavingsData', $SavingsData)
            ->with('Age', $Age)->with('Profession', $Profession)->with('Gender', $Gender)->with('Division', $Division)
            ->with('MaritalStatus', $MaritalStatus)->with('PoliticalStatus', $PoliticalStatus)->with('Familytypes', $Familytypes)
            ->with('profession', $profession)->with('MemberType', $MemberType)->with('SavingTypes', $SavingTypes)->with('MemberData', $MemberData)
            ->with('SavingPolicy', $SavingPolicy)->with('SamityName', $SamityName)->with('DivisionOfficeInfo', $DivisionOfficeInfo)->with('divisionOfficeInfo', $divisionOfficeInfo)->with('memberid', $memberid)
            ->with('savingSchedule_data', $savingSchedule_data)->with('savingSchedule_data1', $savingSchedule_data1)->with('AccountInfo',$AccountInfo);

        //return view('member.update', ['member' => Member::find($id)]);
    }

    public function getAccount($id)
    {

        $membertypeid = Member::find($id);
        $product = Product::select('products.id', 'products.ProductName', 'productprivileges.ProductID', 'productprivileges.membertype')
            ->join('productprivileges', 'products.id', '=', 'productprivileges.ProductID')
            ->where('productprivileges.membertype', '=', $membertypeid->MemberType)
            ->get();
        $account_data = Savingtransactionsetup::select('*')
            ->join('products', 'savingtransactionsetups.SavingType', '=', 'products.id')
            ->where('MemberId', '=', $membertypeid->MemberId)
            ->groupBy('SavingType')
            ->get();
//        $account_data = Accountstable::where('memberid','=',$id)->get();
//var_dump($product);
//die();
        return view('member.account', ['member' => Member::find($id)])->with('product', $product)->with('account_data', $account_data);
    }

    public function postAccount($id)
    {
        $memberdata = Member::find($id);
        for ($i = 1; $i <= 5; $i++) {
            $producttype = Input::get('productname' . $i);

            if (!empty($producttype)) {
                $memberdata = Member::find($id);
                $AccNameSub = '';
                $memberaccount = new Accountstable();
                $valsa = Product::find($producttype);
                $AccNameSub = $valsa->ProductID;
                $accnumber = $AccNameSub . '.' . rand(10000000, 50000000);
                $memberaccount->accountsname = $accnumber;
                if ($valsa->Frequency == 1) {
                    $days = new Carbon('today');
                    for ($j = 7; $j <= 365; $j = $j + 7) {
                        $SavingSetup = new Savingtransactionsetup();
                        $SavingSetup->SavingType = Input::get('productname' . $i);
                        $SavingSetup->MemberId = $memberdata->MemberId;
                        $SavingSetup->MemberType = $memberdata->MemberType;
                        $SavingSetup->SamityName = $memberdata->SamityName;
                        $SavingSetup->AccountNo = $accnumber;
                        $SavingSetup->Amount = Input::get('savingAmount' . $i);
                        $NewDate = $days->addWeeks(1);
                        $date_collection = Holiday::all();
                        foreach ($date_collection as $date) {
                            if ($NewDate == $date->Holiday_Date) {
                                $NewDate = $days->addDays(1);
                            }
                        }
//                        $NewDate = Date('y:m:d', strtotime('+' . $j . 'Days'));
                        $SavingSetup->Date = $NewDate;
                        $SavingSetup->save();
                    }
//                    $memberaccount->memberid = $key->MemberId;
                } else if ($valsa->Frequency == 2) {
                    $days = new Carbon('today');
                    for ($k = 1; $k <= 12; $k++) {
                        $SavingSetup = new Savingtransactionsetup();
                        $SavingSetup->SavingType = Input::get('productname' . $i);
                        $SavingSetup->MemberId = $memberdata->MemberId;
                        $SavingSetup->MemberType = $memberdata->MemberType;
                        $SavingSetup->SamityName = $memberdata->SamityName;
                        $SavingSetup->AccountNo = $accnumber;
                        $SavingSetup->Amount = Input::get('savingAmount' . $i);
                        $NewDate = $days->addMonth(1);
                        $date_collection = Holiday::all();
                        $k=0;
                        foreach ($date_collection as $date) {
                            if ($NewDate == $date->Holiday_Date) {
                                $NewDate = $days->addDays(1);
                                $k = $k+1;
                            }
                        }
                        if ($k>0)
                        {
                            $SavingSetup->Date = $NewDate;
                            $NewDate = $days->subDay($k);
                        }
                        else
                        {
                            $SavingSetup->Date = $NewDate;
                        }
                        $SavingSetup->save();
                    }
//                    $memberaccount->memberid = $key->MemberId;
                }


                $memberaccount->memberid = $memberdata->MemberId;
                $memberaccount->productid = Input::get('productname' . $i);
                $memberaccount->save();
            }
        }

        return ['url' => 'member/list'];
    }

    public function getSavingSchedulePdf($id)
    {
        $data = Savingtransactionsetup::select('*')
            ->where('MemberId', '=', $id)
            ->get();

        view()->share('data', $data);
        $pdf = PDF::loadView('member.savingschedulePdf')->setPaper('a4', 'landscape');
        return $pdf->stream('savingschedulePdf.pdf');
    }

    public function getSavingSchedulePdf1($id)
    {
        $data = Savingtransactionsetup::select('*')
            ->where('MemberId', '=', $id)
            ->get();
        view()->share('data', $data);
        $pdf = PDF::loadView('savingschedulePdf');
        return view('savingschedulePdf')->with('data', $pdf);
    }

    public function getApprove($id)
    {
        //$zone = Zone::all();
        //$area = Area::all();
        //$branch = Brn::all();
        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $DivisionOfficeInfo = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $divisionOfficeInfo = Mikrofdivision::all();
        $Direction = ['' => '--select--'] + Direction::lists('name', 'id')->all();
        $BusinessPlaceStatus = ['' => '--select--'] + BusinessPlaceStatus::lists('name', 'id')->all();
        $Licenceauthority = ['' => '--select--'] + Licenceauthority::lists('name', 'id')->all();
        $OtherSources = ['' => '--select--'] + Othersource::lists('name', 'id')->all();
        $BusinessType = ['' => '--select--'] + Businesstype::lists('name', 'id')->all();
        $OwnershipType = ['' => '--select--'] + Ownershiptype::lists('name', 'id')->all();
        $Weekend = ['' => '--select--'] + Weekend::lists('name', 'id')->all();
        $OrgPermanentEmployee = ['' => '--select--'] + Permanentemployee::lists('name', 'id')->all();
        $BusinessLeader = ['' => '--select--'] + Businessleader::lists('name', 'id')->all();
        $Status = ['' => '--select--'] + Status::lists('Status', 'id')->all();
//        $Country = [''=>'--select--'] + Countr::lists('CountryName', 'id')->all();
//        $District = [''=>'--select--'] + District::lists('DistrictName', 'id')->all();
//        $Thana = [''=>'--select--'] + Thana::lists('ThanaName', 'id')->all();
//        $PostOffice = [''=>'--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
//        $Union = [''=>'--select--'] + Union::lists('UnionName', 'id')->all();
//        $Word = [''=>'--select--'] + Ward::lists('WardName', 'id')->all();
        $ZoneInfo = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();

        $Age = ['' => '--select--'] + Age::lists('age', 'id')->all();
        $Familytypes = ['' => '--select--'] + Familytype::lists('name', 'id')->all();
        $Profession = ['' => '--select--'] + Profession::lists('name', 'id')->all();
        $profession = Profession::all();
        $MaritalStatus = ['' => '--select--'] + Maritalstatus::lists('name', 'id')->all();
        $Accommodation = ['' => '--select--'] + Accommodation::lists('name', 'id')->all();
        $Education = ['' => '--select--'] + Education::lists('name', 'id')->all();
        $PoliticalStatus = ['' => '--select--'] + Politicalstatus::lists('name', 'id')->all();
        $Gender = ['' => '--select--'] + Gender::lists('GenderName', 'id')->all();
        $Country = ['' => '--select--'] + Countr::lists('CountryName', 'id')->all();
        $Division = ['' => '--select--'] + Division::lists('DivisionName', 'id')->all();
        $District = ['' => '--select--'] + District::lists('DistrictName', 'id')->all();
        $Thana = ['' => '--select--'] + Thana::lists('ThanaName', 'id')->all();
        $PostOffice = ['' => '--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
        $Union = ['' => '--select--'] + Union::lists('UnionName', 'id')->all();
        $Word = ['' => '--select--'] + Ward::lists('WardName', 'id')->all();
        $Count_Data = ['' => '--select--'] + Count::lists('name', 'id')->all();
        $MemberType = ['' => '--select--'] + Membertype::lists('Membertype', 'id')->all();
        $SavingTypes = ['' => '--select--'] + Product::lists('ProductNameBanglaFull', 'id')->all();
        $SavingPolicy = ['' => '--select--'] + Savingpolicy::lists('name', 'id')->all();
        $SamityName = ['' => '--select--'] + Zone1::lists('SomitiName', 'id')->all();

        return view('member.approve', ['member' => Member::find($id)])->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Accommodation', $Accommodation)
            ->with("Direction", $Direction)->with('BusinessPlaceStatus', $BusinessPlaceStatus)->with('Licenceauthority', $Licenceauthority)
            ->with('OtherSources', $OtherSources)->with('BusinessType', $BusinessType)->with('OwnershipType', $OwnershipType)
            ->with('Weekend', $Weekend)->with('OrgPermanentEmployee', $OrgPermanentEmployee)->with('BusinessLeader', $BusinessLeader)
            ->with('ZoneInfo', $ZoneInfo)->with('AreaInfo', $AreaInfo)->with('BranchInfo', $BranchInfo)->with('Count_Data', $Count_Data)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Education', $Education)->with('Status', $Status)
            ->with('Age', $Age)->with('Profession', $Profession)->with('Gender', $Gender)->with('Division', $Division)
            ->with('MaritalStatus', $MaritalStatus)->with('PoliticalStatus', $PoliticalStatus)->with('Familytypes', $Familytypes)
            ->with('profession', $profession)->with('MemberType', $MemberType)->with('SavingTypes', $SavingTypes)
            ->with('SavingPolicy', $SavingPolicy)->with('SamityName', $SamityName)->with('DivisionOfficeInfo', $DivisionOfficeInfo)->with('divisionOfficeInfo', $divisionOfficeInfo);

        //return view('member.update', ['member' => Member::find($id)]);
    }

    public function postApprove($id)
    {
        $memberapprove = Member::find($id);
        $memberapprove->grouppresident = '1';
        $memberapprove->remarks = Input::get('remarks');
        $memberapprove->MemberId = Input::get('MemberId');
        $memberapprove->SamityName = Input::get('SamityName');
        $memberapprove->MemberType = Input::get('MemberType');
//        $memberapprove->SavingTypes = Input::get('SavingTypes');
//        $memberapprove->SavingPolicy = Input::get('SavingPolicy');
        $memberapprove->save();

//        $savingAccountNo = rand(50000, 60000);

//        for ($i = 0; $i <= 12; $i++) {
//            $SavingSetup = new Savingtransactionsetup();
//            $SavingSetup->MemberId = Input::get('MemberId');
//            $SavingSetup->SavingType = Input::get('SavingTypes');
//            $SavingSetup->MemberType = Input::get('MemberType');
//            $SavingSetup->SavingPolicy = Input::get('SavingPolicy');
//            $SavingSetup->SamityName = Input::get('SamityName');
//            $SavingSetup->AccountNo = $savingAccountNo;
//            $membertypes = Input::get('MemberType');
////        $Savingtypes = Input::get('SavingTypes');
//            $SavingPolicy = Input::get('SavingPolicy');
//
//
//            $NewDate = Date('Y-m-d', strtotime('+' . $i . ' months'));
//            $date_collection = Holiday::all();
//            foreach ($date_collection as $date)
//            {
//                if ($NewDate==$date->Holiday_Date)
//                { for ($j=1;$NewDate!=$date->Holiday_Date;$j++)
//                    $NewDate=Date('Y-m-d', strtotime('+' . 1 . ' Days'));
//                }
//            }
//            if ($membertypes == '1') {
//                if ($SavingPolicy == '1') {
//                    $SavingSetup->Amount = 10;
//                    $SavingSetup->Rate = 0;
//                } else {
//                    $SavingSetup->Amount = 50;
//                    $SavingSetup->Rate = 0;
//                }
//            } else {
//                $SavingSetup->Amount = 100;
//                $SavingSetup->Rate = 5;
//            }
//            $SavingSetup->Date = $NewDate;
//            $SavingSetup->save();
//        }
//        if (isset($savingAccountNo)){
//            $tbl_account = new Accountstable();
//            $tbl_account->memberid = Input::get('MemberId');
//            $tbl_account->accountsname = $savingAccountNo;
//            $tbl_account->productid = Input::get('SavingTypes');
//            $tbl_account->save();
//        }
        return ['url' => 'member/list'];
    }

    public function postUpdate($id)
    {
        $member = Member::find($id);
        /*$rules = ["unitprice" => "required|numeric"];
        if ($member->name != Input::get('name'))
            $rules += ['name' => 'required|unique:members'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $file = Input::file('MemberImage');
        $filefather = Input::file('FatherImage');
        $filemother = Input::file('MotherImage');
        $fileNomineeImage = Input::file('NomineeImage');
        // $input = array('image' => $file);
        $destinationPath = 'uploads/';

        if (!empty($file)) {
            $filename = $file->getClientOriginalName();
            Input::file('MemberImage')->move($destinationPath, $filename);

            $member->MemberImage = $filename;

        }
        if (!empty($filefather)) {

            $filenamefather = $filefather->getClientOriginalName();
            Input::file('FatherImage')->move($destinationPath, $filenamefather);
            $member->FatherImage = $filenamefather;

        }
        if (!empty($filemother)) {

            $filenamemother = $filemother->getClientOriginalName();
            Input::file('MotherImage')->move($destinationPath, $filenamemother);
            $member->MotherImage = $filenamemother;
        }

        if (!empty($fileNomineeImage)) {

            $fileNomineeImage = $fileNomineeImage->getClientOriginalName();
            Input::file('NomineeImage')->move($destinationPath, $fileNomineeImage);
            $member->NomineeImage = $fileNomineeImage;

        }

        $SpouseOtherProfession = Input::get('SpouseOtherProfession');

        if (!empty($SpouseOtherProfession)) {

            $profession_data = Profession::where('name', $SpouseOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $SpouseOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $SpouseOtherProfession)->get();
                $member->SpouseProfession = $profession_data[0]->id;
            }
        } else {
            $member->SpouseProfession = Input::get('SpouseProfession');
        }
        $WifeOtherProfession = Input::get('WifeOtherProfession');
        if (!empty($WifeOtherProfession)) {

            $profession_data = Profession::where('name', $WifeOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $WifeOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $member->WifeProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $member->WifeProfession = $profession_data[0]->id;
            }

//            $member->WifeProfession = $WifeOtherProfession;
        } else {
            $member->WifeProfession = Input::get('WifeProfession');
        }
        $FatherOtherProfession = Input::get('FatherOtherProfession');
        if (!empty($FatherOtherProfession)) {
            $profession_data = Profession::where('name', $FatherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $FatherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $member->FatherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $member->FatherProfession = $profession_data[0]->id;
            }
//            $member->FatherProfession = $FatherOtherProfession;
        } else {
            $member->FatherProfession = Input::get('FatherProfession');
        }
        $MotherOtherProfession = Input::get('MotherOtherProfession');
        if (!empty($MotherOtherProfession)) {
            $profession_data = Profession::where('name', $MotherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $MotherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $member->MotherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $member->MotherProfession = $profession_data[0]->id;
            }
//            $member->MotherProfession = $MotherOtherProfession;
        } else {
            $member->MotherProfession = Input::get('MotherProfession');
        }
        $CurrentOtherProfession = Input::get('CurrentOtherProfession');
//        $MotherOtherProfession = Input::get('MotherOtherProfession');
        if (!empty($CurrentOtherProfession)) {
            $profession_data = Profession::where('name', $CurrentOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $CurrentOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $CurrentOtherProfession)->get();
                $member->CurrentProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $CurrentOtherProfession)->get();
                $member->CurrentProfession = $profession_data[0]->id;
            }
//            $member->MotherProfession = $MotherOtherProfession;
        } else {
            $member->CurrentProfession = Input::get('CurrentProfession');
        }
        $PreviousOtherProfession = Input::get('PreviousOtherProfession');
        if (!empty($PreviousOtherProfession)) {
            $profession_data = Profession::where('name', $PreviousOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $PreviousOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $PreviousOtherProfession)->get();
                $member->PreviousProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $PreviousOtherProfession)->get();
                $member->PreviousProfession = $profession_data[0]->id;
            }
//            $member->MotherProfession = $MotherOtherProfession;
        } else {
            $member->PreviousProfession = Input::get('PreviousProfession');
        }


        $member->BusinessName = Input::get('BusinessName');
        $member->BusinessNature = Input::get('BusinessNature');
        $member->BusinessExperience = Input::get('BusinessExperience');
        $member->BusinessCenterAddress = Input::get('BusinessCenterAddress');
        $member->BusinessStartDate = Input::get('BusinessStartDate');
        $member->Accommodation = Input::get('Accommodation');
        $member->AccommodationLength = Input::get('AccommodationLength');
        $member->AccommodationWidth = Input::get('AccommodationWidth');
        $member->Direction = Input::get('Direction');
        $member->BusinessPlaceStatus = Input::get('BusinessPlaceStatus');
        $member->TradeLicenceNo = Input::get('TradeLicenceNo');
        $member->LicenceIssuingAuthority = Input::get('LicenceIssuingAuthority');
        $member->InvestedCapital = Input::get('InvestedCapital');
        $member->MonthlyAvarageSale = Input::get('MonthlyAvarageSale');
        $member->BankContribution = Input::get('BankContribution');
        $member->NgoContribution = Input::get('NgoContribution');
        $member->SelfContribution = Input::get('SelfContribution');
        $member->BorrowMoney = Input::get('BorrowMoney');
        $member->MonthlyEarningFromBusiness = Input::get('MonthlyEarningFromBusiness');
        $member->MonthlyExpenditureFromBusiness = Input::get('MonthlyExpenditureFromBusiness');
        $member->SurplusMoney = Input::get('SurplusMoney');
        $member->IncomeFromOthersSources = Input::get('IncomeFromOthersSources');
        $member->OtherSources = Input::get('OtherSources');
        $member->MonthlyExpenditureFromOtherSources = Input::get('MonthlyExpenditureFromOtherSources');
        $member->MonthlySurplus = Input::get('MonthlySurplus');
        $member->MonthlyTotalSurplus = Input::get('MonthlyTotalSurplus');
        $member->BusinessType = Input::get('BusinessType');
        $member->OwnershipType = Input::get('OwnershipType');
        $member->FirstHalfStart = Input::get('FirstHalfStart');
        $member->FirstHalfEnd = Input::get('FirstHalfEnd');
        $member->SecondHalfStart = Input::get('SecondHalfStart');
        $member->SecondHalfEnd = Input::get('SecondHalfEnd');
        $member->TotalTime = Input::get('TotalTime');
        $member->OrgOPeningTime = Input::get('OrgOPeningTime');
        $member->OrgClosingTime = Input::get('OrgClosingTime');
        $member->ClosingIntervalStart = Input::get('ClosingIntervalStart');
        $member->ClosingIntervalClose = Input::get('ClosingIntervalClose');
        $member->WeekEnd = Input::get('WeekEnd');
        $member->OrgPermanentEmployee = Input::get('OrgPermanentEmployee');
        $member->save();
        return ['url' => 'member/list'];
    }

    public function getCreate()
    {
        Session::put('loan_search1', Input::has('ok') ? Input::get('search1') : (Session::has('loan_search1') ? Session::get('loan_search1') : ''));
        Session::put('loan_field', Input::has('field') ? Input::get('field') : (Session::has('loan_field') ? Session::get('loan_field') : 'Nid'));
        Session::put('loan_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loan_sort') ? Session::get('loan_sort') : 'asc'));
        $loans = Survey::where('Nid', 'like', '%' . Session::get('loan_search1') . '%')
            ->orderBy(Session::get('loan_field'), Session::get('loan_sort'))->paginate(1);
        //$loan->Nid = Session::get('loan_search1');

        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $DivisionOfficeInfo = ['' => '--select--'] + Mikrofdivision::lists('DivisionOfficeName', 'id')->all();
        $divisionOfficeInfo = Mikrofdivision::all();
        $NameTitle = Nametitle::lists('name', 'id');
        $nameTitle = Nametitle::all();
        $Age = Age::lists('age', 'id');
        $age = Age::all();
//        $PassingYear = Yearcalendar::lists('Name', 'id');
//        $passingYear = Yearcalendar::all();
        $Profession = ['' => '--select--'] + Profession::lists('name', 'id')->all();
        $profession = Profession::all();
        $MaritalStatus = ['' => '--select--'] + Maritalstatus::lists('name', 'id')->all();
        $maritalStatus = Maritalstatus::all();
        $Education = ['' => '--select--'] + Education::lists('name', 'id')->all();
        $education = Education::all();
        $PoliticalStatus = ['' => '--select--'] + Politicalstatus::lists('name', 'id')->all();
        $politicalStatus = Politicalstatus::all();
        $BusinessCategory = Business_catagory::all();
        $Gender = ['' => '--select--'] + Gender::lists('GenderName', 'id')->all();
        $gender = Gender::all();
        $familytype = Familytype::all();
        $Familytype = ['' => '--select--'] + Familytype::lists('name', 'id')->all();
        $Repaymenttype = Repaymenttype::all();
        $count = Count::all();
        $status = Status::all();

        $Direction = ['' => '--select--'] + Direction::lists('name', 'id')->all();
        $Accommodation = ['' => '--select--'] + Accommodation::lists('name', 'id')->all();
        $BusinessPlaceStatus = ['' => '--select--'] + BusinessPlaceStatus::lists('name', 'id')->all();
        $Licenceauthority = ['' => '--select--'] + Licenceauthority::lists('name', 'id')->all();
        $OtherSources = ['' => '--select--'] + Othersource::lists('name', 'id')->all();
        $BusinessType = ['' => '--select--'] + Businesstype::lists('name', 'id')->all();
        $OwnershipType = ['' => '--select--'] + Ownershiptype::lists('name', 'id')->all();
        $Weekend = ['' => '--select--'] + WeekEnd::lists('name', 'id')->all();
        $OrgPermanentEmployee = ['' => '--select--'] + Permanentemployee::lists('name', 'id')->all();
        $BusinessLeader = ['' => '--select--'] + Businessleader::lists('name', 'id')->all();
        $Country = ['' => '--select--'] + Countr::lists('CountryName', 'id')->all();
        $country = Countr::all();
        $division = Division::all();
        $Division = ['' => '--select--'] + Division::lists('DivisionName', 'id')->all();
        $District = ['' => '--select--'] + District::lists('DistrictName', 'id')->all();
        $district = District::all();
        $Thana = ['' => '--select--'] + Thana::lists('ThanaName', 'id')->all();
        $thana = Thana::all();
        $PostOffice = ['' => '--select--'] + Postoffice::lists('PostofficeName', 'id')->all();
        $postOffice = Postoffice::all();
        $Union = ['' => '--select--'] + Union::lists('UnionName', 'id')->all();
        $union = Union::all();
        $Word = ['' => '--select--'] + Ward::lists('WardName', 'id')->all();
        $word = Ward::all();
        $ZoneInfo = ['' => '--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo = ['' => '--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo = ['' => '--select--'] + Brn::lists('BranchName', 'id')->all();
        $MemberType = ['' => '--select--'] + Membertype::lists('Membertype', 'id')->all();
        $SavingTypes = ['' => '--select--'] + Savingtype::lists('name', 'id')->all();
        $SavingPolicy = ['' => '--select--'] + Savingpolicy::lists('name', 'id')->all();
        $SamityName = ['' => '--select--'] + Zone1::lists('SomitiName', 'id')->all();
        return view('member.create')->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('loans', $loans)->with('Accommodation', $Accommodation)
            ->with("Direction", $Direction)->with('BusinessPlaceStatus', $BusinessPlaceStatus)->with('Licenceauthority', $Licenceauthority)
            ->with('OtherSources', $OtherSources)->with('BusinessType', $BusinessType)->with('OwnershipType', $OwnershipType)
            ->with('Weekend', $Weekend)->with('OrgPermanentEmployee', $OrgPermanentEmployee)->with('BusinessLeader', $BusinessLeader)
            ->with('ZoneInfo', $ZoneInfo)->with('AreaInfo', $AreaInfo)->with('BranchInfo', $BranchInfo)->with('NameTitle', $NameTitle)
            ->with('Age', $Age)->with('Profession', $Profession)->with('MaritalStatus', $MaritalStatus)
            ->with('Education', $Education)->with('PoliticalStatus', $PoliticalStatus)->with('Gender', $Gender)->with('nameTitle', $nameTitle)
            ->with('age', $age)->with('profession', $profession)->with('maritalStatus', $maritalStatus)
            ->with('education', $education)->with('politicalStatus', $politicalStatus)->with('gender', $gender)->with('country', $country)
            ->with('district', $district)->with('thana', $thana)->with('postOffice', $postOffice)->with('union', $union)->with('word', $word)
            ->with('BusinessCategory', $BusinessCategory)->with('familytype', $familytype)->with('count', $count)->with('status', $status)
            ->with('division', $division)->with('Division', $Division)->with('Familytype', $Familytype)
            ->with('Repaymenttype', $Repaymenttype)->with('MemberType', $MemberType)->with('SavingTypes', $SavingTypes)
            ->with('SavingPolicy', $SavingPolicy)->with('SamityName', $SamityName)->with('divisionOfficeInfo', $divisionOfficeInfo)->with('DivisionOfficeInfo', $DivisionOfficeInfo);
        //return view('member.create')->with;
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            "name" => "required|unique:members",
            "MemberCode" => "required|unique:members",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/


        $member = new Member();
        $nid = Session::get('loan_search1');
        $file = Input::file('MemberImage');
        $filefather = Input::file('FatherImage');
        $filemother = Input::file('MotherImage');
        $fileNomineeImage = Input::file('NomineeImage');
        // $input = array('image' => $file);
        $destinationPath = 'uploads/';

        if (!empty($file)) {
            $filename = $file->getClientOriginalName();
            Input::file('MemberImage')->move($destinationPath, $filename);

            $member->MemberImage = $filename;

        }
        if (!empty($filefather)) {

            $filenamefather = $filefather->getClientOriginalName();
            Input::file('FatherImage')->move($destinationPath, $filenamefather);
            $member->FatherImage = $filenamefather;

        }
        if (!empty($filemother)) {

            $filenamemother = $filemother->getClientOriginalName();
            Input::file('MotherImage')->move($destinationPath, $filenamemother);
            $member->MotherImage = $filenamemother;

        }

        if (!empty($fileNomineeImage)) {

            $fileNomineeImage = $fileNomineeImage->getClientOriginalName();
            Input::file('NomineeImage')->move($destinationPath, $fileNomineeImage);
            $member->NomineeImage = $fileNomineeImage;

        }

        $SpouseOtherProfession = Input::get('SpouseOtherProfession');

        if (!empty($SpouseOtherProfession)) {

            $profession_data = Profession::where('name', $SpouseOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $SpouseOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $SpouseOtherProfession)->get();
                $member->SpouseProfession = $profession_data[0]->id;
            }
        } else {
            $member->SpouseProfession = Input::get('SpouseProfession');
        }
        $WifeOtherProfession = Input::get('WifeOtherProfession');
        if (!empty($WifeOtherProfession)) {

            $profession_data = Profession::where('name', $WifeOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $WifeOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $member->WifeProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $member->WifeProfession = $profession_data[0]->id;
            }

//            $member->WifeProfession = $WifeOtherProfession;
        } else {
            $member->WifeProfession = Input::get('WifeProfession');
        }
        $FatherOtherProfession = Input::get('FatherOtherProfession');
        if (!empty($FatherOtherProfession)) {
            $profession_data = Profession::where('name', $FatherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $FatherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $member->FatherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $member->FatherProfession = $profession_data[0]->id;
            }
//            $member->FatherProfession = $FatherOtherProfession;
        } else {
            $member->FatherProfession = Input::get('FatherProfession');
        }
        $MotherOtherProfession = Input::get('MotherOtherProfession');
        if (!empty($MotherOtherProfession)) {
            $profession_data = Profession::where('name', $MotherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $MotherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $member->MotherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $member->MotherProfession = $profession_data[0]->id;
            }
//            $member->MotherProfession = $MotherOtherProfession;
        } else {
            $member->MotherProfession = Input::get('MotherProfession');
        }
        $CurrentOtherProfession = Input::get('CurrentOtherProfession');
//        $MotherOtherProfession = Input::get('MotherOtherProfession');
        if (!empty($CurrentOtherProfession)) {
            $profession_data = Profession::where('name', $CurrentOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $CurrentOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $CurrentOtherProfession)->get();
                $member->CurrentProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $CurrentOtherProfession)->get();
                $member->CurrentProfession = $profession_data[0]->id;
            }
//            $member->MotherProfession = $MotherOtherProfession;
        } else {
            $member->CurrentProfession = Input::get('CurrentProfession');
        }
        $PreviousOtherProfession = Input::get('PreviousOtherProfession');
        if (!empty($PreviousOtherProfession)) {
            $profession_data = Profession::where('name', $PreviousOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $PreviousOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $PreviousOtherProfession)->get();
                $member->PreviousProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $PreviousOtherProfession)->get();
                $member->PreviousProfession = $profession_data[0]->id;
            }
//            $member->MotherProfession = $MotherOtherProfession;
        } else {
            $member->PreviousProfession = Input::get('PreviousProfession');
        }

        $member->Nid = $nid;

        $member->ZoneId = Input::get('ZoneId');
        $member->AreaId = Input::get('AreaId');
        $member->BranchId = Input::get('BranchId');
        $member->DivisionOfficeId = Input::get('DivisionOfficeId');

        $member->FullNameEnglish = Input::get('FullNameEnglish');
        $member->FullNameBangla = Input::get('FullNameBangla');
        $member->Gender = Input::get('Gender');
        $member->Age = Input::get('Age');
        $member->DateofBirth = Input::get('Age1');
        $member->Education = Input::get('Education');
        // $member->PassingYear = Input::get('PassingYear');
//        $member->SpouseProfession = Input::get('SpouseProfession');
//        $member->SpouseOtherProfession = Input::get('SpouseOtherProfession');
        $member->SpouseMobileNo = Input::get('SpouseMobileNo');
        $member->MaritalStatus = Input::get('MaritalStatus');
        $member->Mobile = Input::get('Mobile');
        $member->Email = Input::get('Email');
        $member->PoliticalStatus = Input::get('PoliticalStatus');
        $member->Distance = Input::get('Distance');
        $member->WifeFullNameEnglish = Input::get('WifeFullNameEnglish');
        $member->WifeFullNameBangla = Input::get('WifeFullNameBangla');
        $member->WifeAge = Input::get('WifeAge');
        $member->WifeMobileNo = Input::get('WifeMobileNo');
//        $member->WifeProfession = Input::get('WifeProfession');
//        $member->WifeOtherProfession = Input::get('WifeOtherProfession');

        $member->FatherOrHasbandFullNameEnglish = Input::get('FatherOrHasbandFullNameEnglish');
        $member->FatherOrHasbandFullNameBangla = Input::get('FatherOrHasbandFullNameBangla');

        $member->FatherOrHasbandAge = Input::get('FatherOrHasbandAge');
//        $member->FatherProfession = Input::get('FatherProfession');
        $member->FatherMobileNo = Input::get('FatherMobileNo');
        $member->MotherFUllNameEnglish = Input::get('MotherFUllNameEnglish');
        $member->MotherFUllNameBangla = Input::get('MotherFUllNameBangla');
        $member->MotherAge = Input::get('MotherAge');
//       MotherAg $member->MotherProfession = Input::get('MotherProfession');
        $member->MotherMobileNo = Input::get('MotherMobileNo');
        $member->PresentCountry = Input::get('PresentCountry');
        $member->PresentDivision = Input::get('PresentDivision');
        $member->PresentDistrict = Input::get('PresentDistrict');
        $member->PresentThana = Input::get('PresentThana');
        $member->PresentUnion = Input::get('PresentUnion');
        $member->PresentPostOffice = Input::get('PresentPostOffice');
        $member->PresentWord = Input::get('PresentWord');
        $member->PresentVillage = Input::get('PresentVillage');
        $member->PresentRoadNo = Input::get('PresentRoadNo');
        $member->PermanentCountry = Input::get('PermanentCountry');
        $member->PermanentDivision = Input::get('PermanentDivision');
        $member->PermanentDistrict = Input::get('PermanentDistrict');
        $member->PermanentThana = Input::get('PermanentThana');
        $member->PermanentUnion = Input::get('PermanentUnion');
        $member->PermanentPostOffice = Input::get('PermanentPostOffice');
        $member->PermanentWord = Input::get('PermanentWord');
        $member->PermanentVillage = Input::get('PermanentVillage');
        $member->PermanentRoadNo = Input::get('PermanentRoadNo');
//       $member->CurrentProfession = Input::get('CurrentProfession');
//       $member->PreviousProfession = Input::get('PreviousProfession');
        $member->DurationOfPreviousProfession = Input::get('DurationOfPreviousProfession');
        $member->EarningAssetsByBusinessOrJob = Input::get('EarningAssetsByBusinessOrJob');
        $member->EarningSourceWithoutBusiness = Input::get('EarningSourceWithoutBusiness');
        $member->BusinessType1 = Input::get('BusinessType1');
        $member->BusinessFuturePlan = Input::get('BusinessFuturePlan');

        $member->FamilyType = Input::get('FamilyType');
        $member->FamilyMember = Input::get('FamilyMember');
        $member->EarningMale = Input::get('EarningMale');
        $member->EarningFemale = Input::get('EarningFemale');
        $member->EarningPerson = Input::get('EarningPerson');
        $member->MaleMember = Input::get('MaleMember');
        $member->FemaleMember = Input::get('FemaleMember');
        $member->SickDescriptionOfFamilyMember = Input::get('SickDescriptionOfFamilyMember');
        $member->CaseDescriptionOfFamilyMember = Input::get('CaseDescriptionOfFamilyMember');
        $member->IfAnyMemberInAbroad = Input::get('IfAnyMemberInAbroad');

        $member->CultiviableLand = Input::get('CultiviableLand');
        $member->NonCultivableLand = Input::get('NonCultivableLand');
        $member->Pond = Input::get('Pond');
        $member->House = Input::get('House');
        $member->TotalLand = Input::get('TotalLand');
        $member->TinMadeHouse = Input::get('TinMadeHouse');
        $member->StrawMadeHouse = Input::get('StrawMadeHouse');
        $member->BrickMadeHouse = Input::get('BrickMadeHouse');
        $member->AgriculturalEarning = Input::get('AgriculturalEarning');
        $member->NonAgriculturalEarning = Input::get('NonAgriculturalEarning');
        $member->TotalEarning = Input::get('TotalEarning');
        $member->TotalExpenditure = Input::get('TotalExpenditure');
        $member->NetBalance = Input::get('NetBalance');
        $member->ReceivedAmount = Input::get('ReceivedAmount');
        $member->PaidAmount = Input::get('PaidAmount');
        $member->RemainingAmountToPay = Input::get('RemainingAmountToPay');
        $member->FinancierCompany = Input::get('FinancierCompany');
        $member->LoaningYear = Input::get('LoaningYear');
        $member->LastReceivedDate = Input::get('LastReceivedDate');
        $member->RepaymentType = Input::get('RepaymentType');
        $member->IsHeSheWillingToTakeLoan = Input::get('IsHeSheWillingToTakeLoan');
        $member->InvestmentSector = Input::get('InvestmentSector');
        $member->Amount = Input::get('Amount');
        $member->Comment1 = Input::get('Comment1');
        $member->Comment2 = Input::get('Comment2');

        $member->FatherNid = Input::get('FatherNid');
        $member->MotherNid = Input::get('MotherNid');
        $member->BusinessName = Input::get('BusinessName');
        $member->BusinessNature = Input::get('BusinessNature');
        $member->BusinessExperience = Input::get('BusinessExperience');
        $member->BusinessCenterAddress = Input::get('BusinessCenterAddress');
        $member->BusinessStartDate = Input::get('BusinessStartDate');
        $member->Accommodation = Input::get('Accommodation');
        $member->AccommodationLength = Input::get('AccommodationLength');
        $member->AccommodationWidth = Input::get('AccommodationWidth');
        $member->Direction = Input::get('Direction');
        $member->BusinessPlaceStatus = Input::get('BusinessPlaceStatus');
        $member->TradeLicenceNo = Input::get('TradeLicenceNo');
        $member->LicenceIssuingAuthority = Input::get('LicenceIssuingAuthority');

        $member->InvestedCapital = Input::get('InvestedCapital');
        $member->MonthlyAvarageSale = Input::get('MonthlyAvarageSale');
        $member->BankContribution = Input::get('BankContribution');
        $member->NgoContribution = Input::get('NgoContribution');
        $member->SelfContribution = Input::get('SelfContribution');
        $member->BorrowMoney = Input::get('BorrowMoney');
        $member->MonthlyEarningFromBusiness = Input::get('MonthlyEarningFromBusiness');
        $member->MonthlyExpenditureFromBusiness = Input::get('MonthlyExpenditureFromBusiness');
        $member->SurplusMoney = Input::get('SurplusMoney');
        $member->IncomeFromOthersSources = Input::get('IncomeFromOthersSources');
        $member->OtherSources = Input::get('OtherSources');
        $member->MonthlyExpenditureFromOtherSources = Input::get('MonthlyExpenditureFromOtherSources');
        $member->MonthlySurplus = Input::get('MonthlySurplus');
        $member->MonthlyTotalSurplus = Input::get('MonthlyTotalSurplus');
        $member->BusinessType = Input::get('BusinessType');
        $member->OwnershipType = Input::get('OwnershipType');
        $member->FirstHalfStart = Input::get('FirstHalfStart');
        $member->FirstHalfEnd = Input::get('FirstHalfEnd');
        $member->SecondHalfStart = Input::get('SecondHalfStart');
        $member->SecondHalfEnd = Input::get('SecondHalfEnd');
        $member->TotalTime = Input::get('TotalTime');
        $member->OrgOPeningTime = Input::get('OrgOPeningTime');
        $member->OrgClosingTime = Input::get('OrgClosingTime');
        $member->ClosingIntervalStart = Input::get('ClosingIntervalStart');
        $member->ClosingIntervalClose = Input::get('ClosingIntervalClose');
        $member->WeekEnd = Input::get('WeekEnd');
        $member->OrgPermanentEmployee = Input::get('OrgPermanentEmployee');

        $member->MemberType = Input::get('MemberType');
        $member->SavingTypes = Input::get('SavingTypes');
        $member->SavingPolicy = Input::get('SavingPolicy');
        $member->SamityName = Input::get('SamityName');

        $member->LoanAccount = $nid . "_" . rand(50000, 60000);
        $member->SavingAccount = $nid . "_" . rand(50000, 60000);

        $member->save();
        return ['url' => 'member/list'];
    }

    public function getDelete($id)
    {
        Member::destroy($id);
        return Redirect('member/list');
    }
}