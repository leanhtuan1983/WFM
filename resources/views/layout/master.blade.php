<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Monitor Workflow</title>
    <meta name="description" content="Thanks for purchasing Huge. If you need any support, please contact with us.">
    <meta name="author" content="lucidtemplate">
    <meta name="copyright" content="lucidtemplate">
    <link rel="shortcut icon" type="image/png" href="{{ asset('template/img/favicon.ico') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/tree-viewer.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viewjob.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viewprocedure.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viewjobdetail.css') }}">
</head>

<body>

    <div class="wrapper">
		<!--Start Left-side-->
       @include('layout.partials.left-side')
		<!--End Left-side-->

		<!--Start Right-Content-->
  
      @include('layout.partials.right-side')

		<!-- End Right-Content-->
    </div>
    <script src="{{ asset('template/js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
	  <script src="{{ asset('template/js/jstree.min.js') }}"></script>
    <script src="{{ asset('template/js/jstree.active.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script src="{{ asset('js/viewjobdetail.js') }}"></script>
</body>

</html>



