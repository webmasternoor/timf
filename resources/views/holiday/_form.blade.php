<div class="col-md-12">
    <div class="form-group borderportion">
        <div class="col-md-12">
            <h4></h4>
        </div>
        <div class="form-group required col-md-6" id="form-holidaytypes-error">
            {!! Form::label("holidaytypes","ছুটির ধরন",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("holidaytypes",$Holidaytype,null,["class"=>"form-control required","id"=>"holidaytypes"]) !!}
                <span id="holidaytypes-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-Description-error">
            {!! Form::label("Description","বর্ননা",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::textarea("Description",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="Description-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-SamityID_CenterID-error">
            {!! Form::label("SamityID_CenterID","সমিতি আইডি",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("SamityID_CenterID",$Samity,null,["class"=>"form-control required","id"=>"SamityID_CenterID"]) !!}
                <span id="SamityID_CenterID-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-HolidayyName-error">
            {!! Form::label("HolidayyName","ছুটির নাম",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::text("HolidayyName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="HolidayyName-error" class="help-block"></span>
            </div>
        </div>
        {{--<div class="form-group required col-md-6" id="form-SamityID_CenterID-error">--}}
            {{--{!! Form::label("SamityID_CenterID","সমিতি আইডি",["class"=>"control-label col-md-3"]) !!}--}}
            {{--<div class="col-md-6">--}}
                {{--{!! Form::number("SamityID_CenterID",null,["class"=>"form-control required","id"=>"focus"]) !!}--}}
                {{--<span id="SamityID_CenterID-error" class="help-block"></span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group required col-md-6" id="form-IsActive-error">--}}
            {{--{!! Form::label("IsActive","ছুটির সক্রিয়তা",["class"=>"control-label col-md-3"]) !!}--}}
            {{--<div class="col-md-6">--}}
                {{--{!! Form::number("IsActive",null,["class"=>"form-control required","id"=>"focus"]) !!}--}}
                {{--<span id="IsActive-error" class="help-block"></span>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

    <div class="form-group borderportion" id="generalHoliday">
        <div class="col-md-12">
            <h4>সাধারণ ছুটি</h4>
        </div>
        <div class="form-group required col-md-6" id="form-Holiday-error">
            {!! Form::label("Holiday","দিনের নাম",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::select("Holiday",$Days,null,["class"=>"form-control required","id"=>"Holiday"]) !!}
                <span id="Holiday-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-HolidayStartDate-error">
            {!! Form::label("HolidayStartDate","ছুটি শুরু হওয়ার তারিখ",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::date("HolidayStartDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="HolidayStartDate-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-HolidayEndDate-error">
            {!! Form::label("HolidayEndDate","ছুটি শেষ হওয়ার তারিখ",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::date("HolidayEndDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="HolidayEndDate-error" class="help-block"></span><span id="Holiday-error"
                                                                                class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="form-group borderportion" id="specialHoliday">
        <div class="col-md-12">
            <h4>বিশেষ ছুটি</h4>
        </div>
        <div class="form-group required col-md-6" id="form-SpecialHolidayStartDate-error">
            {!! Form::label("SpecialHolidayStartDate","তারিখ",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::date("SpecialHolidayStartDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="SpecialHolidayStartDate-error" class="help-block"></span><span id="Holiday-error"
                                                                                         class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-SpecialHolidayEndDate-error">
            {!! Form::label("SpecialHolidayEndDate","তারিখ",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::date("SpecialHolidayEndDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="SpecialHolidayEndDate-error" class="help-block"></span><span id="Holiday-error"
                                                                                       class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-HolidayDescription-error">
            {!! Form::label("HolidayDescription","বর্ননা",["class"=>"control-label col-md-3"]) !!}
            <div class="col-md-6">
                {!! Form::textarea("HolidayDescription",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="HolidayDescription-error" class="help-block"></span><span id="Holiday-error"
                                                                                    class="help-block"></span>
            </div>
        </div>
    </div>

</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('holiday/list')" class="btn btn-danger"><i
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
    $(document).ready(function () {
        //this calculates values automatically
        $("#holidaytypes").on("change", function () {
            var holidaytypes = document.getElementById('holidaytypes').value;
            if(holidaytypes==1)
            {
                $('#specialHoliday').hide();
                $('#generalHoliday').show();
            }
            else
            {
                $('#specialHoliday').show();
                $('#generalHoliday').hide();
            }
        });
    });
</script>