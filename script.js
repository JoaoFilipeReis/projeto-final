const menuButton = document.querySelector('.menu-button');
const menuHeader = document.querySelector('.menu-header');

// open / close menu
menuButton.addEventListener('click', function() {
  if (menuHeader.classList.contains('d-flex')) {
    menuHeader.classList.remove('d-flex');
    menuHeader.classList.add('d-none');
  } else {
    menuHeader.classList.remove('d-none');
    menuHeader.classList.add('d-flex');
  }
});
