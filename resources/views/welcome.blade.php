<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome Page</title>
</head>
<body>
   <h1 style="text-align: center; margin-top:45vh" >I'm Datta Pandya</h1> 
   <h2> {{$name ?? 'Guest'}} </h2>

    @if($name != '')
       {{' Name is not empty!'}}
    @else
        {{'Name is empty'}}
    @endif

    @if(isset($name))
        welcome, {{$name}}
    @endif
</body>
</html>