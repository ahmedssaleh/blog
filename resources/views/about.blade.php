<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>wellcome</h1>

    @foreach ($tasks as $index => $task)
    <ul>
        <li ><a href="/task/{{$index}}">{{$task}}</a></li>
    </ul>

    @endforeach

</body>
</html>
