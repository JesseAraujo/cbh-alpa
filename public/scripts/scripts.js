function fonte(e) {
    var elemento = $(":root");
    var fonte = elemento.css('font-size');
    if (e == 'a') {
        elemento.css("fontSize", parseInt(fonte) + 1);
    } else if (e == 'd') {
        elemento.css("fontSize", parseInt(fonte) - 1);
    } else if ('reset') {
        elemento.css("fontSize", "60%");
    }
}

//-----------------------------------------------------------------------------------------------------------------

jQuery(document).ready(function () {

    jQuery("#subirTopo").hide();

    jQuery('a#subirTopo').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 100);
        return false;
    });

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#subirTopo').fadeIn();
        } else {
            jQuery('#subirTopo').fadeOut();
        }
    });
});

//-----------------------------------------------------------------------------------------------------------------

function aviso() {
    alert("Inscrições encerradas!");
}

//-----------------------------------------------------------------------------------------------------------------


function mascaratel(telefone) {
    if (telefone.value.length == 0)
        telefone.value = '(' + telefone.value;
    if (telefone.value.length == 3)
        telefone.value = telefone.value + ') ';
    if (telefone.value.length == 9)
        telefone.value = telefone.value + '-';
}

function mascaracel(celular) {
    if (celular.value.length == 0)
        celular.value = '(' + celular.value;
    if (celular.value.length == 3)
        celular.value = celular.value + ') ';
    if (celular.value.length == 10)
        celular.value = celular.value + '-';
}

/*function maskcpf(cpf) {
    if (cpf.value.length == 3)
        cpf.value = cpf.value + '.';
    if (cpf.value.length == 7)
        cpf.value = cpf.value + '.';
    if (cpf.value.length == 11)
        cpf.value = cpf.value + '-';
}*/

function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i);
    if (texto.substring(0, 1) != saida) { documento.value += texto.substring(0, 1); }
}