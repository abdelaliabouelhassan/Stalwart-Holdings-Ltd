<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stalwart Holdings Ltd Contact Info</title>
        @vite('resources/css/app.css')
      
    </head>
    <body class=" py-10">

        <div class=" w-full bg-gray-200 max-w-[900px] m-auto rounded-lg p-5">
            <h1 class="font-bold">New Contact from : {{$email}}</h1>
            <p class="text-gray-500">Name: {{ $name }}</p>
            <p class="text-gray-500">Email: {{ $email }}</p>
            <p class="text-gray-500">subject: {{ $subject }}</p>
            <p class="text-gray-500">Message: {{ $text }}</p>

        </div>
       


       
    </body>
</html>
