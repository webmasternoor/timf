<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('services/two-datatables', 'ServiceController@getUsersDataTables');

Route::get('services/two-datatables/posts', 'ServiceController@getPostsDataTables');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    'fluent' => 'FluentController',
    'eloquent' => 'EloquentController',
    'collection' => 'CollectionController',
    'html' => 'HtmlBuilderController',
    'sitemap' => 'SitemapController',
    'buttons' => 'ButtonsController',
    'services' => 'ServiceController',
    'relation' => 'RelationController',
    'product' => 'ProductController',
    'organization' => 'OrganizationController',
    'grace' => 'GraceController',
    'survey' => 'SurveyController',
    'member' => 'MemberController',
    'purpose' => 'PurposeController',
    'loan' => 'LoanController',
    'jamindar' => 'JamindarController',
    'zone' => 'ZoneController',
    'division' => 'DivisionController',
    'area' => 'AreaController',
    'cashinflow' => 'CashinflowController',
    'cashoutflow' => 'CashoutflowController',
    'district' => 'DistrictController',
    'union' => 'UnionController',
    'brn' => 'BrnController',
    'countr' => 'CountrController',
    'investor' => 'InvestorController',
    'ward' => 'WardController',
    'thana' => 'ThanaController',
    'postoffice' => 'PostofficeController',
    'bussinesscashinflow' => 'BussinesscashinflowController',
    'bussinesscashoutflow' => 'BussinesscashoutflowController',
    'asset' => 'AssetController',
    'liab' => 'LiabController',
    'holiday' => 'HolidayController',
    'producttype' => 'ProducttypeController',
    'zone1' => 'Zone1Controller',
    'userstimf' => 'UserstimfController',
    'saving1' => 'Saving1Controller',
    'investment' => 'InvestmentController',
    'dpsapplication' => 'DpsapplicationController',
]);

Route::resource('users', 'UsersController');

Route::get('getDistrict','SelectBoxController@getDistrict');

Route::get('getThana','SelectBoxController@getThana');

Route::get('getUnion','SelectBoxController@getUnion');

Route::get('getWord','SelectBoxController@getWord');

Route::get('getPostOffice','SelectBoxController@getPostOffice');

Route::get('getArea','SelectBoxController@getArea');

Route::get('getBranch','SelectBoxController@getBranch');

Route::get('getProductInfo','SelectBoxController@getProductInfo');

Route::get('{view}', function ($view) {
    if (view()->exists($view)) {
        return view($view);
    }

    return app()->abort(404, 'Page not found!');
});

Route::get('/ajax-division', function () {
    $division_id = Input::get('division_id');
    $District = District:: where('DivisonId','=',$division_id)->get();
    return Response::json($District);
});
