$(document).ready(function () {
	
	$('form*[class*=modal-form]').each(function() {
		$.mask.definitions['N'] = '[/0-6|9/]';
		$('input*[type*=tel]').mask("+7(N99) 999-99-99");
	});
	
	$('.modal-button').click(function() {
		$('.modal, .modal-overlay').addClass('toggled');
	});
	
	$('.modal-close').click(function() {
		$('.modal-overlay').removeClass('toggled');
		$(this).parent('div').removeClass('toggled');	
	});
	
});