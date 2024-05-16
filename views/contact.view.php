<?php require_once "views/partials/header.php"; ?>
<?php require_once "views/partials/preloader.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $phoneNo = $_POST['phoneNo'];
    $email = $_POST['email'];
    $whoAreYou = $_POST['whoAreYou'];
    $message = $_POST['message'];

    // Email recipient
    $to = 'exsoldev@gmail.com';

    // Email subject
    $subject = 'Contact Us Form New Submission';

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email\r\n";

    // Email body
    $email_body = "<html><body>";
    $email_body .= "<h2>Contact Us Form Submission</h2>";
    $email_body .= "<p><strong>First Name:</strong> $fname</p>";
    $email_body .= "<p><strong>Last Name:</strong> $lname</p>";
    $email_body .= "<p><strong>Phone Number:</strong> $phoneNo</p>";
    $email_body .= "<p><strong>Email:</strong> $email</p>";
    $email_body .= "<p><strong>Who Are You:</strong> $whoAreYou</p>";
    $email_body .= "<p><strong>Message:</strong> $message</p>";
    $email_body .= "</body></html>";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<p class='text-black'>Email sent successfully!</p>";
    } else {
        echo "<p class='text-black'>Email sending failed.</p>";
    }
}
?>

<!-- Main Section Content Starts -->
<!-- *************************** -->
<!-- Hero Section -->
<section class="select-none">
    <img class="h-screen w-screen object-cover" src="/assets/images/contact-us-2.webp" alt="about section hero image contains building construction under development or completed representing the progress">
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
    <h1 class="W-[80VW] text-white text-4xl max-md:text-2xl max-md:px-10 font-black mb-10 tracking-wide text-center">Please get in touch by <span style="color: transparent; -webkit-text-stroke: 1px white;">using the following info.</span></h1>
    <div class="w-[80vw] mt-10 flex max-md:block items-center justify-between">
        <div class="w-[20vw] max-md:w-full h-auto text-white flex flex-col items-center">
            <h2 class="font-semibold text-xl mb-5 max-md:mb-2 max-md:mt-5">The Address</h2>
            <p class="font-light">Toronto, ON Canada</p>
        </div>
        <div class="w-[20vw] max-md:w-full h-auto text-white flex flex-col items-center">
            <h2 class="font-semibold text-xl mb-5 max-md:mb-2 max-md:mt-5">Phone No</h2>
            <p class="font-light"><a href="tel:+1(647)395-0605">+1 (647) 395-0605</a></p>
        </div>
        <div class="w-[20vw] max-md:w-full h-auto text-white flex flex-col items-center">
            <h2 class="font-semibold text-xl mb-5 max-md:mb-2 max-md:mt-5">Email Address</h2>
            <p class="font-light"><a href="mailto:info@merakicapitalpartners.com">info@merakicapitalpartners.com</a></p>
        </div>
    </div>
</section>

<div class="w-screen flex items-center justify-center max-md:my-10">
    <div class="w-8 max-md:w-6 h-8 max-md:h-6 rounded-full bg-white"></div>
    <hr class="my-[10vw] w-[30vw]">
    <div class="w-8 h-8 rounded-full bg-white"></div>
</div>

<section class="pb-[65vh] pt-[40vh] max-md:pb-[10vh] max-md:pt-0 w-screen h-screen max-md:h-auto flex flex-col items-center justify-center">
    <h1 class="w-[80vw] text-white text-4xl max-md:text-2xl font-black mb-10 tracking-wide text-center">By all means, send us an email and <span style="color: transparent; -webkit-text-stroke: 1px white;">get in touch.</span></h1>

    <!-- Contact Us Form -->
    <form class="w-[80vw]" method="post" action="/views/sendEmail.php">
        <div class="flex max-md:block mt-[5vh] max-md:mt-0">
            <input required placeholder="First Name*" type="text" name="fname" id="" class="p-3 m-3 w-full h-[5vh] max-md:h-[10vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
            <input required placeholder="Last Name*" type="text" name="lname" id="" class="p-3 my-3 ml-3 w-full h-[5vh] max-md:h-[10vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
            <input placeholder="Phone No" type="tel" pattern="+1([0-9]{3})[0-9]{3}-[0-9]{4}" name="phoneNo" id="" class="p-3 my-3 ml-3 w-full h-[5vh] max-md:h-[10vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
        </div>
        <div class="flex max-md:block mt-[5vh] max-md:mt-0">
            <input required placeholder="Email*" type="email" name="email" id="" class="p-3 m-3 w-full h-[10vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
            <select required name="whoAreYou" id="" style="-webkit-appearance: none; -moz-appearance: none; appearance: none;" class="p-3 my-3 ml-3 w-full h-[10vh] appearance-none bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none">
                <option selected disabled value="" class="bg-transparent text-black">Who are you?*</option>
                <option value="An Investor" class="bg-transparent text-black">An Investor</option>
                <option value="A Business Owner" class="bg-transparent text-black">A Business Owner</option>
            </select>
        </div>
        <div class="flex max-md:block mt-[5vh]">
            <textarea required placeholder="Message*" name="message" rows="10" id="" class="p-3 ml-3 w-full h-[15vh] bg-transparent border-b-2 border-white border-solid text-white font-light focus:outline-none"></textarea>
        </div>
        <div class="mt-[10vh] flex items-center justify-center select-none">
            <div class="absolute text-white text-[14px]">Submit</div>
            <button type="submit" class="w-[7vw] h-[7vw] max-md:w-[25vw] max-md:h-[25vw] rounded-full bg-transparent border-2 border-white border-dashed mx-1 duration-1000 hover:motion-safe:animate-spin z-[2]"></button>
        </div>
    </form>
    <!-- Contact Us Form End -->
</section>
<!-- Main Section Content End -->

<!-- Current Page Javascript Starts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let navbar = document.getElementById("mainSideNavbar");
        navbar.style.display = "flex";

        /**
         * Locomotive Smooth Scrolling
         */
        let scroll = new LocomotiveScroll({
            el: document.querySelector("#main"),
            smooth: true,
        });

        onScrollNavUpdate(scroll);
    });
</script>
<!-- Current Page Javascript End -->

<?php require_once "views/partials/footer.php" ?>