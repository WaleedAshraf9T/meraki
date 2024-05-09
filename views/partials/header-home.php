<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS, JS, Favicon Linking -->
    <script src="/script.js"></script>
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">

    <!-- Swiper JS CDN -->
    <link rel="stylesheet" href="/views/swiper-bunble.min.css" />
    <script src="/views/swiper-bundle.min.js"></script>

    <!-- Tailwind CSS CDN -->
    <script src="/tailwindcss.js"></script>
    <title> <?= $title ?> </title>
</head>

<body class="bg-[#111111]" onload="preloader(); switchNavItem()">
    <div id="main">
        <nav id="mainSideNavbar" style="display: none;" class="bg-transparent h-[17vh] max-md:h-[14vh] w-full justify-between items-center px-12 max-lg:px-10 max-md:px-8 fixed z-40">
            <!-- Logo -->
            <a href="/" class="w-[10.5%] max-lg:w-[15%] max-md:w-[30%]"><img src="/assets/images/logo-white.svg" alt="Meraki Capital Partners Logo"></a>

            <!-- Navigation 3 dotes -->
            <div id="nav-side-bar-icon" class="flex bg-transparent p-5 rounded-full cursor-pointer hover:bg-white hover:max-md:bg-transparent hover:scale-110 transition duration-500 ease-in-out" onmouseleave="removeSidbarNavIconAnimation()" onmouseenter="addSidbarNavIconAnimation()" onclick="navIconClick()">
                <div class="dot bg-white max-md:bg-white w-1 h-1 max-lg:w-2 max-lg:h-2 max-md:w-[6px] max-md:h-[6px] rounded-full m-[4px] transition duration-300"></div>
                <div class="dot bg-white max-md:bg-white w-1 h-1 max-lg:w-2 max-lg:h-2 max-md:w-[6px] max-md:h-[6px] rounded-full m-[4px] transition duration-300"></div>
                <div class="dot bg-white max-md:bg-white w-1 h-1 max-lg:w-2 max-lg:h-2 max-md:w-[6px] max-md:h-[6px] rounded-full m-[4px] transition duration-300"></div>
            </div>

            <div id="nav-sidbar-overlay" class="translate-x-[-35vw] transition duration-700 bg-black/50 h-screen w-[35vw] absolute top-0 left-0 z-[-1]" onclick="navIconClick()"></div>

            <div id="nav-sidbar" class="translate-x-[75vw] transition duration-700 absolute w-[70vw] h-screen bg-[#111111] top-0 right-0 z-[-1] flex flex-col items-center justify-center font-extrabold text-6xl max-lg:text-5xl max-md:text-4xl">
                <a href="/" class="nav-item m-2 text-transparent">
                    HOME
                </a>
                <a href="/firm" class="nav-item m-2 text-white">
                    THE FIRM
                </a>
                <a href="#" class="nav-item m-2 text-white">
                    WORKS
                </a>
                <a href="#" class="nav-item m-2 text-white">
                    NEWS
                </a>
                <a href="/contact" class="nav-item m-2 text-white">
                    CONTACT
                </a>
            </div>
        </nav>