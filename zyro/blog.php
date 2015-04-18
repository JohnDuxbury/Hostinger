<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.11" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1429361726" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1429361726" rel="stylesheet" type="text/css" />
	<meta name="google-site-verification" content="" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 200px;">
	
<div id="wb_element_instance67" class="wb_element"><ul class="hmenu"><li><a href="MyTravelLogs-2/" target="_self" title="Home">Home</a></li><li><a href="About-us-2/" target="_self" title="About us">About us</a></li></ul></div><div id="wb_element_instance68" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">My Travel Journals</h4>
</div><div id="wb_element_instance69" class="wb_element"><a href="MyTravelLogs-2/"><img alt="" src="gallery/71b6e9de7537096db4e1ca7ed58464e8_70x60.png"></a></div><div id="wb_element_instance70" class="wb_element"><a href="http://facebook.com"><img alt="" src="gallery/26a45efbabc8744059a626a4d2b5eb8c_32x32.png"></a></div><div id="wb_element_instance71" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a href="http://jditc.16mb.com">jditc.16mb.com</a></p></div><div id="wb_element_instance72" class="wb_element"><a href="https://twitter.com/"><img alt="" src="gallery/be3d13271861dfb781abfdaf301542d8_32x32.png"></a></div><div id="wb_element_instance73" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">Powered by <i class="icon-wb-logo"></i><a href="http://zyro.com/catalog/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "56e5214aa526e83f95b63a516416d8d0", cont: "wb_element_instance73"});

				(function() {
					var script = document.createElement("script");
					script.type = "text/javascript";
					script.async = true;
					script.src = "http://zyro.com/catalog/getjs/";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance74" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance74");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance74").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance75" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>