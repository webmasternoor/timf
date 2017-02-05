<h2 class="page-header">নতুন সদস্য যোগ করুন</h2>
{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}
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
	            <td>
					<input type="text" name="NameTitle" value="{{$loan->NameTitle}}">
					<input type="text" name="FirstName" value="{{$loan->FirstName}}">
					<input type="text" name="LastName" value="{{$loan->LastName}}">
					<input type="text" name="FamilyName" value="{{$loan->FamilyName}}">
					<input type="text" name="FullNameBangla" value="{{$loan->FullNameBangla}}">
					{{--{{$loan->NameTitle}}&nbsp;{{$loan->FirstName}}&nbsp;{{$loan->LastName}}&nbsp;{{$loan->FamilyName}}--}}
				</td>
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
    @foreach($loans as $key=>$loan)
	<div class="col-md-12 ">
		<div id="exTab2" class="">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#11" data-toggle="tab">শাখার তথ্য</a></li>
				<li><a href="#22" data-toggle="tab">ব্যক্তিগত তথ্য</a></li>
				<li><a href="#55" data-toggle="tab">পেশা সংক্রান্ত</a></li>
				<li><a href="#33" data-toggle="tab">পারিবারিক তথ্য</a></li>
				<li><a href="#44" data-toggle="tab">বিনিয়োগ সংক্রান্ত</a></li>
			</ul>
            <div class="tab-content ">
                <div class="tab-pane active" id="11">
                    <div class="borderportion">
                        <div class="form-group col-md-4" id="form-ZoneId-error">
                            {!! Form::label("ZoneId","জোন",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {{--{!! Form::select("ZoneId",$Zone_info,null,["class"=>"form-control required","id"=>"focus"]) !!}--}}
                                <input class="form-control" type="text" name="NameTitle" value="{{$loan->FirstName}}">
                                <span id="ZoneId-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
    @endforeach
	<div class="pull-right">{!! str_replace('/?','?',$loans->render()) !!}</div>
	<div class="row">
	    <i class="col-sm-12">
	        Total: {{$loans->total()}} records
	    </i>
	</div>
</div>
{{--{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}--}}
@include("member._form")
{{--<input type="hidden" name="ZoneId" value="{{$loan->FirstName}}">--}}
{!! Form::close() !!}
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>