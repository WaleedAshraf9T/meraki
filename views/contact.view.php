<?php require_once "views/partials/header.php"; ?>
<?php require_once "views/partials/preloader.php"; ?>

<!-- --------- -->
<!-- Main HTML -->
<!-- --------- -->

<!-- Hero Section -->
<section>
    <img class="h-screen w-screen" src="/assets/images/contact-1.webp" alt="about section hero image contains building construction under development or completed representing the progress">
    <!-- Overlay for film grain -->
    <div class="overlay-film-grain absolute top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>

    <!-- Overlay for dark background -->
    <div class="overlay-dark absolute top-0 left-0 w-full h-screen bg-black z-[2] opacity-20"></div>

    <div class="title-container absolute top-0 left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
        <!-- Slider Main Title -->
        <h1 class="title font-black text-[5vw] max-lg:text-[10vw] max-md:text-[9vw] leading-[5vw] leading-2 max-lg:leading-[10vw] max-md:leading-10 text-white tracking-tight">CONTACT <span style="color: transparent; -webkit-text-stroke: 1px white;">US</span></h1>
    </div>
</section>

<section class="p-10 w-screen h-screen flex flex-col items-center justify-center">
    <h1 class="text-white text-4xl font-black mb-10">By all means, send us an email and <span style="color: transparent; -webkit-text-stroke: 1px white;">get in touch.</span></h1>
    <form class="w-[80vw]" method="post">
        <div class="flex w-screen">
            <input placeholder="Name" type="text" name="name" id="" class="p-3 m-3 w-[28.3vw] h-[5vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
            <input placeholder="Email" type="email" name="email" id="" class="p-3 my-3 ml-3 w-[50vw] h-[5vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
        </div>
        <div>
            <input placeholder="Subject" type="text" name="subject" id="" class="p-3 m-3 w-full h-[10vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
        </div>
        <div>
            <textarea placeholder="Message" name="subject" rows="20" id="" class="p-3 m-3 w-full h-[15vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none"></textarea>
        </div>
        <div class="mt-10 flex items-center justify-center select-none">
            <div class="absolute text-white text-[14px]">Submit</div>
            <button type="submit" class="w-[7vw] h-[7vw] max-md:w-[25vw] max-md:h-[25vw] rounded-full bg-transparent border-2 border-white border-dashed mx-1 duration-1000 hover:motion-safe:animate-spin z-[2]"></button>
        </div>
    </form>
</section>

<!-- Google Map View-->
<section class="flex items-center justify-center my-10">
    <iframe class="rounded-lg h-[50vh] w-[90vw]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.6741067327!2d-79.54286655715585!3d43.71812280254997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2s!4v1715210253537!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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