<div class="col-md-12">
    <h3>বর্তমান হিসাব সমূহ</h3>

    <div class="borderportion">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>প্রোডাক্ট</th>
                <th>হিসাব নং</th>
            </tr>
            </thead>
            @if(!empty($account_data))
                @foreach($account_data as $account_info)
                    <tr>
                        <td align="center">{{$account_info->ProductName}}</td>
                        <td align="center">{{$account_info->accountsname}}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
</div>
<div class="col-md-12">

    <div class="borderportion">
        <div class="form-group col-md-6" id="form-productname1-error">
            {!! Form::label("productname1","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {{--{!! Form::select("productname1",$product,["class"=>"form-control required"]) !!}--}}
                <select name="productname1">
                    <option value="" selected>--select--</option>
                    @foreach($product as $productData)
                        <option value="{{$productData->id}}">{{$productData->ProductName}}</option>
                    @endforeach
                </select>
                <span id="productname1-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group col-md-6" id="form-savingAmount1-error">
            {!! Form::label("savingAmount1","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("savingAmount1",null,["class"=>"form-control required"]) !!}
                <span id="savingAmount1-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group col-md-6" id="form-productname2-error">
            {!! Form::label("productname2","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {{--{!! Form::select("productname2",$product,["class"=>"form-control required"]) !!}--}}
                <select name="productname2">
                    <option value="" selected>--select--</option>
                    @foreach($product as $productData)
                        <option value="{{$productData->id}}">{{$productData->ProductName}}</option>
                    @endforeach
                </select>
                <span id="productname2-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group col-md-6" id="form-savingAmount2-error">
            {!! Form::label("savingAmount2","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("savingAmount2",null,["class"=>"form-control required"]) !!}
                <span id="savingAmount2-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group col-md-6" id="form-productname3-error">
            {!! Form::label("productname3","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                <select name="productname3">
                    <option value="" selected>--select--</option>
                    @foreach($product as $productData)
                        <option value="{{$productData->id}}">{{$productData->ProductName}}</option>
                    @endforeach
                </select>
                {{--{!! Form::select("productname3",$product,["class"=>"form-control required"]) !!}--}}
                <span id="productname3-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group col-md-6" id="form-savingAmount3-error">
            {!! Form::label("savingAmount3","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("savingAmount3",null,["class"=>"form-control required"]) !!}
                <span id="savingAmount3-error" class="help-block"></span>
            </div>
        </div>
    </div>
    <div class="borderportion">
        <div class="form-group col-md-6" id="form-productname4-error">
            {!! Form::label("productname4","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                <select name="productname4">
                    <option value="" selected>--select--</option>
                    @foreach($product as $productData)
                        <option value="{{$productData->id}}">{{$productData->ProductName}}</option>
                    @endforeach
                </select>
                {{--{!! Form::select("productname4",$product,["class"=>"form-control required"]) !!}--}}
                <span id="productname4-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group col-md-6" id="form-savingAmount4-error">
            {!! Form::label("savingAmount4","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("savingAmount4",null,["class"=>"form-control required"]) !!}
                <span id="savingAmount4-error" class="help-block"></span>
            </div>
        </div>
    </div>

    <div class="borderportion">
        <div class="form-group col-md-6" id="form-productname5-error">
            {!! Form::label("productname5","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                <select name="productname5">
                    <option value="" selected>--select--</option>
                    @foreach($product as $productData)
                        <option value="{{$productData->id}}">{{$productData->ProductName}}</option>
                    @endforeach
                </select>
                {{--{!! Form::select("productname5",$product,["class"=>"form-control required"]) !!}--}}
                <span id="productname5-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group col-md-6" id="form-savingAmount5-error">
            {!! Form::label("savingAmount5","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("savingAmount5",null,["class"=>"form-control required"]) !!}
                <span id="savingAmount5-error" class="help-block"></span>
            </div>
        </div>
    </div>

    <div class="borderportion">
        <div class="form-group col-md-6" id="form-productname6-error">
            {!! Form::label("productname6","প্রোডাক্ট",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                <select name="productname6">
                    <option value="" selected>--select--</option>
                    @foreach($product as $productData)
                        <option value="{{$productData->id}}">{{$productData->ProductName}}</option>
                    @endforeach
                </select>
                {{--{!! Form::select("productname6",$product,["class"=>"form-control required"]) !!}--}}
                <span id="productname6-error" class="help-block"></span>
            </div>
        </div>
        <div class="form-group col-md-6" id="form-savingAmount6-error">
            {!! Form::label("savingAmount6","টাকার পরিমান",["class"=>"control-label col-md-12"]) !!}
            <div class="col-md-12">
                {!! Form::text("savingAmount6",null,["class"=>"form-control required"]) !!}
                <span id="savingAmount6-error" class="help-block"></span>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-md-push-4">
        <a href="javascript:ajaxLoad('member/list')" class="btn btn-danger"><i
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