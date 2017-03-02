<div class="col-md-12">

    <div class="tab-pane active">
        <div class="borderportion">
            <div class="form-group col-md-6" id="form-productname1-error">
                {!! Form::label("productname1","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("productname1",$product,["class"=>"form-control required"]) !!}
                    <span id="productname1-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group col-md-6" id="form-accountnumber1-error">
                {!! Form::label("accountnumber1","হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("accountnumber1",null,["class"=>"form-control required"]) !!}
                    <span id="accountnumber1-error" class="help-block"></span>
                </div>
            </div>
        </div>
        <div class="borderportion">
            <div class="form-group col-md-6" id="form-productname2-error">
                {!! Form::label("productname2","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("productname2",$product,["class"=>"form-control required"]) !!}
                    <span id="productname2-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group col-md-6" id="form-accountnumber2-error">
                {!! Form::label("accountnumber2","হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("accountnumber2",null,["class"=>"form-control required"]) !!}
                    <span id="accountnumber2-error" class="help-block"></span>
                </div>
            </div>
        </div>
        <div class="borderportion">
            <div class="form-group col-md-6" id="form-productname3-error">
                {!! Form::label("productname3","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("productname3",$product,["class"=>"form-control required"]) !!}
                    <span id="productname3-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group col-md-6" id="form-accountnumber3-error">
                {!! Form::label("accountnumber3","হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("accountnumber3",null,["class"=>"form-control required"]) !!}
                    <span id="accountnumber3-error" class="help-block"></span>
                </div>
            </div>
        </div>
        <div class="borderportion">
            <div class="form-group col-md-6" id="form-productname4-error">
                {!! Form::label("productname4","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("productname4",$product,["class"=>"form-control required"]) !!}
                    <span id="productname4-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group col-md-6" id="form-accountnumber4-error">
                {!! Form::label("accountnumber4","হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("accountnumber4",null,["class"=>"form-control required"]) !!}
                    <span id="accountnumber4-error" class="help-block"></span>
                </div>
            </div>
        </div>

        <div class="borderportion">
            <div class="form-group col-md-6" id="form-productname5-error">
                {!! Form::label("productname5","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::select("productname5",$product,["class"=>"form-control required"]) !!}
                    <span id="productname5-error" class="help-block"></span>
                </div>
            </div>
            <div class="form-group col-md-6" id="form-accountnumber5-error">
                {!! Form::label("accountnumber5","হিসাব নং",["class"=>"control-label col-md-12"]) !!}
                <div class="col-md-12">
                    {!! Form::text("accountnumber5",null,["class"=>"form-control required"]) !!}
                    <span id="accountnumber5-error" class="help-block"></span>
                </div>
            </div>
        </div>

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
</script>