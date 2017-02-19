$(document).ready(function(){
	
	//

	$(".chosen-select").chosen();

	$("#DoctorPersonId").on('chosen:no_results', function(){
		$.ajax({
            type: "GET",
            dataType: 'json',
            url: basePath + "people/addAjax",
            success:function(Obj){
            	console.log(Obj);
                var dialogChosen = dialogChosen || (function ($) {
                'use strict';
                var $dialog = $('<div id="ModalPeople" data-backdrop="static" data-keyboard="false" class="modal fade">' +
                    '<div class="modal-dialog modal-lg">' +
                    '<div class="modal-content">' +
                    '<div class="modal-header">' +
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>' +
                    '<h4 class="modal-title"> '+Obj.title+'</h4>' +
                    '</div>' +
                    '<div class="modal-body">' + Obj.content +
                    '</div>' +
                    '<div class="modal-footer">' +                
                    '</div>' +
                    '</div> ' +
                    '</div> ' +
                    '</div>');
                return {
                    show: function () {
                        $dialog.modal();
                    }
                }

            })(jQuery);
            dialogChosen.show();
            }
        });
	});

	$(document).on('submit', 'form#PersonAddForm', function (e) {

        e.preventDefault();
        var form = $(this).serialize();

        $.ajax({
            url:  basePath + "people/setAjax",
            type: 'POST',
            data: form,
            success: function (data) {
              
              	if (data) {
               		$('.modal').hide();
               		$('.modal').remove();
               		Push.create("Persona Guardada", {
					    body: "Exito",
					    timeout: 2000,
					    onClick: function () {
					        window.focus();
					        this.close();
					    }
					});
					location.reload();
               }else{
               		alert("Error irreparable");
               }
            },
            error: function (data){
            	console.log(data);
            }
        });
        
    });

    $(document).on("shown.bs.modal", '#ModalPeople', function() {
        
        $('#PersonFechaDefuncio').datepicker({
            autoclose: true,
			language: 'es',
			format: 'm/dd/yyyy',
			weekStart: 1,
        });

        $('#PersonFechaNac').datepicker({
            autoclose: true,
			language: 'es',
			format: 'm/dd/yyyy',
			weekStart: 1,
        });

    });

    $(document).on("hidden.bs.modal", '#ModalPeople', function() {
        $(this).remove();
    }); 
});