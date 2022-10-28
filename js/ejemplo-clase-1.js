$(function(){

	$("#hide-card").mouseenter(function(){
		$('.card').hide();
		$(this).hide().parents('.card').show();
		$(this).siblings('#show-card').show();
		$(this).siblings('a.btn-primary').html('boton');
		$(this).siblings('p').html('Hola jonal');
		$(this).siblings('h5').html('Prueba').attr('class','card-title2');
		
	})

	$("#show-card").mouseenter(function(){
		$('.card').show();
		$(this).hide().siblings('#hide-card').show();
		$(this).parents('.card').show();
		$(this).siblings('a.btn-primary').html('Card title');
		$(this).siblings('p').html('Some quick example text to build on the card title and make up the bulk of the card\'s content.');
		$(this).siblings('h5').html('Card title');
	})
	//ancestros= parents()
	//padre=parent()
	//hermanos=siblings()

});