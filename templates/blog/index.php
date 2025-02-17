<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
?>

<?php foreach ($pagination['entries'] as $entry) { ?>
	<article>
	<h2><a href="<?= $rbase . $entry['url'] ?>"><?= $entry['title'] ?? 'Unknown title' ?></a></h2>
	<p class=dimmedColor><time datetime="<?=$entry['date']?>"><?= date('jS F Y', strtotime($entry['date'])) ?></time>, <?=$entry['minutes_read']?> min read</p>
	<p><?= $entry['excerpt'] ?? '---' ?></p>
	</article>
<?php } ?>

	<article>
	<br>
	<?php if ($pagination['nextUrl']) { ?>
	<a href="<?= $rbase . "/" . ltrim($pagination['nextUrl'],"/") ?>">&larr; Older</a> &nbsp; &nbsp; &nbsp;
	<?php } ?>
	<?php if ($pagination['prevUrl']) { ?>
	<a href="<?= $rbase . "/" . ltrim($pagination['prevUrl'],"/") ?>">Newer &rarr;</a>
	<?php } ?>
	<br><br>
	</article>
<div class=parallax></div>
</main>


<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
