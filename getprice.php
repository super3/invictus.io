<?php

if($_REQUEST['exchange'] == 'Bter')
{
	$api_val = file_get_contents('https://bter.com/api/1/ticker/pts_btc');	
	echo $api_val;
}
elseif ($_REQUEST['exchange'] == 'Cryptsy')
{
	$api_val = file_get_contents('http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=119');	
	echo $api_val;
}
elseif ($_REQUEST['exchange'] == 'Btc38')
{

}
elseif ($_REQUEST['exchange'] == 'Peatio')
{

}
elseif ($_REQUEST['exchange'] == 'MtGox')
{
	$api_val = file_get_contents('http://data.mtgox.com/api/2/BTCUSD/money/ticker');	
	echo $api_val;	
}

?>