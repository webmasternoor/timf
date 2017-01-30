<div class="col-md-12  ">

    <div id="exTab2" class="">

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#1" data-toggle="tab">ব্যক্তিগত ও ব্যবসায়ীক তথ্য</a>
            </li>

            <li>
                <a href="#2" data-toggle="tab">চাকুরী সংক্রান্ত</a>
            </li>

            <li>
                <a href="#3" data-toggle="tab">বিনিয়োগের তথ্য</a>
            </li>

            <li>
                <a href="#4" data-toggle="tab">অর্থ প্রবাহ বিবরণী</a>
            </li>

            <li>
                <a href="#5" data-toggle="tab">অন্যান্য</a>
            </li>

            <li>
                <a href="#6" data-toggle="tab">শেষ</a>
            </li>
        </ul>

        <div class="tab-content ">

            <div class="tab-pane active" id="1">
                Same as Survey
                <div class="col-md-12">
                
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>শাখার তথ্য</h5>
                        </div>
                        <div class="form-group col-md-6" id="form-ZoneId-error">
                            {!! Form::label("ZoneId","জোন",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                <select name="ZoneId" disabled="disabled">
                                    @foreach($zone as $zone_data )
                                        <option value="{{$zone_data->id}}">{{$zone_data->ZoneName}}</option>
                                    @endforeach
                                </select>
                                <span id="ZoneId-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-AreaId-error">
                            {!! Form::label("AreaId","এলাকা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                <select name="AreaId" disabled="disabled">
                                    @foreach($area as $area_data )
                                        <option value="{{$area_data->id}}">{{$area_data->AreaName}}</option>
                                    @endforeach
                                </select>
                                <span id="AreaId-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BranchId-error">
                            {!! Form::label("BranchId","শাখা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                <select name="BranchId">
                                    @foreach($branch as $branch_data )
                                        <option value="{{$branch_data->id}}">{{$branch_data->BranchName}}</option>
                                    @endforeach
                                </select>
                                <span id="BranchId-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-GroupId-error">
                            {!! Form::label("GroupId","গ্রুপ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("GroupId",['1' => 'Shefali', '2' => 'Cameli', '3' => 'Beli'])!!}
                                <span id="GroupId-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u> নাম</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-NameTitle-error">
                            {!! Form::label("NameTitle","টাইটেল:",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("NameTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
                                <span id="NameTitle-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FirstName-error">
                            {!! Form::label("FirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("FirstName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="FirstName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-LastName-error">
                            {!! Form::label("LastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("LastName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="LastName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FamilyName-error">
                            {!! Form::label("FamilyName","পারিবারিক নাম:",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("FamilyName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="FamilyName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FullNameBangla-error">
                            {!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("FullNameBangla",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
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
                                {!! Form::number("Age",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Nid-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Education-error">
                            {!! Form::label("Education","সর্বোচ্চ শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("Education",['1' => 'PSC', '2' => 'JSC', '3' => 'SSC', '4' => 'HSC','5' => 'BA', '6' => 'MA', '7' => 'HONOURS', '8' => 'MASTERS', '9' => 'PHD'])!!}
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
                
                        <div class="form-group col-md-6" id="form-MaritalStatus-error">
                            {!! Form::label("MaritalStatus","বৈবাহিক অবস্থাঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("MaritalStatus",['1' => 'Married Single','2' => 'Married Multiple', '3' => 'Non-Married','4' => 'Widower','5'=>'Widow'])!!}
                                <span id="MaritalStatus-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-PoliticalStatus-error">
                            {!! Form::label("PoliticalStatus","রাজনীতির সাথে জরিত কি না?",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("PoliticalStatus",['1' => 'Yes', '2' => 'No'])!!}
                                <span id="PoliticalStatus-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Nid-error">
                            {!! Form::label("Nid","জাতীয় পরিচয় পত্রের নংঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("Nid",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Nid-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-FatherOrHasbandNAmeTitle-error">
                            {!! Form::label("FatherOrHasbandNAmeTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("FatherOrHasbandNAmeTitle",['1' => 'Mr'])!!}
                                <span id="FatherOrHasbandNAmeTitle-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-FatherOrHasbandFirstName-error">
                            {!! Form::label("FatherOrHasbandFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("FatherOrHasbandFirstName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="FatherOrHasbandFirstName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FatherOrHasbandLastName-error">
                            {!! Form::label("FatherOrHasbandLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("FatherOrHasbandLastName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="FatherOrHasbandLastName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FatherOrHasbandAge-error">
                            {!! Form::label("FatherOrHasbandAge","বয়সঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("FatherOrHasbandAge",['18', '19','20','21','22','30','30'])!!}
                                <span id="FatherOrHasbandAge-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>মায়ের নাম</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-MatherNameTitle-error">
                            {!! Form::label("MatherNameTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("MatherNameTitle",['2' => 'Mrs', '3' => 'Mss'])!!}
                                <span id="MatherNameTitle-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MotherFirstName-error">
                            {!! Form::label("MotherFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("MotherFirstName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MotherFirstName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MotherLastName-error">
                            {!! Form::label("MotherLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("MotherLastName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MotherLastName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MotherAge-error">
                            {!! Form::label("MotherAge","বয়সঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("MotherAge",['18', '19','20','21','22','30','30'])!!}
                                <span id="MotherAge-error" class="help-block"></span>
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
                            {!! Form::label("PresentDistrict","জেলাঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PresentThana","থানাঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PresentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PresentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PresentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("PresentVillage",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="PresentVillage-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-PresentRoadNo-error">
                            {!! Form::label("PresentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("PresentRoadNo",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
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
                            {!! Form::label("PermanentDistrict","জেলাঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PermanentThana","থানাঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PermanentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PermanentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("PermanentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("PermanentVillage",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="PermanentVillage-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-PermanentRoadNo-error">
                            {!! Form::label("PermanentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("PermanentRoadNo",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="PermanentRoadNo-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>যোগাযোগ</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-Mobile-error">
                            {!! Form::label("Mobile","মোবাইল নংঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("Mobile",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Mobile-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-Email-error">
                            {!! Form::label("Email","ইমেইলঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::email("Email",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Email-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-SpouseMobileNo-error">
                            {!! Form::label("SpouseMobileNo","অভিভাবকের মোবাইল নংঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("SpouseMobileNo",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="SpouseMobileNo-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Distance-error">
                            {!! Form::label("Distance","শাখা অফিসের দুরুত্ব (কিঃ মিঃ)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {{--{!! Form::select("Distance", ['1', '2', '3','4', '5', '6'])!!}--}}
                                {!! Form::number("Distance",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Distance-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
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
                            {!! Form::label("DorationOfPreviousProfession","সেই পেশায় কতদিন নিয়োজিত ছিলেন(মাস)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("DorationOfPreviousProfession",['1', '2', '3','4', '5', '6'])!!}
                                <span id="DorationOfPreviousProfession-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-EarningAssetsByBusinessOrJob-error">
                            {!! Form::label("EarningAssetsByBusinessOrJob","ব্যবসা/চাকুরী করে অর্জিত সম্পদের বিবরণঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("EarningAssetsByBusinessOrJob",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="EarningAssetsByBusinessOrJob-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-EarningSourceWithoutBusiness-error">
                            {!! Form::label("EarningSourceWithoutBusiness","ব্যবসা ছাড়া আয়ের উৎস থাকলে তার বিবরণঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("EarningSourceWithoutBusiness",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="EarningSourceWithoutBusiness-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessType-error">
                            {!! Form::label("BusinessType","ব্যবসার ধরনঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("BusinessType",['1' => 'Single', '2' => 'Partnership'])!!}
                                <span id="BusinessType-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessFrturePlan-error">
                            {!! Form::label("BusinessFrturePlan","ব্যবসার ভবিষ্যৎ পরিকল্পনাঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("BusinessFrturePlan",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessFrturePlan-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>পরিবারের সদস্য সংক্রান্ত</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-FamilyMebmer-error">
                            {!! Form::label("FamilyMebmer","পরিবারের সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::label("MaleMember","ছেলে সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("MaleMember",['1', '2', '3','4', '5', '6'])!!}
                                <span id="MaleMember-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FemaleMenber-error">
                            {!! Form::label("FemaleMenber","মেয়ে সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("FemaleMenber",['1', '2', '3','4', '5', '6'])!!}
                                <span id="FemaleMenber-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FamilyType-error">
                            {!! Form::label("FamilyType","পরিবারের প্রকৃতি",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("FamilyType",['1' => 'Single', '2' => 'Combined'])!!}
                                <span id="FamilyType-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-SickDescripotionOfFamilyMember-error">
                            {!! Form::label("SickDescripotionOfFamilyMember","পরিবারে কেহ গুরুত্বর অসুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("SickDescripotionOfFamilyMember",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="SickDescripotionOfFamilyMember-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-CaseDescriptionOfFamilyMember-error">
                            {!! Form::label("CaseDescriptionOfFamilyMember","পরিবারে কেহ কথনও মামলাগ্রুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("CaseDescriptionOfFamilyMember",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="CaseDescriptionOfFamilyMember-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-IfAnyMemberInAbroad-error">
                            {!! Form::label("IfAnyMemberInAbroad","পরিবারে কেহ বিদেশে থাকলে - কোন দেশে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("IfAnyMemberInAbroad",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
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
                                {!! Form::number("CultiviableLand",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="CultiviableLand-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-NonCultivableLand-error">
                            {!! Form::label("NonCultivableLand","অনাবাদি জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("NonCultivableLand",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="NonCultivableLand-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Pond-error">
                            {!! Form::label("Pond","পুকুর (শতক)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("Pond",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Pond-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-House-error">
                            {!! Form::label("House","বসত বাড়ী(শতক)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("House",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="House-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-TotalLand-error">
                            {!! Form::label("TotalLand","মোট জমি (শতক)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("TotalLand",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="TotalLand-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-TinMadeHouse-error">
                            {!! Form::label("TinMadeHouse","টিনের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("TinMadeHouse",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="TinMadeHouse-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-StrawMadeHouse-error">
                            {!! Form::label("StrawMadeHouse","খড়ের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("StrawMadeHouse",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="StrawMadeHouse-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-BrickMadeHouse-error">
                            {!! Form::label("BrickMadeHouse","ইটের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("BrickMadeHouse",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
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
                                {!! Form::number("AgriculturalEarning",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="AgriculturalEarning-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-NonAgriculturalEarning-error">
                            {!! Form::label("NonAgriculturalEarning","অকৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("NonAgriculturalEarning",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="NonAgriculturalEarning-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-TotalEarning-error">
                            {!! Form::label("TotalEarning","মোট আয় (টাকা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("TotalEarning",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="TotalEarning-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-TotalExpenditure-error">
                            {!! Form::label("TotalExpenditure","মোট ব্যয় (টাকা)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("TotalExpenditure",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="TotalExpenditure-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-NetBalance-error">
                            {!! Form::label("NetBalance","উদ্বৃত্ত/ঘাটতি (টাকা)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("NetBalance",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="NetBalance-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <div class="borderportion">
                            <div class="box box-header">
                                <h5>ব্যাংক সংক্রান্ত</h5>
                            </div>
                            <div class="form-group col-md-6" id="form-BankAccountNo-error">
                                {!! Form::label("BankAccountNo","ব্যাংক হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("BankAccountNo",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                    <span id="BankAccountNo-error" class="help-block"></span>
                                </div>
                            </div>
                
                            <div class="form-group col-md-6" id="form-BankName-error">
                                {!! Form::label("BankName","ব্যাংকের নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("BankName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                    <span id="BankName-error" class="help-block"></span>
                                </div>
                            </div>
                
                            <div class="form-group col-md-6" id="form-BankAddress-error">
                                {!! Form::label("BankAddress","ব্যাংকের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::textarea("BankAddress",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                    <span id="BankAddress-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <div class="borderportion">
                            <div class="box box-header">
                                <h5>নমিনির তথ্য</h5>
                            </div>
                            <div class="form-group col-md-6" id="form-NomineeName-error">
                                {!! Form::label("NomineeName","নমিনির নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("NomineeName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                    <span id="NomineeName-error" class="help-block"></span>
                                </div>
                            </div>
                
                            <div class="form-group col-md-6" id="form-NomineeFatherOrHasbandName-error">
                                {!! Form::label("NomineeFatherOrHasbandName","নমিনির পিতা/ স্বামীর নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("NomineeFatherOrHasbandName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                    <span id="NomineeFatherOrHasbandName-error" class="help-block"></span>
                                </div>
                            </div>
                
                            <div class="form-group col-md-6" id="form-NomineeRelation-error">
                                {!! Form::label("NomineeRelation","সম্পর্ক",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("NomineeRelation",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                    <span id="NomineeRelation-error" class="help-block"></span>
                                </div>
                            </div>
                
                            <div class="form-group col-md-6" id="form-NomineeNameShare-error">
                                {!! Form::label("NomineeNameShare","নমিনির অংশ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("NomineeNameShare",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                    <span id="NomineeNameShare-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>বিনিয়োগ সংক্রান্ত</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-ReceivedAmount-error">
                            {!! Form::label("ReceivedAmount","গৃহীত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("ReceivedAmount",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="ReceivedAmount-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-PaidAmount-error">
                            {!! Form::label("PaidAmount","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("PaidAmount",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="PaidAmount-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-RemainingAmountToPay-error">
                            {!! Form::label("RemainingAmountToPay","অবশিষ্ট টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("RemainingAmountToPay",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="RemainingAmountToPay-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-RepaymentType-error">
                            {!! Form::label("RepaymentType","পরিশোধের ধরণঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("RepaymentType",['1'=>'Regular', '2'=>'Irregular'])!!}
                                <span id="RepaymentType-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FinancierCompany-error">
                            {!! Form::label("FinancierCompany","লগ্নীকারী প্রতিষ্ঠানের নামঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("FinancierCompany",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="FinancierCompany-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-LoaningYear-error">
                            {!! Form::label("LoaningYear","কতদিন যাবৎ গ্রহন করছেন (মাস)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("LoaningYear",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="LoaningYear-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-LastReceivedDate-error">
                            {!! Form::label("LastReceivedDate","সর্বশেষ কবে গ্রহণ করেছেন",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("LastReceivedDate",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="LastReceivedDate-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-IsHeSheWillingToTakeLoan-error">
                            {!! Form::label("IsHeSheWillingToTakeLoan","বিনিয়োগ/ঋণ গ্রহন করতে আগ্রহী কি না-",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("IsHeSheWillingToTakeLoan",['1'=>'Yes', '2'=>'No'])!!}
                                <span id="IsHeSheWillingToTakeLoan-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-InvestmentSector-error">
                            {!! Form::label("InvestmentSector","বিনিয়োগের খাতঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("InvestmentSector",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="InvestmentSector-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Amount-error">
                            {!! Form::label("Amount","টাকার পরিমানঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("Amount",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Amount-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Comment1-error">
                            {!! Form::label("Comment1","প্রথম ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("Comment1",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Comment1-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Comment2-error">
                            {!! Form::label("Comment2","দ্বিতীয় ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("Comment2",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="Comment2-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-12">
                            <h5 class="text-aqua"><u>ব্যবসা সংক্রান্ত</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-BusinessName-error">
                            {!! Form::label("BusinessName","ব্যবসার নামঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("BusinessName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessNature-error">
                            {!! Form::label("BusinessNature","ব্যবসার প্রকৃতিঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("BusinessNature",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinesNature-error1" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessExperience-error">
                            {!! Form::label("BusinessExperience","ব্যবসার অভিজ্ঞতাঃ(মাস)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("BusinessExperience",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessExperience-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessCenterAddress-error">
                            {!! Form::label("BusinessCenterAddress","ব্যবসা কেন্দ্রের ঠিকানাঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("BusinessCenterAddress",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessCenterAddress-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessStartDate-error">
                            {!! Form::label("BusinessStartDate","বব্যবসা শুরুর তারিখঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("BusinessStartDate",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessStartDate-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-Accommodation-error">
                            {!! Form::label("Accommodation","অবকাঠামোঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("Accommodation",['1' => 'পাকা', '2' => 'সেমি পাকা'])!!}
                                <span id="Accommodation-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-AccommodationLength-error">
                            {!! Form::label("AccommodationLength","পরিমাপ দৈর্ঘ্য(ফুট)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("AccommodationLength",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="AccommodationLength-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-AccommodationWidth-error">
                            {!! Form::label("AccommodationWidth","পরিমাপ প্রস্থ(ফুট)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("AccommodationWidth",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="AccommodationWidth-error" class="help-block"></span>
                            </div>
                        </div>                 
                        <div class="form-group col-md-6" id="form-Direction-error">
                            {!! Form::label("Direction","দিক",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("Direction",['1' => 'East', '2' => 'Weast','3'=>'North','4'=>'South'])!!}
                                <span id="Direction-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessPlaceStatus-error">
                            {!! Form::label("BusinessPlaceStatus","ব্যবসার স্থান",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("BusinessPlaceStatus",['1' => 'নিজস্ব', '2' => 'পজিশন','3'=>'ভাড়া','4'=>'লীজ'])!!}
                                <span id="BusinessPlaceStatus-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-TradeLicenceNo-error">
                            {!! Form::label("TradeLicenceNo","ট্রেড লাইসেন্স নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("TradeLicenceNo",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="TradeLicenceNo-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-LicenceIssuingAuthority-error">
                            {!! Form::label("LicenceIssuingAuthority","ইস্যুকারী কতৃপক্ষ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("LicenceIssuingAuthority",['1' => 'পৌরসভা', '2' => 'ইউনিয়ন','3'=>'সিটি কর্পোরেশন'])!!}
                                <span id="LicenceIssuingAuthority-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>ব্যবসায় নিয়োজিত মূলধন ও ঋণ</u></h5>
                        </div>
                
                        <div class="form-group col-md-6" id="form-InvestedCapital-error">
                            {!! Form::label("InvestedCapital","ব্যবসায় নিয়োজিত মূলধনঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("InvestedCapital",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="InvestedCapital-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MonthlyAvarageSale-error">
                            {!! Form::label("MonthlyAvarageSale","মাসিক গড় বিক্রয়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("MonthlyAvarageSale",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MonthlyAvarageSale-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BankContribution-error">
                            {!! Form::label("BankContribution","ব্যাংক(%)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("BankContribution",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BankContribution-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-NgoContribution-error">
                            {!! Form::label("NgoContribution","এন জি ও (%)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("NgoContribution",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="NgoContribution-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-SelfContribution-error">
                            {!! Form::label("SelfContribution","নিজ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("SelfContribution",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="SelfContribution-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BorrowMoney-error">
                            {!! Form::label("BorrowMoney","ধার/কর্জ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("BorrowMoney",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BorrowMoney-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>ব্যবসা থেকে মাসিক আয় ও ব্যয়</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-MonthlyEarningFromBusiness-error">
                            {!! Form::label("MonthlyEarningFromBusiness","বব্যবসা থেকে মাসিক আয়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("MonthlyEarningFromBusiness",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MonthlyEarningFromBusiness-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MonthlyExpenditureFromBusiness-error">
                            {!! Form::label("MonthlyExpenditureFromBusiness","বব্যবসা থেকে মাসিক ব্যয়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("MonthlyExpenditureFromBusiness",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MonthlyExpenditureFromBusiness-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-SurplusMoney-error">
                            {!! Form::label("SurplusMoney","উদ্বৃত্ত",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("SurplusMoney",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="SurplusMoney-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-IncomeFromOthersSources-error">
                            {!! Form::label("IncomeFromOthersSources","অন্যান্য উৎস থেকে মাসিক আয়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("IncomeFromOthersSources",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="IncomeFromOthersSources-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-OtherSources-error">
                            {!! Form::label("OtherSources","অন্যান্য উৎস",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("OtherSources",['1' => 'চাকুরী', '2' => 'অন্যত্র বিনিয়োগ','3'=>'জমি','4'=>'দোকান ভাড়া','5'=>'বাড়ী ভাড়া'])!!}
                                <span id="OtherSources-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MonthlyExpenditureFromOtherSources-error">
                            {!! Form::label("MonthlyExpenditureFromOtherSources","অন্যান্য উৎস থেকে মাসিক ব্যয়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("MonthlyExpenditureFromOtherSources",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MonthlyExpenditureFromOtherSources-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MonthlySurplus-error">
                            {!! Form::label("MonthlySurplus","উদ্বৃত্ত",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("MonthlySurplus",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MonthlySurplus-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MonthlyTotalSurplus-error">
                            {!! Form::label("MonthlyTotalSurplus","সর্বমোট উদ্বৃত্ত",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("MonthlyTotalSurplus",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MonthlyTotalSurplus-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                
                    <div class="borderportion">
                        <div class="box-header col-md-11">
                            <h5 class="text-aqua"><u>ব্যবসার ধরণ, নিয়োজিত সময় ও জনবল সংক্রান্ত</u></h5>
                        </div>
                        <div class="form-group col-md-6" id="form-BusinessNature-error">
                            {!! Form::label("BusinessNature","ব্যবসার ধরন",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("BusinessNature",['1' => 'পাইকারী', '2' => 'খুচরা','3'=>'উৎপাদনকারী','4'=>'সরবরাহকারী','5'=>'প্রক্রিয়াজাতকারী','6'=>'কৃষি','7'=>'পরিবহণ'])!!}
                                <span id="BusinessNature-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-OwnershipType-error">
                            {!! Form::label("OwnershipType","মালিকানার ধরন",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("OwnershipType",['1' => 'একক', '2' => 'অংশীদারী'])!!}
                                <span id="OwnershipType-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FirstHalfStart-error">
                            {!! Form::label("FirstHalfStart","১ম অর্ধ শুরু",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("FirstHalfStart",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="FirstHalfStart-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-FirstHalfEnd-error">
                            {!! Form::label("FirstHalfEnd","১ম অর্ধ শেষ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("FirstHalfEnd",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="FirstHalfEnd-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-SecondHalfStart-error">
                            {!! Form::label("SecondHalfStart","২য় অর্ধ শুরু",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("SecondHalfStart",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="SecondHalfStart-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-SecondHalfEnd-error">
                            {!! Form::label("SecondHalfEnd","২য় অর্ধ শেষ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("SecondHalfEnd",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="SecondHalfEnd-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-TotalTime-error">
                            {!! Form::label("TotalTime","মোট সময়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("TotalTime",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="TotalTime-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-OrgOPeningTime-error">
                            {!! Form::label("OrgOPeningTime","প্রতিদিন প্রতিষ্ঠান খোলা হয়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("OrgOPeningTime",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="OrgOPeningTime-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-OrgClosingTime-error">
                            {!! Form::label("OrgClosingTime","প্রতিদিন প্রতিষ্ঠান বন্ধ হয়",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("OrgClosingTime",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="OrgClosingTime-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-ClosingIntervalStart-error">
                            {!! Form::label("ClosingIntervalStart","মাঝে বন্ধ শুরু",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("ClosingIntervalStart",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="ClosingIntervalStart-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-ClosingIntervalClose-error">
                            {!! Form::label("ClosingIntervalClose","মাঝে বন্ধ শেষ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::time("ClosingIntervalClose",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="ClosingIntervalClose-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-WeekEnd-error">
                            {!! Form::label("WeekEnd","সাপ্তাহিক বন্ধ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("WeekEnd",['1' => 'শনিবার', '2' => 'রবিবার','3'=>'সোমবার','4'=>'মঙ্গলবার','5'=>'বুধবার','6'=>'বৃহস্পতিবার','7'=>'শুক্রবার'])!!}
                                <span id="WeekEnd-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-OrgPermanentEmployee-error">
                            {!! Form::label("OrgPermanentEmployee","প্রতিষ্ঠানে স্থায়ী জনবলের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("OrgPermanentEmployee",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="OrgPermanentEmployee-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>ব্যবসায়িক তথ্য</h5>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessName-error">
                            {!! Form::label("BusinessName","ব্যবসার নামঃ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("BusinessName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessType-error">
                            {!! Form::label("BusinessType","ব্যবসার ধরণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("BusinessType",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessType-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessOrgAddress-error">
                            {!! Form::label("BusinessOrgAddress","ব্যবসা প্রতিষ্ঠানের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("BusinessOrgAddress",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessOrgAddress-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessPlaceOwnership-error">
                            {!! Form::label("BusinessPlaceOwnership","ব্যবসার স্থানের মালিকানা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("BusinessPlaceOwnership",['1' => 'নিজস্ব', '2' => 'পজিশন','3'=>'ভাড়া','4'=>'লীজ','5'=>'অন্যান্য'])!!}
                                <span id="BusinessPlaceOwnership-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-TradeLicenceNo-error">
                            {!! Form::label("TradeLicenceNo","ট্রেড লাইসেন্স নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("TradeLicenceNo",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="TradeLicenceNo-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-LicenceIssuingAuthority-error">
                            {!! Form::label("LicenceIssuingAuthority","ইস্যুকারী কতৃপক্ষ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("LicenceIssuingAuthority",['1' => 'পৌরসভা', '2' => 'ইউনিয়ন','3'=>'সিটি কর্পোরেশন'])!!}
                                <span id="LicenceIssuingAuthority-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-LicenceValidityDuration-error">
                            {!! Form::label("LicenceValidityDuration","লাইসেন্সের মেয়াদকাল",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("LicenceValidityDuration",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="LicenceValidityDuration-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-unitprice-error">
                            {!! Form::label("BusinessStartDate","বব্যবসা শুরুর তারিখঃ ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("BusinessStartDate",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessStartDate-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BusinessInitialInvestment-error">
                            {!! Form::label("BusinessInitialInvestment","ব্যবসা খাতে প্রারম্ভিক মূলধনের পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("BusinessInitialInvestment",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BusinessInitialInvestment-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-CurrentCapital-error">
                            {!! Form::label("CurrentCapital","বর্তমান পুঁজি",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("CurrentCapital",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="CurrentCapital-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-BankPortion-error">
                            {!! Form::label("BankPortion","ব্যাংক(%)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("BankPortion",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BankPortion-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-NgoPortion-error">
                            {!! Form::label("NgoPortion","এন জি ও (%)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("NgoPortion",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="NgoPortion-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-SelfPortion-error">
                            {!! Form::label("SelfPortion","নিজ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("SelfPortion",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="SelfPortion-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-BorrowMoney-error">
                            {!! Form::label("BorrowMoney","ধার/কর্জ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("BorrowMoney",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="BorrowMoney-error" class="help-block"></span>
                            </div>
                        </div>
                
                
                        <div class="form-group col-md-6" id="form-OrgPermanentEmployee-error">
                            {!! Form::label("OrgPermanentEmployee","প্রতিষ্ঠানে স্থায়ী জনবলের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("OrgPermanentEmployee",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="OrgPermanentEmployee-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-OrgEmployee-error">
                            {!! Form::label("OrgEmployee","প্রতিষ্ঠানে জনবলের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("OrgEmployee",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="OrgEmployee-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-OrgEmployeeMale-error">
                            {!! Form::label("OrgEmployeeMale","পুরুষ কত জন?",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("OrgEmployeeMale",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="OrgEmployeeMale-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-OrgEmployeeFemale-error">
                            {!! Form::label("OrgEmployeeFemale","মহিলা কত জন?",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("OrgEmployeeFemale",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="OrgEmployeeFemale-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-LicenceIssuingAuthority-error">
                            {!! Form::label("LicenceIssuingAuthority","ব্যবসা পরিচালনাকারী",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("LicenceIssuingAuthority",['1' => 'নিজে', '2' => 'সন্তান','3'=>'আত্মীয়','4'=>'কর্মচারী'])!!}
                                <span id="LicenceIssuingAuthority-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MohajonName-error">
                            {!! Form::label("MohajonName","মহাজজনের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("MohajonName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MohajonName-error" class="help-block"></span>
                            </div>
                        </div>
                
                        <div class="form-group col-md-6" id="form-MohajonAddress-error">
                            {!! Form::label("MohajonAddress","মহাজজনের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("MohajonAddress",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MohajonAddress-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-MohajonPhonOrMobileNo-error">
                            {!! Form::label("MohajonPhonOrMobileNo","ফোন/মোবাইল নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("MohajonPhonOrMobileNo",null,["class"=>"form-control required", 'readonly' => 'true']) !!}
                                <span id="MohajonPhonOrMobileNo-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="2">
                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>চাকুরী সংক্রান্ত</h5>
                        </div>
                        <div class="form-group col-md-6" id="form-JobOrgName-error">
                            {!! Form::label("JobOrgName","প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("JobOrgName",null,["class"=>"form-control required"]) !!}
                                <span id="JobOrgName-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-JobOrgPlace-error">
                            {!! Form::label("JobOrgPlace","অবস্থান",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("JobOrgPlace",null,["class"=>"form-control required"]) !!}
                                <span id="JobOrgPlace-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-JobIdNo-error">
                            {!! Form::label("JobIdNo","আইডি নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("JobIdNo",null,["class"=>"form-control required"]) !!}
                                <span id="JobIdNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ShenaNo-error">
                            {!! Form::label("ShenaNo","সেনা নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("ShenaNo",null,["class"=>"form-control required"]) !!}
                                <span id="ShenaNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-JobDesignation-error">
                            {!! Form::label("JobDesignation","পদবী",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("JobDesignation",null,["class"=>"form-control required"]) !!}
                                <span id="JobDesignation-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-JobUniteName-error">
                            {!! Form::label("JobUniteName","ইউনিটের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("JobUniteName",null,["class"=>"form-control required"]) !!}
                                <span id="JobUniteName-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-DivisionName-error">
                            {!! Form::label("DivisionName","ডিভিশনের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("DivisionName",null,["class"=>"form-control required"]) !!}
                                <span id="DivisionName-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-JobDuration-error">
                            {!! Form::label("JobDuration","চাকুরীর বয়স",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("JobDuration",null,["class"=>"form-control required"]) !!}
                                <span id="JobDuration-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-JobSalary-error">
                            {!! Form::label("JobSalary","বেতন-ভাতা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("JobSalary",null,["class"=>"form-control required"]) !!}
                                <span id="JobSalary-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="3">

                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>অত্র সংস্থা বা অন্য কোন আর্থিক প্রতিষ্ঠানে আবেদনকারীর বিনিয়োগের তথ্য ১ </h5>
                        </div>
                        <div class="form-group col-md-6" id="form-LoanProviderOrgName-error">
                            {!! Form::label("LoanProviderOrgName","বিনিয়োগ দাতা প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("LoanProviderOrgName",['1' => 'Brac', '2' => 'Proshika', '3' => 'Grameen Bank'])!!}
                                <span id="LoanProviderOrgName-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-LoanProviderOrgAddress-error">
                            {!! Form::label("LoanProviderOrgAddress","ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-AmountOfReceivedLoan-error">
                            {!! Form::label("AmountOfReceivedLoan","গৃহীত বিনিয়োগের পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("AmountOfReceivedLoan",null,["class"=>"form-control required"]) !!}
                                <span id="AmountOfReceivedLoan-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ProductName-error">
                            {!! Form::label("ProductName","সামগ্রীর নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("ProductName",null,["class"=>"form-control required"]) !!}
                                <span id="ProductName-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-InvestmentTypeNo-error">
                            {!! Form::label("InvestmentTypeNo","বিনিয়োগের দফা নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("InvestmentTypeNo",['1', '2', '3'])!!}
                                <span id="InvestmentTypeNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-LoanReceiveDuration-error">
                            {!! Form::label("LoanReceiveDuration","মেয়াদ (মাস)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("LoanReceiveDuration",null,["class"=>"form-control required"]) !!}
                                <span id="LoanReceiveDuration-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-LoanReceivedDate-error">
                            {!! Form::label("LoanReceivedDate","বিনিয়োগ গ্রহনের তারিখ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("LoanReceivedDate",null,["class"=>"form-control required"]) !!}
                                <span id="LoanReceivedDate-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-AmountOfLoanRepay-error">
                            {!! Form::label("AmountOfLoanRepay","এ পর্যন্ত পরিশোধিত টাকা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("AmountOfLoanRepay",null,["class"=>"form-control required"]) !!}
                                <span id="AmountOfLoanRepay-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-CorrentStatus-error">
                            {!! Form::label("CorrentStatus","বর্তমান স্থিতি",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("CorrentStatus",null,["class"=>"form-control required"]) !!}
                                <span id="CorrentStatus-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-RemainingInstallment-error">
                            {!! Form::label("RemainingInstallment","অবশিষ্ট কিস্তি সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("RemainingInstallment",null,["class"=>"form-control required"]) !!}
                                <span id="RemainingInstallment-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ApproximateRepaidDate-error">
                            {!! Form::label("ApproximateRepaidDate","সম্ভাব্য পরিশোধের তারিখ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("ApproximateRepaidDate",null,["class"=>"form-control required"]) !!}
                                <span id="ApproximateRepaidDate-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>অত্র সংস্থা বা অন্য কোন আর্থিক প্রতিষ্ঠানে আবেদনকারীর বিনিয়োগের তথ্য ২ </h5>
                        </div>
                        <div class="form-group col-md-6" id="form-LoanProviderOrgName1-error">
                            {!! Form::label("LoanProviderOrgName1","বিনিয়োগ দাতা প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("LoanProviderOrgName1",['1' => 'Brac', '2' => 'Proshika', '3' => 'Grameen Bank'])!!}
                                <span id="LoanProviderOrgName1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-LoanProviderOrgAddress1-error">
                            {!! Form::label("LoanProviderOrgAddress1","ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("LoanProviderOrgAddress1",null,["class"=>"form-control required"]) !!}
                                <span id="LoanProviderOrgAddress1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-AmountOfReceivedLoan1-error">
                            {!! Form::label("AmountOfReceivedLoan1","গৃহীত বিনিয়োগের পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("AmountOfReceivedLoan1",null,["class"=>"form-control required"]) !!}
                                <span id="AmountOfReceivedLoan1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ProductName1-error">
                            {!! Form::label("ProductName1","সামগ্রীর নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("ProductName1",null,["class"=>"form-control required"]) !!}
                                <span id="ProductName1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-InvestmentTypeNo1-error">
                            {!! Form::label("InvestmentTypeNo1","বিনিয়োগের দফা নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("InvestmentTypeNo1",['1', '2', '3'])!!}
                                <span id="InvestmentTypeNo1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-LoanReceiveDuration1-error">
                            {!! Form::label("LoanReceiveDuration1","মেয়াদ (মাস)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("LoanReceiveDuration1",null,["class"=>"form-control required"]) !!}
                                <span id="LoanReceiveDuration1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-LoanReceivedDate1-error">
                            {!! Form::label("LoanReceivedDate1","বিনিয়োগ গ্রহনের তারিখ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("LoanReceivedDate1",null,["class"=>"form-control required"]) !!}
                                <span id="LoanReceivedDate1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-AmountOfLoanRepay1-error">
                            {!! Form::label("AmountOfLoanRepay1","এ পর্যন্ত পরিশোধিত টাকা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("AmountOfLoanRepay1",null,["class"=>"form-control required"]) !!}
                                <span id="AmountOfLoanRepay1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-CorrentStatus1-error">
                            {!! Form::label("CorrentStatus1","বর্তমান স্থিতি",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("CorrentStatus1",null,["class"=>"form-control required"]) !!}
                                <span id="CorrentStatus1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-RemainingInstallment1-error">
                            {!! Form::label("RemainingInstallment1","অবশিষ্ট কিস্তি সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("RemainingInstallment1",null,["class"=>"form-control required"]) !!}
                                <span id="RemainingInstallment1-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ApproximateRepaidDate1-error">
                            {!! Form::label("ApproximateRepaidDate1","সম্ভাব্য পরিশোধের তারিখ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("ApproximateRepaidDate1",null,["class"=>"form-control required"]) !!}
                                <span id="ApproximateRepaidDate1-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="4">

                <div class="form-group col-md-12">
                    <div class="borderportion">
                        <div class="col-md-12">
                            <h5>ক) উদ্যোগ/ব্যবসার অর্থ প্রবাহঃ <h6>(এ ছকে শুধুমাত্র যে ব্যবসার জন্য বিনিয়োগ নিতে আগ্রহী
                                    সেই
                                    ব্যবসার মাসিক গড় ক্যাশ প্রবাহের তথ্য হবে)</h6></h5>
                        </div>
                        <table class="table">
                            <tr>
                                <th colspan="4" style="border-right: 1px solid">
                                    Cash Inflow (অর্থ আগমন)
                                </th>
                                <th style="text-align: right">
                                    Cash Outflow(অর্থ বহিঃগমন)
                                </th>
                            </tr>
                            <tr>
                                <th>ক্রঃ নং</th>
                                <th>সেবা/ পন্য বিক্রয়ের বিবরন</th>
                                <th>টাকার পরিমাণ</th>
                                <th>ক্রঃ নং</th>
                                <th>কাঁচামাল ক্রয় ও খরচের বিবরন</th>
                                <th>টাকার পরিমাণ</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>কমিশনের টাকা আদায়</td>
                                <td></td>
                                <td>1</td>
                                <td>অফিস/ দোকান/ গোডাউন ভাড়া</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>বকেয়া টাকা আদায়</td>
                                <td></td>
                                <td>2</td>
                                <td>কর্মচারীর বেতন</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>অনুদান আদায়</td>
                                <td></td>
                                <td>3</td>
                                <td>বিদ্যুৎ বিল ও অন্যান্য বিল</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>অন্যান্য আয়</td>
                                <td></td>
                                <td>4</td>
                                <td>যাতায়াত, যোগাযোগ, আপ্যায়ন বিল</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>নগদ সেবা/ পন্য বিক্রয়</td>
                                <td></td>
                                <td>5</td>
                                <td>পারিবারিক আয়</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>নগদ সেবা/ পন্য বিক্রয়</td>
                                <td></td>
                                <td>6</td>
                                <td>অনুদান প্রদান</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="border-right: 1px solid">মোট=</td>

                                <td></td>
                                <td>মোট=</td>

                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="col-md-12">
                            <h3>খ)সামগ্রীক অর্থ প্রবাহ ছকঃ<h6>(এ ছকে বিনিয়োগ নিতে আগ্রহী ব্যক্তির সকল ধরনের আয়ের উৎসের
                                    মাসিক
                                    গড় ক্যাশ প্রবাহের তথ্য হবে)</h6></h3>
                        </div>
                        <table class="table">
                            <tr>
                                <th colspan="4" style="border-right: 1px solid">
                                    Cash Inflow (অর্থ আগমন)
                                </th>
                                <th style="text-align: right">
                                    Cash Outflow(অর্থ বহিঃগমন)
                                </th>
                            </tr>
                            <tr>
                                <th>ক্রঃ নং</th>
                                <th>আয়ের বিবরন</th>
                                <th>টাকার পরিমাণ</th>
                                <th>ক্রঃ নং</th>
                                <th>খরচের বিবরন</th>
                                <th>টাকার পরিমাণ</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>চাকরিজীবী হলে বেতন</td>
                                <td></td>
                                <td>1</td>
                                <td>পারিপারিক ব্যয়</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>কৃষি/সংসার থেকে প্রাপ্ত উদ্ভৃত্ব অর্থ</td>
                                <td></td>
                                <td>2</td>
                                <td>কর্মচারীর বেতন</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>অনুদান আদায়</td>
                                <td></td>
                                <td>3</td>
                                <td>বিদ্যুৎ বিল ও অন্যান্য বিল</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>অন্যান্য আয়</td>
                                <td></td>
                                <td>4</td>
                                <td>যাতায়াত, যোগাযোগ, আপ্যায়ন বিল</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>নগদ সেবা/ পন্য বিক্রয়</td>
                                <td></td>
                                <td>5</td>
                                <td>পারিবারিক আয়</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>নগদ সেবা/ পন্য বিক্রয়</td>
                                <td></td>
                                <td>6</td>
                                <td>অনুদান প্রদান</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="border-right: 1px solid">মোট=</td>

                                <td></td>
                                <td>মোট=</td>

                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-md-12">

                    {{--<div class="col-md-12">
                        <h5>অত্র সংস্থা বা অন্য কোন বিনিয়োগকারী প্রতিষ্ঠানে আবেদনকারীর বর্তমান বিনিয়োগের তথ্যঃ</h5>
                    </div>

                    <div class="borderportion">
                        <div class="col-md-12">
                            <h6>ক)</h6>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6" id="form-DonorOrgName-error">
                                {!! Form::label("DonorOrgName","দাতা প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::select("DonorOrgName",[ '1' => 'ব্র্যাক', '2' => 'টিএমএসএস', '3' => 'প্রশিকা'])!!}
                                    <span id="DonorOrgName-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-DonorOrgAddress-error">
                                {!! Form::label("DonorOrgAddress","দাতা প্রতিষ্ঠানের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::textarea("DonorOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="DonorOrgAddress-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-AmountOfBorrowedLoan-error">
                                {!! Form::label("AmountOfBorrowedLoan","গৃহীত বিনিয়োগ/ ঋণের পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("AmountOfBorrowedLoan",null,["class"=>"form-control required"]) !!}
                                    <span id="AmountOfBorrowedLoan-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-product12Name-error">
                                {!! Form::label("product12Name","সামগ্রীর নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::select("product12Name",[ '1' => 'গরু', '2' => 'মহিষ', '3' => 'ট্রাক্টর'])!!}
                                    <span id="product12Name-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-InvestmentStepNo-error">
                                {!! Form::label("InvestmentStepNo","বিনিয়োগের দফা নং",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("InvestmentStepNo",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestmentStepNo-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-InvestmentDuration-error">
                                {!! Form::label("InvestmentDuration","বিনিয়োগের মেয়াদ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("InvestmentDuration",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestmentDuration-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-InvestmentBorrowedDate-error">
                                {!! Form::label("InvestmentBorrowedDate","বিনিয়োগ/ ঋণ গ্রহনের তারিখ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::date("InvestmentBorrowedDate",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestmentBorrowedDate-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-AmountOfRepaidMoney-error">
                                {!! Form::label("AmountOfRepaidMoney","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::number("AmountOfRepaidMoney",null,["class"=>"form-control required"]) !!}
                                    <span id="AmountOfRepaidMoney-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-CurrentBalanceOfBorrow-error">
                                {!! Form::label("CurrentBalanceOfBorrow","বর্তমান স্থিতি",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::number("CurrentBalanceOfBorrow",null,["class"=>"form-control required"]) !!}
                                    <span id="CurrentBalanceOfBorrow-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-RemainingInstalments-error">
                                {!! Form::label("RemainingInstalments","অবশিষ্ট কিস্তি",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::number("RemainingInstalments",null,["class"=>"form-control required"]) !!}
                                    <span id="RemainingInstalments-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-AproximateDateOfPayment-error">
                                {!! Form::label("AproximateDateOfPayment","পরিশোধের সম্ভাব্য তারিখ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::date("AproximateDateOfPayment",null,["class"=>"form-control required"]) !!}
                                    <span id="AproximateDateOfPayment-error" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="borderportion">
                        <div class="col-md-12">
                            <h6>খ)</h6>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6" id="form-DonorOrgName1-error">
                                {!! Form::label("DonorOrgName1","দাতা প্রতিষ্ঠানের নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::select("DonorOrgName1",[ '1' => 'ব্র্যাক', '2' => 'টিএমএসএস', '3' => 'প্রশিকা'])!!}
                                    <span id="DonorOrgName1-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-DonorOrgAddress1-error">
                                {!! Form::label("DonorOrgAddress1","দাতা প্রতিষ্ঠানের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::textarea("DonorOrgAddress1",null,["class"=>"form-control required"]) !!}
                                    <span id="DonorOrgAddress1-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-AmountOfBorrowedLoan1-error">
                                {!! Form::label("AmountOfBorrowedLoan1","গৃহীত বিনিয়োগ/ ঋণের পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("AmountOfBorrowedLoan1",null,["class"=>"form-control required"]) !!}
                                    <span id="AmountOfBorrowedLoan1-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-DonarOrgProductName-error">
                                {!! Form::label("DonarOrgProductName","সামগ্রীর নাম",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::select("DonarOrgProductName",[ '1' => 'গরু', '2' => 'মহিষ', '3' => 'ট্রাক্টর'])!!}
                                    <span id="DonarOrgProductName-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-InvestmentStepNo1-error">
                                {!! Form::label("InvestmentStepNo1","বিনিয়োগের দফা নং",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("InvestmentStepNo1",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestmentStepNo1-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-InvestmentDuration1-error">
                                {!! Form::label("InvestmentDuration1","বিনিয়োগের মেয়াদ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::text("InvestmentDuration1",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestmentDuration1-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-InvestmentBorrowedDate1-error">
                                {!! Form::label("InvestmentBorrowedDate1","বিনিয়োগ/ ঋণ গ্রহনের তারিখ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::date("InvestmentBorrowedDate1",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestmentBorrowedDate1-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-AmountOfRepaidMoney1-error">
                                {!! Form::label("AmountOfRepaidMoney1","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::number("AmountOfRepaidMoney1",null,["class"=>"form-control required"]) !!}
                                    <span id="AmountOfRepaidMoney1-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-CurrentBalanceOfBorrow1-error">
                                {!! Form::label("CurrentBalanceOfBorrow1","বর্তমান স্থিতি",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::number("CurrentBalanceOfBorrow1",null,["class"=>"form-control required"]) !!}
                                    <span id="CurrentBalanceOfBorrow1-error" class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="form-RemainingInstalments1-error">
                                {!! Form::label("RemainingInstalments1","অবশিষ্ট কিস্তি",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::number("RemainingInstalments1",null,["class"=>"form-control required"]) !!}
                                    <span id="RemainingInstalments1-error" class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="form-AproximateDateOfPayment1-error">
                                {!! Form::label("AproximateDateOfPayment1","পরিশোধের সম্ভাব্য তারিখ",["class"=>"control-label col-md-12"]) !!}
                                <div class="col-md-12">
                                    {!! Form::date("AproximateDateOfPayment1",null,["class"=>"form-control required"]) !!}
                                    <span id="AproximateDateOfPayment1-error" class="help-block"></span>
                                </div>
                            </div>

                        </div>
                    </div>--}}

                    <div class="borderportion">
                        <div class="col-md-12">
                            <h3> উদ্যোগতার বার্ষিক আয়-ব্যয় বিবরণীঃ</h3>
                        </div>
                        <table class="table">
                            <tr>
                                <th>ক্রঃ নং</th>
                                <th>বিবরন</th>
                                <th>টাকার পরিমাণ</th>
                                <th>মোট আয়</th>
                                <th>মোট ব্যয়</th>
                                <th>নীট আয়</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>সদস্য যে প্রকল্পে বিনিয়োগ গ্রহন করতে ইচ্ছুক সেই প্রকল্পের</td>
                                <td></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>নির্দিষ্ট প্রকল্পের বাহিরে অন্যান্য উৎসঃ</td>
                                <td></td>
                                <td>2</td>
                                <td>কর্মচারীর বেতন</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>(ক)
                                    <div class="form-group col-md-6" id="form-OthersIncomeSources1-error">
                                        <div class="col-md-12">
                                            {!! Form::text("OthersIncomeSources1",null,["class"=>"form-control required"]) !!}
                                            <span id="OthersIncomeSources1-error" class="help-block"></span>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td>2</td>
                                <td>কর্মচারীর বেতন</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>(খ)
                                    <div class="form-group col-md-6" id="form-OthersIncomeSources2-error">
                                        <div class="col-md-12">
                                            {!! Form::text("OthersIncomeSources2",null,["class"=>"form-control required"]) !!}
                                            <span id="OthersIncomeSources2-error" class="help-block"></span>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td>2</td>
                                <td>কর্মচারীর বেতন</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>(গ)
                                    <div class="form-group col-md-6" id="form-OthersIncomeSources3-error">
                                        <div class="col-md-12">
                                            {!! Form::text("OthersIncomeSources3",null,["class"=>"form-control required"]) !!}
                                            <span id="OthersIncomeSources3-error" class="help-block"></span>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td>2</td>
                                <td>কর্মচারীর বেতন</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>
                     <div class="borderportion">
                        <div class="col-md-12">
                            <h3>দাখিলকৃত দলিল ও কাগজপত্রাদিঃ<h6>(জমা সাপেক্ষে বাম পাশের ঘরে টিক চিহ্ন দিন)</h6></h3>
                        </div>
                        <table class="table">
                            <tr>
                                <td>
                                    <input type="checkbox" value="">
                                </td>
                                <td>১. মূল দলিল/ দলিলের রশিদ</td>
                                <td>{!! Form::file("MainRecordOrVauchar",null,["class"=>"form-control required"]) !!}
                                    <span id="MainRecordOrVauchar-error" class="help-block"></span>
                                </td>
                                <td>
                                    <input type="checkbox" value="" name="checkboxMainRecordOrVauchar">
                                </td>
                                <td>
                                    ২. খাজনার DCR
                                </td>
                                <td>
                                    {!! Form::file("VatDCR",null,["class"=>"form-control required"]) !!}
                                    <span id="VatDCR-error" class="help-block"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" value="" name="checkboxVatDCR">
                                </td>
                                <td>
                                    ৩. মাঠপরচা, খতিয়ান/ খারিজের DCR
                                </td>
                                <td>{!! Form::file("LedgerDCR",null,["class"=>"form-control required"]) !!}
                                    <span id="LedgerDCR-error" class="help-block"></span>
                                </td>
                                <td>
                                    <input type="checkbox" value="" name="checkboxLedgerDCR">
                                </td>
                                <td>
                                    ৪. দোকানের ডিড
                                </td>
                                <td>
                                    {!! Form::file("ShopDeed",null,["class"=>"form-control required"]) !!}
                                    <span id="ShopDeed-error" class="help-block"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" value="" name="checkboxShopDeed">
                                </td>
                                <td>
                                    ৫. ট্রেড লাইসেন্স
                                </td>
                                <td>
                                    {!! Form::file("TradeLicenceImg",null,["class"=>"form-control required"]) !!}
                                    <span id="TradeLicenceImg-error" class="help-block"></span>
                                </td>
                                <td>
                                    <input type="checkbox" value="" name="checkboxTradeLicenceImg">
                                </td>
                                <td>
                                    ৬. গাড়ীর রেজিঃ বা মূল কাগজ
                                </td>
                                <td>
                                    {!! Form::file("CarRegistrationImg",null,["class"=>"form-control required"]) !!}
                                    <span id="CarRegistrationImg-error" class="help-block"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" value="" name="checkboxCarRegistrationImg">
                                </td>
                                <td>
                                    ৭. নাগরিকত্ব সনদ
                                </td>
                                <td>
                                    {!! Form::file("CitizenCertificateImg",null,["class"=>"form-control required"]) !!}
                                    <span id="CitizenCertificateImg-error" class="help-block"></span>
                                </td>
                                <td>
                                    <input type="checkbox" value="" name="checkboxCitizenCertificateImg">
                                </td>
                                <td>
                                    ৮. ব্যাংক হিসাবের ব্ল্যাংক চেক(MICR)
                                </td>
                                <td>
                                    {!! Form::file("BankBlankCheck",null,["class"=>"form-control required"]) !!}
                                    <span id="BankBlankCheck-error" class="help-block"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" value="" name="checkboxBankBlankCheck">
                                </td>
                                <td>
                                    ৯. অঙ্গিকার নামা(ষ্ট্যাম্পে)
                                </td>
                                <td>
                                    {!! Form::file("AgreementImg",null,["class"=>"form-control required"]) !!}
                                    <span id="AgreementImg-error" class="help-block"></span>
                                </td>
                                <td>
                                    <input type="checkbox" value="" name="checkboxAgreementImg">
                                </td>
                                <td>
                                    ১০. জামিনদারের তথ্য
                                </td>
                                <td>
                                    {!! Form::file("JamindarInfoDataImg",null,["class"=>"form-control required"]) !!}
                                    <span id="JamindarInfoDataImg-error" class="help-block"></span>
                                </td>

                            </tr>
                        </table>
                    </div>

                     <div class="form-group borderportion">
                        <div class="col-md-12">
                            <h4>উদ্যোক্তার সম্পদ ও দেনার বিবরণীঃ</h4>
                        </div>
                        <table class="table">
                            <tr>
                                <th>দেনার বিবরণ</th>
                                <th>টাকা</th>
                                <th>সম্পদের বিবরণ</th>
                                <th>টাকা</th>
                            </tr>
                            <tr>
                                <td class="text-left">
                                    ঋনঃ
                                </td>
                                <td>
                                    {!! Form::text("InvestorLiablities",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestorLiablities-error" class="help-block"></span>
                                </td>
                                <td>ব্যবসায় মজুদ পন্যের মুল্য</td>
                                <td>
                                    {!! Form::text("InvestorStockAssetPrice",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestorStockAssetPrice-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    এনজিও
                                </td>
                                <td>
                                    {!! Form::text("InvestorLiabilitiesngo",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestorLiabilitiesngo-error" class="help-block"></span>
                                </td>
                                <td>নগদ অর্থের পরিমাণ</td>
                                <td>
                                    {!! Form::text("InvestorHandCashAmount",null,["class"=>"form-control required"]) !!}
                                    <span id="InvestorHandCashAmount-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    ব্যাংক
                                </td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                                <td>ব্যাংকে জমাকৃত অর্থের পরিমাণ</td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    সমিতি
                                </td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                                <td>বাকিতে বিক্রয় (আদায়যোগ্য)</td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    ধার/ কর্জ গ্রহন
                                </td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                                <td>ব্যবসার স্থানের ডীড/পজিশন বাবদ অগ্রীম প্রদান</td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    নীট মুনাফা
                                </td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                                <td>ধার/ কর্জ/ ঋণ প্রদান</td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    অগ্রীম গ্রহন
                                </td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                                <td>জমির মুল্যে(..........শতক)</td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    অন্যান্য
                                </td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                                <td>অন্যান্য</td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    মোট=
                                </td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                                <td class="text-right">মোট=</td>
                                <td>
                                    {!! Form::text("LoanProviderOrgAddress",null,["class"=>"form-control required"]) !!}
                                    <span id="LoanProviderOrgAddress-error" class="help-block"></span>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>

            <div class="tab-pane" id="5">

                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>জামানত সংক্রান্ত</h5>
                        </div>
                        <div class="form-group col-md-6" id="form-GPositionPrice-error">
                            {!! Form::label("GPositionPrice","ডীড/ পজিশন মূল্য",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("GPositionPrice",null,["class"=>"form-control required"]) !!}
                                <span id="GPositionPrice-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GPositionDuration-error">
                            {!! Form::label("GPositionDuration","মেয়াদ (মাস)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("GPositionDuration",null,["class"=>"form-control required"]) !!}
                                <span id="GPositionDuration-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GValidityYear-error">
                            {!! Form::label("GValidityYear","কত সাল পর্যন্ত",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GValidityYear",null,["class"=>"form-control required"]) !!}
                                <span id="GValidityYear-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GMouza-error">
                            {!! Form::label("GMouza","জমির দলীল মৌজা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GMouza",null,["class"=>"form-control required"]) !!}
                                <span id="GMouza-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GCSKhotiyanNo-error">
                            {!! Form::label("GCSKhotiyanNo","সিএস খতিয়ান নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GCSKhotiyanNo",null,["class"=>"form-control required"]) !!}
                                <span id="GCSKhotiyanNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GHallKhotiyanNo-error">
                            {!! Form::label("GHallKhotiyanNo","হাল খতিয়ান নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GHallKhotiyanNo",null,["class"=>"form-control required"]) !!}
                                <span id="GHallKhotiyanNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GRSDPKhotiyanNo-error">
                            {!! Form::label("GRSDPKhotiyanNo","আরএস/ ডিপি খতিয়ান নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GRSDPKhotiyanNo",null,["class"=>"form-control required"]) !!}
                                <span id="GRSDPKhotiyanNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GCSDagNo-error">
                            {!! Form::label("GCSDagNo","সিএস দাগ নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GCSDagNo",null,["class"=>"form-control required"]) !!}
                                <span id="GCSDagNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GHalDagNo-error">
                            {!! Form::label("GHalDagNo","হাল দাগ নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GHalDagNo",null,["class"=>"form-control required"]) !!}
                                <span id="GHalDagNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GJLNo-error">
                            {!! Form::label("GJLNo","জে এল নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GJLNo",null,["class"=>"form-control required"]) !!}
                                <span id="GJLNo-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-GHoldingNo-error">
                            {!! Form::label("GHoldingNo","হোল্ডিং নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GHoldingNo",null,["class"=>"form-control required"]) !!}
                                <span id="GHoldingNo-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-GLandAmount-error">
                            {!! Form::label("GLandAmount","জমির পরিমাণ(শতক)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("GLandAmount",null,["class"=>"form-control required"]) !!}
                                <span id="GLandAmount-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-GApproximatePrice-error">
                            {!! Form::label("GApproximatePrice","আনুমানিক মূল্য",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("GApproximatePrice",null,["class"=>"form-control required"]) !!}
                                <span id="GApproximatePrice-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-GLandOwerShip-error">
                            {!! Form::label("GLandOwerShip","জমির মালিকানা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("GLandOwerShip",['1' => 'সদস্য', '2' => 'অভিভাবক', '3' => 'জামিনদার'])!!}
                                <span id="GLandOwerShip-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-AdvancedCheckBankName-error">
                            {!! Form::label("AdvancedCheckBankName","অগ্রিম চেকঃ ব্যাংকের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("AdvancedCheckBankName",null,["class"=>"form-control required"]) !!}
                                <span id="AdvancedCheckBankName-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-GBankBranchName-error">
                            {!! Form::label("GBankBranchName","শাখার নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GBankBranchName",null,["class"=>"form-control required"]) !!}
                                <span id="GBankBranchName-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-GBankAccountNo-error">
                            {!! Form::label("GBankAccountNo","হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("GBankAccountNo",null,["class"=>"form-control required"]) !!}
                                <span id="GBankAccountNo-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>পূর্বের বিনিয়োগের তথ্য</h5>
                        </div>
                        <div class="form-group col-md-6" id="form-ProjectName-error">
                            {!! Form::label("ProjectName","প্রকল্প/ ব্যবসা/ কর্মকান্ডের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("ProjectName",null,["class"=>"form-control required"]) !!}
                                <span id="ProjectName-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-PreviousInvestmentType-error">
                            {!! Form::label("PreviousInvestmentType","বিনিয়োগের ধরন",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("PreviousInvestmentType",null,["class"=>"form-control required"]) !!}
                                <span id="PreviousInvestmentType-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-PreviousReceivedAmount-error">
                            {!! Form::label("PreviousReceivedAmount","গৃহীত বিনিয়োগের পরিমাণ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("PreviousReceivedAmount",null,["class"=>"form-control required"]) !!}
                                <span id="PreviousReceivedAmount-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-AmountReceivedStep-error">
                            {!! Form::label("AmountReceivedStep","দফা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("AmountReceivedStep",null,["class"=>"form-control required"]) !!}
                                <span id="AmountReceivedStep-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-PreviousInvestmentReceivedDate-error">
                            {!! Form::label("PreviousInvestmentReceivedDate","বিনিয়োগ গ্রহনের তারিখ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("PreviousInvestmentReceivedDate",null,["class"=>"form-control required"]) !!}
                                <span id="PreviousInvestmentReceivedDate-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-PreviousInvestmentRepaidDate-error">
                            {!! Form::label("PreviousInvestmentRepaidDate","বিনিয়োগ পরিশোধের তারিখ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::date("PreviousInvestmentRepaidDate",null,["class"=>"form-control required"]) !!}
                                <span id="PreviousInvestmentRepaidDate-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-Repaymentattitude-error">
                            {!! Form::label("Repaymentattitude","পরিশোধের প্রবনতা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("Repaymentattitude",['1' => 'নিয়মিত', '2' => 'অনিয়মিত'])!!}
                                <span id="Repaymentattitude-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-AdvancedPaidInstalation-error">
                            {!! Form::label("AdvancedPaidInstalation","অগ্রিম কিস্তি প্রদানের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("AdvancedPaidInstalation",null,["class"=>"form-control required"]) !!}
                                <span id="AdvancedPaidInstalation-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-PaidMoneyPerInstalment-error">
                            {!! Form::label("PaidMoneyPerInstalment","প্রতি কিস্তিতে কত টাকা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("PaidMoneyPerInstalment",null,["class"=>"form-control required"]) !!}
                                <span id="PaidMoneyPerInstalment-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>সঞ্চয় স্থিতি</h5>
                        </div>
                        <div class="form-group col-md-6" id="form-GenaralSaving-error">
                            {!! Form::label("GenaralSaving","সাধারন স্থিতি",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("GenaralSaving",null,["class"=>"form-control required"]) !!}
                                <span id="GenaralSaving-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-SpecialSaving-error">
                            {!! Form::label("SpecialSaving","বিশেষ স্থিতি",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("SpecialSaving",null,["class"=>"form-control required"]) !!}
                                <span id="SpecialSaving-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-TssMoney-error">
                            {!! Form::label("TssMoney","টিএসএস(টাকা)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("TssMoney",null,["class"=>"form-control required"]) !!}
                                <span id="TssMoney-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-TotalSavingAmount-error">
                            {!! Form::label("TotalSavingAmount","মোট টাকা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("TotalSavingAmount",null,["class"=>"form-control required"]) !!}
                                <span id="TotalSavingAmount-error" class="help-block"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-pane" id="6">
                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>আবেদনকৃত বিনিয়োগের পরিমাণ</h5>
                        </div>
                        <div class="form-group col-md-6" id="form-ProposedAmountInNumber-error">
                            {!! Form::label("ProposedAmountInNumber","আবেদনকৃত টাকার পরিমাণ(অংকে)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("ProposedAmountInNumber",null,["class"=>"form-control required"]) !!}
                                <span id="ProposedAmountInNumber-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ProposedAmountInWord-error">
                            {!! Form::label("ProposedAmountInWord","আবেদনকৃত টাকার পরিমাণ(কথায়)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("ProposedAmountInWord",null,["class"=>"form-control required"]) !!}
                                <span id="ProposedAmountInWord-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ProposedInvesmentDuration-error">
                            {!! Form::label("ProposedInvesmentDuration","বিনিয়োগের মেয়াদ(বছর)",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::number("ProposedInvesmentDuration",null,["class"=>"form-control required"]) !!}
                                <span id="ProposedInvesmentDuration-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ProposedInvestmentStep-error">
                            {!! Form::label("ProposedInvestmentStep","বিনিয়গের দফা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::select("ProposedInvestmentStep",['1', '2' , '3'])!!}
                                <span id="ProposedInvestmentStep-error" class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group col-md-6" id="form-ProposedInvesmentName-error">
                            {!! Form::label("ProposedInvesmentName","বিনিয়োগের কর্মকান্ড/ প্রকল্পের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("ProposedInvesmentName",null,["class"=>"form-control required"]) !!}
                                <span id="ProposedInvesmentName-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-push-3">
                            <a href="javascript:ajaxLoad('loan/list')" class="btn btn-danger"><i
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
                        index = $(this).attr('name');
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