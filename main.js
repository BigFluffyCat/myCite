const magic = (clickElementClass, ClassOfElementToToggleClass, newClass) => {
  const clickElement = document.querySelector(`.${clickElementClass}`);
  const elementToToggleClass = document.querySelector(`.${ClassOfElementToToggleClass}`);
  
  clickElement.addEventListener('click', () => {
    elementToToggleClass.classList.toggle(newClass);
    if (document.body.style.overflow === 'hidden') {
      document.body.style.overflow = '';
    }
    else {
      document.body.style.overflow = 'hidden';
    }
  });
};

magic('message', 'feedback', 'new');
 
magic('message', 'message', 'noanim');

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 38,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  loop: true,
  spaceBetween: 10,
});

magic('menu-btn', 'navigation', 'open');
