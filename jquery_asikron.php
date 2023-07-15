<button class="btn_show btn btn-secondary">Show Update</button>
<div id="artikelContainer"></div>
<script>
  $(function() {
    $('.btn_show').click(function() {
      var link_show = 'artikel-01.php';
      $.ajax({
        url: link_show,
        success: function(response) {
          $('#artikelContainer').html(response);
        },
        error: function() {
          alert('Gagal memuat artikel.');
        },
      });
    });
  });
</script>