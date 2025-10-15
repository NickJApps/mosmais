<?php
header('Content-Type: application/xml; charset=UTF-8');

// список страниц сайта
$pages = [
    '' => 1.0,
    'civil_disputes.html' => 0.8,
    'consumer_extremism.html' => 0.8,
    'consumer_rights.html' => 0.8,
    'expertise.html' => 0.8,
    'Intellectual_property.html' => 0.8,
    'real_estate.html' => 0.8,
];

$today = date('Y-m-d'); // текущая дата в формате YYYY-MM-DD

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page => $priority): ?>
  <url>
    <loc>https://mosmais.ru/<?= $page ?></loc>
    <lastmod><?= $today ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority><?= $priority ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
