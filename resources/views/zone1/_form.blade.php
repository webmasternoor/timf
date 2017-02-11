<div class="col-md-12">
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-BranchId-error">
            {!! Form::label("BranchId","শাখার নাম",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchId",$BranchInfo,null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="BranchId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-SomitiName-error">
            {!! Form::label("SomitiName","সমিতির নাম",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("SomitiName",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="SomitiName-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-SamitiOpenDate-error">
            {!! Form::label("SamitiOpenDate","সমিতির খোলার তারিখ",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("SamitiOpenDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="SamitiOpenDate-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-SamitiEndDate-error">
            {!! Form::label("SamitiEndDate","সমিতির বন্ধের তারিখ",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::date("SamitiEndDate",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="SamitiEndDate-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-SomitiCode-error">
            {!! Form::label("SomitiCode","সমিতির কোড",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("SomitiCode",null,["class"=>"form-control required","id"=>"focus"]) !!}
                <span id="SomitiCode-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-12" id="form-SomitiAddress-error">
            {!! Form::label("SomitiAddress","সমিতির ঠিকানা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::textarea("SomitiAddress",null,["class"=>"form-control SomitiAddress required","id"=>"SomitiAddress"]) !!}
                <span id="SomitiAddress-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group required col-md-6" id="form-BranchDivisionId-error">
            {!! Form::label("BranchDivisionId","বিভাগ",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchDivisionId",$DivisionInfo,null,["class"=>"form-control DivisionId required","id"=>"DivisionId"]) !!}
                <span id="BranchDivisionId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchDistrictId-error">
            {!! Form::label("BranchDistrictId","জেলা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchDistrictId",$DistrictInfo,null,["class"=>"form-control DistrictId required","id"=>"DistrictId"]) !!}
                <span id="BranchDistrictId-error" class="help-block"></span>
            </div>
        </div>

        <div class="form-group required col-md-6" id="form-BranchThanaId-error">
            {!! Form::label("BranchThanaId","থানা",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchThanaId",$ThanaInfo,null,["class"=>"form-control ThanaId required","id"=>"ThanaId"]) !!}
                <span id="BranchThanaId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchUnionId-error">
            {!! Form::label("BranchUnionId","ইউনিয়ন",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchUnionId",$UnionInfo,null,["class"=>"form-control UnionId required","id"=>"UnionId"]) !!}
                <span id="BranchUnionId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchPostOfficeId-error">
            {!! Form::label("BranchPostOfficeId","পোষ্ট অফিস",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchPostOfficeId",$PostOfficeInfo,null,["class"=>"form-control PostOfficeId required","id"=>"PostOfficeId"]) !!}
                <span id="BranchPostOfficeId-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group required col-md-6" id="form-BranchWardId-error">
            {!! Form::label("BranchWardId","ওয়ার্ড",["class"=>"control-label test col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("BranchWardId",$WardInfo,null,["class"=>"form-control WordId required","id"=>"WordId"]) !!}
                <span id="BranchWardId-error" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('zone1/list')" class="btn btn-danger"><i
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
        $(document).on('change', '.DivisionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DivisionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#DistrictId').empty();
            $.ajax({
                type: 'get',
                url: 'getDistrict',
                data: {'id': DivisionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#DistrictId').append('<option value="' + subcatObj.id + '">' + subcatObj.DistrictName + '</option>')
                    });
                },
                error: function () {

                }
            });
        });
        $(document).on('change', '.DistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#ThanaId').empty();
            $.ajax({
                type: 'get',
                url: 'getThana',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj1) {
                        $('#ThanaId').append('<option value="' + subcatObj1.id + '">' + subcatObj1.ThanaName + '</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.ThanaId', function () {
            //console.log("yes it is change");

            var op = " ";
            var ThanaId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#UnionId').empty();
            $.ajax({
                type: 'get',
                url: 'getUnion',
                data: {'id': ThanaId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#UnionId').append('<option value="' + subcatObj2.id + '">' + subcatObj2.UnionName + '</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.UnionId', function () {
            //console.log("yes it is change");

            var op = " ";
            var UnionId = $(this).val();
            //var div = $(this).parent();
            //console.log(DivisionId);
            $('#WordId').empty();
            $.ajax({
                type: 'get',
                url: 'getWord',
                data: {'id': UnionId},
                success: function (data) {
                    $.each(data, function (index, subcatObj2) {
                        $('#WordId').append('<option value="' + subcatObj2.id + '">' + subcatObj2.WardName + '</option>')
                    });
                },
                error: function () {

                }
            });
        });

        $(document).on('change', '.DistrictId', function () {
            //console.log("yes it is change");

            var op = " ";
            var DistrictId = $(this).val();
            //var div = $(this).parent();
            //console.log(DistrictId);
            $('#PostOfficeId').empty();
            $.ajax({
                type: 'get',
                url: 'getPostOffice',
                data: {'id': DistrictId},
                success: function (data) {
                    $.each(data, function (index, subcatObj3) {
                        $('#PostOfficeId').append('<option value="' + subcatObj3.id + '">' + subcatObj3.PostofficeName + '</option>')
                    });
                },
                error: function () {

                }
            });
        });
    });
</script>