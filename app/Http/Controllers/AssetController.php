<?php
namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    public function getIndex()
    {
        return view('asset.index');
    }

    public function getList()
    {
        Session::put('asset_search', Input::has('ok') ? Input::get('search') : (Session::has('asset_search') ? Session::get('asset_search') : ''));
        Session::put('asset_field', Input::has('field') ? Input::get('field') : (Session::has('asset_field') ? Session::get('asset_field') : 'id'));
        Session::put('asset_sort', Input::has('sort') ? Input::get('sort') : (Session::has('asset_sort') ? Session::get('asset_sort') : 'asc'));
        $assets = Asset::where('id', 'like', '%' . Session::get('asset_search') . '%')
            ->orderBy(Session::get('asset_field'), Session::get('asset_sort'))->paginate(8);
        return view('asset.list', ['assets' => $assets]);
    }

    public function getUpdate($id)
    {
        return view('asset.update', ['asset' => Asset::find($id)]);
    }

    public function postUpdate($id)
    {
        $asset = Asset::find($id);
        /*$rules = ["AssetDescription" => "required"];
        if ($asset->AssetDescription != Input::get('AssetDescription'))
            $rules += ['AssetDescription' => 'required|unique:assets'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $asset->AssetDescription = Input::get('AssetDescription');
        $asset->save();
        return ['url' => 'asset/list'];
    }

    public function getCreate()
    {
        return view('asset.create');
    }

    public function postCreate()
    {
        /*$validator = Validator::make(Input::all(), [
            "AssetDescription" => "required|unique:assets"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }*/
        $asset = new Asset();
        $asset->AssetDescription = Input::get('AssetDescription');
        $asset->save();
        return ['url' => 'asset/list'];
    }

    public function getDelete($id)
    {
        Asset::destroy($id);
        return Redirect('asset/list');
    }

}