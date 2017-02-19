@if (Auth::guest())
@else
    <h1 class="page-header">দেশের তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('countr/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('countr_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('countr/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('countr/list')}}?ok=1&search='+$('#search').val())"><i
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
                <a href="javascript:ajaxLoad('countr/list?field=CountryName&sort={{Session::get("countr_sort")=="asc"?"desc":"asc"}}')">
                    দেশের নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('countr_field')=='CountryName'?(Session::get('countr_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('countr/list?field=CountryCode&sort={{Session::get("countr_sort")=="asc"?"desc":"asc"}}')">
                    দেশের কোড
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('countr_field')=='CountryCode'?(Session::get('countr_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th width="140px">অ্যাকশন সমূহ</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($countrs as $key=>$countr)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$countr->CountryName}}</td>
                <td>{{$countr->CountryCode}}</td>
                <td style="text-align: center">
                    {{--<a class="btn btn-primary btn-xs" title="Edit"--}}
                    {{--href="javascript:ajaxLoad('countr/update/{{$countr->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-edit"></i> আপডেট</a>--}}
                    {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                    {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('countr/delete/{{$countr->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                    {{--</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$countrs->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$countrs->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif