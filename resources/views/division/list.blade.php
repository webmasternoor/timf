<h1 class="page-header">বিভাগের তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('division/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('division_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('division/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('division/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('division/list?field=DivisionName&sort={{Session::get("division_sort")=="asc"?"desc":"asc"}}')">
               বিভাগের নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('division_field')=='DivisionName'?(Session::get('division_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('division/list?field=DivisionNameBangla&sort={{Session::get("division_sort")=="asc"?"desc":"asc"}}')">
                বিভাগের নাম(বাংলা)
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('division_field')=='DivisionNameBangla'?(Session::get('division_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($divisions as $key=>$division)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$division->DivisionName}}</td>
            <td>{{$division->DivisionNameBangla}}</td>
            <td style="text-align: center">
                {{--<a class="btn btn-primary btn-xs" title="Edit"--}}
                   {{--href="javascript:ajaxLoad('division/update/{{$division->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-edit"></i> বিভাগের নাম</a>--}}
                {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                   {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('division/delete/{{$division->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                {{--</a>--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$divisions->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$divisions->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>