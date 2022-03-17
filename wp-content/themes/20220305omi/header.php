<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estra,inc.</title>
  <link rel="stylesheet" href="css\reset.css" />
  <link rel="stylesheet" href="css\index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gorditas&family=Indie+Flower&family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="parent">
    <header>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="article-logo">
        <div class="estramedia">
          <?php bloginfo('name'); ?>
          <a href="<?php echo home_url('/'); ?>" class="header-img">
            <!-- estramediaロゴからトップ画面にリンク -->
            <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/estramedia__logo.png" alt="no-image">
          </a>
          <?php bloginfo('description'); ?>
        </div>
        <nav class="header_nav">
          <ul class="header_nav_list">
            <li class="header_nav_item"><a href="http://localhost/20220305omi2/category/html/" class="header_nav_item_link">HTML</a></li>
            <li class="header_nav_item"><a href="http://localhost/20220305omi2/category/css/" class="header_nav_item_link">CSS</a></li>
            <li class="header_nav_item"><a href="http://localhost/20220305omi2/category/javascript/" class="header_nav_item_link">JavaScript</a></li>
            <li class="header_nav_item"><a href="http://localhost/20220305omi2/category/php/" class="header_nav_item_link">PHP</a></li>
            <li class="header_nav_item"><a href="http://localhost/20220305omi2/category/mysql/" class="header_nav_item_link">MySQL</a></li>
          </ul>
        </nav>

    </header>