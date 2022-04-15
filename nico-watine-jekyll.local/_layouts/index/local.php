{% include components/head.php %}

<body {{ page.body-class }} {{ page.body-id }}>

<div itemscope itemtype="http://schema.org/Person" class="height-wrapper">
	<header>
		<div class="content">
			<h1 itemprop="name" class="title">Nico Watine</h1>
			<h2 itemprop="description">A <span itemprop="jobTitle">web designer</span> at <span itemscope itemtype="http://schema.org/Organization" id="studio-n-creations"><span itemprop="name"><a href="http://studioncreations.com" itemprop="url" target="_blank">Studio N Creations</a></span></span>, living in <span class="inline-block"><span itemprop="addressLocality">Houston</span>, <span itemprop="addressRegion">TX</span></span></h2>
		</div>
	</header>

	<footer>
		<div id="portfolio">
			<h3 class="title">Portfolio</h3>
			<a href="http://studioncreations.com" itemprop="url" target="_blank">www.studioncreations.com</a>
		</div>
		<div id="email">
			<h3 class="title">Email</h3>
			<a href="mailto:nico.w@tine.rocks" itemprop="email" target="_top">nico.w@tine.rocks</a>
		</div>
	</footer>
</div>

{% include components/scripts/google-tracking.php %}
</body>