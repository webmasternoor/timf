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
                            {!! Form::select("ZoneId",$Zone_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
                            <span id="ZoneId-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-AreaId-error">
                        {!! Form::label("AreaId","এলাকা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                        <!-- {{--<select name="AreaId">--}}
                        {{--@foreach($area as $area_data )--}}
                        {{--<option value="{{$area_data->id}}">{{$area_data->AreaName}}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}} -->
                            {!! Form::select("AreaId",$Area_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
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
                            {!! Form::select("BranchId",$Branch_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
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
                            {!! Form::select("NameTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
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
                    <div class="form-group col-md-6" id="form-FullNameBangla-error">
                        {!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FullNameBangla",null,["class"=>"form-control required"]) !!}
                            <span id="FullNameBangla-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Gender-error">
                        {!! Form::label("Gender","লিঙ্গ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("Gender",['1' => 'Male', '2' => 'Female', '3' => 'Others'])!!}
                            <span id="Gender-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Age-error">
                        {!! Form::label("Age","বয়স",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("Age",null,["class"=>"form-control required"]) !!}
                            <span id="Age-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Education-error">
                        {!! Form::label("Education","সর্বোচ্চ শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            <select name="Education">
                                @foreach($education as $education_data )
                                    <option value="{{$education_data->id}}">{{$education_data->name}}</option>
                                @endforeach
                            </select>
                            <span id="Education-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-PassingYear-error">
                        {!! Form::label("PassingYear","পাশের বছর",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("PassingYear",['2007', '2008','2009','2010','2011','2012','2013'])!!}
                            <span id="PassingYear-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SpouseProfession-error">
                        {!! Form::label("SpouseProfession","অভিভাবকের পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}
                            <span id="SpouseProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SpouseOtherProfession-error">
                        {!! Form::label("SpouseOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("SpouseOtherProfession",null,["class"=>"form-control required"]) !!}
                            <span id="SpouseOtherProfession-error" class="help-block"></span>
                        </div>
                    </div>
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
                            {!! Form::select("MaritalStatus",['1' => 'Married Single','2' => 'Married Multiple', '3' => 'Non-Married','4' => 'Widower','5'=>'Widow'])!!}
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
                            {!! Form::select("PoliticalStatus",['1' => 'Yes', '2' => 'No'])!!}
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
                            {!! Form::select("WifeNameTitle",['2' => 'Mrs', '3' => 'Mss'])!!}
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
                            {!! Form::select("WifeAge",['18', '19','20','21','22','30','30'])!!}
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
                        <div class="col-md-12">
                            {!! Form::select("WifeProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}
                            <span id="WifeProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-WifeOtherProfession-error">
                        {!! Form::label("WifeOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("WifeOtherProfession",null,["class"=>"form-control required"]) !!}
                            <span id="WifeOtherProfession-error" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>
                    </div>
                    <div class="form-group col-md-3" id="form-FatherOrHasbandNAmeTitle-error">
                        {!! Form::label("FatherOrHasbandNAmeTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FatherOrHasbandNAmeTitle",['1' => 'Mr'])!!}
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
                            {!! Form::select("FatherOrHasbandAge",['18', '19','20','21','22','30','30'])!!}
                            <span id="FatherOrHasbandAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FatherProfession-error">
                        {!! Form::label("FatherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FatherProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}
                            <span id="FatherProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FatherOtherProfession-error">
                        {!! Form::label("FatherOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("FatherOtherProfession",null,["class"=>"form-control required"]) !!}
                            <span id="FatherOtherProfession-error" class="help-block"></span>
                        </div>
                    </div>
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
                            {!! Form::select("MatherNameTitle",['2' => 'Mrs', '3' => 'Mss'])!!}
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
                            {!! Form::select("MotherAge",['18', '19','20','21','22','30','30'])!!}
                            <span id="MotherAge-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MotherProfession-error">
                        {!! Form::label("MotherProfession","পেশা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("MotherProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}
                            <span id="MotherProfession-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MotherOtherProfession-error">
                        {!! Form::label("MotherOtherProfession","অন্য পেশা(যদি থাকে)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("MotherOtherProfession",null,["class"=>"form-control required"]) !!}
                            <span id="MotherOtherProfession-error" class="help-block"></span>
                        </div>
                    </div>
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

                            <select name="PresentCountry">
                                @foreach($country as $country_data )
                                    <option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>
                                @endforeach
                            </select>
                            <span id="PresentCountry-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PresentDistrict-error">
                        {!! Form::label("PresentDistrict","জেলা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            <select name="PresentDistrict">
                                @foreach($district as $district_data )
                                    <option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>
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
                                    <option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>
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
                                    <option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>
                                @endforeach
                            </select>
                            <span id="PresentUnion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PresentPostOffice-error">
                        {!! Form::label("PresentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            <select name="PresentPostOffice">
                                @foreach($postoffice as $postoffice_data )
                                    <option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>
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
                                    <option value="{{$word_data->id}}">{{$word_data->WordName}}</option>
                                @endforeach
                            </select>
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
                            <select name="PermanentCountry">
                                @foreach($country as $country_data )
                                    <option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>
                                @endforeach
                            </select>
                            <span id="PermanentCountry-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PermanentDistrict-error">
                        {!! Form::label("PermanentDistrict","জেলা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            <select name="PermanentDistrict">
                                @foreach($district as $district_data )
                                    <option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>
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
                                    <option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>
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
                                    <option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>
                                @endforeach
                            </select>
                            <span id="PermanentUnion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PermanentPostOffice-error">
                        {!! Form::label("PermanentPostOffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            <select name="PermanentPostOffice">
                                @foreach($postoffice as $postoffice_data )
                                    <option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>
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
                                    <option value="{{$word_data->id}}">{{$word_data->WordName}}</option>
                                @endforeach
                            </select>
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
                        <div class="col-md-12">
                            {!! Form::select("CurrentProfession",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}
                            <span id="CurrentProfession-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-PreviousProfessiion-error">
                        {!! Form::label("PreviousProfessiion","বর্তমান পেশার পূর্বে তিনি কি করতেন",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("PreviousProfessiion",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}
                            <span id="PreviousProfessiion-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-DorationOfPreviousProfession-error">
                        {!! Form::label("DorationOfPreviousProfession","চাকুরি/ব্যবসা কতদিন ধরে করছেন তার বিবরণ(বছর)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("DorationOfPreviousProfession",null,["class"=>"form-control required"]) !!}
                            <span id="DorationOfPreviousProfession-error" class="help-block"></span>
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

                    <div class="form-group col-md-6" id="form-BusinessFrturePlan-error">
                        {!! Form::label("BusinessFrturePlan","ব্যবসার ভবিষ্যৎ পরিকল্পনা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("BusinessFrturePlan",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessFrturePlan-error" class="help-block"></span>
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

                    <div class="form-group col-md-6" id="form-FamilyMebmer-error">
                        {!! Form::label("FamilyMebmer","পরিবারের সদস্য সংখ্যা ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FamilyMebmer",['1', '2', '3','4', '5', '6'])!!}
                            <span id="FamilyMebmer-error" class="help-block"></span>
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

                    <div class="form-group col-md-6" id="form-FemaleMenber-error">
                        {!! Form::label("FemaleMenber","মহিলা সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("FemaleMenber",['1', '2', '3','4', '5', '6'])!!}
                            <span id="FemaleMenber-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-SickDescripotionOfFamilyMember-error">
                        {!! Form::label("SickDescripotionOfFamilyMember","পরিবারে কেহ গুরুত্বর অসুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("SickDescripotionOfFamilyMember",null,["class"=>"form-control required"]) !!}
                            <span id="SickDescripotionOfFamilyMember-error" class="help-block"></span>
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
</script>