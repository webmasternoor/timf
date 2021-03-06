<div class="col-md-12 surveysearch">
	<h1 class="page-header">Step - 1:
	    <div class="pull-right">
	        <a href="javascript:ajaxLoad('jamindar/create')" class="btn btn-primary pull-right"><i
	                    class="glyphicon glyphicon-plus-sign"></i> New</a>
	    </div>
	</h1>
	<div class="col-sm-7 form-group">
	    <div class="input-group">
	        <input class="form-control" id="search2" value="{{ Session::get('loan_search2') }}"
	               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('jamindar/create')}}?ok=1&search2='+this.value)"
	               placeholder="Search by [NID no].."
	               type="text">

	        <div class="input-group-btn">
	            <button type="button" class="btn btn-default"
	                    onclick="ajaxLoad('{{url('jamindar/create')}}?ok=1&search2='+$('#search2').val())"><i
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
	               পিতা/স্বামীর নাম
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='LoanCode'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>
	        <th>
	            <a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">
	               মায়ের নাম
	            </a>
	            <i style="font-size: 12px"
	               class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
	            </i>
	        </th>

	        {{--<th>--}}
	            {{--<a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">--}}
	                {{--Age--}}
	            {{--</a>--}}
	            {{--<i style="font-size: 12px"--}}
	               {{--class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">--}}
	            {{--</i>--}}
	        {{--</th>--}}
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
					জেন্ডার
				</a>
				<i style="font-size: 12px"
				   class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
				</i>
			</th>
	        {{--<th>--}}
	            {{--<a href="javascript:ajaxLoad('loan/list?field=unitprice&sort={{Session::get("loan_sort")=="asc"?"desc":"asc"}}')">--}}
	                {{--Address--}}
	            {{--</a>--}}
	            {{--<i style="font-size: 12px"--}}
	               {{--class="glyphicon  {{ Session::get('loan_field')=='unitprice'?(Session::get('loan_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">--}}
	            {{--</i>--}}
	        {{--</th>--}}
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
	    @foreach($loan1s as $key=>$loan)
	        <tr>
	            <td align="center">{{$i++}}</td>
	            <td>{{$loan->FirstName}}&nbsp;{{$loan->LastName}}&nbsp;{{$loan->FamilyName}}</td>
				<td>{{$loan->FatherOrHasbandFirstName}}&nbsp;{{$loan->FatherOrHasbandLastName}}&nbsp;</td>
				<td>{{$loan->MotherFirstName}}&nbsp;{{$loan->MotherLastName}}</td>
				<td>{{$loan->Nid}}</td>
				<td>{{$loan->Gender}}</td>


	            {{--<td>{{$loan->Age}}</td>--}}


	            {{--<td>{{$loan->PresentRoadNo}}&nbsp;{{$loan->PresentVillage}}&nbsp;{{$loan->PresentWord}}&nbsp;{{$loan->PresentPostOffice}}&nbsp;{{$loan->PresentUnion}}&nbsp;{{$loan->PresentThana}}&nbsp;{{$loan->PresentDistrict}}</td>--}}
	            <td>{{$loan->Mobile}}</td>
	            <td>{{$loan->Email}}</td>
	            <td style="text-align: center">
	                <a class="btn btn-primary btn-xs" title="Edit"
	                   href="javascript:ajaxLoad('survey/views/{{$loan->id}}')">
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
	<div class="pull-right">{!! str_replace('/?','?',$loan1s->render()) !!}</div>
	<div class="row">
	    <i class="col-sm-12">
	        Total: {{$loan1s->total()}} records
	    </i>
	</div>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>
<h2 class="page-header">নতুন জামিনদার যোগ করুন</h2>
{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("jamindar._form")
{!! Form::close() !!}