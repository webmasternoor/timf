<h1 class="page-header">জেলার তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('district/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নিউ</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('district_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('district/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('district/list')}}?ok=1&search='+$('#search').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">ক্রমিক</th>
        <th>
            <a href="javascript:ajaxLoad('district/list?field=DistrictName&sort={{Session::get("district_sort")=="asc"?"desc":"asc"}}')">
                জেলার নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('district_field')=='DistrictName'?(Session::get('district_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('district/list?field=DistrictNameBangla&sort={{Session::get("district_sort")=="asc"?"desc":"asc"}}')">
                জেলার নাম(বাংলা)
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('district_field')=='DistrictNameBangla'?(Session::get('district_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>

        <th>
            <a href="javascript:ajaxLoad('district/list?field=DivisionName&sort={{Session::get("district_sort")=="asc"?"desc":"asc"}}')">
                বিভাগ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('district_field')=='DivisionName'?(Session::get('district_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('district/list?field=Website&sort={{Session::get("district_sort")=="asc"?"desc":"asc"}}')">
                ওয়েবসাইট
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('district_field')=='Website'?(Session::get('district_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>

    </thead>
    <tbody>
    <?php $i = 1;
    $j=0;?>
    @foreach($districts as $key=>$district)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$district->DistrictName}}</td>
            <td>{{$district->DistrictNameBangla}}</td>
            <td>{{$DivInfo[$j++]->DivisionName}}</td>
            {{--<td>{{$district->DivisionId}}</td>--}}
            <td>{{$district->website}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('district/update/{{$district->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('district/delete/{{$district->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$districts->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$districts->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>