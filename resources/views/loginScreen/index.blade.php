<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERP</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body class="bg-slate-100 w-screen h-screen flex justify-center items-center gap-32 text-xl">
        @if ($errors->any())
            <div id="message" class="absolute rounded-md top-0 mt-4 p-4 bg-red-500 flex justify-center items-center text-white font-semibold">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div id="message" class="absolute px-20 rounded-md py-4 top-0 mt-4 bg-sky-500 text-white font-semibold">
                <h1>
                    {{ Session::get('success')}}
                </h1>
            </div>
        @endif
        <x-loginScreen.form/>
        <x-loginScreen.info/>
</body>
</html>
<script>
    setTimeout(() => {
        $("#message").remove();
    }, 3000);

    $("#loginButton").on("click", () => {
        $("#form").submit()
    });
</script>
