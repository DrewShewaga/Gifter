// JavaScript Document
(() => {
    // VARIABLE STACK
    let scrollArrow = document.querySelector('.downArrow'),
        h = window.innerHeight;


    // FUNCTIONS

    function pageScroll() {
        window.scrollBy(0, h+3);
    }

    // EVENT HANDLING
    scrollArrow.addEventListener('click', pageScroll);
    document.addEventListener("keyup", function(event) {
        if (event.keyCode == '40') {
            pageScroll();
        }
    });
})();