<h1 class="page-header">দেশের তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('userstimf/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নিউ</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('userstimf_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('userstimf/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('userstimf/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyName&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Employee ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyName'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyCode&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Employee Code
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyCode'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyName&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyName'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyCode&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Office ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyCode'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyName&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Designation
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyName'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyCode&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Address
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyCode'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyName&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Phone Number1
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyName'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyCode&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Phone Number2
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyCode'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyName&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Email
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyName'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyCode&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Alternate Email
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyCode'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyName&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Gender
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyName'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyCode&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                Birthdate
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyCode'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($userstimfs as $key=>$userstimf)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$userstimf->employee_id}}</td>
            <td>{{$userstimf->employee_code}}</td>
            <td>{{$userstimf->employee_firstname}}&nbsp;{{$userstimf->employee_lastname}}</td>
            <td>{{$userstimf->office_id}}</td>
            <td>{{$userstimf->designation}}</td>
            <td>{{$userstimf->address}}</td>
            <td>{{$userstimf->phone1}}</td>
            <td>{{$userstimf->phone2}}</td>
            <td>{{$userstimf->email}}</td>
            <td>{{$userstimf->altemail}}</td>
            <td>{{$userstimf->gender}}</td>
            <td>{{$userstimf->birthdate}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('userstimf/update/{{$userstimf->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('userstimf/delete/{{$userstimf->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$userstimfs->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$userstimfs->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>