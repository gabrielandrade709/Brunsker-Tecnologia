$("#cpfcnpj").keydown(function () {
	try {
		$("#cpfcnpj").unmask();
	} catch (e) { }

	var tamanho = $("#cpfcnpj").val().length;

	if (tamanho < 11) {
		$("#cpfcnpj").mask("###.###.###-##");
	} else if (tamanho >= 11) {
		$("#cpfcnpj").mask("##.###.###/####-##");
	}

	// ajustando foco
	var elem = this;
	setTimeout(function () {
		// mudo a posição do seletor
		elem.selectionStart = elem.selectionEnd = 10000;
	}, 0);
	// reaplico o valor para mudar o foco
	var currentValue = $(this).val();
	$(this).val('');
	$(this).val(currentValue);
});

function validaEmail(input) {
	if (input.value != document.getElementById('email').value) {
		input.setCustomValidity('Repita o e-mail corretamente');
	} else {
		input.setCustomValidity('');
	}

}

function openNav() {
	document.getElementById("mySidenav").style.width = "350px";
	document.getElementById("main").style.marginLeft = "250px";
	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
	document.body.style.backgroundColor = "white";
}

$(document).ready(function(){
	$('.date').mask('00/00/0000');
	$('.time').mask('00:00:00');
	$('.date_time').mask('00/00/0000 00:00:00');
	$('.cep').mask('00000-000');
	$('.phone').mask('0000-0000');
	$('.phone_with_ddd').mask('(00) 0000-0000');
	$('.phone_us').mask('(000) 000-0000');
	$('.mixed').mask('AAA 000-S0S');
	$('.cpf').mask('000.000.000-00', {reverse: true});
	$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
	$('.money').mask('000.000.000.000.000,00', {reverse: true});
	$('.money2').mask("#.##0,00", {reverse: true});
	$('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
	  translation: {
		'Z': {
		  pattern: /[0-9]/, optional: true
		}
	  }
	});
	$('.ip_address').mask('099.099.099.099');
	$('.percent').mask('##0,00%', {reverse: true});
	$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
	$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
	$('.fallback').mask("00r00r0000", {
		translation: {
		  'r': {
			pattern: /[\/]/,
			fallback: '/'
		  },
		  placeholder: "__/__/____"
		}
	  });
	$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
  });