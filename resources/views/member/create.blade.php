<h2 class="page-header">নতুন সদস্য যোগ করুন</h2>
{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}
<div class="col-md-12 surveysearch">
    <h1 class="page-header">Step - 1:
        <div class="pull-right">
            <a href="javascript:ajaxLoad('loan/create')" class="btn btn-primary pull-right"><i
                        class="glyphicon glyphicon-plus-sign"></i> নতুন</a>
        </div>
    </h1>
    <div class="col-sm-7 form-group">
        <div class="input-group">
            <input class="form-control" id="search1" value="{{ Session::get('loan_search1') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('member/create')}}?ok=1&search1='+this.value)"
                   placeholder="Search by Mobile No.."
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
        {{--<thead>
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
        </thead>--}}
        <tbody>
        <?php /*$i = 1;*/?>
        {{--@foreach($loans as $key=>$loan)
            <tr>
                <td align="center">{{$i++}}</td>
                <td>
                    <select name="ZoneId">
                        @foreach($zone as $zone_data )

                            <option value="{{$zone_data->id}}">{{$zone_data->ZoneName}}</option>

                        @endforeach
                    </select>
                    <input type="text" name="NameTitle" value="{{$loan->NameTitle}}">
                    <input type="text" name="FirstName" value="{{$loan->FirstName}}">
                    <input type="text" name="LastName" value="{{$loan->LastName}}">
                    <input type="text" name="FamilyName" value="{{$loan->FamilyName}}">
                    <input type="text" name="FullNameBangla" value="{{$loan->FullNameBangla}}">
                    --}}{{--{{$loan->NameTitle}}&nbsp;{{$loan->FirstName}}&nbsp;{{$loan->LastName}}&nbsp;{{$loan->FamilyName}}--}}{{--
                </td>
                <td>{{$loan->Gender}}</td>
                <td>{{$loan->Age}}</td>
                <td>{{$loan->FatherOrHasbandNAmeTitle}}&nbsp;{{$loan->FatherOrHasbandFirstName}}
                    &nbsp;{{$loan->FatherOrHasbandLastName}}&nbsp;</td>
                <td>{{$loan->MatherNameTitle}}&nbsp;{{$loan->MotherFirstName}}&nbsp;{{$loan->MotherLastName}}
                    &nbsp;{{$loan->MaritalStatus}}&nbsp;</td>
                <td>{{$loan->Nid}}</td>
                <td>{{$loan->PresentRoadNo}}&nbsp;{{$loan->PresentVillage}}&nbsp;{{$loan->PresentWord}}
                    &nbsp;{{$loan->PresentPostOffice}}&nbsp;{{$loan->PresentUnion}}&nbsp;{{$loan->PresentThana}}
                    &nbsp;{{$loan->PresentDistrict}}</td>
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
        @endforeach--}}
        </tbody>
    </table>

    {{--@include("survey._form")--}}

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
                                    <select name="ZoneId">
                                        @foreach($zone as $zone_data )
                                            @if($loan->ZoneId==$zone_data->id)
                                                {
                                                <option value="{{$zone_data->id}}"
                                                        selected>{{$zone_data->ZoneName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$zone_data->id}}">{{$zone_data->ZoneName}}</option>
                                                }
                                            @endif
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("ZoneId",$ZoneInfo,null,["class"=>"form-control","id"=>"focus"]) !!}--}}
                                    <span id="ZoneId-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-4" id="form-AreaId-error">
                                {!! Form::label("AreaId","এলাকা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="AreaId">
                                        @foreach($area as $area_data )
                                            @if($loan->AreaId==$area_data->id)
                                                {
                                                <option value="{{$area_data->id}}"
                                                        selected>{{$area_data->AreaName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$area_data->id}}">{{$area_data->AreaName}}</option>
                                                }
                                            @endif
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("AreaId",$AreaInfo,null,["class"=>"form-control","id"=>"focus"]) !!}--}}
                                    <span id="AreaId-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-4" id="form-BranchId-error">
                                {!! Form::label("BranchId","শাখা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="BranchId">
                                        @foreach($branch as $branch_data )
                                            @if($loan->BranchId==$branch_data->id)
                                                {
                                                <option value="{{$branch_data->id}}"
                                                        selected>{{$branch_data->BranchName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$branch_data->id}}">{{$branch_data->BranchName}}</option>
                                                }
                                            @endif
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("BranchId",$BranchInfo,null,["class"=>"form-control","id"=>"focus"]) !!}--}}
                                    <span id="BranchId-error" class="help-block"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane" id="22">
                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u> নাম</u></h5>
                            </div>
                            <div class="form-group col-md-3" id="form-NameTitle-error">
                                {!! Form::label("NameTitle","টাইটেল:",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="NameTitle">
                                        @foreach($nameTitle as $nameTitle_data )
                                            @if($loan->NameTitle==$nameTitle_data->id)
                                                {
                                                <option value="{{$nameTitle_data->id}}"
                                                        selected>{{$nameTitle_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$nameTitle_data->id}}">{{$nameTitle_data->name}}</option>
                                                }
                                            @endif
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("NameTitle",$NameTitle,null,["class"=>"form-control NameTitle required","id"=>"NameTitle"]) !!}--}}
                                    <span id="NameTitle-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-FirstName-error">
                                {!! Form::label("FirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FirstName"
                                           value="{{$loan->FirstName}}">
                                    {{--{!! Form::text("FirstName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FirstName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-LastName-error">
                                {!! Form::label("LastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="LastName" value="{{$loan->LastName}}">
                                    {{--{!! Form::text("LastName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="LastName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-FamilyName-error">
                                {!! Form::label("FamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FamilyName"
                                           value="{{$loan->FamilyName}}">
                                    {{--{!! Form::text("FamilyName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FamilyName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-FullNameBangla-error">
                                {!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FullNameBangla"
                                           value="{{$loan->FullNameBangla}}">
                                    {{--{!! Form::text("FullNameBangla",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FullNameBangla-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-Gender-error">
                                {!! Form::label("Gender","জেন্ডার",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="Gender">
                                        @foreach($gender as $GenderInfo )
                                            @if($loan->Gender==$GenderInfo->id)
                                                {
                                                <option value="{{$GenderInfo->id}}"
                                                        selected>{{$GenderInfo->GenderName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$GenderInfo->id}}">{{$GenderInfo->GenderName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$GenderInfo->id}}">{{$GenderInfo->GenderName}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("Gender",$Gender,null,["class"=>"form-control Gender required","id"=>"Gender"]) !!}--}}
                                    <span id="Gender-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-Age-error">
                                {!! Form::label("Age","বয়স",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="Age">
                                        @foreach($age as $AgeInfo )
                                            @if($loan->Age==$AgeInfo->id)
                                                {
                                                <option value="{{$AgeInfo->id}}" selected>{{$AgeInfo->age}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$AgeInfo->id}}">{{$AgeInfo->age}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$AgeInfo->id}}">{{$AgeInfo->age}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("Age",$Age,null,["class"=>"form-control Age required","id"=>"Age"]) !!}--}}
                                    <span id="Age-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-Education-error">
                                {!! Form::label("Education","সর্বোচ্চ শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="Education">
                                        @foreach($education as $education_data )
                                            @if($loan->Education==$education_data->id)
                                                {
                                                <option value="{{$education_data->id}}"
                                                        selected>{{$education_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$education_data->id}}">{{$education_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$education_data->id}}">{{$education_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="Education-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-PassingYear-error">
                                {!! Form::label("PassingYear","পাশের বছর",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PassingYear">
                                        @foreach($passingYear as $passingYear_data )
                                            @if($loan->PassingYear==$passingYear_data->id)
                                                {
                                                <option value="{{$passingYear_data->id}}"
                                                        selected>{{$passingYear_data->Name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$passingYear_data->id}}">{{$passingYear_data->Name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$passingYear_data->id}}">{{$passingYear_data->Name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("PassingYear",['2007', '2008','2009','2010','2011','2012','2013'])!!}--}}
                                    <span id="PassingYear-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-SpouseProfession-error">
                                {!! Form::label("SpouseProfession","অভিভাবকের পেশা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12 SpouseProfession1" id="SpouseProfession1">
                                    <select name="SpouseProfession" id="SpouseProfession" class="SpouseProfession">
                                        @foreach($profession as $profession_data )
                                            @if($loan->SpouseProfession==$profession_data->name)
                                                {
                                                <option value="{{$profession_data->name}}"
                                                        selected>{{$profession_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                                    <span id="SpouseProfession-error" class="help-block"></span>
                                </div>
                            </div>
                            {{--<div class="form-group col-md-6" id="form-SpouseOtherProfession-error">--}}
                                {{--{!! Form::label("SpouseOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                                {{--<div class="col-md-12">--}}
                                    {{--{!! Form::text("SpouseOtherProfession",null,["class"=>"form-control"]) !!}--}}
                                    {{--<span id="SpouseOtherProfession-error" class="help-block"></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group col-md-6" id="form-SpouseMobileNo-error">
                                {!! Form::label("SpouseMobileNo","অভিভাবকের মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="SpouseMobileNo"
                                           value="{{$loan->SpouseMobileNo}}">
                                    {{--{!! Form::number("SpouseMobileNo",null,["class"=>"form-control"]) !!}--}}
                                    <span id="SpouseMobileNo-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-MaritalStatus-error">
                                {!! Form::label("MaritalStatus","বৈবাহিক অবস্থা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::select("MaritalStatus",['1' => 'Married Single','2' => 'Married Multiple', '3' => 'Non-Married','4' => 'Widower','5'=>'Widow'])!!}
                                    <span id="MaritalStatus-error" class="help-block"></span>
                                </div>
                            </div>
                            {{--<div class="form-group col-md-6" id="form-Nid-error">
                                {!! Form::label("Nid","জাতীয় পরিচয় পত্রের নং ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="Nid"
                                           value="{{$loan->Nid}}">
                                    --}}{{--{!! Form::text("Nid",null,["class"=>"form-control"]) !!}--}}{{--
                                    <span id="Nid-error" class="help-block"></span>
                                </div>
                            </div>--}}
                            <div class="form-group col-md-6" id="form-Mobile-error">
                                {!! Form::label("Mobile","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="Mobile"
                                           value="{{$loan->Mobile}}">
                                    {{--{!! Form::text("Mobile",null,["class"=>"form-control"]) !!}--}}
                                    <span id="Mobile-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-Email-error">
                                {!! Form::label("Email","ইমেইল",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="Email"
                                           value="{{$loan->Email}}">
                                    {{--{!! Form::text("Email",null,["class"=>"form-control"]) !!}--}}
                                    <span id="Email-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-PoliticalStatus-error">
                                {!! Form::label("PoliticalStatus","রাজনীতির সাথে জড়িত কি না?",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PoliticalStatus">
                                        @foreach($politicalStatus as $politicalStatus_data )
                                            @if($loan->PoliticalStatus==$politicalStatus_data->id)
                                                {
                                                <option value="{{$politicalStatus_data->id}}"
                                                        selected>{{$politicalStatus_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$politicalStatus_data->id}}">{{$politicalStatus_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$politicalStatus_data->id}}">{{$politicalStatus_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("PoliticalStatus",['1' => 'Yes', '2' => 'No'])!!}--}}
                                    <span id="PoliticalStatus-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-Distance-error">
                                {!! Form::label("Distance","শাখা অফিসের দুরুত্ব (কিঃ মিঃ)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {{--<!-- {!! Form::select("Distance", ['1', '2', '3','4', '5', '6'])!!} -->--}}
                                    {{--{!! Form::number("Distance",null,["class"=>"form-control"]) !!}--}}
                                    <select name="Distance">
                                        @foreach($count as $count_data )
                                            @if($loan->Distance==$count_data->id)
                                                {
                                                <option value="{{$count_data->id}}"
                                                        selected>{{$count_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$count_data->id}}">{{$count_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$count_data->id}}">{{$count_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="Distance-error" class="help-block"></span>
                                </div>
                            </div>

                        </div>

                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>স্ত্রীর নাম</u></h5>
                            </div>
                            <div class="form-group col-md-3" id="form-WifeNameTitle-error">
                                {!! Form::label("WifeNameTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="WifeNameTitle">
                                        @foreach($nameTitle as $nameTitle_data )
                                            @if($loan->WifeNameTitle==$nameTitle_data->id)
                                                {
                                                <option value="{{$nameTitle_data->id}}"
                                                        selected>{{$nameTitle_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$nameTitle_data->id}}">{{$nameTitle_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$nameTitle_data->id}}">{{$nameTitle_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("WifeNameTitle",$NameTitle,null,["class"=>"form-control WifeNameTitle required","id"=>"WifeNameTitle"]) !!}--}}
                                    <span id="WifeNameTitle-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-WifeFirstName-error">
                                {!! Form::label("WifeFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="WifeFirstName"
                                           value="{{$loan->WifeFirstName}}">
                                    {{--{!! Form::text("WifeFirstName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="WifeFirstName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-WifeLastName-error">
                                {!! Form::label("WifeLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="WifeLastName"
                                           value="{{$loan->WifeLastName}}">
                                    {{--{!! Form::text("WifeLastName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="WifeLastName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-WifeFamilyName-error">
                                {!! Form::label("WifeFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {{--{!! Form::text("WifeFamilyName",null,["class"=>"form-control"]) !!}--}}
                                    <input class="form-control" type="text" name="WifeFamilyName"
                                           value="{{$loan->WifeFamilyName}}">
                                    <span id="WifeFamilyName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-WifeAge-error">
                                {!! Form::label("WifeAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="WifeAge">
                                        @foreach($age as $age_data )
                                            @if($loan->WifeAge==$age_data->id)
                                                {
                                                <option value="{{$age_data->id}}" selected>{{$age_data->age}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$age_data->id}}">{{$age_data->age}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$age_data->id}}">{{$age_data->age}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("WifeAge",['18', '19','20','21','22','30','30'])!!}--}}
                                    <span id="WifeAge-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-WifeMobileNo-error">
                                {!! Form::label("WifeMobileNo","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="WifeMobileNo"
                                           value="{{$loan->WifeMobileNo}}"><span id="WifeFamilyName-error"
                                                                                 class="help-block"></span>
                                    {{--{!! Form::number("WifeMobileNo",null,["class"=>"form-control"]) !!}--}}
                                    <span id="WifeMobileNo-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-WifeProfession-error">
                                {!! Form::label("WifeProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12 WifeProfession1" id="WifeProfession1">
                                    <select name="WifeProfession" id="WifeProfession" class="WifeProfession">
                                        @foreach($profession as $profession_data )
                                            @if($loan->WifeProfession==$profession_data->name)
                                                {
                                                <option value="{{$profession_data->name}}"
                                                        selected>{{$profession_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("WifeProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                                    <span id="WifeProfession-error" class="help-block"></span>
                                </div>
                            </div>
                            {{--<div class="form-group col-md-6" id="form-WifeOtherProfession-error">--}}
                                {{--{!! Form::label("WifeOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                                {{--<div class="col-md-12">--}}
                                    {{--{!! Form::text("WifeOtherProfession",null,["class"=>"form-control"]) !!}--}}
                                    {{--<span id="WifeOtherProfession-error" class="help-block"></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>

                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>
                            </div>
                            <div class="form-group col-md-3" id="form-FatherOrHasbandNAmeTitle-error">
                                {!! Form::label("FatherOrHasbandNAmeTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="FatherOrHasbandNAmeTitle">
                                        @foreach($nameTitle as $nameTitle_data )
                                            @if($loan->FatherOrHasbandNAmeTitle==$nameTitle_data->id)
                                                {
                                                <option value="{{$nameTitle_data->id}}"
                                                        selected>{{$nameTitle_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$nameTitle_data->id}}">{{$nameTitle_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$nameTitle_data->id}}">{{$nameTitle_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("FatherOrHasbandNAmeTitle",$NameTitle,null,["class"=>"form-control FatherOrHasbandNAmeTitle required","id"=>"FatherOrHasbandNAmeTitle"]) !!}--}}
                                    <span id="FatherOrHasbandNAmeTitle-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-FatherOrHasbandFirstName-error">
                                {!! Form::label("FatherOrHasbandFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FatherOrHasbandFirstName"
                                           value="{{$loan->FatherOrHasbandFirstName}}">
                                    {{--{!! Form::text("FatherOrHasbandFirstName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FatherOrHasbandFirstName-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-3" id="form-FatherOrHasbandLastName-error">
                                {!! Form::label("FatherOrHasbandLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FatherOrHasbandLastName"
                                           value="{{$loan->FatherOrHasbandLastName}}">
                                    {{--{!! Form::text("FatherOrHasbandLastName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FatherOrHasbandLastName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-FatherOrHasbandFamilyName-error">
                                {!! Form::label("FatherOrHasbandFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FatherOrHasbandFamilyName"
                                           value="{{$loan->FatherOrHasbandFamilyName}}">
                                    {{--{!! Form::text("FatherOrHasbandFamilyName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FatherOrHasbandFamilyName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-FatherOrHasbandAge-error">
                                {!! Form::label("FatherOrHasbandAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="FatherOrHasbandAge">
                                        @foreach($age as $age_data )
                                            @if($loan->FatherOrHasbandAge==$age_data->id)
                                                {
                                                <option value="{{$age_data->id}}" selected>{{$age_data->age}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$age_data->id}}">{{$age_data->age}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$age_data->id}}">{{$age_data->age}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("FatherOrHasbandAge",['18', '19','20','21','22','30','30'])!!}--}}
                                    <span id="FatherOrHasbandAge-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-FatherProfession-error">
                                {!! Form::label("FatherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12 FatherProfession1" id="FatherProfession1">
                                    <select name="FatherProfession" class="FatherProfession" id="FatherProfession">
                                        @foreach($profession as $profession_data )
                                            @if($loan->FatherProfession==$profession_data->name)
                                                {
                                                <option value="{{$profession_data->name}}"
                                                        selected>{{$profession_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("FatherProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                                    <span id="FatherProfession-error" class="help-block"></span>
                                </div>
                            </div>
                            {{--<div class="form-group col-md-6" id="form-FatherOtherProfession-error">--}}
                                {{--{!! Form::label("FatherOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                                {{--<div class="col-md-12">--}}
                                    {{--{!! Form::text("FatherOtherProfession",null,["class"=>"form-control"]) !!}--}}
                                    {{--<span id="FatherOtherProfession-error" class="help-block"></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group col-md-6" id="form-FatherMobileNo-error">
                                {!! Form::label("FatherMobileNo","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FatherMobileNo"
                                           value="{{$loan->FatherMobileNo}}">
                                    {{--{!! Form::number("FatherMobileNo",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FatherMobileNo-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>মায়ের নাম</u></h5>
                            </div>
                            <div class="form-group col-md-3" id="form-MatherNameTitle-error">
                                {!! Form::label("MatherNameTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="MatherNameTitle">
                                        @foreach($nameTitle as $nameTitle_data )
                                            @if($loan->MatherNameTitle==$nameTitle_data->id)
                                                {
                                                <option value="{{$nameTitle_data->id}}"
                                                        selected>{{$nameTitle_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$nameTitle_data->id}}">{{$nameTitle_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$nameTitle_data->id}}">{{$nameTitle_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("MatherNameTitle",$NameTitle,null,["class"=>"form-control MatherNameTitle required","id"=>"MatherNameTitle"]) !!}--}}
                                    <span id="MatherNameTitle-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-3" id="form-MotherFirstName-error">
                                {!! Form::label("MotherFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="MotherFirstName"
                                           value="{{$loan->MotherFirstName}}">
                                    {{--{!! Form::text("MotherFirstName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="MotherFirstName-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-3" id="form-MotherLastName-error">
                                {!! Form::label("MotherLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="MotherLastName"
                                           value="{{$loan->MotherLastName}}">
                                    {{--{!! Form::text("MotherLastName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="MotherLastName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3" id="form-MotherFamilyName-error">
                                {!! Form::label("MotherFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="MotherFamilyName"
                                           value="{{$loan->MotherFamilyName}}">
                                    {{--{!! Form::text("MotherFamilyName",null,["class"=>"form-control"]) !!}--}}
                                    <span id="MotherFamilyName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-MotherAge-error">
                                {!! Form::label("MotherAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="MotherAge">
                                        @foreach($age as $age_data )
                                            @if($loan->MotherAge==$age_data->id)
                                                {
                                                <option value="{{$age_data->id}}" selected>{{$age_data->age}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$age_data->id}}">{{$age_data->age}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$age_data->id}}">{{$age_data->age}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("MotherAge",['18', '19','20','21','22','30','30'])!!}--}}
                                    <span id="MotherAge-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-MotherProfession-error">
                                {!! Form::label("MotherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12 MotherProfession1" id="MotherProfession1">
                                    <select name="MotherProfession" id="MotherProfession" class="MotherProfession">
                                        @foreach($profession as $profession_data )
                                            @if($loan->MotherProfession==$profession_data->name)
                                                {
                                                <option value="{{$profession_data->name}}"
                                                        selected>{{$profession_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("MotherProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                                    <span id="MotherProfession-error" class="help-block"></span>
                                </div>
                            </div>
                            {{--<div class="form-group col-md-6" id="form-MotherOtherProfession-error">--}}
                                {{--{!! Form::label("MotherOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                                {{--<div class="col-md-12">--}}
                                    {{--{!! Form::text("MotherOtherProfession",null,["class"=>"form-control"]) !!}--}}
                                    {{--<span id="MotherOtherProfession-error" class="help-block"></span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group col-md-6" id="form-MotherMobileNo-error">
                                {!! Form::label("MotherMobileNo","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="MotherMobileNo"
                                           value="{{$loan->MotherMobileNo}}">
                                    {{--{!! Form::number("MotherMobileNo",null,["class"=>"form-control"]) !!}--}}
                                    <span id="MotherMobileNo-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>বর্তমান ঠিকানা</u></h5>
                            </div>
                            <div class="form-group col-md-6" id="form-PresentCountry-error">
                                {!! Form::label("PresentCountry","দেশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">

                                    <select name="PresentCountry">
                                        @foreach($country as $country_data )
                                            @if($loan->PresentCountry==$country_data->id)
                                                {
                                                <option value="{{$country_data->id}}"
                                                        selected>{{$country_data->CountryName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PresentCountry-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentDivision-error">
                                {!! Form::label("PresentDivision","বিভাগ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PresentDivision">
                                        @foreach($division as $division_data )
                                            @if($loan->PresentDivision==$division_data->id)
                                                {
                                                <option value="{{$division_data->id}}"
                                                        selected>{{$division_data->DivisionName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$division_data->id}}">{{$division_data->DivisionName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("PresentDivision",$Division,null,["class"=>"form-control PresentDivision required","id"=>"PresentDivision"]) !!}--}}
                                    <span id="PresentDivision-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentDistrict-error">
                                {!! Form::label("PresentDistrict","জেলা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PresentDistrict">
                                        @foreach($district as $district_data )
                                            @if($loan->PresentDistrict==$district_data->id)
                                                {
                                                <option value="{{$district_data->id}}"
                                                        selected>{{$district_data->DistrictName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PresentDistrict-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentThana-error">
                                {!! Form::label("PresentThana","থানা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PresentThana">
                                        @foreach($thana as $thana_data )
                                            @if($loan->PresentThana==$thana_data->id)
                                                {
                                                <option value="{{$thana_data->id}}"
                                                        selected>{{$thana_data->ThanaName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PresentThana-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentUnion-error">
                                {!! Form::label("PresentUnion","ইউনিয়",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PresentUnion">
                                        @foreach($union as $union_data )
                                            @if($loan->PresentUnion==$union_data->id)
                                                {
                                                <option value="{{$union_data->id}}"
                                                        selected>{{$union_data->UnionName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PresentUnion-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentPostOffice-error">
                                {!! Form::label("PresentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PresentPostOffice">
                                        @foreach($postOffice  as $postoffice_data )
                                            @if($loan->PresentPostOffice==$postoffice_data->id)
                                                {
                                                <option value="{{$postoffice_data->id}}"
                                                        selected>{{$postoffice_data->PostofficeName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PresentPostOffice-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentWord-error">
                                {!! Form::label("PresentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PresentWord">
                                        @foreach($word as $word_data )
                                            @if($loan->PresentWord==$word_data->id)
                                                {
                                                <option value="{{$word_data->id}}"
                                                        selected>{{$word_data->WordName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$word_data->id}}">{{$word_data->WordName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$word_data->id}}">{{$word_data->WordName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PresentWord-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentVillage-error">
                                {!! Form::label("PresentVillage","গ্রাম বা মহল্লা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="PresentVillage"
                                           value="{{$loan->PresentVillage}}">
                                    {{--{!! Form::text("PresentVillage",null,["class"=>"form-control"]) !!}--}}
                                    <span id="PresentVillage-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PresentRoadNo-error">
                                {!! Form::label("PresentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="PresentRoadNo"
                                           value="{{$loan->PresentRoadNo}}">
                                    {{--{!! Form::text("PresentRoadNo",null,["class"=>"form-control"]) !!}--}}
                                    <span id="PresentRoadNo-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>স্থায়ী ঠিকানা</u></h5>
                            </div>
                            <div class="form-group col-md-6" id="form-PermanentCountry-error">
                                {!! Form::label("PermanentCountry","দেশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PermanentCountry">
                                        @foreach($country as $country_data )
                                            @if($loan->PermanentCountry==$country_data->id)
                                                {
                                                <option value="{{$country_data->id}}"
                                                        selected>{{$country_data->CountryName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PermanentCountry-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentDivision-error">
                                {!! Form::label("PermanentDivision","বিভাগ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PermanentDivision">
                                        @foreach($division as $division_data )
                                            @if($loan->PermanentDivision==$division_data->id)
                                                {
                                                <option value="{{$division_data->id}}"
                                                        selected>{{$division_data->DivisionName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$division_data->id}}">{{$division_data->DivisionName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("PermanentDivision",$Division,null,["class"=>"form-control PermanentDivision required","id"=>"PermanentDivision"]) !!}--}}
                                    <span id="PermanentDivision-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentDistrict-error">
                                {!! Form::label("PermanentDistrict","জেলা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PermanentDistrict">
                                        @foreach($district as $district_data )
                                            @if($loan->PermanentDistrict==$district_data->id)
                                                {
                                                <option value="{{$district_data->id}}"
                                                        selected>{{$district_data->DistrictName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PermanentDistrict-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentThana-error">
                                {!! Form::label("PermanentThana","থানা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PermanentThana">
                                        @foreach($thana as $thana_data )
                                            @if($loan->PermanentThana==$thana_data->id)
                                                {
                                                <option value="{{$thana_data->id}}"
                                                        selected>{{$thana_data->ThanaName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PermanentThana-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentUnion-error">
                                {!! Form::label("PermanentUnion","ইউনিয়",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PermanentUnion">
                                        @foreach($union as $union_data )
                                            @if($loan->PermanentUnion==$union_data->id)
                                                {
                                                <option value="{{$union_data->id}}"
                                                        selected>{{$union_data->UnionName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PermanentUnion-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentPostOffice-error">
                                {!! Form::label("PermanentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PermanentPostOffice">
                                        @foreach($postOffice  as $postoffice_data )
                                            @if($loan->PermanentPostOffice==$postoffice_data->id)
                                                {
                                                <option value="{{$postoffice_data->id}}"
                                                        selected>{{$postoffice_data->PostofficeName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PermanentPostOffice-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentWord-error">
                                {!! Form::label("PermanentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="PermanentWord">
                                        @foreach($word as $word_data )
                                            @if($loan->PermanentWord==$word_data->id)
                                                {
                                                <option value="{{$word_data->id}}"
                                                        selected>{{$word_data->WordName}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$word_data->id}}">{{$word_data->WordName}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$word_data->id}}">{{$word_data->WordName}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="PermanentWord-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentVillage-error">
                                {!! Form::label("PermanentVillage","গ্রাম বা মহল্লা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="PermanentVillage"
                                           value="{{$loan->PermanentVillage}}">
                                    {{--{!! Form::text("PermanentVillage",null,["class"=>"form-control"]) !!}--}}
                                    <span id="PermanentVillage-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PermanentRoadNo-error">
                                {!! Form::label("PermanentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="PermanentRoadNo"
                                           value="{{$loan->PermanentRoadNo}}">
                                    {{--{!! Form::text("PermanentRoadNo",null,["class"=>"form-control"]) !!}--}}
                                    <span id="PermanentRoadNo-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="55">
                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>পেশা সংক্রান্ত</u></h5>
                            </div>
                            <div class="form-group col-md-6" id="form-CurrentProfession-error">
                                {!! Form::label("CurrentProfession","বর্তমান পেশা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12 CurrentProfession1" id="CurrentProfession1">
                                    <select name="CurrentProfession" class="CurrentProfession" id="CurrentProfession">
                                        @foreach($profession as $profession_data )
                                            @if($loan->CurrentProfession==$profession_data->name)
                                                {
                                                <option value="{{$profession_data->id}}"
                                                        selected>{{$profession_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$profession_data->id}}">{{$profession_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("CurrentProfession",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}--}}
                                    <span id="CurrentProfession-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PreviousProfession-error">
                                {!! Form::label("PreviousProfession","বর্তমান পেশার পূর্বে তিনি কি করতেন",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12 PreviousProfession1" id="PreviousProfession1">
                                    <select name="PreviousProfession" id="PreviousProfession"
                                            class="PreviousProfession">
                                        @foreach($profession as $profession_data )
                                            @if($loan->PreviousProfession==$profession_data->name)
                                                {
                                                <option value="{{$profession_data->name}}"
                                                        selected>{{$profession_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("PreviousProfession",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}--}}
                                    <span id="PreviousProfession-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-DurationOfPreviousProfession-error">
                                {!! Form::label("DurationOfPreviousProfession","চাকুরি/ব্যবসা কতদিন ধরে করছেন তার বিবরণ(বছর)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="DurationOfPreviousProfession"
                                           value="{{$loan->DurationOfPreviousProfession}}">
                                    {{--{!! Form::number("DurationOfPreviousProfession",null,["class"=>"form-control"]) !!}--}}
                                    <span id="DurationOfPreviousProfession-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-EarningAssetsByBusinessOrJob-error">
                                {!! Form::label("EarningAssetsByBusinessOrJob","চাকুরি/ব্যবসা করে অর্জিত সম্পদের বিবরণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="EarningAssetsByBusinessOrJob"
                                           value="{{$loan->EarningAssetsByBusinessOrJob}}">
                                    {{--{!! Form::text("EarningAssetsByBusinessOrJob",null,["class"=>"form-control"]) !!}--}}
                                    <span id="EarningAssetsByBusinessOrJob-error" class="help-block"></span>
                                </div>
                            </div>


                            <div class="form-group col-md-6" id="form-EarningSourceWithoutBusiness-error">
                                {!! Form::label("EarningSourceWithoutBusiness","ব্যবসা ছাড়া আয়ের উৎস থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {{--<input class="form-control" type="text" name="EarningSourceWithoutBusiness"
                                    value="{{$loan->EarningSourceWithoutBusiness}}">--}}
                                    <textarea name="EarningSourceWithoutBusiness" cols="50"
                                              rows="3">{{$loan->EarningSourceWithoutBusiness}}</textarea>
                                    {{--{!! Form::textarea("EarningSourceWithoutBusiness",null,["class"=>"form-control"]) !!}--}}
                                    <span id="EarningSourceWithoutBusiness-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-BusinessType1-error">
                                {!! Form::label("BusinessType1","ব্যবসার ধরন",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="BusinessType">
                                        @foreach($BusinessCategory as $BusinessCategory_data )
                                            @if($loan->BusinessType==$BusinessCategory_data->id)
                                                {
                                                <option value="{{$BusinessCategory_data->id}}"
                                                        selected>{{$BusinessCategory_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$BusinessCategory_data->id}}">{{$BusinessCategory_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$BusinessCategory_data->id}}">{{$BusinessCategory_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("BusinessType",['1' => 'Single', '2' => 'Partnership'])!!}--}}
                                    <span id="BusinessType1-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-BusinessFuturePlan-error">
                                {!! Form::label("BusinessFuturePlan","ব্যবসার ভবিষ্যৎ পরিকল্পনা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <textarea class="form-control" type="text" name="BusinessFuturePlan"
                                              value="{{$loan->BusinessFuturePlan}}"></textarea>
                                    {{--{!! Form::textarea("BusinessFuturePlan",null,["class"=>"form-control"]) !!}--}}
                                    <span id="BusinessFuturePlan-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="33">
                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>পরিবারের সদস্য সংক্রান্ত</u></h5>
                            </div>

                            <div class="form-group col-md-6" id="form-FamilyType-error">
                                {!! Form::label("FamilyType","পরিবারের প্রকৃতি",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="FamilyType">
                                        @foreach($familytype as $Familytype_data )
                                            @if($loan->FamilyType==$Familytype_data->id)
                                                {
                                                <option value="{{$Familytype_data->id}}"
                                                        selected>{{$Familytype_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$Familytype_data->id}}">{{$Familytype_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$Familytype_data->id}}">{{$Familytype_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("FamilyType",['1' => 'Single', '2' => 'Combined'])!!}--}}
                                    <span id="FamilyType-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-FamilyMember-error">
                                {!! Form::label("FamilyMember","পরিবারের সদস্য সংখ্যা ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="FamilyMember">
                                        @foreach($count as $count_data )
                                            @if($loan->FamilyMember==$count_data->id)
                                                {
                                                <option value="{{$count_data->id}}"
                                                        selected>{{$count_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$count_data->id}}">{{$count_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$count_data->id}}">{{$count_data->name}}</option>--}}
                                        @endforeach
                                    </select>
                                    <span id="FamilyMember-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-MaleMember-error">
                                {!! Form::label("MaleMember","পুরুষ সদস্য সংখ্যা ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="MaleMember">
                                        @foreach($count as $count_data )
                                            @if($loan->MaleMember==$count_data->id)
                                                {
                                                <option value="{{$count_data->id}}"
                                                        selected>{{$count_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$count_data->id}}">{{$count_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$count_data->id}}">{{$count_data->name}}</option>--}}
                                        @endforeach
                                    </select>

                                    <span id="MaleMember-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-FemaleMember-error">
                                {!! Form::label("FemaleMember","মহিলা সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="FemaleMember">
                                        @foreach($count as $count_data )
                                            @if($loan->FemaleMember==$count_data->id)
                                                {
                                                <option value="{{$count_data->id}}"
                                                        selected>{{$count_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$count_data->id}}">{{$count_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$count_data->id}}">{{$count_data->name}}</option>--}}
                                        @endforeach
                                    </select>

                                    <span id="FemaleMember-error" class="help-block"></span>
                                </div>
                            </div>


                            <div class="form-group col-md-6" id="form-EarningPerson-error">
                                {!! Form::label("EarningPerson","উপার্জনক্ষম সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="EarningPerson">
                                        @foreach($count as $count_data )
                                            @if($loan->EarningPerson==$count_data->id)
                                                {
                                                <option value="{{$count_data->id}}"
                                                        selected>{{$count_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$count_data->id}}">{{$count_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$count_data->id}}">{{$count_data->name}}</option>--}}
                                        @endforeach
                                    </select>

                                    <span id="EarningPerson-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-EarningMale-error">
                                {!! Form::label("EarningMale","উপার্জনক্ষম পুরুষের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="EarningMale">
                                        @foreach($count as $count_data )
                                            @if($loan->EarningMale==$count_data->id)
                                                {
                                                <option value="{{$count_data->id}}"
                                                        selected>{{$count_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$count_data->id}}">{{$count_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$count_data->id}}">{{$count_data->name}}</option>--}}
                                        @endforeach
                                    </select>

                                    <span id="EarningMale-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-EarningFemale-error">
                                {!! Form::label("EarningFemale","উপার্জনক্ষম মহিলার সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="EarningFemale">
                                        @foreach($count as $count_data )
                                            @if($loan->EarningFemale==$count_data->id)
                                                {
                                                <option value="{{$count_data->id}}"
                                                        selected>{{$count_data->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$count_data->id}}">{{$count_data->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$count_data->id}}">{{$count_data->name}}</option>--}}
                                        @endforeach
                                    </select>

                                    <span id="EarningFemale-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-SickDescriptionOfFamilyMember-error">
                                {!! Form::label("SickDescriptionOfFamilyMember","পরিবারে কেহ গুরুত্বর অসুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <textarea name="SickDescriptionOfFamilyMember" cols="50"
                                              rows="3">{{$loan->SickDescriptionOfFamilyMember}}</textarea>

                                    <span id="SickDescriptionOfFamilyMember-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-CaseDescriptionOfFamilyMember-error">
                                {!! Form::label("CaseDescriptionOfFamilyMember","পরিবারে কেহ কথনও মামলাগ্রুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <textarea name="CaseDescriptionOfFamilyMember" cols="50"
                                              rows="3">{{$loan->CaseDescriptionOfFamilyMember}}</textarea>

                                    <span id="CaseDescriptionOfFamilyMember-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-IfAnyMemberInAbroad-error">
                                {!! Form::label("IfAnyMemberInAbroad","পরিবারে কেহ বিদেশে থাকলে - কোন দেশে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <textarea name="IfAnyMemberInAbroad" cols="50"
                                              rows="3">{{$loan->IfAnyMemberInAbroad}}</textarea>
                                    <span id="IfAnyMemberInAbroad-error" class="help-block"></span>
                                </div>
                            </div>

                        </div>

                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua">জমি ও ঘরবাড়ি সংক্রান্ত</h5>
                            </div>
                            <div class="form-group col-md-6" id="form-CultiviableLand-error">
                                {!! Form::label("CultiviableLand","আবাদি জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="CultiviableLand"
                                           value="{{$loan->CultiviableLand}}">
                                    {{--{!! Form::number("CultiviableLand",null,["class"=>"form-control"]) !!}--}}
                                    <span id="CultiviableLand-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-NonCultivableLand-error">
                                {!! Form::label("NonCultivableLand","অনাবাদি জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="NonCultivableLand"
                                           value="{{$loan->NonCultivableLand}}">
                                    {{--{!! Form::number("NonCultivableLand",null,["class"=>"form-control"]) !!}--}}
                                    <span id="NonCultivableLand-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-Pond-error">
                                {!! Form::label("Pond","পুকুর (শতক)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="Pond"
                                           value="{{$loan->Pond}}">
                                    {{--{!! Form::number("Pond",null,["class"=>"form-control"]) !!}--}}
                                    <span id="Pond-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-House-error">
                                {!! Form::label("House","বসত বাড়ী(শতক)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="House"
                                           value="{{$loan->House}}">
                                    {{--{!! Form::number("House",null,["class"=>"form-control"]) !!}--}}
                                    <span id="House-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-TotalLand-error">
                                {!! Form::label("TotalLand","মোট জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="TotalLand"
                                           value="{{$loan->TotalLand}}">
                                    {{--{!! Form::number("TotalLand",null,["class"=>"form-control"]) !!}--}}
                                    <span id="TotalLand-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-TinMadeHouse-error">
                                {!! Form::label("TinMadeHouse","টিনের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="TinMadeHouse"
                                           value="{{$loan->TinMadeHouse}}">
                                    {{--{!! Form::number("TinMadeHouse",null,["class"=>"form-control"]) !!}--}}
                                    <span id="TinMadeHouse-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-StrawMadeHouse-error">
                                {!! Form::label("StrawMadeHouse","খড়ের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="StrawMadeHouse"
                                           value="{{$loan->StrawMadeHouse}}">
                                    {{--{!! Form::number("StrawMadeHouse",null,["class"=>"form-control"]) !!}--}}
                                    <span id="StrawMadeHouse-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-BrickMadeHouse-error">
                                {!! Form::label("BrickMadeHouse","ইটের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="BrickMadeHouse"
                                           value="{{$loan->BrickMadeHouse}}">
                                    {{--{!! Form::number("BrickMadeHouse",null,["class"=>"form-control"]) !!}--}}
                                    <span id="BrickMadeHouse-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua">বাৎসরিক মোট আয় ও ব্যয়</h5>
                            </div>
                            <div class="form-group col-md-6" id="form-AgriculturalEarning-error">
                                {!! Form::label("AgriculturalEarning","কৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="AgriculturalEarning"
                                           value="{{$loan->AgriculturalEarning}}">
                                    {{--{!! Form::number("AgriculturalEarning",null,["class"=>"form-control"]) !!}--}}
                                    <span id="AgriculturalEarning-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-NonAgriculturalEarning-error">
                                {!! Form::label("NonAgriculturalEarning","অকৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="NonAgriculturalEarning"
                                           value="{{$loan->NonAgriculturalEarning}}">
                                    {{--{!! Form::number("NonAgriculturalEarning",null,["class"=>"form-control"]) !!}--}}
                                    <span id="NonAgriculturalEarning-error" class="help-block"></span>
                                </div>
                            </div>


                            <div class="form-group col-md-6" id="form-TotalEarning-error">
                                {!! Form::label("TotalEarning","মোট আয় (টাকা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="TotalEarning"
                                           value="{{$loan->TotalEarning}}">
                                    {{--{!! Form::number("TotalEarning",null,["class"=>"form-control"]) !!}--}}
                                    <span id="TotalEarning-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-TotalExpenditure-error">
                                {!! Form::label("TotalExpenditure","মোট ব্যয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="TotalExpenditure"
                                           value="{{$loan->TotalExpenditure}}">
                                    {{--{!! Form::number("TotalExpenditure",null,["class"=>"form-control"]) !!}--}}
                                    <span id="TotalExpenditure-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-NetBalance-error">
                                {!! Form::label("NetBalance","উদ্বৃত্ত/ঘাটতি (টাকা)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="NetBalance"
                                           value="{{$loan->NetBalance}}">
                                    {{--{!! Form::number("NetBalance",null,["class"=>"form-control"]) !!}--}}
                                    <span id="NetBalance-error" class="help-block"></span>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="tab-pane" id="44">
                        <div class="borderportion">
                            <div class="box-header col-md-11">
                                <h5 class="text-aqua"><u>বিনিয়োগ সংক্রান্ত</u></h5>
                            </div>
                            <div class="form-group col-md-6" id="form-ReceivedAmount-error">
                                {!! Form::label("ReceivedAmount","বিনিয়োগ/ঋণ গ্রহণ করলে গৃহীত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="ReceivedAmount"
                                           value="{{$loan->ReceivedAmount}}">
                                    {{--{!! Form::number("ReceivedAmount",null,["class"=>"form-control"]) !!}--}}
                                    <span id="ReceivedAmount-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-PaidAmount-error">
                                {!! Form::label("PaidAmount","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="PaidAmount"
                                           value="{{$loan->PaidAmount}}">
                                    {{--{!! Form::number("PaidAmount",null,["class"=>"form-control"]) !!}--}}
                                    <span id="PaidAmount-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-RemainingAmountToPay-error">
                                {!! Form::label("RemainingAmountToPay","অবশিষ্ট টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="RemainingAmountToPay"
                                           value="{{$loan->RemainingAmountToPay}}">
                                    {{--{!! Form::number("RemainingAmountToPay",null,["class"=>"form-control"]) !!}--}}
                                    <span id="RemainingAmountToPay-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-FinancierCompany-error">
                                {!! Form::label("FinancierCompany","লগ্নীকারী প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="FinancierCompany"
                                           value="{{$loan->FinancierCompany}}">
                                    {{--{!! Form::text("FinancierCompany",null,["class"=>"form-control"]) !!}--}}
                                    <span id="FinancierCompany-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-LoaningYear-error">
                                {!! Form::label("LoaningYear","কতদিন যাবৎ গ্রহন করছেন (মাস)",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="LoaningYear"
                                           value="{{$loan->LoaningYear}}">
                                    {{--{!! Form::number("LoaningYear",null,["class"=>"form-control"]) !!}--}}
                                    <span id="LoaningYear-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-LastReceivedDate-error">
                                {!! Form::label("LastReceivedDate","সর্বশেষ কবে গ্রহণ করেছেন",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="date" name="LastReceivedDate"
                                           value="{{$loan->LastReceivedDate}}">
                                    {{--{!! Form::date("LastReceivedDate",null,["class"=>"form-control"]) !!}--}}
                                    <span id="LastReceivedDate-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-RepaymentType-error">
                                {!! Form::label("RepaymentType","পরিশোধের ধরণ ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="RepaymentType">
                                        @foreach($Repaymenttype as $Repayment_info )
                                            @if($loan->RepaymentType==$Repayment_info->id)
                                                {
                                                <option value="{{$Repayment_info->id}}"
                                                        selected>{{$Repayment_info->name}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$Repayment_info->id}}">{{$Repayment_info->name}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$Repayment_info->id}}">{{$Repayment_info->Status}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("RepaymentType",['1'=>'Regular', '2'=>'Irregular'])!!}--}}
                                    <span id="RepaymentType-error" class="help-block"></span>
                                </div>
                            </div>
                            <p style="clear: both;
	border: 1px solid #f2f2f2;
	line-height: 0px;
	margin-top: 10%;
	padding-top: 0px;
	display: block;
	position: relative;">&nbsp;</p>
                            <div class="form-group col-md-6" id="form-IsHeSheWillingToTakeLoan-error">
                                {!! Form::label("IsHeSheWillingToTakeLoan","TIMF হতে বিনিয়োগ/ঋণ গ্রহন করতে আগ্রহী কি না-",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <select name="IsHeSheWillingToTakeLoan">
                                        @foreach($status as $status_info )
                                            @if($loan->IsHeSheWillingToTakeLoan==$status_info->id)
                                                {
                                                <option value="{{$status_info->id}}"
                                                        selected>{{$status_info->Status}}</option>
                                                }
                                            @else
                                                {
                                                <option value="{{$status_info->id}}">{{$status_info->Status}}</option>
                                                }
                                            @endif
                                            {{--<option value="{{$status_info->id}}">{{$status_info->Status}}</option>--}}
                                        @endforeach
                                    </select>
                                    {{--{!! Form::select("IsHeSheWillingToTakeLoan",['1'=>'Yes', '2'=>'No'])!!}--}}
                                    <span id="IsHeSheWillingToTakeLoan-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-InvestmentSector-error">
                                {!! Form::label("InvestmentSector","বিনিয়োগের খাত",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <textarea class="form-control" type="text" name="InvestmentSector"
                                              value="{{$loan->InvestmentSector}}">{{$loan->InvestmentSector}}</textarea>
                                    {{--{!! Form::text("InvestmentSector",null,["class"=>"form-control"]) !!}--}}
                                    <span id="InvestmentSector-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-Amount-error">
                                {!! Form::label("Amount","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="Amount"
                                           value="{{$loan->Amount}}">
                                    {{--{!! Form::number("Amount",null,["class"=>"form-control"]) !!}--}}
                                    <span id="Amount-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-Comment1-error">
                                {!! Form::label("Comment1","প্রথম ব্যক্তির মন্তব্য ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <textarea name="Comment1" cols="50" rows="3">{{$loan->Comment1}}</textarea>
                                    {{--{!! Form::textarea("Comment1",null,["class"=>"form-control"]) !!}--}}
                                    <span id="Comment1-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-Comment2-error">
                                {!! Form::label("Comment2","দ্বিতীয় ব্যক্তির মন্তব্য ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    <textarea name="Comment2" cols="50" rows="3">{{$loan->Comment2}}</textarea>
                                    {{--{!! Form::textarea("Comment2",null,["class"=>"form-control"]) !!}--}}
                                    <span id="Comment2-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-JoinDate-error">
                                {!! Form::label("JoinDate","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::date("JoinDate",null,["class"=>"form-control"]) !!}
                                    <span id="JoinDate-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-JoinDate-error">
                                {!! Form::label("JoinDate","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::date("JoinDate",null,["class"=>"form-control"]) !!}
                                    <span id="JoinDate-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-LastReceivedDate1-error">
                                {!! Form::label("LastReceivedDate1","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::date("LastReceivedDate1",null,["class"=>"form-control"]) !!}
                                    <span id="LastReceivedDate1-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-push-4">--}}
                                {{--<a href="javascript:ajaxLoad('survey/list')" class="btn btn-danger"><i--}}
                                            {{--class="glyphicon glyphicon-backward"></i>--}}
                                    {{--Back</a>--}}
                                {{--{!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn--}}
                                {{--btn-primary"])!!}--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>


                </div>
            </div>
        </div>
    @endforeach




    {{--<div class="pull-right">{!! str_replace('/?','?',$loans->render()) !!}</div>
    <div class="row">
        <i class="col-sm-12">
            Total: {{$loans->total()}} records
        </i>
    </div>--}}
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

    $(document).ready(function () {
        $(document).on('change', '.DivisionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#DistrictId').empty();
            $.ajax({
                type: 'get',
                url: 'getDistrict',
                data: {'id': DivisionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#DistrictId').append('<option value="'+subcatObj.id+'">'+subcatObj.DistrictName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });
        $(document).on('change', '.DistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#ThanaId').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#ThanaId').append('<option value="'+subcatObj1.id+'">'+subcatObj1.ThanaName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.ThanaId', function () {
            //console.log("yes it is change");

            var op = " ";
            var ThanaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#UnionId').empty();
            $.ajax({
                type: 'get',
                url: 'getUnion',
                data: {'id': ThanaId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#UnionId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.UnionName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.UnionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var UnionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#WordId').empty();
            $.ajax({
                type: 'get',
                url: 'getWord',
                data: {'id': UnionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#WordId').append('<option value="'+subcatObj2.id+'">'+subcatObj2.WardName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.DistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            $('#PostOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getPostOffice',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj3) {
                        $('#PostOfficeId').append('<option value="'+subcatObj3.id+'">'+subcatObj3.PostofficeName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });
        $(document).on('change', '.SpouseProfession', function () {
            //console.log("yes it is change");

            var SpouseProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (SpouseProfession == 'Others') {
                $('#SpouseProfession1').empty();

                $('#SpouseProfession1').append('<input type="text" class="form-control"  name="SpouseOtherProfession" value="">')
            }
        });
        $(document).on('change', '.WifeProfession', function () {
            //console.log("yes it is change");

            var WifeProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (WifeProfession == 'Others') {
                $('#WifeProfession1').empty();

                $('#WifeProfession1').append('<input type="text" class="form-control"  name="WifeOtherProfession" value="">')
            }
        });
        $(document).on('change', '.FatherProfession', function () {
            //console.log("yes it is change");

            var FatherProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (FatherProfession == 'Others') {
                $('#FatherProfession1').empty();

                $('#FatherProfession1').append('<input type="text" class="form-control"  name="FatherOtherProfession" value="">')
            }
        });
        $(document).on('change', '.MotherProfession', function () {
            //console.log("yes it is change");

            var MotherProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (MotherProfession == 'Others') {
                $('#MotherProfession1').empty();

                $('#MotherProfession1').append('<input type="text" class="form-control"  name="MotherOtherProfession" value="">')
            }
        });
        $(document).on('change', '.CurrentProfession', function () {
            //console.log("yes it is change");

            var CurrentProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (CurrentProfession == '7') {
                $('#CurrentProfession1').empty();

                $('#CurrentProfession1').append('<input type="text" class="form-control"  name="CurrentOtherProfession" value="">')
            }
        });

        $(document).on('change', '.PreviousProfession', function () {
            //console.log("yes it is change");

            var PreviousProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (PreviousProfession == 'Others') {
                $('#PreviousProfession1').empty();

                $('#PreviousProfession1').append('<input type="text" class="form-control"  name="PreviousOtherProfession" value="">')
            }
        });
    });

</script>