<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-DivisionId-error">
        {!! Form::label("DivisionId","বিভাগের নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DivisionId",$DivisionInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="DivisionId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-DistrictId-error">
        {!! Form::label("DistrictId","জেলা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("DistrictId",$DistrictInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="DistrictId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-ThanaId-error">
        {!! Form::label("ThanaId","থানার নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("ThanaId",$thana,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="ThanaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-PostofficeName-error">
        {!! Form::label("PostofficeName","পোষ্ট অফিস নাম",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("PostofficeName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="PostofficeName-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('postoffice/list')" class="btn btn-danger"><i
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