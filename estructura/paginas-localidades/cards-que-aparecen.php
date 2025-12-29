<style>
/* Estado inicial */
.card-animate {
  opacity: 0;
  transform: translateX(0);
  transition: all 0.8s ease-out;
}

/* Entra desde la izquierda */
.card-left {
  transform: translateX(-120px);
}

/* Entra desde la derecha */
.card-right {
  transform: translateX(120px);
}

/* Cuando es visible */
.card-visible {
  opacity: 1;
  transform: translateX(0);
}
</style>

<section id="<?= $section['id'] ?>" class="my-20 overflow-hidden">

  <h2 class="text-3xl font-bold text-emerald-700 mb-4 text-center">
    <?= $section['titulo'] ?>
  </h2>

  <p class="text-center max-w-3xl mx-auto text-gray-600 mb-10">
    <?= $section['descripcion'] ?>
  </p>

  <div class="grid md:grid-cols-3 gap-8">
    <?php foreach ($items as $index => $item): 
      $direction = ($index % 2 === 0) ? 'card-left' : 'card-right';
    ?>
      <article class="card-animate <?= $direction ?> bg-white rounded-2xl shadow-lg overflow-hidden">

        <img src="<?= $item['imagen']['src'] ?>"
             alt="<?= $item['imagen']['alt'] ?>"
             class="h-48 w-full object-cover">

        <div class="p-5">
          <h3 class="text-xl font-bold text-emerald-700 mb-2">
            <?= $item['titulo'] ?>
          </h3>

          <p class="text-gray-600 text-sm mb-4">
            <?= $item['descripcion'] ?>
          </p>

          <p class="text-xs text-gray-400">
            Fuente:
            <a href="<?= $item['imagen']['fuente'] ?>" target="_blank"
               class="underline hover:text-emerald-600">
              <?= $item['imagen']['fuente_texto'] ?>
            </a>
          </p>
        </div>

      </article>
    <?php endforeach; ?>
  </div>

  <p class="mt-10 text-center text-gray-600 italic">
    <?= $section['tip'] ?>
  </p>

</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card-animate");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("card-visible");
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.3
  });

  cards.forEach(card => observer.observe(card));
});
</script>