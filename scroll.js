
function resizeLogoOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 200,
  headerEl = document.getElementById('logo');

  if (distanceY > shrinkOn) {
    headerEl.classList.add("small-logo");
  } else {
    headerEl.classList.remove("small-logo");
  }
}

window.addEventListener('scroll', resizeLogoOnScroll);
