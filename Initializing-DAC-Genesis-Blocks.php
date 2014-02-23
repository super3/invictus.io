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
<!--			<div class="inner-page row"> -->
            <div class="row">
               <div class="col-lg-3">
               </div>
               <div class="col-lg-8">
               <!--
		                    <img style="margin-left:40px" src='assets/img/agslogo.png' width='516'> 
                        <div id="counter" class="flip-counter"></div>
                        <div class="clear">
                             <div class="smalltext">
                                      Blockchain data powered by <a href="https://bitsharestalk.org/index.php?topic=1853.0">donschoe</a>. 
                                      Exchange rate calculated using <a href='http://www.bitcoinaverage.com'>www.bitcoinaverage.com</a>.
                             </div>
                         </div>
                               <script type="text/javascript">
                               // Initialize a new counter
                               var myCounter = new flipCounter("counter", {value: 2*84105500, inc: 1, pace: 71.952031978681 });
                               </script>
                               -->
                               <iframe width="600px" scrolling="no" height="205px" frameBorder="0"  src="http://ags.lodo.net/counter.php"></iframe>
               </div>
            </div>
				<div class="row">				
					<div class="col-lg-7">					
						<h3>Guide for Initializing genesis blocks</h3>					
						<p style="text-align: justify;">								
              Starting from a clean Computer
              
              With either native or a VM Linux (I use Ubuntu) Install the PTS and BTC clients, then and download the block chains and get 
              them in sync. Once you are synced, check the number of PTS currently in existence and the current block number, so go to the
              debug window in the client and type “getinfo”.

              
					  </p>

							<h3>Social Consensus</h3>
							<p style="text-align: justify;">
							We see a consensus beginning to form around the following principles: 
							(a) Developers should seek a reasonable balance between equal-opportunity lotteries and ways to compensate
							those who sacrifice their savings or labor. (b) The market needs to give developers freedom to raise 
							funds to develop, support and promote their new DACs.  We believe that the following allocation represents
							the minimum fair genesis-block allocation for blockchain-based solutions.
							</p>
							<ul style="list-style-type: circle;">
							<li>At least 10% of the BitShares should be allocated to holders of BitShares PTS.</li>
							<li>At least 10% of the BitShares should be allocated to holders of BitShares AGS.</li>
							<li>The remaining BitShares should be customized to the needs of each BitShares chain.</li>
							</ul>
              <br/>
              This emerging social consensus and resulting network effect will be further reinforced by the Social Consensus Software License
              which will require each derivative software product to initialize its blockchain according to this consensus.  
              <br/>
              <br/>
              <br/>
				  </div>				
					<div class="col-lg-5">
							<h3>Parsing the PTS Block Chain</h3>					
               <p style="text-align: justify;">								
                 To import the balances from PTS you must create a list of all addresses and their corresponding balances. Parse the PTS chain 
                 into a csv file use the tool below to  do the job for you.
                 
                 This:- <a href="https://github.com/vertoe/pts-unspent">GITHUB</a>
                 
                 Does the job pretty well. the creator vertoe also placed it on the net where it updates daily, so you need not parse the chain,
                 just go here :- http://q30.protoshar.es/pts/pts_unspent.json and copy all the addresses and their balances.
                 
                 Next open the file in software like Microfoft Excel. Once open, click File, choose the Save As option and save as type
                 CSV (Comma delimited) (*.csv) option.
               </p>
               <p>
                 
                 <h3>Honouring and allocating AngelShares</h3>
                 <p style="text-align: justify;">
				AngelShares are donations made in PTS and BTC by contributors. If your DAC is sponsored by I3 then the funds are AGS and you must
				allocate 10% of equity to them. AGS does not have BTC style block chain as a result you will need to view the log of all donations
				made to the relevant addresses here:- 
				
				<a href="http://www1.agsexplorer.com/masterbook/btc">BTC</a>
				
				<a href="http://www1.agsexplorer.com/masterbook/pts">PTS</a>
				
				<a href="https://blockchain.info/address/1ANGELwQwWxMmbdaSWhWLqBEtPTkWb8uDc"><pre>1ANGELwQwWxMmbdaSWhWLqBEtPTkWb8uDc</pre></a>
               
                <a href="https://coinplorer.com/PTS/Addresses/PaNGELmZgzRQCKeEKM6ifgTqNkC4ceiAWw"><pre>PaNGELmZgzRQCKeEKM6ifgTqNkC4ceiAWw</pre></a>
				
				This gives you a complete list of all addresses of AGS holders and how much each of them has. 
				
				Save all of the gathered data in a single file named "genesisbalances.txt" with addresses and their balances seperated by “,” and each set in a new line.
				
				If your code base is a fork of PTS or any other code base you need to add the following to your rpcdump.cpp:-

				string convertAddress(const char address[], char newVersionByte){	
				std::vector<unsigned char> v;	
				DecodeBase58Check(address,v);
				v[0]=newVersionByte;
				string result = EncodeBase58Check(v);
				return result;

				And change 

				Value importprivkey(const Array& params, bool fHelp)
				{
					if (fHelp || params.size() < 1 || params.size() > 3)
						throw runtime_error(
							"importprivkey <protosharesprivkey> [label] [rescan=true]\n"
							"Adds a private key (as returned by dumpprivkey) to your wallet.");

					string strSecret = params[0].get_str();
					string strLabel = "";
					
				To 

				Value importprivkey(const Array& params, bool fHelp)
				{
					if (fHelp || params.size() < 1 || params.size() > 2)
						throw runtime_error(
							"importprivkey <NoirSharesPrivkey> [label]\n"
							"Adds a private key (as returned by dumpprivkey) to your wallet.");
					string strSecret = params[0].get_str();
					printf("before %s",strSecret.c_str());
					strSecret = convertAddress(strSecret.c_str(),149);
					printf("after %s",strSecret.c_str());
					string strLabel = "";

				Pay close attention to the number in bold, you must change it to your PUBKEY_ADDRESS + 128.	 
					 
				<h3>Initializing the Balances in a Block</h3>			 
				 
              <p style="text-align: justify;">
				  
				  In  your main.cpp add the following :-

					std::map<std::string,int64> getGenesisBalances(){
						std::map<std::string,int64> genesisBalances;
						ifstream myfile ("genesisbalances.txt");
						char * pEnd;
						std::string line;
						if (myfile.is_open()){
							while ( myfile.good() ){
								getline (myfile,line);
								std::vector<std::string> strs;
								boost::split(strs, line, boost::is_any_of(","));
								genesisBalances[strs[0]]=strtoll(strs[1].c_str(),&pEnd,10);
							}
							myfile.close();
						}	
						return genesisBalances;
					}

					 and then in CBlockTemplate* CreateNewBlock add :-

					 if(pindexBest->nHeight+1==1){
						//Block 1 - add balances for beta testers, protoshares
							std::map<std::string,int64> genesisBalances= getGenesisBalances();
						std::map<std::string,int64>::iterator balit;
						int i=1;
						int64 total=0;
						txNew.vout.resize(genesisBalances.size()+1);
						for(balit=genesisBalances.begin(); balit!=genesisBalances.end(); ++balit){
							//printf("gb:%s,%llu",balit->first.c_str(),balit->second);
							CBitcoinAddress address(balit->first);
							txNew.vout[i].scriptPubKey.SetDestination( address.Get() );
							txNew.vout[i].nValue = balit->second;
							total=total+balit->second;
							i++;
						}
						printf("Total ...%llu\n",total);  	}
				  				  
               
					 	 	  </p>
					 	 	  
					 	 	  
				<h3>Scaling Balances for your Total Equity</h3>			 
				 
              <p style="text-align: justify;">
				  
				 DACs sponsored by I3 must allocate a further 10% to AGS holders. There will only ever be 2 million PTS. Even if your DAC has stake,
				 it must maintain the 10% allocations. So, for sponsored DACs it means you must allocate 10% + 10% of your equity when you initialize
				 the chain. So, once you have the total number of PTS and have calculated the required equity cap, you then allocate an equal number to AGS.
 
					Example
					 
					Total PTS---> 1.5 million
					Total equity = PTS x 10 = 15 million
					AGS = 10% Total equity = 1.5 million
					AGS + PTS = 3 million
					 
					Example2
					 
					Total PTS---> 1.5 million
					Total equity = PTS / 10 = 150k
					AGS = 10% Total equity = 15k
					AGS + PTS = 30k
					 
					Your remaining equity is free to distribute as you see fit. Once you have done all the above, you are ready to import the balances into your
					genesis. If you wish to scale up the numbers or scale down, you need only multiply or divide the balances by whatever factor so long as you 
					maintain the percentages.

				  </p>
				  
               
				  </div>
    	</div><!-- /row -->
			
		
	</div><!-- /white -->

<?php include 'footer.php'; ?>
