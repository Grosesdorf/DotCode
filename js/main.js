$(function () {
	$('.form-reg').parsley().on('form:validate', function (formInstance) {
		var ok = formInstance.isValid({group: 'block1', force: true});
		$('.invalid-form-error-message')
		.html(ok ? '' : 'Вы должны заполнить обязательные поля отмеченные *')
		.toggleClass('filled', !ok);
		if (!ok)
			formInstance.validationResult = false;
	});
});
