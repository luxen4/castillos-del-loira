<section class="my-12">
  <h2 class="text-3xl font-bold text-emerald-600 text-center mb-6">📍 Localización</h2>

  <div class="flex justify-center">
    <div class="rounded-2xl overflow-hidden shadow-lg border-4 border-emerald-600 w-full hover:shadow-2xl transition-shadow duration-300">

      <iframe 
          src="<?= $src_google_maps; ?>" 
          class="w-full"
          height="450"
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
      </iframe>

    </div>
  </div>
</section>
