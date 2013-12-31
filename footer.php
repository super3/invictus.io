	<! ========== CALL TO ACTION BAR =============================================================================================== 
	=============================================================================================================================>    
	<div id="cta-bar">
		<div class="container">
			<div class="row centered">
				<a href="#"><h4>Are You Ready For The Next Step?</h4></a>
			</div>
		</div><!-- /container -->
	</div><!-- /cta-bar -->
	
	<! ========== FOOTER ======================================================================================================== 
	=============================================================================================================================>    
	
	<div id="f">
		<div class="container">
			<div class="row">
				<!-- ADDRESS -->
				<div class="col-lg-3">
					<h4>Our Studio</h4>
					<p>
						Invictus Innovations Incorporated<br/>
						2020 Kraft Dr., Suite 3030<br/>
						 Blacksburg, VA 24060, USA<br/>
					</p>
				</div><! --/col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Exchanges</h4>
					<p>
						<i class="https://bter.com/trade/pts_btc"></i>Bter - PTS/BTC<br/>
						<i class="https://bter.com/trade/pts_cny"></i>Bter - PTS/CNY<br/>
						<i class="fa fa-angle-right"></i> A full width post<br/>
						<i class="fa fa-angle-right"></i> We talk about something nice<br/>
						<i class="fa fa-angle-right"></i> Yet another single post<br/>
					</p>
				</div><!-- /col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Mining</h4>
					<p>
						<i class="fa fa-angle-right"></i> A post with an image<br/>
						<i class="fa fa-angle-right"></i> Other post with a video<br/>
						<i class="fa fa-angle-right"></i> A full width post<br/>
						<i class="fa fa-angle-right"></i> We talk about something nice<br/>
						<i class="fa fa-angle-right"></i> Yet another single post<br/>
					</p>
				</div><!-- /col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Services</h4>
					<p>
						<i class="fa fa-angle-right"></i> A post with an image<br/>
						<i class="fa fa-angle-right"></i> Other post with a video<br/>
						<i class="fa fa-angle-right"></i> A full width post<br/>
						<i class="fa fa-angle-right"></i> We talk about something nice<br/>
						<i class="fa fa-angle-right"></i> Yet another single post<br/>
					</p>
				</div><!-- /col-lg-3 -->
				
				
			</div><! --/row -->
		</div><!-- /container -->
	</div><!-- /f -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>
	<script>
		$(window).scroll(function() {
			$('.si').each(function(){
			var imagePos = $(this).offset().top;
	
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideUp");
				}
			});
		});
	</script>    
    <script>
	    $('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	</script>  
  </body>
</html>