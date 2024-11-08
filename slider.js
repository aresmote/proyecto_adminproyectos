
let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }
        const offset = -currentSlide * 100;
        document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
    }

    function moveSlide(direction) {
        showSlide(currentSlide + direction);
    }

    // Cambiar automáticamente las imágenes cada 3 segundos
    setInterval(() => {
        moveSlide(1);
    }, 3000);

createDots();

setInterval(() => changeSlide(1), 3000);