

<div class="col-sm-7 form-group">
    <div class="input-group">
        {{--<input class="form-control" id="search1" value="{{ Session::get('saving1_search1') }}"--}}
               {{--placeholder="Search..."--}}
               {{--type="text">--}}
        <div class="form-group required col-md-6" id="form-SamityId-error">
            {!! Form::label("SamityId","সদস্য আইডি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("SamityId",$SamityId,null,["class"=>"form-control SamityId required","id"=>"SamityId"]) !!}
                <span id="SamityId-error" class="help-block"></span>
            </div>
        </div>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('saving1/_form1')}}?ok=1&search='+$('#SamityId').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-MemberId-error">
        {!! Form::label("MemberId","সদস্য আইডি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">

            {!! Form::select("MemberId",$Member_info,null,["class"=>"form-control MemberId required","id"=>"MemberId"]) !!}
            <span id="MemberId-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-ProductId-error">
        {!! Form::label("ProductId","প্রোডাক্টের নাম",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("ProductId",$Product_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="ProductId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-SavingAmount-error">
        {!! Form::label("SavingAmount","সঞ্চয়",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("SavingAmount",null,["class"=>"form-control SavingAmount required","id"=>"SavingAmount"]) !!}
            <span id="SavingAmount-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-WithdrawAmount-error">
        {!! Form::label("WithdrawAmount","উত্তোলন",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("WithdrawAmount",null,["class"=>"form-control WithdrawAmount required","id"=>"WithdrawAmount"]) !!}
            <span id="WithdrawAmount-error" class="help-block"></span>
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
    <div class="form-group required col-md-6" id="form-Flag-error">
        {!! Form::label("Flag","ফ্ল্যাগ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("Flag",['1','2','3'],["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Flag-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-12" id="form-Remarks-error">
        {!! Form::label("Remarks","রিমার্ক",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::textarea("Remarks",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Remarks-error" class="help-block"></span>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
    //    $(function () {
    //        $("#WithdrawAmount").autocomplete({
    //            source: "autocomplete",
    //            minLength: 3,
    //            select: function (event, ui) {
    //                $('#data').val(ui.item.id);
    //                $('#WithdrawAmount').val(ui.item.value);
    ////                $('#search').hide();
    //            }
    //        });
    //    });
//        $(document).ready(function () {
//            $(document).on('change', '.MemberId', function () {
//                //console.log("yes it is change");
//
//                var op = " ";
//                var MemberId = $(this).val();
//                var balance1 = 0;
//                $('#Currentbalance').empty();
//                $.ajax({
//                    type: 'get',
//                    url: 'getBalance',
//                    data: {'id': MemberId},
//                    success: function (data) {
//                        $.each(data, function (index, subcatObj3p) {
//                           var num=subcatObj3p.Balance;
//                            balance1 = num.toString();
//                            document.getElementById('Currentbalance').value = balance1;
//                        });
//                    },
//                    error: function () {
//
//                    }
//                });
//                $.ajax(clear);
//                document.getElementById("MemberId").reset();
//            });
//        });
    //    $(document).ready(function () {
    //        //this calculates values automatically
    //        CurrentBalance();
    //        $("#SavingAmount, #WithdrawAmount,#Currentbalance").on("keydown keyup", function () {
    //            CurrentBalance();
    //        });
    //    });
    //
    //    function CurrentBalance() {
    //
    //        var SavingAmount = document.getElementById('SavingAmount').value;
    //        var WithdrawAmount = document.getElementById('WithdrawAmount').value;
    //        var Currentbalance = document.getElementById('Currentbalance').value;
    //
    //        var Total = parseFloat(Currentbalance)+parseFloat(SavingAmount);
    //        var TotalEarning = Total - parseFloat(WithdrawAmount);
    //        $('#Currentbalance').empty();
    //        if (!isNaN(TotalEarning)) {
    //            document.getElementById('Currentbalance').value = TotalEarning.toString();
    //        }
    //    }
</script>