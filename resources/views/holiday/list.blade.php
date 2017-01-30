<h1 class="page-header">ছুটির তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('holiday/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('holiday_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('holiday/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('holiday/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('holiday/list?field=HolidayyName&sort={{Session::get("holiday_sort")=="asc"?"desc":"asc"}}')">
               ছুটির নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('holiday_field')=='HolidayyName'?(Session::get('holiday_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('holiday/list?field=HolidayType&sort={{Session::get("holiday_sort")=="asc"?"desc":"asc"}}')">
                ছুটির ধরণ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('holiday_field')=='HolidayType'?(Session::get('holiday_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('holiday/list?field=OfficeId&sort={{Session::get("holiday_sort")=="asc"?"desc":"asc"}}')">
                অফিস আইডি
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('holiday_field')=='OfficeId'?(Session::get('holiday_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('holiday/list?field=OrgID&sort={{Session::get("holiday_sort")=="asc"?"desc":"asc"}}')">
                প্রতিষ্ঠানের আইডি
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('holiday_field')=='OrgID'?(Session::get('holiday_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('holiday/list?field=SamityID_CenterID&sort={{Session::get("holiday_sort")=="asc"?"desc":"asc"}}')">
                সমিতি আইডি
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('holiday_field')=='SamityID_CenterID'?(Session::get('holiday_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('holiday/list?field=Description&sort={{Session::get("holiday_sort")=="asc"?"desc":"asc"}}')">
                বর্ননা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('holiday_field')=='Description'?(Session::get('holiday_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('holiday/list?field=IsActive&sort={{Session::get("holiday_sort")=="asc"?"desc":"asc"}}')">
                ছুটির সক্রিয়তা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('holiday_field')=='IsActive'?(Session::get('holiday_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>

        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($holidays as $key=>$holiday)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$holiday->HolidayyName}}</td>
            <td>{{$holiday->HolidayType}}</td>
            <td>{{$holiday->OfficeId}}</td>
            <td>{{$holiday->OrgID}}</td>
            <td>{{$holiday->SamityID_CenterID}}</td>
            <td>{{$holiday->Description}}</td>
            <td>{{$holiday->IsActive}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('holiday/update/{{$holiday->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('holiday/delete/{{$holiday->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$holidays->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$holidays->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>