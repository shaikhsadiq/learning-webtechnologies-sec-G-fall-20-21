"use string"


 function done(){
 				let na = document.getElementById('n').value;

 				if(!na == ""){
 					var str = na;
 					var n = str.length;
 					if(n > 1){
 						var st = [a-z];
 						var m = st.localCompare(str);
 						if(m == 0){
 					alert(na);		
 						}
 						else{
 							alert('name should contain a-z');
 						}
 					

 					}

 					else{
 						alert('name should be atleast 2 words!!');
 					}
 					
 				}
 				else{
 					alert('empty');
 				}
 				
 }
