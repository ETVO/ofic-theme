import 'bootstrap';

(jQuery)(
  function ($) {
    $(document.body).ready(function () {
      if ($('#carouselMAIS')) {
        $('#carouselMAIS').append(`
        <style>#carouselEditButtons { display: none; }</style>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMAIS" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMAIS" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselMAIS" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Música">M</button>
          <button type="button" data-bs-target="#carouselMAIS" data-bs-slide-to="1" aria-label="Arte">A</button>
          <button type="button" data-bs-target="#carouselMAIS" data-bs-slide-to="2" aria-label="Inclusão">I</button>
          <button type="button" data-bs-target="#carouselMAIS" data-bs-slide-to="3" aria-label="Sustentabilidade">S</button>
        </div>
        `)
      }
    });
  }
)