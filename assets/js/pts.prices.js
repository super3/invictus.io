$( document ).ready(function() {

	// Call the function to update current prices
	updatePrices();

	// Set a timer to update the prices every 10 seconds
	/*
	setInterval(function(){
		updatePrices();
		},10000);
	*/

	
	// Set the click event for the exchanges
	$("ul#exchange_list li a").click(function(e) {

	    e.preventDefault();
	    
	    // Change the active class based on which button was clicked
	    $( "ul#exchange_list li" ).each(function( index ) {

	    	// check if the li object is the same one as the anchor's parent that was clicked
		 	if($(this).get(0) == $(e.target).parent().get(0)){
		 		$(this).addClass("active");
		  	}
		  	else{
		  		$(this).removeClass("active");
		  	}
		});

	    // trigger the prices to update
	    updatePrices();
	    return false;  
	});

	// Set up the PTS chart	
	getChartData();
});

function getChartData(){
	
	// Get the latest Cryptsy PTS data
	$.getJSON( "getprice.php?exchange=Cryptsy", function( data ) {

		// Arrays for values and labels to pass to the chart
		var values = [];
		var labels = [];

		// Determine how many points we want to show in the chart and the interval to use from the data
		var points = 12;
		var distance = Math.floor(data.return.markets.PTS.recenttrades.length / points);

		// Iterate over the market data and save off the values we want to show
		$.each(data.return.markets.PTS.recenttrades.reverse(), function( index, value ) {
			if(index % distance == 0){
				values.push(value.price);
				labels.push(value.time);
			}
		});

		// Set up the data for the chart
		var data = {
			labels : labels,
			datasets : [
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : values
				}
			]
		}

		// Grab the canvas object in the html and create a chart on it
		var ctx = $("#ptsChart").get(0).getContext("2d");
		new Chart(ctx).Line(data);
	});	

	
}

// Set the price table cells from the getprice.php web site
function updatePrices(){

	console.log("Updating PTS prices");

	var exchange = getCurrentExchange();

	$.getJSON( "getprice.php?exchange=" + exchange, function( data ) {

		if(exchange === "Bter"){
			$("#price-val").empty().append(data.last);	
			$("#high-val").empty().append(data.high);	
			$("#low-val").empty().append(data.low);	
			$("#vol-val").empty().append(data.vol_pts);	
		}
		else if (exchange === "Cryptsy"){
			$("#price-val").empty().append(parseFloat(data.return.markets.PTS.lasttradeprice).toFixed(4));	
			$("#high-val").empty().append(parseFloat(getCryptsyHigh(data)).toFixed(4));	
			$("#low-val").empty().append(parseFloat(getCryptsyLow(data)).toFixed(4));	
			$("#vol-val").empty().append(parseFloat(data.return.markets.PTS.volume).toFixed(4));				
		}
	});
}

// Find the high value from recent trades
function getCryptsyHigh(data){
	var high = 0;

	$.each(data.return.markets.PTS.recenttrades, function( index, value ) {
		if(value.price > high)
			high = value.price;
	});

	return high;
}

// Find the low value from recent trades
function getCryptsyLow(data){
	var low ;

	$.each(data.return.markets.PTS.recenttrades, function( index, value ) {
		if(!low || value.price < low)
			low = value.price;
	});

	return low;
}

// Get the exchange that is marked 'active' in the html
function getCurrentExchange(){
	var ret = $("ul#exchange_list li.active").text();

	console.log("Exchange selected is: " + ret );
	
	if( !ret || ret == "")
		ret = "Bter";

	return ret;
}