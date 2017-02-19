<div class="col-md-12">

    <div class="borderportion">
        <div class="box-header col-md-12">
            <h5 class="text-aqua"><u>তত্থবলী</u></h5>
        </div>

        <div class="col-md-12">

            <div class="form-group required col-md-3" id="form-JamindarNameTitle-error">
                {!! Form::label("JamindarNameTitle","টাইটেল:",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarNameTitle",$NameTitle,null,["class"=>"form-control JamindarNameTitle required","id"=>"JamindarNameTitle"]) !!}
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
                    {!! Form::select("JamindarAge",$Age,null,["class"=>"form-control JamindarAge required","id"=>"JamindarAge"]) !!}
                    <span id="JamindarAge-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group col-md-6" id="form-JamindarGender-error">
                {!! Form::label("JamindarGender","জেন্ডার",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarGender",$Gender,null,["class"=>"form-control JamindarGender required","id"=>"JamindarGender"]) !!}
                    <span id="JamindarGender-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group required col-md-4" id="form-JamindarEducation-error">
                {!! Form::label("JamindarEducation","শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarEducation",$Education,null,["class"=>"form-control JamindarEducation required","id"=>"JamindarEducation"]) !!}
                    <span id="JamindarEducation-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-JamindarPassingYear-error">
                {!! Form::label("JamindarPassingYear","পাশের বছর",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarPassingYear",$PassingYear,null,["class"=>"form-control JamindarPassingYear required","id"=>"JamindarPassingYear"]) !!}
                    <span id="JamindarPassingYear-error" class="help-block"></span>
                </div>
            </div>
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
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group required col-md-12" id="form-photo-error">
            <?php
            if(!empty($jamindar->Jamindarphoto))
            {
            ?>

            <img src="uploads/{{$jamindar->Jamindarphoto}}" width="70" height="70">
            <?php
            }
            ?>
        </div>
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
                {!! Form::select("FatherOrHasbandNAmeTitle",$NameTitle,null,["class"=>"form-control FatherOrHasbandNAmeTitle required","id"=>"FatherOrHasbandNAmeTitle"]) !!}
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
                {!! Form::select("FatherOrHasbandAge",$Age,null,["class"=>"form-control FatherOrHasbandAge required","id"=>"FatherOrHasbandAge"]) !!}
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
                {!! Form::select("JamindarMatherNameTitle",$NameTitle,null,["class"=>"form-control JamindarMatherNameTitle required","id"=>"JamindarMatherNameTitle"]) !!}
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
                {!! Form::select("JamindarMotherAge",$Age,null,["class"=>"form-control JamindarMotherAge required","id"=>"JamindarMotherAge"]) !!}
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
                    {!! Form::select("JamindarCountry",$Country,null,["class"=>"form-control JamindarCountry required","id"=>"JamindarCountry"]) !!}
                    <span id="JamindarCountry-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-DivisionId-error">
                {!! Form::label("DivisionId","বিভাগ",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarDivision",$Division,null,["class"=>"form-control DivisionId required","id"=>"DivisionId"]) !!}
                    <span id="DivisionId-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-DistrictId-error">
                {!! Form::label("DistrictId","জেলা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarDistrict",$District,null,["class"=>"form-control DistrictId required","id"=>"DistrictId"]) !!}
                    <span id="DistrictId-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-ThanaId-error">
                {!! Form::label("ThanaId","থানা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarThana",$Thana,null,["class"=>"form-control ThanaId required","id"=>"ThanaId"]) !!}
                    <span id="ThanaId-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-PostofficeId-error">
                {!! Form::label("PostofficeId","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarPostoffice",$PostOffice,null,["class"=>"form-control PostofficeId required","id"=>"PostofficeId"]) !!}
                    <span id="PostofficeId-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-UnionId-error">
                {!! Form::label("UnionId","ইউনিয়ন",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarUnion",$Union,null,["class"=>"form-control UnionId required","id"=>"UnionId"]) !!}
                    <span id="UnionId-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-WordId-error">
                {!! Form::label("WordId","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarWord",$Ward,null,["class"=>"form-control WordId required","id"=>"WordId"]) !!}
                    <span id="WordId-error" class="help-block"></span>
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
                    {!! Form::select("JamindarCountry1",$Country,null,["class"=>"form-control JamindarCountry1 required","id"=>"JamindarCountry1"]) !!}
                    <span id="JamindarCountry1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-Division1-error">
                {!! Form::label("Division1","বিভাগ",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarDivision1",$Division,null,["class"=>"form-control Division1 required","id"=>"Division1"]) !!}
                    <span id="Division1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-District1-error">
                {!! Form::label("District1","জেলা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarDistrict1",$District,null,["class"=>"form-control District1 required","id"=>"District1"]) !!}
                    <span id="District1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-Thana1-error">
                {!! Form::label("Thana1","থানা",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarThana1",$Thana,null,["class"=>"form-control Thana1 required","id"=>"Thana1"]) !!}
                    <span id="Thana1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-Postoffice1-error">
                {!! Form::label("Postoffice1","পোষ্ট অফিস",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarPostoffice1",$PostOffice,null,["class"=>"form-control Postoffice1 required","id"=>"Postoffice1"]) !!}
                    <span id="Postoffice1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-Union1-error">
                {!! Form::label("Union1","ইউনিয়ন",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarUnion1",$Union,null,["class"=>"form-control Union1 required","id"=>"Union1"]) !!}
                    <span id="Union1-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group required col-md-6" id="form-Word1-error">
                {!! Form::label("Word1","ওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("JamindarWord1",$Ward,null,["class"=>"form-control Word1 required","id"=>"Word1"]) !!}
                    <span id="Word1-error" class="help-block"></span>
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
                    {!! Form::select("JamindarProfession1",$Profession,null,["class"=>"form-control JamindarProfession1 required","id"=>"JamindarProfession1"]) !!}
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

    $(document).ready(function () {

//        $(document).on('change', '.ZoneId', function () {
//            //console.log("yes it is change");
//
//            var op = " ";
//            var ZoneId = $(this).val();
//            //var div = $(this).parent();
//            //console.log(DivisionId);
//            $('#AreaId').empty();
//            $('#AreaId1').empty();
//            $.ajax({
//                type: 'get',
//                url: 'getArea',
//                data: {'id': ZoneId},
//                success: function (data) {
//                    $.each(data, function (index, subcatObjArea) {
//                        $('#AreaId').append('<option value="'+subcatObjArea.id+'" >'+subcatObjArea.AreaName +'</option>')
//                    });
//                },
//                error: function () {
//
//                }
//            });
//        });
//        $(document).on('change', '.AreaId', function () {
//            //console.log("yes it is change");
//
//            var op = " ";
//            var AreaId = $(this).val();
//            //var div = $(this).parent();
//            //console.log(DivisionId);
//            $('#BranchId').empty();
//            $('#BranchId1').empty();
//            $.ajax({
//                type: 'get',
//                url: 'getBranch',
//                data: {'id': AreaId},
//                success: function (data) {
//                    $.each(data, function (index, subcatObjBranch) {
//                        $('#BranchId').append('<option value="'+subcatObjBranch.id+'">'+subcatObjBranch.BranchName +'</option>')
//                    });
//                },
//                error: function () {
//
//                }
//            });
//        });

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
            $.ajax(clear);
        });
        $(document).on('change', '.DistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var PresentDistrict = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#ThanaId').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': PresentDistrict},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#ThanaId').append('<option value="'+subcatObj1.id+'">'+subcatObj1.ThanaName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
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
            $.ajax(clear);
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
            $.ajax(clear);
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
            $.ajax(clear);
        });
        $(document).on('change', '.Division1', function () {
            //console.log("yes it is change");

            var op = " ";
            var Division1 = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#District1').empty();
            $.ajax({
                type: 'get',
                url: 'getDistrict',
                data: {'id': Division1},
                success: function (data) {
                    $.each(data, function (index, subcatObjp) {
                        $('#District1').append('<option value="'+subcatObjp.id+'">'+subcatObjp.DistrictName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });
        $(document).on('change', '.District1', function () {
            //console.log("yes it is change");

            var op = " ";
            var District1 = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#Thana1').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': District1},
                success: function (data) {
                    $.each(data, function (index, subcatObj1p) {
                        $('#Thana1').append('<option value="'+subcatObj1p.id+'">'+subcatObj1p.ThanaName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.Thana1', function () {
            //console.log("yes it is change");

            var op = " ";
            var ThanaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#Union1').empty();
            $.ajax({
                type: 'get',
                url: 'getUnion',
                data: {'id': ThanaId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2p) {
                        $('#Union1').append('<option value="'+subcatObj2p.id+'">'+subcatObj2p.UnionName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.Union1', function () {
            //console.log("yes it is change");

            var op = " ";
            var UnionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#Word1').empty();
            $.ajax({
                type: 'get',
                url: 'getWord',
                data: {'id': UnionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj3p) {
                        $('#Word1').append('<option value="'+subcatObj3p.id+'">'+subcatObj3p.WardName +'</option>')
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
        });

        $(document).on('change', '.District1', function () {
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
            $.ajax(clear);
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