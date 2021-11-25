
function showList(){
	document.getElementById("cardview").style.display = "none";
	document.getElementById("listview").style.display = "";

}


function showGrid(){
	document.getElementById("listview").style.display = "none";
	document.getElementById("cardview").style.display = "";
}



function filter(){
	let date = $('#filter_date');
	let price = $("#filter_price_range");
	let rating = $("#filter_rating");
}


function sliderChange(value){
	document.getElementById("slider_value").innerHTML =value;
}