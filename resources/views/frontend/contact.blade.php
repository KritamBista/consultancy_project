<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="  flex justify-center ">
        <div class=" bg-black px-8 rounded-md py-4  ">
            <form action="{{ route('message') }}

    " method="post">
                @csrf

                <div class=" grid grid-cols-2 gap-4">

                    <div class=" text-white">
                        <h1>Email</h1>
                        <label for="email"></label>
                        <input type="email" name="Email" id="Email" class=" bg-white rounded-md text-black ">
                    </div>

                    {{-- <label for="Email">Email</label> --}}
                    {{-- <h1></h1> --}}
                    <div class=" text-white">
                        <h1>phone</h1>
                        <label for="phone"></label>
                        <input type="text" name="Phone" id="Phone" class="text-black">
                    </div>

                </div>
                <div class=" grid grid-cols-2 gap-4">

                    <div class=" text-white">
                        <h1>Name</h1>
                        <label for="name"></label>
                        <input type="text" name="Name" id="Name" class=" bg-white text-black">
                    </div>

                    {{-- <label for="email">Email</label> --}}

                    {{-- <div class=" text-white">
                        <h1>LastName</h1>
                        <label for="lastmane"></label>
                        <input type="number" name="lastname" id="lastname">
                    </div> --}}

                </div>
                <div class="text-white  ">
                    <h1>Message</h1>
                    <label for="message"></label>
                    <input type="text" name="message" id="message" class=" w-full h-max text-black">
                </div>
                <button type="submit" class=" text-white bg-blue-400">
                    Message
                </button>
        </div>

        </form>
    </div>
</body>

</html>
