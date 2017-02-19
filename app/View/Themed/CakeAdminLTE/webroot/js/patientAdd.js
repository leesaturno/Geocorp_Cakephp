$(document).ready(function(){
	//Selector automatico de fechas
		$('#datepicker2').on('change', function(){
	        var date = $(this)[0];
	        if (date.textLength >= 9) {
		        var d = new Date(date.value);
				d.setDate(d.getDate() + 270);
				var s = d.toString();
				var d = s.split(" ");
				var monthName = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
				var m = monthName.indexOf(d[1]) + 1;

				console.log(m);
				var d2 = m+"/"+d[2]+"/"+d[3];
				$('#datepicker')[0].value = d2;
	        }
		})
	//
});