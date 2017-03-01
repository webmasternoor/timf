<div class="col-md-12">
    <div class="form-group required col-md-4" id="form-MemberId-error">
        {!! Form::label("MemberId","সদস্য আইডি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {{--<select name="MemberId" id="" class="form-control">--}}
                {{--@foreach($Member_info as $members12)--}}
                    {{--<option value="{{$members12->id}}">{{$members12->FirstName}}&nbsp;{{$members12->lastName}}--}}
                        {{--&nbsp;{{$members12->FamilyName}}</option>--}}
                {{--@endforeach;--}}
            {{--</select>--}}
            {!! Form::select("MemberId",$Member_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-4" id="form-ProductId-error">
        {!! Form::label("ProductId","প্রোডাক্টের নাম",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("ProductId",$Product_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="ProductId-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-4" id="form-ActionType-error">
        {!! Form::label("ActionType","অ্যাকশন টাইপ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("IsActiveDate",[''=>'--select--','1'=>'Saving','2'=>'Withdraw'],["class"=>"form-control IsActiveDate required","id"=>"IsActiveDate"]) !!}
            <span id="ActionType-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-Amount-error">
        {!! Form::label("Amount","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("Amount",null,["class"=>"form-control Amount required","id"=>"Amount"]) !!}
            <span id="Amount-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-TransactionDate-error">
        {!! Form::label("TransactionDate","লেনদেনের তারিখ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("TransactionDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="TransactionDate-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-EntryDate-error">
        {!! Form::label("EntryDate","এন্ট্রি তারিখ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("EntryDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="EntryDate-error" class="help-block"></span>
        </div>
    </div>

</div>

<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('saving1/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
    </div>
</div>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
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
    $(function () {
        $("#WithdrawAmount").autocomplete({
            source: "autocomplete",
            minLength: 3,
            select: function (event, ui) {
                $('#data').val(ui.item.id);
                $('#WithdrawAmount').val(ui.item.value);
//                $('#search').hide();
            }
        });
    });
</script>