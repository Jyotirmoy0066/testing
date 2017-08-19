<?php
// foreach ($users as $user) {
//     echo $user->id;
// }


?>
<html>
<body>

	{!! Form::open(array('url' => '/register')) !!}
 {{ Form::label('email', 'email') }}
 {{ Form::text('email') }}
 <br>
  name:
  <input type="text" name="name"><br><br>
  <br>
  pass:
  <input type="text" name="password" ><br><br>
  <br>
  Pass_con:
  <input type="text" name="password_confirmation" ><br><br>
  <input type="submit" value="Submit">
{!! Form::close() !!}
</body>
</html>