<h1 class="page-header">বিজনেস ক্যাশ আউটফ্লো তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('bussinesscashoutflow/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নিউ</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('bussinesscashoutflow_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('bussinesscashoutflow/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('bussinesscashoutflow/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('bussinesscashoutflow/list?field=RowMaterialPurchageDescription&sort={{Session::get("bussinesscashoutflow_sort")=="asc"?"desc":"asc"}}')">
                কাঁচামাল ক্রয় ও খরচের বিবরণ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('bussinesscashoutflow_field')=='RowMaterialPurchageDescription'?(Session::get('bussinesscashoutflow_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($bussinesscashoutflows as $key=>$bussinesscashoutflow)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$bussinesscashoutflow->RowMaterialPurchageDescription}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('bussinesscashoutflow/update/{{$bussinesscashoutflow->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('bussinesscashoutflow/delete/{{$bussinesscashoutflow->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$bussinesscashoutflows->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$bussinesscashoutflows->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>