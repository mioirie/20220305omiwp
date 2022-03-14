    <?php get_header(); ?>
    <div class="indexeyecatch">
      <img src="wp-content/themes/20220305omi/img/media__firstview.png" alt="">
      <div class="wrap">
        <p class="topcopy">Commit to the growth<br>for everyone</p>
      </div>
    </div>
    <div class="indexcontent">
      <div class="article">
        <div class="newpost">
          <p class="newpost_ttl-small">New Post</p>
          <p class="newpost_ttl">新着記事</p>
        </div>

        <div class="indexflex">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="indexmagazine-column">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img" class="indexmagazine-image">
                <?php endif; ?>
                <?php if (!is_category() && has_category()) : ?>
                  <p class="indexcategory-tag">
                    <?php $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                  </p>
                <?php endif; ?>
                <!-- カテゴリーの出力 -->

                <div class="indextext-content">
                  <h3 class="indexarticle__title">
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

                  <p class="indexarticle__date"><?php echo get_the_date('Y-m-d'); ?></p>
                  <!-- 投稿日時の出力 -->
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>

        </div>

        <div class="indexpromotion">
          <a href="single.html" class="promotion-column">
            <img src="wp-content\themes\20220305omi\img\banner.png" alt="no-img" class="promotion-image">
          </a>
        </div>
        <div class="profile">
          <img src="wp-content\themes\20220305omi\img\logo_circle.JPG" alt="no-img" class="profile-image">
          <div class="profile-content">
            <h3 class="profile-ttl">エストラ編集部</h3>
            <p class="profile-txt">プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。</p>
          </div>
        </div>
        <div class="indexcategory">
          <table class="category-content">
            <tr class="category-ttl">
              <th class="category-ttl_name">Category</th>
            </tr>

            <tr class="category-list">
              <td class="language"><a href="category.html" class="cate-link">HTML</a></td>
              <td class="allow">
                <img src="wp-content/themes/20220305omi/img/arrow.svg" alt="no-img" class="allow-image">
              </td>
            </tr>
            <tr class="category-list">
              <td class="language"><a href="category.html" class="cate-link">CSS</a></td>
              <td class="allow">
                <img src="wp-content/themes/20220305omi/img/arrow.svg" alt="no-img" class="allow-image">
              </td>
            </tr>
            <tr class="category-list">
              <td class="language"><a href="category.html" class="cate-link">JavaScript</a></td>
              <td class="allow">
                <img src="wp-content/themes/20220305omi/img/arrow.svg" alt="no-img" class="allow-image">
              </td>
            </tr>
            <tr class="category-list">
              <td class="language"><a href="category.html" class="cate-link">PHP</a></td>
              <td class="allow">
                <img src="wp-content/themes/20220305omi/img/arrow.svg" alt="no-img" class="allow-image">
              </td>
            </tr>
            <tr class="category-list">
              <td class="language"><a href="category.html" class="cate-link">MySQL</a></td>
              <td class="allow">
                <img src="wp-content/themes/20220305omi/img/arrow.svg" alt="no-img" class="allow-image">
              </td>
            </tr>
          </table>
        </div>

      </div>
    </div>
    </div>
    <?php get_footer(); ?>