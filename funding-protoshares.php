<?php include 'header.php'; ?>

<?php echo "<script src=\"assets/js/chart.js\"></script>
    <script src=\"assets/js/pts.prices.js\"></script>"; ?>
	
	<! ========== FULL PROJECT WRAP ============================================================================================= 
	=============================================================================================================================>    
	<div id="proto-big">
		<div class="container">
		</div><!-- /container -->
	</div><!-- /fullproject -->

	<! ========== Content   	 ================================================================================================ 
	=============================================================================================================================>    

	<div id="white">
		<div class="container">			
			<div class="inner-page row">
			
				<div class="row">				
					<div class="col-lg-7">					
						<h3>What are ProtoShares?</h3>					
							<p style="text-align: justify;">								
								ProtoShares is a class of crypto-currency that let you capture a position in one or more cool new DACs before it
								they are ever implemented. The speculative value of a DACs ProtoShares is a subjective mix of three market
								perception pillars. These pillars are the market’s assessment of:
							</p>
							<ul style="list-style-type: circle;">
								<li>• The speculative value of a future DAC share.</li>
								<li>• The probability that the DAC can and will be successfully fielded.</li>
								<li>• Confidence that the ProtoShares map to an equitable share in the implementation.</li>
							</ul> <br>
							<p style="text-align: justify;">
								Developers use ProtoShares to raise capital with which to implement a new idea. They are a new
								decentralized form of crowd sourcing using incorruptible block chain technology and social contracts in lieu of lawyers,
								bankers and regulators to fund and launch a start-up company.
							</p>
							<p style="text-align: justify;">
								Investors use ProtoShares to get in on the ground floor of an idea they recognize as having potential.
								They continue to trade them to motivate vetting of the idea in public debate forums and to increase the
								likelihood that other investors and developers will get involved in making the idea a reality. As the
								public vetting unfolds, everyone can compete using their own wisdom to decide whether they want to
								own more or less shares.
							</p>
							<p>
								<a class="btn btn-yellow btn-lg" href="http://protoshares.com">Visit Official Website</a>
							</p>
								
					</div>				

					<div class="row">
						<div class="col-lg-5">
							<h3>Current Prices</h3>
							<hr>

							<ul id="exchange_list" class="nav nav-pills">
							  <li class="active"><a href="#">Bter</a></li>
							  <li ><a href="#">Cryptsy</a></li>
							  <!-- Unsupported exchanges right now
							  <li class="disabled" ><a href="#">Btc38</a></li>
							  <li class="disabled" ><a href="#">Peatio</a></li>
							  -->
							</ul>
							<table class="table table-bordered">
								<tr>
									<th>Price (PTS/BTC)</th>
									<th>High (PTS/BTC)</th>
									<th>Low (PTS/BTC)</th>
									<th>Volume</th>
								</tr>
								<tr>
									<td id="price-val">0</td>
									<td id="high-val">0</td>
									<td id="low-val">0</td>
									<td id="vol-val">0</td>						
								</tr>
							</table>

							<h3>Price Trend (PTS/BTC)</h3>
							<hr>

							<div>
								<canvas id="ptsChart" width="400" height="200"></canvas>
							</div>
						</div>

					</div>		
				</div>	

			</div> 		
 	

    	</div><!-- /row -->
			
		
	</div><!-- /white -->

<?php include 'footer.php'; ?>