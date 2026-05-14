<html>

<head>

<meta charset="utf-8">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

</head>

<body style="font-family:'open Sans';font-size: 14px; line-height:20px;">

   <table>
   <tr><td>Post Name</td> : <td>{{$dd->post_name}}</td></tr>  
   <tr><td>First Name</td> : <td>{{$dd->first_name}}</td></tr> 
   <tr><td>Last Name</td> : <td>{{$dd->last_name}}</td></tr> 
   <tr><td>Date</td> : <td>{{$dd->date}}</td></tr> 
   <tr><td>Qualification</td> : <td><?php if($dd->qualification==1){echo "10th";} elseif ($dd->qualification==2) {echo "12th";}else{echo "Others";}?></td></tr>   
   <tr><td>Gender</td> : <td><?php if($dd->gender==1){echo "Female";}else{echo "Male";}?></td></tr> 
   <tr><td>Experience</td> : <td>{{$dd->experience}}</td></tr>
   <tr><td>Current Company</td> : <td>{{$dd->current_company}}</td></tr>
   <tr><td>Degree</td> : <td>{{$dd->degree}}</td></tr>
   <tr><td>Address</td> : <td>{{$dd->address}}</td></tr>
   <tr><td>Email</td> : <td>{{$dd->email}}</td></tr>
   <tr><td>Phone number</td> : <td>{{$dd->phone}}</td></tr>
   <!-- <tr><td>Resume</td> : <td><a href="{{ asset('public/upload/resume').'/'. $dd->file }}">Open the file</a> 
   </td></tr> -->
   <tr><td>Resume</td> : <td>
   </td></tr>
   
  </table>

</body>

</html>