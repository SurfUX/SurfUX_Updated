<?php
require_once __DIR__ . '/../includes/config.php';
$portfolio=require __DIR__.'/../data/portfolio.php'; $id=$_GET['id']??''; $project=null;
foreach($portfolio as $p){if($p['id']===$id){$project=$p;break;}}
if(!$project){http_response_code(404);$page_title='Project Not Found | SurfUX';include __DIR__.'/../includes/header.php';?>
<main><section class="section"><div class="container"><h1>Project not found</h1><a class="btn btn-primary" href="<?= BASE_URL ?>/pages/portfolio">Back to portfolio</a></div></section></main>
<?php include __DIR__.'/../includes/footer.php';exit;}
$page_title=$project['title'].' | SurfUX'; include __DIR__.'/../includes/header.php'; ?>
<main class="portfolio-detail-page">
<section class="page-hero portfolio-hero"><div class="container"><a class="back-link" href="<?= BASE_URL ?>/pages/portfolio">← Back to portfolio</a><span class="eyebrow">CASE STUDY</span>
<h1><?= htmlspecialchars($project['title']) ?></h1><p><?= htmlspecialchars($project['type']) ?></p><div class="detail-meta"><span><?= htmlspecialchars($project['year']) ?></span><?php if($project['url']&&$project['url']!=='#'): ?><a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" rel="noopener">Visit project →</a><?php endif; ?></div></div></section>
<section class="section section-light"><div class="container"><div class="detail-hero-image"><img src="<?= BASE_URL ?>/assets/<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['alt'] ?: $project['title']) ?>"></div>
<div class="detail-content-grid"><div><span class="eyebrow">PROJECT OVERVIEW</span><?php foreach($project['description'] as $i=>$paragraph): ?><p class="<?= $i===0?'lead':'' ?>"><?= htmlspecialchars($paragraph) ?></p><?php endforeach; ?></div>
<aside class="detail-sidebar"><h3>Project Details</h3><dl><dt>Year</dt><dd><?= htmlspecialchars($project['year']) ?></dd><dt>Category</dt><dd><?= htmlspecialchars($project['type']) ?></dd></dl><h3>Tags</h3><div class="project-tags"><?php foreach($project['tags'] as $tag): ?><span><?= htmlspecialchars($tag) ?></span><?php endforeach; ?></div>
<?php if($project['features']): ?><h3>Key Highlights</h3><ul><?php foreach($project['features'] as $feature): ?><li><?= htmlspecialchars($feature) ?></li><?php endforeach; ?></ul><?php endif; ?></aside></div></div></section>
<section class="section"><div class="container next-projects"><div><span class="eyebrow">MORE WORK</span><h2>Explore more <em>SurfUX projects.</em></h2></div><a class="btn btn-outline" href="<?= BASE_URL ?>/pages/portfolio">View all projects →</a></div></section>
</main><?php include __DIR__.'/../includes/footer.php'; ?>