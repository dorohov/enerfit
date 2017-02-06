$(function(){
	
	$(document.body).on('hidden.bs.modal', '.modal.modal-site', {}, function(){
		
		var modal = $(this);
		
		modal.find('iframe').each(function(index){
			
			var iframe = $(this);
			var src= iframe.attr('src');
			
			iframe.attr('src', src);
			
		});
		
	});
	
});