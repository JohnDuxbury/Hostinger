<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contacts</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.11" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1429361725" rel="stylesheet" type="text/css" />
	<link href="css/6.css?ts=1429361725" rel="stylesheet" type="text/css" />
	<meta name="google-site-verification" content="" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance43" class="wb_element"><ul class="hmenu"><li><a href="MyTravelLogs/" target="_self" title="Home">Home</a></li><li><a href="About-us/" target="_self" title="About us">About us</a></li></ul></div><div id="wb_element_instance44" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">My Travel Journals</h4>
</div><div id="wb_element_instance45" class="wb_element"><a href="MyTravelLogs/"><img alt="" src="gallery/71b6e9de7537096db4e1ca7ed58464e8_70x60.png"></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance50" class="wb_element"><img alt="" src="gallery/6f51e9f027629b61f8914e75918736e7_320x155.jpg"></div><div id="wb_element_instance51" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Contacts</h1></div><div id="wb_element_instance52" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Empire State Building</p>
<p class="wb-stl-normal">350 5th Ave</p>
<p class="wb-stl-normal">New York</p>
<p class="wb-stl-normal">NY 10118</p>
<p class="wb-stl-normal">USA</p>
<p> </p></div><div id="wb_element_instance53" class="wb_element"><form class="wb_form" method="post"><input type="hidden" name="wb_form_id" value="2d11f46d"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th>Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th>E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-field" type="text" value="" name="wb_input_1"></td></tr><tr class="area-row"><th>Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-field form-area-field" rows="3" cols="20" name="wb_input_2"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn">Submit</button></td></tr></table></form><script type="text/javascript">
			var formValues = <?php echo json_encode($_POST); ?>;
			var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
			wb_form_validateForm("2d11f46d", formValues, formErrors);
			<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
				setTimeout(function() {
					alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
				}, 1);
			<?php } ?>	
			</script></div><div id="wb_element_instance54" class="wb_element"><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places"></script><script type="text/javascript">
				function initialize() {
					if (window.google) {
						var div = document.getElementById("wb_element_instance54");
						var ll = new google.maps.LatLng(40.689247,-74.044502);
						var map = new google.maps.Map(div, {
							zoom: 16,
							center: ll,
							mapTypeId: "roadmap"
						});
						
						var marker = new google.maps.Marker({
							position: ll,
							clickable: false,
							map: map
						});
					}
				}
				google.maps.event.addDomListener(window, "load", initialize);
			</script></div><div id="wb_element_instance55" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Phone:</p>
<p class="wb-stl-normal">+00 000 00000</p>
<p class="wb-stl-normal"><a href="About-us/">info@travelling.com</a></p></div><div id="wb_element_instance56" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(6);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance56");
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
					$("#wb_element_instance56").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 135px;">
	
<div id="wb_element_instance46" class="wb_element"><a href="http://facebook.com"><img alt="" src="gallery/26a45efbabc8744059a626a4d2b5eb8c_32x32.png"></a></div><div id="wb_element_instance47" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a href="http://jditc.16mb.com">jditc.16mb.com</a></p></div><div id="wb_element_instance48" class="wb_element"><a href="https://twitter.com/"><img alt="" src="gallery/be3d13271861dfb781abfdaf301542d8_32x32.png"></a></div><div id="wb_element_instance49" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">Powered by <i class="icon-wb-logo"></i><a href="http://zyro.com/catalog/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "56e5214aa526e83f95b63a516416d8d0", cont: "wb_element_instance49"});

				(function() {
					var script = document.createElement("script");
					script.type = "text/javascript";
					script.async = true;
					script.src = "http://zyro.com/catalog/getjs/";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance57" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(70);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>