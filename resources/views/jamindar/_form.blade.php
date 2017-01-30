<div class="col-md-12">

    <div class="borderportion">
        <div class="box-header col-md-12">
            <h5 class="text-aqua"><u>তত্থবলী</u></h5>
        </div>

        <div class="col-md-12">

            <!-- <div class="box box-header">
                <h5>নাম</h5>
            </div> -->

        <!-- <div class="form-group required col-md-6" id="form-name-error">
                {!! Form::label("name","প্রথম নাম",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("name",null,["class"=>"form-control required"]) !!}
                <span id="name-error" class="help-block"></span>
            </div>
        </div> -->
            <div class="form-group required col-md-3" id="form-JamindarNameTitle-error">
                {!! Form::label("JamindarNameTitle","টাইটেল:",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarNameTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
                    <span id="JamindarNameTitle-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-3" id="form-JamindarFirstName-error">
                {!! Form::label("JamindarFirstName","১ম অংশ",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarFirstName",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarFirstName-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-3" id="form-JamindarLastName-error">
                {!! Form::label("JamindarLastName","২য় অংশ",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarLastName",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarLastName-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-3" id="form-JamindarFamilyName-error">
                {!! Form::label("JamindarFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarFamilyName",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarFamilyName-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-4" id="form-JamindarRelation-error">
                {!! Form::label("JamindarRelation","গ্রাহকের সাথে সম্পর্ক",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarRelation",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarRelation-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-4" id="form-JamindarAge-error">
                {!! Form::label("JamindarAge","বয়স(বছর)",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarAge",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarAge-error" class="help-block"></span>
                <!-- {!! Form::select("JamindarAge",['18', '19','20','21','22','30','30'])!!}
                        <span id="JamindarAge-error" class="help-block"></span> -->
                </div>
            </div>

            <div class="form-group required col-md-4" id="form-JamindarEducation-error">
            {!! Form::label("JamindarEducation","শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}
            <!-- <div class="col-md-12">
                    {!! Form::text("JamindarEducation",null,["class"=>"form-control required"]) !!}
            {!! Form::select("JamindarEducation",['1' => 'PSC', '2' => 'JSC', '3' => 'SSC', '4' => 'HSC','5' => 'BA', '6' => 'MA', '7' => 'HONOURS', '8' => 'MASTERS', '9' => 'PHD'])!!}
                    <span id="JamindarEducation-error" class="help-block"></span>
                </div> -->
                <div class="col-md-12">
                    <select name="JamindarEducation">
                        @foreach($education as $education_data )
                            <option value="{{$education_data->id}}">{{$education_data->name}}</option>
                        @endforeach
                    </select>
                    <span id="Education-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarPassingYear-error">
                {!! Form::label("JamindarPassingYear","পাশের বছর",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                {!! Form::text("JamindarPassingYear",null,["class"=>"form-control required"]) !!}
                <!-- {!! Form::select("JamindarPassingYear",['2007', '2008','2009','2010','2011','2012','2013'])!!} -->
                    <span id="JamindarPassingYear-error" class="help-block"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="box-header col-md-11">
            <h5 class="text-aqua"><u>ছবি আপলোড করুন</u></h5>
        </div>
        <div class="form-group col-md-6" id="form-JamindarImage-error">
            {!! Form::label("JamindarImage","জামিনদারের ছবি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::file("JamindarImage",null,["class"=>"form-control required"]) !!}
                <span id="JamindarImage-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">

        <div class="box-header col-md-12">
            <h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>
        </div>
        <div class="form-group required col-md-3" id="form-FatherOrHasbandNAmeTitle-error">
            {!! Form::label("FatherOrHasbandNAmeTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("FatherOrHasbandNAmeTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
                <span id="FatherOrHasbandNAmeTitle-error" class="help-block"></span>
            </div>
        </div>


        <div class="form-group required col-md-3" id="form-FatherOrHasbandFirstName-error">
            {!! Form::label("FatherOrHasbandFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("FatherOrHasbandFirstName",null,["class"=>"form-control required"]) !!}
                <span id="FatherOrHasbandFirstName-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-3" id="form-FatherOrHasbandLastName-error">
            {!! Form::label("FatherOrHasbandLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("FatherOrHasbandLastName",null,["class"=>"form-control required"]) !!}
                <span id="FatherOrHasbandLastName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-FatherOrHasbandFamilyName-error">
            {!! Form::label("FatherOrHasbandFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("FatherOrHasbandFamilyName",null,["class"=>"form-control required"]) !!}
                <span id="FatherOrHasbandFamilyName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-FatherOrHasbandAge-error">
            {!! Form::label("FatherOrHasbandAge","বয়স",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
            {!! Form::text("FatherOrHasbandAge",null,["class"=>"form-control required"]) !!}
            <!-- {!! Form::select("FatherOrHasbandAge",['18', '19','20','21','22','30','30'])!!} -->
                <span id="FatherOrHasbandAge-error" class="help-block"></span>
            </div>
        </div>
    </div>

    <div class="borderportion">
        <div class="box-header col-md-11">
            <h5 class="text-aqua"><u>মায়ের নাম</u></h5>
        </div>
        <div class="form-group col-md-6" id="form-JamindarMatherNameTitle-error">
            {!! Form::label("JamindarMatherNameTitle","টাইটেল",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("JamindarMatherNameTitle",['2' => 'Mrs', '3' => 'Mss'])!!}
                <span id="JamindarMatherNameTitle-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group col-md-6" id="form-JamindarMotherFirstName-error">
            {!! Form::label("JamindarMotherFirstName","প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("JamindarMotherFirstName",null,["class"=>"form-control required"]) !!}
                <span id="JamindarMotherFirstName-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group col-md-6" id="form-JamindarMotherLastName-error">
            {!! Form::label("JamindarMotherLastName","দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("JamindarMotherLastName",null,["class"=>"form-control required"]) !!}
                <span id="JamindarMotherLastName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-3" id="form-JamindarMotherFamilyName-error">
            {!! Form::label("JamindarMotherFamilyName","পারিবারিক নাম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("JamindarMotherFamilyName",null,["class"=>"form-control required"]) !!}
                <span id="JamindarMotherFamilyName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group col-md-6" id="form-JamindarMotherAge-error">
            {!! Form::label("JamindarMotherAge","বয়সঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("JamindarMotherAge",['18', '19','20','21','22','30','30'])!!}
                <span id="JamindarMotherAge-error" class="help-block"></span>
            </div>
        </div>

    </div>

    <div class="borderportion">
        <div class="col-md-12">
            <div class="box-header col-md-12">
                <h5 class="text-aqua"><u>বর্তমান ঠিকানা</u></h5>
            </div>
            <div class="form-group required col-md-6" id="form-JamindarCountry-error">
                {!! Form::label("JamindarCountry","দেশ",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarCountry">
                        @foreach($country as $country_data )
                            <option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarCountry-error" class="help-block"></span>
                </div>
            </div>


            <div class="form-group required col-md-6" id="form-JamindarDistrict-error">
                {!! Form::label("JamindarDistrict","জেলা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarDistrict">
                        @foreach($district as $district_data )
                            <option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarDistrict-error" class="help-block"></span>
                </div>
            </div>


            <div class="form-group required col-md-6" id="form-JamindarThana-error">
                {!! Form::label("JamindarThana","থানা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarThana">
                        @foreach($thana as $thana_data )
                            <option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarThana-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarPostoffice-error">
                {!! Form::label("JamindarPostoffice","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarPostoffice">
                        @foreach($postoffice as $postoffice_data )
                            <option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarPostoffice-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarUnion-error">
                {!! Form::label("JamindarUnion","ইউনিয়ন",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarUnion">
                        @foreach($union as $union_data )
                            <option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarUnion-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarWord-error">
                {!! Form::label("JamindarWord","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarWord">
                        @foreach($word as $word_data )
                            <option value="{{$word_data->id}}">{{$word_data->WordName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarWord-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarVillage-error">
                {!! Form::label("JamindarVillage","গ্রাম",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarVillage",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarVillage-error" class="help-block"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="col-md-12">
            <div class="box box-header">
                <h5 class="col-md-offset-1">স্থায়ী ঠিকানা</h5>
            </div>
            <div class="form-group required col-md-6" id="form-JamindarCountry1-error">
                {!! Form::label("JamindarCountry1","দেশ",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarCountry1">
                        @foreach($country as $country_data )
                            <option value="{{$country_data->id}}">{{$country_data->CountryName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarCountry1-error" class="help-block"></span>
                </div>
            </div>


            <div class="form-group required col-md-6" id="form-JamindarDistrict1-error">
                {!! Form::label("JamindarDistrict1","জেলা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarDistrict1">
                        @foreach($district as $district_data )
                            <option value="{{$district_data->id}}">{{$district_data->DistrictName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarDistrict1-error" class="help-block"></span>
                </div>
            </div>


            <div class="form-group required col-md-6" id="form-JamindarThana1-error">
                {!! Form::label("JamindarThana1","থানা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarThana1">
                        @foreach($thana as $thana_data )
                            <option value="{{$thana_data->id}}">{{$thana_data->ThanaName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarThana1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarPostoffice1-error">
                {!! Form::label("JamindarPostoffice1","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarPostoffice1">
                        @foreach($postoffice as $postoffice_data )
                            <option value="{{$postoffice_data->id}}">{{$postoffice_data->PostofficeName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarPostoffice1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarUnion1-error">
                {!! Form::label("JamindarUnion1","ইউনিয়ন",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarUnion1">
                        @foreach($union as $union_data )
                            <option value="{{$union_data->id}}">{{$union_data->UnionName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarUnion1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarWord1-error">
                {!! Form::label("JamindarWord1","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    <select name="JamindarWord1">
                        @foreach($word as $word_data )
                            <option value="{{$word_data->id}}">{{$word_data->WordName}}</option>
                        @endforeach
                    </select>
                    <span id="JamindarWord1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarVillage1-error">
                {!! Form::label("JamindarVillage1","গ্রাম",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarVillage1",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarVillage1-error" class="help-block"></span>
                </div>
            </div>

        </div>
    </div>
    <div class="borderportion">
        <div class="col-md-12">
            <div class="form-group required col-md-6" id="form-JamindarMobile1-error">
                {!! Form::label("JamindarMobile1","মোবাইল নং ",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarMobile1",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarMobile1-error" class="help-block"></span>
                </div>
            </div>


            <div class="form-group required col-md-6" id="form-JamindarEmail-error">
                {!! Form::label("JamindarEmail","ইমেইল",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::email("JamindarEmail",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarEmail-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarNid-error">
                {!! Form::label("JamindarNid","জাতীয় পরিচয় পত্র",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarNid",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarNid-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group required col-md-6" id="form-JamindarBusinessOrJobAddress-error">
                {!! Form::label("JamindarBusinessOrJobAddress","ব্যবসা বা চাকুরীর ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::textarea("JamindarBusinessOrJobAddress",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarBusinessOrJobAddress-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group required col-md-6" id="form-JamindarProfession1-error">
                {!! Form::label("JamindarProfession1","পেশা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarProfession1",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarProfession1-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group required col-md-6" id="form-JamindarMonthlyNetIncome-error">
                {!! Form::label("JamindarMonthlyNetIncome","মাসিক মোট আয়",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::number("JamindarMonthlyNetIncome",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarMonthlyNetIncome-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group required col-md-6" id="form-JamindarMonthlyNetExpences-error">
                {!! Form::label("JamindarMonthlyNetExpences","মাসিক মোট ব্যয়",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::number("JamindarMonthlyNetExpences",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarMonthlyNetExpences-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarMonthlyNetSurplus-error">
                {!! Form::label("JamindarMonthlyNetSurplus","মাসিক উদ্বৃত্ত",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::number("JamindarMonthlyNetSurplus",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarMonthlyNetSurplus-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarTotalNetMoney-error">
                {!! Form::label("JamindarTotalNetMoney","চলতি মূলধন ও স্থাবর সম্পদের মোট মূল্য(দায়-দেনা বাদে)",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::number("JamindarTotalNetMoney",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarTotalNetMoney-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarSocialStatus-error">
                {!! Form::label("JamindarSocialStatus","সামাজিক অবস্থা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("JamindarSocialStatus",null,["class"=>"form-control required"]) !!}
                    <span id="JamindarSocialStatus-error" class="help-block"></span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('jamindar/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Preview",["type" => "submit","class"=>"btn
    btn-primary"])!!}
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
        btn-primary"])!!}
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
                        index = $(this).attr('JamindarFirstName');
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