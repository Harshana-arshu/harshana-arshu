<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="{{url('AdminLogin/post')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<label>Username</label>
<input type="text" name="username"><br><br>
<label>Password</label>
<input type="password" name="password"><br><br>
<button type="submit" name="save">Login!</button>
</form>

</body></html>