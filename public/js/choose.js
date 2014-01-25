 window.onload = function () {

	 var ckall = document.getElementById('check');
     var ck = document.getElementsByName('checkbox1');
     ckall.onclick = function () {
         for (var i = 0; i < ck.length; i++) {
             if (ckall.checked == true) {
                 ck[i].checked = true;
             }
             else {
                 ck[i].checked = false;
             }
         }
     }

};




function px(){
	
	var num=document.getElementById('px').value;
	window.location.href='px/num/'+num;
	
}
	
