<?php require SAAZE_PATH . "/templates/head.php"; ?>
	<title><?= $title ?? 'Saaze' ?></title>

<script src="https://analytics.ahrefs.com/analytics.js" data-key="yTUhMMEASRjeaM8armGiZQ" async></script>

<style>
/* CSS for Myra West's blog
   12-Nov-2024: Initial revision based on Elmar Klausmeier's blog
*/

@import url('https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Mea+Culpa&display=swap');

:root { --bgSurrounding:mediumpurple; --bgAcolor:white; color:black; --h1Color:RebeccaPurple; --thColor:LightBlue; --nthChild:#f2f2f2; --klmwidth:55rem }
.dark-mode { background-color:#22160B; color:white; --bgAcolor:black; --h1Color:LightBlue; --thColor:DarkBlue; --nthChild:#935116;
	--pagefind-ui-primary: #eeeeee; --pagefind-ui-text: #eeeeee; --pagefind-ui-background: #152028; --pagefind-ui-border: #152028; --pagefind-ui-tag: #152028;
}
body { font-family:"Libre Baskerville",Georgia,"Times New Roman",ui-serif,Cambria,Times,serif }
main, footer { background-color:var(--bgSurrounding); border-radius:8px }
h2::first-letter { font-family:"Mea Culpa"; color:DarkMagenta }
h1, h2, h3, h4 { font-family:Charm, cursive; font-weight:700; font-style:normal; color:var(--h1Color) }
article, aside { background-color: var(--bgAcolor); margin:auto; padding-left:0.7rem; padding-right:0.7rem }

a { color:inherit }
a:hover { background-color:sandybrown }
strong { font-weight:900 }
.symbols { font-family:'Noto Sans Symbols 2'; font-size:36px }

.parallax {
	background-image: url("<?=$rbase?>/img/CherryBlossoms.webp");
	position:relative;
	min-height: 500px;
	background-attachment:fixed;
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	font-family:"Charm"; color:white; text-align:center; padding-top:12%
}

img[alt=Photo] { width:var(--klmwidth) }

table { margin-left:auto; margin-right:auto }
img { border-radius:8px }
blockquote { font-style:italic; padding-left:0.4rem; border-left:2px solid #ccc }
td { border: 1px solid Black; border-collapse:collapse; padding:0.3rem 0.5rem 0.3rem 0.5rem }
th { border: 1px solid Black; background-color:var(--thColor); padding:0.3rem 0.5rem 0.3rem 0.5rem; position:sticky; top:0 }
tr:nth-child(even) { background-color:var(--nthChild) }


@media screen and (max-width:40rem) {
	.parallax { font-size:64px; min-height:300px }
}
@media screen and (min-width:40rem) and (max-width:56rem) {
	.parallax { font-size:124px }
	h1 { font-size:2.2em }
	h2 { font-size:1.7em }
	h3 { font-size:1.4em }
	h4 { font-size:1.2em }
	p { line-height:1.5; font-size:1.0rem }
	ul, ol { line-height:1.4; font-size:1.0rem }
	li { margin-bottom:0.4rem }
	pre { color:#e2e8f0; background-color:#2d3748; border-radius:0.4rem; overflow-x:auto }
	pre code { color:#e2e8f0; line-height:1.3; font-size:1em }
}

@media screen and (min-width:56rem) {
	article, aside { max-width:56rem; padding-left:2rem; padding-right:2rem }
	.parallax { font-size:174px }
	h1 { font-size:3em }
	h2 { font-size:2.7em }
	h3 { font-size:2.2em }
	h4 { font-size:2em }
	p { line-height:1.7; font-size:1.3rem }
	blockquote { line-height:1.5; font-size:1.3rem }
	ul, ol { line-height:1.5; font-size:1.3rem }
	li { margin-bottom:0.6rem }
	pre { color:#e2e8f0; background-color:#2d3748; border-radius:0.4rem; overflow-x:auto; padding:1.4rem }
	pre code { color:#e2e8f0; line-height:1.8; font-size:1.1rem; font-weight:400 }
}

.dimmedColor { color:Gray }
footer { font-family:sans-serif; color:Bisque; text-align:center }

header { display:flex; border-radius:8px; background:lavender; font-size:1.6rem; padding:12px }
nav { flex-grow:10 }
nav a { text-decoration:none; padding:12px }
</style>

<?php if (!isset($pagination)) {
	if (isset($entry['gallery_css'])) echo $entry['gallery_css'];
	if (isset($entry['markmap_css'])) echo $entry['markmap_css'];
} ?>

<link href="<?=$rbase?>/pagefind/pagefind-ui.css" rel="stylesheet">
<script src="<?=$rbase?>/pagefind/pagefind-ui.js"></script>
<script>
	window.addEventListener('DOMContentLoaded', (event) => {
		new PagefindUI({ element: "#search", showSubResults: true });
	});
</script>


</head>

<body>
<?php $rbase ??= ''; ?>

<svg style="display:none">
	<symbol id="moonIcon">
		<g><path d="M49.06,1.27c2.17-0.45,4.34-0.77,6.48-0.98c2.2-0.21,4.38-0.31,6.53-0.29c1.21,0.01,2.18,1,2.17,2.21 c-0.01,0.93-0.6,1.72-1.42,2.03c-9.15,3.6-16.47,10.31-20.96,18.62c-4.42,8.17-6.1,17.88-4.09,27.68l0.01,0.07 c2.29,11.06,8.83,20.15,17.58,25.91c8.74,5.76,19.67,8.18,30.73,5.92l0.07-0.01c7.96-1.65,14.89-5.49,20.3-10.78 c5.6-5.47,9.56-12.48,11.33-20.16c0.27-1.18,1.45-1.91,2.62-1.64c0.89,0.21,1.53,0.93,1.67,1.78c2.64,16.2-1.35,32.07-10.06,44.71 c-8.67,12.58-22.03,21.97-38.18,25.29c-16.62,3.42-33.05-0.22-46.18-8.86C14.52,104.1,4.69,90.45,1.27,73.83 C-2.07,57.6,1.32,41.55,9.53,28.58C17.78,15.57,30.88,5.64,46.91,1.75c0.31-0.08,0.67-0.16,1.06-0.25l0.01,0l0,0L49.06,1.27 L49.06,1.27z"/></g>
	</symbol>
	<symbol id="brightSunIcon" viewBox="0 0 233 233">
		<g><path d="M58.57,25.81c-2.13-3.67-0.87-8.38,2.8-10.51c3.67-2.13,8.38-0.88,10.51,2.8l9.88,17.1c2.13,3.67,0.87,8.38-2.8,10.51 c-3.67,2.13-8.38,0.88-10.51-2.8L58.57,25.81L58.57,25.81z M120,51.17c19.01,0,36.21,7.7,48.67,20.16 C181.12,83.79,188.83,101,188.83,120c0,19.01-7.7,36.21-20.16,48.67c-12.46,12.46-29.66,20.16-48.67,20.16 c-19.01,0-36.21-7.7-48.67-20.16C58.88,156.21,51.17,139.01,51.17,120c0-19.01,7.7-36.21,20.16-48.67 C83.79,58.88,101,51.17,120,51.17L120,51.17z M158.27,81.73c-9.79-9.79-23.32-15.85-38.27-15.85c-14.95,0-28.48,6.06-38.27,15.85 c-9.79,9.79-15.85,23.32-15.85,38.27c0,14.95,6.06,28.48,15.85,38.27c9.79,9.79,23.32,15.85,38.27,15.85 c14.95,0,28.48-6.06,38.27-15.85c9.79-9.79,15.85-23.32,15.85-38.27C174.12,105.05,168.06,91.52,158.27,81.73L158.27,81.73z M113.88,7.71c0-4.26,3.45-7.71,7.71-7.71c4.26,0,7.71,3.45,7.71,7.71v19.75c0,4.26-3.45,7.71-7.71,7.71 c-4.26,0-7.71-3.45-7.71-7.71V7.71L113.88,7.71z M170.87,19.72c2.11-3.67,6.8-4.94,10.48-2.83c3.67,2.11,4.94,6.8,2.83,10.48 l-9.88,17.1c-2.11,3.67-6.8,4.94-10.48,2.83c-3.67-2.11-4.94-6.8-2.83-10.48L170.87,19.72L170.87,19.72z M214.19,58.57 c3.67-2.13,8.38-0.87,10.51,2.8c2.13,3.67,0.88,8.38-2.8,10.51l-17.1,9.88c-3.67,2.13-8.38,0.87-10.51-2.8 c-2.13-3.67-0.88-8.38,2.8-10.51L214.19,58.57L214.19,58.57z M232.29,113.88c4.26,0,7.71,3.45,7.71,7.71 c0,4.26-3.45,7.71-7.71,7.71h-19.75c-4.26,0-7.71-3.45-7.71-7.71c0-4.26,3.45-7.71,7.71-7.71H232.29L232.29,113.88z M220.28,170.87 c3.67,2.11,4.94,6.8,2.83,10.48c-2.11,3.67-6.8,4.94-10.48,2.83l-17.1-9.88c-3.67-2.11-4.94-6.8-2.83-10.48 c2.11-3.67,6.8-4.94,10.48-2.83L220.28,170.87L220.28,170.87z M181.43,214.19c2.13,3.67,0.87,8.38-2.8,10.51 c-3.67,2.13-8.38,0.88-10.51-2.8l-9.88-17.1c-2.13-3.67-0.87-8.38,2.8-10.51c3.67-2.13,8.38-0.88,10.51,2.8L181.43,214.19 L181.43,214.19z M126.12,232.29c0,4.26-3.45,7.71-7.71,7.71c-4.26,0-7.71-3.45-7.71-7.71v-19.75c0-4.26,3.45-7.71,7.71-7.71 c4.26,0,7.71,3.45,7.71,7.71V232.29L126.12,232.29z M69.13,220.28c-2.11,3.67-6.8,4.94-10.48,2.83c-3.67-2.11-4.94-6.8-2.83-10.48 l9.88-17.1c2.11-3.67,6.8-4.94,10.48-2.83c3.67,2.11,4.94,6.8,2.83,10.48L69.13,220.28L69.13,220.28z M25.81,181.43 c-3.67,2.13-8.38,0.87-10.51-2.8c-2.13-3.67-0.88-8.38,2.8-10.51l17.1-9.88c3.67-2.13,8.38-0.87,10.51,2.8 c2.13,3.67,0.88,8.38-2.8,10.51L25.81,181.43L25.81,181.43z M7.71,126.12c-4.26,0-7.71-3.45-7.71-7.71c0-4.26,3.45-7.71,7.71-7.71 h19.75c4.26,0,7.71,3.45,7.71,7.71c0,4.26-3.45,7.71-7.71,7.71H7.71L7.71,126.12z M19.72,69.13c-3.67-2.11-4.94-6.8-2.83-10.48 c2.11-3.67,6.8-4.94,10.48-2.83l17.1,9.88c3.67,2.11,4.94,6.8,2.83,10.48c-2.11,3.67-6.8,4.94-10.48,2.83L19.72,69.13L19.72,69.13z"/></g>
	</symbol>
	<symbol id="rssIcon" viewBox="0 -960 960 960">
		<path d="M200-120q-33 0-56.5-23.5T120-200q0-33 23.5-56.5T200-280q33 0 56.5 23.5T280-200q0 33-23.5 56.5T200-120Zm480 0q0-117-44-218.5T516-516q-76-76-177.5-120T120-680v-120q142 0 265 53t216 146q93 93 146 216t53 265H680Zm-240 0q0-67-25-124.5T346-346q-44-44-101.5-69T120-440v-120q92 0 171.5 34.5T431-431q60 60 94.5 139.5T560-120H440Z"/>
	</symbol>
</svg>

	<header> 
		<nav><a href="<?=$rbase?>/">Blog</a></nav>
		<nav><a href="<?=$rbase?>/about">About</a></nav>
		<nav><a onclick="return darkLightToggle()" title="Switch between light and dark mode"><svg id="darkLightIcon" height="32" width="32" x="0px" y="0px" viewBox="0 0 122.8 122.8" style="enable-background:new 0 0 240 240"><use href="#moonIcon"></use></svg></a></nav>
		<nav><a href="<?= $rbase ?>/feed.xml" title="RSS Feed"><svg height=32 width=32 style="background-color:orange; fill:white"><use href="#rssIcon"></use></svg></a></nav>
	</header>

	<main>
<div class=parallax>_Myra_West_</div>

<aside><div id="search"></div></aside>

