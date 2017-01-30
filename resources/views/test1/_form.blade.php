<div class="col-md-12">
    <div>
        {!! Form::text("name23",null,["class"=>"form-control col-md-3","id"=>"name23"]) !!}
        {!! Form::text("email23",null,["class"=>"form-control col-md-3","id"=>"email23"]) !!}
        <input type="button" class="add-row" value="Add Row">
        <table>
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="record"></td>
                    <td>Noor</td>
                    <td>noor@mail.com</td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="delete-row">Delete Row</button>
    </div>
    <div class="form-group required col-md-6" id="form-name-error">
        {!! Form::label("name","প্রোডাক্ট কোডঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("name",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="name-error" class="help-block"></span>
        </div>

        <div>
            {{ Form::select('zones', $categories) }}
        </div>

        <div class="col-md-12">
            {!! Form::select("ZoneId",[ '1' => 'Dhaka', '2' => 'Bogra', '3' => 'Rajshahi'])!!}
            <span id="ZoneId-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-Test1Code-error">
        {!! Form::label("Test1Code","প্রোডাক্টের নামঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("Test1Code",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="Test1Code-error" class="help-block"></span>
        </div>
    </div>
    <div class="form-group required col-md-6" id="form-unitprice-error">
        {!! Form::label("unitprice","প্রোডাক্টের নামঃ",["class"=>"control-label col-md-3"]) !!}
        <div class="col-md-6">
            {!! Form::text("unitprice",null,["class"=>"form-control required","id"=>"focus"]) !!}
            <span id="unitprice-error" class="help-block"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('test1/list')" class="btn btn-danger"><i
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
<script>
    $(document).ready(function(){
        $(".add-row").click(function(){
            var name = $("#name23").val();
            var email = $("#email23").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });
</script>