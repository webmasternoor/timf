<?php
namespace App\Http\Controllers;

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
        return view('survey.list', ['surveys' => $surveys]);
    }

    public function getUpdate($id)
    {
        $education= DB::table('educations')->get();
        $country=Countr::all();
        $district=District::all();
        $thana=Thana::all();
        $postoffice=Postoffice::all();
        $union=Union::all();
        $word=Ward::all();
        $Zone_info = Zone::lists('ZoneName', 'id');
        $Area_info = Area::lists('AreaName', 'id');
        $Branch_info = Brn::lists('BranchName', 'id');
        return view('survey.update', ['survey' => Survey::find($id)])->with('Zone_info', $Zone_info)->with('Branch_info', $Branch_info)->with('Area_info', $Area_info)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('education', $education);

        //return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function getView($id)
    {
        $education= DB::table('educations')->get();
        $country=Countr::all();
        $district=District::all();
        $thana=Thana::all();
        $postoffice=Postoffice::all();
        $union=Union::all();
        $word=Ward::all();
        $Zone_info = Zone::lists('ZoneName', 'id');
        $Area_info = Area::lists('AreaName', 'id');
        $Branch_info = Brn::lists('BranchName', 'id');
        return view('survey.view', ['survey' => Survey::find($id)])->with('Zone_info', $Zone_info)->with('Branch_info', $Branch_info)->with('Area_info', $Area_info)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('education', $education);

        //return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function getViewm($id)
    {
        $education= DB::table('educations')->get();
        $country=Countr::all();
        $district=District::all();
        $thana=Thana::all();
        $postoffice=Postoffice::all();
        $union=Union::all();
        $word=Ward::all();
        $Zone_info = Zone::lists('ZoneName', 'id');
        $Area_info = Area::lists('AreaName', 'id');
        $Branch_info = Brn::lists('BranchName', 'id');
        return view('survey.viewm', ['survey' => Survey::find($id)])->with('Zone_info', $Zone_info)->with('Branch_info', $Branch_info)->with('Area_info', $Area_info)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('education', $education);

        //return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function getViews($id)
    {
        $education= DB::table('educations')->get();
        $country=Countr::all();
        $district=District::all();
        $thana=Thana::all();
        $postoffice=Postoffice::all();
        $union=Union::all();
        $word=Ward::all();
        $Zone_info = Zone::lists('ZoneName', 'id');
        $Area_info = Area::lists('AreaName', 'id');
        $Branch_info = Brn::lists('BranchName', 'id');
        return view('survey.views', ['survey' => Survey::find($id)])->with('Zone_info', $Zone_info)->with('Branch_info', $Branch_info)->with('Area_info', $Area_info)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('education', $education);

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
        $survey->PreviousProfessiion = Input::get('PreviousProfessiion');
        $survey->DorationOfPreviousProfession = Input::get('DorationOfPreviousProfession');
        $survey->EarningAssetsByBusinessOrJob = Input::get('EarningAssetsByBusinessOrJob');
        $survey->EarningSourceWithoutBusiness = Input::get('EarningSourceWithoutBusiness');
        $survey->BusinessType = Input::get('BusinessType');
        $survey->BusinessFrturePlan = Input::get('BusinessFrturePlan');
        $survey->FamilyMebmer = Input::get('FamilyMebmer');
        $survey->EarningMale = Input::get('EarningMale');
        $survey->EarningFemale = Input::get('EarningFemale');
        $survey->EarningPerson = Input::get('EarningPerson');
        $survey->MaleMember = Input::get('MaleMember');
        $survey->FemaleMenber = Input::get('FemaleMenber');
        $survey->FamilyType = Input::get('FamilyType');
        $survey->SickDescripotionOfFamilyMember = Input::get('SickDescripotionOfFamilyMember');
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
//        $zone = Zone::all();
       // $area = Area::all();
       // $branch = Brn::all();
        $education= DB::table('educations')->get();
        $country=Countr::all();
        $district=District::all();
        $thana=Thana::all();
        $postoffice=Postoffice::all();
        $union=Union::all();
        $word=Ward::all();
        $Zone_info = Zone::lists('ZoneName', 'id');
        $Area_info = Area::lists('AreaName', 'id');
        $Branch_info = Brn::lists('BranchName', 'id');
        return view('survey.create')->with('Zone_info', $Zone_info)->with('Branch_info', $Branch_info)->with('Area_info', $Area_info)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('education', $education);

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
        $survey->PreviousProfessiion = Input::get('PreviousProfessiion');
        $survey->DorationOfPreviousProfession = Input::get('DorationOfPreviousProfession');
        $survey->EarningAssetsByBusinessOrJob = Input::get('EarningAssetsByBusinessOrJob');
        $survey->EarningSourceWithoutBusiness = Input::get('EarningSourceWithoutBusiness');
        $survey->BusinessType = Input::get('BusinessType');
        $survey->BusinessFrturePlan = Input::get('BusinessFrturePlan');        
        $survey->FamilyMebmer = Input::get('FamilyMebmer');
        $survey->EarningMale = Input::get('EarningMale');
        $survey->EarningFemale = Input::get('EarningFemale');
        $survey->EarningPerson = Input::get('EarningPerson');
        $survey->MaleMember = Input::get('MaleMember');
        $survey->FemaleMenber = Input::get('FemaleMenber');
        $survey->FamilyType = Input::get('FamilyType');
        $survey->SickDescripotionOfFamilyMember = Input::get('SickDescripotionOfFamilyMember');
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