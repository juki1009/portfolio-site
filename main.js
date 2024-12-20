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

// スワイパーの動き
const swiper = new Swiper(".swiper", {
  loop: true, // ループ
  speed: 1500, // 少しゆっくり(デフォルトは300)
  autoplay: { // 自動再生
    delay: 2000, // スライドのスピード
    disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
  },
  // 前後の矢印
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});