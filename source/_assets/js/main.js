var app = {
  changeScrollableOffset: function(px) {
    console.log('changeScrollableOffset', px)
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