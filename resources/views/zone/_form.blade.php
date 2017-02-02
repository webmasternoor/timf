<div class="col-md-12">
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-ZoneName-error">
            {!! Form::label("ZoneName","জোন নাম",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneCode-error">
            {!! Form::label("ZoneCode","জোন কোড",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneAddress-error">
            {!! Form::label("ZoneAddress","ঠিকানা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::textarea("ZoneAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneAddress-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneMobileNo-error">
            {!! Form::label("ZoneMobileNo","মোবাইল নং",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("ZoneMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneMobileNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneEmail-error">
            {!! Form::label("ZoneEmail","ইমেইল আইডি",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::email("ZoneEmail",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneEmail-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-ZoneDivisionId-error">
            {!! Form::label("ZoneDivisionId","বিভাগ",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneDivisionId",$DivisionInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneDivisionId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-ZoneDistrictId-error">
            {!! Form::label("ZoneDistrictId","জেলা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneDistrictId",$district_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneDistrictId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-ZoneThanaId-error">
            {!! Form::label("ZoneThanaId","থানা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneThanaId",$ThanaInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneThanaId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneUnionId-error">
            {!! Form::label("ZoneUnionId","ইউনিয়ন",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneUnionId",$UnionInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneUnionId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZonePostOfficeId-error">
            {!! Form::label("ZonePostOfficeId","পোষ্ট অফিস",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZonePostOfficeId",$PostOfficeInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZonePostOfficeId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-ZoneWardId-error">
            {!! Form::label("ZoneWardId","ওয়ার্ড",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("ZoneWardId",$WardInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="ZoneWardId-error" class="help-block"></span>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('zone/list')" class="btn btn-danger"><i
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