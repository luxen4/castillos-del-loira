<section class="text-center mt-10">
   <!-- Botón Etapa anterior -->
   <a href="<?php echo isset($etapaAnterior) ? $etapaAnterior['url'] : '../../index.php'; ?>"
      class="inline-block px-6 py-3 <?php echo isset($etapaAnterior) ? $etapaAnterior['bgColor'] . ' ' . $etapaAnterior['textoColor'] . ' ' . $etapaAnterior['hoverColor'] : 'bg-gray-300 text-gray-800 hover:bg-gray-400'; ?> font-semibold rounded-lg shadow transition">
      <?php echo isset($etapaAnterior) ? $etapaAnterior['texto'] : '🏠 Volver al inicio'; ?>
   </a>

   <!-- Botón Etapa siguiente -->
   <a href="<?php echo isset($etapaSiguiente) ? $etapaSiguiente['url'] : '../../index.php'; ?>"
      class="inline-block px-6 py-3 <?php echo isset($etapaSiguiente) ? $etapaSiguiente['bgColor'] . ' ' . $etapaSiguiente['textoColor'] . ' ' . $etapaSiguiente['hoverColor'] : 'bg-gray-300 text-gray-800 hover:bg-gray-400'; ?> font-semibold rounded-lg shadow transition">
      <?php echo isset($etapaSiguiente) ? $etapaSiguiente['texto'] : '🏠 Volver al inicio'; ?>
   </a>
</section>