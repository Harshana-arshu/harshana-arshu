<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="col-xl-12 col-md-12 col-sm-12 col-12">
           
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div><br />
          @endif
          
        </div>

<form   action="{{url('location/store')}}" method="post"   >
                          {{csrf_field()}}


<label>district</label>
<select name="district">
@foreach($district as $orgs)
<option value="{{$orgs->id}}">{{$orgs->name}}</option>
@endforeach
</select>
 
<br><br>
<label>location</label>
<input type="text" name="location" >
<input type="submit"value="submit">
</form>
</body>
</html>