<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
  <div class="content">
    <div class="singlearticle">
      <div class="single-category">
        <?php if (has_category()) : ?>
          <div class="category-tag single-category-tag"><?php echo get_the_category_list(' '); ?></div>
        <?php endif; ?>
        <!-- カテゴリーの出力 -->
      </div>
      <div class="singlearticle__title">
        <?php the_title(); ?>
        <!-- タイトルの出力 -->
      </div>
      <p class="article-date"><?php echo get_the_date('Y-m-d'); ?></p>
      <!-- 投稿日時の出力 -->
    </div>
    <div class="singleeyecatch">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img" class="singleimage">
      <?php endif; ?>
      <!-- サムネイルの表示 -->
    </div>
    <div class="article-text">
      <div class="sampletext">
        <?php the_content(); ?>
        <!-- 本文の出力 -->
      </div>
    </div>
  </div>
  <!-- article closetag -->
  <!-- div parent closetag -->
<?php endif; ?>
<!-- メインループの終了 -->

<?php get_footer(); ?>

</body>

</html>