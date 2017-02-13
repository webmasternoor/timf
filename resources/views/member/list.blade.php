<h1 class="page-header">সদস্য তালিকা
    <div class="pull-right">
        <a href="javascript:ajaxLoad('member/list')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> Approved</a>
        <a href="javascript:ajaxLoad('member/listpending')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> Pending</a>
        <a href="javascript:ajaxLoad('member/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> নতুন</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('member_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('member/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('member/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('survey/list?field=id&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                ID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='id'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=Gender&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                Gender
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='Gender'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=Age&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                Age
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='Age'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=Nid&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                NID
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='Nid'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=PresentDistrict&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                Ditrict
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='PresentDistrict'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=Mobile&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                Mobile
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='Mobile'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=Email&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                Email
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='Email'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=created_at&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                Survey Date
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='created_at'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Approvals</th>
        {{--<th width="140px">Actions</th>--}}
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($members as $key=>$member)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$member->id}}</td>
            <td>{{$member->BusinessName}}</td>
            <td>{{$member->BusinessNature}}</td>
            <td>{{$member->BusinessExperience}}</td>
            <td>{{$member->BusinessCenterAddress}}</td>
            <td>{{$member->BusinessStartDate}}</td>
            <td>{{$member->Accommodation}}</td>
            <td>{{$member->AccommodationWidth}}</td>
            <td>
                <?php
                if($member->grouppresident == '0'){
                ?>
                    <a class="btn btn-primary btn-xs" title="Edit"
                       href="javascript:ajaxLoad('member/approve/{{$member->id}}')">
                        <i class="glyphicon glyphicon-edit"></i> Approve</a>
                <?php
                    }else{
                    ?>
                    OK
                    <?php
                    }
                ?>
            </td>
            {{--<td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('member/update/{{$member->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('member/delete/{{$member->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                </a>
            </td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$members->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$members->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>