<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@800&family=Noto+Sans+JP&family=Overpass:wght@900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/530eef1825.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <?php
  wp_head();
  ?>
  <title>Document</title>
</head>

<body <?php body_class(); ?>>
  <?php
  wp_body_open();
  ?>
  <header class="header">
    <div class="header__bar">
      <div class="header_logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/パス 7.png" class="sp" alt="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/パス 7@2x.png" class="pc" alt="logo">
      </div>
      <div class="header_menu">
        <div class="openbtn"><span></span><span></span><span></span></div>
        <nav id="g-nav">
          <ul>
            <li><a href="#concept">CONCEPT<br><span>コンセプト</span></a></li>
            <li><a href="#service">SERVICE<br><span>事業内容</span></a></li>
            <li><a href="#works">WORKS<br><span>制作実績</span></a></li>
            <li><a href="#design">EX.DESIGN<br><span>デザイン事例</span></a></li>
            <li><a href="#blog">BLOG<br><span>ブログ</span></a></li>
          </ul>
          <div class="contact">
            <div class="contact__phone">
              <p><i class="fas fa-phone-alt"></i>03-1234-5678<br><span>平日10：00～18：00</span></p>
            </div>
            <div class="contact__btn">
              <a href="#">お問い合わせ<span></span></a>
            </div>
          </div>
        </nav>
        <nav class="pc_nav">
          <ul>
            <li><a href="#concept">CONCEPT<br><span>コンセプト</span></a></li>
            <li><a href="#service">SERVICE<br><span>事業内容</span></a></li>
            <li><a href="#works">WORKS<br><span>制作実績</span></a></li>
            <li><a href="#design">EX.DESIGN<br><span>デザイン事例</span></a></li>
            <li><a href="#blog">BLOG<br><span>ブログ</span></a></li>
            <li>
              <p class="phone"><i class="fas fa-phone-alt"></i>03-1234-5678<br><span>平日10：00～18：00</span></p>
            </li>
            <li><a class="contact_btn" href="#"><span><i class="fas fa-envelope"></i></span><br>お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="header__view">
      <div class="header__view_images">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/blue.png" class="first_sp sp" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/img.png" class="second_sp sp" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/fv-img01@2x.png" class="first_pc pc" alt="">
      </div>
      <div class="header__view_title">
        <h1>法人集客にフォーカスした</h1>
        <h1>ホームページ制作のご提案を。</h1>
        <h2>デザイン力×集客力で結果に繋げる</h2>
      </div>
      <div class="header__view__contact">
        <div class="header__view__contact_phone">
          <p><i class="fas fa-phone-alt"></i>03-1234-5678<br><span>平日10：00～18：00</span></p>
        </div>
        <div class="header__view__contact_btn">
          <a href="#">お問い合わせ<span></span></a>
        </div>
      </div>
      <div class="header__view__article">
        <div class="article_title">
          <h1>NEWS</h1>
        </div>
        <div class="text_area">
          <p>2020/00/00</p>
          <a href="#">タイトルテキストリンクタイト<br>ルテキストリンクタイトルテキストリンク</a>
        </div>
      </div>
    </div>
  </header>
  <section id="concept" class="concept">
    <div class="concept__index">
      <div class="concept__title">
        <h1>CONCEPT</h1>
      </div>
      <div class="concept__content">
        <div class="flex">
          <div class="image_area">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sp/img1.png" class="sp" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/img1@2x.png" class="pc" alt="">
          </div>
          <div class="flex_content">
            <div class="content_title">
              <h2>高クオリティのホームページを</h2>
              <h2>お手頃価格でご提供</h2>
            </div>
            <div class="content_price">
              <p><span>平均受注単価：</span>45～65万</p>
            </div>
          </div>
        </div>
        <div class="content_text">
          <p>
            弊社は少数精鋭で制作を進めていくため、大手の制作会社と遜色ない高クオリティなホームページを低コストで制作できます。デザインからコーディング・開発まで基本的に全ての工程を自社内で行うため、無駄な中間コストがかかりません。またデザインが良いだけでなく、集客に繋がるようなご提案をいたします。
          </p>
        </div>
        <div class="content_btn">
          <a href="#">詳しく見る<span></span></a>
        </div>
      </div>
    </div>
    <div class="feature">
      <div class="feature__title">
        <h3>他の制作会社との違い</h3>
        <h2>LOGOの3つの特徴</h2>
        <p>集客に特化したクオリティの高いデザインを安価な制作費用でご提供します。</p>
      </div>
      <div class="feature__content">
        <div class="skew_bg">

        </div>
        <div class="content_card first">
          <div class="bg_num">
            <p>01</p>
          </div>
          <div class="text_area">
            <div class="title">
              <h3>集客を最優先</h3>
            </div>
            <div class="description">
              <p>特徴についての文章特徴についての文章特徴についての文章特徴についての文章特徴についての文章</p>
            </div>
          </div>
        </div>
        <div class="content_card second">
          <div class="bg_num">
            <p>02</p>
          </div>
          <div class="text_area">
            <div class="title">
              <h3>安価な制作費用</h3>
            </div>
            <div class="description">
              <p>特徴についての文章特徴についての文章特徴についての文章特徴についての文章特徴についての文章</p>
            </div>
          </div>
        </div>
        <div class="content_card third">
          <div class="bg_num">
            <p>03</p>
          </div>
          <div class="text_area">
            <div class="title">
              <h3>戦略的なデザイン</h3>
            </div>
            <div class="description">
              <p>特徴についての文章特徴についての文章特徴についての文章特徴についての文章特徴についての文章</p>
            </div>
          </div>
        </div>
      </div>
      <div class="feature__footer"></div>

    </div>
  </section>
  <section id="service" class="service">
    <div class="service__title">
      <h1>SERVICE</h1>
    </div>
    <div class="service__index">
      <h2>WEB集客をトータルサポート</h2>
      <p>デザインからコーディング・開発まで基本的に全ての工程を自社内で行うため、無駄な中間コストがかかりません。またデザインが良いだけでなく、集客に繋がるようなご提案をいたします。</p>
    </div>
    <div class="service__content">
      <div class="service_card">
        <div class="image_area">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sp/マスクグループ 1.png" class="sp" alt="">
          <h3>ホームページ制作事業</h3>
          <p>WEBSITE DESIGN</p>
        </div>
        <div class="text_area">
          <p>事業内容についての文章事業内容についての文章事業内容についての文章事業内容についての文章事業内容についての文章事業内容についての文章</p>
        </div>
        <div class="content_btn">
          <a href="#">詳しく見る<span></span></a>
        </div>
      </div>
      <div class="service_card">
        <div class="image_area">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sp/マスクグループ 2.png" class="sp" alt="">
          <h3>SEO対策事業</h3>
          <p>SEARCH ENGINE MARKETING</p>
        </div>
        <div class="text_area">
          <p>小手先なSEO対策ではなく、永久的に効果が続くようなSEO対策（ホワイトハットなSEO）を行います。常に最善施策を研究してアクセスアップを図ります。</p>
        </div>
        <div class="content_btn">
          <a href="#">詳しく見る<span></span></a>
        </div>
      </div>
      <div class="service_card">
        <div class="image_area">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sp/マスクグループ 3.png" class="sp" alt="">
          <h3>WEB運用事業</h3>
          <p>WEB OPERATION</p>
        </div>
        <div class="text_area">
          <p>toB業界の広告ならお任せください。あらゆる業界での広告実績があり、平均PA（1CVの獲得コスト）を把握しておりますので、競合と比較した上で提案できます。</p>
        </div>
        <div class="content_btn">
          <a href="#">詳しく見る<span></span></a>
        </div>
      </div>

    </div>
  </section>
  <section id="works" class="works">
    <div class="works__title">
      <h1>WORKS</h1>
    </div>
    <div class="works__index">
      <h2>WEB集客をトータルサポート</h2>
      <p>BtoBのコーポレートサイトを中心に様々なWEBサイトの制作実績がございます。集客に繋がるデザインで御社の売上UPに貢献する提案をします。</p>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <?php
  if (is_home()) {
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
    wp_enqueue_script('bistro-calme-home', get_template_directory_uri() . '/assets/js/home.js');
  }
  ?>

  <?php wp_footer(); ?>
</body>

</html>