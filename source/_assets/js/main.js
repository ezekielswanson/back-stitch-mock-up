window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = require('vue').default;

// Lazyload
import LazyLoad from "vanilla-lazyload";

// Primitive Vue Components
import Search from './components/Search.vue';
import PrimitiveForm from './components/PrimitiveForm.vue';
/*import { active } from "browser-sync";*/

const lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
});

new window.Vue({
    components: {
        Search,
        PrimitiveForm
    },
}).$mount('#app');




/* ===== Navigation ====== */


/*Opens mobile menu */
let navTrigger = document.querySelectorAll('.mobile-menu-icon');
for (let i = 0; i < navTrigger.length; i++) {
    navTrigger[i].addEventListener('click', function () {

        
        let navLinks = document.querySelectorAll('.nav-links');
        navLinks[i].classList.toggle('active');
    });
}


/* Changes Nav bar color on scroll */

let nav = document.querySelector('.nav-container');
let scrollChange = document.querySelector('.header-text-container');

let scrollChangeOptions = {

    rootMargin: "-90px 0px 0px 0px"

}

let scrollChangeObserver = new IntersectionObserver(function(entries) 


    {

    entries.forEach(entry => {

        if(!entry.isIntersecting) {

            nav.classList.add('nav-scrolled');
           

        }

            else {
                nav.classList.remove('nav-scrolled');
            }
    })
 
    },


    scrollChangeOptions);

scrollChangeObserver.observe(scrollChange);






/* Flickity Plugin for Testimonials Section */

var elem = document.querySelector('.testimonials-slider');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'center',
  contain: true,
  wrapAround: true,
  pageDots: false,

});




/* Faq Section */

let faqOpen = document.querySelectorAll('.faq-item');


for (let i = 0; i < faqOpen.length; i++) {

    faqOpen[i].addEventListener('click', function () {

        this.classList.toggle('active');

    });
}


/* Who We Serve Section */



let cardItem = document.querySelectorAll('.who-we-serve-card');



for (let i = 0; i < cardItem.length; i++) {

    cardItem[i].addEventListener('click', function () {

        this.classList.toggle('active');

    })
}


