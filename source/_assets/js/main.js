var Pristine = require('pristinejs');

 
// https://github.com/sha256/Pristine

let pristineDefaultConfig = {
  // class of the parent element where the error/success class is added
  classTo: 'form-group',
  errorClass: 'has-danger',
  successClass: 'has-success',
  // class of the parent element where error text element is appended
  errorTextParent: 'form-group',
  // type of element to create for the error text
  errorTextTag: 'div',
  // class of the error text element
  errorTextClass: 'text-help' 
};
window.onload = function () {
  reportWindowSize();
  
 // Menu Interactivity

  var menubutton = document.getElementById("menubutton");
  var siteMenu = document.getElementById("siteMenu");

  menubutton.addEventListener('click', function(e) {

    if (siteMenu.getAttribute('aria-hidden') === "false") {
      siteMenu.setAttribute("aria-hidden", "true");
      menubutton.setAttribute("aria-expanded", "false");
    } else {
      siteMenu.setAttribute("aria-hidden", "false");
      menubutton.setAttribute("aria-expanded", "true");
    }

  });
}; // end ready?

var mobilebreakpoint = 992;
function reportWindowSize() {
  var width = window.innerWidth;

  if (width < mobilebreakpoint) {
    menubutton.setAttribute("aria-expanded", "false");
    siteMenu.setAttribute("aria-hidden", "true");
  } else {
    menubutton.setAttribute("aria-expanded", "true");
    siteMenu.setAttribute("aria-hidden", "false");
  }
}

window.onresize = reportWindowSize;