
	<footer>
		<p><br><?php
			printf("Generated %s CET (Europe/Berlin) using <a href=\"%s\">Simplified Saaze</a>%s%s<br><br>\n",
				date('d-M-y H:i'), '/blog/2021/10-31-simplified-saaze',
				getenv('NON_NGINX') ? '' : ', served by <a href="https://nginx.org">NGINX</a>',
				isset($_SERVER['REQUEST_TIME_FLOAT']) ? sprintf(", rendered in %.2f ms",1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) : ''
			);
			?>
		</p>
	</footer>

<script>
const darkLightIcon = document.querySelector("#darkLightIcon");
function darkLightToggle(setLocal=1) {
	if (setLocal) {
		let dts = localStorage.getItem("dark-theme") ?? 0;
		if (dts != 1 && dts != 0) dts = 0;	// in case the user has tampered with localStorage
		localStorage.setItem("dark-theme", 1 - dts);
	}
	document.body.classList.toggle("dark-mode");
	darkLightIcon.innerHTML = document.body.classList.contains("dark-mode") ?
		'<use href="#brightSunIcon"></use>' : '<use href="#moonIcon"></use>';
}
addEventListener('load', (event) => {
	let dst = localStorage.getItem("dark-theme");
	if (dst == 1	// explicit user request
	|| (dst == null && window.matchMedia('(prefers-color-scheme: dark)').matches )) { // as per Browser setting
		darkLightToggle(0);
	} else {
		document.body.classList.remove('dark-mode');
	}
});
</script>

<?php if (!isset($pagination)) { ?>
<?php
	if (isset($entry['gallery_js'])) echo $entry['gallery_js'];
	if (isset($entry['markmap_js'])) echo $entry['markmap_js'];
?>
<?php if (isset($entry['TikTok'])) { ?>
	<script async src="https://www.tiktok.com/embed.js"></script>
<?php } ?>
<?php if (isset($entry['Twitter'])) { ?>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php } ?>
<?php if (isset($entry['Mermaid'])) { ?>
	<script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
	<script>mermaid.initialize({startOnLoad:true});</script>
<?php } ?>
<?php } ?>


</body>
</html>
