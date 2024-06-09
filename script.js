/**
 * Header Sidebar Navigation
 */
var isClicked = false;

function addSidbarNavIconAnimation() {
  let dots = document.querySelectorAll("#nav-side-bar-icon .dot");
  dots[0].classList.replace("bg-white", "bg-black");
  dots[1].classList.replace("bg-white", "bg-black");
  dots[2].classList.replace("bg-white", "bg-black");

  dots[0].classList.add("translate-x-[13px]", "z-[-1]");
  dots[1].classList.add("scale-125");
  dots[2].classList.add("translate-x-[-13px]", "z-[-1]");
}

function removeSidbarNavIconAnimation() {
  let dots = document.querySelectorAll("#nav-side-bar-icon .dot");
  dots[0].classList.replace("bg-black", "bg-white");
  dots[1].classList.replace("bg-black", "bg-white");
  dots[2].classList.replace("bg-black", "bg-white");

  dots[0].classList.remove("translate-x-[13px]", "z-[-1]");
  dots[1].classList.remove("scale-125");
  dots[2].classList.remove("translate-x-[-13px]", "z-[-1]");
}

/**
 * Active nav item
 */
function navIconClick() {
  let overlay = document.getElementById("nav-sidbar-overlay");
  let mainSidbar = document.getElementById("nav-sidbar");
  let dots = document.querySelectorAll("#nav-side-bar-icon .dot");

  if (!isClicked) {
    overlay.classList.replace("translate-x-[-35vw]", "translate-x-0");
    mainSidbar.classList.replace("translate-x-[75vw]", "translate-x-0");
    dots[0].classList.add("translate-x-[13px]", "z-[-1]");
    dots[1].classList.add("scale-125");
    dots[2].classList.add("translate-x-[-13px]", "z-[-1]");
    isClicked = true;
  } else {
    overlay.classList.replace("translate-x-0", "translate-x-[-35vw]");
    mainSidbar.classList.replace("translate-x-0", "translate-x-[75vw]");
    isClicked = false;
    dots[0].classList.remove("translate-x-[13px]", "z-[-1]");
    dots[1].classList.remove("scale-125");
    dots[2].classList.remove("translate-x-[-13px]", "z-[-1]");
  }
}

/**
 * Switching avtive nav item
 */
document.addEventListener("DOMContentLoaded", function () {
  const url = new URL(window.location.href);
  const endpoint = url.pathname;
  let navItems = document.querySelectorAll(".nav-item");

  navItems.forEach((item) => {
    item.classList.replace("text-transparent", "text-white");
  });

  switch (endpoint) {
    case "/":
      navItems[0].classList.add("active-nav-item");
      navItems[0].classList.replace("text-white", "text-transparent");
      break;
    case "/firm":
      navItems[1].classList.add("active-nav-item");
      navItems[1].classList.replace("text-white", "text-transparent");
      break;
    case "/works":
      navItems[2].classList.add("active-nav-item");
      navItems[2].classList.replace("text-white", "text-transparent");
      break;
    case "/news":
      navItems[3].classList.add("active-nav-item");
      navItems[3].classList.replace("text-white", "text-transparent");
      break;
    case "/contact":
      navItems[4].classList.add("active-nav-item");
      navItems[4].classList.replace("text-white", "text-transparent");
      break;
    default:
      break;
  }
});

function onScrollNavUpdate(scroll) {
  window.addEventListener("scroll", function () {
    let currentScrollY = window.scrollY;

    const navIcon = document.getElementById("nav-side-bar-icon");
    const logo = document.getElementById("logo");

    if (currentScrollY >= 20) {
      logo.classList.remove("w-[10.5%]", "max-lg:w-[15%]", "max-md:w-[30%]");
      logo.classList.add("w-0");
      navIcon.classList.replace("bg-transparent", "bg-black");
    } else {
      logo.classList.remove("w-0");
      logo.classList.add("w-[10.5%]", "max-lg:w-[15%]", "max-md:w-[30%]");
      navIcon.classList.replace("bg-black", "bg-transparent");
    }
  });
}

/**
 * Preloader
 */
function preloader() {
  let preloader = document.getElementById("preloader");
  preloader.classList.add("translate-y-[-100vh]");
}

/**
 * Firm View FAQ Trigger
 */
function toggleFAQ(id) {
  const answer = document.getElementById(id);
  const allAnswers = document.querySelectorAll(".faq-answer");
  const allIcons = document.querySelectorAll(".faq-item img");

  allAnswers.forEach((ans) => {
    if (ans.id !== id) {
      ans.classList.remove("open");
      ans.previousElementSibling.querySelector("img").style.transform =
        "rotate(0deg)";
    }
  });

  const icon = document
    .querySelector(`#${id}`)
    .previousElementSibling.querySelector("img");
  if (answer.classList.contains("open")) {
    answer.classList.remove("open");
    icon.style.transform = "rotate(0deg)";
  } else {
    answer.classList.add("open");
    icon.style.transform = "rotate(135deg)";
  }
}
