<div class="col-md-12">

    <div id="exTab2" class="">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#2" data-toggle="tab">ব্যক্তিগত তথ্য</a></li>
            <li><a href="#3" data-toggle="tab">নমিনি ও ব্যাংক</a></li>
            {{--<li><a href="#4" data-toggle="tab">পারিবারিক তথ্য</a></li>--}}
            {{--<li><a href="#5" data-toggle="tab">বিনিয়োগ সংক্রান্ত</a></li>--}}
            <li><a href="#6" data-toggle="tab">ব্যবসায়িক তথ্য</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="2">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>ছবি আপলোড করুন</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-MemberImage-error">
                        {!! Form::label("MemberImage","সদস্যের ছবি",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::file("MemberImage",null,["class"=>"form-control required"]) !!}
                            <span id="MemberImage-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FatherImage-error">
                        {!! Form::label("FatherImage","পিতার ছবি",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::file("FatherImage",null,["class"=>"form-control required"]) !!}
                            <span id="FatherImage-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FatherNid-error">
                        {!! Form::label("FatherNid","পিতার জাতীয় পরিচয় পত্র নং",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::file("FatherNid",null,["class"=>"form-control required"]) !!}
                            <span id="FatherNid-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MotherImage-error">
                        {!! Form::label("MotherImage","মায়ের ছবি",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::file("MotherImage",null,["class"=>"form-control required"]) !!}
                            <span id="MotherImage-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MotherNid-error">
                        {!! Form::label("MotherNid","মায়ের জাতীয় পরিচয় পত্র নং",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::file("MotherNid",null,["class"=>"form-control required"]) !!}
                            <span id="MotherNid-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                {{--<div class="borderportion">--}}
                {{--<div class="box-header col-md-11">--}}
                {{--<h5 class="text-aqua"><u> নাম</u></h5>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-NameTitle-error">--}}
                {{--{!! Form::label("NameTitle","টাইটেল:",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("NameTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}--}}
                {{--<span id="NameTitle-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-FirstName-error">--}}
                {{--{!! Form::label("FirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("FirstName",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="FirstName-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-LastName-error">--}}
                {{--{!! Form::label("LastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("LastName",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="LastName-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-FamilyName-error">--}}
                {{--{!! Form::label("FamilyName","পারিবারিক নাম:",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("FamilyName",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="FamilyName-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-FullNameBangla-error">--}}
                {{--{!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("FullNameBangla",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="FullNameBangla-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-Gender-error">--}}
                {{--{!! Form::label("Gender","লিঙ্গ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("Gender",['1' => 'Male', '2' => 'Female', '3' => 'Others'])!!}--}}
                {{--<span id="Gender-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-Age-error">--}}
                {{--{!! Form::label("Age","বয়স",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::number("Age",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="Nid-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-Education-error">--}}
                {{--{!! Form::label("Education","সর্বোচ্চ শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("Education",['1' => 'PSC', '2' => 'JSC', '3' => 'SSC', '4' => 'HSC','5' => 'BA', '6' => 'MA', '7' => 'HONOURS', '8' => 'MASTERS', '9' => 'PHD'])!!}--}}
                {{--<span id="Education-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PassingYear-error">--}}
                {{--{!! Form::label("PassingYear","পাশের বছর",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("PassingYear",['2007', '2008','2009','2010','2011','2012','2013'])!!}--}}
                {{--<span id="PassingYear-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-SpouseProfession-error">--}}
                {{--{!! Form::label("SpouseProfession","অভিভাবকের পেশা",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}--}}
                {{--<span id="SpouseProfession-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-MaritalStatus-error">--}}
                {{--{!! Form::label("MaritalStatus","বৈবাহিক অবস্থাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("MaritalStatus",['1' => 'Married Single','2' => 'Married Multiple', '3' => 'Non-Married','4' => 'Widower','5'=>'Widow'])!!}--}}
                {{--<span id="MaritalStatus-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PoliticalStatus-error">--}}
                {{--{!! Form::label("PoliticalStatus","রাজনীতির সাথে জরিত কি না?",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("PoliticalStatus",['1' => 'Yes', '2' => 'No'])!!}--}}
                {{--<span id="PoliticalStatus-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-Nid-error">--}}
                {{--{!! Form::label("Nid","জাতীয় পরিচয় পত্রের নংঃ ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("Nid",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="Nid-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="borderportion">--}}
                {{--<div class="box-header col-md-11">--}}
                {{--<h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-FatherOrHasbandNAmeTitle-error">--}}
                {{--{!! Form::label("FatherOrHasbandNAmeTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("FatherOrHasbandNAmeTitle",['1' => 'Mr'])!!}--}}
                {{--<span id="FatherOrHasbandNAmeTitle-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-FatherOrHasbandFirstName-error">--}}
                {{--{!! Form::label("FatherOrHasbandFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("FatherOrHasbandFirstName",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="FatherOrHasbandFirstName-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-FatherOrHasbandLastName-error">--}}
                {{--{!! Form::label("FatherOrHasbandLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("FatherOrHasbandLastName",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="FatherOrHasbandLastName-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-FatherOrHasbandAge-error">--}}
                {{--{!! Form::label("FatherOrHasbandAge","বয়সঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("FatherOrHasbandAge",['18', '19','20','21','22','30','30'])!!}--}}
                {{--<span id="FatherOrHasbandAge-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="borderportion">--}}
                {{--<div class="box-header col-md-11">--}}
                {{--<h5 class="text-aqua"><u>মায়ের নাম</u></h5>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-MatherNameTitle-error">--}}
                {{--{!! Form::label("MatherNameTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("MatherNameTitle",['2' => 'Mrs', '3' => 'Mss'])!!}--}}
                {{--<span id="MatherNameTitle-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-MotherFirstName-error">--}}
                {{--{!! Form::label("MotherFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("MotherFirstName",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="MotherFirstName-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-MotherLastName-error">--}}
                {{--{!! Form::label("MotherLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("MotherLastName",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="MotherLastName-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-MotherAge-error">--}}
                {{--{!! Form::label("MotherAge","বয়সঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("MotherAge",['18', '19','20','21','22','30','30'])!!}--}}
                {{--<span id="MotherAge-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="borderportion">--}}
                {{--<div class="box-header col-md-11">--}}
                {{--<h5 class="text-aqua"><u>বর্তমান ঠিকানা</u></h5>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentCountry-error">--}}
                {{--{!! Form::label("PresentCountry","দেশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PresentCountry">--}}
                {{--@foreach($country as $country_data )--}}
                {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PresentCountry-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentDistrict-error">--}}
                {{--{!! Form::label("PresentDistrict","জেলাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PresentDistrict">--}}
                {{--@foreach($district as $district_data )--}}
                {{--<option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PresentDistrict-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentThana-error">--}}
                {{--{!! Form::label("PresentThana","থানাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PresentThana">--}}
                {{--@foreach($thana as $thana_data )--}}
                {{--<option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PresentThana-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentUnion-error">--}}
                {{--{!! Form::label("PresentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PresentUnion">--}}
                {{--@foreach($union as $union_data )--}}
                {{--<option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PresentUnion-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentPostOffice-error">--}}
                {{--{!! Form::label("PresentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PresentUnion">--}}
                {{--@foreach($postoffice as $postoffice_data )--}}
                {{--<option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PresentPostOffice-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentWord-error">--}}
                {{--{!! Form::label("PresentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PresentWord">--}}
                {{--@foreach($word as $word_data )--}}
                {{--<option value="{{$word_data->id}}">{{$word_data->WordName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PresentWord-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentVillage-error">--}}
                {{--{!! Form::label("PresentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("PresentVillage",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="PresentVillage-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PresentRoadNo-error">--}}
                {{--{!! Form::label("PresentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("PresentRoadNo",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="PresentRoadNo-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{----}}
                {{--<div class="borderportion">--}}
                {{--<div class="box-header col-md-11">--}}
                {{--<h5 class="text-aqua"><u>স্থায়ী ঠিকানা</u></h5>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentCountry-error">--}}
                {{--{!! Form::label("PermanentCountry","দেশ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PermanentCountry">--}}
                {{--@foreach($country as $country_data )--}}
                {{--<option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PermanentCountry-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentDistrict-error">--}}
                {{--{!! Form::label("PermanentDistrict","জেলাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PermanentDistrict">--}}
                {{--@foreach($district as $district_data )--}}
                {{--<option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PermanentDistrict-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentThana-error">--}}
                {{--{!! Form::label("PermanentThana","থানাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PermanentThana">--}}
                {{--@foreach($thana as $thana_data )--}}
                {{--<option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PermanentThana-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentUnion-error">--}}
                {{--{!! Form::label("PermanentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PermanentUnion">--}}
                {{--@foreach($union as $union_data )--}}
                {{--<option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PermanentUnion-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentPostOffice-error">--}}
                {{--{!! Form::label("PermanentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PermanentUnion">--}}
                {{--@foreach($postoffice as $postoffice_data )--}}
                {{--<option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PermanentPostOffice-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentWord-error">--}}
                {{--{!! Form::label("PermanentWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--<select name="PermanentWord">--}}
                {{--@foreach($word as $word_data )--}}
                {{--<option value="{{$word_data->id}}">{{$word_data->WordName}}</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--<span id="PermanentWord-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentVillage-error">--}}
                {{--{!! Form::label("PermanentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("PermanentVillage",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="PermanentVillage-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PermanentRoadNo-error">--}}
                {{--{!! Form::label("PermanentRoadNo","রাস্তা নং",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("PermanentRoadNo",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="PermanentRoadNo-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="borderportion">--}}
                {{--<div class="box-header col-md-11">--}}
                {{--<h5 class="text-aqua"><u>যোগাযোগ</u></h5>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-Mobile-error">--}}
                {{--{!! Form::label("Mobile","মোবাইল নংঃ ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::number("Mobile",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="Mobile-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-Email-error">--}}
                {{--{!! Form::label("Email","ইমেইলঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::email("Email",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="Email-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-SpouseMobileNo-error">--}}
                {{--{!! Form::label("SpouseMobileNo","অভিভাবকের মোবাইল নংঃ ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::number("SpouseMobileNo",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="SpouseMobileNo-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-Distance-error">--}}
                {{--{!! Form::label("Distance","শাখা অফিসের দুরুত্ব (কিঃ মিঃ)",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("Distance", ['1', '2', '3','4', '5', '6'])!!}--}}
                {{--{!! Form::number("Distance",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="Distance-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="borderportion">--}}
                {{--<div class="box-header col-md-11">--}}
                {{--<h5 class="text-aqua"><u>পেশা সংক্রান্ত</u></h5>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-CurrentProfession-error">--}}
                {{--{!! Form::label("CurrentProfession","বর্তমান পেশা",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("CurrentProfession",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}--}}
                {{--<span id="CurrentProfession-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-PreviousProfessiion-error">--}}
                {{--{!! Form::label("PreviousProfessiion","বর্তমান পেশার পূর্বে তিনি কি করতেন",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("PreviousProfessiion",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}--}}
                {{--<span id="PreviousProfessiion-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-DorationOfPreviousProfession-error">--}}
                {{--{!! Form::label("DorationOfPreviousProfession","সেই পেশায় কতদিন নিয়োজিত ছিলেন(মাস)",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("DorationOfPreviousProfession",['1', '2', '3','4', '5', '6'])!!}--}}
                {{--<span id="DorationOfPreviousProfession-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-EarningAssetsByBusinessOrJob-error">--}}
                {{--{!! Form::label("EarningAssetsByBusinessOrJob","ব্যবসা/চাকুরী করে অর্জিত সম্পদের বিবরণঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::text("EarningAssetsByBusinessOrJob",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="EarningAssetsByBusinessOrJob-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-EarningSourceWithoutBusiness-error">--}}
                {{--{!! Form::label("EarningSourceWithoutBusiness","ব্যবসা ছাড়া আয়ের উৎস থাকলে তার বিবরণঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::textarea("EarningSourceWithoutBusiness",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="EarningSourceWithoutBusiness-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-BusinessType-error">--}}
                {{--{!! Form::label("BusinessType","ব্যবসার ধরনঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::select("BusinessType",['1' => 'Single', '2' => 'Partnership'])!!}--}}
                {{--<span id="BusinessType-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6" id="form-BusinessFrturePlan-error">--}}
                {{--{!! Form::label("BusinessFrturePlan","ব্যবসার ভবিষ্যৎ পরিকল্পনাঃ",["class"=>"control-label col-md-12"]) !!}--}}
                {{--<div class="col-md-12">--}}
                {{--{!! Form::textarea("BusinessFrturePlan",null,["class"=>"form-control required"]) !!}--}}
                {{--<span id="BusinessFrturePlan-error" class="help-block"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="tab-pane" id="3">
                <div class="col-md-12">
                    <div class="borderportion">
                        <div class="box box-header">
                            <h5>ব্যাংক সংক্রান্ত</h5>
                        </div>
                        <div class="form-group col-md-6" id="form-BankAccountNo-error">
                            {!! Form::label("BankAccountNo","ব্যাংক হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("BankAccountNo",null,["class"=>"form-control required"]) !!}
                                <span id="BankAccountNo-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-BankName-error">
                            {!! Form::label("BankName","ব্যাংকের নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("BankName",null,["class"=>"form-control required"]) !!}
                                <span id="BankName-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-BankAddress-error">
                            {!! Form::label("BankAddress","ব্যাংকের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::textarea("BankAddress",null,["class"=>"form-control required"]) !!}
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
                                {!! Form::text("NomineeName",null,["class"=>"form-control required"]) !!}
                                <span id="NomineeName-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-NomineeFatherOrHasbandName-error">
                            {!! Form::label("NomineeFatherOrHasbandName","নমিনির পিতা/ স্বামীর নাম",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("NomineeFatherOrHasbandName",null,["class"=>"form-control required"]) !!}
                                <span id="NomineeFatherOrHasbandName-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-NomineeRelation-error">
                            {!! Form::label("NomineeRelation","সম্পর্ক",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("NomineeRelation",null,["class"=>"form-control required"]) !!}
                                <span id="NomineeRelation-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-NomineeImage-error">
                            {!! Form::label("NomineeImage","ছবি",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::file("NomineeImage",null,["class"=>"form-control required"]) !!}
                                <span id="NomineeImage-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-NomineeNid-error">
                            {!! Form::label("NomineeNid","জাতীয় পরিচয় পত্র নং",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("NomineeNid",null,["class"=>"form-control required"]) !!}
                                <span id="NomineeNid-error" class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="form-NomineeNameShare-error">
                            {!! Form::label("NomineeNameShare","নমিনির অংশ",["class"=>"control-label col-md-12"]) !!}
                            <div class="col-md-12">
                                {!! Form::text("NomineeNameShare",null,["class"=>"form-control required"]) !!}
                                <span id="NomineeNameShare-error" class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="tab-pane" id="4">
                SAME AS SURVEY
                 --}}{{--<div class="borderportion">--}}{{--
                    --}}{{--<div class="box-header col-md-11">--}}{{--
                        --}}{{--<h5 class="text-aqua"><u>পরিবারের সদস্য সংক্রান্ত</u></h5>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-FamilyMebmer-error">--}}{{--
                        --}}{{--{!! Form::label("FamilyMebmer","পরিবারের সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::select("FamilyMebmer",['1', '2', '3','4', '5', '6'])!!}--}}{{--
                            --}}{{--<span id="FamilyMebmer-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-EarningMale-error">--}}{{--
                        --}}{{--{!! Form::label("EarningMale","উপার্জনক্ষম পুরুষের সংখ্যা",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::select("EarningMale",['1', '2', '3','4', '5', '6'])!!}--}}{{--
                            --}}{{--<span id="EarningMale-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-EarningFemale-error">--}}{{--
                        --}}{{--{!! Form::label("EarningFemale","উপার্জনক্ষম মহিলার সংখ্যা",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::select("EarningFemale",['1', '2', '3','4', '5', '6'])!!}--}}{{--
                            --}}{{--<span id="EarningFemale-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-EarningPerson-error">--}}{{--
                        --}}{{--{!! Form::label("EarningPerson","উপার্জনক্ষম সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::select("EarningPerson",['1', '2', '3','4', '5', '6'])!!}--}}{{--
                            --}}{{--<span id="EarningPerson-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-MaleMember-error">--}}{{--
                        --}}{{--{!! Form::label("MaleMember","ছেলে সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::select("MaleMember",['1', '2', '3','4', '5', '6'])!!}--}}{{--
                            --}}{{--<span id="MaleMember-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-FemaleMenber-error">--}}{{--
                        --}}{{--{!! Form::label("FemaleMenber","মেয়ে সদস্য সংখ্যা",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::select("FemaleMenber",['1', '2', '3','4', '5', '6'])!!}--}}{{--
                            --}}{{--<span id="FemaleMenber-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-FamilyType-error">--}}{{--
                        --}}{{--{!! Form::label("FamilyType","পরিবারের প্রকৃতি",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::select("FamilyType",['1' => 'Single', '2' => 'Combined'])!!}--}}{{--
                            --}}{{--<span id="FamilyType-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-SickDescripotionOfFamilyMember-error">--}}{{--
                        --}}{{--{!! Form::label("SickDescripotionOfFamilyMember","পরিবারে কেহ গুরুত্বর অসুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::textarea("SickDescripotionOfFamilyMember",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="SickDescripotionOfFamilyMember-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-CaseDescriptionOfFamilyMember-error">--}}{{--
                        --}}{{--{!! Form::label("CaseDescriptionOfFamilyMember","পরিবারে কেহ কথনও মামলাগ্রুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::textarea("CaseDescriptionOfFamilyMember",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="CaseDescriptionOfFamilyMember-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-IfAnyMemberInAbroad-error">--}}{{--
                        --}}{{--{!! Form::label("IfAnyMemberInAbroad","পরিবারে কেহ বিদেশে থাকলে - কোন দেশে তার বিবরণ",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::textarea("IfAnyMemberInAbroad",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="IfAnyMemberInAbroad-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                --}}{{--</div>--}}{{--
                --}}{{--<div class="borderportion">--}}{{--
                    --}}{{--<div class="box-header col-md-11">--}}{{--
                        --}}{{--<h5 class="text-aqua">জমি ও ঘরবাড়ি সংক্রান্ত</h5>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-CultiviableLand-error">--}}{{--
                        --}}{{--{!! Form::label("CultiviableLand","আবাদি জমি (শতক)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("CultiviableLand",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="CultiviableLand-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-NonCultivableLand-error">--}}{{--
                        --}}{{--{!! Form::label("NonCultivableLand","অনাবাদি জমি (শতক)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("NonCultivableLand",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="NonCultivableLand-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-Pond-error">--}}{{--
                        --}}{{--{!! Form::label("Pond","পুকুর (শতক)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("Pond",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="Pond-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-House-error">--}}{{--
                        --}}{{--{!! Form::label("House","বসত বাড়ী(শতক)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("House",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="House-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-TotalLand-error">--}}{{--
                        --}}{{--{!! Form::label("TotalLand","মোট জমি (শতক)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("TotalLand",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="TotalLand-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-TinMadeHouse-error">--}}{{--
                        --}}{{--{!! Form::label("TinMadeHouse","টিনের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("TinMadeHouse",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="TinMadeHouse-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-StrawMadeHouse-error">--}}{{--
                        --}}{{--{!! Form::label("StrawMadeHouse","খড়ের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("StrawMadeHouse",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="StrawMadeHouse-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-BrickMadeHouse-error">--}}{{--
                        --}}{{--{!! Form::label("BrickMadeHouse","ইটের ঘর (কত টি?)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("BrickMadeHouse",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="BrickMadeHouse-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                --}}{{--</div>--}}{{--
                --}}{{--<div class="borderportion">--}}{{--
                    --}}{{--<div class="box-header col-md-11">--}}{{--
                        --}}{{--<h5 class="text-aqua">বাৎসরিক মোট আয় ও ব্যয়</h5>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-AgriculturalEarning-error">--}}{{--
                        --}}{{--{!! Form::label("AgriculturalEarning","কৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("AgriculturalEarning",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="AgriculturalEarning-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-NonAgriculturalEarning-error">--}}{{--
                        --}}{{--{!! Form::label("NonAgriculturalEarning","অকৃষিজ আয় (টাকা)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("NonAgriculturalEarning",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="NonAgriculturalEarning-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-TotalEarning-error">--}}{{--
                        --}}{{--{!! Form::label("TotalEarning","মোট আয় (টাকা",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("TotalEarning",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="TotalEarning-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-TotalExpenditure-error">--}}{{--
                        --}}{{--{!! Form::label("TotalExpenditure","মোট ব্যয় (টাকা)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("TotalExpenditure",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="TotalExpenditure-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                    --}}{{--<div class="form-group col-md-6" id="form-NetBalance-error">--}}{{--
                        --}}{{--{!! Form::label("NetBalance","উদ্বৃত্ত/ঘাটতি (টাকা)",["class"=>"control-label col-md-12"]) !!}--}}{{--
                        --}}{{--<div class="col-md-12">--}}{{--
                            --}}{{--{!! Form::number("NetBalance",null,["class"=>"form-control required"]) !!}--}}{{--
                            --}}{{--<span id="NetBalance-error" class="help-block"></span>--}}{{--
                        --}}{{--</div>--}}{{--
                    --}}{{--</div>--}}{{--
                --}}{{--</div>--}}{{--
            </div>--}}
            {{--<div class="tab-pane" id="5">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>বিনিয়োগ সংক্রান্ত</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-ReceivedAmount-error">
                        {!! Form::label("ReceivedAmount","গৃহীত টাকার পরিমাণ",["class"=>"control-label col-md-12"]) !!}
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
                            {!! Form::text("InvestmentSector",null,["class"=>"form-control required"]) !!}
                            <span id="InvestmentSector-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Amount-error">
                        {!! Form::label("Amount","টাকার পরিমানঃ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("Amount",null,["class"=>"form-control required"]) !!}
                            <span id="Amount-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Comment1-error">
                        {!! Form::label("Comment1","প্রথম ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("Comment1",null,["class"=>"form-control required"]) !!}
                            <span id="Comment1-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-Comment2-error">
                        {!! Form::label("Comment2","দ্বিতীয় ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("Comment2",null,["class"=>"form-control required"]) !!}
                            <span id="Comment2-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class="tab-pane" id="6">
                <div class="borderportion">

                    <div class="box-header col-md-12">
                        <h5 class="text-aqua"><u>ব্যবসা সংক্রান্ত</u></h5>
                    </div>
                    <div class="form-group col-md-4" id="form-BusinessName-error">
                        {!! Form::label("BusinessName","ব্যবসার নামঃ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("BusinessName",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-BusinessNature-error">
                        {!! Form::label("BusinessNature","ব্যবসার প্রকৃতিঃ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("BusinessNature",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessNature-error1" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-BusinessExperience-error">
                        {!! Form::label("BusinessExperience","ব্যবসার অভিজ্ঞতাঃ(মাস)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("BusinessExperience",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessExperience-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-BusinessCenterAddress-error">
                        {!! Form::label("BusinessCenterAddress","ব্যবসা কেন্দ্রের ঠিকানাঃ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("BusinessCenterAddress",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessCenterAddress-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-BusinessStartDate-error">
                        {!! Form::label("BusinessStartDate","বব্যবসা শুরুর তারিখঃ ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("BusinessStartDate",null,["class"=>"form-control required"]) !!}
                            <span id="BusinessStartDate-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12" id="form-Accommodation-error">
                        {!! Form::label("Accommodation","অবকাঠামোঃ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("Accommodation",['1' => 'পাকা', '2' => 'সেমি পাকা'])!!}
                            <span id="Accommodation-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-AccommodationLength-error">
                        {!! Form::label("AccommodationLength","পরিমাপ দৈর্ঘ্য(ফুট)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("AccommodationLength",null,["class"=>"form-control required"]) !!}
                            <span id="AccommodationLength-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-AccommodationWidth-error">
                        {!! Form::label("AccommodationWidth","পরিমাপ প্রস্থ(ফুট)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("AccommodationWidth",null,["class"=>"form-control required"]) !!}
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
                            {!! Form::text("TradeLicenceNo",null,["class"=>"form-control required"]) !!}
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
                    <div class="box-header col-md-12">
                        <h5 class="text-aqua"><u>ব্যবসায় নিয়োজিত মূলধন ও ঋণ</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-InvestedCapital-error">
                        {!! Form::label("InvestedCapital","ব্যবসায় নিয়োজিত মূলধনঃ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("InvestedCapital",null,["class"=>"form-control required"]) !!}
                            <span id="InvestedCapital-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-CurrentCapital-error">
                        {!! Form::label("CurrentCapital","বর্তমান পুঁজি",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("CurrentCapital",null,["class"=>"form-control required"]) !!}
                            <span id="CurrentCapital-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MonthlyAvarageSale-error">
                        {!! Form::label("MonthlyAvarageSale","মাসিক গড় বিক্রয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("MonthlyAvarageSale",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyAvarageSale-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="box-header col-md-12">
                        <h6 class="text-aqua"><u>ব্যবসায় নিয়োজিত মূলধনের উৎস</u></h6>
                    </div>
                    <div class="form-group col-md-6" id="form-BankContribution-error">
                        {!! Form::label("BankContribution","ব্যাংক(%)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("BankContribution",null,["class"=>"form-control required"]) !!}
                            <span id="BankContribution-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-NgoContribution-error">
                        {!! Form::label("NgoContribution","এন জি ও (%)",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("NgoContribution",null,["class"=>"form-control required"]) !!}
                            <span id="NgoContribution-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SelfContribution-error">
                        {!! Form::label("SelfContribution","নিজ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("SelfContribution",null,["class"=>"form-control required"]) !!}
                            <span id="SelfContribution-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-BorrowMoney-error">
                        {!! Form::label("BorrowMoney","ধার/কর্জ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("BorrowMoney",null,["class"=>"form-control required"]) !!}
                            <span id="BorrowMoney-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>ব্যবসা থেকে মাসিক আয় ও ব্যয়</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-MonthlyEarningFromBusiness-error">
                        {!! Form::label("MonthlyEarningFromBusiness","ব্যবসায় থেকে মাসিক আয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("MonthlyEarningFromBusiness",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyEarningFromBusiness-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MonthlyExpenditureFromBusiness-error">
                        {!! Form::label("MonthlyExpenditureFromBusiness","ব্যবসায় থেকে মাসিক ব্যয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("MonthlyExpenditureFromBusiness",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyExpenditureFromBusiness-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SurplusMoney-error">
                        {!! Form::label("SurplusMoney","উদ্বৃত্ত",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("SurplusMoney",null,["class"=>"form-control required"]) !!}
                            <span id="SurplusMoney-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-IncomeFromOthersSources-error">
                        {!! Form::label("IncomeFromOthersSources","অন্যান্য উৎস থেকে মাসিক আয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("IncomeFromOthersSources",null,["class"=>"form-control required"]) !!}
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
                            {!! Form::number("MonthlyExpenditureFromOtherSources",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyExpenditureFromOtherSources-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-MonthlySurplus-error">
                        {!! Form::label("MonthlySurplus","উদ্বৃত্ত",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("MonthlySurplus",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlySurplus-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MonthlyTotalSurplus-error">
                        {!! Form::label("MonthlyTotalSurplus","সর্বমোট উদ্বৃত্ত",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("MonthlyTotalSurplus",null,["class"=>"form-control required"]) !!}
                            <span id="MonthlyTotalSurplus-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>ব্যবসার ধরণ, নিয়োজিত সময় ও জনবল সংক্রান্ত</u></h5>
                    </div>
                    <div class="form-group col-md-6" id="form-BusinessType-error">
                        {!! Form::label("BusinessType","ব্যবসার ধরন",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("BusinessType",['1' => 'পাইকারী', '2' => 'খুচরা','3'=>'উৎপাদনকারী','4'=>'সরবরাহকারী','5'=>'প্রক্রিয়াজাতকারী','6'=>'কৃষি','7'=>'পরিবহণ'])!!}
                            <span id="BusinessType-error" class="help-block"></span>
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
                            {!! Form::time("FirstHalfStart",null,["class"=>"form-control required"]) !!}
                            <span id="FirstHalfStart-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-FirstHalfEnd-error">
                        {!! Form::label("FirstHalfEnd","১ম অর্ধ শেষ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("FirstHalfEnd",null,["class"=>"form-control required"]) !!}
                            <span id="FirstHalfEnd-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SecondHalfStart-error">
                        {!! Form::label("SecondHalfStart","২য় অর্ধ শুরু",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("SecondHalfStart",null,["class"=>"form-control required"]) !!}
                            <span id="SecondHalfStart-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-SecondHalfEnd-error">
                        {!! Form::label("SecondHalfEnd","২য় অর্ধ শেষ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("SecondHalfEnd",null,["class"=>"form-control required"]) !!}
                            <span id="SecondHalfEnd-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-TotalTime-error">
                        {!! Form::label("TotalTime","মোট সময়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("TotalTime",null,["class"=>"form-control required"]) !!}
                            <span id="TotalTime-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-OrgOPeningTime-error">
                        {!! Form::label("OrgOPeningTime","প্রতিদিন প্রতিষ্ঠান খোলা হয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("OrgOPeningTime",null,["class"=>"form-control required"]) !!}
                            <span id="OrgOPeningTime-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-OrgClosingTime-error">
                        {!! Form::label("OrgClosingTime","প্রতিদিন প্রতিষ্ঠান বন্ধ হয়",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("OrgClosingTime",null,["class"=>"form-control required"]) !!}
                            <span id="OrgClosingTime-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-ClosingIntervalStart-error">
                        {!! Form::label("ClosingIntervalStart","মাঝে বন্ধ শুরু",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("ClosingIntervalStart",null,["class"=>"form-control required"]) !!}
                            <span id="ClosingIntervalStart-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-ClosingIntervalClose-error">
                        {!! Form::label("ClosingIntervalClose","মাঝে বন্ধ শেষ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::time("ClosingIntervalClose",null,["class"=>"form-control required"]) !!}
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
                            {!! Form::select("OrgPermanentEmployee",['1','2','3','4','5','6'])!!}
                            <span id="OrgPermanentEmployee-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MemberJoinDate-error">
                        {!! Form::label("MemberJoinDate","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("MemberJoinDate",null,["class"=>"form-control required"]) !!}
                            <span id="MemberJoinDate-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MemberUpdateDate-error">
                        {!! Form::label("MemberUpdateDate","হালনাগাদের তারিখ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::date("MemberUpdateDate",null,["class"=>"form-control required"]) !!}
                            <span id="MemberUpdateDate-error" class="help-block"></span>
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
                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="javascript:ajaxLoad('member/list')" class="btn btn-danger"><i
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