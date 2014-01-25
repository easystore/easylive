function checkme(){
	 var ck = document.getElementsByName('checkbox1');
	 for (var i = 0; i < ck.length; i++) {
		 if(ck[i].checked==true){
			 var id=ck[i].value;
			 window.location.href='del/id/'+id;
		 }
		 
	 }
	
}
