	function letraA() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "a" | letra=="A") {
			  alert("Correcto ");
var text = document.createTextNode("a"); 
var text2 = document.createTextNode("3");                                    
document.getElementById("cont4").appendChild(text); 
document.getElementById("cont4-1").appendChild(text2);
			    	     agregarFilaA();

			   } else {
			    if ( letra != "a") { 
			    	alert("Intenta de nuevo");
			  
			    	 } 
			    	     }
		 } 


		 function letraS() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "a" | letra=="A") {
			  alert("Correcto ");
var text = document.createTextNode("a");
var text2 = document.createTextNode("5");                                                                        
document.getElementById("cont5").appendChild(text); 
document.getElementById("cont5-1").appendChild(text2); 
			    	     agregarFilaS();

			   } else {
			    if ( letra != "a") { 
			    	alert("Intenta de nuevo");
			    	 } 
			    	     }
		 } 


		 	 function letraO() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "o" | letra=="O") {
			  alert("Correcto ");
var text = document.createTextNode("o");
var text2 = document.createTextNode("2");                                                                        
document.getElementById("cont6").appendChild(text); 
document.getElementById("cont6-1").appendChild(text2); 
	 				agregarFilaO();

			   } else {
			    if ( letra != "o") { 
			    	alert("Intenta de nuevo");
			    	 } 
			    	     }
		 } 


 	 function letraO2() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "o" | letra=="O") {
			  alert("Correcto ");
var text = document.createTextNode("o");
var text2 = document.createTextNode("3");                                                                        
document.getElementById("cont7").appendChild(text); 
document.getElementById("cont7-1").appendChild(text2); 
			    	     agregarFilaO2();

			   } else {
			    if ( letra != "o") { 
			    	alert("Intenta de nuevo");
			    	 } 
			    	     }
		 } 

		  function letraE() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "e" | letra=="E") {
			  alert("Correcto ");
var text = document.createTextNode("e");
var text2 = document.createTextNode("4");                                                                        
document.getElementById("cont8").appendChild(text); 
document.getElementById("cont8-1").appendChild(text2); 
			    	     agregarFilaE();

			   } else {
			    if ( letra != "e" ) { 
			    	alert("Intenta de nuevo");
			    	 } 
			    	     }
		 } 

		 		  function letraO3() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "o" | letra=="O") {
			  alert("Correcto ");
var text = document.createTextNode("o");
var text2 = document.createTextNode("3");                                                                        
document.getElementById("cont1").appendChild(text); 
document.getElementById("cont1-1").appendChild(text2); 
			    	     agregarFilaO3();

			   } else {
			    if ( letra != "o" ) { 
			    	alert("Intenta de nuevo");
			    	 } 
			    	     }
		 } 


	  function letraCO() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "jo" | letra=="JO") {
			  alert("Correcto ");
var text = document.createTextNode("jo");
var text2 = document.createTextNode("3");                                                                        
document.getElementById("cont2").appendChild(text); 
document.getElementById("cont2-1").appendChild(text2); 
			    	     agregarFilaCO();
			   } else {
			    if ( letra != "o" ) { 
			    	alert("Intenta de nuevo");
			    	 } 
			    	     }
		 } 


	  function letraN() 
		{ 
			letra = prompt("¿Que letra es la que falta", "");
			 if ( letra == "n" | letra=="N") {
			  alert("Correcto ");
var text = document.createTextNode("n");
var text2 = document.createTextNode("2");                                                                        
document.getElementById("cont3").appendChild(text); 
document.getElementById("cont3-1").appendChild(text2); 
			    	     agregarFilaN();
			   } else {
			    if ( letra != "n" ) { 
			    	alert("Intenta de nuevo");
			    	 } 
			    	     }
		 } 


		 function clock() {
  var now = new Date();
  var ctx = document.getElementById('canvas').getContext('2d');
  ctx.save();
  ctx.clearRect(0, 0, 150, 150);
  ctx.translate(75, 75);
  ctx.scale(0.4, 0.4);
  ctx.rotate(-Math.PI / 2);
  ctx.strokeStyle = 'black';
  ctx.fillStyle = 'white';
  ctx.lineWidth = 8;
  ctx.lineCap = 'round';

  // Hour marks
  ctx.save();
  for (var i = 0; i < 12; i++) {
    ctx.beginPath();
    ctx.rotate(Math.PI / 6);
    ctx.moveTo(100, 0);
    ctx.lineTo(120, 0);
    ctx.stroke();
  }
  ctx.restore();

  // Minute marks
  ctx.save();
  ctx.lineWidth = 5;
  for (i = 0; i < 60; i++) {
    if (i % 5!= 0) {
      ctx.beginPath();
      ctx.moveTo(117, 0);
      ctx.lineTo(120, 0);
      ctx.stroke();
    }
    ctx.rotate(Math.PI / 30);
  }
  ctx.restore();
 
  var sec = now.getSeconds();
  var min = now.getMinutes();
  var hr  = now.getHours();
  hr = hr >= 12 ? hr - 12 : hr;

  ctx.fillStyle = 'black';

  // write Hours
  ctx.save();
  ctx.rotate(hr * (Math.PI / 6) + (Math.PI / 360) * min + (Math.PI / 21600) *sec);
  ctx.lineWidth = 14;
  ctx.beginPath();
  ctx.moveTo(-20, 0);
  ctx.lineTo(80, 0);
  ctx.stroke();
  ctx.restore();

  // write Minutes
  ctx.save();
  ctx.rotate((Math.PI / 30) * min + (Math.PI / 1800) * sec);
  ctx.lineWidth = 10;
  ctx.beginPath();
  ctx.moveTo(-28, 0);
  ctx.lineTo(112, 0);
  ctx.stroke();
  ctx.restore();
 
  // Write seconds
  ctx.save();
  ctx.rotate(sec * Math.PI / 30);
  ctx.strokeStyle = '#D40000';
  ctx.fillStyle = '#D40000';
  ctx.lineWidth = 6;
  ctx.beginPath();
  ctx.moveTo(-30, 0);
  ctx.lineTo(83, 0);
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, 10, 0, Math.PI * 2, true);
  ctx.fill();
  ctx.beginPath();
  ctx.arc(95, 0, 10, 0, Math.PI * 2, true);
  ctx.stroke();
  ctx.fillStyle = 'rgba(0, 0, 0, 0)';
  ctx.arc(0, 0, 3, 0, Math.PI * 2, true);
  ctx.fill();
  ctx.restore();

  ctx.beginPath();
  ctx.lineWidth = 14;
  ctx.strokeStyle = '#325FA2';
  ctx.arc(0, 0, 142, 0, Math.PI * 2, true);
  ctx.stroke();

  ctx.restore();

  window.requestAnimationFrame(clock);
}

window.requestAnimationFrame(clock);





function agregarFilaA(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>Alberca</td><td>1</td><td>1</td><td>0</td>';
}

function agregarFilaS(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>Zanahoria</td><td>1</td><td>1</td><td>0</td>';
}

function agregarFilaO(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>perro</td><td>1</td><td>1</td><td>0</td>';
}

function agregarFilaO2(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>caballo</td><td>1</td><td>1</td><td>0</td>';
}

function agregarFilaE(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>aguacate</td><td>1</td><td>1</td><td>0</td>';
}
function agregarFilaO3(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>pingüino</td><td>1</td><td>1</td><td>0</td>';
}

function agregarFilaCO(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>cangrejo</td><td>1</td><td>1</td><td>0</td>';
}
function agregarFilaN(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td>volcán</td><td>1</td><td>1</td><td>0</td>';
}


var sun = new Image();
var moon = new Image();
var earth = new Image();
function init() {
  sun.src = 'https://mdn.mozillademos.org/files/1456/Canvas_sun.png';
  moon.src = 'https://mdn.mozillademos.org/files/1443/Canvas_moon.png';
  earth.src = 'https://mdn.mozillademos.org/files/1429/Canvas_earth.png';
  window.requestAnimationFrame(draw);
}

