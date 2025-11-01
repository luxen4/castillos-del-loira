<?php
function crearFigure($src, $alt, $pie, $fuente_url, $fuente_texto, $reverse = false) {

  $rotate = $reverse ? 'style="transform: rotateY(180deg);"' : '';

  return '
    <figure class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 bg-white">
      <div class="relative w-full h-80 md:h-96">
        <img
          src="'. $src .'"
          alt="'. $alt .'"
          '. $rotate .'
          class="absolute inset-0 w-full h-full object-cover object-center"
        >
      </div>
      <figcaption class="bg-gray-100 text-sm text-gray-600 text-center py-2">
        '. $pie .'<br>
        Fuente: <a href="'. $fuente_url .'" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">'
        . $fuente_texto .'</a>
      </figcaption>
    </figure>
  ';
}
?>