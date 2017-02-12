<div class="col-md-12 borderportion">
    <div class="form-group required col-md-12" id="form-photo-error">
        <?php
        if(!empty($userstimf->photo))
        {
        ?>

        <img src="uploads/{{$userstimf->photo}}">
        <?php
        }
        ?>
    </div>
    <div class="form-group required col-md-12" id="form-photo-error">
        {!! Form::label("photo","ছবি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::file("photo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="photo-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="col-md-12 borderportion">
    <div class="form-group required col-md-4" id="form-employee_id-error">
        {!! Form::label("employee_id","কর্মকর্তা/কর্মচারী আইডি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("employee_id",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="employee_id-error" class="help-block"></span>
        </div>
    </div>
    {{--<div class="form-group required col-md-4" id="form-employee_code-error">--}}
        {{--{!! Form::label("employee_code","কর্মকর্তা/কর্মচারী কোড",["class"=>"control-label col-md-12"]) !!}--}}
        {{--<div class="col-md-12">--}}
            {{--{!! Form::text("employee_code",null,["class"=>"form-control required","id"=>"focus"]) !!}--}}
            {{--<span id="employee_code-error" class="help-block"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group required col-md-4" id="form-employee_firstname-error">
        {!! Form::label("employee_firstname","নামের প্রথম অংশ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("employee_firstname",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="employee_firstname-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-employee_lastname-error">
        {!! Form::label("employee_lastname","নামের দ্বিতীয় অংশ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("employee_lastname",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="employee_lastname-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-8" id="form-designation-error">
        {!! Form::label("designation","পদবী",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-6">
            <select name="designation">
                @foreach($designations as $designation )
                    <option value="{{$designation->id}}">{{$designation->designation}}</option>
                @endforeach
            </select>
        <!-- {!! Form::text("designation",null,["class"=>"form-control required","id"=>"focus"]) !!} -->
            <span id="designation-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-8" id="form-RollType-error">
        {!! Form::label("RollType","রোল",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-6">
        {!! Form::select("RollType",$RollCategory,null,["class"=>"form-control RollType required","id"=>"RollType"]) !!}
        <!-- {!! Form::text("RollType",null,["class"=>"form-control RollType required","id"=>"RollType"]) !!} -->
            <span id="RollType-error" class="help-block"></span>
        </div>
    </div>
    {{--<div class="form-group required col-md-4" id="form-ZoneID-error">--}}
        {{--{!! Form::label("ZoneID","জোন",["class"=>"control-label col-md-12"]) !!}--}}
        {{--<div class="col-md-12">--}}
            {{--<select name="ZoneID" class="ZoneId" id="ZoneId">--}}
                {{--@foreach($zones as $zones12 )--}}
                    {{--<option value="{{$zones12->id}}">{{$zones12->ZoneName}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
            {{--<span id="ZoneID-error" class="help-block"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group required col-md-4" id="form-AreaID-error">--}}
        {{--{!! Form::label("AreaID","এরিয়া",["class"=>"control-label col-md-12"]) !!}--}}
        {{--<div class="col-md-12">--}}
            {{--<select name="AreaID" class="AreaId" id="AreaId">--}}
                {{--@foreach($areas as $areas12 )--}}
                    {{--<option value="{{$areas12->id}}">{{$areas12->AreaName}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
            {{--<span id="AreaID-error" class="help-block"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group required col-md-4" id="form-office_id-error">--}}
        {{--{!! Form::label("office_id","অফিস আইডি",["class"=>"control-label col-md-12"]) !!}--}}
        {{--<div class="col-md-12">--}}
            {{--{!! Form::select("office_id",$BranchInfo,null,["class"=>"form-control office_id required","id"=>"office_id"]) !!}--}}
            {{--<span id="office_id-error" class="help-block"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group required col-md-4" id="form-SamityID-error">
        {!! Form::label("SamityID","সমিতি আইডি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("SamityID",$SamityInfo,null,["class"=>"form-control SamityID required","id"=>"SamityID"]) !!}
            <span id="SamityID-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-address-error">
        {!! Form::label("address","ঠিকানা",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::textarea("address",null,["class"=>"form-control address required","id"=>"address"]) !!}
            <span id="address-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-phone1-error">
        {!! Form::label("phone1","ফোন নাম্বার ১",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("phone1",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="phone1-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-phone2-error">
        {!! Form::label("phone2","ফোন নাম্বার ২",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("phone2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="phone2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-email-error">
        {!! Form::label("email","ইমেইল",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::email("email",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="email-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-altemail-error">
        {!! Form::label("altemail","বিকল্প ইমেইল",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::email("altemail",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="altemail-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-gender-error">
        {!! Form::label("gender","জেন্ডার",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-12">
            <select name="gender">
                @foreach($GenderInfo as $GenderInfoData )
                    <option value="{{$GenderInfoData->id}}">{{$GenderInfoData->GenderName}}</option>
                @endforeach
            </select>
            <span id="gender-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-status-error">
        {!! Form::label("status","স্ট্যাটাস",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-12">
            {!! Form::textarea("status",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="status-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-birthdate-error">
        {!! Form::label("birthdate","জন্ম তারিখ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("birthdate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="birthdate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-joiningdate-error">
        {!! Form::label("joiningdate","যোগদানের তারিখ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("joiningdate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="joiningdate-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-4" id="form-releasedate-error">
        {!! Form::label("releasedate","রিলিজ তারিখ",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("releasedate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="releasedate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-username-error">
        {!! Form::label("username","ইউজার নাম",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("username",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="username-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-password12-error">
        {!! Form::label("password12","পাসওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::password("password12",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="password12-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-password122-error">
        {!! Form::label("password122","কনফার্ম পাসওয়ার্ড",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::password("password122",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="password122-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-comment-error">
        {!! Form::label("comment","মন্তব্য",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("comment",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="comment-error" class="help-block"></span>
        </div>
    </div>

    <div class="form-group required col-md-4" id="form-IsActiveDate-error">
        {!! Form::label("IsActiveDate","সক্রিয়তা",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            <select name="IsActiveDate">
                @foreach($StatusInfo as $StatusInfoData )
                    <option value="{{$StatusInfoData->id}}">{{$StatusInfoData->Status}}</option>
                @endforeach
            </select>
            <span id="IsActiveDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-org_id-error">
        {!! Form::label("org_id","প্রতিষ্ঠানের আইডি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("org_id",$OrganizationInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="org_id-error" class="help-block"></span>
        </div>
    </div>
<!-- <div class="form-group required col-md-6" id="form-createuser-error">
        {!! Form::label("createuser","",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("createuser",null,["class"=>"form-control required","id"=>"focus"]) !!}
        <span id="createuser-error" class="help-block"></span>
    </div>
</div> -->
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('userstimf/list')" class="btn btn-danger"><i
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

    $(document).ready(function () {

        $(document).on('change', '.ZoneId', function () {
            //console.log("yes it is change");

            var op = " ";
            var ZoneId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#AreaId').empty();
            $.ajax({
                type: 'get',
                url: 'getArea',
                data: {'id': ZoneId},
                success: function (data) {
                    $.each(data, function (index, subcatObjArea) {
                        $('#AreaId').append('<option value="'+subcatObjArea.id+'">'+subcatObjArea.AreaName +'</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.AreaId', function () {
            //console.log("yes it is change");

            var op = " ";
            var AreaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#office_id').empty();
            $.ajax({
                type: 'get',
                url: 'getBranch',
                data: {'id': AreaId},
                success: function (data) {
                    $.each(data, function (index, subcatObjbranch) {
                        $('#office_id').append('<option value="'+subcatObjbranch.id+'">'+subcatObjbranch.BranchName+'->'+subcatObjbranch.id+'</option>')
                    });
                },
                error: function () {

                }
            });
        });
        $(document).on('change', '.office_id', function () {
            //console.log("yes it is change");

            var op = " ";
            var office_id = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#SamityID').empty();
            $.ajax({
                type: 'get',
                url: 'getSamity',
                data: {'id': office_id},
                success: function (data) {
                    $.each(data, function (index, subcatObjSamity) {
                        $('#SamityID').append('<option value="'+subcatObjSamity.id+'">('+subcatObjSamity.id+')->'+subcatObjSamity.SomitiName+'</option>')
                    });
                },
                error: function () {

                }
            });
        });

    });
</script>