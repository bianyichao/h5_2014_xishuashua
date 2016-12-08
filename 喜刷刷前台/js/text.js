$(function(){
	  		var num1=$("#a").html();
	  		if(num1.length>25){
	  			$("#a").html(num1.substr(0,25)+"......");
	  		}
	  		var num2=$("#b").html();
	  		if(num2.length>25){
	  			$("#b").html(num2.substr(0,25)+"......");
	  		}
	  		var num3=$("#c").html();
	  		if(num3.length>25){
	  			$("#c").html(num3.substr(0,25)+"......");
	  		}
	  		var num4=$("#d").html();
	  		if(num4.length>25){
	  			$("#d").html(num4.substr(0,25)+"......");
	  		}
			var num5=$("#e").html();
			if(num5.length>17){
				$("#e").html(num5.substr(0,17)+"......");
			}
			var num6=$("#f").html();
			if(num6.length>17){
				$("#f").html(num6.substr(0,17)+"......");
			}
			var num7=$("#g").html();
			if(num7.length>17){
				$("#g").html(num7.substr(0,17)+"......");
			}
			var num8=$("#h").html();
			if(num8.length>17){
				$("#h").html(num8.substr(0,17)+"......");
			}
	  	});