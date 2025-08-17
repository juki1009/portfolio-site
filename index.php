<?php get_header(); ?>
  <main>
    <div class="flex justify-center my-44 md:mt-60 md:mb-96">
      <div class="flex flex-col">
        <div class="text-6xl font-bold font-sans text-left">
          Juki<br>
          Otsuka
        </div>
        <div class="text-xl font-bold font-sans text-left mt-5">-Portfolio</div>  
      </div>
    </div>

    <section id="section1" class="bg-[hsl(210_40%_96.1%/0.5)] py-44 md:py-48">
      <div class="max-w-7xl mx-auto px-5">
        <h2 class="text-4xl font-bold font-sans text-center pt-10 mb-20">My Projects</h2>
        <div class="flex justify-center">
          <div class="flex flex-col w-96 bg-white rounded-lg shadow-md">
            <img class="w-72 md:w-96 mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/work_01.png" alt="スイーツ専門店の画像"/>
            <div class="p-5">
              <h3 class="text-lg font-bold">スイーツ専門店（素材庵）</h3>
              <p class="mt-2 text-sm text-gray-700 leading-relaxed">
                デザインからコーディングまで一貫して対応しました。Tailwind CSS を使用して構築しており、スマートフォンやタブレットにも対応したレスポンシブデザインです。<br>
                「お知らせ」は WordPress の投稿機能と連携しており、管理画面から簡単に追加・編集が可能です。
              </p>
              <a href="https://juki-portfolio.com/sweets/" target="_blank" class="block mt-5">
                <div class="flex justify-center border hover:bg-gray-100 transition cursor-pointer rounded">
                  <span class="text-sm py-2">もっと見る　→</span>
                </div>
              </a>
            </div>
          </div>
        </div>

        <p class="text-base font-sans text-center mt-12 mx-5 leading-relaxed">
          このポートフォリオサイト自体も、デザインからコーディング、WordPressでの実装まで行っております。<br>
          制作実績の一例としてご覧いただければ幸いです。
        </p>
      </div>
    </section>

    <section id="section2" class="py-44 md:py-48">
      <div class="max-w-7xl mx-auto px-5">
        <h2 class="text-4xl font-bold font-sans text-center pt-10 mb-20">Service</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mx-10 lg:mx-40">
          <div class="bg-gray-100 rounded-lg px-5 py-3">
            <div class="flex justify-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/coding_icon.png" class="w-96 h-70 object-contain">
            </div>
            <p class="text-center text-xl font-bold mt-3">Coding</p>
            <p class="py-5 leading-relaxed">
              HTML, CSS（tailwindcss）, JavaScriptを使って、保守性と効率性を兼ね備えたクリーンなコードを提供します。
            </p>
          </div>
          <div class="bg-gray-100 rounded-lg px-5 py-3">
            <div class="flex justify-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/design_icon.png" class="w-96 h-70 object-contain">
            </div>
            <p class="text-center text-xl font-bold mt-3">Desigh</p>
            <p class="py-5 leading-relaxed">直感的でユーザーフレンドリーなデザインを実現します。モダンなデザイントレンドを取り入れながら、ブランドイメージにマッチした魅力的なUIを構築します。</p>
          </div>
          <div class="bg-gray-100 rounded-lg px-5 py-3">
            <div class="flex justify-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/responsive_icon.png" class="w-96 h-70 object-contain">
            </div>
            <p class="text-center text-xl font-bold mt-5">Responsive</p>
            <p class="py-5 leading-relaxed">あらゆるデバイスで快適に閲覧できるレスポンシブデザインを実現します。スマートフォン、タブレット、PCに最適化した表示で、ユーザー体験を最大化します。</p>
          </div>
        </div>
      </div>
    </section>

    <section id="section3" class="bg-[hsl(210_40%_96.1%/0.5)] py-44 md:py-48">
      <div class="max-w-7xl mx-auto px-5">
        <h2 class="text-4xl font-bold font-sans text-center pt-10 mb-20">About</h2>
        <div class="md:flex items-center gap-x-10 mx-5 md:mx-32">
          <div class="basis-1/2 flex justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/my-illustration.jpg" class="rounded-lg w-96">
          </div>
          <div class="basis-1/2 mx-5 md:mx-0">
            <p class="text-xl font-sans font-bold my-5 md:my-0">大塚じゅき</p>
            <p class="mb-2 leading-relaxed">
              2001年生まれ。2024年4月よりシステムエンジニアとしてキャリアをスタートし、システム開発・ソフトウェア事業・デザイン業務に携わっています。<br>
              趣味は筋トレで、日々体を動かすことを習慣にしています。新しい技術や知識を学ぶことが好きで、常にスキルアップを心がけています。<br>
              「細部まで丁寧に」をモットーに、デザインとエンジニアリングの両面からアプローチし、見る人・使う人に喜ばれるものづくりを大切にしています。
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="section4" class="py-44 md:py-52">
      <div claa="max-w-7xl mx-auto px-5">
        <h2 class="text-4xl font-bold font-sans text-center pt-10 mb-5">Contact</h2>
        <p class="text-base font-sans text-center mb-5">下記フォームよりお問い合わせください。</p>
        <div class="flex justify-center">
          <form action="https://formsubmit.co/ootsukajuki@gmail.com" method="POST" class="flex flex-col space-y-4 w-[90%] md:w-[40%]">
            <input type="text" name="name" placeholder="Your Name" required class="p-2 border rounded-md">
            <input type="email" name="email" placeholder="Your Email" required class="p-2 border rounded-md">
            <textarea name="message" placeholder="Your Message" required class="p-2 border rounded-md"></textarea>
            <div class="flex justify-center">
              <button type="submit" class="bg-gray-400 text-white p-2 rounded-md w-24 hover:opacity-50">Send</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>