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

<table class="dynatable" id="dynatable">
    <thead>
    <tr>
        <th>Type</th>
        <th>Account Name</th>
        <th>Debit</th>
        <th>Credit</th>
    </tr>
    </thead>
    <tbody id="p_scents" class="p_scents">

    </tbody>
</table>

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
            var i=0;
            $('#p_scents').empty();
            $.ajax({
                type: 'get',
                url: 'getSchedule',
                data: {'id': SamityId},
                success: function (data) {
//                    console.log(data);
                    $.each(data, function (index, subcatObj3p) {
                        $('#p_scents').append('<tr><td><input type="text" name="debit_amount" id="'+subcatObj3p.MemberId+'" value="'+subcatObj3p.MemberId+'"/></td><td><input type="text" name="credit_amount" id="credit_amount"/></td></tr>');
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