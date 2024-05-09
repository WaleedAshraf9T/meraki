<?php require_once "views/partials/header.php"; ?>
<!-- <?php require_once "views/partials/preloader.php"; ?> -->

<!-- Main Contact Start -->

<!-- Hero Section -->
<section class="select-none">
    <img class="h-screen w-screen object-cover" src="/assets/images/the-firm-2.webp" alt="about section hero image contains building construction under development or completed representing the progress">
    <!-- Overlay for film grain -->
    <div class="overlay-film-grain absolute top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>

    <!-- Overlay for dark background -->
    <div class="overlay-dark absolute top-0 left-0 w-full h-screen bg-black z-[2] opacity-30"></div>

    <div class="title-container absolute top-0 left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
        <!-- Slider Main Title -->
        <h1 class="title font-black text-[5vw] max-lg:text-[10vw] max-md:text-[9vw] leading-[5vw] leading-2 max-lg:leading-[10vw] max-md:leading-10 text-white tracking-tight">THE <span style="color: transparent; -webkit-text-stroke: 1px white;">FIRM</span></h1>
    </div>
</section>

<!-- About Us Paragraph Start -->
<section class="select-none w-screen h-screen flex flex-col items-center justify-center py-[25vh]">
    <div class="w-[50vw]">
        <img src="/assets/images/logo-white-outline.svg" alt="Meraki Logo White" class="w-full mb-5">
        <p class="text-white text-[2.2vw] font-black text-justify leading-normal tracking-wider">is an alternative investment firm primarily focused on private equity and real estate strategies. <span style="color: transparent; -webkit-text-stroke: 1px white;">Headquartered in Toronto, Canada</span> the firm is one of the most active real assets and growth capital investors in North America.</p>
    </div>
</section>
<!-- About Us Paragraph End -->

<!-- About Us Paragraph Start -->
<section class="select-none w-screen h-screen flex flex-col items-center justify-center py-[20vh]">
    <div class="flex items-center w-screen py-[25vh]">
        <img src="/assets/images/the-firm-1.webp" alt="A tall building symbolizing the success with the support of meraki capital partners" class="w-[65vw] h-screen object-cover object-center rounded-tr-3xl rounded-br-3xl">
        
        <div class="relative -left-[20vw] w-screen h-3/4 bg-[#151515] rounded-3xl p-20 flex flex-col justify-evenly ">
            <img src="/assets/images/icon-1.svg" alt="" class="w-1/6">
            <h2 class="text-white font-bold text-4xl leading-normal tracking-wide">At Meraki we do things differently.</h2>
            <p class="text-white font-medium text-xxl leading-normal tracking-wide">We fully immerse ourselves with our partners to strengthen the foundations, scale at large and continuously invest in two P’s – our People and Processes.</p>
        </div>
    </div>
</section>
<!-- About Us Paragraph End -->

<!-- Main Contacnt End -->

<!-- Current Page Javascript Start-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navbar = document.getElementById("mainSideNavbar");
        navbar.style.display = "flex";
    });
</script>
<!-- Current Page Javascript End-->

<?php require_once "views/partials/footer.php" ?>