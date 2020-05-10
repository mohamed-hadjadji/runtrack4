$(document).ready(function () {
   $("#searchBox").keyup(function () {

    var query = $("#searchBox").val();
    console.log(query);



    if (query.length > 0) {
      console.log(query.length);
      $.ajax(
      {
        url: 'js/search.php',
        method: 'GET',
        data: {
          search: 1,
          q: query

        },
        success: function (data) 
        {
          $("#response").html(data);

        },
        dataType: 'text'
      }
        );
              }
   });

  $(document).on('click', 'li', function () {
    var film = $(this).text();
    $("#searchBox").val(film);
    $("#response").html("");
                         });

                });