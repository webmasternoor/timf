<?php
namespace App\Http\Controllers;

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
use App\Loan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoanController extends Controller
{
    public function getIndex()
    {
        return view('loan.index');
    }

    public function getList()
    {
        Session::put('loan_search', Input::has('ok') ? Input::get('search') : (Session::has('loan_search') ? Session::get('loan_search') : ''));
        Session::put('loan_field', Input::has('field') ? Input::get('field') : (Session::has('loan_field') ? Session::get('loan_field') : 'id'));
        Session::put('loan_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loan_sort') ? Session::get('loan_sort') : 'asc'));
        $loans = Loan::where('id', 'like', '%' . Session::get('loan_search') . '%')
            ->orderBy(Session::get('loan_field'), Session::get('loan_sort'))->paginate(8);
        return view('loan.list', ['loans' => $loans]);
    }

    public function getUpdate($id)
    {
        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $Education= '';
        $country=Countr::all();
        $district=District::all();
        $thana=Thana::all();
        $postoffice=Postoffice::all();
        $union=Union::all();
        $word=Ward::all();
        return view('loan.update', ['loan' => Loan::find($id)])->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word);

        //return view('loan.update', ['loan' => Loan::find($id)]);
    }

    public function postUpdate($id)
    {
        $loan = Loan::find($id);
        $rules = ["nid" => "required"];
        if ($loan->nid != Input::get('nid'))
            $rules += ['nid' => 'required|unique:loans'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $nid=Session::get('loan_search1');

        $destinationPath = 'uploads/';
        $file = Input::file('MainRecordOrVauchar');
        $filename1 = $nid.$file->getClientOriginalName();
        Input::file('MainRecordOrVauchar')->move($destinationPath, $filename1);

        $file = Input::file('MemberImage');
        $filename = $nid.$file->getClientOriginalName();
        Input::file('MemberImage')->move($destinationPath, $filename);

        $file = Input::file('VatDCR');
        $filename2 = $nid.$file->getClientOriginalName();
        Input::file('VatDCR')->move($destinationPath, $filename2);

        $file = Input::file('LedgerDCR');
        $filename3 = $nid.$file->getClientOriginalName();
        Input::file('LedgerDCR')->move($destinationPath, $filename3);

        $file = Input::file('ShopDeed');
        $filename4 = $nid.$file->getClientOriginalName();
        Input::file('ShopDeed')->move($destinationPath, $filename4);

        $file = Input::file('TradeLicenceImg');
        $filename5 = $nid.$file->getClientOriginalName();
        Input::file('TradeLicenceImg')->move($destinationPath, $filename5);

        $file = Input::file('CarRegistrationImg');
        $filename6 = $nid.$file->getClientOriginalName();
        Input::file('CarRegistrationImg')->move($destinationPath, $filename6);

        $file = Input::file('CitizenCertificateImg');
        $filename7 = $nid.$file->getClientOriginalName();
        Input::file('CitizenCertificateImg')->move($destinationPath, $filename7);

        $file = Input::file('BankBlankCheck');
        $filename8 = $nid.$file->getClientOriginalName();
        Input::file('BankBlankCheck')->move($destinationPath, $filename8);

        $file = Input::file('AgreementImg');
        $filename9 = $nid.$file->getClientOriginalName();
        Input::file('AgreementImg')->move($destinationPath, $filename9);

        $file = Input::file('JamindarInfoDataImg');
        $filename10 = $nid.$file->getClientOriginalName();
        Input::file('JamindarInfoDataImg')->move($destinationPath, $filename10);

        $loan->JobOrgName = Input::get('JobOrgName');
        $loan->JobOrgPlace = Input::get('JobOrgPlace');
        $loan->JobIdNo = Input::get('JobIdNo');
        $loan->ShenaNo = Input::get('ShenaNo');
        $loan->JobDesignation = Input::get('JobDesignation');
        $loan->JobUniteName = Input::get('JobUniteName');
        $loan->DivisionName = Input::get('DivisionName');
        $loan->JobDuration = Input::get('JobDuration');
        $loan->JobSalary = Input::get('JobSalary');
        $loan->LoanProviderOrgName = Input::get('LoanProviderOrgName');
        $loan->LoanProviderOrgAddress = Input::get('LoanProviderOrgAddress');
        $loan->AmountOfReceivedLoan = Input::get('AmountOfReceivedLoan');
        $loan->ProductName = Input::get('ProductName');
        $loan->InvestmentTypeNo = Input::get('InvestmentTypeNo');
        $loan->LoanReceiveDuration = Input::get('LoanReceiveDuration');
        $loan->LoanReceivedDate = Input::get('LoanReceivedDate');
        $loan->AmountOfLoanRepay = Input::get('AmountOfLoanRepay');
        $loan->CorrentStatus = Input::get('CorrentStatus');
        $loan->RemainingInstallment = Input::get('RemainingInstallment');
        $loan->ApproximateRepaidDate = Input::get('ApproximateRepaidDate');
        $loan->LoanProviderOrgName1 = Input::get('LoanProviderOrgName1');
        $loan->LoanProviderOrgAddress1 = Input::get('LoanProviderOrgAddress1');
        $loan->AmountOfReceivedLoan1 = Input::get('AmountOfReceivedLoan1');
        $loan->ProductName1 = Input::get('ProductName1');
        $loan->InvestmentTypeNo1 = Input::get('InvestmentTypeNo1');
        $loan->LoanReceiveDuration1 = Input::get('LoanReceiveDuration1');
        $loan->LoanReceivedDate1 = Input::get('LoanReceivedDate1');
        $loan->AmountOfLoanRepay1 = Input::get('AmountOfLoanRepay1');
        $loan->CorrentStatus1 = Input::get('CorrentStatus1');
        $loan->RemainingInstallment1 = Input::get('RemainingInstallment1');
        $loan->ApproximateRepaidDate1 = Input::get('ApproximateRepaidDate1');
        $loan->DonorOrgName = Input::get('DonorOrgName');
        $loan->DonorOrgAddress = Input::get('DonorOrgAddress');
        $loan->AmountOfBorrowedLoan = Input::get('AmountOfBorrowedLoan');
        $loan->product12Name = Input::get('product12Name');
        $loan->InvestmentStepNo = Input::get('InvestmentStepNo');
        $loan->InvestmentDuration = Input::get('InvestmentDuration');
        $loan->InvestmentBorrowedDate = Input::get('InvestmentBorrowedDate');
        $loan->AmountOfRepaidMoney = Input::get('AmountOfRepaidMoney');
        $loan->CurrentBalanceOfBorrow = Input::get('CurrentBalanceOfBorrow');
        $loan->RemainingInstalments = Input::get('RemainingInstalments');
        $loan->AproximateDateOfPayment = Input::get('AproximateDateOfPayment');
        $loan->DonorOrgName1 = Input::get('DonorOrgName1');
        $loan->DonorOrgAddress1 = Input::get('DonorOrgAddress1');
        $loan->AmountOfBorrowedLoan1 = Input::get('AmountOfBorrowedLoan1');
        $loan->DonarOrgProductName = Input::get('DonarOrgProductName');
        $loan->InvestmentStepNo1 = Input::get('InvestmentStepNo1');
        $loan->InvestmentDuration1 = Input::get('InvestmentDuration1');
        $loan->InvestmentBorrowedDate1 = Input::get('InvestmentBorrowedDate1');
        $loan->AmountOfRepaidMoney1 = Input::get('AmountOfRepaidMoney1');
        $loan->CurrentBalanceOfBorrow1 = Input::get('CurrentBalanceOfBorrow1');
        $loan->RemainingInstalments1 = Input::get('RemainingInstalments1');
        $loan->AproximateDateOfPayment1 = Input::get('AproximateDateOfPayment1');
        $loan->OthersIncomeSources1 = Input::get('OthersIncomeSources1');
        $loan->OthersIncomeSources2 = Input::get('OthersIncomeSources2');
        $loan->OthersIncomeSources3 = Input::get('OthersIncomeSources3');
        $loan->GPositionPrice = Input::get('GPositionPrice');
        $loan->GPositionDuration = Input::get('GPositionDuration');
        $loan->GValidityYear = Input::get('GValidityYear');
        $loan->GMouza = Input::get('GMouza');
        $loan->GCSKhotiyanNo = Input::get('GCSKhotiyanNo');
        $loan->GHallKhotiyanNo = Input::get('GHallKhotiyanNo');
        $loan->GRSDPKhotiyanNo = Input::get('GRSDPKhotiyanNo');
        $loan->GCSDagNo = Input::get('GCSDagNo');
        $loan->GHalDagNo = Input::get('GHalDagNo');
        $loan->GJLNo = Input::get('GJLNo');
        $loan->GHoldingNo = Input::get('GHoldingNo');
        $loan->GLandAmount = Input::get('GLandAmount');
        $loan->GApproximatePrice = Input::get('GApproximatePrice');
        $loan->GLandOwerShip = Input::get('GLandOwerShip');
        $loan->AdvancedCheckBankName = Input::get('AdvancedCheckBankName');
        $loan->GBankBranchName = Input::get('GBankBranchName');
        $loan->GBankAccountNo = Input::get('GBankAccountNo');
        $loan->ProjectName = Input::get('ProjectName');
        $loan->PreviousInvestmentType = Input::get('PreviousInvestmentType');
        $loan->PreviousReceivedAmount = Input::get('PreviousReceivedAmount');
        $loan->AmountReceivedStep = Input::get('AmountReceivedStep');
        $loan->PreviousInvestmentReceivedDate = Input::get('PreviousInvestmentReceivedDate');
        $loan->PreviousInvestmentRepaidDate = Input::get('PreviousInvestmentRepaidDate');
        $loan->Repaymentattitude = Input::get('Repaymentattitude');
        $loan->AdvancedPaidInstalation = Input::get('AdvancedPaidInstalation');
        $loan->PaidMoneyPerInstalment = Input::get('PaidMoneyPerInstalment');
        $loan->GenaralSaving = Input::get('GenaralSaving');
        $loan->SpecialSaving = Input::get('SpecialSaving');
        $loan->TssMoney = Input::get('TssMoney');
        $loan->TotalSavingAmount = Input::get('TotalSavingAmount');
        $loan->ProposedAmountInNumber = Input::get('ProposedAmountInNumber');
        $loan->ProposedAmountInWord = Input::get('ProposedAmountInWord');
        $loan->ProposedInvesmentDuration = Input::get('ProposedInvesmentDuration');
        $loan->ProposedInvestmentStep = Input::get('ProposedInvestmentStep');
        $loan->ProposedInvesmentName = Input::get('ProposedInvesmentName');
        $loan->MainRecordOrVauchar =$nid."_".$filename1 ;
        $loan->VatDCR =$nid."_".$filename2 ;
        $loan->LedgerDCR =$nid."_".$filename3 ;
        $loan->ShopDeed =$nid."_".$filename4 ;
        $loan->TradeLicenceImg =$nid."_".$filename5 ;
        $loan->CarRegistrationImg =$nid."_".$filename6 ;
        $loan->CitizenCertificateImg =$nid."_".$filename7 ;
        $loan->BankBlankCheck =$nid."_".$filename8 ;
        $loan->AgreementImg =$nid."_".$filename9 ;
        $loan->JamindarInfoDataImg =$nid."_".$filename10 ;
        $loan->save();
        return ['url' => 'loan/list'];
    }

    public function getCreate()
    {
        
        Session::put('loan_search1', Input::has('ok') ? Input::get('search1') : (Session::has('loan_search1') ? Session::get('loan_search1') : ''));
        Session::put('loan_field', Input::has('field') ? Input::get('field') : (Session::has('loan_field') ? Session::get('loan_field') : 'Nid'));
        Session::put('loan_sort', Input::has('sort') ? Input::get('sort') : (Session::has('loan_sort') ? Session::get('loan_sort') : 'asc'));
        $loans = Survey::where('Nid', 'like', '%' . Session::get('loan_search1') . '%')
            ->orderBy(Session::get('loan_field'), Session::get('loan_sort'))->paginate(1);
        $Nidsession = Session::get('loan_search1');
        //return view('loan.list', ['loans' => $loans]);

        // testing for survey searching starting point
            
        /*Session::put('survey_search1', Input::has('ok') ? Input::get('search1') : (Session::has('survey_search1') ? Session::get('survey_search1') : ''));
        Session::put('survey_field', Input::has('field') ? Input::get('field') : (Session::has('survey_field') ? Session::get('survey_field') : 'id'));
        Session::put('survey_sort', Input::has('sort') ? Input::get('sort') : (Session::has('survey_sort') ? Session::get('survey_sort') : 'asc'));
        $surveys = Loan::where('id', 'like', '%' . Session::get('survey_search1') . '%')
            ->orderBy(Session::get('survey_field'), Session::get('survey_sort'))->paginate(8);    
*/
        // testing for survey searching ending point    

        $zone = Zone::all();
        $area = Area::all();
        $branch = Brn::all();
        $Education= '';
        $country=Countr::all();
        $district=District::all();
        $thana=Thana::all();
        $postoffice=Postoffice::all();
        $union=Union::all();
        $word=Ward::all();
        return view('loan.create')->with('zone', $zone)->with('branch', $branch)->with('area', $area)
            ->with('country', $country)->with('district', $district)->with('thana', $thana)->with('postoffice', $postoffice)
            ->with('union', $union)->with('word', $word)->with('loans', $loans);
        //return view('loan.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
           // "Nid" => "required|unique:loans",
            "LedgerDCR" => "mimes:jpg,jpeg,bmp,png,gif",
            "VatDCR" => "mimes:jpg,jpeg,bmp,png,gif",
            "MainRecordOrVauchar" => "image|mimes:jpeg,jpg,bmp,png|max:2000",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }

        $nid=Session::get('loan_search1');

        $destinationPath = 'uploads/';
        $file = Input::file('MainRecordOrVauchar');
        $filename1 = $nid.$file->getClientOriginalName();
        Input::file('MainRecordOrVauchar')->move($destinationPath, $filename1);

//        $file = Input::file('MemberImage');
//        $filename = $nid.$file->getClientOriginalName();
//        Input::file('MemberImage')->move($destinationPath, $filename);

        $file = Input::file('VatDCR');
        $filename2 = $nid.$file->getClientOriginalName();
        Input::file('VatDCR')->move($destinationPath, $filename2);

        $file = Input::file('LedgerDCR');
        $filename3 = $nid.$file->getClientOriginalName();
        Input::file('LedgerDCR')->move($destinationPath, $filename3);

//        $file = Input::file('ShopDeed');
//        $filename4 = $nid.$file->getClientOriginalName();
//        Input::file('ShopDeed')->move($destinationPath, $filename4);
//
//        $file = Input::file('TradeLicenceImg');
//        $filename5 = $nid.$file->getClientOriginalName();
//        Input::file('TradeLicenceImg')->move($destinationPath, $filename5);
//
//        $file = Input::file('CarRegistrationImg');
//        $filename6 = $nid.$file->getClientOriginalName();
//        Input::file('CarRegistrationImg')->move($destinationPath, $filename6);
//
//        $file = Input::file('CitizenCertificateImg');
//        $filename7 = $nid.$file->getClientOriginalName();
//        Input::file('CitizenCertificateImg')->move($destinationPath, $filename7);
//
//        $file = Input::file('BankBlankCheck');
//        $filename8 = $nid.$file->getClientOriginalName();
//        Input::file('BankBlankCheck')->move($destinationPath, $filename8);
//
//        $file = Input::file('AgreementImg');
//        $filename9 = $nid.$file->getClientOriginalName();
//        Input::file('AgreementImg')->move($destinationPath, $filename9);
//
//        $file = Input::file('JamindarInfoDataImg');
//        $filename10 = $nid.$file->getClientOriginalName();
//        Input::file('JamindarInfoDataImg')->move($destinationPath, $filename10);

        $loan = new Loan();        
        $loan->Nid = Session::get('loan_search1');
        $loan->JobOrgName = Input::get('JobOrgName');
        $loan->JobOrgPlace = Input::get('JobOrgPlace');
        $loan->JobIdNo = Input::get('JobIdNo');
        $loan->ShenaNo = Input::get('ShenaNo');
        $loan->JobDesignation = Input::get('JobDesignation');
        $loan->JobUniteName = Input::get('JobUniteName');
        $loan->DivisionName = Input::get('DivisionName');
        $loan->JobDuration = Input::get('JobDuration');
        $loan->JobSalary = Input::get('JobSalary');
        $loan->LoanProviderOrgName = Input::get('LoanProviderOrgName');
        $loan->LoanProviderOrgAddress = Input::get('LoanProviderOrgAddress');
        $loan->AmountOfReceivedLoan = Input::get('AmountOfReceivedLoan');
        $loan->ProductName = Input::get('ProductName');
        $loan->InvestmentTypeNo = Input::get('InvestmentTypeNo');
        $loan->LoanReceiveDuration = Input::get('LoanReceiveDuration');
        $loan->LoanReceivedDate = Input::get('LoanReceivedDate');
        $loan->AmountOfLoanRepay = Input::get('AmountOfLoanRepay');
        $loan->CorrentStatus = Input::get('CorrentStatus');
        $loan->RemainingInstallment = Input::get('RemainingInstallment');
        $loan->ApproximateRepaidDate = Input::get('ApproximateRepaidDate');
        $loan->LoanProviderOrgName1 = Input::get('LoanProviderOrgName1');
        $loan->LoanProviderOrgAddress1 = Input::get('LoanProviderOrgAddress1');
        $loan->AmountOfReceivedLoan1 = Input::get('AmountOfReceivedLoan1');
        $loan->ProductName1 = Input::get('ProductName1');
        $loan->InvestmentTypeNo1 = Input::get('InvestmentTypeNo1');
        $loan->LoanReceiveDuration1 = Input::get('LoanReceiveDuration1');
        $loan->LoanReceivedDate1 = Input::get('LoanReceivedDate1');
        $loan->AmountOfLoanRepay1 = Input::get('AmountOfLoanRepay1');
        $loan->CorrentStatus1 = Input::get('CorrentStatus1');
        $loan->RemainingInstallment1 = Input::get('RemainingInstallment1');
        $loan->ApproximateRepaidDate1 = Input::get('ApproximateRepaidDate1');
        $loan->DonorOrgName = Input::get('DonorOrgName');
        $loan->DonorOrgAddress = Input::get('DonorOrgAddress');
        $loan->AmountOfBorrowedLoan = Input::get('AmountOfBorrowedLoan');
        $loan->product12Name = Input::get('product12Name');
        $loan->InvestmentStepNo = Input::get('InvestmentStepNo');
        $loan->InvestmentDuration = Input::get('InvestmentDuration');
        $loan->InvestmentBorrowedDate = Input::get('InvestmentBorrowedDate');
        $loan->AmountOfRepaidMoney = Input::get('AmountOfRepaidMoney');
        $loan->CurrentBalanceOfBorrow = Input::get('CurrentBalanceOfBorrow');
        $loan->RemainingInstalments = Input::get('RemainingInstalments');
        $loan->AproximateDateOfPayment = Input::get('AproximateDateOfPayment');
        $loan->DonorOrgName1 = Input::get('DonorOrgName1');
        $loan->DonorOrgAddress1 = Input::get('DonorOrgAddress1');
        $loan->AmountOfBorrowedLoan1 = Input::get('AmountOfBorrowedLoan1');
        $loan->DonarOrgProductName = Input::get('DonarOrgProductName');
        $loan->InvestmentStepNo1 = Input::get('InvestmentStepNo1');
        $loan->InvestmentDuration1 = Input::get('InvestmentDuration1');
        $loan->InvestmentBorrowedDate1 = Input::get('InvestmentBorrowedDate1');
        $loan->AmountOfRepaidMoney1 = Input::get('AmountOfRepaidMoney1');
        $loan->CurrentBalanceOfBorrow1 = Input::get('CurrentBalanceOfBorrow1');
        $loan->RemainingInstalments1 = Input::get('RemainingInstalments1');
        $loan->AproximateDateOfPayment1 = Input::get('AproximateDateOfPayment1');
        $loan->OthersIncomeSources1 = Input::get('OthersIncomeSources1');
        $loan->OthersIncomeSources2 = Input::get('OthersIncomeSources2');
        $loan->OthersIncomeSources3 = Input::get('OthersIncomeSources3');
        $loan->GPositionPrice = Input::get('GPositionPrice');
        $loan->GPositionDuration = Input::get('GPositionDuration');
        $loan->GValidityYear = Input::get('GValidityYear');
        $loan->GMouza = Input::get('GMouza');
        $loan->GCSKhotiyanNo = Input::get('GCSKhotiyanNo');
        $loan->GHallKhotiyanNo = Input::get('GHallKhotiyanNo');
        $loan->GRSDPKhotiyanNo = Input::get('GRSDPKhotiyanNo');
        $loan->GCSDagNo = Input::get('GCSDagNo');
        $loan->GHalDagNo = Input::get('GHalDagNo');
        $loan->GJLNo = Input::get('GJLNo');
        $loan->GHoldingNo = Input::get('GHoldingNo');
        $loan->GLandAmount = Input::get('GLandAmount');
        $loan->GApproximatePrice = Input::get('GApproximatePrice');
        $loan->GLandOwerShip = Input::get('GLandOwerShip');
        $loan->AdvancedCheckBankName = Input::get('AdvancedCheckBankName');
        $loan->GBankBranchName = Input::get('GBankBranchName');
        $loan->GBankAccountNo = Input::get('GBankAccountNo');
        $loan->ProjectName = Input::get('ProjectName');
        $loan->PreviousInvestmentType = Input::get('PreviousInvestmentType');
        $loan->PreviousReceivedAmount = Input::get('PreviousReceivedAmount');
        $loan->AmountReceivedStep = Input::get('AmountReceivedStep');
        $loan->PreviousInvestmentReceivedDate = Input::get('PreviousInvestmentReceivedDate');
        $loan->PreviousInvestmentRepaidDate = Input::get('PreviousInvestmentRepaidDate');
        $loan->Repaymentattitude = Input::get('Repaymentattitude');
        $loan->AdvancedPaidInstalation = Input::get('AdvancedPaidInstalation');
        $loan->PaidMoneyPerInstalment = Input::get('PaidMoneyPerInstalment');
        $loan->GenaralSaving = Input::get('GenaralSaving');
        $loan->SpecialSaving = Input::get('SpecialSaving');
        $loan->TssMoney = Input::get('TssMoney');
        $loan->TotalSavingAmount = Input::get('TotalSavingAmount');
        $loan->ProposedAmountInNumber = Input::get('ProposedAmountInNumber');
        $loan->ProposedAmountInWord = Input::get('ProposedAmountInWord');
        $loan->ProposedInvesmentDuration = Input::get('ProposedInvesmentDuration');
        $loan->ProposedInvestmentStep = Input::get('ProposedInvestmentStep');
        $loan->ProposedInvesmentName = Input::get('ProposedInvesmentName');
        $loan->MainRecordOrVauchar =$nid."_".$filename1 ;
        $loan->VatDCR =$nid."_".$filename2 ;
        $loan->LedgerDCR =$nid."_".$filename3 ;
//        $loan->ShopDeed =$nid."_".$filename4 ;
//        $loan->TradeLicenceImg =$nid."_".$filename5 ;
//        $loan->CarRegistrationImg =$nid."_".$filename6 ;
//        $loan->CitizenCertificateImg =$nid."_".$filename7 ;
//        $loan->BankBlankCheck =$nid."_".$filename8 ;
//        $loan->AgreementImg =$nid."_".$filename9 ;
//        $loan->JamindarInfoDataImg =$nid."_".$filename10 ;
        $loan->save();
        return ['url' => 'loan/list'];
    }

    public function getDelete($id)
    {
        Loan::destroy($id);
        return Redirect('loan/list');
    }

}