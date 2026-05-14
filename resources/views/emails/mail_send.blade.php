<html>

<head>

<meta charset="utf-8">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

</head>

<body style="font-family:'open Sans';font-size: 14px; line-height:20px;">

   <table>
   <tr><td>Name</td> : <td>{{$dd->name}}</td></tr>  
   <tr><td>Fathers Name</td> : <td>{{$dd->father_name}}</td></tr> 
   <tr><td>Phone Number</td> : <td>{{$dd->number}}</td></tr> 
   <tr><td>Whatsapp Number</td> : <td>{{$dd->watsapp_number}}</td></tr>  
   <tr><td>DOB</td> : <td>{{$dd->dob}}</td></tr> 
   <tr><td>Gender</td> : <td><?php if($dd->gender==1){echo "Female";}else{echo "Male";}?></td></tr> 
   <tr><td>User Type</td> : <td>{{$dd->user_type}}</td></tr>
   <tr><td>Course Type</td> : <td>{{$dd->course_type}}</td></tr>
   <tr><td>Degree</td> : <td>{{$dd->degree}}</td></tr>
   <tr><td>Address</td> : <td>{{$dd->address}}</td></tr>
   <tr><td>Email</td> : <td>{{$dd->email}}</td></tr>
   <tr><td>Remark</td> : <td>{{$dd->remark}}</td></tr>
  </table>

</body>

</html>