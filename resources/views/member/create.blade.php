<div class="col-md-12 surveysearch">
	<h1 class="page-header">Survey Search
	    <div class="pull-right">
	        <a href="javascript:ajaxLoad('loan/create')" class="btn btn-primary pull-right"><i
	                    class="glyphicon glyphicon-plus-sign"></i> New</a>
	    </div>
	</h1>
	<div class="col-sm-7 form-group">
	    <div class="input-group">
	        <input class="form-control" id="search1" value="{{ Session::get('loan_search1') }}"
	               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('member/create')}}?ok=1&search1='+this.value)"
	               placeholder="Survey Search [NID].."
	               type="text">

	        <div class="input-group-btn">
	            <button type="button" class="btn btn-default"
	                    onclick="ajaxLoad('{{url('member/create')}}?ok=1&search1='+$('#search1').val())"><i
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
	            <a href="javascript:ajaxLoad('loan/list?field=name&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                নাম
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='name'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=LoanCode&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                Father/Husband Name
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='LoanCode'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                Mother Name
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                Gender
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                Age
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                NID
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                Address
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                Mobile
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	                Email
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th width="140px">অ্যাকশন সমূহ</th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php $i = 1;?>
	    @foreach($loans as $key=>$loan)
	        <tr>
	            <td align="center">{{$i++}}</td>
	            <td>{{$loan->NameTitle}}&nbsp;{{$loan->FirstName}}&nbsp;{{$loan->LastName}}&nbsp;{{$loan->FamilyName}}</td>
	            <td>{{$loan->Gender}}</td>
	            <td>{{$loan->Age}}</td>
	            <td>{{$loan->FatherOrHasbandNAmeTitle}}&nbsp;{{$loan->FatherOrHasbandFirstName}}&nbsp;{{$loan->FatherOrHasbandLastName}}&nbsp;</td>
	            <td>{{$loan->MatherNameTitle}}&nbsp;{{$loan->MotherFirstName}}&nbsp;{{$loan->MotherLastName}}&nbsp;{{$loan->MaritalStatus}}&nbsp;</td>
	            <td>{{$loan->Nid}}</td>
	            <td>{{$loan->PresentRoadNo}}&nbsp;{{$loan->PresentVillage}}&nbsp;{{$loan->PresentWord}}&nbsp;{{$loan->PresentPostOffice}}&nbsp;{{$loan->PresentUnion}}&nbsp;{{$loan->PresentThana}}&nbsp;{{$loan->PresentDistrict}}</td>
	            <td>{{$loan->Mobile}}</td>
	            <td>{{$loan->Email}}</td>
	            <td style="text-align: center">
	                <a class="btn btn-primary btn-xs" title="Edit"
	                   href="javascript:ajaxLoad('survey/viewm/{{$loan->id}}')">
	                    <i class="glyphicon glyphicon-edit"></i> View</a>
	                <!-- <a class="btn btn-danger btn-xs" title="Delete"
	                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('loan/delete/{{$loan->id}}')">
	                    <i class="glyphicon glyphicon-trash"></i> ডিলিট
	                </a> -->
	            </td>
	        </tr>
	    @endforeach
	    </tbody>
	</table>
	<div class="pull-right">{!! str_replace('/?','?',$loans->render()) !!}</div>
	<div class="row">
	    <i class="col-sm-12">
	        Total: {{$loans->total()}} records
	    </i>
	</div>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>
<h2 class="page-header">নতুন সদস্য যোগ করুন</h2>
{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("member._form")
{!! Form::close() !!}