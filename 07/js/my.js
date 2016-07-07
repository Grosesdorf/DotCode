var $click = 0;
var $dbClick = 0;
var $mouseOver = 0;
var $mouseOut = 0;
var $mouseEnter = 0;
var $mouseLeave = 0;
var $mouseUp = 0;
var $mouseDown = 0;
var $contextMenu = 0;

function myMoveMouse($event){
	document.getElementById('div04').innerHTML = 'ClientX = ' + $event.clientX + ' ClientY = ' + $event.clientY + ';' +
					  							 'ScreenX = ' + $event.screenX + ' ScreenY = ' + $event.screenY + '<br>' +
					  							 'AltKey = ' + $event.altKey + ' ' +
					  							 'CtrlKey = ' + $event.ctrlKey + ' ' +
					  							 'ShiftKey = ' + $event.shiftKey;
}

function showAll(){
	document.getElementById('div03').innerHTML = 'Click (' + $click + ')<br>' +
											'dbClick (' + $dbClick + ')<br>' +
											'mouseOver (' + $mouseOver + ')<br>' +
											'mouseOut (' + $mouseOut + ')<br>' +
											'mouseEnter (' + $mouseEnter + ')<br>' +
											'mouseLeave (' + $mouseLeave + ')<br>' +
											'mouseUp (' + $mouseUp + ')<br>' +
											'mouseDown (' + $mouseDown + ')<br>' +
											'contextMenu (' + $contextMenu + ')<br>';
}

function myClick(){
	$click++;
	showAll();
	document.body.style.backgroundColor = "red";
}

function myDbclick(){
	$dbClick++;
	showAll();
	document.body.style.backgroundColor = "black";
}

function myMouseOver(id){
	$mouseOver++;
	showAll();
	document.getElementById('td01').innerHTML='';
	document.getElementById('td02').innerHTML='';
	document.getElementById('td03').innerHTML='';
	document.getElementById('td04').innerHTML='';
	document.getElementById('td06').innerHTML='';
	document.getElementById('td07').innerHTML='';
	document.getElementById('td08').innerHTML='';
	document.getElementById('td09').innerHTML='';
	document.getElementById(id).style.display='table-cell';
}

function myMouseOut(id){
	$mouseOut++;
	showAll();
	document.getElementById(id).style.display='none';
}

function myMouseEnter(){
	$mouseEnter++;
	showAll();
	document.body.style.backgroundColor = "yellow";
}

function myMouseLeave(){
	$mouseLeave++;
	showAll();
	document.getElementById('td01').innerHTML='';
	document.getElementById('td02').innerHTML='';
	document.getElementById('td03').innerHTML='';
	document.getElementById('td04').innerHTML='';
	document.getElementById('td06').innerHTML='';
	document.getElementById('td07').innerHTML='';
	document.getElementById('td08').innerHTML='';
	document.getElementById('td09').innerHTML='';
	document.body.style.backgroundColor = "white";
}

function myMouseUp(){
	$mouseUp++;
	showAll();
	document.getElementById('td02').innerHTML='UP';
	document.getElementById('td08').innerHTML='';
}

function myMouseDown(){
	$mouseDown++;
	showAll();
	document.getElementById('td02').innerHTML='';
	document.getElementById('td08').innerHTML='DOWN';
}

function myContextMenu($event, id01){
	$contextMenu++;
	showAll();
	$event.preventDefault();
	document.getElementById(id01).style.display='none';
	document.getElementById('td01').innerHTML='ТЫЦ!!!';
	document.getElementById('td02').innerHTML='ТЫЦ!!!';
	document.getElementById('td03').innerHTML='ТЫЦ!!!';
	document.getElementById('td04').innerHTML='ТЫЦ!!!';
	document.getElementById('td06').innerHTML='ТЫЦ!!!';
	document.getElementById('td07').innerHTML='ТЫЦ!!!';
	document.getElementById('td08').innerHTML='ТЫЦ!!!';
	document.getElementById('td09').innerHTML='ТЫЦ!!!';
	document.getElementById('td09').style.color='white';
}