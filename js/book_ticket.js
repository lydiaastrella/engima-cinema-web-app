function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function clickToUnclick(seat_elmt) {
	seat_elmt.style.border = '1.5px solid rgb(0, 196, 234)';
	seat_elmt.style.color = "rgb(0, 196, 234)";
	seat_elmt.style.backgroundColor = "rgb(255, 255, 255)";
	document.getElementById("seat-not-clicked").style.color = "black";
	document.getElementById("judul").style.color = "white";
	document.getElementById("jadwal").style.color = "white";
	document.getElementById("no-seat").style.display = "none";
	document.getElementById("buy-ticket-button").style.display = "none";
}

function unclickToClick(seat_elmt) {
	seat_elmt.style.border = "1.5px solid rgb(255, 255, 255)";
	seat_elmt.style.color = "rgb(255, 255, 255)";
	seat_elmt.style.backgroundColor = "rgb(0, 196, 234)";
	document.getElementById("seat-not-clicked").style.color = "white";
	document.getElementById("judul").style.color = "black";
	document.getElementById("jadwal").style.color = "black";
	document.getElementById("no-seat").style.display = "inline";
	document.getElementById("buy-ticket-button").style.display = "block";
}

function seatClick(number_seat) {
	var is_click = getCookie("is_seat_selected");
	var seat_elmt = document.getElementById("seat-".concat(number_seat));
	console.log(is_click);
	if ((seat_elmt.style.border == "1.5px solid rgb(255, 255, 255)")) {
		clickToUnclick(seat_elmt);
		setCookie("is_seat_selected", 0, 1);
		console.log("ppaaap"); 
	} else if (is_click == 0) {
		unclickToClick(seat_elmt);
		setCookie("is_seat_selected", 1, 1);
		setCookie("seat_selected", number_seat, 1);
		is_click = getCookie("is_seat_selected");
		document.getElementById("no-seat").innerHTML = "Seat #".concat(number_seat);
		console.log(is_click); 
	}
	else {
		var current_seat = document.getElementById("seat-".concat(getCookie("seat_selected")));
		clickToUnclick(current_seat);
		unclickToClick(seat_elmt);
		setCookie("seat_selected", number_seat, 1);
		document.getElementById("no-seat").innerHTML = "Seat #".concat(number_seat);
	}
}

var buy_button = document.getElementById("buy-ticket-button");
var close_button = document.getElementsByClassName("close")[0];
var go_to_transaction = document.getElementById("go-to-transaction");
buy_button.onclick = function() {
  modal_box.style.display = "block";
}
close_button.addEventListener(
	"click", function() {location.href='transaction.php'}
);
go_to_transaction.addEventListener(
	"click", function() {location.href='transaction.php'}
);

setCookie("is_seat_selected", 0, 1);
setCookie("seat_selected", 0, 1);