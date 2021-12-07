window.addEventListener('DOMContentLoaded', () => {
  const storedAr = localStorage.getItem('aspect-ratio');
  if (storedAr) {
    changeAspectRatio(storedAr);
  }
});

function changeAspectRatio(newRatio) {
  const targetClassList = document.getElementById('ar-target').classList;
  targetClassList.forEach(cname => {
    if (/^ar-/.test(cname)) { targetClassList.remove(cname) };
  });
  targetClassList.add(`ar-${newRatio}`);
  localStorage.setItem('aspect-ratio', newRatio);
}

function toggleMenu() {
  document.getElementsByClassName('nav-menu')[0].classList.toggle('visible');
}