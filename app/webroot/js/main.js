$(".imagen").click(function(e){
	var enlaceImagen = e.target.src;
	var data = $(this).attr("data");
	var lightbox = '<div class="ligthbox">'+
						'<img src="'+enlaceImagen+'" alt="" id="zoom_mw" data-zoom-image="'+data+'">'+
						'<div class="btn-close">:P</div>'+
					'</div>';

	$("body").append(lightbox)
	$("#zoom_mw").elevateZoom({
		scrollZoom : true,
		cursor: "crosshair",
		zoomWindowOffetx: -10
		});
	$(".btn-close").click(function(){
		$(".ligthbox").remove();
		$(".zoomContainer").remove();
		$(".zommLens").remove();
		$(".zoomWindowContainer").remove();
	})

})  