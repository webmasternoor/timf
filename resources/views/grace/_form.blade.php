<style>
    #exTab2 h3 {
        color: white;
        background-color: #428bca;
        padding: 5px;
    }
</style>


<div class="col-md-12 organizationpanel">

    <div class="col-md-12">
        <div class="form-group required col-md-6" id="form-GraceId-error">
            {!! Form::label("GraceId","গ্রেচ আইডি",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("GraceId",null,["class"=>"form-control required"]) !!}
                <span id="GraceId-error" class="help-block"></span>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group required col-md-6" id="form-SomitiName-error">
            {!! Form::label("SomitiName","সমিতির নাম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::select("SomitiName",['1' => 'Shefali', '2' => 'Chameli', '3' => 'Shiuli'])!!}
                <span id="SomitiName-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group required col-md-6" id="form-MemberName-error">
            {!! Form::label("MemberName","সদস্যের নাম",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("MemberName",null,["class"=>"form-control required"]) !!}
                <span id="MemberName-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group required col-md-6" id="form-GraceStartTime-error">
            {!! Form::label("GraceStartTime","গ্রেচ শুরুর তারিখ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("GraceStartTime",null,["class"=>"form-control required"]) !!}
                <span id="GraceStartTime-error" class="help-block"></span>
            </div>
        </div>


        <div class="form-group required col-md-6" id="form-GraceEndDate-error">
            {!! Form::label("GraceEndDate","গ্রেচ সমাপ্তি তারিখ",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("GraceEndDate",null,["class"=>"form-control required"]) !!}
                <span id="GraceEndDate-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group required col-md-6" id="form-Description-error">
            {!! Form::label("Description","বর্ণনা",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::textarea("Description",null,["class"=>"form-control required"]) !!}
                <span id="Description-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4 col-md-push-4">
            <a href="javascript:ajaxLoad('grace/list')" class="btn btn-danger"><i
                        class="glyphicon glyphicon-backward"></i>
                Back</a>
            {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
        btn-primary"])!!}
        </div>
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