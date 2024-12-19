<?php
	$title = $entry['title'] . ' - ' . $collection['title'];
	$urlEncoded = urlencode('https://eklausmeier.goip.de/myrawest') . $url;
	$titleEncoded = urlencode($entry['title']);
?>
<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>
<?php /*require SAAZE_PATH . "/templates/read_cattag_json.php"; */ ?>

	<article>
<?php if ( isset($entry['date']) ) { ?>
	<p class=dimmedColor><time datetime="<?=$entry['date']?>"><?= date('jS F Y', strtotime($entry['date'])) ?></time>, <?=$entry['minutes_read']?> min read</p>
<?php } ?>
<h1><?= $entry['title'] ?></h1>
<?php
	if (getenv('NON_NGINX')) printf("<p>Original post is here <a href=\"https://eklausmeier.goip.de%s\">eklausmeier.goip.de%s</a>.</p>\n<br>\n",$url,$url);
	if (isset($entry['youtube'])) {
		// Fatty JavaScript version
		//echo "<iframe width=560 height=315 src=https://www.youtube.com/embed/" . $entry['youtube']
		//. " frameborder=0 allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
		// Skinny version
		echo '<a href="https://www.youtube.com/watch?v=' . $entry['youtube'] . '"><img alt=YouTube src="https://i.ytimg.com/vi/' . $entry['youtube'] .'/hqdefault.jpg"></a>' . "\n" ;
	}
	eval( '?>' . str_replace('?%3E*','?>',str_replace('*%3C?','<?',$entry['content'])) );
?>
	</article>
<div class=parallax></div>
	</main>

	<br><br>
	<aside>
<?php if ($entry['share'] ?? true) { ?>
	<p>Share via
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?=$urlEncoded?>" title="Post on Facebook" target=_blank>Facebook</a>,
	<a href="https://twitter.com/intent/tweet?text=<?=$titleEncoded?>%0A<?=$urlEncoded?>" title="Post on Twitter" target=_blank>Twitter/&Xopf;</a>,
	<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?=$urlEncoded?>" title="Post on LinkedIn" target=_blank>LinkedIn</a>,
	<a href="https://www.xing.com/spi/shares/new?url=<?=$urlEncoded?>" title="Post on Xing" target=_blank>Xing</a>,
	<a href="https://share.flipboard.com/bookmarklet/popout?v=2&amp;title=<?=$titleEncoded?>&amp;url=<?=$urlEncoded?>" title="Post on Flipboard" target=_blank>Flipboard</a>,
	<a href="https://getpocket.com/save?url=<?=$urlEncoded?>" title="Post on Pocket" target=_blank>Pocket</a>,
	<a href="https://reddit.com/submit?&amp;url=<?=$urlEncoded?>&amp;title=<?=$titleEncoded?>" title="Post on Reddit" target=_blank>Reddit</a>,
	<a href="mailto:?subject=<?=$titleEncoded?>&amp;body=<?=$urlEncoded?>" title="Send via e-mail">e-mail</a>,
	<a href="whatsapp://send?text=<?=$titleEncoded?>%0A<?=$urlEncoded?>" title="Post on WhatsApp">WhatsApp</a>
	</p>
<?php } ?>

	<p>
<?php if (isset($entry['categories'])) { ?>
	<br><strong><a href=<?= $rbase ?>/aux/categories>Categories</a>: </strong><?php
		echo implode( ", ",array_map(fn($x):string =>
			"<a href=$rbase/aux/categories/#".urlencode($x).">$x</a>",
			(array)($entry['categories'])) )."\n" ?>
<?php } ?>
<?php if (isset($entry['tags'])) { ?>
	<br><strong><a href=<?= $rbase ?>/aux/tags>Tags</a>: </strong><?php
		// implode(", ", (array)($entry['tags'])) . "\n"
		echo implode( ", ",array_map(fn($x):string =>
			"<a href=$rbase/aux/tags/#".urlencode($x).">$x</a>",
			(array)($entry['tags'])) )."\n" ?>
<?php } ?>
<?php if (isset($entry['author'])) { ?>
	<br><strong>Author: </strong><?= implode(", ", (array)($entry['author'])) . "\n" ?>
<?php } ?>
	</p>
<?php if (substr_count($url,'/') > 2)
	printf("\t<p><a href=\"%s%s\">Index for the year %s.</a></p>\n",$rbase,dirname($url,1),substr($entry['date'],0,4));
?>
<?php if ( isset($entry['categories']) && isset($GLOBALS['cat_and_tag']['categories']) ) {
	echo "\t<p>Blog posts with the same categories.</p>\n";
	foreach ($entry['categories'] as $cat) {
		echo "\t<p><i>{$cat}:</i></p>\n\t<ol>\n";
		foreach ($GLOBALS['cat_and_tag']['categories'][$cat] as $carr)
			if (!str_contains($carr[0],$entry['url']))	// do not show self again
				printf("\t\t<li><a href=\"%s\">%s: %s</a></li>\n",$rbase.$carr[0],substr($carr[1],0,10),$carr[2]);
		echo "\t</ol>\n";
	}
}
?>
	</aside>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
