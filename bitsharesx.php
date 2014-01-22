<?php include 'header.php'; ?>
<?php #echo "<script src=\"assets/js/chart.js\"></script> "; ?>
   <script src="assets/js/pts.prices.js"></script>

	<! ========== BLACK SECTION =================================================================================================
	=============================================================================================================================>
      <div id="headerwrap" class="bitsharesx">
        <div class="container">
        <div class="row">
        <div class="col-md-3 col-md-offset-1">
      <!--
					<h1 class="slideUp">BitShares X</h1>
					<h2 class="slideUp">Earn 5% or more on <i>Anything</i></h2>
            <div class="buttons">
           		<a class="btn btn-primary btn-lg" href="bitsharesx.php">Learn More</a>
            </div>
        -->
        </div>
          <div class="col-lg-8 centered" style="margin-top:-50px">
            <h1 class="slideDown">BitShares X</h1>
            <h3 class="slideDown" style="margin-top:-10px; color:#ffffff">Earn 5% or more on <i>Anything.</i></h3>
            <!--
            <div class="buttons">
              <a class="btn smoothScroll" href="#tables">Why BitShares X</a>
            </div>
            -->
          </div>
        </div>

        </div><!-- /container -->
      </div> <!-- /headerwrap -->

	<! ========== Content   	 ================================================================================================
	=============================================================================================================================>

	<div id="white" class="bitsharesx">
		<div class="container">
			<div class="inner-page row">
				<div class="row boxes">
					<div class="col-md-4">
            <h2>There are a lot of similarities between your current bank and</h2>
            <img class="bitsharesx-logo" src="assets/img/bitsharesx.png" alt="BitsharesX" />
          </div>
          <div class="col-mdg-8">
            <ul>
              <li><h3>Earns revenue</h3><span>from transaction fees</span></li>
              <li><h3>Lends dollars</h3><span>into existence on <br/>collateral</span></li>
              <li class="clear-mobile"><h3>Repay loan</h3><span>to take dollars<br/>out of existence</span></li>
              <li><h3>Calls loan</h3><span>if collateral loses value</span></li>
            </ul>
					</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /white -->

  <div id="tables" class="lightblue-bg specs-table">
		<div class="container">
  			<div class="inner-page row">
          <h2>But... it's what's <i>different</i> that counts!</h2>

          <div class="col-md-6 your-bank">

          <h3 class="maintitle bank">Your current bank</h3>

          <div class="row">
            <div class="col-md-5 col-md-offset-1 mono-img">
              <img src="assets/img/monopoly_banker.png" alt="Monopoly" />
              <h3>Insiders</h3>
              <p>run away with bonuses</p>
            </div>
            <div class="col-md-5 mono-img">
              <img src="assets/img/bankrupt2.png" alt="Monopoly" />
              <h3>Bankrupt,</h3>
              <p>in need of bailout</p>
            </div>
            </div>

            <ul>
              <!--<li><h3>Your current Bank</h3></li>-->
              <li>Low Yield Savings</li>
              <li>Dollar Deposits Only</li>
              <li>Slow Transfers</li>
              <li>No Privacy</li>
              <li>Frozen Accounts</li>
              <li>It's a Monopoly!</li>
              <li class="final"><span>The Bank Wins!</span></li>
           </ul>
         </div>

          <div class="col-md-6 bitshares">

          <h3 class="maintitle"><img class="bitsharesx-logo" src="assets/img/bitsharesx.png" alt="BitsharesX" /></h3>

          <div class="row">
            <div class="col-md-5 col-md-offset-1 mono-img">
              <img src="assets/img/dividend.png" alt="Dividends" />
              <h3>You</h3>
              <p>receive dividends!</p>
            </div>
            <div class="col-md-5 mono-img">
              <img src="assets/img/money_on_demand.png" alt="Payment On Demand" />
              <h3>200% Reserve,</h3>
              <p>withdraw on demand</p>
            </div>
            </div>

            <ul>
              <!--<li><img class="bitsharesx-logo" src="assets/img/bitsharesx.png" alt="BitsharesX" /></li><-->
              <li>High Yield Savings</li>
              <li>Save in Gold, Silver, Gas, <i>Anything</i></li>
              <li>Instant Transfers</li>
              <li>Better than a Swiss Bank</li>
              <li>Never Frozen</li>
              <li>Free Market Decentralization!</li>
              <li class="final"><span>You Win!</span></li>
            </ul>
          </div>
        </div>
    </div>
  </div>

  <div class="container">
			<div class="col-lg-7">
         <iframe width="600px" scrolling="no" height="205px" frameBorder="0"  src="http://ags.lodo.net/index2.php"></iframe>
         <p/>
         <center>
         <a class="btn btn-primary btn-lg" href="bitshares-ags.php">Support BitShares X</a>
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
</div>

<?php include 'footer.php'; ?>
