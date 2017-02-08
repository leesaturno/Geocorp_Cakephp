
$(document).ready(function(){
    $("#s").autocomplete({
        minLength: 2,
        select: function(event, ui) {
            $("#s").val(ui.item.label);
        },
        source: function(request, response) {
            $.ajax({
                url: basePath + "patients/searchjson",
                data: {
                    term: request.term
                },
                dataType: "json",
                success: function(data){
                    response($.map(data, function(el, index){
                        return {
                            value: el.Patient.id,
                            nombre: el.Patient.id,
                            
                        };
                    }));
                }
            });
}

 })

 }
 