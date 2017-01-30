<?php
namespace App\Http\Controllers;

use App\Test1;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Test1Controller extends Controller
{
    public function getIndex()
    {
        return view('test1.index');
    }

    public function getList()
    {
        Session::put('test1_search', Input::has('ok') ? Input::get('search') : (Session::has('test1_search') ? Session::get('test1_search') : ''));
        Session::put('test1_field', Input::has('field') ? Input::get('field') : (Session::has('test1_field') ? Session::get('test1_field') : 'name'));
        Session::put('test1_sort', Input::has('sort') ? Input::get('sort') : (Session::has('test1_sort') ? Session::get('test1_sort') : 'asc'));
        $test1s = Test1::where('name', 'like', '%' . Session::get('test1_search') . '%')
            ->orderBy(Session::get('test1_field'), Session::get('test1_sort'))->paginate(8);
        return view('test1.list', ['test1s' => $test1s]);
    }

    public function getUpdate($id)
    {
        return view('test1.update', ['test1' => Test1::find($id)]);
    }

    public function postUpdate($id)
    {
        $test1 = Test1::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($test1->name != Input::get('name'))
            $rules += ['name' => 'required|unique:test1s'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $test1->name = Input::get('name');
        $test1->Test1Code = Input::get('Test1Code');
        $test1->unitprice = Input::get('unitprice');
        $test1->save();
        return ['url' => 'test1/list'];
    }

    public function getCreate()
    {
        return view('test1.create');
    }

    public function postCreate()
    {
        /*$items = Subject::all(['id', 'name']);
        return View::make('test1/create', compact('items',$items));*/

        /*$data = $zones->all();
        return view('test1/create', $data);*/

        $categories = Category::lists('id', 'name');

        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:test1s",
            "Test1Code" => "required|unique:test1s",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $test1 = new Test1();
        $test1->name = Input::get('name');
        $test1->Test1Code = Input::get('Test1Code');
        $test1->name23 = Input::get('name23');
        $test1->email23 = Input::get('email23');
        $test1->unitprice = Input::get('unitprice');
        $test1->save();
        return ['url' => 'test1/list'];
    }

    public function getDelete($id)
    {
        Test1::destroy($id);
        return Redirect('test1/list');
    }

}