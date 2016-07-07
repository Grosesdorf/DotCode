	function getChar(event){								// https://learn.javascript.ru/keyboard-events Кросс-браузерная функция для получения символа из события keypress
  		if (event.which == null){														// IE
    		if (event.keyCode < 32){
    			return null;
    		} 																			// спец. символ
    		return String.fromCharCode(event.keyCode);
  		}
		if (event.which != 0 && event.charCode != 0){ 									// все кроме IE
    		if (event.which < 32){
    			return null;
    		}										 									// спец. символ
    		return String.fromCharCode(event.which); 									// остальные
  		}
  	return null; 																		// спец. символ
	}
	function myKeyPress(event){
		var someText = document.getElementById('div03').innerHTML;
		if(event.charCode == 97 || event.charCode == 1072){								//charCode и which возвращают одинаковые кода				
			someText += getChar(event).toUpperCase();
		}
		else{
			someText += getChar(event);	
		}
		document.getElementById('div03').innerHTML = someText;
	}
	function myKeyUp(){
		setTimeout(function(){
			document.getElementsByTagName("TD")[0].removeAttribute("id");
			}, 50);
		}
	function myKeyDown(){
		document.getElementsByTagName("TD")[0].setAttribute("id", "td01");
	}
	function myFocus(){
		document.getElementById("text01").style.backgroundColor = "white";
		document.body.style.backgroundColor = "white";
	}
  	function myBlur(){
  		document.getElementById("text01").style.backgroundColor = "#FFD700";
  	}
	function myChange(){
		document.body.style.backgroundColor = "green";
	}