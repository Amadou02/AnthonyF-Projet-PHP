$(function(){
   $('iframe').parent('p').wrap('<div class="container-fluid"></div>');
   $('.gallery_box_single').wrap('<div class="carousel slide" data-ride="carousel" role="listbox"></div>');
   $('.gallery_box_single').addClass('carousel-inner');
   $('.img:first-child').addClass('active');
   $('.img').addClass('carousel-item d-block');
   $('.img img').addClass('w-100');
   $('form').append('<input class="btn btn-outline-dark mt-3" type="submit" value="Envoyer">');
});
