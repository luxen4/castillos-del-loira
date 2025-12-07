<!-- ✅ FOOTER -->
<footer class="mt-1 py-6 bg-emerald-700 text-emerald-100 text-center text-sm">
  
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 
              flex flex-col md:flex-row 
              items-center md:items-start 
              justify-between gap-6">

    <!-- Columna izquierda -->
    <div class="text-center md:text-left">
      <p class="font-medium">© <?= date("Y") ?> — Val de Loire</p>
      <p class="mt-1"><?= $title; ?></p>

      <!-- Tu info -->
      <p class="mt-1 text-sm text-gray-200">
        Web creada por 
        <a href="/val-de-loire/contacto.html" 
           class="underline hover:text-white font-semibold">
          Adrián Laya García
        </a>
      </p>
    </div>

    <!-- Enlaces -->
    <div class="flex items-center gap-4 text-lg">
      <a href="https://www.facebook.com/" target="_blank" class="hover:text-white">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/" target="_blank" class="hover:text-white">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="hover:underline">Privacidad</a>
      <a href="/val-de-loire/index.php" class="underline hover:text-white">Home</a>
    </div>



  </div>
</footer>
