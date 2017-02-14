<?php
namespace App\Http\Controllers;

use App\Age;
use App\Education;
use App\Gender;
use App\Nametitle;
use App\Post;
use App\Profession;
use App\Survey;
use App\Countr;
use App\Division;
use App\District;
use App\Thana;
use App\Union;
use App\Postoffice;
use App\Ward;
use App\Year_calendar;
use App\Zone;
use App\Area;
use App\Brn;
use App\Jamindar;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class JamindarController extends Controller
{
    public function getIndex()
    {
        return view('jamindar.index');
    }

    public function getList()
    {
        Session::put('jamindar_search', Input::has('ok') ? Input::get('search') : (Session::has('jamindar_search') ? Session::get('jamindar_search') : ''));
        Session::put('jamindar_field', Input::has('field') ? Input::get('field') : (Session::has('jamindar_field') ? Session::get('jamindar_field') : 'name'));
        Session::put('jamindar_sort', Input::has('sort') ? Input::get('sort') : (Session::has('jamindar_sort') ? Session::get('jamindar_sort') : 'asc'));
        $jamindars = Jamindar::where('id', 'like', '%' . Session::get('jamindar_search') . '%')
            ->orderBy(Session::get('jamindar_field'), Session::get('jamindar_sort'))->paginate(8);
        return view('jamindar.list', ['jamindars' => $jamindars]);
    }

    public function getUpdate($id)
    {
        $NameTitle = Nametitle::lists('name', 'id');
        $Age = Age::lists('age', 'id');
        $PassingYear = Year_calendar::lists('Name', 'id');
        $Profession = Profession::lists('name', 'id');
        $Education = Education::lists('name', 'id');
        $Gender = Gender::lists('GenderName', 'id');
        $Country = Countr::lists('CountryName', 'id');
        $Division = Division::lists('DivisionName', 'id');
        $District = District::lists('DistrictName', 'id');
        $Thana = Thana::lists('ThanaName', 'id');
        $PostOffice = Postoffice::lists('PostofficeName', 'id');
        $Union = Union::lists('UnionName', 'id');
        $Ward = Ward::lists('WardName', 'id');


        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();

        return view('jamindar.update', ['jamindar' => Jamindar::find($id)])->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Ward', $Ward)->with('NameTitle',$NameTitle)->with('Age',$Age)->with('PassingYear',$PassingYear)
            ->with('Education', $Education)->with('Profession',$Profession)->with('Gender',$Gender)->with('Division',$Division);
        //return view('survey.list', ['surveys' => $surveys]);    

        //return view('jamindar.update', ['jamindar' => Jamindar::find($id)]);
    }

    public function postUpdate($id)
    {
        $jamindar = Jamindar::find($id);
        $rules = ["JamindarFirstName" => "required"];
        if ($jamindar->JamindarFirstName != Input::get('JamindarFirstName'))
            $rules += ['JamindarFirstName' => 'required|unique:jamindars'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $jamindarnid = Input::get('JamindarNid');

        $jamindar->JamindarNid = Input::get('JamindarNid');

        $file = Input::file('JamindarImage');
        // $input = array('image' => $file);

        $destinationPath = 'uploads/';
        if (!empty($file)) {
            $filename = $jamindarnid."_".$file->getClientOriginalName();

            Input::file('JamindarImage')->move($destinationPath, $filename);
            $jamindar->Jamindarphoto = $filename;
        }



        $jamindar->JamindarNameTitle = Input::get('JamindarNameTitle');
        $jamindar->JamindarFirstName = Input::get('JamindarFirstName');
        $jamindar->JamindarLastName = Input::get('JamindarLastName');
        $jamindar->JamindarFamilyName = Input::get('JamindarFamilyName');
        $jamindar->JamindarRelation = Input::get('JamindarRelation');
        $jamindar->JamindarAge = Input::get('JamindarAge');
        $jamindar->JamindarGender = Input::get('JamindarGender');
        $jamindar->JamindarEducation = Input::get('JamindarEducation');
        $jamindar->JamindarPassingYear = Input::get('JamindarPassingYear');
        $jamindar->FatherOrHasbandNAmeTitle = Input::get('FatherOrHasbandNAmeTitle');
        $jamindar->FatherOrHasbandFirstName = Input::get('FatherOrHasbandFirstName');
        $jamindar->FatherOrHasbandLastName = Input::get('FatherOrHasbandLastName');
        $jamindar->FatherOrHasbandAge = Input::get('FatherOrHasbandAge');
        $jamindar->JamindarCountry = Input::get('JamindarCountry');
        $jamindar->JamindarDistrict = Input::get('JamindarDistrict');
        $jamindar->JamindarThana = Input::get('JamindarThana');
        $jamindar->JamindarPostoffice = Input::get('JamindarPostoffice');
        $jamindar->JamindarUnion = Input::get('JamindarUnion');
        $jamindar->JamindarWord = Input::get('JamindarWord');
        $jamindar->JamindarVillage = Input::get('JamindarVillage');
        $jamindar->JamindarCountry1 = Input::get('JamindarCountry1');
        $jamindar->JamindarDistrict1 = Input::get('JamindarDistrict1');
        $jamindar->JamindarThana1 = Input::get('JamindarThana1');
        $jamindar->JamindarPostoffice1 = Input::get('JamindarPostoffice1');
        $jamindar->JamindarUnion1 = Input::get('JamindarUnion1');
        $jamindar->JamindarWord1 = Input::get('JamindarWord1');
        $jamindar->JamindarVillage1 = Input::get('JamindarVillage1');
        $jamindar->JamindarMobile1 = Input::get('JamindarMobile1');
        $jamindar->JamindarEmail = Input::get('JamindarEmail');

        $jamindar->JamindarBusinessOrJobAddress = Input::get('JamindarBusinessOrJobAddress');
        $jamindar->JamindarProfession1 = Input::get('JamindarProfession1');
        $jamindar->JamindarMonthlyNetIncome = Input::get('JamindarMonthlyNetIncome');
        $jamindar->JamindarMonthlyNetExpences = Input::get('JamindarMonthlyNetExpences');
        $jamindar->JamindarMonthlyNetSurplus = Input::get('JamindarMonthlyNetSurplus');
        $jamindar->JamindarTotalNetMoney = Input::get('JamindarTotalNetMoney');
        $jamindar->JamindarSocialStatus = Input::get('JamindarSocialStatus');

        $jamindar->save();
        return ['url' => 'jamindar/list'];
    }

    public function getCreate()
    {
        
        Session::put('loan_search2', Input::has('ok') ? Input::get('search2') : (Session::has('loan_search2') ? Session::get('loan_search2') : ''));
        Session::put('loan_field', Input::has('field') ? Input::get('field') : (Session::has('loan_field') ? Session::get('loan_field') : 'Nid'));
        Session::put('loan_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loan_sort') ? Session::get('loan_sort') : 'asc'));
        $loan1s = Survey::where('Nid', 'like', '%' . Session::get('loan_search2') . '%')
            ->orderBy(Session::get('loan_field'), Session::get('loan_sort'))->paginate(1);
        $Nidsession = Session::get('loan_search2');


        $NameTitle = Nametitle::lists('name', 'id');
        $Age = Age::lists('age', 'id');
        $PassingYear = Year_calendar::lists('Name', 'id');
        $Profession = Profession::lists('name', 'id');
        $Education = Education::lists('name', 'id');
        $Gender = Gender::lists('GenderName', 'id');
        $Country = Countr::lists('CountryName', 'id');
        $Division = Division::lists('DivisionName', 'id');
        $District = District::lists('DistrictName', 'id');
        $Thana = Thana::lists('ThanaName', 'id');
        $PostOffice = Postoffice::lists('PostofficeName', 'id');
        $Union = Union::lists('UnionName', 'id');
        $Ward = Ward::lists('WardName', 'id');


        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();

        return view('jamindar.create')->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('Country', $Country)->with('District', $District)->with('Thana', $Thana)->with('PostOffice', $PostOffice)
            ->with('Union', $Union)->with('Ward', $Ward)->with('NameTitle',$NameTitle)->with('Age',$Age)->with('PassingYear',$PassingYear)
            ->with('Education', $Education)->with('Profession',$Profession)->with('Gender',$Gender)->with('Division',$Division)
            ->with('loan1s', $loan1s);
       // return view('jamindar.create');
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            //"name" => "required|unique:jamindars",
            //"JamindarCode" => "required|unique:jamindars",
            //"unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $jamindarnid = Input::get('JamindarNid');
        $jamindar = new Jamindar();
//        $jamindar->Nid = Session::get('loan_search2');
        $jamindar->JamindarNid = Input::get('JamindarNid');

        $file = Input::file('JamindarImage');
        // $input = array('image' => $file);

        $destinationPath = 'uploads/';
        if (!empty($file)) {
            $filename = $jamindarnid."_".$file->getClientOriginalName();

            Input::file('JamindarImage')->move($destinationPath, $filename);
            $jamindar->Jamindarphoto = $filename;
        }



        $jamindar->JamindarNameTitle = Input::get('JamindarNameTitle');
        $jamindar->JamindarFirstName = Input::get('JamindarFirstName');
        $jamindar->JamindarLastName = Input::get('JamindarLastName');
        $jamindar->JamindarFamilyName = Input::get('JamindarFamilyName');
        $jamindar->JamindarRelation = Input::get('JamindarRelation');
        $jamindar->JamindarAge = Input::get('JamindarAge');
        $jamindar->JamindarGender = Input::get('JamindarGender');
        $jamindar->JamindarEducation = Input::get('JamindarEducation');
        $jamindar->JamindarPassingYear = Input::get('JamindarPassingYear');
        $jamindar->FatherOrHasbandNAmeTitle = Input::get('FatherOrHasbandNAmeTitle');
        $jamindar->FatherOrHasbandFirstName = Input::get('FatherOrHasbandFirstName');
        $jamindar->FatherOrHasbandLastName = Input::get('FatherOrHasbandLastName');
        $jamindar->FatherOrHasbandAge = Input::get('FatherOrHasbandAge');
        $jamindar->JamindarCountry = Input::get('JamindarCountry');
        $jamindar->JamindarDistrict = Input::get('JamindarDistrict');
        $jamindar->JamindarThana = Input::get('JamindarThana');
        $jamindar->JamindarPostoffice = Input::get('JamindarPostoffice');
        $jamindar->JamindarUnion = Input::get('JamindarUnion');
        $jamindar->JamindarWord = Input::get('JamindarWord');
        $jamindar->JamindarVillage = Input::get('JamindarVillage');
        $jamindar->JamindarCountry1 = Input::get('JamindarCountry1');
        $jamindar->JamindarDistrict1 = Input::get('JamindarDistrict1');
        $jamindar->JamindarThana1 = Input::get('JamindarThana1');
        $jamindar->JamindarPostoffice1 = Input::get('JamindarPostoffice1');
        $jamindar->JamindarUnion1 = Input::get('JamindarUnion1');
        $jamindar->JamindarWord1 = Input::get('JamindarWord1');
        $jamindar->JamindarVillage1 = Input::get('JamindarVillage1');
        $jamindar->JamindarMobile1 = Input::get('JamindarMobile1');
        $jamindar->JamindarEmail = Input::get('JamindarEmail');

        $jamindar->JamindarBusinessOrJobAddress = Input::get('JamindarBusinessOrJobAddress');
        $jamindar->JamindarProfession1 = Input::get('JamindarProfession1');
        $jamindar->JamindarMonthlyNetIncome = Input::get('JamindarMonthlyNetIncome');     
        $jamindar->JamindarMonthlyNetExpences = Input::get('JamindarMonthlyNetExpences');
        $jamindar->JamindarMonthlyNetSurplus = Input::get('JamindarMonthlyNetSurplus');
        $jamindar->JamindarTotalNetMoney = Input::get('JamindarTotalNetMoney');
        $jamindar->JamindarSocialStatus = Input::get('JamindarSocialStatus');
        $jamindar->save();
        return ['url' => 'jamindar/list'];
    }

    public function getDelete($id)
    {
        Jamindar::destroy($id);
        return Redirect('jamindar/list');
    }

}