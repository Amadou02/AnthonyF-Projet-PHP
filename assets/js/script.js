$(function(){
    //selectionne l'élément parent de la balise iframe et l'entoure d'une div
   $('iframe').parent('p').wrap('<div class="container-fluid"></div>');
   //selectionne la balise avec la classe et l'englobe d'une div avec une classe carousel
   $('.gallery_box_single').wrap('<div id="carouselControls" class="carousel slide" data-ride="carousel" role="listbox"></div>');
   //rajoute la classe sur les éléments avec la classe img
   $('.img').addClass('carousel-inner');
   //selectionne le premiers enfant de l'élément avec la classe img et lui ajoute la classe active
   $('.img:first-child').addClass('active');
   //ajoute sur les balises avec la classe img la classe carousel-item
   $('.img').addClass('carousel-item p-5');
   //ajoute les classes sur les balise img
   $('.img img').addClass('w-100 d-block img-responsive');
   //englobe avec une div les éléments p 
   $('.img p').wrap('<div class="carousel-caption d-none d-md-block"></div>');
   //ajoute les éléments après l'élément ave la classe pour les contrôles sur le carousel 
   $('.gallery_box_single').append('<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>')
   //ajoute un bouton sur le formulaire
   $('form').append('<input class="btn btn-dark mt-3" type="submit" value="Envoyer">');
});