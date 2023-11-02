function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight||document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth||document.documentElement.clientWidth)
  );
}

function handleScroll() {
  var cards = document.querySelectorAll('.card');

  for (var i = 0; i < cards.length; i++) {
    if (isElementInViewport(cards[i])) {
      cards[i].classList.add('in-view');
    }
  }
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);