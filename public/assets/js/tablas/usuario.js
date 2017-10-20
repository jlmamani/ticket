$('#stand').dataTable().fnDestroy();
var t = $('#stand').DataTable({
  'info': true,
  'filter': true,
  'stateSave': true,
  'ajax': {
    "url":url+'/inicio/getU',
    "type":"POST",
    "dataSrc": function(data){
            // alert(data[5].nombre);
            var suma = 0;
            for (var i = 0; i <= data.length - 1; i++) {
              suma += parseFloat(data[i].id);
            }
          return data;          
        }
  },
'columns': [
    {
      "orderable": true,
      render:function(data, type, row){
       return '';
      }
    },
    {data: 'user_name'},
    {data: 'rol'},
    {
      "orderable": true,
      render:function(data, type, row){
        return row.nombre+' '+row.ap_pat+' '+row.ap_mat;
      }
    },    
    {
      "orderable": true,
      render:function(data, type, row){
        return ' ';
      }
    }
  ],
  language: {
    url: url+'/assets/js/Spanish.json'
  }
});
t.on( 'order.dt search.dt', function () {
    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
    } );
} ).draw();


//con esta funcion pasamos los paremtros a los text del modal.
selPersona = function(id, idb, idl, ids, num, size, des,price){
  $('#id').val(id);
  $('#bloque').val(idb);
  $('#nivel').val(idl);
  $('#code_stand').val(ids);
  $('#num').val(num);
  $('#size').val(size);
  $('#desc').val(des);
  $('#price').val(price);
  // $('#mcboOtro value(3)').prop('selected', true);
  $('[name=mcboOtro]').val(9);
};

$('#mbtnUpdPerona').click(function(){
  var id = $('#id').val();
  var idb = $('#bloque').val();
  var idl = $('#nivel').val();
  var ids = $('#code_stand').val();
  var num = $('#num').val();
  var size = $('#size').val();
  var des = $('#desc').val();
  var price = $('#price').val();
  var stat = $('#stado').val();
  $.post(baseurl+"admin/up_stand", 
  {
    id:id,
    bloque:idb,
    nivel:idl,
    codigoStand:ids,
    numero:num,
    size:size,
    desc:des,
    price:price,
    stat:stat
  },      
  function(data){
    if (data == 1) {
      
      $('#mbtnCerrarModal').click();

      location.reload();
    }
  });
});


