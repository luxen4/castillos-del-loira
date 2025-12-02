  <!-- ✅ FOOTER -->
  <footer class="mt-1 py-4 bg-blue-700 text-blue-100 text-center pt-6 pb-6 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

      <!-- Columna izquierda -->
      <div>
        <p class="font-medium">© <?= date("Y") ?> — Loire à Vélo (guía no oficial)</p>
        <?php /* <p class="mt-1">Alojamientos, Valle del Loira</p> */ ?>

        <!-- Tu info -->
        <p class="mt-3 text-sm text-gray-200">
          Web creada por <a id="contacto" href="/val-de-loire/contacto.html" class="underline hover:text-white font-semibold">
            Adrián Laya García
          </a>
        </p>
        <?php /* <p>© <?= date("Y") ?> — Diseñado por Adrián Laya García</p> */ ?>


      </div>

      <!-- Enlaces -->
      <div class="flex items-center gap-4">
        <a href="https://www.facebook.com/" target="_blank" class="hover:text-emerald-700"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="hover:text-emerald-700"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:underline">Privacidad</a><?php /* href="/val-de-loire/privacy.php" */ ?>
        <a href="/val-de-loire/index.php" class="underline hover:text-white">Home</a>
        <?php /* <a href="#" class="underline hover:text-white">Aviso legal</a> */ ?>
      </div>

    </div>
  </footer>