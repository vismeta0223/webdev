const carouselTrack = document.querySelector('.carousel-track');

carouselTrack.addEventListener('mouseover', () => {
  carouselTrack.style.animationPlayState = 'paused';
});

carouselTrack.addEventListener('mouseout', () => {
  carouselTrack.style.animationPlayState = 'running';
});