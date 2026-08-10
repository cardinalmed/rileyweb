// Navbar shadow on scroll
window.addEventListener("scroll", function () {

const navbar = document.querySelector(".navbar");

if(window.scrollY > 80){

navbar.style.padding = "12px 0";

navbar.style.boxShadow = "0 10px 35px rgba(0,0,0,.12)";

}else{

navbar.style.padding = "18px 0";

navbar.style.boxShadow = "0 10px 30px rgba(0,0,0,.06)";

}

});

// Hide preloader
window.addEventListener("load",function(){

const preloader=document.getElementById("preloader");

preloader.style.opacity="0";

setTimeout(function(){

preloader.style.display="none";

},500);

});
const counters = document.querySelectorAll(".counter");

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {

            const counter = entry.target;

            const target = Number(counter.dataset.target);

            let count = 0;

            const speed = target / 80;

            const update = () => {

                count += speed;

                if (count < target) {

                    counter.innerText = Math.ceil(count);

                    requestAnimationFrame(update);

                } else {

                    counter.innerText = target;

                }

            };

            update();

            observer.unobserve(counter);

        }

    });

});

counters.forEach(counter => observer.observe(counter));