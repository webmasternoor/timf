<h1 class="page-header">জোন তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('zone1/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নিউ</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('zone1_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('zone1/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('zone1/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('zone1/list?field=SomitiName&sort={{Session::get("zone1_sort")=="asc"?"desc":"asc"}}')">
                সমিতির নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone1_field')=='SomitiName'?(Session::get('zone1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone1/list?field=SomitiCode&sort={{Session::get("zone1_sort")=="asc"?"desc":"asc"}}')">
                সমিতির কোড
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone1_field')=='SomitiCode'?(Session::get('zone1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone1/list?field=BranchName&sort={{Session::get("zone1_sort")=="asc"?"desc":"asc"}}')">
                শাখার নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone1_field')=='BranchName'?(Session::get('zone1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone1/list?field=SamitiOpenDate&sort={{Session::get("zone1_sort")=="asc"?"desc":"asc"}}')">
                সমিতির খোলার তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone1_field')=='SamitiOpenDate'?(Session::get('zone1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('zone1/list?field=SamitiEndDate&sort={{Session::get("zone1_sort")=="asc"?"desc":"asc"}}')">
                সমিতির বন্ধের তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('zone1_field')=='SamitiEndDate'?(Session::get('zone1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($zone1s as $key=>$zone1)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$zone1->SomitiName}}</td>
            <td>{{$zone1->SomitiCode}}</td>
            <td>{{$zone1->BranchId}}</td>
            <td>{{$zone1->SamitiOpenDate}}</td>
            <td>{{$zone1->SamitiEndDate}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('zone1/update/{{$zone1->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('zone1/delete/{{$zone1->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$zone1s->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$zone1s->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>