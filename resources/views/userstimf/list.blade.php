@if (Auth::guest())
@else
    <h1 class="page-header">ব্যবহারকারী তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('userstimf/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
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
                <a href="javascript:ajaxLoad('userstimf/list?field=employee_id&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    আইডি
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='employee_id'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=employee_code&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    কোড
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='employee_code'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=photo&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    ফটো
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='photo'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=UserstimfyName&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='UserstimfyName'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=office_id&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    অফিস আইডি
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='office_id'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=designation&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    পদবী
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='designation'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=address&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    ঠিকানা
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='address'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=phone1&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    ফোন নাম্বার
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='phone1'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th>
                <a href="javascript:ajaxLoad('userstimf/list?field=email&sort={{Session::get("userstimf_sort")=="asc"?"desc":"asc"}}')">
                    ইমেইল
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('userstimf_field')=='email'?(Session::get('userstimf_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th width="140px">অ্যাকশন সমূহ</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($userstimfsInfo as $key=>$userstimf)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$userstimf->employee_id}}</td>
                <td>{{$userstimf->employee_code}}</td>
                <td>
                    @if(!empty($userstimf->photo))
                        <img src="uploads/{{$userstimf->photo}}" width="60" height="60">
                    @endif
                </td>
                <td>{{$userstimf->employee_firstname}}&nbsp;{{$userstimf->employee_lastname}}</td>
                <td>{{$userstimf->office_id}}</td>
                <td>{{$userstimf->EmployeeDesignation}}</td>
                <td>{{$userstimf->address}}</td>
                <td>{{$userstimf->phone1}}</td>
                <td>{{$userstimf->email}}</td>

                <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                href="javascript:ajaxLoad('userstimf/update/{{$userstimf->id}}')">
                <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('userstimf/delete/{{$userstimf->id}}')">--}}
                {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                {{--</a>--}}
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
@endif