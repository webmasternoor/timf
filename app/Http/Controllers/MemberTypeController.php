<?php

namespace App\Http\Controllers;

use App\Membertype;
use App\Product;
use App\Productprivilege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberTypeController extends Controller
{
    public function getIndex()
    {
        return view('membertype.index');
    }

    public function getList()
    {
        Session::put('Membertypes_search', Input::has('ok') ? Input::get('search') : (Session::has('Membertypes_search') ? Session::get('Membertypes_search') : ''));
        Session::put('Membertypes_field', Input::has('field') ? Input::get('field') : (Session::has('Membertypes_field') ? Session::get('Membertypes_field') : 'id'));
        Session::put('Membertypes_sort', Input::has('sort') ? Input::get('sort') : (Session::has('Membertypes_sort') ? Session::get('Membertypes_sort') : 'asc'));
        $Membertypes = Membertype::where('id', 'like', '%' . Session::get('Membertypes_search') . '%')
            ->orderBy(Session::get('Membertypes_field'), Session::get('Membertypes_sort'))->paginate(8);
        return view('membertype.list', ['Membertypes' => $Membertypes]);
    }

    public function getUpdate($id)
    {
        $ProductInfo = Product::all();
        $value1 = $ProductInfo->count();
        return view('membertype.update', ['Membertypes' => Membertype::find($id)])->with('ProductInfo', $ProductInfo)->with('value1', $value1);
    }

    public function postUpdate($id)
    {
        $Membertypes = Membertype::find($id);
        $rules = ["Membertype" => "required"];
        if ($Membertypes->Membertype != Input::get('Membertype'))
            $rules += ['Membertype' => 'required|unique:Membertypes'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $Membertypes->Membertype = Input::get('Membertype');
        $Membertypes->save();
        $lastid = $id;
        $countValue = Input::get('countvalue');
        DB::table('productprivileges')
            ->where('membertype',$lastid)
            ->delete();
        for ($i = 1; $i <= $countValue; $i++) {
            $productval=Input::get('name'.$i);
            if (!empty($productval)) {
                $productprivilepge = new Productprivilege();
                $productprivilepge->membertype = $lastid;
                $productprivilepge->ProductID = $productval;
                $productprivilepge->save();
            }
        }
        return ['url' => 'membertype/list'];
    }

    public function getCreate()
    {
        $ProductInfo = Product::all();
        $value1 = $ProductInfo->count();
        return view('membertype.create')->with('ProductInfo', $ProductInfo)->with('value1', $value1);
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "Membertype" => "required|unique:Membertypes",
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $Membertypes = new Membertype();
        $Membertypes->Membertype = Input::get('Membertype');
        $Membertypes->save();
        $lastid = $Membertypes->id;
        $countValue = Input::get('countvalue');

        for ($i = 1; $i <= $countValue; $i++) {
            $productval=Input::get('name'.$i);
            if (!empty($productval)) {
                $productprivilepge = new Productprivilege();
                $productprivilepge->membertype = $lastid;
                $productprivilepge->ProductID = $productval;
//            echo $data;
//            echo "<br>";
                $productprivilepge->save();
            }
        }
//        echo $Membertypes->id;
        return ['url' =>'membertype/list'];
    }

    public function getDelete($id)
    {
        Membertype::destroy($id);
        return Redirect('membertype/list');
    }
}
