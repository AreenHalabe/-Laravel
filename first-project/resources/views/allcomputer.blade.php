<!DOCTPE html>
<html>
<head>
<title>View computers Records</title>
<link rel="stylesheet" href="{{url('Css/style.css')}}"/>
</head>
<body>


@foreach ($computers as $computer)
<div>
    <li> {{ $computer->name }} has Price {{ $computer->price }} ..........<a href = '/update'>Edit</a></li> 
</div>
@endforeach



</body>
</html>