import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';



window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

window.Swiper = Swiper
