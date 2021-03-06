<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-ProductId-error">
        {!! Form::label("ProductId","প্রোডাক্ট আইডি",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::select("ProductId",$Product_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="ProductId-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-Memberid-error">
        {!! Form::label("Memberid","সদস্য আইডি",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::number("Memberid",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Memberid-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SavingAmount-error">
        {!! Form::label("SavingAmount","সঞ্চয় টাকা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("SavingAmount",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="SavingAmount-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-TransactionDate-error">
        {!! Form::label("TransactionDate","পরিশোধের তারিখ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::date("TransactionDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TransactionDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-TransactionEntryDate-error">
        {!! Form::label("TransactionEntryDate","এন্ট্রির তারিখ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::date("TransactionEntryDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TransactionEntryDate-error" class="help-block"></span>
        </div>
    </div>

</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('investment/list')" class="btn btn-danger"><i
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