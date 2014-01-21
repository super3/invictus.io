<?php include 'header.php'; ?>

<?php #echo "<script src=\"assets/js/chart.js\"></script> "; ?>
   <script src="assets/js/pts.prices.js"></script>
	
	<! ========== FULL PROJECT WRAP ============================================================================================= 
	=============================================================================================================================>    
	<div id="no-proto-big">
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
						<h3>What is BitShares PTS?</h3>					
							<p style="text-align: justify;">								
              BitShares PTS is a Bitcoin clone that allows you to buy and trade ownership in future BitShares created by
              Invictus Innovations or derived from our software.  A BitShare is a stake in what we like to call a
              decentralized autonomous company and Invictus has many innovative blockchains on our roadmap. 
							</p>
              <p>
              BitShares PTS comes with a social contract to allocate at least 10% of the total shares in all future
              BitShare chains to those who hold PTS when the new chain is launched.  In the case of <a href="bitsharesx.php">BitShares X</a>
              Invictus has chosen to allocate 50% to PTS holders in the genesis block.
              </p>
              <p>
              <a class="btn btn-primary btn-lg" href="http://protoshares.net/index.html#download">Download Wallet</a>
              </p>
              <p>
              We have previously referred to BitShares PTS as "ProtoShares", but no longer do so.  "ProtoShare" is a registered trademark of Site9, Inc. for its prototyping and mockup software product, ProtoShare.  There is no relationship between ProtoShare and Invictus Innovations.
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
									<th>Price (USD)*</th>
									<th>Price (BTC/PTS)</th>
									<th>High (BTC/PTS)</th>
									<th>Low (BTC/PTS)</th>
									<th>Volume</th>
								</tr>
								<tr>
									<td id="price-usd">0</td>
									<td id="price-val">0</td>
									<td id="high-val">0</td>
									<td id="low-val">0</td>
									<td id="vol-val">0</td>						
								</tr>
							</table>
							<small>* USD is calculated from MtGox BTC price and Exchange PTS price.</small>
						</div>

					</div>		
				</div>	

			</div> 		
 	

    	</div><!-- /row -->
			
		
	</div><!-- /white -->

<?php include 'footer.php'; ?>
