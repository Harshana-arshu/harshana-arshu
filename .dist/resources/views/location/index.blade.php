<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a href="location/create">Create</a>

                <table>
                <thead>
                <th>Location</th>
                <th>Dist</th>
                </thead>
                <tbody>
                

                @foreach($locate as $orgs)
                <tr>
                            <td class="district">{{$orgs->name}}</td>
                            @foreach($orgs->district as $dis)
                            <td class="district">{{$dis->district}}</td>
                            @endforeach
                            <td><a href="location">delete</a></td>
                              </tr>
                            @endforeach
                            
                            
                
                
                
              
                </tbody>
                        </table>

                        </body></html>