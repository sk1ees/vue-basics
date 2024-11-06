<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <form action="{{route('updateTask' , $task->id)}}" method="post">
    @csrf    
    @method('PUT')

    <input type="text" name="taskName" placeholder="Enter the Task-Name">
    <br><br><textarea name="description" id=""></textarea><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
