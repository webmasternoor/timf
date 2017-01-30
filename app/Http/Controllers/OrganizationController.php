<?php
namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function getIndex()
    {
        return view('organization.index');
    }

    public function getList()
    {
        Session::put('organization_search', Input::has('ok') ? Input::get('search') : (Session::has('organization_search') ? Session::get('organization_search') : ''));
        Session::put('organization_field', Input::has('field') ? Input::get('field') : (Session::has('organization_field') ? Session::get('organization_field') : 'id'));
        Session::put('organization_sort', Input::has('sort') ? Input::get('sort') : (Session::has('organization_sort') ? Session::get('organization_sort') : 'asc'));
        $organizations = Organization::where('id', 'like', '%' . Session::get('organization_search') . '%')
            ->orderBy(Session::get('organization_field'), Session::get('organization_sort'))->paginate(8);
        return view('organization.list', ['organizations' => $organizations]);
    }

    public function getUpdate($id)
    {
        return view('organization.update', ['organization' => Organization::find($id)]);
    }

    public function postUpdate($id)
    {
        $organization = Organization::find($id);
        $rules = ["OrganizationName" => "required"];
        if ($organization->OrganizationName != Input::get('OrganizationName'))
            $rules += ['OrganizationName' => 'required|unique:organizations'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $organization->OrganizationCode = Input::get('OrganizationCode');
        $organization->OrganizationName = Input::get('OrganizationName');
        $organization->OrganizationAddress = Input::get('OrganizationAddress');
        $organization->YearEndingDate = Input::get('YearEndingDate');
        $organization->CashBook = Input::get('CashBook');
        $organization->PLAccount = Input::get('PLAccount');
        $organization->BankAccount = Input::get('BankAccount');
        $organization->PhoneNumber = Input::get('PhoneNumber');
        $organization->MobileNumber = Input::get('MobileNumber');
        $organization->EmailId = Input::get('EmailId');
        $organization->StartWorkingDay = Input::get('StartWorkingDay');
        $organization->WorkType = Input::get('WorkType');
        $organization->LicenceNo = Input::get('LicenceNo');
        $organization->LicenceStartDate = Input::get('LicenceStartDate');
        $organization->LicenceValidityEndingDate = Input::get('LicenceValidityEndingDate');
        $organization->save();
        return ['url' => 'organization/list'];
    }

    public function getCreate()
    {
        return view('organization.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "OrganizationCode" => "required|unique:organizations"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $organization = new Organization();
        $organization->OrganizationCode = Input::get('OrganizationCode');
        $organization->OrganizationName = Input::get('OrganizationName');
        $organization->OrganizationAddress = Input::get('OrganizationAddress');
        $organization->YearEndingDate = Input::get('YearEndingDate');
        $organization->CashBook = Input::get('CashBook');
        $organization->PLAccount = Input::get('PLAccount');
        $organization->BankAccount = Input::get('BankAccount');
        $organization->PhoneNumber = Input::get('PhoneNumber');
        $organization->MobileNumber = Input::get('MobileNumber');
        $organization->EmailId = Input::get('EmailId');
        $organization->StartWorkingDay = Input::get('StartWorkingDay');
        $organization->WorkType = Input::get('WorkType');
        $organization->LicenceNo = Input::get('LicenceNo');
        $organization->LicenceStartDate = Input::get('LicenceStartDate');
        $organization->LicenceValidityEndingDate = Input::get('LicenceValidityEndingDate');
        $organization->save();
        return ['url' => 'organization/list'];
    }

    public function getDelete($id)
    {
        Organization::destroy($id);
        return Redirect('organization/list');
    }

}