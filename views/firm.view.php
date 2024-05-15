<?php require_once "views/partials/header-white-body.php"; ?>
<?php require_once "views/partials/preloader.php"; ?>

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

<section class="w-screen py-24 px-[2.5vw] bg-white select-none">
    <?php for($i=0; $i<sizeof($faq); $i++): ?>
    <div class="h- auto faq-item border-t-2 border-gray-600 py-8 px-5 cursor-pointer duration duration-300" onclick="toggleFAQ('faq<?= $i+1 ?>')">
        <div class="flex justify-between items-center">
            <div class="font-normal text-[40px]">
                <span class="text-[#3F3F3F] mr-4">0<?= $i+1 ?></span> <?= $faq[$i]['q'] ?>
            </div>
            <img src="/assets/icons/plus.svg" alt="Toggle Answer" class="transition-transform duration-300" id="icon<?= $i+1 ?>">
        </div>
        <div id="faq<?= $i+1 ?>" class="faq-answer text-4xl leading-relaxed tracking-wide px-5">
            <?= $faq[$i]['a'] ?>
        </div>
    </div>
    <?php endfor ?>
    <div class="border-t-2 border-gray-600"></div>
</section>
<!-- Main Contacnt End -->

<!-- Current Page Javascript Start-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navbar = document.getElementById("mainSideNavbar");
        navbar.style.display = "flex";
    });

    function toggleFAQ(id) {
    const answer = document.getElementById(id);
    const allAnswers = document.querySelectorAll('.faq-answer');
    const allIcons = document.querySelectorAll('.faq-item img');

    allAnswers.forEach((ans) => {
        if (ans.id !== id) {
            ans.classList.remove('open');
            ans.previousElementSibling.querySelector('img').style.transform = 'rotate(0deg)';
        }
    });

    const icon = document.querySelector(`#${id}`).previousElementSibling.querySelector('img');
    if (answer.classList.contains('open')) {
        answer.classList.remove('open');
        icon.style.transform = 'rotate(0deg)';
    } else {
        answer.classList.add('open');
        icon.style.transform = 'rotate(135deg)';
    }
}
</script>
<!-- Current Page Javascript End-->

<?php require_once "views/partials/footer.php" ?>