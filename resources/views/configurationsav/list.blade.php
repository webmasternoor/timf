<h1 class="page-header">কনফিগারেশন তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('configurationsav/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('configurationsav_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('configurationsav/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('configurationsav/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('configurationsav/list?field=ProductID&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                প্রোডাক্টের নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='ProductID'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=InterestPercentage&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                মুনাফার হার
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='InterestPercentage'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=MultipleSavings&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                একের অধিক সঞ্চয়
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='MultipleSavings'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=IsActive&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                সক্রিয়তা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='IsActive'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=WithdrawlFacility&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                টাকা উত্তোলন সুবিধা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='WithdrawlFacility'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=MinAmount&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                সর্বোনিম্ন টাকার পরিমান
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='MinAmount'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=MaxAmount&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                সর্বোচ্চ টাকার পরিমান
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='MaxAmount'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=MinBalance&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                সর্বোনিম্ন ব্যালেন্স
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='MinBalance'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('configurationsav/list?field=MaxDueCycle&sort={{Session::get("configurationsav_sort")=="asc"?"desc":"asc"}}')">
                বাকীর সর্বোচ্চ আবর্ত
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('configurationsav_field')=='MaxDueCycle'?(Session::get('configurationsav_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($configurationsavsInfo as $key=>$configurationsav)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$configurationsav->ProductName}}</td>
            <td>{{$configurationsav->InterestPercentage}}</td>
            <td>{{$configurationsav->name}}</td>
            <td>{{$configurationsav->Status}}</td>
            <td>{{$configurationsav->WithdrawlFacility}}</td>
            <td>{{$configurationsav->MinAmount}}</td>
            <td>{{$configurationsav->MaxAmount}}</td>
            <td>{{$configurationsav->MinBalance}}</td>
            <td>{{$configurationsav->MaxDueCycle}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('configurationsav/update/{{$configurationsav->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('configurationsav/delete/{{$configurationsav->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$configurationsavs->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$configurationsavs->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>