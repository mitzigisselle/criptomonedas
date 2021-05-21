
function calcular(){
    
    //obtenemos el valor de la cantidad de fotos y lo convertimos a numero
    let cantidad = parseInt($('#cantidad').val());
    if (cantidad < 1) {
        swal("La cantidad debe ser mayor a cero");
        return false;
    }

    //obtenemos el valor del radio
    let moneda = $('input:radio[name=moneda]:checked').val();
    if (moneda == undefined) {
        swal("Debes seleccionar la moneda!");
        return false;
    }


    //calculamos el resultado
    obtenerResultado = calcularPrecio(cantidad, moneda);
        $('#cantidadmonedas').val("Total de compra: " + obtenerResultado + " monedas");
    return false;
   
    
}


function calcularPrecio(cantidad, moneda) {
    let resultado = 0;
    let res2;
    
        switch (moneda) {
            case "bitcoin":
                resultado = cantidad / 840000;
                break;
            case "etherium":
                resultado = cantidad / 58620;
                break;
            case "mana":
                resultado = cantidad / 20;
                break;
            case "xrp":
                resultado = cantidad / 24;
                break;
            case "bat":
                resultado = cantidad / 18;
                break;
        }
   
    return resultado;
}

function limpiarFormulario(){
    $('#criptomonedas')[0].reset();
}