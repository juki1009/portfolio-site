document.addEventListener('DOMContentLoaded', function () {
  // ハンバーガーメニュー
  const open = document.getElementById('open');
  const overlay = document.querySelector('.overlay');
  const close = document.getElementById('close');

  open.addEventListener('click',() => {
    overlay.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
    overlay.classList.add('opacity-100', 'pointer-events-auto', 'scale-100');
    open.classList.add('hidden');
  });

  close.addEventListener('click',() => {
    overlay.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
    overlay.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
    open.classList.remove('hidden');
  });
});