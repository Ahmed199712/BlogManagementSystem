$(document).ready(function(){

    // Scroll Down
    $('.scrollToDown i').click(function(){
        $('body,html').animate({
            scrollTop : $(window).height() - 60
        },1500);
    });

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

    // Show Search Form When Click On Live Search Button ...
    $('.live-search').click(function(e){
        e.preventDefault();

        $('.live-search-form').toggleClass('animateLeft');

    });

});