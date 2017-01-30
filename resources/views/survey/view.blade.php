<div class="col-md-12 surveyview">
	<h2 class="page-header">View জরীপ</h2>
	{!! Form::model($survey,["id"=>"frm","class"=>"form-horizontal"]) !!}
	@include("survey._form")
	{!! Form::close() !!}
	<div class="form-group">
        <div class="col-md-6 col-md-push-4 back">
            <a href="javascript:ajaxLoad('loan/list')" class="btn btn-danger"><i
                        class="glyphicon glyphicon-backward"></i>
                Back</a>
        </div>
    </div>
</div>