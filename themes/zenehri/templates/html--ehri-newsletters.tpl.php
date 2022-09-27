<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<head>
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
	<?php 
		global $base_url;
		global $mybase;
		$mybase = url(path_to_theme(),array('absolute'=>true));
		$mybase = trim($mybase,'/');
	?>
	<style type="text/css">
	<!--
		body{background-color:#ffffff;font:14px Arial, Helvetica, sans-serif;color:#333;margin:0;padding:0;}
		div.container {width:100;}
		table.wrap{text-align:center;margin-left:auto;margin-right:auto;margin-top:0;border-bottom:10px solid #a8026c;width: 560px;}
		tr,td{text-align:left;}
		td#top1{height:15px;}
		td#top2{height:129px;}
		td#top3{height:193px;}
		td#top4{height:29px;text-align:right;background-color:#9b0058;color:#ffffff;}
		td#social{text-align:center;}
		td#video{text-align:center; font-size:14px;}
		table.main{width:100%;border:0px;padding:0px;}
		td.inset{width:8px;}
		.topborder{font-size:11px;text-align: center;background-color:#4e1965;height: 15px;}
		.topborder a{font-size:11px;text-align: center;color:#ffffff;}
		.topborder a:hover{color:#ffffff;text-decoration:none;} 
		p{font-family:Arial, Helvetica, sans-serif;font-size:14px;}
		a:link,.active,.readmore{color:#9b0058;text-decoration:none;}
		a:hover,.active:hover{color:#9b0058;text-decoration:underline;}
		.td_padding{padding-right:16px;padding-left:16px;}
		table.footer{width:560px;border:0px;}
		td.institution_list{width:280px;}
		.footer td{font-size:11px;vertical-align:top;}
		.footer p{font-size:11px;color:#666666;padding-right:15px;padding-left:15px;}
		.footer th{font-size:20px;font-weight:700;text-align:left;padding-left:16px;border-top:1px solid #666666;border-bottom:1px solid 
		#666666;padding-top:5px;padding-bottom:3px;color:#666666;}
		.footer .border{border-top:1px solid #666666;}
		.footer ul{list-style:none;padding-left:16px;}
		.footer li{color:#666666;background:url(<?php echo $base_url; ?>/sites/all/themes/zenehri/images/newsletter/bullet.gif) no-repeat 0 5px;padding-left:10px;}
		.odd td{padding-top:20px;padding-bottom:20px;}
		h2{font-weight:400;margin:0;padding:0;}
		h2 a,h2 a:hover{color:#666666;text-decoration:none;}
		.even td{padding:15px;}
		.even{background:#e4e4e4;}
		.odd img{float:right;margin-left:10px;}
		.even img{float:left;padding-right:10px;}
		.views-row-odd td{padding-top:20px;padding-bottom:20px;}
		.views-row-even td{padding:8px;}
		.views-row-odd{background:#ffffff;}
		.views-row-even{background:#e4e4e4;}
		.views-row-odd img{float:right;margin-left:10px;}
		.views-row-even img{float:left;padding-right:10px;}
		h3{font-size:100%;}
	-->
	</style>
</head>
<body>
  	<?php print $page; ?>
</body>
</html>
