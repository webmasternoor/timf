<div class="memberdetails">
    <h2 class="page-header">সদস্য তথ্য details</h2>
    {!! Form::model($member,["id"=>"frm","class"=>"form-horizontal"]) !!}
    @include("member._memberview")
    {!! Form::close() !!}
</div>
