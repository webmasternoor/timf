@if (Auth::guest())
@else
    <h1 class="page-header">এরিয়া তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('area/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i> নতুন </a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('area_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('area/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('area/list')}}?ok=1&search='+$('#search').val())"><i
                            class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="50px" style="text-align: center">ক্রমিক নং</th>
            <th>
                <a href="javascript:ajaxLoad('area/list?field=AreaName&sort={{Session::get("area_sort")=="asc"?"desc":"asc"}}')">
                    এলাকার নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('area_field')=='AreaName'?(Session::get('area_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('area/list?field=AreaCode&sort={{Session::get("area_sort")=="asc"?"desc":"asc"}}')">
                    এলাকার কোড
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('area_field')=='AreaCode'?(Session::get('area_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('area/list?field=ZoneName&sort={{Session::get("area_sort")=="asc"?"desc":"asc"}}')">
                    জোনের নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('area_field')=='ZoneName'?(Session::get('area_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('area/list?field=AreaAddress&sort={{Session::get("area_sort")=="asc"?"desc":"asc"}}')">
                    ঠিকানা
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('area_field')=='AreaAddress'?(Session::get('area_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('area/list?field=AreaMobileNo&sort={{Session::get("area_sort")=="asc"?"desc":"asc"}}')">
                    মোবাইল নং
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('area_field')=='AreaMobileNo'?(Session::get('area_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('area/list?field=AreaEmail&sort={{Session::get("area_sort")=="asc"?"desc":"asc"}}')">
                    ইমেইল আইডি
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('area_field')=='AreaEmail'?(Session::get('area_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th width="140px">অ্যাকশন সমূহ</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        $j = 0;
        ?>
        @foreach($DistrictInfo as $key=>$area)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$area->AreaName}}</td>
                <td>{{$area->AreaCode}}</td>
                <td>{{$area->ZoneName}}</td>
                <td>{{$area->AreaAddress}}</td>
                <td>{{$area->AreaMobileNo}}</td>
                <td>{{$area->AreaEmail}}</td>

                <td style="text-align: center">
                    <a class="btn btn-primary btn-xs" title="Edit"
                    href="javascript:ajaxLoad('area/update/{{$area->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                    {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                    {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('area/delete/{{$area->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                    {{--</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$areas->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$areas->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif