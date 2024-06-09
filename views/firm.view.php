<?php require_once "views/partials/header-white-body.php"; ?>
<?php require_once "views/partials/preloader.php"; ?>

<!-- Main Contact Start -->

<!-- Hero Section -->
<section class="select-none">
    <img class="h-screen w-full object-cover" src="/assets/images/the-firm.webp" alt="about section hero image contains building construction under development or completed representing the progress">
    <!-- Overlay for film grain -->
    <div class="overlay-film-grain absolute top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>

    <!-- Overlay for dark background -->
    <div class="overlay-dark absolute top-0 left-0 w-full h-screen bg-black z-[2] opacity-30"></div>

    <div class="title-container absolute top-0 left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
        <!-- Slider Main Title -->
        <h1 class="title font-black text-[5vw] max-lg:text-[10vw] max-md:text-[9vw] leading-[5vw] leading-2 max-lg:leading-[10vw] max-md:leading-10 text-white tracking-tight">THE <span style="color: transparent; -webkit-text-stroke: 1px white;">FIRM</span></h1>
    </div>
</section>

<section class="bg-white w-full h-screen max-md:h-[70vh] rounded-tl-[50px] max-md:rounded-tl-[25px] rounded-tr-[50px] max-md:rounded-tr-[25px] relative -top-11 z-20 flex flex-col justify-center items-center">
    <img src="/assets/images/icon-4.svg" alt="" class="h-1/6 m-20 max-md:h-[10%]">
    <p class="w-[75vw] text-center text-[2.7vw] max-md:text-[2.5vh] font-normal tracking-normal leading-relaxed">Meraki is an alternative investment firm primarily focused on <b>private equity</b> and <b>real estate strategies</b>. Headquartered in Toronto, Canada the firm is one of the most active real assets and growth capital investors in North America.</p>
</section>


<section class="hidden w-full h-[35vh] max-md:h-[10vh] items-center justify-center">
    <div class="marquee w-full font-extrabold text-8xl max-md:text-4xl">
        <span>PUT SOMETHING OF YOURSELF, YOUR SOUL -</span>
        <span>PUT SOMETHING OF YOURSELF, YOUR SOUL</span>
        <span>PUT SOMETHING OF YOURSELF, YOUR SOUL</span>
    </div>
</section>

<section class="h-screen max-md:h-[50vh] w-full py-24 px-10 flex justify-center items-center">
    <img src="/assets/images/the-firm-5.webp" alt="" class="w-[95vw] h-full object-cover rounded-xl">
</section>

<section id='faq' class="w-full py-24 max-md:pt-4 px-[2.5vw] bg-white select-none">
    <?php for ($i = 0; $i < sizeof($faq); $i++) : ?>
        <div id="0<?= $i + 1 ?>" class="h-auto faq-item border-t-2 border-gray-600 py-8 px-5 cursor-pointer duration duration-300 ease-in-out" onclick="toggleFAQ('faq<?= $i + 1 ?>')">
            <div class="flex justify-between items-center">
                <div class="font-normal max-md:font-medium text-[40px] max-md:text-[25px]">
                    <span class="text-[#3F3F3F] mr-4">0<?= $i + 1 ?></span> <?= $faq[$i]['q'] ?>
                </div>
                <img src="/assets/icons/plus.svg" alt="Toggle Answer" class="max-md:w-1/6 transition-transform duration-300" id="icon<?= $i + 1 ?>">
            </div>
            <div id="faq<?= $i + 1 ?>" class="faq-answer text-4xl max-md:text-2xl leading-relaxed tracking-wide px-5">
                <?= $faq[$i]['a'] ?>
            </div>
        </div>
    <?php endfor ?>
    <div class="border-t-2 border-gray-600"></div>
</section>
<!-- Main Contacnt End -->

<!-- Current Page Javascript Start-->
<script>
    var scroll;
    document.addEventListener('DOMContentLoaded', function() {
        let navbar = document.getElementById("mainSideNavbar");
        navbar.style.display = "flex";

        /**
         * Lenis Smooth Scrolling
         */
        const lenis = new Lenis()
        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }
        requestAnimationFrame(raf)

        const url =window.location;
        if(url['hash']){
            toggleFAQ(url['hash'].substring(1,));
        }
        
        onScrollNavUpdate(lenis);
    });
</script>
<!-- Current Page Javascript End-->

<?php require_once "views/partials/footer.php" ?>