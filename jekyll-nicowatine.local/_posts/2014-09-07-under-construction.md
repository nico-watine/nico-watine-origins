---
layout: posts/default
title: Under Construction
excerpt: moving along with the site
description: Coding the site
slug: under-construction
long-date: 7 Sep 2014
short-date: 7 Sep
category: coding
category-link: blog/coding
tags: coding
image-banner: under-construction/williams-tower-view(banner).jpg
image-parallax: under-construction/williams-tower-view(parallax).jpg
image-full: under-construction/williams-tower-view.jpg
image-large: under-construction/williams-tower-view(large).jpg
image-medium: under-construction/williams-tower-view(medium).jpg
image-small: under-construction/williams-tower-view(s).jpg
image-title: view from the Williams Tower
---
<p>Construction of the web log [blog] is moving along. In my <a href="{{ site.baseurl }}blog/coding/1st-post-ever.html">last post</a> I talked about how I was using Jekyll to compile the site into a static blog. But as for coding the site itself, I'm using Zurb's <a href="http://foundation.zurb.com" target="_blank">Foundation 5</a> framework. If you've never heard of Foundation, go check it out - it's amazing and you won't believe how fast it will speed up your workflow. And if you're already familiar with it, well, 'nuff said.</p>

<p>A few of Foundation 5's features include :
	<ul class="circle">
		<li>Interchangeable, media-query based content (that's fancy jargon for 'swap out <i>anything</i> based on screen size')</li>
		<li><i>waaaaaay</i> advanced mobile stuff, like killer off-canvas navigation and uber-cool sub-menu effects (shrink your browser and notice what happens when you click the 'articles' tab)</li>
		<li>buttons, forms...all those boring but necessary items</li>
	</ul>
And the coolest part is that it's all compiled with SASS, so you can customize any visual styles you want. Not using SASS yet? No worries, you can grab a standard CSS version, and still have a bunch of power in customizing all this awesomeness.</p>
<p>Now you perceptive folk out there may have noticed the scrolling parallax banners at the top of each post. For that I'm using a cool plugin called <a href="https://github.com/Prinzhorn/skrollr" target="_blank">skrollr</a> (which can do way more stuff than just parallax). Yes, I know, this visual effect is quickly becoming exhausted on the web, but hey, it's still pretty cool. And clicking on the banner will make a light box pop up, courtesy of <a href="http://fancyapps.com/fancybox/" target="_blank">Fancybox</a>.</p>
<p>That was a lot of info. If you've already forgotten what I said at the beginning of the post, this is basically it:</p>
<h4 style="text-align: center;">jekyll + Foundation 5 + some cool JS plugins = a sweet web log [blog]</h4>