<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
    @livewireScripts
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>

</head>
<body>

<!-- Navbar -->
<x-navigation />

<!-- Graphs  -->
<section class="mx-auto container p-1 pl-5">
    <div class="text-center">
        <p class="text-2xl">
            CURRENT
        </p>
    </div>
    <div class="flex items-center pl-11">
        <div class=" md:block pl-8  md:w-11/12">
            <div>
                <livewire:line-chart-current />
            </div>
        </div>
    </div>
</section>

<section class="mx-auto container p-1 pl-5">
    <div class="text-center">
        <p class="text-2xl">
            VOLTAGE
        </p>
    </div>
    <div class="flex items-center pl-11">
        <div class=" md:block pl-8  md:w-11/12">
            <div>
                <livewire:line-chart-voltage />
            </div>
        </div>
    </div>
</section>

<section class="mx-auto container p-1 pl-5">
    <div class="text-center">
        <p class="text-2xl">
            FREQUENCY
        </p>
    </div>
    <div class="flex items-center pl-11">
        <div class=" md:block pl-8  md:w-11/12">
            <div>
                <livewire:line-chart-frequency />
            </div>
        </div>
    </div>
</section>

<section class="mx-auto container p-1 pl-5">
    <div class="center">
        <p class="text-2xl">
            HARMONICS
        </p>
    </div>
    <div class="flex items-center pl-11">
        <div class=" md:block pl-8  md:w-11/12">
            <div>
{{--                <livewire:line-chart-harmonics />--}}
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section id="alert" class="mx-auto container w-1/4">

    <div class="hidden mb-3 inline-flex w-full items-center rounded-lg bg-success-100 px-6 py-5 text-base text-success-700"
        role="alert">
          <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5">
              <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                  clip-rule="evenodd" />
            </svg>
          </span>
            A simple success alert - check it out!
    </div>
    <div class="hidden mb-3 inline-flex w-full items-center rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700"
        role="alert">
      <span class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5">
          <path fill-rule="evenodd"
              d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
              clip-rule="evenodd" />
        </svg>
          </span>
                A simple danger alert - check it out!
    </div>
    <div class="hidden mb-3 inline-flex w-full items-center rounded-lg bg-warning-100 px-6 py-5 text-base text-warning-800"
        role="alert">
      <span class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5">
          <path fill-rule="evenodd"
              d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
              clip-rule="evenodd" />
        </svg>
      </span>
        A simple warning alert - check it out!
    </div>

</section>

<!-- Main content -->
<section class="container mx-auto p-6">
    <div class="flex items-center">
        <p class="text-2xl">
            Event Logs
        </p>
    </div>
{{--    <livewire:event-logs />--}}

</section>

<!-- footer -->
<x-footer />

</body>
</html>
