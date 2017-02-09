<div class="col-md-12 ">
    <div id="exTab2" class="">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#1" data-toggle="tab">শাখার তথ্য</a></li>
            <li><a href="#2" data-toggle="tab">ব্যক্তিগত তথ্য</a></li>
            <li><a href="#5" data-toggle="tab">পেশা সংক্রান্ত</a></li>
            <li><a href="#3" data-toggle="tab">পারিবারিক তথ্য</a></li>
            <li><a href="#4" data-toggle="tab">বিনিয়োগ সংক্রান্ত</a></li>
        </ul>
        <div class="tab-content ">
            <div class="tab-pane active" id="1">
                <div class="borderportion">
                    <div class="form-group col-md-4" id="form-ZoneId-error">
                        {!! Form::label("ZoneId","জোন",["class"=>"control-label col-md-12"]) !!}
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
                    <div class="form-group col-md-4" id="form-AreaId-error">
                        {!! Form::label("AreaId","এলাকা",["class"=>"control-label col-md-12"]) !!}
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
                    <div class="form-group col-md-4" id="form-BranchId-error">
                        {!! Form::label("BranchId","শাখা",["class"=>"control-label col-md-12"]) !!}
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

                </div>
            </div>

            <div class="tab-pane" id="2">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u> নাম</u></h5>
                    </div>
                    <div class="form-group col-md-3" id="form-NameTitle-error">
                        {!! Form::label("NameTitle","টাইটেল:",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("NameTitle",$NameTitle,null,["class"=>"form-control NameTitle required","id"=>"NameTitle"]) !!}
                            <span id="NameTitle-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-FirstName-error">
                        {!! Form::label("FirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FirstName",null,["class"=>"form-control required"]) !!}
                            <span id="FirstName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-LastName-error">
                        {!! Form::label("LastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("LastName",null,["class"=>"form-control required"]) !!}
                            <span id="LastName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-FamilyName-error">
                        {!! Form::label("FamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FamilyName",null,["class"=>"form-control required"]) !!}
                            <span id="FamilyName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-12" id="form-FullNameBangla-error">
                        {!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("FullNameBangla",null,["class"=>"form-control required"]) !!}
                            <span id="FullNameBangla-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Gender-error">
                        {!! Form::label("Gender","লিঙ্গ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("Gender",$Gender,null,["class"=>"form-control Gender required","id"=>"Gender"]) !!}
                            <span id="Gender-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Age-error">
                        {!! Form::label("Age","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("Age",$Age,null,["class"=>"form-control Age required","id"=>"Age"]) !!}
                            <span id="Age-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Education-error">
                        {!! Form::label("Education","সর্বোচ্চ শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("Education",$Education,null,["class"=>"form-control Education required","id"=>"Education"]) !!}
                            <span id="Education-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-PassingYear-error">
                        {!! Form::label("PassingYear","পাশের বছর",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("PassingYear",$PassingYear,null,["class"=>"form-control PassingYear required","id"=>"PassingYear"]) !!}
                            <span id="PassingYear-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SpouseProfession-error">
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
                    {{--<div class="form-group col-md-6" id="form-SpouseOtherProfession-error">--}}
                        {{--{!! Form::label("SpouseOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                        {{--<div class="col-md-12">--}}
                            {{--{!! Form::text("SpouseOtherProfession",null,["class"=>"form-control required"]) !!}--}}
                            {{--<span id="SpouseOtherProfession-error" class="help-block"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group col-md-6" id="form-SpouseMobileNo-error">
                        {!! Form::label("SpouseMobileNo","অভিভাবকের মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("SpouseMobileNo",null,["class"=>"form-control required"]) !!}
                            <span id="SpouseMobileNo-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MaritalStatus-error">
                        {!! Form::label("MaritalStatus","বৈবাহিক অবস্থা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--{!! Form::select("MaritalStatus",['1' => 'Married Single','2' => 'Married Multiple', '3' => 'Non-Married','4' => 'Widower','5'=>'Widow'])!!}--}}
                            {!! Form::select("MaritalStatus",$MaritalStatus,null,["class"=>"form-control MaritalStatus required","id"=>"MaritalStatus"]) !!}
                            <span id="MaritalStatus-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Nid-error">
                        {!! Form::label("Nid","জাতীয় পরিচয় পত্রের নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("Nid",null,["class"=>"form-control required"]) !!}
                            <span id="Nid-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Mobile-error">
                        {!! Form::label("Mobile","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("Mobile",null,["class"=>"form-control required"]) !!}
                            <span id="Mobile-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Email-error">
                        {!! Form::label("Email","ইমেইল",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("Email",null,["class"=>"form-control required"]) !!}
                            <span id="Email-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-PoliticalStatus-error">
                        {!! Form::label("PoliticalStatus","রাজনীতির সাথে জড়িত কি না?",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("PoliticalStatus",$PoliticalStatus,null,["class"=>"form-control PoliticalStatus required","id"=>"PoliticalStatus"]) !!}
                            <span id="PoliticalStatus-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-Distance-error">
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
                    <div class="form-group col-md-3" id="form-WifeNameTitle-error">
                        {!! Form::label("WifeNameTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("WifeNameTitle",$NameTitle,null,["class"=>"form-control WifeNameTitle required","id"=>"WifeNameTitle"]) !!}
                            <span id="WifeNameTitle-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-WifeFirstName-error">
                        {!! Form::label("WifeFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("WifeFirstName",null,["class"=>"form-control required"]) !!}
                            <span id="WifeFirstName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-WifeLastName-error">
                        {!! Form::label("WifeLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("WifeLastName",null,["class"=>"form-control required"]) !!}
                            <span id="WifeLastName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-WifeFamilyName-error">
                        {!! Form::label("WifeFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("WifeFamilyName",null,["class"=>"form-control required"]) !!}
                            <span id="WifeFamilyName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-WifeAge-error">
                        {!! Form::label("WifeAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("WifeAge",$Age,null,["class"=>"form-control WifeAge required","id"=>"WifeAge"]) !!}
                            <span id="WifeAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-WifeMobileNo-error">
                        {!! Form::label("WifeMobileNo","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("WifeMobileNo",null,["class"=>"form-control required"]) !!}
                            <span id="WifeMobileNo-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-WifeProfession-error">
                        {!! Form::label("WifeProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 WifeProfession1" id="WifeProfession1">
                            <select name="WifeProfession" id="WifeProfession" class="WifeProfession">
                                @foreach($profession as $profession_data )
                                    <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                    {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                @endforeach
                            </select>
                            {{--{!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                            <span id="WifeProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-6" id="form-WifeOtherProfession-error">--}}
                        {{--{!! Form::label("WifeOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                        {{--<div class="col-md-12">--}}
                            {{--{!! Form::text("WifeOtherProfession",null,["class"=>"form-control required"]) !!}--}}
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
                            {!! Form::select("FatherOrHasbandNAmeTitle",$NameTitle,null,["class"=>"form-control FatherOrHasbandNAmeTitle required","id"=>"FatherOrHasbandNAmeTitle"]) !!}
                            <span id="FatherOrHasbandNAmeTitle-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-FatherOrHasbandFirstName-error">
                        {!! Form::label("FatherOrHasbandFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FatherOrHasbandFirstName",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOrHasbandFirstName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-3" id="form-FatherOrHasbandLastName-error">
                        {!! Form::label("FatherOrHasbandLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FatherOrHasbandLastName",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOrHasbandLastName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-FatherOrHasbandFamilyName-error">
                        {!! Form::label("FatherOrHasbandFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FatherOrHasbandFamilyName",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOrHasbandFamilyName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FatherOrHasbandAge-error">
                        {!! Form::label("FatherOrHasbandAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FatherOrHasbandAge",$Age,null,["class"=>"form-control FatherOrHasbandAge required","id"=>"FatherOrHasbandAge"]) !!}
                            <span id="FatherOrHasbandAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FatherProfession-error">
                        {!! Form::label("FatherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 FatherProfession1" id="FatherProfession1">
                            <select name="FatherProfession" id="FatherProfession" class="FatherProfession">
                                @foreach($profession as $profession_data )
                                    <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                    {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                @endforeach
                            </select>
                            {{--{!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                            <span id="FatherProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-6" id="form-FatherOtherProfession-error">--}}
                        {{--{!! Form::label("FatherOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                        {{--<div class="col-md-12">--}}
                            {{--{!! Form::text("FatherOtherProfession",null,["class"=>"form-control required"]) !!}--}}
                            {{--<span id="FatherOtherProfession-error" class="help-block"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group col-md-6" id="form-FatherMobileNo-error">
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
                    <div class="form-group col-md-3" id="form-MatherNameTitle-error">
                        {!! Form::label("MatherNameTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("MatherNameTitle",$NameTitle,null,["class"=>"form-control MatherNameTitle required","id"=>"MatherNameTitle"]) !!}
                            <span id="MatherNameTitle-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-3" id="form-MotherFirstName-error">
                        {!! Form::label("MotherFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("MotherFirstName",null,["class"=>"form-control required"]) !!}
                            <span id="MotherFirstName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-3" id="form-MotherLastName-error">
                        {!! Form::label("MotherLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("MotherLastName",null,["class"=>"form-control required"]) !!}
                            <span id="MotherLastName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="form-MotherFamilyName-error">
                        {!! Form::label("MotherFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("MotherFamilyName",null,["class"=>"form-control required"]) !!}
                            <span id="MotherFamilyName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MotherAge-error">
                        {!! Form::label("MotherAge","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("MotherAge",$Age,null,["class"=>"form-control MotherAge required","id"=>"MotherAge"]) !!}
                            <span id="MotherAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MotherProfession-error">
                        {!! Form::label("MotherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 MotherProfession1" id="MotherProfession1">
                            <select name="MotherProfession" id="MotherProfession" class="MotherProfession">
                                @foreach($profession as $profession_data )
                                    <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                    {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                @endforeach
                            </select>
                            {{--{!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                            <span id="MotherProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-6" id="form-MotherOtherProfession-error">--}}
                        {{--{!! Form::label("MotherOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}--}}
                        {{--<div class="col-md-12">--}}
                            {{--{!! Form::text("MotherOtherProfession",null,["class"=>"form-control required"]) !!}--}}
                            {{--<span id="MotherOtherProfession-error" class="help-block"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group col-md-6" id="form-MotherMobileNo-error">
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
                    <div class="form-group col-md-6" id="form-PresentCountry-error">
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

                    <div class="form-group col-md-6" id="form-PresentDivision-error">
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

                    <div class="form-group col-md-6" id="form-PresentDistrict-error">
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

                    <div class="form-group col-md-6" id="form-PresentThana-error">
                        {!! Form::label("PresentThana","থানা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("PresentThana",$Thana,null,["class"=>"form-control PresentThana required","id"=>"PresentThana"]) !!}

                            <span id="PresentThana-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PresentUnion-error">
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

                    <div class="form-group col-md-6" id="form-PresentPostOffice-error">
                        {!! Form::label("PresentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PresentPostOffice">--}}
                                {{--@foreach($postoffice as $postoffice_data )--}}
                                    {{--<option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PresentPostOffice",$PostOffice,null,["class"=>"form-control PresentPostOffice required","id"=>"PresentPostOffice"]) !!}
                            <span id="PresentPostOffice-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PresentWord-error">
                        {!! Form::label("PresentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PresentWord">--}}
                                {{--@foreach($word as $word_data )--}}
                                    {{--<option value="{{$word_data->id}}">{{$word_data->WordName}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PresentWord",$Word,null,["class"=>"form-control PresentWord required","id"=>"PresentWord"]) !!}
                            <span id="PresentWord-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PresentVillage-error">
                        {!! Form::label("PresentVillage","গ্রাম বা মহল্লা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PresentVillage",null,["class"=>"form-control required"]) !!}
                            <span id="PresentVillage-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PresentRoadNo-error">
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
                    <div class="form-group col-md-6" id="form-PermanentCountry-error">
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

                    <div class="form-group col-md-6" id="form-PermanentDistrict-error">
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

                    <div class="form-group col-md-6" id="form-PermanentThana-error">
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

                    <div class="form-group col-md-6" id="form-PermanentUnion-error">
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

                    <div class="form-group col-md-6" id="form-PermanentPostOffice-error">
                        {!! Form::label("PermanentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PermanentPostOffice">--}}
                                {{--@foreach($postoffice as $postoffice_data )--}}
                                    {{--<option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PermanentPostOffice",$PostOffice,null,["class"=>"form-control PermanentPostOffice required","id"=>"PermanentPostOffice"]) !!}
                            <span id="PermanentPostOffice-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PermanentWord-error">
                        {!! Form::label("PermanentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--<select name="PermanentWord">--}}
                                {{--@foreach($word as $word_data )--}}
                                    {{--<option value="{{$word_data->id}}">{{$word_data->WordName}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                            {!! Form::select("PermanentWord",$Word,null,["class"=>"form-control PermanentWord required","id"=>"PermanentWord"]) !!}
                            <span id="PermanentWord-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PermanentVillage-error">
                        {!! Form::label("PermanentVillage","গ্রাম বা মহল্লা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PermanentVillage",null,["class"=>"form-control required"]) !!}
                            <span id="PermanentVillage-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PermanentRoadNo-error">
                        {!! Form::label("PermanentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("PermanentRoadNo",null,["class"=>"form-control required"]) !!}
                            <span id="PermanentRoadNo-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="5">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>পেশা সংক্রান্ত</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-CurrentProfession-error">
                        {!! Form::label("CurrentProfession","বর্তমান পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 CurrentProfession1" id="CurrentProfession1">
                            <select name="CurrentProfession" id="CurrentProfession" class="CurrentProfession">
                                @foreach($profession as $profession_data )
                                    <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                    {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                @endforeach
                            </select>
                            {{--{!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                            <span id="CurrentProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PreviousProfession-error">
                        {!! Form::label("PreviousProfession","বর্তমান পেশার পূর্বে তিনি কি করতেন",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12 PreviousProfession1" id="PreviousProfession1">
                            <select name="PreviousProfession" id="PreviousProfession" class="PreviousProfession">
                                @foreach($profession as $profession_data )
                                    <option value="{{$profession_data->name}}">{{$profession_data->name}}</option>
                                    {{--<option value="{{$profession_data->id}}">{{$profession_data->name}}</option>--}}
                                @endforeach
                            </select>
                            {{--{!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
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
                            {!! Form::text("EarningAssetsByBusinessOrJob",null,["class"=>"form-control required"]) !!}
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
                        {!! Form::label("BusinessType","ব্যবসার ধর",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("BusinessType",['1' => 'Single', '2' => 'Partnership'])!!}
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
            </div>

            <div class="tab-pane" id="3">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>পরিবারের সদস্য সংক্রান্ত</u></h5>
                    </div>

                    <div class="form-group col-md-6" id="form-FamilyType-error">
                        {!! Form::label("FamilyType","পরিবারের প্রকৃতি",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FamilyType",['1' => 'Single', '2' => 'Combined'])!!}
                            <span id="FamilyType-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-FamilyMember-error">
                        {!! Form::label("FamilyMember","পরিবারের সদস্য সংখ্যা ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FamilyMember",['1', '2', '3','4', '5', '6'])!!}
                            <span id="FamilyMember-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-EarningMale-error">
                        {!! Form::label("EarningMale","উপার্জনক্ষম পুরুষের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("EarningMale",['1', '2', '3','4', '5', '6'])!!}
                            <span id="EarningMale-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-EarningFemale-error">
                        {!! Form::label("EarningFemale","উপার্জনক্ষম মহিলার সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("EarningFemale",['1', '2', '3','4', '5', '6'])!!}
                            <span id="EarningFemale-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-EarningPerson-error">
                        {!! Form::label("EarningPerson","উপার্জনক্ষম সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("EarningPerson",['1', '2', '3','4', '5', '6'])!!}
                            <span id="EarningPerson-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-MaleMember-error">
                        {!! Form::label("MaleMember","পুরুষ সদস্য সংখ্যা ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("MaleMember",['1', '2', '3','4', '5', '6'])!!}
                            <span id="MaleMember-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-FemaleMember-error">
                        {!! Form::label("FemaleMember","মহিলা সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FemaleMember",['1', '2', '3','4', '5', '6'])!!}
                            <span id="FemaleMember-error" class="help-block"></span>
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
                            {!! Form::number("CultiviableLand",null,["class"=>"form-control required"]) !!}
                            <span id="CultiviableLand-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-NonCultivableLand-error">
                        {!! Form::label("NonCultivableLand","অনাবাদি জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("NonCultivableLand",null,["class"=>"form-control required"]) !!}
                            <span id="NonCultivableLand-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-Pond-error">
                        {!! Form::label("Pond","পুকুর (শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("Pond",null,["class"=>"form-control required"]) !!}
                            <span id="Pond-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-House-error">
                        {!! Form::label("House","বসত বাড়ী(শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("House",null,["class"=>"form-control required"]) !!}
                            <span id="House-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-TotalLand-error">
                        {!! Form::label("TotalLand","মোট জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("TotalLand",null,["class"=>"form-control required"]) !!}
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
                    <div class="form-group col-md-6" id="form-AgriculturalEarning-error">
                        {!! Form::label("AgriculturalEarning","কৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("AgriculturalEarning",null,["class"=>"form-control required"]) !!}
                            <span id="AgriculturalEarning-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-NonAgriculturalEarning-error">
                        {!! Form::label("NonAgriculturalEarning","অকৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("NonAgriculturalEarning",null,["class"=>"form-control required"]) !!}
                            <span id="NonAgriculturalEarning-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group col-md-6" id="form-TotalEarning-error">
                        {!! Form::label("TotalEarning","মোট আয় (টাকা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("TotalEarning",null,["class"=>"form-control required"]) !!}
                            <span id="TotalEarning-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-TotalExpenditure-error">
                        {!! Form::label("TotalExpenditure","মোট ব্যয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("TotalExpenditure",null,["class"=>"form-control required"]) !!}
                            <span id="TotalExpenditure-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-NetBalance-error">
                        {!! Form::label("NetBalance","উদ্বৃত্ত/ঘাটতি (টাকা)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("NetBalance",null,["class"=>"form-control required"]) !!}
                            <span id="NetBalance-error" class="help-block"></span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane" id="4">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>বিনিয়োগ সংক্রান্ত</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-ReceivedAmount-error">
                        {!! Form::label("ReceivedAmount","বিনিয়োগ/ঋণ গ্রহণ করলে গৃহীত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("ReceivedAmount",null,["class"=>"form-control required"]) !!}
                            <span id="ReceivedAmount-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PaidAmount-error">
                        {!! Form::label("PaidAmount","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("PaidAmount",null,["class"=>"form-control required"]) !!}
                            <span id="PaidAmount-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-RemainingAmountToPay-error">
                        {!! Form::label("RemainingAmountToPay","অবশিষ্ট টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("RemainingAmountToPay",null,["class"=>"form-control required"]) !!}
                            <span id="RemainingAmountToPay-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-FinancierCompany-error">
                        {!! Form::label("FinancierCompany","লগ্নীকারী প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FinancierCompany",null,["class"=>"form-control required"]) !!}
                            <span id="FinancierCompany-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-LoaningYear-error">
                        {!! Form::label("LoaningYear","কতদিন যাবৎ গ্রহন করছেন (মাস)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("LoaningYear",null,["class"=>"form-control required"]) !!}
                            <span id="LoaningYear-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-LastReceivedDate-error">
                        {!! Form::label("LastReceivedDate","সর্বশেষ কবে গ্রহণ করেছেন",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("LastReceivedDate",null,["class"=>"form-control required"]) !!}
                            <span id="LastReceivedDate-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-RepaymentType-error">
                        {!! Form::label("RepaymentType","পরিশোধের ধরণ ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("RepaymentType",['1'=>'Regular', '2'=>'Irregular'])!!}
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
                            {!! Form::select("IsHeSheWillingToTakeLoan",['1'=>'Yes', '2'=>'No'])!!}
                            <span id="IsHeSheWillingToTakeLoan-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-InvestmentSector-error">
                        {!! Form::label("InvestmentSector","বিনিয়োগের খাত",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("InvestmentSector",null,["class"=>"form-control required"]) !!}
                            <span id="InvestmentSector-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-Amount-error">
                        {!! Form::label("Amount","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("Amount",null,["class"=>"form-control required"]) !!}
                            <span id="Amount-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-Comment1-error">
                        {!! Form::label("Comment1","প্রথম ব্যক্তির মন্তব্য ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("Comment1",null,["class"=>"form-control required"]) !!}
                            <span id="Comment1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-Comment2-error">
                        {!! Form::label("Comment2","দ্বিতীয় ব্যক্তির মন্তব্য ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("Comment2",null,["class"=>"form-control required"]) !!}
                            <span id="Comment2-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-6" id="form-JoinDate-error">
                        {!! Form::label("JoinDate","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("JoinDate",null,["class"=>"form-control required"]) !!}
                            <span id="JoinDate-error" class="help-block"></span>
                        </div>
                    </div>--}}
                    {{--<div class="form-group col-md-6" id="form-JoinDate-error">
                        {!! Form::label("JoinDate","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("JoinDate",null,["class"=>"form-control required"]) !!}
                            <span id="JoinDate-error" class="help-block"></span>
                        </div>
                    </div>--}}
                    <div class="form-group col-md-6" id="form-LastReceivedDate1-error">
                        {!! Form::label("LastReceivedDate1","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("LastReceivedDate1",null,["class"=>"form-control required"]) !!}
                            <span id="LastReceivedDate1-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="javascript:ajaxLoad('survey/list')" class="btn btn-danger"><i
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
                        $('#AreaId').append('<option value="'+subcatObjArea.id+'" >'+subcatObjArea.AreaName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#BranchId').append('<option value="'+subcatObjBranch.id+'">'+subcatObjBranch.BranchName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#PresentDistrict').append('<option value="'+subcatObj.id+'">'+subcatObj.DistrictName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#PresentThana').append('<option value="'+subcatObj1.id+'">'+subcatObj1.ThanaName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#PresentUnion').append('<option value="'+subcatObj2.id+'">'+subcatObj2.UnionName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#PresentWord').append('<option value="'+subcatObj2.id+'">'+subcatObj2.WardName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.PresentDistrict', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            $('#PresentPostOffice').empty();
            $.ajax({
                type: 'get',
                url: 'getPostOffice',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj3) {
                        $('#PresentPostOffice').append('<option value="'+subcatObj3.id+'">'+subcatObj3.PostofficeName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });
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
                        $('#PermanentDistrict').append('<option value="'+subcatObjp.id+'">'+subcatObjp.DistrictName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#PermanentThana').append('<option value="'+subcatObj1p.id+'">'+subcatObj1p.ThanaName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#PermanentUnion').append('<option value="'+subcatObj2p.id+'">'+subcatObj2p.UnionName +'</option>')
                    });
                },
                error: function () {

                }
            });
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
                        $('#PermanentWord').append('<option value="'+subcatObj3p.id+'">'+subcatObj3p.WardName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.PermanentDistrict', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            $('#PermanentPostOffice').empty();
            $.ajax({
                type: 'get',
                url: 'getPostOffice',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj4p) {
                        $('#PermanentPostOffice').append('<option value="'+subcatObj4p.id+'">'+subcatObj4p.PostofficeName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });
        $(document).on('change', '.SpouseProfession1', function () {
            //console.log("yes it is change");

            var SpouseProfession1 = $(this).val();
            console.log(SpouseProfession1);
            //var div = $(this).parent();
            //console.log(DistrictId);
            if(SpouseProfession1=='7') {
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
            if(WifeProfession=='Others') {
                $('#WifeProfession1').empty();

                $('#WifeProfession1').append('<input type="text" class="form-control"  name="WifeOtherProfession" value="">')
            }
        });
        $(document).on('change', '.FatherProfession', function () {
            //console.log("yes it is change");

            var FatherProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if(FatherProfession=='7') {
                $('#FatherProfession1').empty();

                $('#FatherProfession1').append('<input type="text" class="form-control"  name="FatherOtherProfession" value="">')
            }
        });
        $(document).on('change', '.MotherProfession', function () {
            //console.log("yes it is change");

            var MotherProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if(MotherProfession=='7') {
                $('#MotherProfession1').empty();

                $('#MotherProfession1').append('<input type="text" class="form-control"  name="MotherOtherProfession" value="">')
            }
        });
        $(document).on('change', '.CurrentProfession', function () {
            //console.log("yes it is change");

            var CurrentProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if(CurrentProfession=='7') {
                $('#CurrentProfession1').empty();

                $('#CurrentProfession1').append('<input type="text" class="form-control"  name="CurrentOtherProfession" value="">')
            }
        });

        $(document).on('change', '.PreviousProfession', function () {
            //console.log("yes it is change");

            var PreviousProfession = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            if(PreviousProfession=='7') {
                $('#PreviousProfession1').empty();

                $('#PreviousProfession1').append('<input type="text" class="form-control"  name="PreviousOtherProfession" value="">')
            }
        });
    });
</script>