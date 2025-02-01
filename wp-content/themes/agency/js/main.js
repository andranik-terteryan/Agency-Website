var swiper = new Swiper(".team", {
    slidesPerView: 4,
    spaceBetween: 16,
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetweenSlides: 16
        },
        576: {
            slidesPerView: 2,
            spaceBetweenSlides: 16
        },

        1024: {
            slidesPerView: 4,
            spaceBetweenSlides: 16
        }
    }
});

var swiper = new Swiper(".projects", {
    slidesPerView: 3,
    spaceBetween: 16,
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetweenSlides: 16
        },
        576: {
            slidesPerView: 2,
            spaceBetweenSlides: 16
        },
        1024: {
            slidesPerView: 3,
            spaceBetweenSlides: 16
        },
    }
});

var swiper = new Swiper(".testimonials", {
    slidesPerView: 3,
    spaceBetween: 16,
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetweenSlides: 16
        },
        576: {
            slidesPerView: 2,
            spaceBetweenSlides: 16
        },
        1024: {
            slidesPerView: 3,
            spaceBetweenSlides: 16
        },
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggle-button');
    const navMenu = document.querySelector('nav'); 

    if (toggleButton && navMenu) {
        toggleButton.addEventListener('click', () => {
            navMenu.classList.toggle('hide');
        });
    }
});
