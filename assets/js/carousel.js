// width="600" height="338" 
/*
* @Adilade Slideshow/Carousel
* @See www.adilade.fr
*
* Keyboard : 
* Previous : left arrow or ctrl + left arrow
* Next : right arrow or ctrl + right arrow
* Pause/Play : space
* 
* Free to use - No warranty
*/
let timeInterval = '10000'; // Time between slides
let carousel = document.querySelector('#slides-items');
let items = document.querySelectorAll('.slide-item');
const slides = document.querySelector('#slides');

let carouselWidth = document.querySelector('.sliderImg').naturalWidth; // 800 "340px";
let carouselNaturalHeight = document.querySelector('.sliderImg').naturalHeight;
let item = document.querySelector('.slide-item')

let carouselHeight = (window.innerWidth * carouselNaturalHeight) / carouselWidth;
carouselHeight += "px";
carouselNaturalHeight += "px";

slides.style.width = "100%";
slides.style.height = carouselHeight;
slides.style.maxHeight = carouselNaturalHeight;
carousel.style.width = "90%";
let hauteurMiSlide = item.clientHeight / 2.5;
hauteurMiSlide += "px";

let hauteurFinSlide = item.clientHeight;
hauteurFinSlide += "px";


if (carousel !== undefined && items !== undefined && carousel !== null && items !== null) {
    let itemscount = items.length;
    const btnprev = document.querySelector('.slides-prev');
    const btnnext = document.querySelector('.slides-next');
    const btnplaypause = document.querySelector('.slides-playpause');
    let btnplaypausepath = document.querySelector('.playpause');

    btnprev.style.top = hauteurMiSlide;
    btnnext.style.top = hauteurMiSlide;

    if (itemscount > 1) {

        // Create Dots
        let dotbox = document.createElement('div');
        dotbox.classList.add('slides-dots');
        dotbox.style.top = hauteurFinSlide;
        // carousel.after(dotbox); Not supported by Edge => see next line
        carousel.parentNode.insertBefore(dotbox, carousel.nextSibling);
        for (let i = 0; i < itemscount; i++) {
            dotbox.insertAdjacentHTML('beforeend', '<button aria-controls="slide-' + (i + 1) + '" aria-label="Slide number ' + (i + 1) + '" aria-selected="' + (document.querySelector('.slideactive').getAttribute('id').slice(-1) == (i + 1) ? 'true' : 'false') + '"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32" role="img"><circle cx="16" cy="16" r="13" /></svg></button>');
        }

        let dots = document.querySelectorAll('.slides-dots button');
        let playpause = null;
        
        function slideprev() {
            let itemcurrent = document.querySelector('.slideactive');
            let dotcurrent = document.querySelector('.slides-dots button[aria-selected="true"]');
            let prevslide = itemcurrent.previousElementSibling;
            let prevdot = dotcurrent.previousElementSibling;
            if (prevslide === null) {
                prevslide = items[itemscount - 1];
                prevdot = dots[itemscount - 1];
            }
            // Remove current
            itemcurrent.classList.remove('slideactive');
            dotcurrent.setAttribute('aria-selected', 'false');

            // Add Next
            prevslide.classList.add('slideactive');
            prevdot.setAttribute('aria-selected', 'true');
        }

        function slidenext() {
            let itemcurrent = document.querySelector('.slideactive');
            let dotcurrent = document.querySelector('.slides-dots button[aria-selected="true"]');
            let nextslide = itemcurrent.nextElementSibling;
            let nextdot = dotcurrent.nextElementSibling;
            if (nextslide === null) {
                nextslide = items[0];
                nextdot = dots[0];
            }
            // Remove current
            itemcurrent.classList.remove('slideactive');
            dotcurrent.setAttribute('aria-selected', 'false');

            // Add Next
            nextslide.classList.add('slideactive');
            nextdot.setAttribute('aria-selected', 'true');
        }

        function slidepause() {
            clearInterval(playpause);
            playpause = null;
            btnplaypause.setAttribute('aria-label', 'Play Carousel');
            btnplaypausepath.classList.add('paused');
            carousel.setAttribute('aria-live', 'polite');
        }
        function slideplay() {
            playpause = setInterval(slidenext, timeInterval);
            btnplaypause.setAttribute('aria-label', 'Stop Carousel');
            btnplaypausepath.classList.remove('paused');
            carousel.removeAttribute('aria-live');
        }
        function slideplaypause() {
            if (playpause !== null) {
                slidepause();
                carousel.classList.add('btnpressed');
            } else {
                slideplay();
                carousel.classList.remove('btnpressed');
            }
        }

        // Dots Navigate
        [].map.call(dots, function (dot) {

            dot.addEventListener('click', function (e) {
                let itemcurrent = document.querySelector('.slideactive');
                let dotcurrent = document.querySelector('.slides-dots button[aria-selected="true"]');
                let dotclick = dot.getAttribute('aria-controls');
                let targetslide = document.querySelector('#' + dotclick + '');
                let targetdot = document.querySelector('button[aria-controls="' + dotclick + '"]');

                // Remove current
                itemcurrent.classList.remove('slideactive');
                dotcurrent.setAttribute('aria-selected', 'false');

                // Add Target
                targetslide.classList.add('slideactive');
                targetdot.setAttribute('aria-selected', 'true');

                e.preventDefault();

            }, false);

        }, false);

        // Navigate
        btnprev.addEventListener('click', slideprev);
        btnnext.addEventListener('click', slidenext);
        btnplaypause.addEventListener('click', slideplaypause);

        // Keyboard Navigate
        carousel.addEventListener('keydown', keyHandler);
        function keyHandler(e) {
            // Left Arrow
            if (e.keyCode === 37 || (e.ctrlKey && e.keyCode === 37)) {
                e.preventDefault();
                slideprev();
            }
            // Right Arrow
            if (e.keyCode === 39 || (e.ctrlKey && e.keyCode === 39)) {
                e.preventDefault();
                slidenext();
            }
            // Space
            if (e.keyCode === 32) {
                e.preventDefault();
                slideplaypause();
            }
        }

        // Animate Slides
        playpause = setInterval(slidenext, timeInterval);

        // Stop Carousel on keyboard/mouse focus only when Carousel auto-rotating
        function slidefocusstop() {
            if (!carousel.classList.contains('btnpressed')) {
                slidepause();
            }
        }
        function slidefocusplay() {
            if (!carousel.classList.contains('btnpressed')) {
                slideplay();
            }
        }
        carousel.addEventListener('focusin', slidefocusstop);
        carousel.addEventListener('focusout', slidefocusplay);
        carousel.addEventListener('mouseover', slidefocusstop);
        carousel.addEventListener('mouseout', slidefocusplay);

    } else { // End itemscount > 1 => Remove buttons controls
        btnprev.parentNode.removeChild(btnprev);
        btnnext.parentNode.removeChild(btnnext);
        btnplaypause.parentNode.removeChild(btnplaypause);
    }

} // End if test
