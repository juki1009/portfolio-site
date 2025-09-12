<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Estate</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="mx-auto max-w-7xl flex justify-between items-center py-4">
      <div class="">
        <a href="<?php echo home_url('/estate/'); ?>" class="flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/img/prime-estate-logo.png" alt="ロゴ画像" class="w-24">
          <h1 class="text-blue-900 text-3xl text-sans font-bold">Prime Estate</h1>
        </a>
      </div>
      <div class="flex items-center">
        <ul class="flex items-center gap-10">
          <li class="hover:text-yellow-500 text-base">
            <a href="<?php echo home_url('/estate/'); ?>">
              ホーム
            </a>
          </li>
          <li class="hover:text-yellow-500 text-base">
            <a href="<?php echo home_url('/estate/'); ?>">
              会社概要
            </a>
          </li>
          <li class="hover:text-yellow-500 text-base">
            <a href="<?php echo home_url('/estate/'); ?>">
              サービス
            </a>
          </li>
          <li class="hover:text-yellow-500 text-base">
            <a href="<?php echo home_url('/estate/'); ?>">
              実績
            </a>
          </li>
          <li class="hover:text-yellow-500 text-base">
            <a href="<?php echo home_url('/estate/'); ?>">
              お知らせ
            </a>
          </li>
        </ul>
      </div>
      <div class="flex items-center bg-blue-900 rounded-lg h-10">
        <a href="<?php echo home_url('/estate/'); ?>" class="text-white px-3 text-sm">
          お問い合わせ
        </a>
      </div>
    </nav>
  </header>

  <main>
    <!-- ファーストビュー -->
    <div class="relative w-full h-[500px] md:h-[800px]">
      <img src="<?php echo get_template_directory_uri(); ?>/img/first-view.jpg" alt="ファーストビュー" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-blue-900 bg-opacity-40"></div>
      <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">
          未来の価値を、<span class="text-yellow-500">今日から</span>
        </h2>
        <p class="text-lg md:text-2xl max-w-3xl">
          お客様の資産価値向上を通じて、豊かな未来を創造する
        </p>
      </div>
    </div>
  </main>
  
  <footer class="bg-blue-900 text-white py-10">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- ロゴ & 会社名 -->
      <div>
        <a href="<?php echo home_url('/estate/'); ?>" class="flex items-center mb-4">
          <img src="<?php echo get_template_directory_uri(); ?>/img/prime-estate-logo.png" alt="ロゴ画像" class="w-20">
          <span class="ml-3 text-xl font-bold">Prime Estate</span>
        </a>
        <p class="text-sm leading-relaxed">
          お客様の資産価値向上を通じて、<br>
          豊かな未来を創造します。
        </p>
      </div>

      <!-- ナビゲーション -->
      <div>
        <h3 class="text-lg font-semibold mb-4">メニュー</h3>
        <ul class="space-y-2">
          <li><a href="<?php echo home_url('/estate/'); ?>" class="hover:text-yellow-500">ホーム</a></li>
          <li><a href="<?php echo home_url('/estate/'); ?>" class="hover:text-yellow-500">会社概要</a></li>
          <li><a href="<?php echo home_url('/estate/'); ?>" class="hover:text-yellow-500">サービス</a></li>
          <li><a href="<?php echo home_url('/estate/'); ?>" class="hover:text-yellow-500">実績</a></li>
          <li><a href="<?php echo home_url('/estate/'); ?>" class="hover:text-yellow-500">お知らせ</a></li>
          <li><a href="<?php echo home_url('/estate/'); ?>" class="hover:text-yellow-500">お問い合わせ</a></li>
        </ul>
      </div>

      <!-- 会社情報 -->
      <div>
        <h3 class="text-lg font-semibold mb-4">会社情報</h3>
        <p class="text-sm">
          〒100-0000 東京都千代田区〇〇1-2-3<br>
          TEL: 03-1234-5678<br>
          営業時間: 平日 9:00〜18:00
        </p>
      </div>
    </div>

    <!-- コピーライト -->
    <div class="border-t border-blue-700 mt-10 pt-4 text-center text-sm">
      &copy; <?php echo date('Y'); ?> Prime Estate. All Rights Reserved.
    </div>
  </footer>
  <script src="js/main-prime-estate.js"></script>
</body>
</html>