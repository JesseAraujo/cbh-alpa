
function userWokshop01() {

    //dados a enviar, vai buscar os valores dos campos que queremos enviar para a BD
    var dadosajax = {
        'campo1': $("#campo1").val(),
        'campo2': $("#campo2").val(),
        'campo3': $("#campo3").val(),
        'campo4': $("#campo4").val(),
        'campo5': $("#campo5").val(),
        'campo6': $("#campo6").val(),
        'campo7': $("#campo7").val()
    };

    if ((document.getElementById("campo1").value == "") || (document.getElementById("campo2").value == "") || (document.getElementById("campo3").value == "") || (document.getElementById("campo4").value == "") || (document.getElementById("campo7").value == "")) {
        alert("Por favor, preencha os campos corretamente.");
    }
    else {

        //pageurl = 'http://localhost/controller/workshop01.php';
        pageurl = 'https://cbhalpa.com.br/controller/workshop01.php';

        //para consultar mais opcoes possiveis numa chamada ajax
        //http://api.jquery.com/jQuery.ajax/

        $.ajax({

            //url da pagina
            url: pageurl,
            //parametros a passar
            data: dadosajax,
            //tipo: POST ou GET
            type: 'POST',
            //cache
            cache: false,
            //se ocorrer um erro na chamada ajax, retorna este alerta
            //possiveis erros: pagina nao existe, erro de codigo na pagina, falha de comunicacao/internet, etc etc etc
            error: function () {
                alert('Erro: Inserir Registo!!');
            },
            //retorna o resultado da pagina para onde enviamos os dados
            success: function (result) {
                //se foi inserido com sucesso
                if (result != '0') {
                    alert("Inscrição realizada com sucesso!");
                }
                //se foi um erro
                else {
                    alert("Ocorreu um erro ao inserir o seu registo!");
                }

            }
        });

        $('#campo1').val("");
        $('#campo2').val("");
        $('#campo3').val("");
        $('#campo4').val("");
        $('#campo5').val("");
        $('#campo6').val("");
        $('#campo7').val("");

    }
}

function userWokshop02() {

    //dados a enviar, vai buscar os valores dos campos que queremos enviar para a BD
    var dadosajax = {
        'campo1': $("#campo1").val(),
        'campo2': $("#campo2").val(),
        'campo3': $("#campo3").val(),
        'campo4': $("#campo4").val(),
        'campo5': $("#campo5").val(),
        'campo6': $("#campo6").val(),
        'campo7': $("#campo7").val()
    };

    if ((document.getElementById("campo1").value == "") || (document.getElementById("campo2").value == "") || (document.getElementById("campo3").value == "") || (document.getElementById("campo4").value == "") || (document.getElementById("campo7").value == "")) {
        alert("Por favor, preencha os campos corretamente.");
    }
    else {

        //pageurl = 'http://localhost/controller/workshop02.php';
        pageurl = 'https://cbhalpa.com.br/controller/workshop02.php';

        //para consultar mais opcoes possiveis numa chamada ajax
        //http://api.jquery.com/jQuery.ajax/

        $.ajax({

            //url da pagina
            url: pageurl,
            //parametros a passar
            data: dadosajax,
            //tipo: POST ou GET
            type: 'POST',
            //cache
            cache: false,
            //se ocorrer um erro na chamada ajax, retorna este alerta
            //possiveis erros: pagina nao existe, erro de codigo na pagina, falha de comunicacao/internet, etc etc etc
            error: function () {
                alert('Erro: Inserir Registo!!');
            },
            //retorna o resultado da pagina para onde enviamos os dados
            success: function (result) {
                //se foi inserido com sucesso
                if (result != '0') {
                    alert("Inscrição realizada com sucesso!");
                }
                //se foi um erro
                else {
                    alert("Ocorreu um erro ao inserir o seu registo!");
                }

            }
        });

        $('#campo1').val("");
        $('#campo2').val("");
        $('#campo3').val("");
        $('#campo4').val("");
        $('#campo5').val("");
        $('#campo6').val("");
        $('#campo7').val("");

    }
}

function userWokshop03() {

    //dados a enviar, vai buscar os valores dos campos que queremos enviar para a BD
    var dadosajax = {
        'campo1': $("#campo1").val(),
        'campo2': $("#campo2").val(),
        'campo3': $("#campo3").val(),
        'campo4': $("#campo4").val(),
        'campo5': $("#campo5").val(),
        'campo6': $("#campo6").val(),
        'campo7': $("#campo7").val()
    };

    if ((document.getElementById("campo1").value == "") || (document.getElementById("campo2").value == "") || (document.getElementById("campo3").value == "") || (document.getElementById("campo4").value == "") || (document.getElementById("campo7").value == "")) {
        alert("Por favor, preencha os campos corretamente.");
    }
    else {

        //pageurl = 'http://localhost/controller/workshop03.php';
        pageurl = 'https://cbhalpa.com.br/controller/workshop03.php';

        //para consultar mais opcoes possiveis numa chamada ajax
        //http://api.jquery.com/jQuery.ajax/

        $.ajax({

            //url da pagina
            url: pageurl,
            //parametros a passar
            data: dadosajax,
            //tipo: POST ou GET
            type: 'POST',
            //cache
            cache: false,
            //se ocorrer um erro na chamada ajax, retorna este alerta
            //possiveis erros: pagina nao existe, erro de codigo na pagina, falha de comunicacao/internet, etc etc etc
            error: function () {
                alert('Erro: Inserir Registo!!');
            },
            //retorna o resultado da pagina para onde enviamos os dados
            success: function (result) {
                //se foi inserido com sucesso
                if (result != '0') {
                    alert("Inscrição realizada com sucesso!");
                }
                //se foi um erro
                else {
                    alert("Ocorreu um erro ao inserir o seu registo!");
                }

            }
        });

        $('#campo1').val("");
        $('#campo2').val("");
        $('#campo3').val("");
        $('#campo4').val("");
        $('#campo5').val("");
        $('#campo6').val("");
        $('#campo7').val("");

    }
}



