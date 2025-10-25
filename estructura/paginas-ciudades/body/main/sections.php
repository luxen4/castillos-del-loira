
      <?php
      $sections = [
          "paseos",
          "actividades",
          "acontecimientos",
          "gastronomia",
          "restaurantes",
          "fin-de-semana",
          "alojamientos",
          "galeria",
          "transportes"
      ];

      $i = 0;
      foreach ($sections as $slug_section_main_title) {
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/index-section-generico.php";
          $i++;

          // 💰 Bloque publicitario cada 3 secciones
          if ($i % 3 == 0) {
              echo '<div class="bg-gray-100 border rounded-2xl p-4 my-8 text-center shadow-sm">
                      <p class="text-gray-500 text-sm mb-2">Publicidad</p>
                      <div class="bg-white rounded-lg h-44 flex items-center justify-center">
                          <span class="text-gray-400 text-sm">Espacio publicitario (300x250)</span>
                                
                      </div>
                  </div>';
          }
      }
      ?><?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico.php"; ?>