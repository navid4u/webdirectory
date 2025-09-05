
<!-- سایت‌های ویژه -->
<section class="featured-sites">
  <h2>  سایت‌های پیشنهادی امروز</h2>
  <div class="site-grid">
    <?php
      $json = file_get_contents('data/featured_sites.json');
      $sites = json_decode($json, true);
      foreach($sites as $site):
    ?>
    <div class="site-card">
      <div class="site-icon">
        <img src="<?= htmlspecialchars($site['favicon']) ?>" alt="favicon" width="24" height="24" style="border-radius:4px;">
      </div>
      <h4><a href="<?= htmlspecialchars($site['url']) ?>" target="_blank"><?= htmlspecialchars($site['title']) ?></a></h4>
      <p><?= htmlspecialchars($site['description']) ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>