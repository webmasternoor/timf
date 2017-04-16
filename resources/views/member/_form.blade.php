<div class="col-md-12">

    <div id="exTab2" class="">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#114" data-toggle="tab">TIMF সদস্যের ধরণ</a></li>
            <li class=""><a href="#111" data-toggle="tab">ব্যক্তিগত তথ্য</a></li>
            <li><a href="#12" data-toggle="tab">নমিনি ও ব্যাংক</a></li>
            {{--<li><a href="#4" data-toggle="tab">পারিবারিক তথ্য</a></li>--}}
            {{--<li><a href="#5" data-toggle="tab">বিনিয়োগ সংক্রান্ত</a></li>--}}
            <li><a href="#13" data-toggle="tab">ব্যবসায়িক তথ্য</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="114">
                <div class="borderportion">
                    <div class="form-group col-md-4" id="form-SamityName-error">
                        {!! Form::label("SamityName","সমিতির নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("SamityName",$SamityName,null,["class"=>"form-control tt SamityName required","id"=>"SamityName"]) !!}
                            <span id="SamityName-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" id="form-MemberType-error">
                        {!! Form::label("MemberType","সদস্যের ধরণ",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--{!! Form::select("MemberType",['1' => 'পাকা', '2' => 'সেমি পাকা'])!!}--}}
                            {!! Form::select("MemberType",$MemberType,null,["class"=>"form-control tt MemberType required","id"=>"MemberType"]) !!}
                            <span id="MemberType-error" class="help-block"></span>
                        </div>
                    </div>
                    {{--<div class="form-group col-md-4" id="form-SavingTypes-error">--}}
                        {{--{!! Form::label("SavingTypes","সঞ্চয়ের ধরণ",["class"=>"control-label col-md-12"]) !!}--}}
                        {{--<div class="col-md-12">--}}
                            {{--{!! Form::select("SavingTypes",['1' => 'পাকা', '2' => 'সেমি পাকা'])!!}--}}
                            {{--{!! Form::select("SavingTypes",$SavingTypes,null,["class"=>"form-control tt SavingTypes required","id"=>"SavingTypes"]) !!}--}}
                            {{--<span id="SavingTypes-error" class="help-block"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group col-md-4" id="form-SavingPolicy-error">--}}
                        {{--{!! Form::label("SavingPolicy","সঞ্চয় Policy",["class"=>"control-label col-md-12"]) !!}--}}
                        {{--<div class="col-md-12">--}}
                            {{--{!! Form::select("SavingPolicy",['1' => 'পাকা', '2' => 'সেমি পাকা'])!!}--}}
                            {{--{!! Form::select("SavingPolicy",$SavingPolicy,null,["class"=>"form-control tt SavingPolicy required","id"=>"SavingPolicy"]) !!}--}}
                            {{--<span id="SavingPolicy-error" class="help-block"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>

            <div class="tab-pane" id="111">
                <div class="borderportion">
                    <div class="box-header col-md-11">
                        <h5 class="text-aqua"><u>ছবি আপলোড করুন</u></h5>
                    </div>
                    <div class="form-group required col-md-12" id="form-photo-error">
                        <?php
                        if(!empty($member->MemberImage))
                        {
                        ?>

                        <img src="uploads/{{$member->MemberImage}}" width="60" height="60">
                        <?php
                        }
                        ?>
                    </div>
                    <div class="form-group col-md-6" id="form-MemberImage-error">
                        {!! Form::label("MemberImage","সদস্যের ছবি",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::file("MemberImage",null,["class"=>"form-control required"]) !!}
                            <span id="MemberImage-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-12" id="form-photo-error">
                        <?php
                        if(!empty($member->FatherImage))
                        {
                        ?>

                        <img src="uploads/{{$member->FatherImage}}" width="60" height="60">
                        <?php
                        }
                        ?>
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
                            {!! Form::text("FatherNid",null,["class"=>"form-control required"]) !!}
                            <span id="FatherNid-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group required col-md-12" id="form-photo-error">
                        <?php
                        if(!empty($member->MotherImage))
                        {
                        ?>

                        <img src="uploads/{{$member->MotherImage}}" width="60" height="60">
                        <?php
                        }
                        ?>
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
                            {!! Form::text("MotherNid",null,["class"=>"form-control required"]) !!}
                            <span id="MotherNid-error" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="12">
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
                        <div class="form-group col-md-12" id="form-BankAddress-error">
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
                        <div class="form-group required col-md-12" id="form-photo-error">
                            <?php
                            if(!empty($member->NomineeImage))
                            {
                            ?>

                            <img src="uploads/{{$member->NomineeImage}}" width="70" height="70" width="60" height="60">
                            <?php
                            }
                            ?>
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

            <div class="tab-pane" id="13">
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
                            {!! Form::number("BusinessExperience",null,["class"=>"form-control required"]) !!}
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
                            {{--{!! Form::select("Accommodation",['1' => 'পাকা', '2' => 'সেমি পাকা'])!!}--}}
                            {!! Form::select("Accommodation",$Accommodation,null,["class"=>"form-control Accommodation required","id"=>"Accommodation"]) !!}
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
                            {!! Form::select("Direction",$Direction,null,["class"=>"form-control Direction required","id"=>"Direction"]) !!}
                            <span id="Direction-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-BusinessPlaceStatus-error">
                        {!! Form::label("BusinessPlaceStatus","ব্যবসার স্থান",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("BusinessPlaceStatus",$BusinessPlaceStatus,null,["class"=>"form-control BusinessPlaceStatus required","id"=>"BusinessPlaceStatus"]) !!}
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
                            {!! Form::select("LicenceIssuingAuthority",$Licenceauthority,null,["class"=>"form-control LicenceIssuingAuthority required","id"=>"LicenceIssuingAuthority"]) !!}
                            {{--{!! Form::select("LicenceIssuingAuthority",['1' => 'পৌরসভা', '2' => 'ইউনিয়ন','3'=>'সিটি কর্পোরেশন'])!!}--}}
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
                            {!! Form::select("OtherSources",$OtherSources,null,["class"=>"form-control OtherSources required","id"=>"OtherSources"]) !!}
                            {{--{!! Form::select("OtherSources",['1' => 'চাকুরী', '2' => 'অন্যত্র বিনিয়োগ','3'=>'জমি','4'=>'দোকান ভাড়া','5'=>'বাড়ী ভাড়া'])!!}--}}
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
                            {!! Form::select("BusinessType",$BusinessType,null,["class"=>"form-control BusinessType required","id"=>"BusinessType"]) !!}

                            {{--{!! Form::select("BusinessType",['1' => 'পাইকারী', '2' => 'খুচরা','3'=>'উৎপাদনকারী','4'=>'সরবরাহকারী','5'=>'প্রক্রিয়াজাতকারী','6'=>'কৃষি','7'=>'পরিবহণ'])!!}--}}
                            <span id="BusinessType-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-OwnershipType-error">
                        {!! Form::label("OwnershipType","মালিকানার ধরন",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {{--{!! Form::select("OwnershipType",['1' => 'একক', '2' => 'অংশীদারী'])!!}--}}
                            {!! Form::select("OwnershipType",$OwnershipType,null,["class"=>"form-control OwnershipType required","id"=>"OwnershipType"]) !!}
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
                            {!! Form::select("WeekEnd",$Weekend,null,["class"=>"form-control WeekEnd required","id"=>"WeekEnd"]) !!}

                            {{--{!! Form::select("WeekEnd",['1' => 'শনিবার', '2' => 'রবিবার','3'=>'সোমবার','4'=>'মঙ্গলবার','5'=>'বুধবার','6'=>'বৃহস্পতিবার','7'=>'শুক্রবার'])!!}--}}
                            <span id="WeekEnd-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-OrgPermanentEmployee-error">
                        {!! Form::label("OrgPermanentEmployee","প্রতিষ্ঠানে স্থায়ী জনবলের সংখ্যা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("OrgPermanentEmployee",$OrgPermanentEmployee,null,["class"=>"form-control OrgPermanentEmployee required","id"=>"OrgPermanentEmployee"]) !!}
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
                    <div class="form-group col-md-6" id="form-BusinessLeader-error">
                        {!! Form::label("BusinessLeader","ব্যবসা পরিচালনাকারী",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::select("BusinessLeader",$BusinessLeader,null,["class"=>"form-control BusinessLeader required","id"=>"BusinessLeader"]) !!}

                            {{--{!! Form::select("BusinessLeader",['1' => 'নিজে', '2' => 'সন্তান','3'=>'আত্মীয়','4'=>'কর্মচারী'])!!}--}}
                            <span id="BusinessLeader-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-MohajonName-error">
                        {!! Form::label("MohajonName","মহাজজনের নাম",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::text("MohajonName",null,["class"=>"form-control required"]) !!}
                            <span id="MohajonName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="form-MohajonAddress-error">
                        {!! Form::label("MohajonAddress","মহাজজনের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::textarea("MohajonAddress",null,["class"=>"form-control required"]) !!}
                            <span id="MohajonAddress-error" class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6" id="form-MohajonPhonOrMobileNo-error">
                        {!! Form::label("MohajonPhonOrMobileNo","ফোন/মোবাইল নং",["class"=>"control-label col-md-12"]) !!}
                        <div class="col-md-12">
                            {!! Form::number("MohajonPhonOrMobileNo",null,["class"=>"form-control required"]) !!}
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

</script>