// ハンバーガーメニュー
const menuBtn = document.getElementById('menu-btn');
const overlayMenu = document.getElementById('overlay-menu');
const closeBtn = document.getElementById('close-btn');

menuBtn.addEventListener('click', () => {
  overlayMenu.classList.remove('hidden');
  menuBtn.classList.add('hidden');
  requestAnimationFrame(() => {
    overlayMenu.classList.remove('opacity-0');
  });
});

closeBtn.addEventListener('click', () => {
  menuBtn.classList.remove('hidden');
  overlayMenu.classList.add('opacity-0');
  overlayMenu.addEventListener('transitionend', () => {
    overlayMenu.classList.add('hidden');
  }, { once: true });
});