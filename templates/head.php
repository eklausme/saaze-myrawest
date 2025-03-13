<!DOCTYPE html>
<?php
	$url = ltrim($url ?? '','/');
	if ($url !== '') $url = '/' . $url;
?>
<html lang="<?= $entry['lang'] ?? 'en' ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABT0lEQVQ4T6XTTyiDcRzH8ffTEhGRHSeHNQdSLv4c5LCSy+RPSw5G8ufqQDnIcXGT5KBERoqDtqx2MjlJ7aKQP1Fys+Uim2E9vo8nK2s89uxbv8NTv9/rqc/v81PmUGcVmAEKZeUySRW8yjzqq4nD3z9KaoBA5icN2FrBuQCRRbjYyg7WuKFlGg6n4OFI35MG7C5w78N7HHzNEDv7iVQ4YCgiQZXBXg/c+H8B4lFIxGCjUbAXfZOlCDzHUGqDYqsBEOgHlw8udyHo0YGOFagflu8B6NoxAFbroNoJ7UsQGoOPhICbEJ6E2yCMXxsAaw0QPYXObXB0g5qCuxAE+qCyFkbPDYB1AR4FKCiBwRNJ2SKhNsHbM1gFGPkv8BWe1k2paUqrmkzOQGYb/gSq2iS4ZfBLWZ6ushep3A69cv8HE3AfzuiB2TLn/5jyec6Sr/cTjGuaXyJg60cAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">

	<link rel="canonical" href="https://eklausmeier.goip.de/myrawest<?=$url?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="https://eklausmeier.goip.de/myrawest/feed.xml">
<?php if (isset($pagination)) { ?>
	<meta name="description" content="Myra West's Blog">
<?php } else if (isset($entry['description'])) { ?>
	<meta name="description" content="<?=$entry['description']?>">
<?php } ?>
	<meta name="author" content="Myra West">
	<meta name="copyright" content="Myra West">
	<meta name="generator" content="Simplified Saaze">

