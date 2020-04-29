/**Para Activar las Funciones de DataTable */
$('#indexTable').DataTable({
    "language": { "url": "dataTables/Spanish.json" },
    "paging": false,
    "info": false,
    responsive: true
});
/**Para OverLay Flash Messages */
$('#flash-overlay-modal').modal();
/**Tooltips Bootstrap */
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
/**Validación para Eliminar los Controles */
function info(frm) {
    Swal.fire({
        title: '¿Estas Seguro?',
        text: "¡Esto va a Eliminar Permanentemente el Control!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#c82333',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
        if (result.value) {
            frm.parentNode.submit();
          }

      });
};
