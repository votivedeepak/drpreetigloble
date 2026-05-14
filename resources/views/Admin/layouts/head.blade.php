<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ $title }} </title>
	 <meta name="csrf-token" content="{{csrf_token()}}">    
    <!-- Favicon-->
    <link rel="icon" href="{{ url('public') }}/favicon.ico" type="image/x-icon"/>
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Core Css -->
    <link href="{{url('resources/Admin') }}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('resources/Admin') }}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('resources/Admin') }}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{url('resources/Admin') }}/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('resources/Admin') }}/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('resources/Admin') }}/css/themes/all-themes.css" rel="stylesheet" />
    
    <!-- JQuery DataTable Css -->
    <link href="{{url('resources/Admin') }}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
     <!-- Bootstrap Select Css -->
    <link href="{{url('resources/Admin') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
   <!--  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">

<!-- Yearpicker -->
<link rel="stylesheet" href="{{ url('resources/Admin') }}/css/yearpicker_style.css">
<link rel="stylesheet" href="{{ url('resources/Admin') }}/css/yearpicker.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    

    <style>
  .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
  .toggle.ios .toggle-handle { border-radius: 20px; }
</style>
</head>
