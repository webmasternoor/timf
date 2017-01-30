<div class="col-md-12 organizationpanel">
    <div class="col-md-12">
        <div class="form-group required col-md-12" id="form-ProductCode-error">
            {!! Form::label("ProductCode","প্রোডাক্ট কোডঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ProductCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ProductCode-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
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
        <div class="form-group required col-md-4" id="form-ProductType-error">
            {!! Form::label("ProductType"," প্রোডাক্টের ধরণ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ProductType",['1' => 'By Moazzal', '2' => 'By Mudaraba', '3' => 'By TMSS'])!!}
                <span id="ProductType-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-ServiceChargeRate-error">
            {!! Form::label("ServiceChargeRate","সার্ভিস চার্জ রেট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("ServiceChargeRate",null,["class"=>"form-control required"]) !!}
                <span id="ServiceChargeRate-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-Duration-error">
            {!! Form::label("Duration","মেয়াদ(মাস)",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("Duration",null,["class"=>"form-control required"]) !!}
                <span id="Duration-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-6" id="form-MainProductName-error">
            {!! Form::label("MainProductName","মেইন প্রোডাক্টের নাম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("MainProductName",null,["class"=>"form-control required"]) !!}
                <span id="MainProductName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-MainItemName-error">
            {!! Form::label("MainItemName","মেইন আইটেম নাম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("MainItemName",null,["class"=>"form-control required"]) !!}
                <span id="MainItemName-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-LoanInstallation-error">
            {!! Form::label("LoanInstallation","ঋণ কিস্তি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("LoanInstallation",null,["class"=>"form-control required"]) !!}
                <span id="LoanInstallation-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-InstallationServiceCharge-error">
            {!! Form::label("InstallationServiceCharge","কিস্তির সার্ভিস চার্জ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("InstallationServiceCharge",null,["class"=>"form-control required"]) !!}
                <span id="InstallationServiceCharge-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-SavingInstallment-error">
            {!! Form::label("SavingInstallment","সঞ্চয় কিস্তি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("SavingInstallment",null,["class"=>"form-control required"]) !!}
                <span id="SavingInstallment-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MinimumLimit-error">
            {!! Form::label("MinimumLimit","সর্বনিম্ন সীমা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MinimumLimit",null,["class"=>"form-control required"]) !!}
                <span id="MinimumLimit-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MaximumLimit-error">
            {!! Form::label("MaximumLimit","সর্বোচ্চ সীমা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MaximumLimit",null,["class"=>"form-control required"]) !!}
                <span id="MaximumLimit-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-ServiceChargeCalculationMethod-error">
            {!! Form::label("ServiceChargeCalculationMethod","সার্ভিস চার্জ হিসাবের পদ্ধতি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ServiceChargeCalculationMethod",['1' => 'Flate', '2' => 'Diclined'])!!}
                <span id="ServiceChargeCalculationMethod-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-PaymentFrequency-error">
            {!! Form::label("PaymentFrequency","পেমেন্ট ফ্রিকুয়েন্সি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("PaymentFrequency",['1' => 'Weekly', '2' => 'Monthly', '3' => 'Monthly'])!!}
                <span id="PaymentFrequency-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-InsuranceItemCode-error">
            {!! Form::label("InsuranceItemCode","ইন্সুরেন্স আইটেম কোড",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("InsuranceItemCode",null,["class"=>"form-control required"]) !!}
                <span id="InsuranceItemCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-InsuranceItemRate-error">
            {!! Form::label("InsuranceItemRate","ইন্সুরেন্স আইটেম রেট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("InsuranceItemRate",null,["class"=>"form-control required"]) !!}
                <span id="InsuranceItemRate-error" class="help-block"></span>
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
</script>