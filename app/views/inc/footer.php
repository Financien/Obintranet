</main>
<footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/nl.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script src="js/main.js"></script>

<script>
$(document).ready( function () {
    $('.table').DataTable({
      "language": {
    "sProcessing": "Bezig...",
    "sLengthMenu": "_MENU_ resultaten weergeven",
    "sZeroRecords": "Geen resultaten gevonden",
    "sInfo": "_START_ tot _END_ van _TOTAL_ resultaten",
    "sInfoEmpty": "Geen resultaten om weer te geven",
    "sInfoFiltered": " (gefilterd uit _MAX_ resultaten)",
    "sInfoPostFix": "",
    "sSearch": "Zoeken:",
    "sEmptyTable": "Geen resultaten aanwezig in de tabel",
    "sInfoThousands": ".",
    "sLoadingRecords": "Een moment geduld aub - bezig met laden...",
    "oPaginate": {
        "sFirst": "Eerste",
        "sLast": "Laatste",
        "sNext": "Volgende",
        "sPrevious": "Vorige"
    },
    "oAria": {
        "sSortAscending":  ": activeer om kolom oplopend te sorteren",
        "sSortDescending": ": activeer om kolom aflopend te sorteren"
    }
}
    });

      $("#eventCalender").fullCalendar({
            header: {
                left:   'title',
                center: 'today',
                right:  ' prev,next'
            },
            defaultView: 'month',
            themeSystem: "bootstrap4",
            locale: "nl"
        });
} );
</script>