$(document).ready(function (){

  // hides the main search form
  $('#searchForm').hide();
  $('#contentArena').hide();
  $('#nav-tag').hide();
  $('#searchresult').hide();

  // get the value of current search form and then display the main search form
  $('#search').keyup(function () {

    var search = $('#search').val();
    $('#searchForm').show(function () {
      $('#change').html("<input type='text' class='form-control' id='valueMain' name='search' value='' autofocus='true'>");
      $('#valueMain').val(search);
      $('#nav-tag').show(500);
    });
    fetchResult();
    $('#contentArena').show();
    $('#mainArea').hide();

  });

  $('#searchForm2').validate({
    rules: {
      "search": {required: true}
    },
    message: {
      "search": ""
    },
    submitHandler: function(){
      var that = $('#searchForm2'),
          url = that.attr('action'),
          type = that.attr('method'),
          data = {};

      that.find('[name]').each(function(index, value){
        var that = $(this),
            name = that.attr('name'),
            value = that.val();

        data[name] = value;
      });

      $.ajax({
        url: 'search.php',
        type: 'POST',
        data: data
      })

      .done(function(data){
        $('#getResult').html(data);
        $('#contentArena').show();
        // console.log(data);
      })

      .fail(function(data){
        // console.log(data);
      })

      .always(function(data){
        console.log("complete")
      })
    }
  }); // ends search query

  function fetchResult() {
    $.ajax({
        url: 'search.php',
        type: 'GET',
        dataType: 'json',
        data: {searchMain: true}
    })
    .done(function(data) {
      console.log(data);
    })
    .fail(function(data) {
      console.log(data);
    })
    .always(function() {
        console.log('complete');
    });
  }

  

});
