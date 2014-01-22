<?php include 'header.php'; ?>
<?php #echo "<script src=\"assets/js/chart.js\"></script> "; ?>
   <script src="assets/js/pts.prices.js"></script>

	<! ========== BLACK SECTION =================================================================================================
	=============================================================================================================================>
	<div id="bitshare-big" class="large-logo">
		<div class="container">
			<div class="col-md-12">
				<img src="assets/img/bitshares/bitshares-header.png" alt="logo" />
			</div>
		</div><!-- /container -->
	</div><!-- /fullproject -->

	<! ========== Content   	 ================================================================================================
	=============================================================================================================================>

		<div id="white" class="bitsharesx bitshares">
			<div class="container">
				<div class="inner-page row">
					<div class="row boxes">
						<div class="col-md-12">
							<h2>There are a lot of similarities between Bitcoin and BitShares</h2>
						</div>
					</div>
					<div class="row boxes">
						<div class="col-md-3">
							<img width="150px" height="200px"src="assets/img/transparentblocks.jpg" alt="blocks" />
							<h3><b>Transparent</b><br /> Blockchains</h3>
						</div>
						<div class="col-md-3">
							<img width="200px" height="200px"src="assets/img/trust.jpg" alt="trust" />
							<h3><b>Trust</b><br /> is Unnecessary</h3>
						</div>
						<div class="col-md-3">
							<img width="200px" height="200px"src="assets/img/bitshares/oneway.png" alt="one way" />
							<h3><b>Irreversible</b><br /> Transactions</h3>
						</div>
						<div class="col-md-3" >
							<img width="200px" height="200px" src="assets/img/fee_for_service.png" alt="old picture" />
							<h3><b>Income</b><br /> from Transaction Fees</h3>
						</div>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->

	  <div id="tables" class="lightblue-bg specs-table">
			<div class="container">
	  			<div class="inner-page row">
	          <h2>But... it's what's <i>different</i> that counts!</h2>

	          <div class="col-md-6 your-bank">

	          <h3 class="maintitle bank"><img src="assets/img/bitshares/bitcoin.png" alt="Bitcoin" /></h3>

	          <div class="row boxes">
	            <div class="col-md-5 col-md-offset-1 mono-img">
	              <img src="assets/img/losses.jpg" alt="Unprofitable Business Model" style="border-radius: 15px;"/>
	              <h3>Unprofitable Business Model</h3>
	            </div>
	            <div class="col-md-5 mono-img">
	              <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Great_Seal_of_United_States.jpg/330px-Great_Seal_of_United_States.jpg" style="border-radius: 15px;"alt="Centralized Mining Cartels" />
	              <h3>Centralized Mining <br />Cartels</h3>
	            </div>
	            </div>

	            <ul>
	              <!--<li><h3>Your current Bank</h3></li>-->
	              <li>All revenue spent on security</li>
	              <li>Additional 12% security tax</li>
	              <li>Slow Confirmations</li>
	              <li>Consumes Billions Annually</li>
	              <li class="final"><span>Many alt-coins with the same unprofitable business model</span></li>
	           </ul>
	         </div>

	          <div class="col-md-6 bitshares">

	          <h3 class="maintitle"><img src="assets/img/bitshares/bitshares-eq.png" alt="bitshares" /></h3>

	          <div class="row boxes">
	            <div class="col-md-5 col-md-offset-1 mono-img">
	              <img src="assets/img/bitshares/stocks.png" style="border-radius: 15px" alt="Profitable Companies" />
	              <h3>Profitable <br />Companies</h3>
	            </div>
	            <div class="col-md-5 mono-img">
	              <img src="assets/img/nobarriers.jpg" style="border-radius: 15px;" alt="Decentralized Efficiently" />
	              <h3>Free Market <br/>Competition</h3>
	            </div>
	            </div>

	            <ul>
	              <!--<li><img class="bitsharesx-logo" src="assets/img/bitsharesx.png" alt="BitsharesX" /></li><-->
	              <li>All revenues paid as dividends</li>
	              <li>No security tax</li>
	              <li>Fast Confirmation</li>
	              <li>Efficient Operation</li>
	              <li class="final"><span>Many alt-companies with creative profit models.</span></li>
	            </ul>
	          </div>
	        </div>
	    </div>
	  </div>

  <div class="container">
     <div class="row">
         <div class="col-lg-12">
         <center>
            <h1> Learn more at the <a href="devcon.php">BitShares Developers Conference</a></h1> 
         </center>
         <hr/>
         <br/>
         </div>
     </div>
  </div>

  <div class="container">
			<div class="col-lg-7">
         <iframe width="600px" scrolling="no" height="205px" frameBorder="0"  src="http://ags.lodo.net/counter.php"></iframe>
         <p/>
         <center>
         <a class="btn btn-primary btn-lg" href="bitshares-ags.php">Support the BitShares Ecosystem</a>
         </center>
      </div>
			<div class="col-lg-5">
         <img style="margin-top:-20px; margin-left:-30px" src='assets/img/ptslogo.png' width='550'> 
							  <!-- Unsupported exchanges right now
							<ul id="exchange_list" class="nav nav-pills">
							  <li class="active"><a href="#">Bter</a></li>
							  <li ><a href="#">Cryptsy</a></li>
							  <li class="disabled" ><a href="#">Btc38</a></li>
							  <li class="disabled" ><a href="#">Peatio</a></li>
							</ul>
							  -->
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
					<!--		<small>* USD is calculated from MtGox BTC price and Exchange PTS price.</small> -->
          <br/>
         <center>
         <a class="btn btn-primary btn-lg" href="bitshares-pts.php">Invest Now with BitShares PTS</a>
         </center>
      </div>
    </div>
	</div>
</div><!-- /white -->

<?php include 'footer.php'; ?>
