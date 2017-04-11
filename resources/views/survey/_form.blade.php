<div class="col-md-12 ">
    <div id="exTab2" class="">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#1" data-toggle="tab">শাখার তথ্য</a></li>
            <li><a href="#2" data-toggle="tab">ব্যক্তিগত তথ্য</a></li>
            <li><a href="#3" data-toggle="tab">পারিবারিক তথ্য</a></li>
            <li><a href="#4" data-toggle="tab">পেশা সংক্রান্ত</a></li>
            <li><a href="#5" data-toggle="tab">বিনিয়োগ সংক্রান্ত</a></li>
        </ul>
        <div class="tab-content ">
            <div class="tab-pane active" id="1">
                <div class="borderportion">
                    <div class="form-group col-md-6" id="form-DivisionOfficeId-error">
                        {!! Form::label("DivisionOfficeId","বিভাগ অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                        <!-- {{--<select name="ZoneId">--}}
                        {{--@foreach($zone as $zone_data )--}}
                        {{--<option value="{{$zone_data->id}}">{{$zone_data->ZoneName}}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}} -->
                            {!! Form::select("DivisionOfficeId",$DivisionOfficeInfo,null,["class"=>"form-control DivisionOfficeId required","id"=>"DivisionOfficeId"]) !!}
                            <span id="DivisionOfficeId-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-ZoneId-error">
                        {!! Form::label("ZoneId","জোন অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                        <!-- {{--<select name="ZoneId">--}}
                        {{--@foreach($zone as $zone_data )--}}
                        {{--<option value="{{$zone_data->id}}">{{$zone_data->ZoneName}}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}} -->
                            {!! Form::select("ZoneId",$ZoneInfo,null,["class"=>"form-control ZoneId required","id"=>"ZoneId"]) !!}
                            <span id="ZoneId-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-AreaId-error">
                        {!! Form::label("AreaId","এরিয়া অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="AreaId">--}}
                            {{--@foreach($area as $area_data )--}}
                            {{--<option value="{{$area_data->id}}">{{$area_data->AreaName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("AreaId",$AreaInfo,null,["class"=>"form-control AreaId required","id"=>"AreaId"]) !!}
                            <span id="AreaId-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-BranchId-error">
                        {!! Form::label("BranchId","শাখা অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                        <!-- {{--<select name="BranchId">--}}
                        {{--@foreach($branch as $branch_data )--}}
                        {{--<option value="{{$branch_data->id}}">{{$branch_data->BranchName}}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}} -->
                            {!! Form::select("BranchId",$BranchInfo,null,["class"=>"form-control BranchId required","id"=>"BranchId"]) !!}
                            <span id="BranchId-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-12" id="form-BranchId-error">--}}
                        {{--{!! Form::label("BranchId","শাখা অফিস",["class"=>"control-label col-md-12"]) !!}--}}
                        {{--<div class="col-md-12">--}}
                        {{--<!-- --}}{{--<select name="BranchId">--}}
                        {{--@foreach($branch as $branch_data )--}}
                        {{--<option value="{{$branch_data->id}}">{{$branch_data->BranchName}}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}}{{-- -->--}}
                            {{--{!! Form::select("BranchId",$BranchInfo,null,["class"=>"form-control BranchId required","id"=>"BranchId"]) !!}--}}
                            {{--<span id="BranchId-error" class="help-block"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="#2" data-toggle="tab" class="btn btn-success"><i
                                    class="glyphicon glyphicon-forward"></i>
                            Next</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="2">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u> নাম</u></h5>
                    </div>
                    {{--<div class="form-group col-md-3" id="form-NameTitle-error">--}}
                    {{--{!! Form::label("NameTitle","পুর্ন নাম(ইংরেজী):",["class"=>"control-label col-md-12"]) !!}--}}
                    {{--<div class="col-md-12">--}}
                    {{--{!! Form::select("NameTitle",$NameTitle,null,["class"=>"form-control NameTitle required","id"=>"NameTitle"]) !!}--}}
                    {{--<span id="NameTitle-error" class="help-block"></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group col-md-4" id="form-FullNameEnglish-error">
                        {!! Form::label("FullNameEnglish","পুর্ন নাম(ইংরেজী)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FullNameEnglish",null,["class"=>"form-control required"]) !!}
                            <span id="FullNameEnglish-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-3" id="form-LastName-error">--}}
                    {{--{!! Form::label("LastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}--}}
                    {{--<div class="col-md-12">--}}
                    {{--{!! Form::text("LastName",null,["class"=>"form-control required"]) !!}--}}
                    {{--<span id="LastName-error" class="help-block"></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-3" id="form-FamilyName-error">--}}
                    {{--{!! Form::label("FamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}--}}
                    {{--<div class="col-md-12">--}}
                    {{--{!! Form::text("FamilyName",null,["class"=>"form-control required"]) !!}--}}
                    {{--<span id="FamilyName-error" class="help-block"></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group col-md-4" id="form-FullNameBangla-error">
                        {!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FullNameBangla",null,["class"=>"form-control required"]) !!}
                            <span id="FullNameBangla-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-Gender-error">
                        {!! Form::label("Gender","জেন্ডার",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("Gender",$Gender,null,["class"=>"form-control Gender required","id"=>"Gender"]) !!}
                            <span id="Gender-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-Age-error">
                        {!! Form::label("Age","জন্ম তারিখ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("Age",null,["class"=>"form-control Age required","id"=>"Age"]) !!}
                            {{--{!! Form::select("Age",$Age,null,["class"=>"form-control Age required","id"=>"Age"]) !!}--}}
                            <span id="Age-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-Age1-error">
                        {!! Form::label("Age1","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("Age1",null,["class"=>"form-control Age1 required","id"=>"Age1"]) !!}
                            {{--{!! Form::select("Age1",$Age1,null,["class"=>"form-control Age1 required","id"=>"Age1"]) !!}--}}
                            <span id="Age1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-Education-error">
                        {!! Form::label("Education","সর্বোচ্চ শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 Education" id="Education">
                            {!! Form::select("Education",$Education,null,["class"=>"form-control Education required","id"=>"Education"]) !!}
                            <span id="Education-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-4" id="form-PassingYear-error">--}}
                    {{--{!! Form::label("PassingYear","পাশের বছর",["class"=>"control-label col-md-12"]) !!}--}}
                    {{--<div class="col-md-12">--}}
                    {{--{!! Form::select("PassingYear",$PassingYear,null,["class"=>"form-control PassingYear required","id"=>"PassingYear"]) !!}--}}
                    {{--<span id="PassingYear-error" class="help-block"></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group col-md-4" id="form-SpouseProfession-error">
                        {!! Form::label("SpouseProfession","অভিভাবকের পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 SpouseProfession" id="SpouseProfession">
                            {{--<select name="SpouseProfession" id="SpouseProfession" class="SpouseProfession">--}}
                            {{--@foreach($profession as $profession_data )--}}
                            {{--<option value="{{$profession_data->name}}">{{$profession_data->name}}</option>--}}
                            {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("SpouseProfession",$Profession,null,["class"=>"form-control SpouseProfession1 required","id"=>"SpouseProfession1"]) !!}
                            <span id="SpouseProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-SpouseMobileNo-error">
                        {!! Form::label("SpouseMobileNo","অভিভাবকের মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("SpouseMobileNo",null,["class"=>"form-control required"]) !!}
                            <span id="SpouseMobileNo-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-MaritalStatus-error">
                        {!! Form::label("MaritalStatus","বৈবাহিক অবস্থা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("MaritalStatus",$MaritalStatus,null,["class"=>"form-control MaritalStatus required","id"=>"MaritalStatus"]) !!}
                            <span id="MaritalStatus-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-Nid-error">
                        {!! Form::label("Nid","জাতীয় পরিচয় পত্রের নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("Nid",null,["class"=>"form-control required"]) !!}
                            <span id="Nid-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-Mobile-error">
                        {!! Form::label("Mobile","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("Mobile",null,["class"=>"form-control required"]) !!}
                            <span id="Mobile-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-Email-error">
                        {!! Form::label("Email","ইমেইল",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::email("Email",null,["class"=>"form-control required"]) !!}
                            <span id="Email-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-PoliticalStatus-error">
                        {!! Form::label("PoliticalStatus","রাজনীতির সাথে জড়িত কি না?",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("PoliticalStatus",$PoliticalStatus,null,["class"=>"form-control PoliticalStatus required","id"=>"PoliticalStatus"]) !!}
                            <span id="PoliticalStatus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-Distance-error">
                        {!! Form::label("Distance","শাখা অফিসের দুরুত্ব (কিঃ মিঃ)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                        <!-- {{--{!! Form::select("Distance", ['1', '2', '3','4', '5', '6'])!!}--}} -->
                            {!! Form::number("Distance",null,["class"=>"form-control required"]) !!}
                            <span id="Distance-error" class="help-block"></span>
                        </div>
                    </div>

                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>স্ত্রীর নাম</u></h5>
                    </div>
                    {{--<div class="form-group col-md-3" id="form-WifeNameTitle-error">--}}
                    {{--{!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}--}}
                    {{--<div class="col-md-12">--}}
                    {{--{!! Form::select("WifeNameTitle",$NameTitle,null,["class"=>"form-control WifeNameTitle required","id"=>"WifeNameTitle"]) !!}--}}
                    {{--<span id="WifeNameTitle-error" class="help-block"></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group col-md-4" id="form-WifeFullNameEnglish-error">
                        {!! Form::label("WifeFullNameEnglish","পূর্ণ নাম(ইংরেজী)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("WifeFullNameEnglish",null,["class"=>"form-control required"]) !!}
                            <span id="WifeFullNameEnglish-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-WifeFullNameBangla-error">
                        {!! Form::label("WifeFullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("WifeFullNameBangla",null,["class"=>"form-control required"]) !!}
                            <span id="WifeFullNameBangla-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-WifeAge-error">
                        {!! Form::label("WifeAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("WifeAge",$Age,null,["class"=>"form-control WifeAge required","id"=>"WifeAge"]) !!}
                            <span id="WifeAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-WifeMobileNo-error">
                        {!! Form::label("WifeMobileNo","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("WifeMobileNo",null,["class"=>"form-control required"]) !!}
                            <span id="WifeMobileNo-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-WifeProfession-error">
                        {!! Form::label("WifeProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 WifeProfession1" id="WifeProfession1">
                            {!! Form::select("WifeProfession",$Profession,null,["class"=>"form-control WifeProfession required","id"=>"WifeProfession"]) !!}
                            <span id="WifeProfession-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>
                    </div>
                    <div class="form-group col-md-4" id="form-FatherOrHasbandFullNameEnglish-error">
                        {!! Form::label("FatherOrHasbandFullNameEnglish","পূর্ণ নাম(ইংরেজী)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FatherOrHasbandFullNameEnglish",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOrHasbandFullNameEnglish-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-FatherOrHasbandFullnameBangla-error">
                        {!! Form::label("FatherOrHasbandFullnameBangla","পূর্ণ নাম(বাংলা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FatherOrHasbandFullnameBangla",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOrHasbandFullnameBangla-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-FatherOrHasbandAge-error">
                        {!! Form::label("FatherOrHasbandAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FatherOrHasbandAge",$Age,null,["class"=>"form-control FatherOrHasbandAge required","id"=>"FatherOrHasbandAge"]) !!}
                            <span id="FatherOrHasbandAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-FatherProfession-error">
                        {!! Form::label("FatherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 FatherProfession1" id="FatherProfession1">

                            {!! Form::select("FatherProfession",$Profession,null,["class"=>"form-control FatherProfession required","id"=>"FatherProfession"]) !!}
                            <span id="FatherProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-FatherMobileNo-error">
                        {!! Form::label("FatherMobileNo","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("FatherMobileNo",null,["class"=>"form-control required"]) !!}
                            <span id="FatherMobileNo-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>মায়ের নাম</u></h5>
                    </div>

                    <div class="form-group col-md-4" id="form-MotherFUllNameEnglish-error">
                        {!! Form::label("MotherFUllNameEnglish","পূর্ণ নাম(ইংরেজী)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("MotherFUllNameEnglish",null,["class"=>"form-control required"]) !!}
                            <span id="MotherFUllNameEnglish-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-MotherFullNameBangla-error">
                        {!! Form::label("MotherFullNameBangla","পূর্ণ নাম(বাংলা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("MotherFullNameBangla",null,["class"=>"form-control required"]) !!}
                            <span id="MotherFullNameBangla-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-MotherAge-error">
                        {!! Form::label("MotherAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("MotherAge",$Age,null,["class"=>"form-control MotherAge required","id"=>"MotherAge"]) !!}
                            <span id="MotherAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-MotherProfession-error">
                        {!! Form::label("MotherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 MotherProfession1" id="MotherProfession1">
                            {!! Form::select("MotherProfession",$Profession,null,["class"=>"form-control MotherProfession required","id"=>"MotherProfession"]) !!}
                            <span id="MotherProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-MotherMobileNo-error">
                        {!! Form::label("MotherMobileNo","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("MotherMobileNo",null,["class"=>"form-control required"]) !!}
                            <span id="MotherMobileNo-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>বর্তমান ঠিকানা</u></h5>
                    </div>
                    <div class="form-group col-md-4" id="form-PresentCountry-error">
                        {!! Form::label("PresentCountry","দেশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">

                            {{--<select name="PresentCountry">--}}
                            {{--@foreach($country as $country_data )--}}
                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PresentCountry",$Country,null,["class"=>"form-control PresentCountry required","id"=>"PresentCountry"]) !!}
                            <span id="PresentCountry-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PresentDivision-error">
                        {!! Form::label("PresentDivision","বিভাগ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">

                            {{--<select name="PresentDivision">--}}
                            {{--@foreach($country as $country_data )--}}
                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PresentDivision",$Division,null,["class"=>"form-control PresentDivision required","id"=>"PresentDivision"]) !!}
                            <span id="PresentDivision-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PresentDistrict-error">
                        {!! Form::label("PresentDistrict","জেলা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PresentDistrict">--}}
                            {{--@foreach($district as $district_data )--}}
                            {{--<option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PresentDistrict",$District,null,["class"=>"form-control PresentDistrict required","id"=>"PresentDistrict"]) !!}
                            <span id="PresentDistrict-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PresentThana-error">
                        {!! Form::label("PresentThana","থানা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("PresentThana",$Thana,null,["class"=>"form-control PresentThana required","id"=>"PresentThana"]) !!}

                            <span id="PresentThana-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PresentUnion-error">
                        {!! Form::label("PresentUnion","ইউনিয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PresentUnion">--}}
                            {{--@foreach($union as $union_data )--}}
                            {{--<option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PresentUnion",$Union,null,["class"=>"form-control PresentUnion required","id"=>"PresentUnion"]) !!}
                            <span id="PresentUnion-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-PresentPostOffice-error">
                        {!! Form::label("PresentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PresentPostOffice",null,["class"=>"form-control required"]) !!}
                            <span id="PresentPostOffice-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-PresentWord-error">
                        {!! Form::label("PresentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PresentWord",null,["class"=>"form-control required"]) !!}
                            <span id="PresentWord-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PresentVillage-error">
                        {!! Form::label("PresentVillage","গ্রাম বা মহল্লা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PresentVillage",null,["class"=>"form-control required"]) !!}
                            <span id="PresentVillage-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PresentRoadNo-error">
                        {!! Form::label("PresentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PresentRoadNo",null,["class"=>"form-control required"]) !!}
                            <span id="PresentRoadNo-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>স্থায়ী ঠিকানা</u></h5>
                    </div>
                    <div class="form-group col-md-4" id="form-PermanentCountry-error">
                        {!! Form::label("PermanentCountry","দেশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PermanentCountry">--}}
                            {{--@foreach($country as $country_data )--}}
                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PermanentCountry",$Country,null,["class"=>"form-control PermanentCountry required","id"=>"PermanentCountry"]) !!}
                            <span id="PermanentCountry-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-PermanentDivision-error">
                        {!! Form::label("PermanentDivision","বিভাগ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">

                            {{--<select name="PermanentDivision">--}}
                            {{--@foreach($country as $country_data )--}}
                            {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PermanentDivision",$Division,null,["class"=>"form-control PermanentDivision required","id"=>"PermanentDivision"]) !!}
                            <span id="PermanentDivision-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-PermanentDistrict-error">
                        {!! Form::label("PermanentDistrict","জেলা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PermanentDistrict">--}}
                            {{--@foreach($district as $district_data )--}}
                            {{--<option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PermanentDistrict",$District,null,["class"=>"form-control PermanentDistrict required","id"=>"PermanentDistrict"]) !!}
                            <span id="PermanentDistrict-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PermanentThana-error">
                        {!! Form::label("PermanentThana","থানা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PermanentThana">--}}
                            {{--@foreach($thana as $thana_data )--}}
                            {{--<option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PermanentThana",$Thana,null,["class"=>"form-control PermanentThana required","id"=>"PermanentThana"]) !!}
                            <span id="PermanentThana-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PermanentUnion-error">
                        {!! Form::label("PermanentUnion","ইউনিয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PermanentUnion">--}}
                            {{--@foreach($union as $union_data )--}}
                            {{--<option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PermanentUnion",$Union,null,["class"=>"form-control PermanentUnion required","id"=>"PermanentUnion"]) !!}
                            <span id="PermanentUnion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PermanentPostOffice-error">
                        {!! Form::label("PermanentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PermanentPostOffice",null,["class"=>"form-control required"]) !!}

                            {{--{!! Form::select("PermanentPostOffice",$PostOffice,null,["class"=>"form-control PermanentPostOffice required","id"=>"PermanentPostOffice"]) !!}--}}
                            <span id="PermanentPostOffice-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PermanentWord-error">
                        {!! Form::label("PermanentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PermanentWord">--}}
                            {{--@foreach($word as $word_data )--}}
                            {{--<option value="{{$word_data->id}}">{{$word_data->WordName}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::text("PermanentWord",null,["class"=>"form-control required"]) !!}
                            <span id="PermanentWord-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PermanentVillage-error">
                        {!! Form::label("PermanentVillage","গ্রাম বা মহল্লা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PermanentVillage",null,["class"=>"form-control required"]) !!}
                            <span id="PermanentVillage-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-4" id="form-PermanentRoadNo-error">
                        {!! Form::label("PermanentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PermanentRoadNo",null,["class"=>"form-control required"]) !!}
                            <span id="PermanentRoadNo-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="#1" data-toggle="tab" class="btn btn-success"><i
                                    class="glyphicon glyphicon-backward"></i>
                            Back</a>
                        <a href="#3" data-toggle="tab" class="btn btn-success"><i
                                    class="glyphicon glyphicon-forward"></i>
                            Next</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="3">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>পরিবারের সদস্য সংক্রান্ত</u></h5>
                    </div>

                    <div class="form-group col-md-6" id="form-FamilyType-error">
                        {!! Form::label("FamilyType","পরিবারের প্রকৃতি",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FamilyType",$Familytypes,null,["class"=>"form-control FamilyType required","id"=>"FamilyType"]) !!}
                            <span id="FamilyType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-FamilyMember-error">
                        {!! Form::label("FamilyMember","পরিবারের সদস্য সংখ্যা ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FamilyMember",$Count_Data,null,["class"=>"form-control FamilyMember required","id"=>"FamilyMember"]) !!}
                            <span id="FamilyMember-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MaleMember-error">
                        {!! Form::label("MaleMember","পুরুষ সদস্য সংখ্যা ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("MaleMember",$Count_Data,null,["class"=>"form-control MaleMember required","id"=>"MaleMember"]) !!}
                            <span id="MaleMember-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FemaleMember-error">
                        {!! Form::label("FemaleMember","মহিলা সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FemaleMember",$Count_Data,null,["class"=>"form-control FemaleMember required","id"=>"FemaleMember"]) !!}
                            <span id="FemaleMember-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-EarningPerson-error">
                        {!! Form::label("EarningPerson","উপার্জনক্ষম সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("EarningPerson",$Count_Data,null,["class"=>"form-control EarningPerson required","id"=>"EarningPerson"]) !!}
                            <span id="EarningPerson-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-EarningMale-error">
                        {!! Form::label("EarningMale","উপার্জনক্ষম পুরুষের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("EarningMale",$Count_Data,null,["class"=>"form-control EarningMale required","id"=>"EarningMale"]) !!}
                            <span id="EarningMale-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-EarningFemale-error">
                        {!! Form::label("EarningFemale","উপার্জনক্ষম মহিলার সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("EarningFemale",$Count_Data,null,["class"=>"form-control EarningFemale required","id"=>"EarningFemale"]) !!}
                            <span id="EarningFemale-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SickDescriptionOfFamilyMember-error">
                        {!! Form::label("SickDescriptionOfFamilyMember","পরিবারে কেহ গুরুত্বর অসুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("SickDescriptionOfFamilyMember",null,["class"=>"form-control required"]) !!}
                            <span id="SickDescriptionOfFamilyMember-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-CaseDescriptionOfFamilyMember-error">
                        {!! Form::label("CaseDescriptionOfFamilyMember","পরিবারে কেহ কথনও মামলাগ্রুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("CaseDescriptionOfFamilyMember",null,["class"=>"form-control required"]) !!}
                            <span id="CaseDescriptionOfFamilyMember-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-IfAnyMemberInAbroad-error">
                        {!! Form::label("IfAnyMemberInAbroad","পরিবারে কেহ বিদেশে থাকলে - কোন দেশে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("IfAnyMemberInAbroad",null,["class"=>"form-control required"]) !!}
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
                            {!! Form::number("CultiviableLand",0,["class"=>"form-control required","id"=>"CultiviableLand"]) !!}
                            <span id="CultiviableLand-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-NonCultivableLand-error">
                        {!! Form::label("NonCultivableLand","অনাবাদি জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("NonCultivableLand",0,["class"=>"form-control required","id"=>"NonCultivableLand"]) !!}
                            <span id="NonCultivableLand-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Pond-error">
                        {!! Form::label("Pond","পুকুর (শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("Pond",0,["class"=>"form-control required","id"=>"Pond"]) !!}
                            <span id="Pond-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-House-error">
                        {!! Form::label("House","বসত বাড়ী(শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("House",0,["class"=>"form-control required","id"=>"House"]) !!}
                            <span id="House-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-TotalLand-error">
                        {!! Form::label("TotalLand","মোট জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("TotalLand",0,["class"=>"form-control required","id"=>"TotalLand"]) !!}
                            <span id="TotalLand-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-TinMadeHouse-error">
                        {!! Form::label("TinMadeHouse","টিনের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("TinMadeHouse",null,["class"=>"form-control required"]) !!}
                            <span id="TinMadeHouse-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-StrawMadeHouse-error">
                        {!! Form::label("StrawMadeHouse","খড়ের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("StrawMadeHouse",null,["class"=>"form-control required"]) !!}
                            <span id="StrawMadeHouse-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-BrickMadeHouse-error">
                        {!! Form::label("BrickMadeHouse","ইটের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("BrickMadeHouse",null,["class"=>"form-control required"]) !!}
                            <span id="BrickMadeHouse-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua">বাৎসরিক মোট আয় ও ব্যয়</h5>
                    </div>
                    <div class="form-group col-md-4" id="form-AgriculturalEarning-error">
                        {!! Form::label("AgriculturalEarning","কৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("AgriculturalEarning",0,["class"=>"form-control required", "id"=>"AgriculturalEarning"]) !!}
                            <span id="AgriculturalEarning-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-NonAgriculturalEarning-error">
                        {!! Form::label("NonAgriculturalEarning","অকৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("NonAgriculturalEarning",0,["class"=>"form-control required", "id"=>"NonAgriculturalEarning"]) !!}
                            <span id="NonAgriculturalEarning-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-TotalEarning-error">
                        {!! Form::label("TotalEarning","মোট আয় (টাকা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("TotalEarning",0,["class"=>"form-control required" , "id"=>"TotalEarning"]) !!}
                            <span id="TotalEarning-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-TotalExpenditure-error">
                        {!! Form::label("TotalExpenditure","মোট ব্যয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("TotalExpenditure",0,["class"=>"form-control required", "id"=>"TotalExpenditure"]) !!}
                            <span id="TotalExpenditure-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-NetBalance-error">
                        {!! Form::label("NetBalance","উদ্বৃত্ত/ঘাটতি (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("NetBalance",0,["class"=>"form-control required", "id"=>"NetBalance"]) !!}
                            <span id="NetBalance-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="#2" data-toggle="tab" class="btn btn-success"><i
                                    class="glyphicon glyphicon-backward"></i>
                            Back</a>
                        <a href="#4" data-toggle="tab" class="btn btn-success"><i
                                    class="glyphicon glyphicon-forward"></i>
                            Next</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="4">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>পেশা সংক্রান্ত</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-CurrentProfession-error">
                        {!! Form::label("CurrentProfession","বর্তমান পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 CurrentProfession1" id="CurrentProfession1">
                            {!! Form::select("CurrentProfession",$Profession,null,["class"=>"form-control CurrentProfession required","id"=>"CurrentProfession"]) !!}
                            <span id="CurrentProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PreviousProfession-error">
                        {!! Form::label("PreviousProfession","বর্তমান পেশার পূর্বে তিনি কি করতেন",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 PreviousProfession1" id="PreviousProfession1">
                            {!! Form::select("PreviousProfession",$Profession,null,["class"=>"form-control PreviousProfession required","id"=>"PreviousProfession"]) !!}
                            <span id="PreviousProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-DurationOfPreviousProfession-error">
                        {!! Form::label("DurationOfPreviousProfession","চাকুরি/ব্যবসা কতদিন ধরে করছেন তার বিবরণ(বছর)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("DurationOfPreviousProfession",null,["class"=>"form-control required"]) !!}
                            <span id="DurationOfPreviousProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-EarningAssetsByBusinessOrJob-error">
                        {!! Form::label("EarningAssetsByBusinessOrJob","চাকুরি/ব্যবসা করে অর্জিত সম্পদের বিবরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("EarningAssetsByBusinessOrJob",null,["class"=>"form-control required"]) !!}
                            <span id="EarningAssetsByBusinessOrJob-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-EarningSourceWithoutBusiness-error">
                        {!! Form::label("EarningSourceWithoutBusiness","ব্যবসা ছাড়া আয়ের উৎস থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("EarningSourceWithoutBusiness",null,["class"=>"form-control required"]) !!}
                            <span id="EarningSourceWithoutBusiness-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-BusinessType-error">
                        {!! Form::label("BusinessType","ব্যবসার ধরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("BusinessType",['' => '--select--','1' => 'Single', '2' => 'Partnership'])!!}
                            <span id="BusinessType-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-BusinessFuturePlan-error">
                        {!! Form::label("BusinessFuturePlan","ব্যবসার ভবিষ্যৎ পরিকল্পনা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("BusinessFuturePlan",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessFuturePlan-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="#3" data-toggle="tab" class="btn btn-success"><i
                                    class="glyphicon glyphicon-backward"></i>
                            Back</a>
                        <a href="#5" data-toggle="tab" class="btn btn-success"><i
                                    class="glyphicon glyphicon-forward"></i>
                            Next</a>

                    </div>
                </div>
            </div>
            <div class="tab-pane" id="5">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>বিনিয়োগ সংক্রান্ত</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-IsHeTakeLoan-error">
                        {!! Form::label("IsHeTakeLoan","অন্য কোন প্রতিষ্ঠান থেকে বিনিয়োগ গ্রহন করেছেন কি?",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("IsHeTakeLoan",$Status,null,["class"=>"form-control IsHeTakeLoan required","id"=>"IsHeTakeLoan"]) !!}
                            <span id="IsHeTakeLoan-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="ReceivedAmount">
                        {!! Form::label("ReceivedAmount","গৃহীত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("ReceivedAmount",0,["class"=>"form-control required","id"=>"ReceivedAmount1"]) !!}
                            <span id="ReceivedAmount-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="PaidAmount">
                        {!! Form::label("PaidAmount","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("PaidAmount",0,["class"=>"form-control required","id"=>"PaidAmount1"]) !!}
                            <span id="PaidAmount-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="RemainingAmountToPay">
                        {!! Form::label("RemainingAmountToPay","অবশিষ্ট টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("RemainingAmountToPay",0,["class"=>"form-control required","id"=>"RemainingAmountToPay1"]) !!}
                            <span id="RemainingAmountToPay-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="FinancierCompany">
                        {!! Form::label("FinancierCompany","লগ্নীকারী প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FinancierCompany",null,["class"=>"form-control required"]) !!}
                            <span id="FinancierCompany-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="LoaningYear">
                        {!! Form::label("LoaningYear","কতদিন যাবৎ গ্রহন করছেন (মাস)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("LoaningYear",null,["class"=>"form-control required"]) !!}
                            <span id="LoaningYear-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="LastReceivedDate">
                        {!! Form::label("LastReceivedDate","সর্বশেষ কবে গ্রহণ করেছেন",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("LastReceivedDate",null,["class"=>"form-control required"]) !!}
                            <span id="LastReceivedDate-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="RepaymentType">
                        {!! Form::label("RepaymentType","পরিশোধের ধরণ ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("RepaymentType",['1'=>'Regular', '2'=>'Irregular'])!!}
                            <span id="RepaymentType-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-IsHeSheWillingToTakeLoan-error">
                        {!! Form::label("IsHeSheWillingToTakeLoan","TIMF হতে বিনিয়োগ/ঋণ গ্রহন করতে আগ্রহী কি না-",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("IsHeSheWillingToTakeLoan",$Status,null,["class"=>"form-control IsHeSheWillingToTakeLoan required","id"=>"IsHeSheWillingToTakeLoan"]) !!}
                            <span id="IsHeSheWillingToTakeLoan-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="InvestmentSector">
                        {!! Form::label("InvestmentSector","বিনিয়োগের খাত",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("InvestmentSector",null,["class"=>"form-control required"]) !!}
                            <span id="InvestmentSector-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="Amount">
                        {!! Form::label("Amount","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("Amount",null,["class"=>"form-control required"]) !!}
                            <span id="Amount-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="Comment1">
                        {!! Form::label("Comment1","প্রথম ব্যক্তির মন্তব্য ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("Comment1",null,["class"=>"form-control required"]) !!}
                            <span id="Comment1-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="Comment2">
                        {!! Form::label("Comment2","দ্বিতীয় ব্যক্তির মন্তব্য ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("Comment2",null,["class"=>"form-control required"]) !!}
                            <span id="Comment2-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-4" id="form-JoinDate-error">
                        {!! Form::label("JoinDate","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("JoinDate",null,["class"=>"form-control required"]) !!}
                            <span id="JoinDate-error" class="help-block"></span>
                        </div>
                    </div>--}}
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="#4" class="btn btn-danger"><i
                                    class="glyphicon glyphicon-backward"></i>
                            Back</a>
                        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
                    btn-primary"])!!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $("#frm").submit(function (event) {
        event.preventDefault();
        $('.loading').show();
        var form = $(this);
        var data = new FormData($(this)[0]);
        var url = form.attr("action");
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#frm input.required, #frm textarea.required').each(function () {
                        index = $(this).attr('id');
                        if (index in data.errors) {
                            $("#form-" + index + "-error").addClass("has-error");
                            $("#" + index + "-error").html(data.errors[index]);
                        }
                        else {
                            $("#form-" + index + "-error").removeClass("has-error");
                            $("#" + index + "-error").empty();
                        }
                    });
                    $('#focus').focus().select();
                } else {
                    $(".has-error").removeClass("has-error");
                    $(".help-block").empty();
                    $('.loading').hide();
                    ajaxLoad(data.url, data.content);
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
        return false;
    });
    $(document).ready(function () {
        //this calculates values automatically
        RemainingAmountToPay();
        $("#ReceivedAmount1,#PaidAmount1").on("keydown keyup", function () {
            RemainingAmountToPay();
        });
    });

    function RemainingAmountToPay() {

        var ReceivedAmount = document.getElementById('ReceivedAmount1').value;
        var PaidAmount = document.getElementById('PaidAmount1').value;

        var RemainingAmountToPay = parseFloat(ReceivedAmount) - parseFloat(PaidAmount);

        if (!isNaN(RemainingAmountToPay)) {
            console.log(RemainingAmountToPay);
            document.getElementById('RemainingAmountToPay1').value = RemainingAmountToPay;
        }
    }
    $(document).ready(function () {
        //this calculates values automatically

        $("#Age").on("change", function () {
            var age = document.getElementById('Age').value;
            console.log(age);
            $.ajax({
                type: 'get',
                url: 'DateCalculate',
                data: {'id': age},
                success: function (data) {

                        document.getElementById('Age1').value = data;

                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
    });

    $(document).ready(function () {
//        $(document).on('keydown keyup', '.Age', function () {
//            //console.log("yes it is change");
//
//            var Age = $(this).val();
//            console.log(Age);
//            //var div = $(this).parent();
//            //console.log(DistrictId);
//
////            if (SpouseProfession1 == '7') {
////                console.log(SpouseProfession1);
////                $('#SpouseProfession').empty();
////
////                $('#SpouseProfession').append('<input type="text" class="form-control"  name="SpouseOtherProfession" value="">')
////            }
//        });
        $(document).on('change', '.IsHeTakeLoan', function () {
//            console.log("yes it is change");

            var IsHeTakeLoan = $(this).val();
            if (IsHeTakeLoan == '2') {
                $('#ReceivedAmount').hide();
                $('#PaidAmount').hide();
                $('#RemainingAmountToPay').hide();
                $('#FinancierCompany').hide();
                $('#LoaningYear').hide();
                $('#LastReceivedDate').hide();
                $('#RepaymentType').hide();
            }
            else {
                $('#ReceivedAmount').show();
                $('#PaidAmount').show();
                $('#RemainingAmountToPay').show();
                $('#FinancierCompany').show();
                $('#LoaningYear').show();
                $('#LastReceivedDate').show();
                $('#RepaymentType').show();
            }

        });
        $(document).on('change', '.IsHeSheWillingToTakeLoan', function () {
            //console.log("yes it is change");

            var op = " ";
            var IsHeSheWillingToTakeLoan = $(this).val();
            if (IsHeSheWillingToTakeLoan == '2') {

                $('#InvestmentSector').hide();
                $('#Amount').hide();
                $('#Comment1').hide();
                $('#Comment2').hide();
            }
            else {
                $('#InvestmentSector').show();
                $('#Amount').show();
                $('#Comment1').show();
                $('#Comment2').show();
            }

        });

        $(document).on('change', '.ZoneId', function () {
            //console.log("yes it is change");

            var op = " ";
            var ZoneId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#AreaId').empty();
            $('#AreaId1').empty();
            $.ajax({
                type: 'get',
                url: 'getArea',
                data: {'id': ZoneId},
                success: function (data) {
                    $.each(data, function (index, subcatObjArea) {
                        $('#AreaId').append('<option value="' + subcatObjArea.id + '" >' + subcatObjArea.AreaName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
        $(document).on('change', '.AreaId', function () {
            //console.log("yes it is change");

            var op = " ";
            var AreaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#BranchId').empty();
            $('#BranchId1').empty();
            $.ajax({
                type: 'get',
                url: 'getBranch',
                data: {'id': AreaId},
                success: function (data) {
                    $.each(data, function (index, subcatObjBranch) {
                        $('#BranchId').append('<option value="' + subcatObjBranch.id + '">' + subcatObjBranch.BranchName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.PresentDivision', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PresentDistrict').empty();
            $.ajax({
                type: 'get',
                url: 'getDistrict',
                data: {'id': DivisionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#PresentDistrict').append('<option value="' + subcatObj.id + '">' + subcatObj.DistrictName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
        $(document).on('change', '.PresentDistrict', function () {
            //console.log("yes it is change");

            var op = " ";
            var PresentDistrict = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PresentThana').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': PresentDistrict},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#PresentThana').append('<option value="' + subcatObj1.id + '">' + subcatObj1.ThanaName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.PresentThana', function () {
            //console.log("yes it is change");

            var op = " ";
            var ThanaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PresentUnion').empty();
            $.ajax({
                type: 'get',
                url: 'getUnion',
                data: {'id': ThanaId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#PresentUnion').append('<option value="' + subcatObj2.id + '">' + subcatObj2.UnionName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.PresentUnion', function () {
            //console.log("yes it is change");

            var op = " ";
            var UnionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PresentWord').empty();
            $.ajax({
                type: 'get',
                url: 'getWord',
                data: {'id': UnionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#PresentWord').append('<option value="' + subcatObj2.id + '">' + subcatObj2.WardName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

//        $(document).on('change', '.PresentDistrict', function () {
//            //console.log("yes it is change");
//
//            var op = " ";
//            var DistrictId = $(this).val();
//            //var div = $(this).parent();
//            //console.log(DistrictId);
//            $('#PresentPostOffice').empty();
//            $.ajax({
//                type: 'get',
//                url: 'getPostOffice',
//                data: {'id': DistrictId},
//                success: function (data) {
//                    $.each(data, function (index, subcatObj3) {
//                        $('#PresentPostOffice').append('<option value="'+subcatObj3.id+'">'+subcatObj3.PostofficeName +'</option>')
//                    });
//                },
//                error: function () {
//
//                }
//            });
//            $.ajax(clear);
//        });
        $(document).on('change', '.PermanentDivision', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PermanentDistrict').empty();
            $.ajax({
                type: 'get',
                url: 'getDistrict',
                data: {'id': DivisionId},
                success: function (data) {
                    $.each(data, function (index, subcatObjp) {
                        $('#PermanentDistrict').append('<option value="' + subcatObjp.id + '">' + subcatObjp.DistrictName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
        $(document).on('change', '.PermanentDistrict', function () {
            //console.log("yes it is change");

            var op = " ";
            var PermanentDistrict = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PermanentThana').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': PermanentDistrict},
                success: function (data) {
                    $.each(data, function (index, subcatObj1p) {
                        $('#PermanentThana').append('<option value="' + subcatObj1p.id + '">' + subcatObj1p.ThanaName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.PermanentThana', function () {
            //console.log("yes it is change");

            var op = " ";
            var ThanaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PermanentUnion').empty();
            $.ajax({
                type: 'get',
                url: 'getUnion',
                data: {'id': ThanaId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2p) {
                        $('#PermanentUnion').append('<option value="' + subcatObj2p.id + '">' + subcatObj2p.UnionName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.PermanentUnion', function () {
            //console.log("yes it is change");

            var op = " ";
            var UnionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#PermanentWord').empty();
            $.ajax({
                type: 'get',
                url: 'getWord',
                data: {'id': UnionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj3p) {
                        $('#PermanentWord').append('<option value="' + subcatObj3p.id + '">' + subcatObj3p.WardName + '</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

//        $(document).on('change', '.PermanentDistrict', function () {
//            //console.log("yes it is change");
//
//            var op = " ";
//            var DistrictId = $(this).val();
//            //var div = $(this).parent();
//            //console.log(DistrictId);
//            $('#PermanentPostOffice').empty();
//            $.ajax({
//                type: 'get',
//                url: 'getPostOffice',
//                data: {'id': DistrictId},
//                success: function (data) {
//                    $.each(data, function (index, subcatObj4p) {
//                        $('#PermanentPostOffice').append('<option value="'+subcatObj4p.id+'">'+subcatObj4p.PostofficeName +'</option>')
//                    });
//                },
//                error: function () {
//
//                }
//            });
//            $.ajax(clear);
//        });
        $(document).on('change', '.SpouseProfession1', function () {
            //console.log("yes it is change");

            var SpouseProfession1 = $(this).val();
            console.log(SpouseProfession1);
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (SpouseProfession1 == '7') {
                console.log(SpouseProfession1);
                $('#SpouseProfession').empty();

                $('#SpouseProfession').append('<input type="text" class="form-control"  name="SpouseOtherProfession" value="">')
            }
        });
        $(document).on('change', '.WifeProfession', function () {
            //console.log("yes it is change");

            var WifeProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (WifeProfession == '7') {
                $('#WifeProfession1').empty();

                $('#WifeProfession1').append('<input type="text" class="form-control"  name="WifeOtherProfession" value="">')
            }
        });
        $(document).on('change', '.FatherProfession', function () {
            //console.log("yes it is change");

            var FatherProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (FatherProfession == '7') {
                $('#FatherProfession1').empty();

                $('#FatherProfession1').append('<input type="text" class="form-control"  name="FatherOtherProfession" value="">')
            }
        });
        $(document).on('change', '.MotherProfession', function () {
            //console.log("yes it is change");

            var MotherProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (MotherProfession == '7') {
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
            if (PreviousProfession == '7') {
                $('#PreviousProfession1').empty();

                $('#PreviousProfession1').append('<input type="text" class="form-control"  name="PreviousOtherProfession" value="">')
            }
        });
        $(document).on('change', '.Education', function () {
            //console.log("yes it is change");

            var Education = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if (Education == '9') {
                $('#Education').empty();

                $('#Education').append('<input type="text" class="form-control"  name="EducationOther" value="">')
            }
        });
    });

    $(document).ready(function () {
        //this calculates values automatically
        TotalLand();
        $("#CultiviableLand, #NonCultivableLand, #Pond, #House").on("keydown keyup", function () {
            TotalLand();
        });
    });

    function TotalLand() {

        var CultiviableLand = document.getElementById('CultiviableLand').value;
        var NonCultivableLand = document.getElementById('NonCultivableLand').value;
        var Pond = document.getElementById('Pond').value;
        var House = document.getElementById('House').value;

        var TotalLand = parseFloat(CultiviableLand) + parseFloat(NonCultivableLand) + parseFloat(Pond) + parseFloat(House);
        if (!isNaN(TotalLand)) {
            document.getElementById('TotalLand').value = TotalLand;
        }
    }
    $(document).ready(function () {
        //this calculates values automatically
        TotalIncome();
        $("#AgriculturalEarning, #NonAgriculturalEarning").on("keydown keyup", function () {
            TotalIncome();
        });
    });

    function TotalIncome() {

        var AgriculturalEarning = document.getElementById('AgriculturalEarning').value;
        var NonAgriculturalEarning = document.getElementById('NonAgriculturalEarning').value;

        var TotalEarning = parseFloat(AgriculturalEarning) + parseFloat(NonAgriculturalEarning);
        if (!isNaN(TotalEarning)) {
            document.getElementById('TotalEarning').value = TotalEarning;
        }
    }
    $(document).ready(function () {
        //this calculates values automatically
        NetBalance();
        $("#TotalExpenditure").on("keydown keyup", function () {
            NetBalance();
        });
    });

    function NetBalance() {

        var TotalEarning = document.getElementById('TotalEarning').value;
        var TotalExpenditure = document.getElementById('TotalExpenditure').value;

        var NetBalance = parseFloat(TotalEarning) - parseFloat(TotalExpenditure);

        if (!isNaN(NetBalance)) {
            document.getElementById('NetBalance').value = NetBalance;
        }
    }
</script>

{{--<script>--}}
{{--$(function() {--}}
{{--$("#datepicker" ).datepicker();--}}
{{--});--}}
{{--</script>--}}