$('#stand').dataTable().fnDestroy();

var t = $('#stand').DataTable({
  'info': true,
  'filter': true,
  'stateSave': true,
  'ajax': {
    "url":url+'/inicio/getN',
    "type":"POST",
    "dataSrc": function(data){
            // alert(data[5].nombre);
            var suma = 0;
            for (var i = 0; i <= data.length - 1; i++) {
              suma += parseFloat(data[i].id);
            }
          return data;          
        }
  },initComplete: function() {
              var div = $('#stand_wrapper');
              div.find("#stand_length").append("Estado<select id='idE' name='idE' class='form-control' style='width:auto;' required><option></option><option value='Publicado'>Publicado</option><option value='Borrador'>Borrador</option><option value='Oculto'>Oculto</option></select>");
              this.api().column(3).each(function() {
                  var column = this;
                  console.log(column.data());
                  $('#idE').on('change', function() {
                      var val = $(this).val();
                      column.search(val ? '^' + val + '$' : '', true, false)
                          .draw();
                  });
              });
          },
'columns': [
    {
      "orderable": true,
      render:function(data, type, row){
       return '';
      }
    },
    {data: 'titulo'},
    {data: 'fecha'},    
    {
      "orderable": true,
      render:function(data, type, row){
        if(row.estado =='p')
          return 'Publicado';
        if(row.estado =='b')
          return 'Borrador';
        if(row.estado =='o')
          return 'Oculto';
        return '';
      }
    },
    {
      "orderable": true,
      render:function(data, type, row){
        if(row.prioridad =='1')
          return 'Normal';
        if(row.prioridad =='2')
          return 'Alta';
        if(row.prioridad =='3')
          return 'Muy Alta';
      }
    },
    {data: 'autor'},
    {
      "orderable": true,
      render:function(data, type, row){
        var salida = '<ul class="list-inline"><li class="btn btn-sm btn-icon btn-pure btn-primary" style="display: inline;"><i class="icon md-border-color" aria-hidden="true" title="Editar" onClick="editar(\''+row.id_noticia+'\');"></i></li>';
        if(row.estado != 'o'){
          salida = salida + '<li class="btn btn-sm btn-icon btn-pure btn-success" style="display: inline;" data-toggle="modal" data-target="#noticia"><i class="icon md-format-valign-top" aria-hidden="true"  title="Prioridad" onClick="prioridad(\''+row.id_noticia+'\');"></i></li>';
          salida = salida + '<li class="btn btn-sm btn-icon btn-pure btn-danger" style="display: inline;" data-toggle="modal" data-target="#ocultar"><i class="icon md-block-alt" aria-hidden="true"  title="ocultar" onClick="ocultar(\''+row.id_noticia+'\');"></i></li>';
        }
        salida = salida + '</ul>';;
        return salida;
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

$.fn.dataTable.ext.errMode = 'none';
 


editar = function(id){
  location.href=url+'inicio/editar_noticia/'+id;
};
prioridad = function(id){
  $('#id').val(id);
};
$('#up_prioridad').click(function(){
  var id = $('#id').val();
  var prioridad = $('#prioridad').val();
  $.post(url+"inicio/up_prioridad", 
  {
    id:id,
    prioridad:prioridad
  },      
  function(data){
    $('#mbtnCerrarModal').click();
      location.reload();
  });
});
ocultar = function(id){
  $('#id_noticia').val(id);
};
$('#ocultar_noticia').click(function(){
  var id = $('#id_noticia').val();
  $.post(url+"inicio/ocultar", 
  {
    id:id,
  },      
  function(data){
    $('#mbtnCerrarModal').click();
      location.reload();
  });
});
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




