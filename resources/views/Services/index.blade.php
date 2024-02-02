<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>home</title>
</head>
<body>
  <!-- NAVBAR -->
<nav class=" border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> -->
        <span class="max-w-lg text-3xl font-semibold leading-relaxed text-gray-900 dark:text-white">HireMe</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{route('services.index')}}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="{{route('services.create')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Create</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
 <!-- END of NAVBAR -->
<div class="max-w-full h-40 ">
    <h1 class="mt-3 text-5xl font-semibold leading-relaxed text-gray-900 dark:text-blue-500 text-center">SERVICES</h1>
    <p class="mt-3 text-1xl font-semibold leading-relaxed text-gray-900 dark:text-gray-500 text-center">Here you will find all the services that you need !</p>
</div>

{{-- <section class="grid grid-cols-2 gap-4 m-8 justify-center"> --}}
  <section class="flex flex-wrap justify-center items-center gap-4 md:flex-row">
    <div class="md:grid md:grid-cols-4 gap-6 flex flex-col">
    @foreach ($services as $ser)
    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 leading-normal ">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $ser->title }}</h2>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $ser->desc }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">{{ $ser->contact }}</p>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $ser->cost }}</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">{{ $ser->category->name }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">{{ $ser->created_at}}</p>
        </div>
    </a>
    @endforeach
  </div>
</section>


</body>
</html>