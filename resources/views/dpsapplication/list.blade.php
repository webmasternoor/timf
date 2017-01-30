<h1 class="page-header">দেশের তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('dpsapplication/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নিউ</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('dpsapplication_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('dpsapplication/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('dpsapplication/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('dpsapplication/list?field=DpsapplicationyName&sort={{Session::get("dpsapplication_sort")=="asc"?"desc":"asc"}}')">
               দেশের নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('dpsapplication_field')=='DpsapplicationyName'?(Session::get('dpsapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('dpsapplication/list?field=DpsapplicationyCode&sort={{Session::get("dpsapplication_sort")=="asc"?"desc":"asc"}}')">
                দেশের কোড
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('dpsapplication_field')=='DpsapplicationyCode'?(Session::get('dpsapplication_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>

        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($dpsapplications as $key=>$dpsapplication)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$dpsapplication->DpsapplicationyName}}</td>
            <td>{{$dpsapplication->DpsapplicationyCode}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('dpsapplication/update/{{$dpsapplication->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('dpsapplication/delete/{{$dpsapplication->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$dpsapplications->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$dpsapplications->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>