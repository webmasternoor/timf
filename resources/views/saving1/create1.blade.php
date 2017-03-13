<h2 class="page-header">নতুন সঞ্চয় যোগ করুন</h2>
{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}
<div class="col-sm-12 form-group">
    <div class="form-group required col-md-6" id="form-SamityId-error">
        {!! Form::label("SamityId","সমিতি আইডি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("SamityId",$SamityId,null,["class"=>"form-control SamityId required","id"=>"SamityId"]) !!}
            <span id="SamityId-error" class="help-block"></span>
        </div>
    </div>
</div>
@include("saving1._form1")
{!! Form::close() !!}

<script>
    $(document).ready(function () {
        $(document).on('change', '.SamityId', function () {
            //console.log("yes it is change");

            var op = " ";
            var MemberId = $(this).val();
            var balance1 = 0;
            $.ajax({
                type: 'get',
                url: 'getSchedule',
                data: {'id': MemberId},
                success: function (data) {
                    $.each(data, function (index, subcatObj3p) {
                        var num=subcatObj3p.Balance;
                        balance1 = num.toString();
                        document.getElementById('Currentbalance').value = balance1;
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
            document.getElementById("MemberId").reset();
        });
    });
</script>