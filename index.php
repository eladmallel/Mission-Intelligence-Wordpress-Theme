<?php get_header(); ?>

<div id="slidecontainercontainer">
	<div id="slidecontainer">
		<div id="mainimgcontainer">
			<img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/img_main2.png" />
		</div>
		
		<div id="introtextcontainer">
			<div id="introtextsecondarycontainer">
				<div id="introtext">
					<h2>Enabling young talents to</h2>
					<h1>Join the Startup Nation</h1>
					
					<p>
					Mission Intelligence enables 18-25 year olds to join Israel's High Tech through a 10 month elite bootcamp focusing on internships, leading innovation and entrepreneurship.
					</p>
					<!-- 
					<p>
						Mission Intelligence enables talented 18-25 year olds to take
						part in Israel's High Tech through networking events, courses
						and internships in a 10 month bootcamp.
					</p>
					
					<p>
						A selected few will be offered to join IDF top technological
						units to gain the most advanced training, experience and
						entrepreneurship character building in the world.
					</p>
					 -->
					<img id="getintouchbtn" src="http://www.missionintelligence.org/wp-content/uploads/2011/09/interested_button.png" />
				</div>
			</div>
		</div>
	</div>
	
	<div id="bottomshadowcontainer">
	</div>
</div>

<div id="widgetscontainer">
	<div id="benefitswidget" class="widget">
		<h1>benefits</h1>
		<ul id="benefitslist">
			<li>Take part in the vibrant Israeli entrepreneur community</li>
			<li>Learn Hebrew intensively with the latest methods</li>
			<li>Gain practical experience in innovation labs &amp; startups</li>
			<li>Get in touch with Israel High Tech leaders</li>
			<li>Meet elite tech units in the IDF</li>
			<!-- 
			<li>Join the vibrant Israeli entrepreneur community</li>
			<li>Learn Hebrew intensively with the latest methods</li>
			<li>Gain practical experience in stimulating startup environments</li>
			<li>Get in touch with Israeli High Tech leaders</li>
			<li>Meet the leading tech units in the IDF</li>
			 -->
		</ul>
		<br/>
		<strong>First participants planned for September 2012.</strong>
	</div>
	
	<div id="partnerswidget" class="widget">
		<h1>partners</h1>
		<table id="partnerstable">
			<tr>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/billGuard.png" /></div></td>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/payPal.png" /></div></td>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/betterPlace.png" /></div></td>
			</tr>
			<tr>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/masa.png" /></div></td>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/soluto.png" /></div></td>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/jewishagency.png" /></div></td>
			</tr><tr>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/gvahim1.png" /></div></td>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/idf.png" /></div></td>
				<td><div><img src="http://www.missionintelligence.org/wp-content/uploads/2011/10/techAviv.png" /></div></td>
			</tr>
		</table>
	</div>
</div>

<div id="dialog">
	<iframe id="wufooframe1" name="wufooframe" height="715" width="500" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://missionintelligence.wufoo.com/embed/z7x3k7/"><a href="https://missionintelligence.wufoo.com/forms/z7x3k7/" title="I am interested in Mission Intelligence">Fill out my Wufoo form!</a></iframe>
</div>

	<script type="text/javascript">
		jQuery(function($){
			   $("#dialog").hide();

			   /*
			   var frm = frames['wufooframe'].document;
			   var otherhead = frm.getElementsByTagName("head")[0];
			   var link = frm.createElement("link");
			   link.setAttribute("rel", "stylesheet");
			   link.setAttribute("type", "text/css");
			   link.setAttribute("href", "<?php echo $urlPrefix;?>/wp-content/themes/testtheme/style.css");
			   otherhead.appendChild(link);
			   */
			});

		 $("#getintouchbtn").click(function(event){
  		      _gaq.push(['_trackPageview', '/signup_open']);
		      $('#dialog').dialog({ modal: true });
		      $( "#dialog" ).dialog( "option", "title", 'Get In Touch' );
		      $( "#dialog" ).dialog( "option", "width", 460 );
		      $( "#dialog" ).dialog( "option", "position", 'center' );
		    });
	</script>

<?php get_footer(); ?>