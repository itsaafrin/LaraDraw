{{ Form::open(array('url'=>'login')) }}

{{ Form::text('email', null, array('placeholder'=>'Email Address')) }}
<br />
{{ Form::password('password', array('placeholder'=>'Password')) }}
<br />
{{ Form::submit('Login')}}
{{ Form::close() }}