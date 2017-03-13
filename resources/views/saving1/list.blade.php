@if (Auth::guest())
@else
    <h1 class="page-header">সঞ্চয় তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('saving1/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>নতুন সঞ্চয়</a>
        </div>
        <div class="pull-right">
            <a href="javascript:ajaxLoad('saving1/create1')" class="btn btn-success"><i
                        class="glyphicon glyphicon-plus-sign"></i>একাধিক নতুন সঞ্চয়</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('saving1_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('saving1/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('saving1/list')}}?ok=1&search='+$('#search').val())"><i
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
                <a href="javascript:ajaxLoad('saving1/list?field=MemberId&sort={{Session::get("saving1_sort")=="asc"?"desc":"asc"}}')">
                    সদস্যের নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('saving1_field')=='MemberId'?(Session::get('saving1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('saving1/list?field=ProductId&sort={{Session::get("saving1_sort")=="asc"?"desc":"asc"}}')">
                    প্রোডাক্টের নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('saving1_field')=='ProductId'?(Session::get('saving1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('saving1/list?field=SavingAmount&sort={{Session::get("saving1_sort")=="asc"?"desc":"asc"}}')">
                    জমা টাকার পরিমান
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('saving1_field')=='SavingAmount'?(Session::get('saving1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('saving1/list?field=WithdrawAmount&sort={{Session::get("saving1_sort")=="asc"?"desc":"asc"}}')">
                    উত্তোলনকৃত টাকার পরিমান
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('saving1_field')=='WithdrawAmount'?(Session::get('saving1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('saving1/list?field=TransactionDate&sort={{Session::get("saving1_sort")=="asc"?"desc":"asc"}}')">
                    লেনদেনের তারিখ
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('saving1_field')=='TransactionDate'?(Session::get('saving1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th>
                <a href="javascript:ajaxLoad('saving1/list?field=EntryDate&sort={{Session::get("saving1_sort")=="asc"?"desc":"asc"}}')">
                    এন্ট্রির তারিখ
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('saving1_field')=='EntryDate'?(Session::get('saving1_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th width="140px">অ্যাকশন সমূহ</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($saving1sInfo as $key=>$saving1)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$saving1->FullNameBangla}}</td>
                <td>{{$saving1->ProductName}}</td>
                <td>{{$saving1->SavingAmount}}</td>
                <td>{{$saving1->WithdrawAmount}}</td>
                <td>{{$saving1->TransactionDate}}</td>
                <td>{{$saving1->EntryDate}}</td>
                <td style="text-align: center">
                    <a class="btn btn-primary btn-xs" title="Edit"
                       href="javascript:ajaxLoad('saving1/update/{{$saving1->id}}')">
                        <i class="glyphicon glyphicon-edit"></i> আপডেট</a>
                    <a class="btn btn-danger btn-xs" title="Delete"
                       href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('saving1/delete/{{$saving1->id}}')">
                        <i class="glyphicon glyphicon-trash"></i> ডিলিট
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$saving1s->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$saving1s->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif