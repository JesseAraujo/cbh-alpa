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


function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i)

    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }
}

function SomenteNumero(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58)) return true;
    else {
        if (tecla == 8 || tecla == 0) return true;
        else return false;
    }
}

