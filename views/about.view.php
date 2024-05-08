<?php require_once "views/partials/header.php"; ?>
<?php require_once "views/partials/preloader.php"; ?>

<!-- --------- -->
<!-- Main HTML -->
<!-- --------- -->
<style>
    .vertical-lines-wrapper {
        position: fixed;
        width: 100%;
        height: 100%;
        overflow: hidden;
        left: 0;
        top: 0;
        margin: 0;
        -webkit-pointer-events: none;
        -moz-pointer-events: none;
        pointer-events: none;
        z-index: 2;
    }

    .vertical-lines {
        position: fixed;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        opacity: 1;
        -moz-opacity: 1;
        -webkit-opacity: 1;
        filter: alpha(opacity=100);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    }

    .vertical-effect:first-child::before {
        top: 0;
        -webkit-animation: raindrop 6s ease-out infinite;
        -moz-animation: raindrop 6s ease-out infinite;
        -ms-animation: raindrop 6s ease-out infinite;
        -o-animation: raindrop 6s ease-out infinite;
        animation: raindrop 6s ease-out infinite;
        background: -webkit-linear-gradient(top, rgba(225, 225, 225, 0), rgba(225, 225, 225, 1));
        background: -ms-linear-gradient(top, rgba(225, 225, 225, 0), rgba(225, 225, 225, 1));
        background: linear-gradient(top, rgba(225, 225, 225, 0), rgba(225, 225, 225, 1));
    }

    .vertical-effect:first-child::before,
    .vertical-effect:last-child::before {
        content: "";
        position: absolute;
        right: -2px;
    }

    .vertical-effect::before {
        content: "";
        position: absolute;
        display: block;
        width: 3px;
        -webkit-animation-direction: normal;
        -moz-animation-direction: normal;
        -ms-animation-direction: normal;
        -o-animation-direction: normal;
        animation-direction: normal;
    }
</style>

<div class="vertical-lines-wrapper">
    <div class="vertical-lines">
        <div class="vertical-lines-wrapper">
            <div class="vertical-effect"></div>
            <div class="vertical-effect"></div>
            <div class="vertical-effect"></div>
        </div>
    </div>
    <div class="vertical-effect"></div>
    <div class="vertical-effect"></div>
    <div class="vertical-effect"></div>
</div>

<!-- Hero Section -->
<section class="fixed">
    <img class="h-screen w-screen" src="/assets/images/about-1.webp" alt="about section hero image contains building construction under development or completed representing the progress">
    <!-- Overlay for film grain -->
    <div class="overlay-film-grain absolute top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>

    <!-- Overlay for dark background -->
    <div class="overlay-dark absolute top-0 left-0 w-full h-screen bg-black z-[2] opacity-20"></div>

    <div class="title-container absolute top-0 left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
        <!-- Slider Main Title -->
        <h1 class="title font-black text-[5vw] max-lg:text-[10vw] max-md:text-[9vw] leading-[5vw] leading-2 max-lg:leading-[10vw] max-md:leading-10 text-white tracking-tight">THE <span style="color: transparent; -webkit-text-stroke: 1px white;">FIRM</span></h1>
    </div>
</section>


    <!-- ---------- -->
    <!-- Javascript -->
    <!-- ---------- -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let navbar = document.getElementById("mainSideNavbar");
            navbar.style.display = "flex";
        });
    </script>

    <?php require_once "views/partials/footer.php" ?>