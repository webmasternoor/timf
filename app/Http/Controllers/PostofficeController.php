<?php
namespace App\Http\Controllers;

use DB;
use App\Postoffice;
use App\Thana;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostofficeController extends Controller
{
    public function getIndex()
    {
        return view('postoffice.index');
    }

    public function getList()
    {
        Session::put('postoffice_search', Input::has('ok') ? Input::get('search') : (Session::has('postoffice_search') ? Session::get('postoffice_search') : ''));
        Session::put('postoffice_field', Input::has('field') ? Input::get('field') : (Session::has('postoffice_field') ? Session::get('postoffice_field') : 'id'));
        Session::put('postoffice_sort', Input::has('sort') ? Input::get('sort') : (Session::has('postoffice_sort') ? Session::get('postoffice_sort') : 'asc'));
        $postoffices = Postoffice::where('id', 'like', '%' . Session::get('postoffice_search') . '%')
            ->orderBy(Session::get('postoffice_field'), Session::get('postoffice_sort'))->paginate(8);
        //return view('postoffice.list', ['postoffices' => $postoffices]);
        $thana_data=DB::table('postoffices')
            ->join('thanas', 'postoffices.ThanaCode', '=', 'thanas.id')
            ->select('*')
            ->get();
        return view('postoffice.list', ['postoffices' => $postoffices],['thana_data'=>$thana_data]);
    }


    public function getUpdate($id)
    {
        $thana=Thana::all();
        return view('postoffice.update', ['postoffice' => Postoffice::find($id)],['thana' => $thana]);
    }

    public function postUpdate($id)
    {
        $postoffice = Postoffice::find($id);
        $rules = ["ThanaCode" => "required"];
        if ($postoffice->PostofficeName != Input::get('PostofficeName'))
            $rules += ['PostofficeName' => 'required|unique:postoffices'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $postoffice->PostofficeName = Input::get('PostofficeName');
        $postoffice->ThanaCode = Input::get('ThanaCode');
        $postoffice->save();
        return ['url' => 'postoffice/list'];
    }

    public function getCreate()
    {
        $thana=Thana::all();
        return view('postoffice.create',compact('thana'));
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "PostofficeName" => "required|unique:postoffices",
            "ThanaCode" => "required"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $postoffice = new Postoffice();
        $postoffice->PostofficeName = Input::get('PostofficeName');
        $postoffice->ThanaCode = Input::get('ThanaCode');
        $postoffice->save();
        return ['url' => 'postoffice/list'];
    }

    public function getDelete($id)
    {
        Postoffice::destroy($id);
        return Redirect('postoffice/list');
    }

}