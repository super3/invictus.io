<?php include 'header.php'; ?>
	
	<! ========== FULL PROJECT WRAP ============================================================================================= 
	=============================================================================================================================>    
	<div id="headerwrap" class="ags" >
		<div class="container">
		</div><!-- /container -->
	</div><!-- /fullproject -->

	<! ========== Content   	 ================================================================================================ 
	=============================================================================================================================>    

	<div id="white">	
		<div class="container">
			<div class="row">
				<h2>Sending BTC from a Blockchain.info Wallet</h2>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<p>First of all, you need to log into the Blockchain.info wallet from which you wish to send BTC.</p>
				</div>
				<div class="col-lg-8 centered">
					<p>
					<img src='assets/img/blockChainTutorial/1.jpg' class="img-responsive" />
					</p>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-4">
					<p>
						Blockchain.info wallets may contain more than one keypair, so it’s important that the AGS purchase be fully funded from a single address.
						To ensure that, click on the “Send Money” tab, followed by the “Custom” tab.
					</p>
					
					<p>
						Choose a “From” address with a high enough balance to fully fund the transaction.
						Enter the BitShares AGS address <i>1ANGELwQwWxMmbdaSWhWLqBEtPTkWb8uDc</i> in the “To” field.
						Then send the transaction.
					</p>
				</div>
				<div class="col-lg-8 centered">
					<p>
					<img src='assets/img/blockChainTutorial/2.jpg' class="img-responsive" />
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<p>To verify, click on the 1ANGEL address.  Your transaction should appear.</p>
				</div>
				<div class="col-lg-8 centered">
					<p>
					<img src='assets/img/blockChainTutorial/3.jpg' class="img-responsive" />
					</p>
				</div>

			</div>
			
			<div class="row">
				<h2>Claiming BitShares on Launch</h2>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<p>Now the funds have been sent, but to claim your BTS when they are issued, you will need to import the private key for the address you used to purchase your AGS.</p>
					
					<p> To retrieve this key from your Blockchain.info wallet, click on the “Import/Export” button, and then select “Export Unencrypted”.</p>
					
					<p> Copy the text in the box.</p>
				</div>
				<div class="col-lg-8 centered">
					<p>
					<img src='assets/img/blockChainTutorial/4.jpg' class="img-responsive" />
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<p> Open notepad and paste the text.</p>
				</div>
				<div class="col-lg-8 centered">
					<p>
					<img src='assets/img/blockChainTutorial/5.jpg' class="img-responsive" />
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<p> Now save the file with a .json extension.  Make sure that the “Save as type” box reads “All Files (*.*)”.</p>
					<p style="color:red"> Do not create this file until needed and keep it safe when you create it. It contains the unencrypted keys to your wallet!</p>
					<p> When the BitShares is launched, tools for claiming your BitShares will be provided.</p>
				</div>
				<div class="col-lg-8 centered">
					<p>
					<img src='assets/img/blockChainTutorial/6.jpg' class="img-responsive" />
					</p>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>
