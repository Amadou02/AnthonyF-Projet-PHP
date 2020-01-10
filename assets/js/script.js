$(function(){
   $('iframe').parent('p').wrap('<div class="container-fluid"></div>');
   $('.gallery_box_single').wrap('<div class="carousel slide" data-ride="carousel" role="listbox"></div>');
   $('.gallery_box_single').addClass('carousel-inner');
   $('.img:first-child').addClass('active');
   //ajoute sur les balises avec la classe img la classe carousel-item
   $('.img').addClass('carousel-item p-5');
   //ajoute les classes sur les balise img
   $('.img img').addClass('w-100 d-block img-responsive');
   //englobe avec une div les éléments p 
   $('.img p').wrap('<div class="carousel-caption d-none d-md-block"></div>');
   //ajoute les éléments après l'élément ave la classe pour les contrôles sur le carousel 
   $('.gallery_box_single').append('<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>');
   //ajoute un bouton sur le formulaire
   $('form').append('<input class="btn btn-outline-dark mt-3" type="submit" value="Envoyer">');
   $('.form').attr('action', '4.html');   
});
