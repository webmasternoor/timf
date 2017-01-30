<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-BranchId-error">
        {!! Form::label("BranchId","শাখার নাম",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("BranchId",$brn_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="BranchId-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-SomitiName-error">
        {!! Form::label("SomitiName","সমিতির নাম",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("SomitiName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SomitiName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SamitiOpenDate-error">
        {!! Form::label("SamitiOpenDate","সমিতির খোলার তারিখ",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("SamitiOpenDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SamitiOpenDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SamitiEndDate-error">
        {!! Form::label("SamitiEndDate","সমিতির বন্ধের তারিখ",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("SamitiEndDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SamitiEndDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SomitiCode-error">
        {!! Form::label("SomitiCode","সমিতির কোড",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("SomitiCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SomitiCode-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('zone1/list')" class="btn btn-danger"><i
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