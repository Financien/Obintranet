$(function () {
  // page is now ready, initialize the calendar...

  $("#homeCalendar").fullCalendar({
    themeSystem: "bootstrap4",
    defaultView: "listWeek",
    locale: "nl"
  });


  $("#eventCalender").fullCalendar({
    defaultView: 'month',
    locale: "nl",
    height: 1650
  });
  $('.jubilarrisen').slick({
    infinite: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });

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
        "sSortAscending": ": activeer om kolom oplopend te sorteren",
        "sSortDescending": ": activeer om kolom aflopend te sorteren"
      }
    }
  });
});