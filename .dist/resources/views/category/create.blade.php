<!DOCTYPE html>
<html>
<head>
<body>
<form action="{{url('model/store')}}" method="post">
{{csrf_field()}}



<label>category</label>
<select name="category">
@foreach($caty as $orgs)
<option value="{{$orgs->id}}">{{$orgs->name}}</option>
@endforeach
</select>
 
<br><br>
<label>model</label>
<input type="text" name="model" >
<input type="submit"value="submit">
</form>
</body>
</html>
</form></body></head></html>