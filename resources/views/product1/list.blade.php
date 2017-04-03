@if (Auth::guest())
@else
    <h1 class="page-header">প্রোডাক্ট তালিকা
        <div class="pull-right">
            <a href="javascript:ajaxLoad('product1/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i>নতুন</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search" value="{{ Session::get('product_search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('product1/list')}}?ok=1&search='+this.value)"
                   placeholder="Search..."
                   type="text">

            <div class="input-group-btn">
                <button type="button" class="btn btn-default"
                        onclick="ajaxLoad('{{url('product1/list')}}?ok=1&search='+$('#search').val())"><i
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
                    প্রোডাক্ট নাম
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductName'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ProductNameBanglaFull&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    প্রোডাক্ট নাম(বাংলা)
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductNameBanglaFull'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ProductCode&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    প্রোডাক্ট কোড
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductCode'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>

            <th>
                <a href="javascript:ajaxLoad('product/list?field=ProductType&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    প্রোডাক্টের ধরণ
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ProductType'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=LoanInstallation&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    কিস্তির সংখ্যা
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='LoanInstallation'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ServiceChargeRate&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    সার্ভিস চার্জের হার
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ServiceChargeRate'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=InstallationServiceCharge&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    কিস্তির সার্ভিস চার্জের হার
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='InstallationServiceCharge'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=ServiceChargeCalculationMethod&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    সার্ভিস চার্জ হিসাবের পদ্ধতি
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='ServiceChargeCalculationMethod'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=SavingInstallment&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    সঞ্চয় কিস্তি
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='SavingInstallment'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th>
                <a href="javascript:ajaxLoad('product/list?field=PaymentFrequency&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">
                    পেমেন্ট ফ্রিকুয়েন্সি
                </a>
                <i style="font-size: 12px"
                   class="glyphicon  {{ Session::get('product_field')=='PaymentFrequency'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                </i>
            </th>
            <th width="140px">অ্যাকশন</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($products as $key=>$product)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>{{$product->ProductName}}</td>
                <td>{{$product->ProductNameBanglaFull}}</td>
                <td>{{$product->ProductCode}}</td>
                <td>{{$product->ProductType}}</td>
                <td>{{$product->ServiceChargeRate}}</td>
                <td>{{$product->LoanInstallation}}</td>
                <td>{{$product->InstallationServiceCharge}}</td>
                <td>{{$product->ServiceChargeCalculationMethod}}</td>
                <td>{{$product->SavingInstallment}}</td>
                <td>{{$product->PaymentFrequency}}</td>
                <td style="text-align: center">
                    <a class="btn btn-primary btn-xs" title="Edit"
                    href="javascript:ajaxLoad('product1/update/{{$product->id}}')">
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