<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>

<body>


    <h1>{{$task->taskName}}</h1>
    <p>{{$task->description}}</p>

    <a href="{{route('updateTask' , $task->id)}}">

        <button>EDIT</button>
    </a>

    <form action="{{route('delete' , $task->id)}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit">DELETE</button>
    </form>
</body>

</html>