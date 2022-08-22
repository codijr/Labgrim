jQuery(function($){
    $('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), 
			type:filter.attr('method'), 
			beforeSend:function(xhr){
				filter.find('button').text('Carregando...'); 
			},
			success:function(data){
				filter.find('button').text('Buscar'); 
				$('#response').html(data); 
			}
		});
		return false;
	});
});