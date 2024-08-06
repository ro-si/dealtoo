<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Blogez - Tailwind CSS Bloge Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind CSS is a utility-first CSS framework for rapidly building modern websites without ever leaving your HTML, Tailwindcss Blog Section, Blog Section For Tailwind CSS Template Section" name="description" />
    <meta content="Techzaa" name="author" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Style css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">



    {{--  --}}

  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="css/tiny-slider.css">
  
  <link rel="stylesheet" href="css/style.css">




  
</head>

<body class="font-body">

    <section class="section py-28 bg-gray-800" id="home">
        <div class="container">
            <div class="flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-4xl font-bold leading-[50px] tracking-wide text-transparent bg-clip-text bg-gradient-to-l from-pink-400 to-blue-600">
                        Blogez - Blog Pages Tailwind CSS 3 HTML Template
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Blog -->
    <section id="demo" class="py-28">
        <div class="container">
            <div class="max-w-md  mx-auto text-center">
                <h2 class="text-3xl font-bold">Blog Section 1</h2>
                <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </div><!-- end max-w -->

            <div class="relative">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14">
                    <div class="shadow bg-white">
                        <div class="relative">
                            <img src="assets/images/blog-1.jpg" alt="">
                            <div class="absolute inset-x-0 top-auto bottom-0">
                                <div class="bg-white inline-block p-4">
                                    <div class="flex items-center gap-3">
                                        <div>
                                            <img src="assets/images/user/img-1.jpg" class="h-10 w-10 rounded-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h4 class="text-gray-800">Andrea William</h4>
                                            <h5 class="text-sm  text-gray-500">Designer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-4 p-6">
                            <div class="w-20">
                                <hr class="border-[1px] border-blue-500 mt-4">
                            </div>
                            <div>
                                <h2 class="text-xl">How to give a better feedback</h2>
                                <p class="font-medium mt-2 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt.</p>
                                <a href="{{ url('/blog') }}"
                                    class="flex items-center gap-2 text-base font-medium text-blue-500 hover:text-blue-600 transition-all duration-500">Read
                                    more
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div><!-- end grid-cols -->

                    <div class="shadow bg-white">
                        <div class="relative">
                            <img src="assets/images/blog-2.jpg" alt="">
                            <div class="absolute inset-x-0 top-auto bottom-0">
                                <div class="bg-white inline-block p-4">
                                    <div class="flex items-center gap-3">
                                        <div>
                                            <img src="assets/images/user/img-2.jpg" class="h-10 w-10 rounded-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h4 class="text-gray-800">Jonathan Hope</h4>
                                            <h5 class="text-sm  text-gray-500">Designer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-4 p-6">
                            <div class="w-20">
                                <hr class="border-[1px] border-blue-500 mt-4">
                            </div>
                            <div>
                                <h2 class="text-xl">Should UI designers learn how to code?</h2>
                                <p class="font-medium mt-2 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut.</p>
                                <a href="{{ url('/blog') }}"
                                    class="flex items-center gap-2 text-base font-medium text-blue-500 hover:text-blue-600 transition-all duration-500">Read
                                    more
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div><!-- end grid-cols -->

                    <div class="shadow bg-white">
                        <div class="relative">
                            <img src="assets/images/blog-3.jpg" alt="">
                            <div class="absolute inset-x-0 top-auto bottom-0">
                                <div class="bg-white inline-block p-4">
                                    <div class="flex items-center gap-3">
                                        <div>
                                            <img src="assets/images/user/img-1.jpg" class="h-10 w-10 rounded-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h4 class="text-gray-800">Michael Smith</h4>
                                            <h5 class="text-sm  text-gray-500">Designer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-4 p-6">
                            <div class="w-20">
                                <hr class="border-[1px] border-blue-500 mt-4">
                            </div>
                            <div>
                                <h2 class="text-xl">Step by step to conduct usability typesetting</h2>
                                <p class="font-medium mt-2 mb-6">Sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Dolor sit amet, consectetur adipiscing</p>
                                <a href="{{ url('/blog') }}
                                "
                                    class="flex items-center gap-2 text-base font-medium text-blue-500 hover:text-blue-600 transition-all duration-500">Read
                                    more
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div><!-- end grid-cols -->
                </div><!-- end grid -->

                <div>
                    <div class="hidden md:block">
                        <div class="after:w-32 after:h-32 after:absolute after:-top-12 after:-start-12 after:-z-10 after:bg-[url('../images/dot3.svg')]"></div>
                    </div><!-- end dots -->
                    <div class="hidden md:block">
                        <div class="after:w-32 after:h-32 after:absolute after:-bottom-12  after:-end-16 after:-z-10 after:bg-[url('../images/dot3.svg')]"></div>
                    </div><!-- end dots -->
                </div>
            </div><!-- end relative -->
        </div><!-- end container -->
    </section>
    <!-- End Blog -->

    <!-- Start Blog-2 -->
    <section class="relative py-28 bg-cover bg-no-repeat" style="background-image: url(assets/images/blog-bg-1.png);">
        <div class="container">
            <div class="max-w-md  mx-auto text-center">
                <h2 class="text-3xl font-bold">Blog Section 2</h2>
                <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14">
                <div class="p-6 rounded-lg bg-white">
                    <img src="assets/images/blog-4.jpg" class="rounded-lg" alt="">
                    <h2 class="text-xl font-bold mt-5">A Leading Global Agency In 15 Years.</h2>
                    <div class="flex items-center gap-3 mt-4">
                        <div>
                            <img src="assets/images/user/img-1.jpg" class="h-10 w-10 rounded-full" alt="">
                        </div>
                        <div>
                            <h4 class="text-gray-800">Jhon catla</h4>
                            <h5 class="text-gray-500">15-12-2023</h5>
                        </div>
                    </div>
                    <p class="text-base font-semibold text-gray-500 mt-5">Lorem ipsum dolor sit amet consectetur Eius iusto debitis doloremque nulla reiciendis illum.</p>
                    <div class="inline-block mt-6">
                        <a href="{{ url('/blog') }}" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                            Read more
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="p-6 rounded-lg bg-white">
                    <img src="assets/images/blog-5.jpg" class="rounded-lg" alt="">
                    <h2 class="text-xl font-bold mt-5">A Leading Global Agency In 15 Years.</h2>
                    <div class="flex items-center gap-3 mt-4">
                        <div>
                            <img src="assets/images/user/img-2.jpg" class="h-10 w-10 rounded-full" alt="">
                        </div>
                        <div>
                            <h4 class="text-gray-800">Credon catla</h4>
                            <h5 class="text-gray-500">15-12-2023</h5>
                        </div>
                    </div>
                    <p class="text-base font-semibold text-gray-500 mt-5">Lorem ipsum dolor sit amet consectetur Eius iusto debitis doloremque nulla reiciendis illum.</p>
                    <div class="inline-block mt-6">
                        <a href="{{ url('/blog') }}" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                            Read more
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="p-6 rounded-lg bg-white">
                    <img src="assets/images/blog-6.jpg" class="rounded-lg" alt="">
                    <h2 class="text-xl font-bold mt-5">Startup Leading Global Agency In 5 Years.</h2>
                    <div class="flex items-center gap-3 mt-4">
                        <div>
                            <img src="assets/images/user/img-3.jpg" class="h-10 w-10 rounded-full" alt="">
                        </div>
                        <div>
                            <h4 class="text-gray-800">Jhon catla</h4>
                            <h5 class="text-gray-500">15-9-2023</h5>
                        </div>
                    </div>
                    <p class="text-base font-semibold text-gray-500 mt-5">Lorem ipsum dolor sit amet consectetur Eius iusto debitis doloremque nulla reiciendis illum.</p>
                    <div class="inline-block mt-6">
                        <a href="{{ url('/blog') }}" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                            Read more
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>
    <!-- End Blog-2 -->

    <!-- Start Blog-3 -->
    <section class="py-28 flex items-center justify-center">
        <div class="container relative">
            <div class="max-w-md  mx-auto text-center">
                <h2 class="text-3xl font-bold">Blog Section 3</h2>
                <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div><!-- end max-width -->

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-14">
                <div class="bg-slate-100 p-5 rounded-md">
                    <div class="flex flex-wrap sm:flex-nowrap items-center gap-5">
                        <div class="w-40 h-40">
                            <img src="assets/images/blog-7.jpg" class="h-full w-full rounded-md" alt="">
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="grow">
                                <p class="flex items-center gap-1 mb-2">
                                <span>
                                    <svg class="h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.5 -0.5 14 14">
                                        <g>
                                            <path id="Vector" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M10.678571428571429 0.4642857142857143h-8.357142857142858c-0.5128314285714286 0 -0.9285714285714286 0.41573535714285714 -0.9285714285714286 0.9285714285714286v10.214285714285715c0 0.51285 0.41574 0.9285714285714286 0.9285714285714286 0.9285714285714286h8.357142857142858c0.51285 0 0.9285714285714286 -0.4157214285714286 0.9285714285714286 -0.9285714285714286v-10.214285714285715c0 -0.5128360714285715 -0.4157214285714286 -0.9285714285714286 -0.9285714285714286 -0.9285714285714286Z" stroke-width="1"></path>
                                            <path id="Vector_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.3928571428571428 5.107142857142858h10.214285714285715" stroke-width="1"></path>
                                            <g id="Group 623">
                                                <path id="Vector_3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S3.8182207142857143 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S4.074636428571429 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 641">
                                                <path id="Vector_5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S6.371792142857143 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S6.628207857142857 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 642">
                                                <path id="Vector_7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S8.925363571428571 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S9.181779285714287 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 643">
                                                <path id="Vector_9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 644">
                                                <path id="Vector_11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 645">
                                                <path id="Vector_13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <path id="Vector_15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.285714285714286 2.7857142857142856H8.357142857142858" stroke-width="1"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-medium">February 24,2022</span>
                            </p>
                            <h2 class="text-xl font-bold mb-6 hover:text-blue-500 transition-all duration-500 cursor-pointer">Importance of Keyword Resarch in a Blog</h2>
                            </div>
                            <a href="{{ url('/blog') }}" class="shrink inline-flex items-center justify-center py-1.5 px-5 rounded-full text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="bg-slate-100 p-5 rounded-md">
                    <div class="flex flex-wrap sm:flex-nowrap items-center gap-5">
                        <div class="w-40 h-40">
                            <img src="assets/images/blog-8.jpg" class="h-full w-full rounded-md" alt="">
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="grow">
                                <p class="flex items-center gap-1 mb-2">
                                <span>
                                    <svg class="h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.5 -0.5 14 14">
                                        <g>
                                            <path id="Vector" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M10.678571428571429 0.4642857142857143h-8.357142857142858c-0.5128314285714286 0 -0.9285714285714286 0.41573535714285714 -0.9285714285714286 0.9285714285714286v10.214285714285715c0 0.51285 0.41574 0.9285714285714286 0.9285714285714286 0.9285714285714286h8.357142857142858c0.51285 0 0.9285714285714286 -0.4157214285714286 0.9285714285714286 -0.9285714285714286v-10.214285714285715c0 -0.5128360714285715 -0.4157214285714286 -0.9285714285714286 -0.9285714285714286 -0.9285714285714286Z" stroke-width="1"></path>
                                            <path id="Vector_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.3928571428571428 5.107142857142858h10.214285714285715" stroke-width="1"></path>
                                            <g id="Group 623">
                                                <path id="Vector_3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S3.8182207142857143 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S4.074636428571429 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 641">
                                                <path id="Vector_5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S6.371792142857143 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S6.628207857142857 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 642">
                                                <path id="Vector_7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S8.925363571428571 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S9.181779285714287 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 643">
                                                <path id="Vector_9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 644">
                                                <path id="Vector_11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 645">
                                                <path id="Vector_13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <path id="Vector_15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.285714285714286 2.7857142857142856H8.357142857142858" stroke-width="1"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-medium">February 24,2022</span>
                            </p>
                            <h2 class="text-xl font-bold mb-6 hover:text-blue-500 transition-all duration-500 cursor-pointer"> Popular Email Marketing Techniques 2023</h2>
                            </div>
                            <a href="{{ url('/blog') }}" class="shrink inline-flex items-center justify-center py-1.5 px-5 rounded-full text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="bg-slate-100 p-5 rounded-md">
                    <div class="flex flex-wrap sm:flex-nowrap items-center gap-5">
                        <div>
                            <img src="assets/images/blog-9.jpg" class="h-40 w-40 rounded-md" alt="">
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="grow">
                                <p class="flex items-center gap-1 mb-2">
                                <span>
                                    <svg class="h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.5 -0.5 14 14">
                                        <g>
                                            <path id="Vector" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M10.678571428571429 0.4642857142857143h-8.357142857142858c-0.5128314285714286 0 -0.9285714285714286 0.41573535714285714 -0.9285714285714286 0.9285714285714286v10.214285714285715c0 0.51285 0.41574 0.9285714285714286 0.9285714285714286 0.9285714285714286h8.357142857142858c0.51285 0 0.9285714285714286 -0.4157214285714286 0.9285714285714286 -0.9285714285714286v-10.214285714285715c0 -0.5128360714285715 -0.4157214285714286 -0.9285714285714286 -0.9285714285714286 -0.9285714285714286Z" stroke-width="1"></path>
                                            <path id="Vector_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.3928571428571428 5.107142857142858h10.214285714285715" stroke-width="1"></path>
                                            <g id="Group 623">
                                                <path id="Vector_3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S3.8182207142857143 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S4.074636428571429 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 641">
                                                <path id="Vector_5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S6.371792142857143 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S6.628207857142857 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 642">
                                                <path id="Vector_7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S8.925363571428571 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S9.181779285714287 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 643">
                                                <path id="Vector_9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 644">
                                                <path id="Vector_11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 645">
                                                <path id="Vector_13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <path id="Vector_15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.285714285714286 2.7857142857142856H8.357142857142858" stroke-width="1"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-medium">February 24,2022</span>
                            </p>
                            <h2 class="text-xl font-bold mb-6 hover:text-blue-500 transition-all duration-500 cursor-pointer">8 Best SEO Techniques for you in <br> 2023</h2>
                            </div>
                            <a href="{{ url('/blog') }}" class="shrink inline-flex items-center justify-center py-1.5 px-5 rounded-full text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="bg-slate-100 p-5 rounded-md">
                    <div class="flex flex-wrap sm:flex-nowrap items-center gap-5">
                        <div class="w-40 h-40">
                            <img src="assets/images/blog-10.jpg " class="h-full w-full rounded-md" alt="">
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="grow">
                                <p class="flex items-center gap-1 mb-2">
                                <span>
                                    <svg class="h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.5 -0.5 14 14">
                                        <g>
                                            <path id="Vector" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M10.678571428571429 0.4642857142857143h-8.357142857142858c-0.5128314285714286 0 -0.9285714285714286 0.41573535714285714 -0.9285714285714286 0.9285714285714286v10.214285714285715c0 0.51285 0.41574 0.9285714285714286 0.9285714285714286 0.9285714285714286h8.357142857142858c0.51285 0 0.9285714285714286 -0.4157214285714286 0.9285714285714286 -0.9285714285714286v-10.214285714285715c0 -0.5128360714285715 -0.4157214285714286 -0.9285714285714286 -0.9285714285714286 -0.9285714285714286Z" stroke-width="1"></path>
                                            <path id="Vector_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.3928571428571428 5.107142857142858h10.214285714285715" stroke-width="1"></path>
                                            <g id="Group 623">
                                                <path id="Vector_3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S3.8182207142857143 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S4.074636428571429 7.428571428571429 3.9464285714285716 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 641">
                                                <path id="Vector_5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S6.371792142857143 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S6.628207857142857 7.428571428571429 6.5 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 642">
                                                <path id="Vector_7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c-0.12820785714285715 0 -0.23214285714285715 -0.103935 -0.23214285714285715 -0.23214285714285715S8.925363571428571 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                                <path id="Vector_8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 7.892857142857143c0.12820785714285715 0 0.23214285714285715 -0.103935 0.23214285714285715 -0.23214285714285715S9.181779285714287 7.428571428571429 9.053571428571429 7.428571428571429" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 643">
                                                <path id="Vector_9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3.9464285714285716 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 644">
                                                <path id="Vector_11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.5 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <g id="Group 645">
                                                <path id="Vector_13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c-0.12820785714285715 0 -0.23214285714285715 -0.10390714285714286 -0.23214285714285715 -0.23214285714285715s0.103935 -0.23214285714285715 0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                                <path id="Vector_14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.053571428571429 10.214285714285715c0.12820785714285715 0 0.23214285714285715 -0.10390714285714286 0.23214285714285715 -0.23214285714285715s-0.103935 -0.23214285714285715 -0.23214285714285715 -0.23214285714285715" stroke-width="1"></path>
                                            </g>
                                            <path id="Vector_15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.285714285714286 2.7857142857142856H8.357142857142858" stroke-width="1"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-medium">February 24,2022</span>
                            </p>
                            <h2 class="text-xl font-bold mb-6 hover:text-blue-500 transition-all duration-500 cursor-pointer">What are backlinks and Why They are Important</h2>
                            </div>
                            <a href="{{ url('/blog') }}" class="shrink inline-flex items-center justify-center py-1.5 px-5 rounded-full text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- End Blog-3 -->
    
    <!-- Start Blog-4 -->
    <section class="lg:py-28 relative">
        <div class="absolute inset-0" style="background-image: url(assets/images/blog-11.jpg);"></div>
        <div class="absolute inset-0 bg-white/10 backdrop-blur-xl"></div>
        <!-- end bg backdrop -->

        <div class="container">
            <div class="relative max-w-md mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-900">Blog Section 4</h2>
                <p class="text-base font-medium text-gray-800 mt-4 mb-14">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </div>
            <div class="bg-white shadow relative rounded-lg overflow-hidden">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                    <div class="relative group transition-all duration-700">
                        <img src="assets/images/blog-11.jpg" class="h-full w-full" alt="">

                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/30"></div>
                        <div class="absolute inset-x-0 top-auto bottom-0 p-4 transition-all duration-1000">
                            <div class="bg-black/40 backdrop-blur-xl p-6 rounded-md">
                                <span class="font-semibold uppercase text-blue-500">Article</span>
                                <h2 class="text-xl font-bold text-white mt-1">Asking God for Help</h2>
                                <p class="text-base font-semibold text-gray-100 mt-2">Namaskar, welcome to Incredible India, where culture echoes, tradition speaks, beauty enthralls and diversity</p>

                                <div class="flex items-center justify-between mt-5">
                                    <p class="text-gray-200">Wick Rarren | April 11, 2023</p>
                                    <a href="{{ url('/blog') }}" class="flex items-center gap-2 text-blue-500 border-b border-dashed border-blue-500">Read
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="pt-px">
                            <span class="font-medium uppercase text-blue-500">Article</span>
                            <h2 class="text-xl font-semibold mt-1">Asking God for Inspiration</h2>
                            <p class="text-base font-medium text-gray-500 mt-2">Namaskar, welcome to Incredible India, where culture echoes, tradition speaks, beauty enthralls and diversity</p>

                            <div class="flex items-center justify-between mt-5">
                                <p>Mathony Ailler | April 11, 2023</p>
                                <a href="{{ url('/blog') }}" class="flex items-center gap-2 text-blue-500 border-b border-dashed border-blue-500">Read
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="my-10">
                            <span class="font-medium uppercase text-blue-500">Story</span>
                            <h2 class="text-xl font-semibold mt-1">The Right Fit</h2>
                            <p class="text-base font-medium text-gray-500 mt-2">Namaskar, welcome to Incredible India, where culture echoes, tradition speaks, beauty enthralls and diversity</p>

                            <div class="flex items-center justify-between mt-5">
                                <p>Carah Suarez | April 3, 2023</p>
                                <a href="{{ url('/blog') }}" class="flex items-center gap-2 text-blue-500 border-b border-dashed border-blue-500">Read
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="mb-10">
                            <span class="font-medium uppercase text-blue-500">Campus news</span>
                            <h2 class="text-xl font-semibold mt-1">Fist Week of May 2023</h2>
                            <p class="text-base font-medium text-gray-500 mt-2">Namaskar, welcome to Incredible India, where culture echoes, tradition speaks, beauty enthralls and diversity</p>

                            <div class="flex items-center justify-between mt-5">
                                <p>Kevin Nguyen | April 1, 2023</p>
                                <a href="{{ url('/blog') }}" class="flex items-center gap-2 text-blue-500 border-b border-dashed border-blue-500">Read
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <a href="#" class="inline-flex items-center gap-2 py-2 px-5 rounded font-semibold bg-blue-500/5 border border-dashed border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition-all duration-500">View All Post 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>
    <!-- End Blog-4 -->
    
    <!-- Start Blog-5 -->
    <section class="py-28 bg-slate-50">
        <div class="container">
            <div class="max-w-md  mx-auto text-center">
                <h2 class="text-3xl font-bold">Blog Section 5</h2>
                <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </div>

            <div class="relative">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-14">
                    <div class="relative">
                        <div class="bg-white shadow-lg">
                            <img src="assets/images/blog-12.jpg" alt="">
                            <div class="p-4">
                                <div class="flex items-center gap-5">
                                    <p>January 20,2023</p>
                                    <p>Announcement</p>
                                </div>
                                <h2 class="text-base font-medium">12 worst types of business accounts</h2>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-white shadow-lg">
                            <img src="assets/images/blog-13.jpg" alt="">
                            <div class="p-4">
                                <div class="flex items-center gap-5">
                                    <p>January 2,2023</p>
                                    <p>Inspiration</p>
                                </div>
                                <h2 class="text-base font-medium">Bad habits people in the industry</h2>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-white shadow-lg">
                            <img src="assets/images/blog-14.jpg" alt="">
                            <div class="p-4">
                                <div class="flex items-center gap-5">
                                    <p>December 26,2023</p>
                                    <p>Mobile App</p>
                                </div>
                                <h2 class="text-base font-medium">7 common mistakes everyone makes</h2>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute bg-white shadow-lg">
                            <img src="assets/images/blog-15.jpg" alt="">
                            <div class="p-4">
                                <div class="flex items-center gap-5">
                                    <p>December 26,2023</p>
                                    <p>Announcement </p>
                                </div>
                                <h2 class="text-base font-medium">12 worst types of business accounts</h2>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="bg-white shadow-lg h-full">
                            <div class="lg:flex">
                                <div class="flex flex-col bg-white p-6">
                                    <h2 class="shrink-0 text-xl font-bold">Step by step to conduct usability testing</h2>
                                    <p class="shrink-0 text-base font-medium mt-4">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet, consectetur adipiscing</p>
                                    <div class="grow gap-3 flex items-end">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <img src="assets/images/user/img-1.jpg" class="h-10 w-10 rounded-full" alt="">
                                            </div>
                                            <div>
                                                <h4 class="text-lg text-gray-800">Jhon catla</h4>
                                                <h5 class="text-gray-500 font-medium">15-12-2023</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div>
                                    <img src="assets/images/blog-16.jpg" alt="" class="h-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="hidden sm:block">
                        <div class="after:w-32 after:h-32 after:absolute after:-top-12 after:-left-12 after:-z-10 after:bg-[url('../images/dot3.svg')]"></div>
                    </div>
                    <div class="hidden sm:block">
                        <div class="after:w-32 after:h-32 after:absolute after:-bottom-12 after:-right-16 after:-z-10 after:bg-[url('../images/dot3.svg')]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog-5 -->
    
    <!-- Start Blog-6 -->
    <section class="py-28">
        <div class="container">
            <div class="max-w-md  mx-auto text-center">
                <h2 class="text-3xl font-bold">Blog Section 6</h2>
                <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div><!-- end max-w -->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-14">
                <div class="shadow bg-white rounded-md">
                    <div class="relative">
                        <div class="absolute top-0 start-0 p-2">
                            <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 12 Aug 2022</span>
                        </div>
                        <img src="assets/images/blog-17.jpg" class="rounded-md" alt="">
                        <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                            <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                                <div class="text-white text-center">
                                    <h4 class="text-2xl font-semibold">Sales buildings</h4>
                                    <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="{{ url('/blog') }}" class="underline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow bg-white rounded-md">
                    <div class="relative">
                        <div class="absolute top-0 start-0 p-2">
                            <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 15 Aug 2022</span>
                        </div>
                        <img src="assets/images/blog-18.jpg" class="rounded-md" alt="">
                        <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                            <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                                <div class="text-white text-center">
                                    <h4 class="text-2xl font-semibold">Read buildings</h4>
                                    <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="{{ url('/blog') }}" class="underline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shadow bg-white rounded-md">
                    <div class="relative">
                        <div class="absolute top-0 start-0 p-2">
                            <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 22   Aug 2022</span>
                        </div>
                        <img src="assets/images/blog-19.jpg" class="rounded-md" alt="">
                        <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                            <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                                <div class="text-white text-center">
                                    <h4 class="text-2xl font-semibold">Buy buildings</h4>
                                    <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="{{ url('/blog') }}" class="underline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Blog-6 -->



    @include('layout.footer')
    

    {{-- <footer class="py-8 bg-slate-100">
        <div class="container">
            <div class="flex">
                <div class="w-full">
                    <div class="text-center">
                        <p class="text-muted"> ©
                            <script>document.write(new Date().getFullYear())</script> Blogez. By <a class="font-medium"
                                href="#">Techzaa</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div><!-- end container -->
    </footer> --}}


    
</body>

</html>