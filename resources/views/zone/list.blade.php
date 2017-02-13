<h1 class="page-header">জোন তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('zone/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('zone_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('zone/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('zone/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('zone/list?field=ZoneName&sort={{Session::get("zone_sort")=="asc"?"desc":"asc"}}')">
                জোনের নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone_field')=='ZoneName'?(Session::get('zone_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone/list?field=ZoneCode&sort={{Session::get("zone_sort")=="asc"?"desc":"asc"}}')">
                জোন কোড
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone_field')=='ZoneCode'?(Session::get('zone_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone/list?field=ZoneCode&sort={{Session::get("zone_sort")=="asc"?"desc":"asc"}}')">
                ঠিকানা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone_field')=='ZoneCode'?(Session::get('zone_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone/list?field=ZoneCode&sort={{Session::get("zone_sort")=="asc"?"desc":"asc"}}')">
                মোবাইল নং
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone_field')=='ZoneCode'?(Session::get('zone_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone/list?field=ZoneCode&sort={{Session::get("zone_sort")=="asc"?"desc":"asc"}}')">
                ইমেইল
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone_field')=='ZoneCode'?(Session::get('zone_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($zones as $key=>$zone)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$zone->ZoneName}}</td>
            <td>{{$zone->ZoneCode}}</td>
            <td>{{$zone->ZoneAddress}}</td>
            <td>{{$zone->ZoneMobileNo}}</td>
            <td>{{$zone->ZoneEmail}}</td>
            <td style="text-align: center">
                {{--<a class="btn btn-primary btn-xs" title="Edit"--}}
                   {{--href="javascript:ajaxLoad('zone/update/{{$zone->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-edit"></i> আপডেট</a>--}}
                {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                   {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('zone/delete/{{$zone->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                {{--</a>--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$zones->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$zones->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>