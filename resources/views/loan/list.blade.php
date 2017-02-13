<h1 class="page-header">ঋণ তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('loan/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('loan_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('loan/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('loan/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('loan/list?field=JobOrgName&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
                Organization Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loan_field')=='JobOrgName'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loan/list?field=JobOrgPlace&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
                Address
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loan_field')=='JobOrgPlace'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loan/list?field=JobIdNo&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
                Job ID No.
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loan_field')=='JobIdNo'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('loan/list?field=JobDesignation&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
                Designation
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('loan_field')=='JobDesignation'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        {{--<th width="140px">অ্যাকশন সমূহ</th>--}}
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($loans as $key=>$loan)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$loan->JobOrgName}}</td>
            <td>{{$loan->JobOrgPlace}}</td>
            <td>{{$loan->JobIdNo}}</td>
            <td>{{$loan->JobDesignation}}</td>
            {{--<td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('loan/update/{{$loan->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('loan/delete/{{$loan->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$loans->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$loans->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>