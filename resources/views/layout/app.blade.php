<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>First Web</title>
    
</head>
<body>
    @include('inc.navbar')
   <div class="container">
   @if(Request::is('/'))
     @include('inc.show')
   @endif  
    <div class="row">
       <div class="col-md-8 col-lg-8">
       @include('inc.messages')
          @yield('content')
       </div>
       <div class="col-md-4 col-lg-4">
       @include('inc.sidebar')

       </div>
    </div>     
    </div>
    @include('inc.footer')
</body>
</html>