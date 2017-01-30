<h1 class="page-header">ঋণ তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('investment/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নিউ</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('investment_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('investment/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('investment/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('investment/list?field=Memberid&sort={{Session::get("investment_sort")=="asc"?"desc":"asc"}}')">
               সদস্যের আইডি
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('investment_field')=='Memberid'?(Session::get('investment_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('investment/list?field=ProductId&sort={{Session::get("investment_sort")=="asc"?"desc":"asc"}}')">
                প্রোডাক্ট আইডি
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('investment_field')=='ProductId'?(Session::get('investment_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('investment/list?field=SavingAmount&sort={{Session::get("investment_sort")=="asc"?"desc":"asc"}}')">
                সঞ্চয় টাকা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('investment_field')=='SavingAmount'?(Session::get('investment_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('investment/list?field=TransactionDate&sort={{Session::get("investment_sort")=="asc"?"desc":"asc"}}')">
               পরিশোধের তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('investment_field')=='TransactionDate'?(Session::get('investment_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('investment/list?field=TransactionEntryDate&sort={{Session::get("investment_sort")=="asc"?"desc":"asc"}}')">
               টাকা জমাদানের তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('investment_field')=='TransactionEntryDate'?(Session::get('investment_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>

        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($investments as $key=>$investment)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$investment->Memberid}}</td>
            <td>{{$investment->ProductId}}</td>
            <td>{{$investment->SavingAmount}}</td>
            <td>{{$investment->TransactionDate}}</td>
            <td>{{$investment->TransactionEntryDate}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('investment/update/{{$investment->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('investment/delete/{{$investment->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$investments->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$investments->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>