<?php
namespace App\Http\Controllers;

use App\Accommodation;
use App\Age;
use App\Count;
use App\Education;
use App\Familytype;
use App\Gender;
use App\Maritalstatus;
use App\Nametitle;
use App\Politicalstatus;
use App\Profession;
use App\Status;
use App\Yearcalendar;
use DB;
use App\Post;
use App\Survey;
use App\Countr;
use App\Division;
use App\District;
use App\Thana;
use App\Union;
use App\Postoffice;
use App\Ward;
use App\Zone;
use App\Area;
use App\Brn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function getIndex()
    {
        return view('survey.index');
    }

    public function getList()
    {
        Session::put('survey_search', Input::has('ok') ? Input::get('search') : (Session::has('survey_search') ? Session::get('survey_search') : ''));
        Session::put('survey_field', Input::has('field') ? Input::get('field') : (Session::has('survey_field') ? Session::get('survey_field') : 'id'));
        Session::put('survey_sort', Input::has('sort') ? Input::get('sort') : (Session::has('survey_sort') ? Session::get('survey_sort') : 'asc'));
        $surveys = Survey::where('id', 'like', '%' . Session::get('survey_search') . '%')
            ->orderBy(Session::get('survey_field'), Session::get('survey_sort'))->paginate(8);

        $surveysInfo = Survey::select('surveys.id', 'nametitles.name as NameTitles1', 'surveys.FirstName', 'surveys.LastName', 'surveys.FamilyName', 'surveys.Age', 'surveys.Nid',
            'surveys.Nid', 'surveys.Mobile', 'surveys.Email', 'surveys.created_at', 'genders.GenderName', 'districts.DistrictName')
            ->join('nametitles', 'surveys.NameTitle', '=', 'nametitles.id')
            ->join('districts', 'surveys.PresentDistrict', '=', 'districts.id')
            ->join('genders', 'surveys.Gender', '=', 'genders.id')
//            ->where('DistrictName', 'like', '%' . Session::get('district_search') . '%')
//            ->orderBy(Session::get('district_field'), Session::get('district_sort'))
//            ->select('*')
            ->paginate(8);
        return view('survey.list', ['surveys' => $surveys])->with('surveysInfo', $surveysInfo);
    }

    public function getUpdate($id)
    {
//        $zone = Zone::lists('ZoneName', 'id');
//        $area = Area::lists('AreaName', 'id');
//        $branch = Brn::lists('BranchName', 'id');
        $NameTitle = [''=>'--select--'] +  Nametitle::lists('name', 'id')->all();
        $Age = [''=>'--select--'] +  Age::lists('age', 'id')->all();
        $PassingYear = [''=>'--select--'] +  Yearcalendar::lists('Name', 'id')->all();
        $Profession = [''=>'--select--'] +  Profession::lists('name', 'id')->all();
        $profession =  Profession::all();
        $MaritalStatus = [''=>'--select--'] +  Maritalstatus::lists('name', 'id')->all();
        $Accommodation = [''=>'--select--'] +  Accommodation::lists('name', 'id')->all();
        $Education = [''=>'--select--'] +  Education::lists('name', 'id')->all();
        $PoliticalStatus = [''=>'--select--'] +  Politicalstatus::lists('name', 'id')->all();
        $Gender = [''=>'--select--'] +  Gender::lists('GenderName', 'id')->all();
        $Country = [''=>'--select--'] +  Countr::lists('CountryName', 'id')->all();
        $Division = [''=>'--select--'] +  Division::lists('DivisionName', 'id')->all();
        $District = [''=>'--select--'] +  District::lists('DistrictName', 'id')->all();
        $Thana = [''=>'--select--'] +  Thana::lists('ThanaName', 'id')->all();
        $PostOffice = [''=>'--select--'] +  Postoffice::lists('PostofficeName', 'id')->all();
        $Union = [''=>'--select--'] +  Union::lists('UnionName', 'id')->all();
        $Word = [''=>'--select--'] +  Ward::lists('WardName', 'id')->all();
        $ZoneInfo = [''=>'--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo = [''=>'--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo = [''=>'--select--'] +  Brn::lists('BranchName', 'id')->all();
        $Familytypes = [''=>'--select--'] + Familytype::lists('name', 'id')->all();
        $Count_Data = [''=>'--select--'] +  Count::lists('name', 'id')->all();
        $Status = [''=>'--select--'] + Status::lists('Status', 'id')->all();
        return view('survey.update', ['survey' => Survey::find($id)])->with('ZoneInfo', $ZoneInfo)->with('BranchInfo', $BranchInfo)->with('AreaInfo', $AreaInfo)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Education', $Education)->with('NameTitle', $NameTitle)
            ->with('Age', $Age)->with('Profession', $Profession)->with('Accommodation', $Accommodation)->with('Gender', $Gender)
            ->with('PassingYear', $PassingYear)->with('MaritalStatus', $MaritalStatus)->with('PoliticalStatus', $PoliticalStatus)
            ->with('Division', $Division)->with('profession', $profession)->with('Familytypes', $Familytypes)->with('Count_Data', $Count_Data)
            ->with('Status', $Status);

        //return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function getView($id)
    {
        $education = Education::all();
        $country = Countr::all();
        $district = District::all();
        $thana = Thana::all();
        $postoffice = Postoffice::all();
        $union = Union::all();
        $word = Ward::all();
        $Zone_info = Zone::lists('ZoneName', 'id');
        $ZoneInfo = Zone::all();
        $Area_info = Area::lists('AreaName', 'id');
        $AreaInfo = Area::lists('AreaName', 'id');
        $Branch_info = Brn::lists('BranchName', 'id');
        $BranchInfo = Brn::lists('BranchName', 'id');
        return view('survey.view', ['survey' => Survey::find($id)])->with('Zone_info', $Zone_info)->with('Branch_info', $Branch_info)
            ->with('Area_info', $Area_info)->with('country', $country)->with('district', $district)->with('thana', $thana)
            ->with('postoffice', $postoffice)->with('union', $union)->with('word', $word)->with('education', $education)
            ->with('ZoneInfo', $ZoneInfo)->with('BranchInfo', $BranchInfo)->with('AreaInfo', $AreaInfo);

        //return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function getViewm($id)
    {
        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $NameTitle = Nametitle::lists('name', 'id');
        $Gender = Gender::lists('name', 'id');
        $Age = Age::lists('age', 'id');
        $Education = Education::lists('name', 'id');
        $PoliticalStatus = Politicalstatus::lists('name', 'id');
        $PassingYear = Yearcalendar::lists('Name', 'id');
        $Profession = Profession::lists('name', 'id');
        $MaritalStatus = Maritalstatus::lists('name', 'id');
        $Country = Countr::lists('CountryName', 'id');
        $District = District::lists('DistrictName', 'id');
        $Thana = Thana::lists('ThanaName', 'id');
        $PostOffice = Postoffice::lists('PostofficeName', 'id');
        $Union = Union::lists('UnionName', 'id');
        $Word = Ward::lists('WardName', 'id');

        $education = Education::all();
        $country = Countr::all();
        $district = District::all();
        $thana = Thana::all();
        $postoffice = Postoffice::all();
        $union = Union::all();
        $word = Ward::all();
        $ZoneInfo = Zone::lists('ZoneName', 'id');
        $AreaInfo = Area::lists('AreaName', 'id');
        $BranchInfo = Brn::lists('BranchName', 'id');
        return view('survey.viewm', ['survey' => Survey::find($id)])->with('ZoneInfo', $ZoneInfo)->with('BranchInfo', $BranchInfo)->with('AreaInfo', $AreaInfo)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('education', $education)->with('zone', $zone)->with('area', $area)
            ->with('branch', $branch)->with('NameTitle', $NameTitle)->with('PoliticalStatus', $PoliticalStatus)->with('PassingYear', $PassingYear)
            ->with('Gender', $Gender)->with('Age', $Age)->with('Education', $Education)->with('Profession', $Profession)->with('MaritalStatus', $MaritalStatus)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word);

        //return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function getViews($id)
    {
        $NameTitle = Nametitle::lists('name', 'id');
        $Age = Age::lists('age', 'id');
        $PassingYear = Yearcalendar::lists('Name', 'id');
        $Profession = Profession::lists('name', 'id');
        $profession = Profession::all();
        $MaritalStatus = Maritalstatus::lists('name', 'id');
        $Accommodation = Accommodation::lists('name', 'id');
        $Education = Education::lists('name', 'id');
        $PoliticalStatus = Politicalstatus::lists('name', 'id');
        $Gender = Gender::lists('GenderName', 'id');
        $Country = Countr::lists('CountryName', 'id');
        $Division = Division::lists('DivisionName', 'id');
        $District = District::lists('DistrictName', 'id');
        $Thana = Thana::lists('ThanaName', 'id');
        $PostOffice = Postoffice::lists('PostofficeName', 'id');
        $Union = Union::lists('UnionName', 'id');
        $Word = Ward::lists('WardName', 'id');
        $ZoneInfo = Zone::lists('ZoneName', 'id');
        $AreaInfo = Area::lists('AreaName', 'id');
        $BranchInfo = Brn::lists('BranchName', 'id');
        $Familytypes = Familytype::lists('name', 'id');
        $Count_Data = Count::lists('name', 'id');
        $Status = Status::lists('Status', 'id');
        return view('survey.views', ['survey' => Survey::find($id)])->with('ZoneInfo', $ZoneInfo)->with('BranchInfo', $BranchInfo)->with('AreaInfo', $AreaInfo)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Education', $Education)->with('NameTitle', $NameTitle)
            ->with('Age', $Age)->with('Profession', $Profession)->with('Accommodation', $Accommodation)->with('Gender', $Gender)
            ->with('PassingYear', $PassingYear)->with('MaritalStatus', $MaritalStatus)->with('PoliticalStatus', $PoliticalStatus)
            ->with('Division', $Division)->with('profession', $profession)->with('Familytypes', $Familytypes)->with('Count_Data', $Count_Data)
            ->with('Status', $Status);
        //return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function postUpdate($id)
    {
        $survey = Survey::find($id);
        /*$rules = ["BranchId" => "required"];
        if ($survey->ZoneId != Input::get('ZoneId'))
            $rules += ['ZoneId' => 'required'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/

        $SpouseOtherProfession = Input::get('SpouseOtherProfession');

        if (!empty($SpouseOtherProfession)) {

            $profession_data = Profession::where('name', $SpouseOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $SpouseOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $SpouseOtherProfession)->get();
                $survey->SpouseProfession = $profession_data[0]->id;
            }
        } else {
            $survey->SpouseProfession = Input::get('SpouseProfession');
        }
        $WifeOtherProfession = Input::get('WifeOtherProfession');
        if (!empty($WifeOtherProfession)) {

            $profession_data = Profession::where('name', $WifeOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $WifeOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $survey->WifeProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $survey->WifeProfession = $profession_data[0]->id;
            }

//            $survey->WifeProfession = $WifeOtherProfession;
        } else {
            $survey->WifeProfession = Input::get('WifeProfession');
        }
        $FatherOtherProfession = Input::get('FatherOtherProfession');
        if (!empty($FatherOtherProfession)) {
            $profession_data = Profession::where('name', $FatherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $FatherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $survey->FatherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $survey->FatherProfession = $profession_data[0]->id;
            }
//            $survey->FatherProfession = $FatherOtherProfession;
        } else {
            $survey->FatherProfession = Input::get('FatherProfession');
        }
        $MotherOtherProfession = Input::get('MotherOtherProfession');
        if (!empty($MotherOtherProfession)) {
            $profession_data = Profession::where('name', $MotherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $MotherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $survey->MotherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $survey->MotherProfession = $profession_data[0]->id;
            }
//            $survey->MotherProfession = $MotherOtherProfession;
        } else {
            $survey->MotherProfession = Input::get('MotherProfession');
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
                $survey->CurrentProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $CurrentOtherProfession)->get();
                $survey->CurrentProfession = $profession_data[0]->id;
            }
//            $survey->MotherProfession = $MotherOtherProfession;
        } else {
            $survey->CurrentProfession = Input::get('CurrentProfession');
        }
        $PreviousOtherProfession = Input::get('PreviousOtherProfession');
        if (!empty($PreviousOtherProfession)) {
            $profession_data = Profession::where('name', $PreviousOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $PreviousOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $PreviousOtherProfession)->get();
                $survey->PreviousProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $PreviousOtherProfession)->get();
                $survey->PreviousProfession = $profession_data[0]->id;
            }
//            $survey->MotherProfession = $MotherOtherProfession;
        } else {
            $survey->PreviousProfession = Input::get('PreviousProfession');
        }


        $survey->ZoneId = Input::get('ZoneId');
        $survey->AreaId = Input::get('AreaId');
        $survey->BranchId = Input::get('BranchId');
        $survey->NameTitle = Input::get('NameTitle');
        $survey->FirstName = Input::get('FirstName');
        $survey->LastName = Input::get('LastName');
        $survey->FamilyName = Input::get('FamilyName');
        $survey->FullNameBangla = Input::get('FullNameBangla');
        $survey->Gender = Input::get('Gender');
        $survey->Age = Input::get('Age');
        $survey->Education = Input::get('Education');
        $survey->PassingYear = Input::get('PassingYear');
        $survey->SpouseProfession = Input::get('SpouseProfession');
        $survey->MaritalStatus = Input::get('MaritalStatus');
        $survey->PoliticalStatus = Input::get('PoliticalStatus');
        $survey->Nid = Input::get('Nid');
        $survey->FatherOrHasbandNAmeTitle = Input::get('FatherOrHasbandNAmeTitle');
        $survey->FatherOrHasbandFirstName = Input::get('FatherOrHasbandFirstName');
        $survey->FatherOrHasbandLastName = Input::get('FatherOrHasbandLastName');
        $survey->FatherOrHasbandAge = Input::get('FatherOrHasbandAge');
        $survey->MatherNameTitle = Input::get('MatherNameTitle');
        $survey->MotherFirstName = Input::get('MotherFirstName');
        $survey->MotherLastName = Input::get('MotherLastName');
        $survey->MotherAge = Input::get('MotherAge');
        $survey->PresentCountry = Input::get('PresentCountry');
        $survey->PresentDistrict = Input::get('PresentDistrict');
        $survey->PresentThana = Input::get('PresentThana');
        $survey->PresentUnion = Input::get('PresentUnion');
        $survey->PresentPostOffice = Input::get('PresentPostOffice');
        $survey->PresentWord = Input::get('PresentWord');
        $survey->PresentVillage = Input::get('PresentVillage');
        $survey->PresentRoadNo = Input::get('PresentRoadNo');
        $survey->PermanentCountry = Input::get('PermanentCountry');
        $survey->PermanentDistrict = Input::get('PermanentDistrict');
        $survey->PermanentThana = Input::get('PermanentThana');
        $survey->PermanentUnion = Input::get('PermanentUnion');
        $survey->PermanentPostOffice = Input::get('PermanentPostOffice');
        $survey->PermanentWord = Input::get('PermanentWord');
        $survey->PermanentVillage = Input::get('PermanentVillage');
        $survey->PermanentRoadNo = Input::get('PermanentRoadNo');
        $survey->Mobile = Input::get('Mobile');
        $survey->Email = Input::get('Email');
        $survey->SpouseMobileNo = Input::get('SpouseMobileNo');
        $survey->Distance = Input::get('Distance');
        $survey->CurrentProfession = Input::get('CurrentProfession');
        $survey->PreviousProfession = Input::get('PreviousProfession');
        $survey->DurationOfPreviousProfession = Input::get('DurationOfPreviousProfession');
        $survey->EarningAssetsByBusinessOrJob = Input::get('EarningAssetsByBusinessOrJob');
        $survey->EarningSourceWithoutBusiness = Input::get('EarningSourceWithoutBusiness');
        $survey->BusinessType = Input::get('BusinessType');
        $survey->BusinessFuturePlan = Input::get('BusinessFuturePlan');
        $survey->FamilyMember = Input::get('FamilyMember');
        $survey->EarningMale = Input::get('EarningMale');
        $survey->EarningFemale = Input::get('EarningFemale');
        $survey->EarningPerson = Input::get('EarningPerson');
        $survey->MaleMember = Input::get('MaleMember');
        $survey->FemaleMember = Input::get('FemaleMember');
        $survey->FamilyType = Input::get('FamilyType');
        $survey->SickDescriptionOfFamilyMember = Input::get('SickDescriptionOfFamilyMember');
        $survey->CaseDescriptionOfFamilyMember = Input::get('CaseDescriptionOfFamilyMember');
        $survey->IfAnyMemberInAbroad = Input::get('IfAnyMemberInAbroad');
        $survey->CultiviableLand = Input::get('CultiviableLand');
        $survey->NonCultivableLand = Input::get('NonCultivableLand');
        $survey->Pond = Input::get('Pond');
        $survey->House = Input::get('House');
        $survey->TotalLand = Input::get('TotalLand');
        $survey->AgriculturalEarning = Input::get('AgriculturalEarning');
        $survey->NonAgriculturalEarning = Input::get('NonAgriculturalEarning');
        $survey->TotalEarning = Input::get('TotalEarning');
        $survey->TotalExpenditure = Input::get('TotalExpenditure');
        $survey->NetBalance = Input::get('NetBalance');
        $survey->TinMadeHouse = Input::get('TinMadeHouse');
        $survey->StrawMadeHouse = Input::get('StrawMadeHouse');
        $survey->BrickMadeHouse = Input::get('BrickMadeHouse');
        $survey->ReceivedAmount = Input::get('ReceivedAmount');
        $survey->PaidAmount = Input::get('PaidAmount');
        $survey->RepaymentType = Input::get('RepaymentType');
        $survey->FinancierCompany = Input::get('FinancierCompany');
        $survey->LoaningYear = Input::get('LoaningYear');
        $survey->LastReceivedDate = Input::get('LastReceivedDate');
        $survey->LastReceivedDate1 = Input::get('LastReceivedDate1');
        $survey->IsHeSheWillingToTakeLoan = Input::get('IsHeSheWillingToTakeLoan');
        $survey->InvestmentSector = Input::get('InvestmentSector');
        $survey->Amount = Input::get('Amount');
        $survey->Comment1 = Input::get('Comment1');
        $survey->Comment2 = Input::get('Comment2');
        $survey->WifeNameTitle = Input::get('WifeNameTitle');
        $survey->WifeFirstName = Input::get('WifeFirstName');
        $survey->WifeLastName = Input::get('WifeLastName');
        $survey->WifeFamilyName = Input::get('WifeFamilyName');
        $survey->WifeAge = Input::get('WifeAge');
        $survey->WifeOtherProfession = Input::get('WifeOtherProfession');
        $survey->WifeMobileNo = Input::get('WifeMobileNo');
        $survey->WifeProfession = Input::get('WifeProfession');
        $survey->WifeOtherProfession = Input::get('WifeOtherProfession');
        $survey->FatherProfession = Input::get('FatherProfession');
        $survey->FatherOtherProfession = Input::get('FatherOtherProfession');
        $survey->FatherOrHasbandFamilyName = Input::get('FatherOrHasbandFamilyName');
        $survey->FatherMobileNo = Input::get('FatherMobileNo');
        $survey->MotherProfession = Input::get('MotherProfession');
        $survey->MotherFamilyName = Input::get('MotherFamilyName');
        $survey->MotherOtherProfession = Input::get('MotherOtherProfession');
        $survey->MotherMobileNo = Input::get('MotherMobileNo');
        $survey->JoinDate = Input::get('JoinDate');
        $survey->RemainingAmountToPay = Input::get('RemainingAmountToPay');
        $survey->save();
        return ['url' => 'survey/list'];
    }

    public function getCreate()
    {
        $NameTitle = [''=>'--select--'] +  Nametitle::lists('name', 'id')->all();
        $Age = [''=>'--select--'] +  Age::lists('age', 'id')->all();
        $PassingYear = [''=>'--select--'] +  Yearcalendar::lists('Name', 'id')->all();
        $Profession = [''=>'--select--'] +  Profession::lists('name', 'id')->all();
        $profession =  Profession::all();
        $MaritalStatus = [''=>'--select--'] +  Maritalstatus::lists('name', 'id')->all();
        $Accommodation = [''=>'--select--'] +  Accommodation::lists('name', 'id')->all();
        $Education = [''=>'--select--'] +  Education::lists('name', 'id')->all();
        $PoliticalStatus = [''=>'--select--'] +  Politicalstatus::lists('name', 'id')->all();
        $Gender = [''=>'--select--'] +  Gender::lists('GenderName', 'id')->all();
        $Country = [''=>'--select--'] +  Countr::lists('CountryName', 'id')->all();
        $Division = [''=>'--select--'] +  Division::lists('DivisionName', 'id')->all();
        $District = [''=>'--select--'] +  District::lists('DistrictName', 'id')->all();
        $Thana = [''=>'--select--'] +  Thana::lists('ThanaName', 'id')->all();
        $PostOffice = [''=>'--select--'] +  Postoffice::lists('PostofficeName', 'id')->all();
        $Union = [''=>'--select--'] +  Union::lists('UnionName', 'id')->all();
        $Word = [''=>'--select--'] +  Ward::lists('WardName', 'id')->all();
        $ZoneInfo = [''=>'--select--'] + Zone::lists('ZoneName', 'id')->all();
        $AreaInfo = [''=>'--select--'] + Area::lists('AreaName', 'id')->all();
        $BranchInfo = [''=>'--select--'] +  Brn::lists('BranchName', 'id')->all();
        $Familytypes = [''=>'--select--'] + Familytype::lists('name', 'id')->all();
        $Count_Data = [''=>'--select--'] +  Count::lists('name', 'id')->all();
        $Status = [''=>'--select--'] + Status::lists('Status', 'id')->all();
        return view('survey.create')->with('ZoneInfo', $ZoneInfo)->with('BranchInfo', $BranchInfo)->with('AreaInfo', $AreaInfo)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Word', $Word)->with('Education', $Education)->with('NameTitle', $NameTitle)
            ->with('Age', $Age)->with('Profession', $Profession)->with('Accommodation', $Accommodation)->with('Gender', $Gender)
            ->with('PassingYear', $PassingYear)->with('MaritalStatus', $MaritalStatus)->with('PoliticalStatus', $PoliticalStatus)
            ->with('Division', $Division)->with('profession', $profession)->with('Familytypes', $Familytypes)->with('Count_Data', $Count_Data)
            ->with('Status', $Status);

        /*return view('survey.create')->with('Zone_info', $Zone_info)->with('Branch_info', $Branch_info)->with('Area_info', $Area_info)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('education', $education);    */
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            "ZoneId" => "required|unique:surveys"
            //"SurveyCode" => "required|unique:surveys",
            //"unitpricea" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $survey = new Survey();
        $survey->ZoneId = Input::get('ZoneId');
        $survey->AreaId = Input::get('AreaId');
        $survey->BranchId = Input::get('BranchId');
        $survey->NameTitle = Input::get('NameTitle');
        $survey->FirstName = Input::get('FirstName');
        $survey->LastName = Input::get('LastName');
        $survey->FamilyName = Input::get('FamilyName');
        $survey->FullNameBangla = Input::get('FullNameBangla');
        $survey->Gender = Input::get('Gender');
        $survey->Age = Input::get('Age');
//        $survey->Education = Input::get('Education');
        $survey->PassingYear = Input::get('PassingYear');

        $EducationOther = Input::get('EducationOther');

        if (!empty($EducationOther)) {

            $Education_data = Education::where('name', $EducationOther)->count();

            if ($Education_data == 0) {
                $Education = new Education();
                $Education->name = $EducationOther;
                $Education->save();
                $Education_data = Education::where('name', $EducationOther);
                $survey->Education = $Education_data[0]->id;
            }

        } else {
            $survey->Education = Input::get('Education');
        }
        $SpouseOtherProfession = Input::get('SpouseOtherProfession');

        if (!empty($SpouseOtherProfession)) {

            $profession_data = Profession::where('name', $SpouseOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $SpouseOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $SpouseOtherProfession)->get();
                $survey->SpouseProfession = $profession_data[0]->id;
            }
        } else {
            $survey->SpouseProfession = Input::get('SpouseProfession');
        }
        $WifeOtherProfession = Input::get('WifeOtherProfession');
        if (!empty($WifeOtherProfession)) {

            $profession_data = Profession::where('name', $WifeOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $WifeOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $survey->WifeProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $WifeOtherProfession)->get();
                $survey->WifeProfession = $profession_data[0]->id;
            }

//            $survey->WifeProfession = $WifeOtherProfession;
        } else {
            $survey->WifeProfession = Input::get('WifeProfession');
        }
        $FatherOtherProfession = Input::get('FatherOtherProfession');
        if (!empty($FatherOtherProfession)) {
            $profession_data = Profession::where('name', $FatherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $FatherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $survey->FatherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $FatherOtherProfession)->get();
                $survey->FatherProfession = $profession_data[0]->id;
            }
//            $survey->FatherProfession = $FatherOtherProfession;
        } else {
            $survey->FatherProfession = Input::get('FatherProfession');
        }
        $MotherOtherProfession = Input::get('MotherOtherProfession');
        if (!empty($MotherOtherProfession)) {
            $profession_data = Profession::where('name', $MotherOtherProfession)->count();

            if ($profession_data == 0) {
                $profession = new Profession();
                $profession->name = $MotherOtherProfession;
                $profession->save();
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $survey->MotherProfession = $profession_data[0]->id;
            } else {
                $profession_data = Profession::where('name', '=', $MotherOtherProfession)->get();
                $survey->MotherProfession = $profession_data[0]->id;
            }
//            $survey->MotherProfession = $MotherOtherProfession;
        } else {
            $survey->MotherProfession = Input::get('MotherProfession');
        }
        $survey->MaritalStatus = Input::get('MaritalStatus');
        $survey->PoliticalStatus = Input::get('PoliticalStatus');
        $survey->Nid = Input::get('Nid');
        $survey->FatherOrHasbandNAmeTitle = Input::get('FatherOrHasbandNAmeTitle');
        $survey->FatherOrHasbandFirstName = Input::get('FatherOrHasbandFirstName');
        $survey->FatherOrHasbandLastName = Input::get('FatherOrHasbandLastName');
        $survey->FatherOrHasbandAge = Input::get('FatherOrHasbandAge');
        $survey->MatherNameTitle = Input::get('MatherNameTitle');
        $survey->MotherFirstName = Input::get('MotherFirstName');
        $survey->MotherLastName = Input::get('MotherLastName');
        $survey->MotherAge = Input::get('MotherAge');
        $survey->PresentCountry = Input::get('PresentCountry');
        $survey->PresentDistrict = Input::get('PresentDistrict');
        $survey->PresentThana = Input::get('PresentThana');
        $survey->PresentUnion = Input::get('PresentUnion');
        $survey->PresentPostOffice = Input::get('PresentPostOffice');
        $survey->PresentWord = Input::get('PresentWord');
        $survey->PresentVillage = Input::get('PresentVillage');
        $survey->PresentRoadNo = Input::get('PresentRoadNo');
        $survey->PermanentCountry = Input::get('PermanentCountry');
        $survey->PermanentDistrict = Input::get('PermanentDistrict');
        $survey->PermanentThana = Input::get('PermanentThana');
        $survey->PermanentUnion = Input::get('PermanentUnion');
        $survey->PermanentPostOffice = Input::get('PermanentPostOffice');
        $survey->PermanentWord = Input::get('PermanentWord');
        $survey->PermanentVillage = Input::get('PermanentVillage');
        $survey->PermanentRoadNo = Input::get('PermanentRoadNo');
        $survey->Mobile = Input::get('Mobile');
        $survey->Email = Input::get('Email');
        $survey->SpouseMobileNo = Input::get('SpouseMobileNo');
        $survey->Distance = Input::get('Distance');
        $survey->CurrentProfession = Input::get('CurrentProfession');
        $survey->PreviousProfession = Input::get('PreviousProfession');
        $survey->DurationOfPreviousProfession = Input::get('DurationOfPreviousProfession');
        $survey->EarningAssetsByBusinessOrJob = Input::get('EarningAssetsByBusinessOrJob');
        $survey->EarningSourceWithoutBusiness = Input::get('EarningSourceWithoutBusiness');
        $survey->BusinessType = Input::get('BusinessType');
        $survey->BusinessFuturePlan = Input::get('BusinessFuturePlan');
        $survey->FamilyMember = Input::get('FamilyMember');
        $survey->EarningMale = Input::get('EarningMale');
        $survey->EarningFemale = Input::get('EarningFemale');
        $survey->EarningPerson = Input::get('EarningPerson');
        $survey->MaleMember = Input::get('MaleMember');
        $survey->FemaleMember = Input::get('FemaleMember');
        $survey->FamilyType = Input::get('FamilyType');
        $survey->SickDescriptionOfFamilyMember = Input::get('SickDescriptionOfFamilyMember');
        $survey->CaseDescriptionOfFamilyMember = Input::get('CaseDescriptionOfFamilyMember');
        $survey->IfAnyMemberInAbroad = Input::get('IfAnyMemberInAbroad');
        $survey->CultiviableLand = Input::get('CultiviableLand');
        $survey->NonCultivableLand = Input::get('NonCultivableLand');
        $survey->Pond = Input::get('Pond');
        $survey->House = Input::get('House');
        $survey->TotalLand = Input::get('TotalLand');
        $survey->AgriculturalEarning = Input::get('AgriculturalEarning');
        $survey->NonAgriculturalEarning = Input::get('NonAgriculturalEarning');
        $survey->TotalEarning = Input::get('TotalEarning');
        $survey->TotalExpenditure = Input::get('TotalExpenditure');
        $survey->NetBalance = Input::get('NetBalance');
        $survey->TinMadeHouse = Input::get('TinMadeHouse');
        $survey->StrawMadeHouse = Input::get('StrawMadeHouse');
        $survey->BrickMadeHouse = Input::get('BrickMadeHouse');
        $survey->ReceivedAmount = Input::get('ReceivedAmount');
        $survey->PaidAmount = Input::get('PaidAmount');
        $survey->RepaymentType = Input::get('RepaymentType');
        $survey->FinancierCompany = Input::get('FinancierCompany');
        $survey->LoaningYear = Input::get('LoaningYear');
        $survey->LastReceivedDate = Input::get('LastReceivedDate');
        $survey->LastReceivedDate1 = Input::get('LastReceivedDate1');
        $survey->IsHeSheWillingToTakeLoan = Input::get('IsHeSheWillingToTakeLoan');
        $survey->InvestmentSector = Input::get('InvestmentSector');
        $survey->Amount = Input::get('Amount');
        $survey->Comment1 = Input::get('Comment1');
        $survey->Comment2 = Input::get('Comment2');
        $survey->WifeNameTitle = Input::get('WifeNameTitle');
        $survey->WifeFirstName = Input::get('WifeFirstName');
        $survey->WifeLastName = Input::get('WifeLastName');
        $survey->WifeFamilyName = Input::get('WifeFamilyName');
        $survey->WifeAge = Input::get('WifeAge');
        $survey->WifeOtherProfession = Input::get('WifeOtherProfession');
        $survey->WifeMobileNo = Input::get('WifeMobileNo');
        $survey->WifeProfession = Input::get('WifeProfession');
        $survey->WifeOtherProfession = Input::get('WifeOtherProfession');
        $survey->FatherProfession = Input::get('FatherProfession');
        $survey->FatherOtherProfession = Input::get('FatherOtherProfession');
        $survey->FatherOrHasbandFamilyName = Input::get('FatherOrHasbandFamilyName');
        $survey->FatherMobileNo = Input::get('FatherMobileNo');
        $survey->MotherProfession = Input::get('MotherProfession');
        $survey->MotherFamilyName = Input::get('MotherFamilyName');
        $survey->MotherOtherProfession = Input::get('MotherOtherProfession');
        $survey->MotherMobileNo = Input::get('MotherMobileNo');
        $survey->JoinDate = Input::get('JoinDate');
        $survey->RemainingAmountToPay = Input::get('RemainingAmountToPay');
        $survey->save();
        return ['url' => 'survey/list'];
    }

    public function getDelete($id)
    {
        Survey::destroy($id);
        return Redirect('survey/list');
    }

}