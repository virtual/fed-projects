var Pristine = require('pristinejs');

var app = {
  changeScrollableOffset: function(px) {
    // console.log('changeScrollableOffset', px)
  },
  toggleMenu: function(el) {
    // if (el.classList.contains('show')) {
    //   hideDropdownMenu(el)
    // } else {
    //   el.classList.add('show');
    //   el.querySelector('button').setAttribute("aria-expanded", 'true');
    // }
  },
  checkValid: function(el) {
    console.log('valid?')
  }
}


app.changeScrollableOffset(40);
app.toggleMenu();

// $(document).ready(function () {
//   $('form').submit(function (e) { 
//     e.preventDefault();
//     app.checkValid();
//   });
// });

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
  var form = document.getElementById("submitURL");

  // create the pristine instance
  var pristine = new Pristine(form, pristineDefaultConfig, true);

  form.addEventListener('submit', function (e) {
     e.preventDefault();
     
     // check if the form is valid
     var valid = pristine.validate(); // returns true or false
    console.log(valid)
    if (valid) {
      document.getElementById('ctaResults').classList.remove('d-none');
    }
  });


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
};

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