"use strict";

function cleanTbody(){$('#tbody').empty(); }
function enableProcesar(){$('#procesar').attr('disabled', false);}
function disableProcesar(){$('#procesar').attr('disabled', true);}
function enableBuscar(){$('#search').attr('disabled', false);}

function injectArticulos(articulos){
    for(let i = 0; i < articulos.length; i++){
        $('#tbody').append(
            '<tr>' +
            '<td>' + articulos[i]['cod_articulo']+ '</td>' +
            '<td>' + articulos[i]['nombre']+ '</td>' +
            '<td>' + articulos[i]['descripcion']+ '</td>' +
            '<td>' + articulos[i]['precio']+ '</td>' +
            '<td>' + articulos[i]['descuento']+ '</td>' +
            '<td>' + articulos[i]['iva']+ '</td>' +
            '<td><input type="number"  id="cod_articulo-' + articulos[i]['cod_articulo'] + '" name="cod_articulo-' + articulos[i]['cod_articulo'] + '" min="0" step="1" value="0"></td>' +
            '</tr>');
    }
}

function injectClientes(clientes){
    for(let i = 0; i < clientes.length; i++){
        $('#cod_cliente').append('<option value="' + clientes[i]['cod_cliente'] + '">' + clientes[i]['cod_cliente'] + '-' + clientes[i]['cif_dni'] + '</option>');
    }
}