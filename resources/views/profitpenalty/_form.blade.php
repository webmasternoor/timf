<div class="col-md-12 organizationpanel">
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-6" id="form-ProductID-error">
            {!! Form::label("ProductID","প্রোডাক্টের নাম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ProductID",$ProductInfo,null,["class"=>"form-control FiscalPeriodEndsMonth required","id"=>"FiscalPeriodEndsMonth"]) !!}
                <span id="ProductID-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ServiceChargeCalculationMethod-error">
            {!! Form::label("ServiceChargeCalculationMethod","সার্ভিস চার্জ হিসাবের পদ্ধতি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ServiceChargeCalculationMethod",$Methode,null,["class"=>"form-control FiscalPeriodEndsMonth required","id"=>"FiscalPeriodEndsMonth"]) !!}
                <span id="ServiceChargeCalculationMethod-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-6" id="form-ServiceChargeCalculationDuration-error">
            {!! Form::label("ServiceChargeCalculationDuration","সার্ভিস চার্জ হিসাবের মেয়াদ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ServiceChargeCalculationDuration",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ServiceChargeCalculationDuration-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-LoanExpirayMemberEligibleforSavingsProfit-error">
            {!! Form::label("LoanExpirayMemberEligibleforSavingsProfit","ঋণ খেলাপির সঞ্চয় মুনাফা প্রাপ্তির সুবিধা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("LoanExpirayMemberEligibleforSavingsProfit",$status,null,["class"=>"form-control FiscalPeriodEndsMonth required","id"=>"FiscalPeriodEndsMonth"]) !!}
                <span id="LoanExpirayMemberEligibleforSavingsProfit-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-6" id="form-FiscalPeriodStartsMonth-error">
            {!! Form::label("FiscalPeriodStartsMonth","অর্থ বছর শুরু(মাস)",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("FiscalPeriodStartsMonth",null,["class"=>"form-control required"]) !!}
                <span id="FiscalPeriodStartsMonth-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-FiscalPeriodEndsMonth-error">
            {!! Form::label("FiscalPeriodEndsMonth","অর্থ বছর শেষ(মাস)",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("FiscalPeriodEndsMonth",null,["class"=>"form-control required"]) !!}
                <span id="FiscalPeriodEndsMonth-error" class="help-block"></span>
            </div>
        </div>

    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-6" id="form-ServiceChargeRate-error">
            {!! Form::label("ServiceChargeRate","সার্ভিস চার্জ রেট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12" id="ServiceChargeRate">
                {!! Form::number("ServiceChargeRate",null,["class"=>"form-control ServiceChargeRate required","id"=>"ServiceChargeRate1"]) !!}
                <span id="ServiceChargeRate-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-EffectiveFormula-error">
            {!! Form::label("EffectiveFormula","ইফেক্টিভ ফর্মুলা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("EffectiveFormula",null,["class"=>"form-control required"]) !!}
                <span id="EffectiveFormula-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-RulesEffectiveFrom-error">
            {!! Form::label("RulesEffectiveFrom","ইফেক্টিভ ফ্রোম",["class"=>"control-label  col-md-12"]) !!}
            <div class="col-md-12" id="RulesEffectiveFrom">
                {!! Form::number("RulesEffectiveFrom",null,["class"=>"form-control RulesEffectiveFrom required" ,"id"=>"RulesEffectiveFrom"]) !!}
                <span id="RulesEffectiveFrom-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-RulesEffectiveTo-error">
            {!! Form::label("RulesEffectiveTo","ইফেক্টিভ টু",["class"=>"control-label  col-md-12"]) !!}
            <div class="col-md-12" id="RulesEffectiveTo">
                {!! Form::number("RulesEffectiveTo",null,["class"=>"form-control RulesEffectiveTo required" ,"id"=>"RulesEffectiveTo"]) !!}
                <span id="RulesEffectiveTo-error" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('profitpenalty/list')" class="btn btn-danger"><i
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