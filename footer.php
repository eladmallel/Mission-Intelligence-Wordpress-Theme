<div id="footercontainercontainer">
	<div id="footertopshadowcontainer" style="width: 100%; position: relative;">
		<div id="footertopshadow">
		</div>
	</div>
	<div id="footercontainer">
		<div id="footerhandlecontainer" class="footerhandlefloating">
			<img id="footerhandle"
				src="http://www.missionintelligence.org/wp-content/uploads/2011/09/footer_arrow.png" />
		</div>
	
		<div id="fbcontainer">
			<div id="fb-root"></div>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
			<fb:fan href="http://www.facebook.com/missionintelligence"
				profile-id="107543899326489" width="350" height="165"
				show_faces="true" border_color="" stream="false" header="false"></fb:fan>
		</div>
		
		<div id="quotecontainer">
			<table>
				<tr>
					<td>
					<img id="quoteimg" src="http://www.missionintelligence.org/wp-content/uploads/2011/10/quotes.png" />
					</td>
					<td>
						<div id="quotetext">
							It's no exaggeration to say that the kind of innovation going on in Israel is critical to the future of the technology business.
							<div id="dude">
								Bill Gates
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
		function positionFooter() {
		
		   var footerHeight = 0,
		    footerTop = 0,
		    footerTop2 = 0,
		    topVisiblePixel = 0,
		    isFooterVisible = false,
		    $footer = $("#footercontainercontainer"),
		    $footerHandle = $("#footerhandlecontainer");
			$footerHandleImage = $("#footerhandle");
		    footerHeight = $footer.height();
		    footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
		
		    footerHeight += parseInt($footer.css("padding-top"), 10) + parseInt($footer.css("padding-bottom"), 10); 
		    footerHeight += parseInt($footer.css("margin-top"), 10) + parseInt($footer.css("margin-bottom"), 10);
		    footerHeight += parseInt($footer.css("borderTopWidth"), 10) + parseInt($footer.css("borderBottomWidth"), 10);
		
		    footerTop2 = $(document.body).height() - footerHeight;
		    topVisiblePixel = $(window).height() + $(window).scrollTop();
		    isFooterVisible = topVisiblePixel > footerTop2;

			/* DEBUGGING STUFF
		    
		    console.log("Document height: ", $(document.body).height());
		    console.log("Window height: ", $(window).height());
		    console.log("Window scroll: ", $(window).scrollTop());
		    console.log("Footer height: ", footerHeight);
		    console.log("Footer top: ", footerTop);
		    console.log("-----------");
		    console.log("IsFooterVisible: ", isFooterVisible);
		    */
		    
		    if (isFooterVisible) {
		        $footerHandle.removeClass("footerhandlefloating");
		        $footerHandle.addClass("footerhandlepinned");
		        $footerHandleImage.attr("src", "http://www.missionintelligence.org/wp-content/uploads/2011/10/footer_handle_down.png");
		    } else {
		 	   $footerHandle.removeClass("footerhandlepinned");
		 	   $footerHandle.addClass("footerhandlefloating");
		 	   $footerHandleImage.attr("src", "http://www.missionintelligence.org/wp-content/uploads/2011/10/footer_handle_up.png");
		    }
		    
		    if ($(document.body).height() > $(window).height()) {
		    	$footer.css({
		             position: "static"
		        });
		    } else {
		    	$footer.css({
		             position: "absolute",
		             bottom: "0px"
		        }).animate({top: footerTop}, 0);
		    }
		}

		$(window).bind("load", function() { 
		       positionFooter();
		       
		       $(window)
		               .scroll(positionFooter)
		               .resize(positionFooter)
		});
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		 // Scroll page to the bottom
		 $('#footerhandle').click(function(){
		 	$('html, body, .content').animate({scrollTop: $(document).height()}, 1000);
		 	return false;
		 });
	});

	window.onload = function() {
		$("#footercontainercontainer").css("visibility", "visible");
	};
	
	</script>
</body>
</html>
