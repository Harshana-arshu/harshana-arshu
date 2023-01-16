<!DOCTYPE html>
<html>
<head></head>
<body>
<a href="model/create">Create</a>
      <table>
                <thead>
                <th>model</th>
                <th>category</th>
                
                </thead>
                <tbody>
                

                @foreach($model as $orgs)
                <tr>
                            <td class="district">{{$orgs->name}}</td>
                            @foreach($orgs->caty as $model)
                            <td class="district">{{$model->caty}}</td>
                            @endforeach
                              </tr>
                            @endforeach
                            
                
                
                
              
                </tbody>
                        </table>
</body></html>