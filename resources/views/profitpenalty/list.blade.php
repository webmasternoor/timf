@if (Auth::guest())
@else
    <h1 class="page-header">সঞ্চয়ের মুনাফা প্রাপ্তি এবং জরিমানার তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('profitpenalty/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('profitpenalty_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('profitpenalty/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('profitpenalty/list')}}?ok=1&search='+$('#search').val())"><i
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
                <a href="javascript:ajaxLoad('product/list?field=ProductName&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    প্রোডাক্টের নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductName'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ProductNameBanglaFull&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    সার্ভিস চার্জ হিসাবের পদ্ধতি
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductNameBanglaFull'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ServiceChargeCalculationDuration&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    সার্ভিস চার্জ হিসাবের মেয়াদ
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ServiceChargeCalculationDuration'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th>
                <a href="javascript:ajaxLoad('product/list?field=LoanExpirayMemberEligibleforSavingsProfit&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    ঋণ খেলাপির সঞ্চয় মুনাফা প্রাপ্তির সুবিধা
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='LoanExpirayMemberEligibleforSavingsProfit'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=FiscalPeriodStartsMonth&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    অর্থ বছর
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='FiscalPeriodStartsMonth'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=InstallationServiceCharge&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    ইফেক্টিভ ফর্মুলা
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='InstallationServiceCharge'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th width="140px">অ্যাকশন</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($profitpenalty_info as $key=>$product)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$product->ProductNameBanglaFull}}</td>
                <td>{{$product->Methods}}</td>
                <td>{{$product->ServiceChargeCalculationDuration}}</td>
                <td>{{$product->Status}}</td>
                <td>{{$product->FiscalPeriodStartsMonth}}-{{$product->FiscalPeriodEndsMonth}}</td>
                <td>{{$product->EffectiveFormula}}</td>
                <td style="text-align: center">
                    <a class="btn btn-primary btn-xs" title="Edit"
                    href="javascript:ajaxLoad('profitpenalty/update/{{$product->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> আপডেট </a>
                    {{--<a class="btn btn-danger btn-xs" title="Delete"--}}
                    {{--href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('product/delete/{{$product->id}}')">--}}
                    {{--<i class="glyphicon glyphicon-trash"></i> ডিলিট--}}
                    {{--</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$products->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$products->total()}} records
        </i>
    </div>
    <script>
        $('.pagination a').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
        });
    </script>
@endif