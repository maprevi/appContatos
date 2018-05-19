function confirmExcluir(id)
{
  swal({
      title: "Excluir",
      text: "Confirma a Exclusão do Registro Selecionado?",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: 'btn-success',
      confirmButtonText: 'OK',
      closeOnConfirm: false
   }, 
      function () {
         window.location.href = "{{ !! route('cliente.deletar' id) !! }}";     
      });
}