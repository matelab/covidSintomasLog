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
