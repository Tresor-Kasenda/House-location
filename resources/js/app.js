require('./bootstrap');

import emburger from "./assets/burger";

emburger(
    document.querySelector('#hamburger'),
    document.querySelector('#navitems'),
    document.querySelector('#layer')
);
