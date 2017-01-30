<?php
namespace App\Http\Controllers;

use App\Test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function getIndex()
    {
        return view('test.index');
    }

    public function getList()
    {
        Session::put('test_search', Input::has('ok') ? Input::get('search') : (Session::has('test_search') ? Session::get('test_search') : ''));
        Session::put('test_field', Input::has('field') ? Input::get('field') : (Session::has('test_field') ? Session::get('test_field') : 'name'));
        Session::put('test_sort', Input::has('sort') ? Input::get('sort') : (Session::has('test_sort') ? Session::get('test_sort') : 'asc'));
        $tests = Test::where('name', 'like', '%' . Session::get('test_search') . '%')
            ->orderBy(Session::get('test_field'), Session::get('test_sort'))->paginate(8);
        return view('test.list', ['tests' => $tests]);
    }

    public function getUpdate($id)
    {
        return view('test.update', ['test' => Test::find($id)]);
    }

    public function postUpdate($id)
    {
        $test = Test::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($test->name != Input::get('name'))
            $rules += ['name' => 'required|unique:tests'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $test->name = Input::get('name');
        $test->TestCode = Input::get('TestCode');
        $test->unitprice = Input::get('unitprice');
        $test->save();
        return ['url' => 'test/list'];
    }

    public function getCreate()
    {
        return view('test.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:tests",
            "TestCode" => "required|unique:tests",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $test = new Test();
        //echo $test->name23 = Input::get('name23');
        //echo $test->email23 = Input::get('email23');
        
        echo $test->name = Input::get('name');
        echo $test->TestCode = Input::get('TestCode');
        echo $test->unitprice = Input::get('unitprice');
        //exit();
        $test->save();
        return ['url' => 'test/list'];
    }

    public function getDelete($id)
    {
        Test::destroy($id);
        return Redirect('test/list');
    }

}