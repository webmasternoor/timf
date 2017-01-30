<div class="col-md-12">
    {{--<div class="form-group required col-md-6" id="form-BranchId-error">--}}
        {{--{!! Form::label("BranchId","এরিয়া",["class"=>"control-label col-md-3"]) !!}--}}
        {{--<div class="col-md-6">--}}
            {{--{!! Form::select("BranchId",['1' => 'Pabna', '2' => 'Shujanagor', '3' => 'Chatmohor'])!!}--}}
            {{--<span id="BranchId-error" class="help-block"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group required col-md-6" id="form-AreaId-error">
        {!! Form::label("AreaId","এরিয়া",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("AreaId",$area,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchName-error">
        {!! Form::label("BranchName","শাখা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BranchName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchCode-error">
        {!! Form::label("BranchCode","শাখা কোড",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("BranchCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchCode-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchAddress-error">
        {!! Form::label("BranchAddress","ঠিকানা",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::textarea("BranchAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchAddress-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchMobileNo-error">
        {!! Form::label("BranchMobileNo","মোবাইল নং",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("BranchMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchMobileNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchEmail-error">
        {!! Form::label("BranchEmail","ইমেইল আইডি",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("BranchEmail",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchEmail-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchThanaId-error">
        {!! Form::label("BranchThanaId","থানার নাম",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("BranchThanaId",$thana_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchThanaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-BranchDistrictId-error">
        {!! Form::label("BranchDistrictId","জেলার নাম",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("BranchDistrictId",$district_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchDistrictId-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('brn/list')" class="btn btn-danger"><i
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