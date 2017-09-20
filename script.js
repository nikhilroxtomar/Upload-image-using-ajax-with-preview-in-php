$(document).ready(function(){
  $("#ajax-form").submit(function(e){
    e.preventDefault();

    $.ajax({
      url: "upload.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      processData: false,
      beforeSend: function(){
        $(".photo-action").html('<img src="upload.gif">');
      },
      success: function(data){
        $(".photo-action").html("");
        $(".photo-preview").html(data);
      },
      error: function(xhr){
        $(".photo-action").html('xhr.statusText + xhr.responseText');
      }

    });
  });
});
