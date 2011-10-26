<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
<?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

	<title>Mission Intelligence</title>

	<link rel="icon" type="image/ico" href="http://www.missionintelligence.org/wp-content/uploads/2011/10/mi_fav.ico" />

	<?php $urlPrefix=""?>
	<?php if ($_SERVER['SERVER_NAME']=="localhost") $urlPrefix="/wordpress";?>
	<?php if ($_SERVER['SERVER_NAME']=="missionintelligence.dyndns.org") $urlPrefix="/wordpress";?>
	<?php if ($_SERVER['SERVER_NAME']=="10.0.0.11") $urlPrefix="/wordpress";?>
	<?php if ($_SERVER['SERVER_NAME']=="192.168.1.97") $urlPrefix="/wordpress";?>
	
	<link href="<?php echo $urlPrefix;?>/wp-content/themes/mitheme/style.css" rel="stylesheet" type="text/css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"
	type="text/javascript"></script>
	
	<link href="<?php echo $urlPrefix;?>/wp-content/themes/mitheme/css/redmond/jquery-ui-1.8.16.custom.css"
	rel="stylesheet" type="text/css" />
	<script	src="<?php echo $urlPrefix;?>/wp-content/themes/mitheme/js/jquery-ui-1.8.16.custom.min.js"
	type="text/javascript"></script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-18208042-1']);
	  _gaq.push(['_setDomainName', 'missionintelligence.org']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	
</head>

<body>
	<div id="topbarcontainercontainer">
		<div id="topbarcontainer"><a href="<?php echo $urlPrefix;?>/"><img id="milogo" src="http://www.missionintelligence.org/wp-content/uploads/2011/10/mi_logo.png" /></a><div style="display: inline-block;"><div style="display: table-cell; vertical-align: middle;"><h1 id="mititle"><a href="<?php echo $urlPrefix;?>/">Mission Intelligence</a></h1></div></div>
			
			<table id="navtable">
				<tr>
					<td><a href="<?php echo $urlPrefix;?>/the-mission/"><div style="width: 114px;">The Mission</div></a></td>
					<td><a href="<?php echo $urlPrefix;?>/the-program/"><div style="width: 120px;">The Program</div></a></td>
					<td><a href="<?php echo $urlPrefix;?>/take-action/"><div style="width: 112px;">Take Action</div></a></td>
					<td><a href="<?php echo $urlPrefix;?>/team/"><div style="width: 140px;">Team &amp; Partners</div></a></td>
					<td><a href="<?php echo $urlPrefix;?>/faq/"><div class="lastchild" style="width: 68px;">FAQ</div></a></td>
				</tr>
			</table>
		</div>
		<div id="topbarbottomshadow">
		</div>
	</div>