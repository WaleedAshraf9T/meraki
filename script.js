/**
 * Header Sidebar Navigation Icon
 */
var isClicked = false;

function addSidbarNavIconAnimation() {
    let dots = document.querySelectorAll('#nav-side-bar-icon .dot');
    dots[0].classList.replace('bg-white', 'bg-black');
    dots[1].classList.replace('bg-white', 'bg-black');
    dots[2].classList.replace('bg-white', 'bg-black');
    
    dots[0].classList.add('translate-x-[12px]', 'z-[-1]');
    dots[1].classList.add('scale-125');
    dots[2].classList.add('translate-x-[-12px]', 'z-[-1]');
}

function removeSidbarNavIconAnimation(){
    let dots = document.querySelectorAll('#nav-side-bar-icon .dot');
    dots[0].classList.replace('bg-black', 'bg-white');
    dots[1].classList.replace('bg-black', 'bg-white');
    dots[2].classList.replace('bg-black', 'bg-white');

    dots[0].classList.remove('translate-x-[12px]', 'z-[-1]');
    dots[1].classList.remove('scale-125');
    dots[2].classList.remove('translate-x-[-12px]', 'z-[-1]');

}

function navIconClick(){
    let overlay = document.getElementById('nav-sidbar-overlay');
    let mainSidbar = document.getElementById('nav-sidbar');

    if(!isClicked){
        overlay.classList.replace("translate-x-[-100vh]", "translate-x-0");
        mainSidbar.classList.replace("translate-x-[150vh]", "translate-x-0");
        isClicked = true;
    }else{
        overlay.classList.replace("translate-x-0", "translate-x-[-100vh]");
        mainSidbar.classList.replace("translate-x-0", "translate-x-[150vh]");
        isClicked = false;
    }
}

/**
 * Prev and Next Video Slider
 */
