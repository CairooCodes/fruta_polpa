const cards = document.querySelectorAll('.fade-in-up');
const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.2
};

const cards2 = document.querySelectorAll('.fade-in-left');
const options2 = {
  root: null,
  rootMargin: '0px',
  threshold: 0.2
};


const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, options);

const observer2 = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, options2);

cards.forEach(card => observer.observe(card));

cards2.forEach(card => observer.observe(card));

document.addEventListener('DOMContentLoaded', function() {
  var mobileMenuButton = document.getElementById('mobile-menu-button');
  var menuIcon = document.getElementById('menu-icon');
  var closeIcon = document.getElementById('close-icon');
  var mobileMenu = document.getElementById('mobile-menu');

  mobileMenuButton.addEventListener('click', function() {
    // Alternar entre os ícones
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');

    // Alternar a visibilidade do menu com efeito de fade
    if (mobileMenu.style.maxHeight) {
      mobileMenu.style.maxHeight = null;
      mobileMenu.style.opacity = 0;

      // Adicionar um pequeno atraso para garantir que a transição CSS ocorra antes de ocultar completamente o ícone
      setTimeout(function() {
        menuIcon.style.display = 'inline-block';
        closeIcon.style.display = 'none';
      }, 300); // Tempo deve ser o mesmo que a duração da transição CSS
    } else {
      menuIcon.style.display = 'none';
      closeIcon.style.display = 'inline-block';

      mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
      mobileMenu.style.opacity = 1;
    }
  });
});