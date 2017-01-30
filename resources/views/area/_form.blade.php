
<div class="col-md-12">
    <div class="form-group required col-md-6" id="form-ZoneId-error">
        {!! Form::label("ZoneId","জোন",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
           {{--<select name="ZoneId">--}}
               {{--@foreach($data as $d )--}}
                   {{--<option value="{{$d->id}}">{{$d->ZoneName}}</option>--}}
               {{--@endforeach--}}
           {{--</select>--}}
            {!! Form::select("ZoneId",$Zone_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="ZoneId-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-6" id="form-AreaName-error">
        {!! Form::label("AreaName","এরিয়া",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("AreaName",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaName-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaCode-error">
        {!! Form::label("AreaCode","এরিয়া কোড",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">

            {!! Form::text("AreaCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaCode-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaAddress-error">
        {!! Form::label("AreaAddress","ঠিকানা",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::textarea("AreaAddress",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaAddress-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaMobileNo-error">
        {!! Form::label("AreaMobileNo","মোবাইল নং",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("AreaMobileNo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaMobileNo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaEmail-error">
        {!! Form::label("AreaEmail","ইমেইল আইডি",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::email("AreaEmail",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaEmail-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaThanaId-error">
        {!! Form::label("AreaThanaId","থানার নাম",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("AreaThanaId",$thana_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaThanaId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-AreaDistrictId-error">
        {!! Form::label("AreaDistrictId","জেলার নাম",["class"=>"control-label test col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("AreaDistrictId",$district_info,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="AreaDistrictId-error" class="help-block"></span>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('area/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        <?php if(!empty($area1[1]->ZoneName))
            echo $area1[1]->ZoneName;
        ?>
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