
function btn_guardar_datos()
{
    var fotografia = $("#fotografia").val();
    var cliente = $("#cliente").val();
    var  ci_cli = $("#ci_cli").val();
    var direccion_cli = $("#direccion_cli").val();
    var celular_cli  = $("#celular_cli").val();
    var observacion_cli = $("#observacion_cli").val();

    //alert(fotografia);
    var ob= {fotografia:fotografia,cliente:cliente,ci_cli:ci_cli,celular_cli:celular_cli,direccion_cli:direccion_cli,observacion_cli:observacion_cli};
    $.ajax({
                //el protocolo
                type: "POST",

                //a donde quiero mandar el objeto
                url: url_p+"Ccliente/agregar_bd",    

                data: ob,

                //que quieres mostrar como recargable al iniciar
                beforeSend: function(objeto){
                    $("#panel_respuesta").html("enviando...");
                },

                //al finalizar
                success: function(data)
                {
                    $("#panel_respuesta").html("");
                    btn_listar_datos();
                    //setTimeout(function(){ location.reload(); }, 2000);


                }
            });
}

function btn_listar_datos()
{
    // va vacio porque no es un formulario de registro
    var ob= "";
    $.ajax({
                //el protocolo
                type: "POST",
                //a donde quiero mandar el objeto
                url: url_p+"Ccliente/listar_datos",    
                data: ob,

                //que quieres mostrar como recargable al iniciar
                beforeSend: function(objeto){
                    
                },

                //al finalizar
                success: function(data)
                {
                    $("#panel_listado").html(data);
                }
            });
}


function btn_eliminar(id_cliente)
{
    console.log("id => "+id_cliente);

    var opcion = confirm("DESEA ELIMIAR EL DATO");
    if (opcion == true) 
    {

        var ob= {id_cliente:id_cliente};
        $.ajax({
                    //el protocolo
                    type: "POST",
                    //a donde quiero mandar el objeto
                    url: url_p+"Ccliente/eliminar",    
                    data: ob,
    
                    //que quieres mostrar como recargable al iniciar
                    beforeSend: function(objeto){
                        
                    },
    
                    //al finalizar
                    success: function(data)
                    {
                       // $("#panel_listado").html(data);
                       btn_listar_datos();
                    }
                });

	}  

}
function btn_editar(id_cliente){
    console.log(id_cliente);

    var ob= {id_cliente:id_cliente};
        $.ajax({
                    //el protocolo
                    type: "POST",
                    //a donde quiero mandar el objeto
                    url: url_p+"Ccliente/editar_datos",    
                    data: ob,
    
                    //que quieres mostrar como recargable al iniciar
                    beforeSend: function(objeto){
                        
                    },
    
                    //al finalizar
                    success: function(data)
                    {
                        $("#panel_editar").html(data);
                       
                    }
                });
}

function btn_guardar_edicion()
{

    var id_client = $("#id_client").val();
    var fotografia = $("#fotografia_edi").val();
    var cliente = $("#cliente_edi").val();
    console.log(id_client);
    var  ci_cli = $("#ci_cli_edi").val();
    var direccion_cli = $("#direccion_cli_edi").val();
    var celular_cli  = $("#celular_cli_edi").val();
    var observacion_cli = $("#observacion_cli_edi").val();


    var obj= {id_client:id_client,fotografia:fotografia,cliente:cliente,ci_cli:ci_cli,celular_cli:celular_cli,direccion_cli:direccion_cli,observacion_cli:observacion_cli};
        $.ajax({
                    //el protocolo
                    type: "POST",
                    //a donde quiero mandar el objeto
                    url: url_p+"Ccliente/guardar_datos",    
                    data: obj,
    
                    //que quieres mostrar como recargable al iniciar
                    beforeSend: function(objeto){
                        
                    },
    
                    //al finalizar
                    success: function(data)
                    {
                        $("#panel_respuesta_edicion").html(data);
                        btn_listar_datos();
                       
                    }
                });
}


function btn_buscar()
{

    var palabra_buscar = $("#dato_buscado").val();
    var obj= {cliente:palabra_buscar};
        $.ajax({
                    //el protocolo
                    type: "POST",
                    //a donde quiero mandar el objeto
                    url: url_p+"Ccliente/buscar_en_bd",    
                    data: obj,
    
                    //que quieres mostrar como recargable al iniciar
                    beforeSend: function(objeto){
                        
                    },
    
                    //al finalizar
                    success: function(data)
                    {
                        $("#panel_listado").html(data);
                       
                    }
                });
}