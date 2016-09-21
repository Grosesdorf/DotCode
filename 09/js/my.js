window.onload = function(){
	function fadeButton(elem, t, f){
		var fps = f || 50; 
		var time = t || 500; 
		var steps = time / fps;
		var op = 1;
		var d0 = op / steps;
	  
		var timer = setInterval(function(){
	    	op -= d0;
	    	btn.style.opacity = op;
	    	steps--;
	    
	    	if(steps == 0){
	    		clearInterval(timer);
	      		btn.style.display = 'none';
	    	}
	  	}, (1000 / fps));
	}

	function race(){
		var leftOne = document.getElementsByClassName('one')[0].style.left;
		var leftTwo = document.getElementsByClassName('two')[0].style.left;
		var tmpInt = setInterval(function(){
			if(leftOne <= 600 || leftTwo <= 600){
				
				var deltaOne = (Math.random() * 100);
				var deltaTwo = (Math.random() * 100);
				setInterval(function(){
					if(deltaOne > 0){
						leftOne ++;
						document.getElementsByClassName('one')[0].style.left = leftOne + 'px';
						deltaOne --;
					}
					if(deltaTwo > 0){
						leftTwo ++;
						document.getElementsByClassName('two')[0].style.left = leftTwo + 'px';
						deltaTwo --;
					}
				}, 50);
			}
			else{
				clearInterval(tmpInt);
			}
		},5000);
	}

	function timer(){
		var tmpTimer = document.getElementById('timer');
		tmpTimer.innerHTML--;
		    if(tmpTimer.innerHTML == 0){
		        document.getElementById('timer').innerHTML = "GO!";
		        // setTimeout(function(){},1000);
		    } 
		    else if(tmpTimer.innerHTML == 5){
		    	race();
		    	setTimeout(timer,1000);
		    	// setTimeout(function(){},1000);
		    }
		    else{
		        setTimeout(timer,1000);
		    }
}

	document.getElementById('btn').onclick = function(){
		
  		fadeButton(this, 2000, 40);
  		setTimeout(timer,500);
	}
}
