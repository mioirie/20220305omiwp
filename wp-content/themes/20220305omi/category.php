<?php get_header(); ?>
  <div class="top">
    <p class="topcopy">HTML</p>

    <div class="flex">
  <?php
    $html_query = new WP_Query(
      array(
        'post_type'      => 'post',
        'category_name' => 'HTML',
        'posts_per_page' => 4,
      )
    );
    ?>
    <?php if ($html_query->have_posts()) : ?>
      <?php while ($html_query->have_posts()) : ?>
        <?php $html_query->the_post(); ?>
  <!-- インタビューカテゴリーの記事を4つ出力するサブループ開始 -->
      <a href="<?php the_permalink(); ?>" class="magazine-column">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
          <?php endif; ?>
    <!-- サムネイル画像の出力 -->

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
        </div>
      </a>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

     <p class="news-articles_link">
    <?php
    // 指定したカテゴリーの ID を取得
    $category_id = get_cat_ID('html');
    // このカテゴリーの URL を取得
    $category_link = get_category_link($category_id);
    ?>
    <a href="<?php echo esc_url($category_link); ?>" class="news-articles_link_text">インタビューの一覧はこちら→</a>
    <!-- カテゴリーアーカイブページへのリンク -->
  </p>

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
             <td class="language"><a href="category.html" class="cate-link">HTML</a></td>
             <td class="allow">
               <img src="img/arrow.svg" alt="no-img" class="allow-image">
             </td>
           </tr>
           <tr class="category-list">
             <td class="language"><a href="category.html" class="cate-link">CSS</a></td>
             <td class="allow">
               <img src="img/arrow.svg" alt="no-img" class="allow-image">
             </td>
           </tr>
           <tr class="category-list">
             <td class="language"><a href="category.html" class="cate-link">JavaScript</a></td>
             <td class="allow">
               <img src="img/arrow.svg" alt="no-img" class="allow-image">
             </td>
           </tr>
           <tr class="category-list">
             <td class="language"><a href="category.html" class="cate-link">PHP</a></td>
             <td class="allow">
               <img src="img/arrow.svg" alt="no-img" class="allow-image">
             </td>
           </tr>
           <tr class="category-list">
             <td class="language"><a href="category.html" class="cate-link">MySQL</a></td>
             <td class="allow">
               <img src="img/arrow.svg" alt="no-img" class="allow-image">
             </td>
           </tr>
         </table>
       </div> <!-- category closetag -->
     </div> <!-- content closetag -->
   </div> <!-- article closetag -->
<?php get_footer(); ?>

</body>

</html>