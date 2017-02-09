<?php
namespace App\Http\Controllers;

use App\Accommodation;
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
use App\Nametitle;
use App\OtherSource;
use App\Ownershiptype;
use App\Permanentemployee;
use App\Politicalstatus;
use App\Post;
use App\Profession;
use App\Status;
use App\Survey;
use App\Countr;
use App\Division;
use App\District;
use App\Thana;
use App\Union;
use App\Postoffice;
use App\Ward;
use App\Weekend;
use App\Year_calendar;
use App\Zone;
use App\Area;
use App\Brn;
use App\Member;
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
        $members = Member::where('id', 'like', '%' . Session::get('member_search') . '%')
            ->orderBy(Session::get('member_field'), Session::get('member_sort'))->paginate(8);
        return view('member.list', ['members' => $members]);
    }

    public function getUpdate($id)
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

        $NameTitle = Nametitle::lists('name','id');
        $nameTitle = Nametitle::all();
        $Age = Age::lists('age','id');
        $age = Age::all();
        $PassingYear = Year_calendar::lists('Name','id');
        $passingYear = Year_calendar::all();
        $Profession = Profession::lists('name','id');
        $profession = Profession::all();
        $MaritalStatus = Maritalstatus::lists('name','id');
        $maritalStatus = Maritalstatus::all();
        $Education = Education::lists('name','id');
        $education = Education::all();
        $PoliticalStatus = Politicalstatus::lists('name','id');
        $politicalStatus = Politicalstatus::all();
        $BusinessCategory = Business_catagory::all();
        $Gender = Gender::lists('GenderName','id');
        $gender = Gender::all();
        $familytype = Familytype::all();
        $count = Count::all();
        $status = Status::all();

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
        $country = Countr::all();
        $division = Division::all();
        $Division = Division::lists('DivisionName','id');
        $District = District::lists('DistrictName','id');
        $district = District::all();
        $Thana = Thana::lists('ThanaName','id');
        $thana = Thana::all();
        $PostOffice = Postoffice::lists('PostofficeName','id');
        $postOffice = Postoffice::all();
        $Union = Union::lists('UnionName','id');
        $union = Union::all();
        $Word = Ward::lists('WardName','id');
        $word = Ward::all();
        $ZoneInfo = Zone::lists('ZoneName', 'id');
        $AreaInfo = Area::lists('AreaName', 'id');
        $BranchInfo = Brn::lists('BranchName', 'id');
        return view('member.create')->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('loans', $loans)->with('Accommodation',$Accommodation)
            ->with("Direction",$Direction)->with('BusinessPlaceStatus',$BusinessPlaceStatus)->with('Licenceauthority',$Licenceauthority)
            ->with('OtherSources',$OtherSources)->with('BusinessType',$BusinessType)->with('OwnershipType',$OwnershipType)
            ->with('Weekend',$Weekend)->with('OrgPermanentEmployee',$OrgPermanentEmployee)->with('BusinessLeader',$BusinessLeader)
            ->with('ZoneInfo',$ZoneInfo)->with('AreaInfo',$AreaInfo)->with('BranchInfo',$BranchInfo)->with('NameTitle',$NameTitle)
            ->with('Age',$Age)->with('PassingYear',$PassingYear)->with('Profession',$Profession)->with('MaritalStatus',$MaritalStatus)
            ->with('Education',$Education)->with('PoliticalStatus',$PoliticalStatus)->with('Gender',$Gender)->with('nameTitle',$nameTitle)
            ->with('age',$age)->with('passingYear',$passingYear)->with('profession',$profession)->with('maritalStatus',$maritalStatus)
            ->with('education',$education)->with('politicalStatus',$politicalStatus)->with('gender',$gender)->with('country',$country)
            ->with('district',$district)->with('thana',$thana)->with('postOffice',$postOffice)->with('union',$union)->with('word',$word)
            ->with('BusinessCategory',$BusinessCategory)->with('familytype',$familytype)->with('count',$count)->with('status',$status)
            ->with('division',$division)->with('Division',$Division);
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
        $nid=Session::get('loan_search1');

        $file = Input::file('MemberImage');
        $filefather = Input::file('FatherImage');
        $filemother = Input::file('MotherImage');
        // $input = array('image' => $file);

        $destinationPath = 'uploads/';
        $filename = $nid.$file->getClientOriginalName();
        Input::file('MemberImage')->move($destinationPath, $filename);

        $filenamefather = $nid.$filefather->getClientOriginalName();
        Input::file('FatherImage')->move($destinationPath, $filenamefather);

        $filenamemother = $nid.$filemother->getClientOriginalName();
        Input::file('MotherImage')->move($destinationPath, $filenamemother);

        $member = new Member();
        $member->Nid = $nid;

        $member->ZoneId = Input::get('ZoneId');
        $member->NameTitle = Input::get('NameTitle');
        $member->FirstName = Input::get('FirstName');
        $member->LastName = Input::get('LastName');
        $member->FamilyName = Input::get('FamilyName');

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
        $member->MemberImage =$nid."_". $filename;
        $member->FatherImage =$nid."_". $filenamefather;
        $member->MotherImage =$nid."_". $filenamemother;
        $member->LoanAccount =$nid."_".rand(50000,60000);
        $member->SavingAccount =$nid."_".rand(50000,60000);
        $member->save();
        return ['url' => 'member/list'];
    }

    public function getDelete($id)
    {
        Member::destroy($id);
        return Redirect('member/list');
    }

}