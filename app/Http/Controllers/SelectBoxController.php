<?php

namespace App\Http\Controllers;

use App\Age;
use App\Count;
use App\Saving1;
use App\Savingtransactionsetup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\District;

class SelectBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getDistrict(Request $request)
    {
        $data = DB::table('districts')
            ->select('*')
            ->where('DivisionId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getThana(Request $request)
    {
        $data = DB::table('thanas')
            ->select('*')
            ->where('DistrictId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getUnion(Request $request)
    {
        $data = DB::table('unions')
            ->select('*')
            ->where('ThanaId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getWord(Request $request)
    {
        $data = DB::table('wards')
            ->select('*')
            ->where('UnionId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getPostOffice(Request $request)
    {
        $data = DB::table('postoffices')
            ->select('*')
            ->where('DistrictId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getArea(Request $request)
    {
        $data = DB::table('areas')
            ->select('*')
            ->where('ZoneId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getBranch(Request $request)
    {
        $data = DB::table('brns')
            ->select('*')
            ->where('AreaId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getSamity(Request $request)
    {
        $data = DB::table('zone1s')
            ->select('*')
            ->where('BranchId', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getProductInfo(Request $request)
    {
        $data = DB::table('producttypes')
            ->select('*')
            ->where('id', $request->id)
            ->get();
        return response()->json($data);
    }

    public function getBalance(Request $request)
    {
        $data = Saving1::select('Balance')
            ->where('memberId', $request->id)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();
        return response()->json($data);
    }

    public function getSchedule(Request $request)
    {
        $datetest = '2017-06-15';
        $data = DB::table('savingtransactionsetups')
            ->select('*')
            ->where('SamityName', $request->id)
            ->where('Date', $datetest)
            ->get();
//        foreach ($data as $data1):
//            echo $data1->MemberId."</br>";
//        endforeach;
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


//    public function autocomplete(){
//        $term = Input::get('term');
//
//        $results = array();
//
//        $queries = DB::table('members')
//            ->where('MemberId', 'LIKE', '%'.$term.'%')
////            ->orWhere('FirstName', 'LIKE', '%'.$term.'%')
//            ->take(5)->get();
//
//        foreach ($queries as $query)
//        {
//            $results[] = [ 'id' => $query->id, 'value' => $query->MemberId.' '.$query->id ];
//        }
////        foreach ( $persons as $query ){
////            $data[] = array('value' => $row->$column, 'id' =>$row->id);
////        }
////        return Response::json($data);
//        return Response::json($results);
//    }
    public function search()
    {
        $term = Input::get('term');

//        $fest = Session::get('festival');
//        $festival = Festival::find($fest);

//        $persons = DB::table('fs_persons')
//            ->join('fs_festival_persons', 'person_id','=','fs_persons.id')
//            ->where('festival_id', '=', $fest)
//            ->get();
        $queries = DB::table('members')
            ->where('FirstName', 'LIKE', '%' . $term . '%')
////            ->orWhere('FirstName', 'LIKE', '%'.$term.'%')
            ->get();

        foreach ($queries as $query) {
            $data[] = array('value' => $query->FirstName, 'id' => $query->id);
        }
        return Response::json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function DateCalculate(Request $request)
    {
        $dateInput = $request->id;
//        $date1 = "2007-03-24";
        $date2 = date('y:m:d');

        $diff = abs(strtotime($date2) - strtotime($dateInput));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

//        printf("%d years, %d months, %d days\n", $years, $months, $days);
        return response()->json($years);
    }

    public function edit($id)
    {
        //
    }

    public function datainsert()
    {
        for ($i = 0; $i <= 100; $i++) {
            $age = new Count();
            $age->name = $i;
            $age->save();
        }
        return "Data inserted";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
