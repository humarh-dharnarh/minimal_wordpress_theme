jQuery(function($) {

  var ajaxurl = "../../wp-admin/admin-ajax.php";

  $('body').on('click', '.loadMore', function() {

    var page = 2;
    var data = {
      'action': 'load_posts_by_ajax',
      'page': page,
    };

    $.post({
      url: ajaxurl,
      data: data,
      type: 'POST',
      beforeSend : function() {
        $('#sloading').removeClass('fa-long-arrow-down').addClass('fa-spin fa-spinner');
      },
      success : function( response ) {

        if (response != "") {
          $('#sloading').removeClass(' fa-spin fa-spinner').addClass('fa-long-arrow-down');
          $('.ajaxPost').append(response);
          console.log(response);
          page++;
        } else {
          $('.loadMore').hide();
        }

      }
    });
  });

  $('#searcharticle').keyup( function() {

    var data = {
      'action': 'ajax_fetch',
      'keyword': $('#searcharticle').val(),
    };

    $.ajax({

      url: ajaxurl,
      data: data,
      type: 'POST',

      success: function( data ) {
        $('#searchresult').html(data);
      }

    });
  });

});