<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Slide Down Box Menu with jQuery and CSS3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
        <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen"/>
        
    </head>

    <body>
		<div class="content">
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="about_me.php">
						<img src="images/Menu Images/me.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">About me</span>
							<span class="sdt_descr">Familiarity -> Friendship</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/Menu Images/Inspirations.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Inspiration</span>
							<span class="sdt_descr">Right-Brain Influences</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/Menu Images/photos.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Photos</span>
							<span class="sdt_descr">I like to photograph</span>
						</span>
					</a>
                    <div class="sdt_box">
						<a href="Vector_Art.php">Vector Art</a>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="images/Menu Images/blog.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">My Blog</span>
							<span class="sdt_descr">Everything Houston</span>
						</span>
					</a>
                    <div class="sdt_box">
						<a href="http://www.houstonuncovered.com" target="_blank">houston|uncovered</a>
					</div>
				</li>
                <li>
					<a href="#">
						<img src="images/Menu Images/portfolio.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Portfolio</span>
							<span class="sdt_descr">My Sites</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="#">Zaraza Design</a>
					</div>
				</li>
				<li>
					<a href="Scrapbook.php">
						<img src="images/Menu Images/scrapbook.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Scrapbook</span>
							<span class="sdt_descr">My Art</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="Vector_Art.php">Vector Art</a>
                        <a href="#">Image Collages</a>
                        <a href="#">GIFS</a>
					</div>
				</li>
			</ul>
		</div>
        

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>
    </body>
</html>