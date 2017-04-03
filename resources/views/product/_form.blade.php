<div class="col-md-12 organizationpanel">
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-12" id="form-ProductCode-error">
            {!! Form::label("ProductCode","প্রোডাক্ট কোডঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ProductCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ProductCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-12" id="form-ProductID-error">
            {!! Form::label("ProductID","প্রোডাক্ট আইডি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ProductID",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ProductID-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-6" id="form-ProductName-error">
            {!! Form::label("ProductName","প্রোডাক্টের নামঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ProductName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ProductName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ProductNameEng-error">
            {!! Form::label("ProductNameEng","প্রোডাক্টের নাম(ইংরেজি)",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ProductNameEng",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ProductNameEng-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ProductNameBanglaShort-error">
            {!! Form::label("ProductNameBanglaShort","প্রোডাক্টের বাংলা নাম(সংক্ষিপ্ত)",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ProductNameBanglaShort",null,["class"=>"form-control required"]) !!}
                <span id="ProductNameBanglaShort-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ProductNameBanglaFull-error">
            {!! Form::label("ProductNameBanglaFull","প্রোডাক্টের বাংলা নাম(পূর্ণ)",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ProductNameBanglaFull",null,["class"=>"form-control required"]) !!}
                <span id="ProductNameBanglaFull-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        {{--<div class="form-group required col-md-4" id="form-ProductType-error">--}}
        {{--{!! Form::label("ProductType"," প্রোডাক্টের ধরণ",["class"=>"control-label col-md-12"]) !!}--}}
        {{--<div class="col-md-12">--}}
        {{--{!! Form::select("ProductType",$ProductInfo,null,["class"=>"form-control ProductType required","id"=>"ProductType"]) !!}--}}
        {{--<span id="ProductType-error" class="help-block"></span>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="form-group required col-md-4" id="form-InterestPercentage-error">
            {!! Form::label("InterestPercentage","শতকরা মুনাফার হার",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12" id="InterestPercentage">
                {!! Form::number("InterestPercentage",null,["class"=>"form-control InterestPercentage required","id"=>"InterestPercentage1"]) !!}
                <span id="InterestPercentage-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-Frequency-error">
            {!! Form::label("Frequency","পেমেন্ট ফ্রিকুয়েন্সি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("Frequency",$frequency,null,["class"=>"form-control Frequency required","id"=>"Frequency"]) !!}
                <span id="Frequency-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-Duration-error">
            {!! Form::label("Duration","মেয়াদ(বছর)",["class"=>"control-label  col-md-12"]) !!}
            <div class="col-md-12" id="Duration">
                {!! Form::number("Duration",null,["class"=>"form-control Duration required" ,"id"=>"Duration"]) !!}
                <span id="Duration-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-6" id="form-EffectiveFrom-error">
            {!! Form::label("EffectiveFrom","ইফেক্টিভ ফ্রোম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("EffectiveFrom",null,["class"=>"form-control required"]) !!}
                <span id="EffectiveFrom-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-EffectiveTo-error">
            {!! Form::label("EffectiveTo","ইফেক্টিভ টু",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("EffectiveTo",null,["class"=>"form-control required"]) !!}
                <span id="EffectiveTo-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-IsActive-error">
            {!! Form::label("IsActive","সক্রিয় কি না?",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("IsActive",$status,null,["class"=>"form-control IsActive required","id"=>"IsActive"]) !!}
                <span id="IsActive-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MultipleSavings-error">
            {!! Form::label("MultipleSavings","একের অধিক সঞ্চয়",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("MultipleSavings",$status,null,["class"=>"form-control MultipleSavings required","id"=>"MultipleSavings"]) !!}
                <span id="MultipleSavings-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-WithdrawlFacily-error">
            {!! Form::label("WithdrawlFacily","টাকা উত্তোলন সুবিধা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("WithdrawlFacily",$status,null,["class"=>"form-control WithdrawlFacily required","id"=>"WithdrawlFacily"]) !!}
                <span id="WithdrawlFacily-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-MinimumAmount-error">
            {!! Form::label("MinimumAmount","সর্বনিম্ন টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MinimumAmount",null,["class"=>"form-control required"]) !!}
                <span id="MinimumAmount-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MaximumAmount-error">
            {!! Form::label("MaximumAmount","সর্বোচ্চ টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MaximumAmount",null,["class"=>"form-control required"]) !!}
                <span id="MaximumAmount-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MinimumBalanceAmount-error">
            {!! Form::label("MinimumBalanceAmount","সর্বোনিম্ন ব্যালেন্সের পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MinimumBalanceAmount",null,["class"=>"form-control required"]) !!}
                <span id="MinimumBalanceAmount-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-MinimumBalanceAmountPercentage-error">
            {!! Form::label("MinimumBalanceAmountPercentage","শতকরা সর্বোনিম্ন ব্যালেন্সের পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MinimumBalanceAmountPercentage",null,["class"=>"form-control required"]) !!}
                <span id="MinimumBalanceAmountPercentage-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MaxDueCycle-error">
            {!! Form::label("MaxDueCycle","সর্বোচ্চ বাকীর সাইকেল",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MaxDueCycle",null,["class"=>"form-control required"]) !!}
                <span id="MaxDueCycle-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-PassBookAvailability-error">
            {!! Form::label("PassBookAvailability","পাশ বই প্রাপ্যতা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("PassBookAvailability",$status,null,["class"=>"form-control PassBookAvailability required","id"=>"PassBookAvailability"]) !!}
                <span id="PassBookAvailability-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-SpecialWithdrawFacility-error">
            {!! Form::label("SpecialWithdrawFacility","বিশেষ উত্তোলন সুবিধা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("SpecialWithdrawFacility",$status,null,["class"=>"form-control SpecialWithdrawFacility required","id"=>"SpecialWithdrawFacility"]) !!}
                <span id="SpecialWithdrawFacility-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-InvestmentAgainstSavings-error">
            {!! Form::label("InvestmentAgainstSavings","সঞ্চয়ের বিপরীতে বিনিয়োগের পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("InvestmentAgainstSavings",null,["class"=>"form-control required"]) !!}
                <span id="InvestmentAgainstSavings-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-PercentageofInvestmentAgainstSavings-error">
            {!! Form::label("PercentageofInvestmentAgainstSavings","সঞ্চয়ের বিপরীতে বিনিয়োগের হার(শতকরা)",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("PercentageofInvestmentAgainstSavings",null,["class"=>"form-control required"]) !!}
                <span id="PercentageofInvestmentAgainstSavings-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-AutomaticSchemeRenewal-error">
            {!! Form::label("AutomaticSchemeRenewal","স্বয়ংক্রিয় স্কিম নবায়ন",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("AutomaticSchemeRenewal",$status,null,["class"=>"form-control AutomaticSchemeRenewal required","id"=>"AutomaticSchemeRenewal"]) !!}
                <span id="AutomaticSchemeRenewal-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-DividedbyValue-error">
            {!! Form::label("DividedbyValue","ভাজোক টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("DividedbyValue",null,["class"=>"form-control required"]) !!}
                <span id="DividedbyValue-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MaxWithdrawLimitPerMonth-error">
            {!! Form::label("MaxWithdrawLimitPerMonth","প্রতিমাসে টাকা উত্তোলনের সর্বোচ্চ সীমা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MaxWithdrawLimitPerMonth",null,["class"=>"form-control required"]) !!}
                <span id="MaxWithdrawLimitPerMonth-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-MaxWithdrawTimeforAvoidingPenaltyPerMonth-error">
            {!! Form::label("MaxWithdrawTimeforAvoidingPenaltyPerMonth","প্রতিমাসে জরিমানা ব্যাতিত টাকা উত্তোলনের সর্বোচ্চ সীমা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MaxWithdrawTimeforAvoidingPenaltyPerMonth",null,["class"=>"form-control required"]) !!}
                <span id="MaxWithdrawTimeforAvoidingPenaltyPerMonth-error" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('product/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
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

    //    $(document).ready(function () {
    //        $(document).on('change', '.ProductType', function () {
    //            //console.log("yes it is change");
    //
    //            var ProductType = $(this).val();
    //            var div = $(this).parent();
    //            //console.log(DivisionId);
    //            $('#ServiceChargeRate').empty();
    //            $('#Duration').empty();
    //            $.ajax({
    //                type: 'get',
    //                url: 'getProductInfo',
    //                data: {'id': ProductType},
    //                success: function (data) {
    //                    $.each(data, function (index, subcatObj) {
    //                        $('#ServiceChargeRate').append('<input type="text" class="form-control" readonly name="ServiceChargeRate" value="'+subcatObj.ProductRate+'">');
    //                        $('#Duration').append('<input type="text" class="form-control" readonly name="Duration" value="'+subcatObj.ProductInstallments+'">')
    //                    });
    //                },
    //                error: function () {
    //
    //                }
    //            });
    //        });
    //    });
</script>