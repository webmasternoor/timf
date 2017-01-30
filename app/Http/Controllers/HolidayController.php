<?php
namespace App\Http\Controllers;

use App\Brn;
use DB;
use App\Holiday;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HolidayController extends Controller
{
    public function getIndex()
    {
        return view('holiday.index');
    }

    public function getList()
    {
        Session::put('holiday_search', Input::has('ok') ? Input::get('search') : (Session::has('holiday_search') ? Session::get('holiday_search') : ''));
        Session::put('holiday_field', Input::has('field') ? Input::get('field') : (Session::has('holiday_field') ? Session::get('holiday_field') : 'id'));
        Session::put('holiday_sort', Input::has('sort') ? Input::get('sort') : (Session::has('holiday_sort') ? Session::get('holiday_sort') : 'asc'));
        $holidays = Holiday::where('id', 'like', '%' . Session::get('holiday_search') . '%')
            ->orderBy(Session::get('holiday_field'), Session::get('holiday_sort'))->paginate(8);
        return view('holiday.list', ['holidays' => $holidays]);
    }

    public function getUpdate($id)
    {
        return view('holiday.update', ['holiday' => Holiday::find($id)]);
    }

    public function postUpdate($id)
    {
        $holiday = Holiday::find($id);
        $rules = ["OfficeId" => "required"];
        if ($holiday->HolidayyName != Input::get('HolidayyName'))
            $rules += ['HolidayyName' => 'required'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $holiday->HolidayyName = Input::get('HolidayyName');
        $holiday->OfficeId = Input::get('OfficeId');
        $holiday->SamityID_CenterID = Input::get('SamityID_CenterID');
        $holiday->HolidayType = Input::get('HolidayType');
        $holiday->Description = Input::get('Description');
        $holiday->OrgID = Input::get('OrgID');
        $holiday->IsActive = Input::get('IsActive');
        $holiday->save();
        return ['url' => 'holiday/list'];
    }

    public function getCreate()
    {
        $branch = Brn::lists('BranchName', 'id');
        return view('holiday.create',compact('branch'));
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "HolidayyName" => "required",
            "OfficeId" => "required",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $holiday = new Holiday();
        $holiday->HolidayyName = Input::get('HolidayyName');
        $holiday->OfficeId = Input::get('OfficeId');
        $holiday->SamityID_CenterID = Input::get('SamityID_CenterID');
        $holiday->HolidayType = Input::get('HolidayType');
        $holiday->Description = Input::get('Description');
        $holiday->OrgID = Input::get('OrgID');
        $holiday->IsActive = Input::get('IsActive');
        $holiday->save();
        return ['url' => 'holiday/list'];
    }

    public function getDelete($id)
    {
        Holiday::destroy($id);
        return Redirect('holiday/list');
    }
}