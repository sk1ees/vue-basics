<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @vite(['resources/css/app.css'])
</head>

<body>

    <div class="w-full min-h-screen bg-zinc-900 ">
        <div class="w-full min-h-screen pt-12 ps-12 flex  gap-12">


            <div class="flex gap-32">
                <div class="leftAdmin">
                    <h1 class="  text-4xl mb-5 text-zinc-100">Mini To-do List</h1>
                    <form method="post" action="{{route('show')}}">
                        @csrf
                        <input class="w-80 py-3 px-5 rounded bg-zinc-800 text-zinc-100 outline-none border-none" type="text" placeholder="Enter the task to-do" name="taskName" maxlength="20"><br><br>
                        <textarea class="w-80 h-56 py-3 px-5 rounded bg-zinc-800 text-zinc-100 outline-none border-none" name="description" id="" placeholder="Enter your description"></textarea><br>



                        <button class="px-5 py-2 mt-5 rounded bg-blue-500 hover:bg-blue-600">
                            Create
                        </button>
                    </form>
                </div>


            </div>
            <div class="">
                <h1 class="text-2xl text-zinc-400 mb-7">Assigned Tasks</h1>
                <div class="flex flex-col h-80 flex-wrap gap-9 items-center ">



                    @foreach ($task as $item)
                    <a href="{{route('individualTask' , $item->id)}}">

                        <div class="w-80   px-5 py-3 rounded bg-zinc-700 hover:bg-zinc-600 text-zinc-300 flex gap-5">
                            <div class="w-5 h-5 rounded-full bg-zinc-300 flex items-center justify-center">
                                <div class="w-[80%] h-[80%] bg-zinc-900 rounded-full "></div>
                            </div>
                            <p>{{$item->taskName}} </p>
                        </div>
                    </a>


                    @endforeach
                    {{-- Conditionally render the empty task block --}}
                    @if($task->count() < 8 || $task->count() == 0)
                        <div class="w-80 px-5 py-3 rounded bg-zinc-800 text-zinc-300 flex gap-5">
                            <div class="w-5 h-5 rounded-full flex items-center justify-center">
                                <div class="w-[80%] h-[80%] rounded-full"></div>
                            </div>
                            <p class="text-zinc-500">nothing to see here</p>
                        </div>
                        @endif
                </div>
            </div>




        </div>




    </div>

    @if(Session::has('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
    @endif



</body>

</html>