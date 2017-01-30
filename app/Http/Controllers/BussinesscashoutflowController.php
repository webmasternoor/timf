<?php
namespace App\Http\Controllers;

use App\Bussinesscashoutflow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BussinesscashoutflowController extends Controller
{
    public function getIndex()
    {
        return view('bussinesscashoutflow.index');
    }

    public function getList()
    {
        Session::put('bussinesscashoutflow_search', Input::has('ok') ? Input::get('search') : (Session::has('bussinesscashoutflow_search') ? Session::get('bussinesscashoutflow_search') : ''));
        Session::put('bussinesscashoutflow_field', Input::has('field') ? Input::get('field') : (Session::has('bussinesscashoutflow_field') ? Session::get('bussinesscashoutflow_field') : 'id'));
        Session::put('bussinesscashoutflow_sort', Input::has('sort') ? Input::get('sort') : (Session::has('bussinesscashoutflow_sort') ? Session::get('bussinesscashoutflow_sort') : 'asc'));
        $bussinesscashoutflows = Bussinesscashoutflow::where('id', 'like', '%' . Session::get('bussinesscashoutflow_search') . '%')
            ->orderBy(Session::get('bussinesscashoutflow_field'), Session::get('bussinesscashoutflow_sort'))->paginate(8);
        return view('bussinesscashoutflow.list', ['bussinesscashoutflows' => $bussinesscashoutflows]);
    }

    public function getUpdate($id)
    {
        return view('bussinesscashoutflow.update', ['bussinesscashoutflow' => Bussinesscashoutflow::find($id)]);
    }

    public function postUpdate($id)
    {
        $bussinesscashoutflow = Bussinesscashoutflow::find($id);
        $rules = ["RowMaterialPurchageDescription" => "required"];
        if ($bussinesscashoutflow->RowMaterialPurchageDescription != Input::get('RowMaterialPurchageDescription'))
            $rules += ['RowMaterialPurchageDescription' => 'required|unique:bussinesscashoutflows'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $bussinesscashoutflow->RowMaterialPurchageDescription = Input::get('RowMaterialPurchageDescription');
        $bussinesscashoutflow->save();
        return ['url' => 'bussinesscashoutflow/list'];
    }

    public function getCreate()
    {
        return view('bussinesscashoutflow.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "RowMaterialPurchageDescription" => "required|unique:bussinesscashoutflows"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $bussinesscashoutflow = new Bussinesscashoutflow();
        $bussinesscashoutflow->RowMaterialPurchageDescription = Input::get('RowMaterialPurchageDescription');
        $bussinesscashoutflow->save();
        return ['url' => 'bussinesscashoutflow/list'];
    }

    public function getDelete($id)
    {
        Bussinesscashoutflow::destroy($id);
        return Redirect('bussinesscashoutflow/list');
    }

}