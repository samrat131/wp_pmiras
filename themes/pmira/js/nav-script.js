var a = 0;
	function display(){
		if(a == 0){
			$('#myslidemenu').addClass('menushow');
			a = 1;
		}
		else if(a == 1){
			$('#myslidemenu').removeClass('menushow');
			a = 0;
		}		
	}