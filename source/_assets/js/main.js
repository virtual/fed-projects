var Pristine = require('pristinejs');


// Build link
/* <tr>
<td>https://subeta.net/users/Virtual</td>
<td><a href="#">https://fake.ly/sv</a></td>
<td><button type="submit" class="btn btn-primary btn-sm">Copy</td>
</tr>  */
function buildRow(origLink) {
  var tbody = document.getElementById("ctaTable").getElementsByTagName('tbody')[0];
  
  let row = tbody.insertRow(0);
  let cell = row.insertCell();
  let text = document.createTextNode(origLink);
  cell.appendChild(text);
  
  let short = getShortenedLink(origLink);
  let cell2 = row.insertCell();
  cell2.appendChild(createLink(short));

  let cell3 = row.insertCell();
  cell3.appendChild(buildCopy(short));

}

// <td><button type="submit" class="btn btn-primary btn-sm">Copy</td>
function buildCopy(link) {
  let btn = document.createElement("button");
  btn.innerHTML = "Copy";
  btn.type = "submit";
  btn.classList = "btn btn-primary btn-sm";
  btn.dataset.url = link;
  btn.addEventListener("click", function (el) {
    copyPath(link)
  });
  return btn;
}

function copyPath(link) {
  navigator.clipboard.writeText(link).then(function() {
    // console.log('Async: Copying to clipboard was successful!', link);
  }, function(err) {
    console.error('Async: Could not copy text: ', err);
  });
}

// Create shortened link
function createLink(url) {
  let a = document.createElement("a");
  a.href = url;
  a.innerHTML = url;
  return a;
}

function getShortenedLink(origLink) {
  var short = origLink.substring(8,11);
  var randId = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 2);
  let path = "https://www.fake.ly/" + short + randId;
  return path;
}


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
     var originalURL = document.getElementById("originalURL").value;
    if (valid) {
      document.getElementById('ctaResults').classList.remove('d-none');
      buildRow(originalURL)
    }
  });
  

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