<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=bookmark" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="bg-zinc-900 w-full min-h-screen flex items-center justify-center">
        <div class="">
            <h1 class="text-3xl text-zinc-400 text-center mb-5">Update Task</h1>
            <form action="{{route('updateTask' , $task->id)}}" method="post" class="text-center">
                @csrf
                @method('PUT')

                <input value="{{ old('taskName', $task->taskName) }}" type="text" class="w-80 py-3 px-5 rounded bg-zinc-800 text-zinc-100 outline-none border-none" name="taskName" placeholder="Enter the Task-Name">
                <br><br><textarea name="description" id="" class="w-80 h-56 py-3 px-5 rounded bg-zinc-800 text-zinc-100 outline-none border-none">{{ old('description', $task->description) }}</textarea><br>
                <input type="submit" value="Submit" class="px-7 py-2 mt-4 cursor-pointer hover:bg-yellow-700 bg-yellow-500 rounded ">
            </form>

        </div>



    </div>
    @if(Session::has('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
    @endif
</body>

</html>