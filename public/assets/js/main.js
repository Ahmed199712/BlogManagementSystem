$(document).ready(function(){

    // Image Preview ...
    $(".image").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('.image-preview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(this.files[0]);
          }
    });

    $(".another-image").change(function() {
      if (this.files && this.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function(e) {
            $('.another-image-preview').attr('src', e.target.result);
          }
          
          reader.readAsDataURL(this.files[0]);
        }
  });

});