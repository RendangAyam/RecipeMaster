<div class="container" style="background-color: #fbd5c0">
    <div style="padding: 1%; padding-top: 4%">
        <h1>Comment</h1>
        {!! Form::open(['url' => 'login/submit']) !!}
        <input type="hidden" value="{{Auth::user()->id}}" name="userid">
        <input type="hidden" value="{{Auth::user()->id}}" name="foodid"><!-- food id -->
        <input type="hidden" value="{{Auth::user()->id}}" name="parentid"><!-- parent id -->
        
        <div class="submissionfield">
            <div class="form-group" style="font-size: large;">
                {{Form::label('message', 'Comment')}}
                {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Comment'])}}
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-lg-5">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                </div>
        
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
