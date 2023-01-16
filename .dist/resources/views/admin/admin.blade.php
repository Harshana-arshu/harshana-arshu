<!DOCTYPE html>
<html>
<head>
</head>
<body>


                <table>
                <thead>
                <th>id &nbsp;</th>
                <th>title &nbsp;</th>
                <th>category &nbsp;</th>&nbsp;
                <th>model&nbsp;</th>&nbsp;
                <th>phone_number&nbsp;</th>&nbsp;
                <th>price&nbsp;</th>
                <th>description&nbsp;</th>
                <th>image&nbsp;</th>
                <th>warranty&nbsp;</th>
                <th>condition&nbsp;</th>
                <th>color&nbsp;</th>
                <th>address&nbsp;</th>
                <th>age&nbsp;</th>
                <th>bh&nbsp;</th>
                <th>status&nbsp;</th>
                
                </thead>
                <tbody>
                

                @foreach($admin as $orgs)
                <tr>
                           <td>{{$orgs->id}}&nbsp;</td>
                           <td>{{$orgs->ad_title}}&nbsp;</td>
                           <td>{{$orgs->category_id}}&nbsp;</td>
                           <td>{{$orgs->model_id}}&nbsp;</td>
                           <td>{{$orgs->phone_number}}&nbsp;</td>
                           <td>{{$orgs->price}}&nbsp;</td>
                           <td>{{$orgs->description}}&nbsp;</td>
                           <td>{{$orgs->image}}&nbsp;</td>
                           <td>{{$orgs->warranty}}&nbsp;</td>
                           <td>{{$orgs->condition}}&nbsp;</td>
                           <td>{{$orgs->color}}&nbsp;</td>
                           <td>{{$orgs->address}}&nbsp;</td>
                           <td>{{$orgs->age}}&nbsp;</td>
                           <td>{{$orgs->BH}}&nbsp;</td>
                           <td>{{$orgs->status}}&nbsp;</td>

                           
                           
                           @if($orgs->status==0)
                            <td><a href="{{url('approve/'.$orgs->id)}}" >approve &nbsp;</a></td>
                            @endif
                            <td>@if($orgs->status==0)
                                        <label style="color:yellow"><b>Pending &nbsp;</b></label>
                                        @endif
                                        @if($orgs->status==1)
                                        <label style="color:green"><b>Approved &nbsp;</b></label>
                                        @endif
                                         @if($orgs->status==2)
                                        <label style="color:red"><b>Rejected &nbsp;</b></label>
                                        @endif
                                        @if($orgs->status==3)
                                        <label style="color:blue"><b>Soldout &nbsp;</b></label>
                                        @endif</td>
                              </tr>
                            @endforeach
                            
                            
                
                
                
              
                </tbody>
                        </table>

                        </body></html>