const target = document.getElementById("menu");

target.addEventListener('click', () => {
  if (target.classList.contains('open'))
  {
    document.removeEventListener('touchmove', disableScroll, { passive: false });
    document.removeEventListener('mousewheel', disableScroll, { passive: false });
  }
  else
  {
    document.addEventListener('touchmove', disableScroll, { passive: false });
    document.addEventListener('mousewheel', disableScroll, { passive: false });
  }


  target.classList.toggle('open');

  const nav = document.getElementById("nav");
  nav.classList.toggle('in');
});

function disableScroll(event)
{
  event.preventDefault();
}