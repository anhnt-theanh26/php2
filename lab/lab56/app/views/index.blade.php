<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>facebookm dowloadder</h1>
    <div>{{ $variable1 }}</div>
    <div>{{ $arr }}</div>
    <div>{{ $error or 'no error'}}</div>
    @if(isset($arr)){
    <div>arr co ton tai</div>
    }
    @endif
    @foreach($array as $arr){
    <h2>{{$arr}}</h2>
    }
    @endforeach
</body>

</html>