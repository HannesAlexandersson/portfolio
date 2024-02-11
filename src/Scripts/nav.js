// get the nodes from the DOM
const dropdownContent = document.getElementById('dropdownContent');  
const navBar = document.querySelector('.navbar');
const links = document.querySelector(".links-wrapper");

// dropdown menu logic for the mobile hamburger menu
links.addEventListener('click', () => {
  dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
});

// Scrolling navbar animation logic, makes it go away when user scrolls down and appear when user scrolls up
let lastScrollTop = 0;
const navHeight = navBar.offsetHeight;
const mobileNavHeight = navBarMobile.offsetHeight;

window.addEventListener('scroll', () => {
  const scrolled = window.scrollY || document.documentElement.scrollTop;

  if (scrolled > navHeight || scrolled > mobileNavHeight) {
    if (scrolled > lastScrollTop) {
      navBar.classList.remove('sticky');
      navBar.classList.add('animate');
      navBarMobile.classList.remove('sticky');
      navBarMobile.classList.add('animate');
    } else {
      navBar.classList.remove('animate');
      navBar.classList.add('sticky');
      navBarMobile.classList.remove('animate');
      navBarMobile.classList.add('sticky');
    }
  } else {
    navBar.classList.remove('animate', 'sticky');
    navBarMobile.classList.remove('animate', 'sticky');
  }

  lastScrollTop = scrolled;
});