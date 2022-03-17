<?php get_header(); ?>

<div class="top">
  <p class="categorytopcopy"><?php single_cat_title(); ?></p>
  <!-- カテゴリーのタイトルを出力 -->
</div>

<div class="content">
  <!-- コンテンツ全体 -->
  <div class="article">
    <!--新着記事部分 -->

    <div class="flex">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <!-- メインループ開始 -->
          <a href="<?php the_permalink(); ?>" class="magazine-column">
            <!-- 個別記事へのリンクを出力 -->
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img" class="magazine-image">
            <?php endif; ?>
            <!-- サムネイルの出力 -->
            <?php if (!is_category() && has_category()) : ?>
              <p class="category-tag">
                <?php
                $postcat = get_the_category();
                echo $postcat[0]->name;
                ?>
              </p>
            <?php endif; ?>
            <!-- カテゴリーの出力 -->
            <div class="text-content">
              <h3 class="article__title">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
                <!-- タイトルの文字数が30文字以降は表示せずに、最後に「…」をつける -->
              </h3>
              <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p>
              <!-- 投稿日時の出力 -->
              <div class="article-tags">
                <p class="article-tags__inner">
                  <?php $posttags = get_the_tags();
                  if ($posttags) {
                    foreach ($posttags as $tag) {
                      echo '<span class="tag-span">' . $tag->name . '</span>';
                    }
                  } ?></p>
                <!-- リンクの無いタグをspanタグで囲って出力 -->
              </div>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <!-- 投稿が無い場合の処理 -->
        <p>投稿が見つかりません。</p>
      <?php endif; ?>
      <div class="article-border"></div>
    </div> <!-- flex closetag -->





    <div class="promotion">
      <!-- coachtechなら・・ -->
      <a href="single.html" class="promotion-column">
        <img src="img/banner.png" alt="no-img" class="promotion-image">
      </a>
    </div> <!-- promotion closetag -->

    <div class="profile">
      <!-- エストラ編集部部分 -->
      <img src="img/logo_circle.JPG" alt="no-img" class="profile-image">
      <div class="profile-content">
        <h3 class="profile-ttl">エストラ編集部</h3>
        <p class="profile-txt">プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。</p>
      </div>
    </div> <!-- profile closetag -->

    <div class="category">
      <table class="category-content">
        <tr class="category-ttl">
          <th class="category-ttl_name">Category</th>
        </tr>

        <tr class="category-list">
          <td class="language"><a href="http://localhost/20220305omi2/category/html" class="cate-link">HTML</a></td>
          <td class="allow">
            <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/arrow.png" alt="no-img" class="allow-image">
          </td>
        </tr>


        <tr class="category-list">
          <td class="language"><a href="http://localhost/20220305omi2/category/css/" class="cate-link">CSS</a></td>
          <td class="allow">
            <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/arrow.png" alt="no-img" class="allow-image">
          </td>
        </tr>

        <tr class="category-list">
          <td class="language"><a href="http://localhost/20220305omi2/category/javascript/" class="cate-link">JavaScript</a></td>
          <td class="allow">
            <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/arrow.png" alt="no-img" class="allow-image">
          </td>
        </tr>

        <tr class="category-list">
          <td class="language"><a href="http://localhost/20220305omi2/category/php/" class="cate-link">PHP</a></td>
          <td class="allow">
            <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/arrow.png" alt="no-img" class="allow-image">
          </td>
        </tr>
        <tr class="category-list">
          <td class="language"><a href="http://localhost/20220305omi2/category/mysql/" class="cate-link">MySQL</a></td>
          <td class="allow">
            <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/arrow.png" alt="no-img" class="allow-image">
          </td>
        </tr>
      </table>
    </div> <!-- category closetag -->
  </div> <!-- content closetag -->
</div> <!-- article closetag -->
</div> <!-- div parent closetag -->

<?php get_footer(); ?>

</body>

</html>