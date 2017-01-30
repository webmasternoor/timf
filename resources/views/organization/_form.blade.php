<div class="col-md-12 organizationpanel">
    <div class="col-md-12">
        <div class="form-group required col-md-4" id="form-OrganizationCode-error">
            {!! Form::label("OrganizationCode","প্রতিষ্ঠানের আইডিঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                <!-- {!! Form::select("OrganizationCode",['001', '002', '003'])!!} -->
                {!! Form::text("OrganizationCode",null,["class"=>"form-control required"]) !!}
                <span id="OrganizationCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-OrganizationName-error">
            {!! Form::label("OrganizationName","প্রতিষ্ঠানের নামঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                <!-- {!! Form::select("OrganizationName",['1' => 'Brac', '2' => 'Proshika', '3' => 'Grameen Bank'])!!} -->
                {!! Form::text("OrganizationName",null,["class"=>"form-control required"]) !!}
                <span id="OrganizationName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-YearEndingDate-error">
            {!! Form::label("YearEndingDate","বছর সমাপ্তি তারিখঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("YearEndingDate",null,["class"=>"form-control required"]) !!}
                <span id="YearEndingDate-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-12" id="form-OrganizationAddress-error">
            {!! Form::label("OrganizationAddress","প্রতিষ্ঠানের ঠিকানা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::textarea("OrganizationAddress",null,["class"=>"form-control required"]) !!}
                <span id="OrganizationAddress-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <div class="form-group required col-md-4" id="form-CashBook-error">
            {!! Form::label("CashBook","ক্যাশ বুকঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("CashBook",null,["class"=>"form-control required"]) !!}
                <span id="CashBook-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-PLAccount-error">
            {!! Form::label("PLAccount","PL আকাউন্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("PLAccount",null,["class"=>"form-control required"]) !!}
                <span id="PLAccount-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-BankAccount-error">
            {!! Form::label("BankAccount","ব্যাংক আকাউন্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("BankAccount",null,["class"=>"form-control required"]) !!}
                <span id="BankAccount-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-PhoneNumber-error">
            {!! Form::label("PhoneNumber","ফোন নংঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("PhoneNumber",null,["class"=>"form-control required"]) !!}
                <span id="PhoneNumber-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-MobileNumber-error">
            {!! Form::label("MobileNumber","মোবাইল নংঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::number("MobileNumber",null,["class"=>"form-control required"]) !!}
                <span id="MobileNumber-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-EmailId-error">
            {!! Form::label("EmailId","ইমেইল আইডি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::email("EmailId",null,["class"=>"form-control required"]) !!}
                <span id="EmailId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-StartWorkingDay-error">
            {!! Form::label("StartWorkingDay","কার্যদিবস শুরুঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("StartWorkingDay",null,["class"=>"form-control required"]) !!}
                <span id="StartWorkingDay-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-WorkType-error">
            {!! Form::label("WorkType","কাজের ধরনঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("WorkType",['1' => 'Construction', '2' => 'Production', '3' => 'Transport'])!!}
                <span id="WorkType-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-LicenceNo-error">
            {!! Form::label("LicenceNo","লাইসেন্স নংঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("LicenceNo",null,["class"=>"form-control required"]) !!}
                <span id="LicenceNo-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-LicenceStartDate-error">
            {!! Form::label("LicenceStartDate","লাইসেন্স শুরুর তারিখঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("LicenceStartDate",null,["class"=>"form-control required"]) !!}
                <span id="LicenceStartDate-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-4" id="form-LicenceValidityEndingDate-error">
            {!! Form::label("LicenceValidityEndingDate","লাইসেন্সের মেয়াদ শেষ হওয়ার তারিখঃ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("LicenceValidityEndingDate",null,["class"=>"form-control required"]) !!}
                <span id="LicenceValidityEndingDate-error" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('organization/list')" class="btn btn-danger"><i
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