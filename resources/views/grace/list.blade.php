<h1 class="page-header">গ্রেছ তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('grace/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নিউ</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('grace_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('grace/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('grace/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('grace/list?field=MemberName&sort={{Session::get("grace_sort")=="asc"?"desc":"asc"}}')">
                সদস্যের নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('grace_field')=='MemberName'?(Session::get('grace_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('grace/list?field=GraceId&sort={{Session::get("grace_sort")=="asc"?"desc":"asc"}}')">
                গ্রেছ কোড
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('grace_field')=='GraceId'?(Session::get('grace_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('grace/list?field=GraceId&sort={{Session::get("grace_sort")=="asc"?"desc":"asc"}}')">
                সমিতির নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('grace_field')=='GraceId'?(Session::get('grace_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('grace/list?field=GraceStartTime&sort={{Session::get("grace_sort")=="asc"?"desc":"asc"}}')">
                গ্রেচ শুরুর তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('grace_field')=='GraceStartTime'?(Session::get('grace_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('grace/list?field=GraceEndDate&sort={{Session::get("grace_sort")=="asc"?"desc":"asc"}}')">
                গ্রেচ সমাপ্তি তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('grace_field')=='GraceEndDate'?(Session::get('grace_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($graces as $key=>$grace)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$grace->MemberName}}</td>
            <td>{{$grace->GraceId}}</td>
            <td>{{$grace->SomitiName}}</td>
            <td>{{$grace->GraceStartTime}}</td>
            <td>{{$grace->GraceEndDate}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('grace/update/{{$grace->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('grace/delete/{{$grace->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$graces->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$graces->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>