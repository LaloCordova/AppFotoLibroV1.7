function modificar(arreglo) {
    cadena = arreglo.split(',');
    

    $("#id_").val(cadena[0]);
    $("#name_").val(cadena[1]);
    $("#pack_").val(cadena[2]);
    $("#dire_").val(cadena[3]);
  
    
}

function modificar2(arreglo) {
    cadena = arreglo.split(',');
    
    $("#id_2").val(cadena[0]);
    $("#usuario_").val(cadena[4]);
    $("#contra_").val(cadena[5]);
    
}

$('#modificar').click(function () {
    var recolectar = $('#mod_form').serialize();


    $.ajax({

        url: '../PHP/modificar_cliente.php',
        type: 'POST',
        data: recolectar,

        success: function (variable) {
            $('#cargar').load('../views/clientsPage.php #cargar')
            $('#editar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();
        }

    })
});


$('#agregar_user').click(function () {
    var recolectar2 = $('#agr_form').serialize();

    var usuario = $('#agr_usuario').val();
    var pass = $('#agr_contra').val();
    var pass2 = $('#agr_contra2').val();
    var name = $('#agr_nombre').val();
    var address = $('#agr_dire').val();
    
    

    if (usuario.trim() == '') {
        alert('Por favor Ingresa un Usuario.');
        $('#agr_usuario').focus();
        return false;
    } else if (pass.trim() == '') {
        alert('Por favor Ingresa una Contraseña.');
        $('#agr_contra').focus();
        return false;
    } else if (pass != pass2) {
        alert('Las contraseñas no son iguales');
        $('#agr_contra2').focus();
        return false;
    } else if (name.trim() == '') {
        alert('Por favor Ingresa un Nombre.');
        $('#agr_nombre').focus();
        return false;
    } else if (address.trim() == '') {
        alert('Por favor Ingresa una Dirección');
        $('#agr_dire').focus();
        return false;
    } else {


        $.ajax({

            url: '../PHP/agregar_cliente.php',
            type: 'POST',
            data: recolectar2,

            success: function (variable2) {
                $('#cargar').load('clientsPage.php #cargar')
                $('#agregar').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').hide();

                $("#agr_usuario").val(" ");
                $("#agr_contra").val(" ");
                $("#agr_contra2").val(" ");
                $("#agr_nombre").val(" ");
                $("#agr_dire").val(" ");
            }

        })
    }
});

function eliminar(arreglo) {
    cadena = arreglo.split(',');

    $("#id_e").val(cadena[0]);

}



$('#delete_user').click(function () {
    var recolectar3 = $('#del_form').serialize();


    $.ajax({

        url: '../PHP/eliminar_cliente.php',
        type: 'POST',
        data: recolectar3,

        success: function (variable3) {
            $('#cargar').load('../views/clientsPage.php #cargar')
            $('#eliminar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();
        }

    })
});