	
{!! Form::open(["route"=>"sms/post","class"=>"form","id"=>"form","role"=>"form"]) !!}

	{!! Form::text('destination',null,['class'=>'form-control']) !!}
	{{ Form::label('destination', 'destination', ['class' => '']) }}
	<br>
	{!! Form::text('message',null,['class'=>'form-control']) !!}
	{{ Form::label('message', 'message', ['class' => '']) }}
	<br>
	{!! Form::submit('Submit',['class'=>'btn btn-flat btn-default-light ink-reaction']) !!}

{!! Form::close() !!}