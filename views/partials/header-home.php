<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/script.js"></script>
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> <?= $title ?> </title>
</head>

<body>
    <div class="main">
        <nav class="bg-transparent h-[20vh] w-full flex justify-between items-center px-12 fixed z-50">
            <!-- Logo -->
            <a href="/" class="w-[10.5%]"><img src="/assets/images/logo-white.svg" alt="Meraki Capital Partners Logo"></a>

            <!-- Navigation 3 dotes -->
            <div id="nav-side-bar-icon" class="flex bg-transparent p-5 rounded-full cursor-pointer hover:backdrop-blur hover:scale-110 hover:border-white hover:border-2 transition duration-500 ease-in-out" onmouseleave="removeSidbarNavIconAnimation()" onmouseenter="addSidbarNavIconAnimation()" onclick="navIconClick()">
                <div class="dot bg-white w-1 h-1 rounded-full m-[4px] transition duration-300"></div>
                <div class="dot bg-white w-1 h-1 rounded-full m-[4px] transition duration-300"></div>
                <div class="dot bg-white w-1 h-1 rounded-full m-[4px] transition duration-300"></div>
            </div>

            <div id="nav-sidbar-overlay" class="translate-x-[-100vh] transition duration-700 bg-black/50 h-screen w-[100vh] absolute top-0 left-0 z-[-1]"></div>

            <div id="nav-sidbar" class="translate-x-[150vh] transition duration-700 absolute w-[150vh] h-screen bg-[#111111] top-0 right-0 z-[-1] flex items-center justify-center font-extrabold text-7xl">
                <ul class="flex flex-col items-center">
                    <a href="/" class="m-2 text-transparent active-nav-item">
                        <li>HOME</li>
                    </a>
                    <a href="#" class="m-2 text-white">
                        <li>ABOUT</li>
                    </a>
                    <a href="#" class="m-2 text-white">
                        <li>WORKS</li>
                    </a>
                    <a href="#" class="m-2 text-white">
                        <li>NEWS</li>
                    </a>
                    <a href="#" class="m-2 text-white">
                        <li>CONTACT</li>
                    </a>
                </ul>
            </div>
        </nav>