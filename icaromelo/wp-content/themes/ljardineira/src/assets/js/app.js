// Importando jQuery
import $ from 'jquery';
// import whatInput from 'what-input';

// Definindo global variable
window.$ = $;

// Importando Dependencias
import Foundation from 'foundation-sites';

$(document).foundation();

// Menu Mobile
$('.mobile-btn').on('click', function(){
  $('.menu-mobile').fadeToggle(100);
});
