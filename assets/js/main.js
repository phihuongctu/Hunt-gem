

var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
if (isMobile) {
    new fullpage('.fullpage', {
        //options here
        // autoScrolling: true,
        lazyLoading: false,
        css3: true,
        scrollingSpeed: 700,
        normalScrollElements: '.scroll-snap,.roadmap',
    });
} else {
    new fullpage('.fullpage', {
        //options here
        // autoScrolling: true,
        lazyLoading: false,
        css3: true,
        scrollingSpeed: 700,
    });
}

document.querySelector('.wheel').addEventListener("click", function () {
    fullpage_api.moveSectionDown();
});

document.addEventListener("DOMContentLoaded", function (event) {
    if (document.querySelector('.splide') !== null) {
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            focus: 'left',
            drag: 'free',
            snap: true,
            pagination: false,
            breakpoints: {
                1440: { perPage: 3, gap: '2rem' },
                768: { perPage: 2 },
                550: {
                    perPage: 1, arrows: false
                },
            },
        });
        splide.mount();
    }
});

//accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}


