<h2 class="page-header">নতুন সঞ্চয় যোগ করুন</h2>
{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}
<div class="col-sm-12 form-group">
    <div class="form-group required col-md-6" id="form-SamityId-error">
        {!! Form::label("SamityId","সমিতি আইডি",["class"=>"control-label col-md-12"]) !!}
        <div class="col-md-12">
            {!! Form::select("SamityId",$SamityId,null,["class"=>"form-control SamityId required","id"=>"SamityId"]) !!}
            {{--<select name="SamityId" id="SamityId">--}}
            {{--<option value="" selected>--select--</option>--}}
            {{--@foreach($SamityId as $zone_data )--}}
            {{--<option value="{{$zone_data->id}}"--}}
            {{-->{{$zone_data->SomitiName}}</option>--}}
            {{--@endforeach--}}
            {{--</select>--}}
            <span id="SamityId-error" class="help-block"></span>
        </div>
    </div>
</div>

<table class="table table-bordered table-striped" id="dynatable">
    <thead>
    <tr>
        <th style="text-align: center">SL No</th>
        <th >Member Name</th>
        <th>Account No</th>
        <th>Account Type</th>
        <th>Amount</th>
        {{--<th>Date</th>--}}
    </tr>
    </thead>
    <tbody id="p_scents" class="p_scents">

    </tbody>
</table>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        <a href="javascript:ajaxLoad('saving1/list')" class="btn btn-danger"><i
                    class="glyphicon glyphicon-backward"></i>
            Back</a>
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
    </div>
</div>
{{--@if(!empty($data))--}}
{{--@foreach ($data as $data1):--}}
{{--@if($data1->MemberId)--}}
{{--{{$data1->MemberId}}--}}
{{--@endif--}}
{{--@endforeach--}}
{{--@endif--}}
{{--@include("saving1._form1")--}}
{!! Form::close() !!}

<script>
    $(document).ready(function () {
        $(document).on('change', '.SamityId', function () {
            var SamityId = $(this).val();
            var i=1;
            $('#p_scents').empty();
            $.ajax({
                type: 'get',
                url: 'getSchedule',
                data: {'id': SamityId},
                success: function (data) {
//                    console.log(data);
                    $.each(data, function (index, subcatObj3p) {
                        $('#p_scents').append('<tr><td style="text-align: center">'+i+'</td> <td><input type="text" name="MemberId'+i+'" id="'+subcatObj3p.MemberId+'" value="'+subcatObj3p.MemberId+'"/></td> <td><input type="text" name="AccountNo'+i+'" id="'+subcatObj3p.AccountNo+'" value="'+subcatObj3p.AccountNo+'"/></td> <td><input type="text" name="ProductId'+i+'" id="'+subcatObj3p.SavingType+'" value="'+subcatObj3p.SavingType+'"/></td> <td><input type="number" name="Amount'+i+'" id="Amount'+i+'" value=""/></td></tr>');
                        i++;
                    });
                },
                error: function () {

                }
            });
            $.ajax(clear);
//            document.getElementById("MemberId").reset();
        });
    });
</script>