<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css'])
</head>

<body>

    <form method="post" action="{{route('show')}}">
        @csrf
        <input type="text" placeholder="Enter the task to-do" name="taskName"><br><br>
        <textarea name="description" id=""></textarea><br>



        <button  class="px-3 py-2 bg-green-500">CREATE</button>
    </form>


    <h1>Your Assigned Task</h1>


    @foreach ($task as $item)
    <a href="{{route('individualTask' , $item->id)}}">


        <p>{{$item->taskName}}</p>
    </a>
    @endforeach



</body>

</html>