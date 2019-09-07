function teste(){
   alert('funciona');

}

$(document).ready(function(){
   $('#cpf').mask('000.000.000-00');
   $('#cep').mask('00000-000');
   $('#telefone').mask('(00) 0000-0000');

});