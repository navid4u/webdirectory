<section class="blog-section">
  <h2>📝 آخرین مقالات</h2>
  <div class="blog-grid">
    <?php
      $blogJson = file_get_contents('data/blog_posts.json');
      $blogPosts = json_decode($blogJson, true);

      foreach ($blogPosts as $post): ?>
        <div class="blog-card">
          <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
          <div class="blog-content">
            <h3><?= htmlspecialchars($post['title']) ?></h3>
            <p><?= htmlspecialchars($post['excerpt']) ?></p>
            <a href="<?= htmlspecialchars($post['url']) ?>" class="btn-secondary">مطالعه مقاله</a>
          </div>
        </div>
    <?php endforeach; ?>
  </div>
</section>