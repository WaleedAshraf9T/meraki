<?php require_once "views/partials/header-home.php"; ?>

<div class="hero-video fixed">
    <!-- <video class="h-screen w-screen object-cover" autoplay muted loop src="/assets/videos/01-c.mp4" alt="Meraki Capital Partners Story Video"></video> -->
    <div class="video-wrapper">
        <video id="slider-video" class="h-screen w-screen object-cover" alt="Meraki Capital Partners Story Video" autoplay muted loop playsinline poster="path_to_poster_image.jpg">
            <!-- Initial video source -->
            <source id="current-video" src="" type="video/mp4">
        </video>
    </div>
    <div class="fixed top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>
    <div class="fixed top-0 left-0 w-full h-screen bg-black z-[2] opacity-20"></div>

    <div id="inner-content" class="absolute top-0 left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
        <h1 id="title" class="font-black text-[5.5vw] leading-[5vw] text-white leading-2 tracking-tight">PARTNER FOR <br> <span style="color: transparent; -webkit-text-stroke: 1px white;">GROWTH</span></h1>
    </div>

    <div id="bottom-bar" class="w-full fixed bottom-0 left-0 p-10 z-10 flex justify-between items-end">
        <div id="nav-dots">
            <?php foreach ($heroVideosLinks as $link) : ?>
                <div class="bottom-slider-nav-dot bg-white w-2 h-2 rounded-full my-4 transition duration-300 cursor-pointer"></div>
            <?php endforeach ?>
        </div>

        <div id="nav-buttons" class="flex">
            <div id="autoplay-toggler" class="relative cursor-pointer flex" onclick="">
                <div class="w-12 h-12 rounded-full bg-transparent border-2 border-white border-dashed mx-1 duration-1000 flex items-center justify-center hover:motion-safe:animate-spin z-[2]"></div>
                <img src="/assets/icons/pause.svg" alt="media play icon" class="w-3 text-white relative -left-1/2">
            </div>
            <div id="prev-btn" class="w-12 h-12 rounded-full bg-white cursor-pointer mx-1 flex items-center justify-center hover:scale-110 trasition duration-200"><img src="/assets/icons/angle-small-left.svg" alt="media play icon" class="w-4" onclick="prevVideo()"></div>
            <div id="next-btn" class="w-12 h-12 rounded-full bg-white cursor-pointer mx-1 flex items-center justify-center hover:scale-110 trasition duration-200"><img src="/assets/icons/angle-small-right.svg" alt="media play icon" class="w-4" onclick="nextVideo()"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('slider-video');
        const videoSlider = document.getElementById('video-slider');
        const navDots = document.getElementById('nav-dots');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const autoplayToggler = document.getElementById('autoplay-toggler');
        const heroTitle =document.getElementById('title');

        const videoUrls = <?= json_encode($heroVideosLinks) ?>;
        const videoTitles = <?= json_encode($heroVideoHeadings) ?>

        let currentIndex = 0;

        function loadVideo(index) {
            video.src = videoUrls[index];
            video.load();
            video.play();
        }

        loadVideo(currentIndex);

        prevBtn.addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + videoUrls.length) % videoUrls.length;
            heroTitle.innerHTML = videoTitles[currentIndex];
            loadVideo(currentIndex);
        });
        
        nextBtn.addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % videoUrls.length;
            heroTitle.innerHTML = videoTitles[currentIndex];
            loadVideo(currentIndex);
        });
    });
</script>