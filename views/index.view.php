<?php require_once "views/partials/header-home.php"; ?>
<?php require_once "views/partials/preloader.php"; ?>

<!-- Main Contact Starts-->
<div class="hero-video fixed select-none bg-black">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper h-screen w-screen">
            <!-- Slides -->
            <?php for ($i = 0; $i < sizeof($heroVideosLinks); $i++) : ?>
                <div class="swiper-slide">
                    <video class="slider-video h-screen w-screen object-cover" alt="Meraki Capital Partners Story Video" autoplay muted loop playsinline poster="/assets/images/black.webp">
                        <!-- Initial video source -->
                        <source src="<?= $heroVideosLinks[$i] ?>" type="video/mp4">
                        <source src="<?= str_replace('.mp4', '.webm', $heroVideosLinks[$i]) ?>" type="video/webm">
                        <source src="<?= str_replace('.mp4', '.ogv', $heroVideosLinks[$i]) ?>" type="video/ogg">
                    </video>

                    <!-- Overlay for film grain -->
                    <div class="overlay-film-grain absolute top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>

                    <!-- Overlay for dark background -->
                    <div class="overlay-dark absolute top-0 left-0 w-full h-screen bg-black z-[2] opacity-20"></div>

                    <div class="title-container absolute top-[5vh] left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
                        <!-- Slider Main Title -->
                        <h1 class="title font-black text-[5vw] max-lg:text-[10vw] max-md:text-[9vw] leading-[5vw] text-white leading-2 max-lg:leading-[10vw] max-md:leading-10 tracking-tight"><?= $heroVideoHeadings[$i] ?></h1>

                        <!-- Read More Link -->
                        <div class="mt-10 cursor-pointer">
                            <div class="w-[7vw] h-[7vw] max-md:w-[25vw] max-md:h-[25vw] rounded-full bg-transparent border-2 border-white border-dashed mx-1 duration-1000 hover:motion-safe:animate-spin z-[2]"></div>
                            <div class="read-more-btn relative -top-1/2 text-white -z-10 text-[14px]">Read More</div>
                        </div>
                        <!-- <a href="#" class="mt-10 text-white font-normal transition duration-200 hover:scale-110 max-lg:text-2xl max-md:text-xl">Read More</a> -->
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>


    <div id="bottom-bar" class="w-full fixed bottom-0 left-0 p-10 z-10 flex justify-between items-end">
        <div id="nav-dots">
            <div class="bottom-slider-nav-dot w-2 rounded-full my-4 transition duration-300 cursor-pointer"></div>
        </div>

        <!-- Bottom Nevigation Buttons Play/Pause Autoplay, Previouse SLide, Next Slide -->
        <div id="nav-buttons" class="flex">
            <div id="autoplay-toggler" class="relative cursor-pointer flex" onclick="toggleAutoplay()">
                <div class="w-12 h-12 rounded-full bg-transparent border-2 border-white border-dashed mx-1 duration-1000 flex items-center justify-center hover:motion-safe:animate-spin z-[2]"></div>
                <img src="/assets/icons/pause.svg" alt="media play icon" class="w-3 text-white relative -left-1/2">
            </div>
            <div id="prev-btn" class="w-12 h-12 rounded-full bg-white cursor-pointer mx-1 flex items-center justify-center hover:scale-110 trasition duration-200">
                <img src="/assets/icons/angle-small-left.svg" alt="media play icon" class="w-4">
            </div>
            <div id="next-btn" class="w-12 h-12 rounded-full bg-white cursor-pointer mx-1 flex items-center justify-center hover:scale-110 trasition duration-200">
                <img src="/assets/icons/angle-small-right.svg" alt="media play icon" class="w-4">
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.querySelector('video');
        video.muted = true;
        video.play();
        let navbar = document.getElementById("mainSideNavbar");
        navbar.style.display = "flex";
    });

    var swiper = new Swiper(".swiper", {
        preloadImages: true,
        autoplay: {
            delay: 9000,
            disableOnInteraction: false
        },
        init: true,
        loop: true,
        speed: 1200,
        grabCursor: true,
        mousewheel: true,
        keyboard: true,
        simulateTouch: true,
        parallax: true,
        effect: "slide",
        direction: "vertical",
        pagination: {
            el: ".bottom-slider-nav-dot",
            clickable: true
        },
        navigation: {
            nextEl: "#next-btn",
            prevEl: "#prev-btn"
        },
        on: {
            slideChange: function() {
                // Pause all videos
                document.querySelectorAll(".slider-video").forEach(function(video) {
                    video.pause();
                });
                // Play video in active slide
                var activeSlide = this.slides[this.activeIndex];
                if (activeSlide) {
                    var video = activeSlide.querySelector(".slider-video");
                    var titleContainer = activeSlide.querySelector(".title-container");
                    var title = activeSlide.querySelector(".title");

                    if (video && titleContainer && title) {
                        video.play(); // Play video in active slide

                    }
                }
            },

            slideslideChangeTransitionStart: function() {
                document.querySelectorAll(".slider-video").forEach(function(selectedVideo) {
                    selectedVideo.pause();
                })
            },

            slideChangeTransitionEnd: function() {
                document.querySelectorAll(".slider-video").forEach(function(selectedVideo) {
                    selectedVideo.play();
                })
            }
        },
    });

    function toggleAutoplay() {
        let togglerIcon = document.querySelector("#autoplay-toggler img");
        if (swiper.autoplay.running) {
            swiper.autoplay.stop();
            togglerIcon.src = "/assets/icons/play.svg";
        } else {
            swiper.autoplay.start();
            togglerIcon.src = "/assets/icons/pause.svg";
        }
    }
</script>