<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!--
  SOA: I Connor Ricotta, 400199761 certify that this material is my original work.
  No other person's work has been used without due acknowledgement.
  I have also not made my work available to anyone else.
  -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ricotta Woodworking</title>
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />


    <style>
        body {
            font-family: 'Barlow', sans-serif;
        }
        .bc{
            background-color: #0a4275;
        }
        .op:hover{
            opacity: 1;
            cursor: pointer;
        }
        .wf{
            width: 350px;
        }
        .bi{
            background-image: url(/images/walnut_charcuterie3.jpg);
            background-size: cover;
            background-position: center;
        }
        .bi2{
            background-image: url(/images/paddle_board.jpg);
            background-size: cover;
            background-position: center;
        }

    </style>
</head>


<!-- Navbar -->

<body class="antialiased m-3 mb-12 bg-transparent">

<nav class="relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-100 text-gray-500
            hover:text-gray-700 focus:text-gray-700 shadow-lg navbar navbar-expand-lg navbar-light
            sticky top-0">

    <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
        <button class="navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent
                        focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                </path>
            </svg>
        </button>
        <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
            <a class="flex items-center  text-gray-900  hover:text-gray-900  focus:text-gray-900 ml-2 mt-2 lg:mt-0  mr-1" href="/">
                <img src="/images/rw_logo.svg" style="height: 15px" alt="" loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav flex flex-col pl-0 list-style-none mr-auto">
                <li  class="nav-item p-2">
                    <a class="nav-link  text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/products">Products</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/photography">Photography</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/contact">Contact</a>
                </li>
                <li class="nav-item p-2 mr-2">
                    <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/req">Requirements</a>
                </li>

                <li>
                    <div class="flex justify-center">
                        <div class=" xl:w-96">
                            <form action="/search" method="GET">
                                @csrf
                            <div class="input-group relative flex flex-wrap items-stretch">
                                <input type="search" name="search_prod" class="capitalize form-control relative flex-auto min-w-0 block w-full px-3  text-base font-normal text-gray-700
                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                       placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                <button class="btn inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                                focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                                        type="submit" id="button-addon2">

                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                    </svg>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </li>

            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="flex items-center relative">
            <!-- Icon -->


            @if(Session::has('user'))
            <div class="flex justify-center pr-4">
                <div>
                    <div class="dropdown relative">
                        <a class="dropdown-toggle px-6 py-2.5 text-gray-500 font-medium leading-tight transition duration-150 ease-in-out flex items-center whitespace-nowrap"
                           href="#"
                           type="button"
                           id="dropdownMenuButton2"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">{{Session::get('user')['uid']}} <img class="m-1" style="height: 10px" src="/images/dropdown.svg"> </a>
                        <ul
                            class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"
                            aria-labelledby="dropdownMenuButton2">
                            <li>
                                <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                    href="/logout">Logout</a>
                            </li>
                            <li>
                                <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                   href="/orders">Orders</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

                <a class="text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4" href="/cart">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                        </path>
                    </svg>
                </a>
            @else
                <a class="nav-link mr-4 text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/signup">Signup</a>

                <h1 class="">|</h1>
                <a class="nav-link ml-4 mr-4 text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/login">Login</a>

                <a class="text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4" href="/login">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                        </path>
                    </svg>
                </a>
            @endif



            <a href="https://www.instagram.com/ricotta_woodworking/">
                <img class="m-1" style="height: 35px" src="/images/instagram.svg">
            </a>
        </div>
</nav>
