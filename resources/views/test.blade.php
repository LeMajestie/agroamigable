<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

  bienvenido a las pruebas

  <button class="bg-red-300 sm:bg-blue-300 md:bg-gray-300 lg:bg-green-300 xl:bg-orange-300 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
    Button
  </button>

  <!-- This is an example component -->
  <div class="max-w-lg mx-auto">
    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
      <a href="#">
        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
      </a>
      <div class="p-5">
        <a href="#">
          <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="font-normal text-gray-700 mb-3">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
          Read more
        </a>
      </div>
    </div>
    <p>This card component is part of a larger, open-source library of Tailwind CSS components. Learn more by going to the official <a class="text-blue-600 hover:underline" href="#" target="_blank">Flowbite Documentation</a>.</p>
  </div>


  <center>
    <h1 class="text-green-600 text-5xl font-bold">
      GeeksforGeeks
    </h1>
    <b>Tailwind CSS object Class</b>
    <div class="bg-green-300 w-full h-full">
      <img class="object-contain h-32 w-full" src="https://media.geeksforgeeks.org/wp-content/uploads/20190807114330/GFG115.png">
    </div>

      <h1 class="text-green-600 text-5xl font-bold">
        GeeksforGeeks
      </h1>
      <b>Tailwind CSS object Class</b>
      <div class="bg-green-300 w-full h-full">
        <img class="object-cover h-48 w-full" src="https://media.geeksforgeeks.org/wp-content/uploads/20190807114330/GFG115.png">
      </div>
  </center>