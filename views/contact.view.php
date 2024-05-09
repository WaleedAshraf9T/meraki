<?php require_once "views/partials/header.php"; ?>
<!-- <?php require_once "views/partials/preloader.php"; ?> -->

<!-- Main Section Content Starts -->
<!-- *************************** -->
<!-- Hero Section -->
<section class="select-none">
    <img class="h-screen w-screen" src="/assets/images/contact-us-2.jpg" alt="about section hero image contains building construction under development or completed representing the progress">
    <!-- Overlay for film grain -->
    <div class="overlay-film-grain absolute top-0 left-0 w-full h-screen bg-[url('/assets/images/film-grain.gif')] mix-blend-overlay z-[1] opacity-10"></div>

    <!-- Overlay for dark background -->
    <div class="overlay-dark absolute top-0 left-0 w-full h-screen bg-black z-[2] opacity-20"></div>

    <div class="title-container absolute top-0 left-0 w-full h-screen z-10 flex flex-col items-center justify-center text-center">
        <!-- Slider Main Title -->
        <h1 class="title font-black text-[5vw] max-lg:text-[10vw] max-md:text-[9vw] leading-[5vw] leading-2 max-lg:leading-[10vw] max-md:leading-10 text-white tracking-tight">CONTACT <span style="color: transparent; -webkit-text-stroke: 1px white;">US</span></h1>
    </div>
</section>

<section class="pt-[20vh] w-screen h-auto flex flex-col items-center justify-center">
    <h1 class="w-[80vw] text-white text-4xl font-black mb-10 leading-normal tracking-wide">Please get in touch by using the following info or feel free to use <span style="color: transparent; -webkit-text-stroke: 1px white;">the form below.</span></h1>
    <div class="w-[70vw] flex items-center justify-between">
        <div class="w-[20vw] h-[20vw] p-10 text-white">
            <h2 class="font-semibold text-xl mb-5">The Address</h2>
            <p class="font-light">Toronto, ON Canada</p>
        </div>
        <div class="w-[20vw] h-[20vw]  p-10 text-white">
            <h2 class="font-semibold text-xl mb-5">Emaill Address</h2>
            <p class="font-light"><a href="tel:+1(647)395-0605">+1 (647) 395-0605</a></p>
        </div>
        <div class="w-[20vw] h-[20vw] p-10 text-white">
            <h2 class="font-semibold text-xl mb-5">The Address</h2>
            <p class="font-light"><a href="mailto:info@merakicapitalpartners.com">info@merakicapitalpartners.com</a></p>
        </div>
    </div>
</section>

<div class="w-screen flex items-center justify-center">
    <hr class="mb-[10vw] w-[50vw]">
</div>

<section class="pb-[65vh] pt-[40vh] w-screen h-screen flex flex-col items-center justify-center">
    <div class="w-[80vw] flex items-start">
        <h1 class="text-white text-4xl font-black mb-10 tracking-wide text-left">By all means, send us an email and <span style="color: transparent; -webkit-text-stroke: 1px white;">get in touch.</span></h1>
    </div>
    <form class="w-[80vw]" method="post">
        <div class="flex mt-[5vh]">
            <input required placeholder="First Name*" type="text" name="fname" id="" class="p-3 m-3 w-full h-[5vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
            <input required placeholder="Last Name*" type="text" name="lname" id="" class="p-3 my-3 ml-3 w-full h-[5vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
            <input placeholder="Phone No" type="tel" pattern="+1([0-9]{3})[0-9]{3}-[0-9]{4}" name="phoneNo" id="" class="p-3 my-3 ml-3 w-full h-[5vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
        </div>
        <div class="flex mt-[5vh]">
            <input required placeholder="Email*" type="email" name="email" id="" class="p-3 m-3 w-full h-[10vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
            <select required name="whoAreYou" id="" style="-webkit-appearance: none; -moz-appearance: none; appearance: none;" class="p-3 my-3 ml-3 w-full h-[10vh] appearance-none bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
                <option selected disabled value="" class="bg-transparent text-black">Who are you?*</option>
                <option value="An Investor" class="bg-transparent text-black">An Investor</option>
                <option value="A Business Owner" class="bg-transparent text-black">A Business Owner</option>
            </select>
        </div>
        <div class="flex mt-[5vh]">
            <textarea required placeholder="Message*" name="message" rows="10" id="" class="p-3 ml-3 w-full h-[15vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none"></textarea>
        </div>
        <div class="mt-[10vh] flex items-center justify-center select-none">
            <div class="absolute text-white text-[14px]">Submit</div>
            <button type="submit" class="w-[7vw] h-[7vw] max-md:w-[25vw] max-md:h-[25vw] rounded-full bg-transparent border-2 border-white border-dashed mx-1 duration-1000 hover:motion-safe:animate-spin z-[2]"></button>
        </div>
    </form>
</section>

<!-- Google Map View-->
<section>
    <iframe class="h-[50vh] w-screen" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184552.6741067327!2d-79.54286655715585!3d43.71812280254997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2s!4v1715210253537!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- ************************ -->
<!-- Main Section Content End -->

<!-- Current Page Javascript Starts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navbar = document.getElementById("mainSideNavbar");
        navbar.style.display = "flex";
    });
</script>
<!-- Current Page Javascript End -->

<?php require_once "views/partials/footer.php" ?>