<h1 class="page-header">প্রতিষ্ঠান তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('organization/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('organization_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('organization/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('organization/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('organization/list?field=OrganizationCode&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
                প্রতিষ্ঠান কোড
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='OrganizationCode'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('organization/list?field=OrganizationName&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
                প্রতিষ্ঠান নাম
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='OrganizationName'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('organization/list?field=OrganizationAddress&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
                প্রতিষ্ঠান ঠিকানা
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='OrganizationAddress'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('organization/list?field=MobileNumber&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
                মোবাইল নং
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='MobileNumber'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('organization/list?field=EmailId&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
               ইমেইল আইডি
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='EmailId'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('organization/list?field=LicenceNo&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
                লাইসেন্স নং
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='LicenceNo'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('organization/list?field=LicenceStartDate&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
                লাইসেন্সের মেয়াদ শুরুর তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='LicenceStartDate'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('organization/list?field=LicenceValidityEndingDate&sort={{Session::get("organization_sort")=="asc"?"desc":"asc"}}')">
                লাইসেন্সের মেয়াদ শেষ হওয়ার তারিখ
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('organization_field')=='LicenceValidityEndingDate'?(Session::get('organization_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">অ্যাকশন সমূহ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($organizations as $key=>$organization)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$organization->OrganizationCode}}</td>
            <td>{{$organization->OrganizationName}}</td>
            <td> {{$organization->OrganizationAddress}}</td>
            <td>{{$organization->MobileNumber}}</td>
            <td>{{$organization->EmailId}}</td>
            <td>{{$organization->LicenceNo}}</td>
            <td>{{$organization->LicenceStartDate}}</td>
            <td>{{$organization->LicenceValidityEndingDate}}</td>

            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('organization/update/{{$organization->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('organization/delete/{{$organization->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$organizations->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$organizations->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>