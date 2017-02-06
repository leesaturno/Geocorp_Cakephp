$(document).ready(function(){
	$("#s").autocomplete({
		minLength: 2,
		select: function(event, ui){
			$("#s").val(ui.item.label);
		},
		source: function(request, response) {
			$.ajax({
				url: basePath + "patients/searchjson"
				data: {
					term: request.term
				},
				dataType: "json",
				success: functionn(data){
					response($.map(data, function(el, patient, person, nombre){
						return {
							value: el.patient.person.nombre,
							person: el.patient.person.nombre,
						};
					}))
				}
			});
		}
	});.data("ui-autocomplete")._renderItem = function(ul, item){
		return $("<li></li>")
		.data("item.autocomplete", item)
		.append("<a><img width='40' src='" + basePath + item.nombre + "</a>")
		.appendTo(ul)
	};
});