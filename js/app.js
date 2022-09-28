(function($){
	
	$('.addPanier').click(function(event){
		event.preventDefault();
		$.get($(this).attr('href'),{},function(data){
			if(data.error){
				alert(data.message);
			}else{
				if(confirm(data.message+'. Do you want to see your bag ?')){
					location.href = 'mybag.php';
				}else{

				}
			}
		}, 'json');
		return false;
	});	

})(jQuery);