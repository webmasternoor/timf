<div class="col-md-12 borderportion">
    <div class="form-group required col-md-3" id="form-employee_id-error">
        {!! Form::label("employee_id","Employee ID",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("employee_id",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="employee_id-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-3" id="form-employee_code-error">
        {!! Form::label("employee_code","Employee Code",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("employee_code",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="employee_code-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-3" id="form-employee_firstname-error">
        {!! Form::label("employee_firstname","Firstname",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("employee_firstname",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="employee_firstname-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-3" id="form-employee_lastname-error">
        {!! Form::label("employee_lastname","Lastname",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("employee_lastname",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="employee_lastname-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-office_id-error">
        {!! Form::label("office_id","Office ID",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            <select name="office_id">
                @foreach($branchs as $branch )
                    <option value="{{$branch->id}}">{{$branch->BranchName}}</option>
                @endforeach
            </select>
            <!-- {!! Form::text("office_id",null,["class"=>"form-control required","id"=>"focus"]) !!} -->
            <span id="office_id-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-designation-error">
        {!! Form::label("designation","Designation",["class"=>"control-label col-md-3"]) !!}
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
    <div class="form-group required col-md-12" id="form-address-error">
        {!! Form::label("address","Address",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::textarea("address",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="address-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-3" id="form-phone1-error">
        {!! Form::label("phone1","Phone Number1",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("phone1",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="phone1-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-3" id="form-phone2-error">
        {!! Form::label("phone2","Phone Number2",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("phone2",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="phone2-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-3" id="form-email-error">
        {!! Form::label("email","Email",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::email("email",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="email-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-3" id="form-altemail-error">
        {!! Form::label("altemail","Alternate Email",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::email("altemail",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="altemail-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-gender-error">
        {!! Form::label("gender","Gender",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("gender",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="gender-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-status-error">
        {!! Form::label("status","Status",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("status",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="status-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-joiningdate-error">
        {!! Form::label("joiningdate","Joining Date",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("joiningdate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="joiningdate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-birthdate-error">
        {!! Form::label("birthdate","Birthdate",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("birthdate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="birthdate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-releasedate-error">
        {!! Form::label("releasedate","Release Date",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::date("releasedate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="releasedate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-username-error">
        {!! Form::label("username","Username",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("username",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="username-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-password12-error">
        {!! Form::label("password12","Password",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("password12",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="password12-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-password122-error">
        {!! Form::label("password122","Confirm Password",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("password122",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="password122-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-comment-error">
        {!! Form::label("comment","Comment",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("comment",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="comment-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-photo-error">
        {!! Form::label("photo","Photo",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("photo",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="photo-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-4" id="form-IsActiveDate-error">
        {!! Form::label("IsActiveDate","Is Active",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::text("IsActiveDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="IsActiveDate-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-12" id="form-org_id-error">
        {!! Form::label("org_id","Organization ID",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-4">
            {!! Form::text("org_id",null,["class"=>"form-control required","id"=>"focus"]) !!}
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
</script>