<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=bookmark" />
    @vite(['resources/css/app.css'])
</head>

<body>

    <div class="w-full min-h-screen flex items-center justify-center bg-zinc-900 ">
        <div class="w-1/2 h-full p-12 bg-zinc-800">

            <div class="flex gap-5 items-center">
                <span class="material-symbols-outlined text-zinc-200">
                    bookmark
                </span>
                <h1 class="text-3xl text-zinc-200">{{$task->taskName}}</h1>
            </div>

            <p class="text-zinc-400 mt-5 mb-5">{{$task->description}}</p>
            <div class="flex  gap-5 items-end">

                <a href="{{route('updateTask' , $task->id)}}">

                    <button class="px-5 py-1 text-zinc-400 rounded hover:bg-green-500 hover:text-black  bg-zinc-900">EDIT</button>
                </a>

                <form action="{{route('delete' , $task->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="px-5 py-1 text-zinc-400 rounded  bg-zinc-900 hover:bg-red-500 hover:text-black">DELETE</button>
                </form>

            </div>





        </div>

    </div>

</body>

</html>