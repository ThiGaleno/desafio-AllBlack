function teste(){
   alert('funciona');

}

$(document).ready(function(){
   $('#cpf').mask('000.000.000-00');
   $('#cep').mask('00000-000');
   $('#telefone').mask('(00) 0000-0000');

});


//preenche os dados do modal de confirmação de exclusão
$(document).ready(function(){
   $(document).on('click', '.view-data', function(){
      let idEdit = $(this).attr('id')
      let nome = $(this).attr('name')
      let linkRoute = "delete/" + idEdit
      $('#modalBody').html(nome)
      $('#idEditModal').attr("href", linkRoute)
   });
});