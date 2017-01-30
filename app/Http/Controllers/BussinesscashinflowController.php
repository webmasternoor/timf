<?php
namespace App\Http\Controllers;

use App\Bussinesscashinflow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BussinesscashinflowController extends Controller
{
    public function getIndex()
    {
        return view('bussinesscashinflow.index');
    }

    public function getList()
    {
        Session::put('bussinesscashinflow_search', Input::has('ok') ? Input::get('search') : (Session::has('bussinesscashinflow_search') ? Session::get('bussinesscashinflow_search') : ''));
        Session::put('bussinesscashinflow_field', Input::has('field') ? Input::get('field') : (Session::has('bussinesscashinflow_field') ? Session::get('bussinesscashinflow_field') : 'id'));
        Session::put('bussinesscashinflow_sort', Input::has('sort') ? Input::get('sort') : (Session::has('bussinesscashinflow_sort') ? Session::get('bussinesscashinflow_sort') : 'asc'));
        $bussinesscashinflows = Bussinesscashinflow::where('id', 'like', '%' . Session::get('bussinesscashinflow_search') . '%')
            ->orderBy(Session::get('bussinesscashinflow_field'), Session::get('bussinesscashinflow_sort'))->paginate(8);
        return view('bussinesscashinflow.list', ['bussinesscashinflows' => $bussinesscashinflows]);
    }

    public function getUpdate($id)
    {
        return view('bussinesscashinflow.update', ['bussinesscashinflow' => Bussinesscashinflow::find($id)]);
    }

    public function postUpdate($id)
    {
        $bussinesscashinflow = Bussinesscashinflow::find($id);
        $rules = ["ProductSaleDescription" => "required"];
        if ($bussinesscashinflow->ProductSaleDescription != Input::get('ProductSaleDescription'))
            $rules += ['ProductSaleDescription' => 'required|unique:bussinesscashinflows'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $bussinesscashinflow->ProductSaleDescription = Input::get('ProductSaleDescription');
        $bussinesscashinflow->save();
        return ['url' => 'bussinesscashinflow/list'];
    }

    public function getCreate()
    {
        return view('bussinesscashinflow.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ProductSaleDescription" => "required|unique:bussinesscashinflows"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $bussinesscashinflow = new Bussinesscashinflow();
        $bussinesscashinflow->ProductSaleDescription = Input::get('ProductSaleDescription');
        $bussinesscashinflow->save();
        return ['url' => 'bussinesscashinflow/list'];
    }

    public function getDelete($id)
    {
        Bussinesscashinflow::destroy($id);
        return Redirect('bussinesscashinflow/list');
    }

}