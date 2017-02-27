<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-ProductID-error">
        {!! Form::label("ProductID","প্রোডাক্ট আইডি",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("ProductID",$ProductInfo,null,["class"=>"form-control ProductID required","id"=>"ProductID"]) !!}
            <span id="ProductID-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-InterestPercentage-error">
        {!! Form::label("InterestPercentage","মুনাফার হার",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("InterestPercentage",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="InterestPercentage-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-EffectiveFrom-error">
        {!! Form::label("EffectiveFrom","ইফেক্টিভ ফ্রোম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("EffectiveFrom",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="EffectiveFrom-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-EffectiveTo-error">
        {!! Form::label("EffectiveTo","ইফেক্টিভ টু",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("EffectiveTo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="EffectiveTo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-IsActive-error">
        {!! Form::label("IsActive","সক্রিয় কি - না?",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("IsActive",$StatusInfo,null,["class"=>"form-control IsActive required","id"=>"IsActive"]) !!}
            <span id="IsActive-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MultipleSavings-error">
        {!! Form::label("MultipleSavings","একের অধিক সঞ্চয় হবে কি?",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("MultipleSavings",$StatuserInfo,null,["class"=>"form-control MultipleSavings required","id"=>"MultipleSavings"]) !!}
            <span id="MultipleSavings-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-WithdrawlFacility-error">
        {!! Form::label("WithdrawlFacility","টাকা উত্তোলন",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("WithdrawlFacility",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="WithdrawlFacility-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MinAmount-error">
        {!! Form::label("MinAmount","সর্বোনিম্ন টাকার পরিমান",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("MinAmount",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MinAmount-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MaxAmount-error">
        {!! Form::label("MaxAmount","সর্বোচ্চ টাকার পরিমান",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("MaxAmount",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MaxAmount-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MinBalance-error">
        {!! Form::label("MinBalance","সর্বোনিম্ন ব্যালেন্স",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("MinBalance",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MinBalance-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-MaxDueCycle-error">
        {!! Form::label("MaxDueCycle","বাকীর সর্বোচ্চ আবর্ত",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("MaxDueCycle",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MaxDueCycle-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('configurationsav/list')" class="btn btn-danger"><i
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