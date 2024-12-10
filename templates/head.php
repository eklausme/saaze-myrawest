<!DOCTYPE html>
<?php $metaDescription="Myra West's Blog"; ?>
<html lang="<?= $entry['lang'] ?? 'en' ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAF7/cAumQHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABEREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon">

	<link rel="canonical" href="https://eklausmeier.goip.de/myrawest<?=$url??''?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="https://eklausmeier.goip.de/myrawest/feed.xml">
<?php if (isset($pagination)) { ?>
	<meta name="description" content="<?=$metaDescription?>">
<?php } else if (isset($entry['description'])) { ?>
	<meta name="description" content="<?=$entry['description']?>">
<?php } ?>
	<meta name="author" content="Myra West">
	<meta name="copyright" content="Myra West">
	<meta name="generator" content="Simplified Saaze">
