$education= DB::table('educations')->get();
return view('survey.create')->with('education', $education);
<div class="col-md-12">
    <select name="BranchId">
        @foreach($education as $education_data )
            <option value="{{$education_data->id}}">{{$education_data->name}}</option>
        @endforeach
    </select>
    <span id="Education-error" class="help-block"></span>
</div>
Form::text("FirstName",null,["class"=>"form-control required", 'readonly' => 'true']) !!}