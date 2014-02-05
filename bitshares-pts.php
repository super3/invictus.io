<?php include 'header.php'; ?>

<?php #echo "<script src=\"assets/js/chart.js\"></script> "; ?>
   <script src="assets/js/pts.prices.js"></script>

	<! ========== FULL PROJECT WRAP =============================================================================================
	=============================================================================================================================>
	<div id="headerwrap" class="pts" >
		<div class="container">
		</div><!-- /container -->
	</div><!-- /fullproject -->

	<! ========== Content   	 ================================================================================================
	=============================================================================================================================>

	<div id="white">
		<div class="container">
    <center> <img style="margin-left:40px" src='assets/img/ptslogo.png' width='600'> </img> </center>
			<div class="inner-page row">

				<div class="row">
					<div class="col-lg-7">
						<h3>What is BitShares PTS?</h3>
							<p style="text-align: justify;">
              BitShares PTS is a Bitcoin clone that allows you to buy and trade ownership in future BitShares created by
              Invictus Innovations or derived from our software.  A BitShare is a stake in what we like to call a
              Decentralized Autonomous Company (DAC), and Invictus has many innovative blockchains on our road map.
							</p>
              <p>
              BitShares PTS comes with a social contract to allocate at least 10% of the total shares in all future
              BitShare chains to those who hold PTS when the new chain is launched.  In the case of <a href="bitsharesx.php">BitShares X</a>
              Invictus has chosen to allocate 50% to PTS holders in the genesis block.
              </p>
              <p>
              <a class="btn btn-primary btn-lg" href="https://github.com/InvictusInnovations/ProtoShares/releases/download/vp0.4.0/ProtoShares-0.4.0.zip">Download Windows Wallet (.zip)</a>
              <a class="btn btn-primary btn-lg" href="https://github.com/InvictusInnovations/ProtoShares/releases/download/vp0.4.0/ProtoShares-0.2.0.dmg">Download Mac Wallet (.dmg)</a>
              </p>
              <p>
              We have previously referred to BitShares PTS as "Protoshares", but no longer do so.  "ProtoShare" is a registered trademark of Site9, Inc. for its prototyping and mock-up software product, ProtoShare.  There is no relationship between ProtoShare and Invictus Innovations.
              </p>

              <div class="pts-resources">
                    <h3> Mining Pools</h3>

                      <p>Mining PTS on your own is hard. The network consists of many computers running calculations in the client software or special mining software. This keeps the network secure.
                      But you can mine coins with your own processing power or cloud servers. The pool combines the power of all
                      connected nodes and pays you proportionally for your share rate. Most pools have their own optimized miners, so do check out their "get started" pages.</p>

                      <p>This is a list of pools mining PTS:</p>
                      <ul style="list-style-type: circle;">
                        <li><a href="http://ptsweb.beeeeer.org">http://ptsweb.beeeeer.org</a> - 2.5% fee, Pay Per Share</li>
                        <li><a href="http://pts.rpool.net">http://pts.rpool.net</a> -  3% fee, payout per share of last round</li>
                        <li><a href="http://ptspool.com/">http://ptspool.com/</a> -  3% fee,  Pay Per Share </li>
                        <li><a href="http://ypool.net">http://ypool.net</a> -  5% fee, multiple coin pool,  Pay Per Share</li>
                      </ul>

              </div><!-- end PTS Resources -->
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
							<small>* USD is calculated from the Mt.Gox BTC price and the PTS price on the BTER and Cryptsy exchanges.</small>

              <h3> Exchanges</h3>

                      <p>Exchanges are the trading websites where you can buy or sell PTS. Be careful not to place large sums of PTS on exchanges without adequate security measures, such as a good password and 2-factor authentication.</p>
                      <ul style="list-style-type: circle;">
                          <li><a href="https://bter.com/">BTER Exchange</a></li>
                          <li><a href="https://www.cryptsy.com/">Cryptsy Exchange</a></li>
                          <li><a href="http://www.btc38.com/">BTC38 Exchange</a></li>
                          <li><a href="https://peatio.com/">Peatio Exchange</a></li>
                      </ul>

                         <h3> Tools and Forum</h3>
                      <p>To learn more about PTS, explore the following resources:</p>
                      <ul style="list-style-type: circle;">
                          <li><a href="http://btsblock.com/chain/ProtoShares">Blockchain explorer - View transactions by PTS address</a></li>
                          <li><a href="https://coinplorer.com/PTS">PTS Coin information - Current PTS statistics</a></li>
                          <li><a href="https://bitsharestalk.org/index.php?board=1.0">Official PTS forum</a></li>
                          <li><a href="http://www.reddit.com/r/protoshare">Sub-Reddit for PTS</a></li>
                      </ul>
						</div>

					</div>
				</div>

			</div>


    	</div><!-- /row -->


	</div><!-- /white -->

<?php include 'footer.php'; ?>
