<?php get_header(); ?>

<div class="top">
  <p class="categorytopcopy"><?php single_cat_title(); ?></p>
  <!-- カテゴリーのタイトルを出力 -->
</div>

<div class="catecontainer">

  <div class="cateflex">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- メインループ開始 -->
        <a href="<?php the_permalink(); ?>" class="catemagazine-column">
          <!-- 個別記事へのリンクを出力 -->
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img" class="catemagazine-image">
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
          <div class="catetext-content">
            <h3 class="catearticle__title">
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
            <p class="catearticle__date"><?php echo get_the_date('Y-m-d'); ?></p>
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
  </div> <!-- cateflex closetag -->
</div>

  <aside class="catesidebar">
    <div class="catepromotion">
      <!-- coachtechなら・・ -->
      <a href="single.html" class="promotion-column">
        <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/banner.png" alt="no-img" class="catepromotion-image">
      </a>
    </div> <!-- catepromotion closetag -->

    <div class="cateprofile">
      <!-- エストラ編集部部分 -->
      <img src="http://localhost/20220305omi2/wp-content/uploads/2022/03/logo_circle.jpg" alt="no-img" class="profile-image">
      <div class="profile-content">
        <h3 class="profile-ttl">エストラ編集部</h3>
        <p class="profile-txt">プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。</p>
      </div>
    </div> <!-- cateprofile closetag -->

    <div class="catecategory">
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
    </div> <!-- catecategory closetag -->
  </aside> <!-- catesidebar closetag -->
</div><!-- catecontainer closetag -->
    </div>
<?php get_footer(); ?>