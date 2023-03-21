//Ponemos en false el automático del
$(document).ready(function() {
    const carousels = $('.carousel');

// Iterar sobre los elementos y aplicar la configuración
carousels.each(function() {
  $(this).carousel({
    interval: false
  });
});
  });
  
  //Función para filtrar por nombre y mostrar la indicada en el carrusel
  function searchSkin() {
    var searchValue = document.getElementById("searchInput").value.toLowerCase();
    var slides = document.querySelectorAll("#carouselExampleIndicators .carousel-item");
    for (var i = 0; i < slides.length; i++) {
        var slide = slides[i];
        var skinName = slide.getAttribute("data-skin-name").toLowerCase();
        if (skinName.includes(searchValue)) {
            slide.style.display = "block";
        } else {
            slide.style.display = "none";
        }
    }
}

// Manejador de evento para el envío del formulario de búsqueda
document.getElementById("searchForm").addEventListener("submit", function(event) {
    event.preventDefault();
    searchSkin();
});