@if (Auth::guest())
@else
    <h1 class="page-header">সদস্য ক্যাটাগরি তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('membertype/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('Membertype_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('membertype/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('membertype/list')}}?ok=1&search='+$('#search').val())"><i
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
                <a href="javascript:ajaxLoad('Membertype/list?field=Membertype&sort={{Session::get("Membertype_sort")=="asc"?"desc":"asc"}}')">
                    ক্যাটাগরি নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('Membertype_field')=='Membertype'?(Session::get('Membertype_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th width="140px">অ্যাকশন সমূহ</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        $j = 0;
        ?>

        @foreach($Membertypes as $key=>$Membertype)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$Membertype->Membertype}}</td>
                <td style="text-align: center">
                    <a class="btn btn-primary btn-xs" title="Edit"
                    href="javascript:ajaxLoad('membertype/update/{{$Membertype->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                    <a class="btn btn-danger btn-xs" title="Delete"
                    href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('membertype/delete/{{$Membertype->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$Membertypes->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$Membertypes->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif