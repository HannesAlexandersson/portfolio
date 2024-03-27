// get the nodes from the DOM
const dropdownContent = document.getElementById('dropdownContent');  
const navBar = document.querySelector('.navbar');
const links = document.querySelector(".links-wrapper");
const navBarMobile = document.querySelector('.navigation-mobile');

// Scrolling navbar animation logic, makes it go away when user scrolls down and appear when user scrolls up
let lastScrollTop = 0;
const navHeight = navBar.offsetHeight;


window.addEventListener('scroll', () => {
  const scrolled = window.scrollY || document.documentElement.scrollTop;
  
  if (scrolled > navHeight) {
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


 