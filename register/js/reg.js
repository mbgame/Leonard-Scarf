function gettext(msgid) {
	return globals.messages[msgid];
}

function SafeString(value) {
	this.value = value || '';
	this.length = this.value.length;
}
SafeString.prototype = new String();
SafeString.prototype.toString = SafeString.prototype.valueOf = function(){return this.value};


function initValidation() {
	$(".-elm-text").focus(function () {
		var tipsVal = $(this).attr('data-tips'),
			tipDiv = $('.-bayan-tips-field');
		if (tipsVal) {
			if (!tipDiv.length)
				tipDiv = $('<div class="-bayan-tips-field tips-left">').appendTo('body');
			var alignTo = $(this).parents('.-bayan-field-wrap').andSelf().first(),
				posLeft = alignTo.offset().left,
				posTop = alignTo.offset().top,
				width = alignTo.outerWidth(),
				isRtl = $("html").attr("dir") == 'rtl';
			tipDiv.css('top', posTop).css(isRtl?"left":"right", posLeft - width + 73)
				.text(tipsVal).stop(true).fadeIn(function(){$(this).css('opacity', 1);});
		}
	}).blur(function () {
		$('.-bayan-tips-field').stop(true).fadeOut();
		$(this).validate();
	});

	$.fn.setInputError = function(validated, result_element, error_text) {
		if (result_element) {
			result_element[error_text instanceof SafeString?'html':'text'](validated ? '' : error_text+'');
		}
		this.toggleClass('success', validated).toggleClass('error', !validated);
		return this;
	};

	$.fn.validate = function(input_name) {
		var result = true, form = this;
		if (!this.is('form')) {
			form = this.parents('form');
			input_name = this.attr('name');
		}
		$.each(form.data('validateSpec') || [], function (i, item) {
			if (!input_name|| item.name == input_name) {
				result = check_data(item.name, item.filter, item.text, item.result_element, item.require,
					item.custom_func, item.custom_text) && result;
			}
		});
		return result;
	};

	function check_data(input_name, filter, text, result_element, require, custom_func, custom_text) {
		var result_text_custom_func = "";
		var internal_result_element = $(result_element);
		var inputElem = $('[name=' + input_name + ']');
		var regx_validate = false;
		// if its not require
		if (inputElem.is(":hidden")) {

			return true;
		}
		if (inputElem.val() === "") {
			if (require && require != "other") {
				inputElem.setInputError(false, internal_result_element, require);
				return false;

			} else if (!require) {
				inputElem.setInputError(true, internal_result_element).removeClass('success');
				return true;
			}
		}

		if (filter.test(inputElem.val())) {
			regx_validate = true;

			result_text_custom_func = custom_func && custom_func();
		}
		var validated = regx_validate && !result_text_custom_func;
		inputElem.setInputError(validated, internal_result_element, result_text_custom_func || text);
		return validated;
	}
}

function initRegistration() {

	function username_check() {
		var $username = $("input[name=username]"),
			username = $username.val().toLowerCase();
		if (username.length < 6 || username.length > 25) {
			return gettext('username_length');
		}

	}	

	function email_check() {
		var $email = $('input[name=email_address]'),
			email = $.trim($email.val().toLowerCase());
		$.ajax({
			type: "get",
			url: globals.urls.checkEmailURL,
			data: {email: email},
			success: function (response) {
				$email.setInputError(response == 'OK', $('#emailInfo'), new SafeString(gettext('email_exists')));
				if (response == 'OK' && email.substring(0, 3) == 'www') {
					$('#emailInfo').html($('#emailWarning').html());
				}
			}
		});
	}

	function rePassword() {
		var password = $("#password");
		var password_confirm = $("#password_confirm");
		var result_text;

		if (password.val() != password_confirm.val()) {
			result_text = gettext('password_confirm');
			return result_text.toString();
		}
		if (password_confirm.val() === '') {
			result_text = gettext('password_confirm_required');
			return result_text;
		} else {
			return null;
		}
	}



	$('#register').data('validateSpec', [
		{
			name: "date_of_birth-day",
			filter: new RegExp(globals.validators.birth_day),
			text: gettext('birthday_valid'),
			result_element: "#birthdayInfo",
			//require: gettext('birthday_required')
		},
		{
			name: "date_of_birth-month",
			filter: new RegExp(globals.validators.birth_month),
			text: gettext('birthday_valid'),
			result_element: "#birthdayInfo",
			//require: gettext('birthday_required')
		},
		{
			name: "date_of_birth-year",
			filter: new RegExp(globals.validators.birth_year),
			text: gettext('birthday_valid'),
			result_element: "#birthdayInfo",
			//require: gettext('birthday_required')
		},
		{
			name: "mobile",
			filter: new RegExp(globals.validators.mobile),
			text: gettext('mobile_valid'),
			result_element: "#mobileInfo",
                        require: gettext('mobile_required')
		},
		{
			name: "telephone",
			filter: new RegExp(globals.validators.telephone),
			text: gettext('telephone_valid'),
			result_element: "#telephoneInfo",
                        require: gettext('telephone_required')
		},
		{
			name: "address",
			filter: new RegExp(globals.validators.address),
			text: gettext('address_valid'),
			result_element: "#addressInfo",
                        require: gettext('address_required')
		},
		{
			name: "postalcode",
			filter: new RegExp(globals.validators.postalcode),
			text: gettext('postalcode_valid'),
			result_element: "#postalcodeInfo",
                        require: gettext('postalcode_required')
		},
		{
			name: "account_number",
			filter: new RegExp(globals.validators.account_number),
			text: gettext('account_number_valid'),
			result_element: "#account_numberInfo",
                        require: gettext('account_number_required')
		},
		{
			name: "kasabe",
			filter: new RegExp(globals.validators.kasabe),
			text: gettext('kasabe_valid'),
			result_element: "#kasabeInfo",
                        require: gettext('kasabe_required')
		},
		{
			name: "first_name",
			filter: new RegExp(globals.validators.first_name),
			text: gettext('first_name_length'),
			result_element: "#first_nameInfo",
			require: gettext('first_name_required')
		},
		{
			name: "last_name",
			filter: new RegExp(globals.validators.last_name),
			text: gettext('last_name_length'),
			result_element: "#last_nameInfo",
			require: gettext('last_name_required')
		},
		{
			name: "password",
			filter: new RegExp(globals.validators.password),
			text: gettext('password_length'),
			result_element: "#pass1Info",
			require: gettext('password_required')
		},
		{
			name: "password_confirm",
			filter: new RegExp(globals.validators.password_confirm),
			text: gettext('password_confirm'),
			result_element: "#pass2Info",
			require: gettext('password_confirm_required'),
			custom_func: rePassword
		},
		{
			name: "username",
			filter: new RegExp(globals.validators.username, 'i'),
			text: gettext('username_length'),
			result_element: "#unameInfo",
			require: gettext('username_required'),
			custom_func: username_check
		},
		{
			name: 'email_address',
			filter: new RegExp(globals.validators.email_address, 'i'),
			text: gettext('email_valid'),
			result_element: "#emailInfo",
			require: gettext('email_required'),
			//custom_func: email_check
		}
	]);



	function uiView(type) {
		var setColor = function (num, color) {
			var i;
			for (i = 1; i <= num; i++) {
				$('.pwd-srtn-' + i).css("opacity", "1");
			}
			for (i = num + 1; i <= 4; i++) {
				$('.pwd-srtn-' + i).css("opacity", "0");
			}
			$('.-bayan-password-strength-box ul.color li').css("background-color", color);
		};
		if (type == 'emptyPass') {
			setColor(0, "#e71818");
		} else if (type == 'shortPass') {
			setColor(1, "#e71818");
		} else if (type == 'badPass') {
			setColor(2, "#e71818");
		} else if (type == 'goodPass') {
			setColor(3, "#ff9c00");
		} else if (type == 'strongPass') {
			setColor(4, "#61e129");
		}
	}

	$.fn.passStrength = function () {
		$(this).keyup(function () {
			uiView(teststrength($(this).val()));
		});
	};

	function teststrength(password) {
		var score = 0;

		if (password.length == 0) {
			return 'emptyPass';
		}
		if (password.length < 4) {
			return 'shortPass';
		}

		score += checkRepetition(1, password).length;
		score += checkRepetition(2, password).length;
		score += checkRepetition(3, password).length;
		score += checkRepetition(4, password).length;

		if (password.match(/(.*[0-9].*[0-9].*[0-9])/)) {
			score += 5;
		}

		if (password.match(/(.*[!,@#$%^&*?_~].*[!,@#$%^&*?_~])/)) {
			score += 5;
		}

		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
			score += 10;
		}

		if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
			score += 15;
		}

		if (password.match(/([!,@#$%^&*?_~])/) && password.match(/([0-9])/)) {
			score += 15;
		}

		if (password.match(/([!,@#$%^&*?_~])/) && password.match(/([a-zA-Z])/)) {
			score += 15;
		}

		if (password.match(/^\w+$/) || password.match(/^\d+$/)) {
			score -= 10;
		}

		if (score < 34) {
			return 'badPass';
		}
		if (score < 68) {
			return 'goodPass';
		}

		return 'strongPass';
	}

	function checkRepetition(pLen, str) {
		var res = "";
		for (var i = 0; i < str.length; i++) {
			var repeated = true;

			for (var j = 0; j < pLen && (j + i + pLen) < str.length; j++) {
				repeated = repeated && (str.charAt(j + i) == str.charAt(j + i + pLen));
			}
			if (j < pLen) {
				repeated = false;
			}
			if (repeated) {
				i += pLen - 1;
				repeated = false;
			}
			else {
				res += str.charAt(i);
			}
		}
		return res;
	}

	$('#password').passStrength();
}
