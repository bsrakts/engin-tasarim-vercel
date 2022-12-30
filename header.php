<?php

$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

?>

<!DOCTYPE html>
<html lang="tr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
   <link rel="stylesheet" href="./assets/css/main.css">
   <title>B2B Landing</title>
</head>

<body id="up">

   <header class="header sticky z-40">
      <div class="header-img absolute">
         <img src="./assets/images/header-bg.png" alt="">
      </div>
      <!--navbar-start-->
      <nav class="bg-white border-gray-200 px-4 sm:px-4 py-5 rounded dark:bg-gray-900">
         <!--navbar-container-->
         <div class="container flex flex-wrap items-center justify-between mx-auto">
            <!--logo-->
            <a href="index.php" class="flex items-center">
               <img src="./assets/images/logo.png" class="h-12 mr-3 sm:h-9" alt="logo">
            </a>
            <!--navbar-search-->
            <div class="flex md:order-2">
               <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                  aria-expanded="false"
                  class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                  </svg>
                  <span class="sr-only">Search</span>
               </button>
               <div class="relative hidden md:block">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                     <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                           d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                           clip-rule="evenodd"></path>
                     </svg>
                     <span class="sr-only">Search icon</span>
                  </div>
                  <input type="text" id="search-navbar"
                     class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="Search...">
               </div>
               <button data-collapse-toggle="navbar-search" type="button"
                  class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 z-50"
                  aria-controls="navbar-search" aria-expanded="false">
                  <span class="sr-only">Open menu</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                  </svg>
               </button>
            </div>
            <!--navbar-search-end-->

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
               <div class="relative mt-3 md:hidden">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                     <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                           d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                           clip-rule="evenodd"></path>
                     </svg>
                  </div>
                  <input type="text" id="search-navbar"
                     class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="Search...">
               </div>
               <!--menu-->
               <ul
                  class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-small md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 gap-2 md:gap-0">
                  <li class="relative">
                     <a class="block relative" href="products.php"
                        class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 dark:text-white px-4"
                        aria-current="page">Ürünler</a>
                  </li>
                  <li class="relative">
                     <a class="block relative" href="contactUs.php"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">İletişim</a>
                  </li>
                  <li>
                     <a class="block relative" href="aboutUs.php"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hakkımızda</a>
                  </li>
                  <li>
                     <a class="block relative" href="sss.php"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">S.S.S</a>
                  </li>
               </ul>
            </div>
            <div class="user-action order-3">
               <ul class="flex items-center">
                  <li class="relative">
                     <a class="flex items-center" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                           style="enable-background:new 0 0 512 512" xml:space="preserve">
                           <path
                              d="M87.956 73.232A44.292 44.292 0 0 0 94.5 50.001V50a44.293 44.293 0 0 0-6.544-23.232l-.024-.039a44.502 44.502 0 0 0-75.864 0l-.024.039a44.513 44.513 0 0 0 0 46.464l.025.04a44.502 44.502 0 0 0 75.863-.001ZM55.688 86.873a10.814 10.814 0 0 1-2.89 1.996 6.521 6.521 0 0 1-5.597 0 13.621 13.621 0 0 1-5.048-4.442 39.775 39.775 0 0 1-5.747-12.471q6.79-.418 13.594-.426 6.801 0 13.595.426a50.198 50.198 0 0 1-2.438 6.712 25.803 25.803 0 0 1-5.469 8.205ZM10.587 52.5h17.949a88.305 88.305 0 0 0 1.623 14.914q-7.36.648-14.682 1.78a39.23 39.23 0 0 1-4.89-16.694Zm4.89-21.693q7.319 1.134 14.687 1.78A88.15 88.15 0 0 0 28.538 47.5H10.587a39.23 39.23 0 0 1 4.89-16.693Zm28.835-17.68a10.811 10.811 0 0 1 2.89-1.996 6.521 6.521 0 0 1 5.597 0 13.621 13.621 0 0 1 5.048 4.442 39.775 39.775 0 0 1 5.747 12.471q-6.79.418-13.594.426-6.801 0-13.595-.426a50.19 50.19 0 0 1 2.438-6.712 25.803 25.803 0 0 1 5.469-8.205ZM89.413 47.5H71.464a88.312 88.312 0 0 0-1.623-14.914q7.36-.648 14.682-1.78a39.23 39.23 0 0 1 4.89 16.694ZM35.188 67.025a82.696 82.696 0 0 1-1.65-14.525h32.925a82.678 82.678 0 0 1-1.647 14.526q-7.4-.486-14.816-.496-7.41 0-14.812.495Zm29.624-34.05a82.702 82.702 0 0 1 1.65 14.525H33.538a82.68 82.68 0 0 1 1.647-14.526q7.4.486 14.816.496 7.41 0 14.812-.496Zm6.65 19.525h17.951a39.23 39.23 0 0 1-4.89 16.693q-7.32-1.134-14.687-1.78A88.146 88.146 0 0 0 71.462 52.5Zm10.063-26.295q-6.4.923-12.837 1.462a57.018 57.018 0 0 0-2.975-8.396 35.48 35.48 0 0 0-4.14-7.045 39.492 39.492 0 0 1 19.952 13.979ZM22.07 22.069a39.487 39.487 0 0 1 16.356-9.843c-.094.122-.19.238-.282.361a45.643 45.643 0 0 0-6.822 15.08q-6.438-.545-12.846-1.462a39.825 39.825 0 0 1 3.594-4.136Zm-3.594 51.726q6.399-.923 12.837-1.462a57.018 57.018 0 0 0 2.975 8.396 35.484 35.484 0 0 0 4.14 7.045 39.492 39.492 0 0 1-19.952-13.979Zm59.456 4.136a39.486 39.486 0 0 1-16.356 9.843c.094-.122.19-.238.282-.361a45.643 45.643 0 0 0 6.822-15.08q6.438.545 12.846 1.462a39.825 39.825 0 0 1-3.594 4.136Z"
                              data-original="#000000" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2" />
                        </svg>
                        <span class="block">TR</span>
                     </a>
                     <div class="action-drop absolute">
                        <ul>
                           <li><a class="block" href="">Türkçe</a></li>
                           <li><a class="block" href="">English</a></li>
                           <li><a class="block" href="">عربي</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

   </header>



   <!-- <div class="container flex items-center justify-between mx-auto">
      <div class="logo">
         <a class="block" href="index.php">
            <img src="./assets/images/logo.png" style="height:75px;width:156px;" alt="">
         </a>
      </div>
      <nav class="nav">
         <ul class="flex items-center">
            <li class="relative">
               <a class="block relative" href="aboutUs.php">
                  Hakkımızda
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="products.php">
                  Ürünler
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="sss.php">
                  S.S.S
               </a>
            </li>
            <li class="relative">
               <a class="block relative" href="contactUs.php">
                  İletişim -->
   <!-- </a>
            </li>
         </ul>
      </nav>
      <div class="user-action">
         <ul class="flex items-center">
            <li class="relative">
               <a class="flex items-center" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                     style="enable-background:new 0 0 512 512" xml:space="preserve">
                     <path
                        d="M87.956 73.232A44.292 44.292 0 0 0 94.5 50.001V50a44.293 44.293 0 0 0-6.544-23.232l-.024-.039a44.502 44.502 0 0 0-75.864 0l-.024.039a44.513 44.513 0 0 0 0 46.464l.025.04a44.502 44.502 0 0 0 75.863-.001ZM55.688 86.873a10.814 10.814 0 0 1-2.89 1.996 6.521 6.521 0 0 1-5.597 0 13.621 13.621 0 0 1-5.048-4.442 39.775 39.775 0 0 1-5.747-12.471q6.79-.418 13.594-.426 6.801 0 13.595.426a50.198 50.198 0 0 1-2.438 6.712 25.803 25.803 0 0 1-5.469 8.205ZM10.587 52.5h17.949a88.305 88.305 0 0 0 1.623 14.914q-7.36.648-14.682 1.78a39.23 39.23 0 0 1-4.89-16.694Zm4.89-21.693q7.319 1.134 14.687 1.78A88.15 88.15 0 0 0 28.538 47.5H10.587a39.23 39.23 0 0 1 4.89-16.693Zm28.835-17.68a10.811 10.811 0 0 1 2.89-1.996 6.521 6.521 0 0 1 5.597 0 13.621 13.621 0 0 1 5.048 4.442 39.775 39.775 0 0 1 5.747 12.471q-6.79.418-13.594.426-6.801 0-13.595-.426a50.19 50.19 0 0 1 2.438-6.712 25.803 25.803 0 0 1 5.469-8.205ZM89.413 47.5H71.464a88.312 88.312 0 0 0-1.623-14.914q7.36-.648 14.682-1.78a39.23 39.23 0 0 1 4.89 16.694ZM35.188 67.025a82.696 82.696 0 0 1-1.65-14.525h32.925a82.678 82.678 0 0 1-1.647 14.526q-7.4-.486-14.816-.496-7.41 0-14.812.495Zm29.624-34.05a82.702 82.702 0 0 1 1.65 14.525H33.538a82.68 82.68 0 0 1 1.647-14.526q7.4.486 14.816.496 7.41 0 14.812-.496Zm6.65 19.525h17.951a39.23 39.23 0 0 1-4.89 16.693q-7.32-1.134-14.687-1.78A88.146 88.146 0 0 0 71.462 52.5Zm10.063-26.295q-6.4.923-12.837 1.462a57.018 57.018 0 0 0-2.975-8.396 35.48 35.48 0 0 0-4.14-7.045 39.492 39.492 0 0 1 19.952 13.979ZM22.07 22.069a39.487 39.487 0 0 1 16.356-9.843c-.094.122-.19.238-.282.361a45.643 45.643 0 0 0-6.822 15.08q-6.438-.545-12.846-1.462a39.825 39.825 0 0 1 3.594-4.136Zm-3.594 51.726q6.399-.923 12.837-1.462a57.018 57.018 0 0 0 2.975 8.396 35.484 35.484 0 0 0 4.14 7.045 39.492 39.492 0 0 1-19.952-13.979Zm59.456 4.136a39.486 39.486 0 0 1-16.356 9.843c.094-.122.19-.238.282-.361a45.643 45.643 0 0 0 6.822-15.08q6.438.545 12.846 1.462a39.825 39.825 0 0 1-3.594 4.136Z"
                        data-original="#000000" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2" />
                  </svg>
                  <span class="block">TR</span>
               </a>
               <div class="action-drop absolute">
                  <ul>
                     <li><a class="block" href="">Türkçe</a></li>
                     <li><a class="block" href="">English</a></li>
                     <li><a class="block" href="">عربي</a></li>
                  </ul>
               </div>
            </li>
         </ul>
      </div> -->