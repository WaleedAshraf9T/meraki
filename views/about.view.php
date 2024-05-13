<?php require_once "views/partials/header-white-body.php"; ?>
<!-- <?php require_once "views/partials/preloader.php"; ?> -->

<!-- Main Contact Start -->

<!-- Hero Section -->
<section class="select-none">
    <img class="h-screen w-screen object-cover" src="/assets/images/the-firm.webp" alt="about section hero image contains building construction under development or completed representing the progress">
    <!-- Overlay for film grain -->
    <div class="overlay-film-grain absolute top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>

    <!-- Overlay for dark background -->
    <div class="overlay-dark absolute top-0 left-0 w-full h-screen bg-black z-[2] opacity-30"></div>

    <div class="title-container absolute top-0 left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
        <!-- Slider Main Title -->
        <h1 class="title font-black text-[5vw] max-lg:text-[10vw] max-md:text-[9vw] leading-[5vw] leading-2 max-lg:leading-[10vw] max-md:leading-10 text-white tracking-tight">THE <span style="color: transparent; -webkit-text-stroke: 1px white;">FIRM</span></h1>
    </div>
</section>

<section class="bg-white w-screen h-screen rounded-tl-[50px] rounded-tr-[50px] relative -top-11 z-20 flex flex-col justify-center items-center">
    <img src="/assets/images/icon-4.svg" alt="" class="h-1/6 m-20">
    <p class="w-[75vw] text-center text-[2.7vw] font-normal tracking-normal leading-relaxed">Meraki is an alternative investment firm primarily focused on <b>private equity</b> and <b>real estate strategies</b>. Headquartered in Toronto, Canada the firm is one of the most active real assets and growth capital investors in North America.</p>
</section>


<section class="w-screen h-[35vh] flex items-center justify-center">
    <div class="marquee w-full font-extrabold text-8xl">
        <span>PUT SOMETHING OF YOURSELF, YOUR SOUL -</span>
        <span>PUT SOMETHING OF YOURSELF, YOUR SOUL</span>
        <span>PUT SOMETHING OF YOURSELF, YOUR SOUL</span>
    </div>
</section>

<section class="h-screen w-screen py-24 px-10 flex justify-center items-center">
    <img src="/assets/images/the-firm-4.webp" alt="" class="w-[95vw] h-[90vh] object-cover rounded-xl">
</section>

<section class="w-screen py-36 px-[2.5vw] flex flex-col items-start justify-center select-none">
    <div class="faq w-full">
        <div class="faq-item py-11 border-t-4 border-b-2 border-solid border-[#5F5F5F] flex justify-between items-center" onclick="toggleFAQ('faq1')"><div class="font-normal text-[40px]"><span class="text-[#3F3F3F] mr-5">01 </span>At Meraki what we do?</div> <img src="/assets/icons/cross.svg" alt=""></div>
        <div id="faq1" class="faq-answer text-4xl leading-relaxed tracking-wide py-7 px-5">At Meraki we do things differently. We fully immerse ourselves with our partners to strengthen the foundations, scale at large and continuously invest in two P’s – our People and Processes.</div>
        
        <div class="faq-item py-11 border-t-2 border-b-2 border-solid border-[#5F5F5F] flex justify-between items-center" onclick="toggleFAQ('faq2')"><div class="font-normal text-[40px]"><span class="text-[#3F3F3F] mr-5">02 </span>Where Meraki is active?</div> <img src="/assets/icons/plus.svg" alt=""></div>
        <div id="faq2" class="faq-answer text-4xl leading-relaxed tracking-wide py-7 px-5">Meraki is active in the lower middle market in North America, and always on a lookout to connect with entrepreneurs, investors, operators, and likeminded collaborators.</div>
        
        <div class="faq-item py-11 border-t-2 border-b-4 border-solid border-[#5F5F5F] flex justify-between items-center" onclick="toggleFAQ('faq3')"><div class="font-normal text-[40px]"><span class="text-[#3F3F3F] mr-5">03 </span>About our name!</div> <img src="/assets/icons/plus.svg" alt=""></div>
        <div id="faq3" class="faq-answer text-4xl leading-relaxed tracking-wide py-7 px-5">Our name, "Meraki," comes from the Greek word meaning to put something of yourself, your soul, creativity, or love into your work. This philosophy defines everything we do. We believe in building genuine partnerships, understanding your story, and crafting a customized strategy that fuels your business growth or facilitates a smooth and successful exit.</div>
    </div>
</section>

<!-- Main Contacnt End -->

<!-- Current Page Javascript Start-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navbar = document.getElementById("mainSideNavbar");
        navbar.style.display = "flex";
        toggleFAQ('faq1')
    });

    function toggleFAQ(id) {
        const faqItem = document.getElementById(id);
        const allFAQItems = document.querySelectorAll('.faq-answer');

        allFAQItems.forEach(item => {
            if (item.id !== id) {
                item.style.display = 'none';
                item.classList.remove('active');
            }
        });

        if (faqItem.style.display === 'block') {
            faqItem.style.display = 'none';
            faqItem.classList.remove('active');
        } else {
            faqItem.style.display = 'block';
            faqItem.classList.add('active');
        }
    }
</script>
<!-- Current Page Javascript End-->

<?php require_once "views/partials/footer.php" ?>