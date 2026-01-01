<?php
$title = "Alojamientos";
$descripcion = "Descubre alojamientos recomendados en Nantes, Angers, Saumur, Tours, Amboise, Blois y Orleans. Hoteles, casas rurales y estancias únicas en el Valle del Loira.";
$imagenHero = "https://tusitio.com/img/alojamientos-loira.jpg";
$twitter = "@tuusuario";

?>

<!DOCTYPE html>
<html lang="es">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/head-generico.php"; ?>

<?php
// schemas-head.php
// Variables necesarias
$title = "Alojamientos en el Valle del Loira";
$descripcion = "Descubre alojamientos recomendados en Nantes, Angers, Saumur, Tours, Amboise, Blois y Orleans. Hoteles, casas rurales y estancias únicas en el Valle del Loira.";
$imagenHero = "https://tusitio.com/img/alojamientos-loira.jpg";
$urlPagina = "https://tusitio.com/alojamientos.php";
$twitter = "@tuusuario";
?>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "<?php echo $urlPagina; ?>#website",
      "url": "<?php echo $urlPagina; ?>",
      "name": "<?php echo $title; ?>",
      "description": "<?php echo $descripcion; ?>",
      "publisher": {
        "@type": "Organization",
        "name": "Tu Nombre o Empresa",
        "logo": {
          "@type": "ImageObject",
          "url": "https://tusitio.com/img/logo.png"
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "<?php echo $urlPagina; ?>#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "https://tusitio.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Valle del Loira",
          "item": "https://tusitio.com/val-de-loire/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Alojamientos",
          "item": "<?php echo $urlPagina; ?>"
        }
      ]
    },
    {
      "@type": "Place",
      "@id": "<?php echo $urlPagina; ?>#place",
      "name": "<?php echo $title; ?>",
      "description": "<?php echo $descripcion; ?>",
      "image": "<?php echo $imagenHero; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Valle del Loira",
        "addressCountry": "FR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 47.2682,
        "longitude": 0.6891
      }
    },
    {
      "@type": "LodgingBusiness",
      "@id": "<?php echo $urlPagina; ?>#lodging",
      "name": "<?php echo $title; ?>",
      "description": "<?php echo $descripcion; ?>",
      "image": "<?php echo $imagenHero; ?>",
      "url": "<?php echo $urlPagina; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Valle del Loira",
        "addressCountry": "FR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 47.2682,
        "longitude": 0.6891
      },
      "sameAs": [
        "https://twitter.com/<?php echo ltrim($twitter, '@'); ?>",
        "https://www.facebook.com/tuempresa",
        "https://www.instagram.com/tuempresa"
      ]
    }
  ]
}
</script>


<body class="bg-gray-50 text-gray-800">


  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/header-inicio-faqs.php"; ?>

  <!-- 🔹 Hero -->
  <section class="container mx-auto px-1 py-12 text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-emerald-700">Encuentra tu alojamiento ideal</h2>
    <p class="mt-4 text-lg text-gray-600">Hoteles, casas rurales y experiencias únicas en el Valle del Loira.</p>
  </section>
<main class="container mx-auto px-6">
  <div class="lg:grid lg:grid-cols-[250px_1fr_250px] lg:gap-6 relative">

    <!-- Aside izquierdo -->
    <aside class="hidden lg:block bg-white shadow-lg rounded-r-lg p-4 space-y-4 sticky top-32 h-fit">
      <h4 class="font-bold text-emerald-700 mb-2">Publicidad</h4>
      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?hotel" alt="Publicidad 1" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Hotel destacado</p>
      </a>
      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?loire,castle" alt="Publicidad 2" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Tour Valle del Loira</p>
      </a>
    </aside>

    <!-- Contenido principal -->
    <div class="space-y-12">
      
      <!-- Ejemplo con Nantes -->
      <section>
        <h3 class="text-2xl font-bold text-emerald-600 mb-6">🏙️ Nantes</h3>
        <div class="grid md:grid-cols-3 gap-6">

          <!-- Hotel 1 -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
            <img src="img/alojamientos/nantes-hotel1.jpg" alt="Hotel en Nantes" class="w-full h-40 object-cover">
            <div class="p-4">
              <h4 class="font-semibold text-lg">Hotel 1 Nantes</h4>
              <p class="text-sm text-gray-600">Descripción breve del alojamiento.</p>
              <div class="mt-3 flex gap-3 text-sm">
                <a href="#" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
                <a href="#" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
              </div>
            </div>
          </div>

          <!-- Hotel 2 -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
            <img src="img/alojamientos/nantes-hotel2.jpg" alt="Hotel en Nantes" class="w-full h-40 object-cover">
            <div class="p-4">
              <h4 class="font-semibold text-lg">Hotel 2 Nantes</h4>
              <p class="text-sm text-gray-600">Descripción breve del alojamiento.</p>
              <div class="mt-3 flex gap-3 text-sm">
                <a href="#" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
                <a href="#" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
              </div>
            </div>
          </div>

          <!-- Hotel 3 -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
            <img src="img/alojamientos/nantes-hotel3.jpg" alt="Hotel en Nantes" class="w-full h-40 object-cover">
            <div class="p-4">
              <h4 class="font-semibold text-lg">Hotel 3 Nantes</h4>
              <p class="text-sm text-gray-600">Descripción breve del alojamiento.</p>
              <div class="mt-3 flex gap-3 text-sm">
                <a href="#" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
                <a href="#" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Repite para otras ciudades -->

            <div class="text-center">
        <img src="data:image/svg+xml,%3Csvg fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 382 302' width='56' height='64'%3E%3Cpath d='M98.273 125.538c-5.904 0-10.574 4.553-10.574 10.574s4.67 10.574 10.574 10.574 10.574-4.553 10.574-10.574-4.67-10.574-10.574-10.574zm60.37-51.987h-37.392V55.594h33.329V37.637h-33.329V19.925h36.775V1.84h-56.944v89.795h57.561V73.551zm-41.668 54.2c5.904 0 10.574-4.553 10.574-10.574s-4.67-10.574-10.574-10.574-10.575 4.553-10.575 10.574 4.671 10.574 10.575 10.574zM38.498 93.475c13.042 0 24.478-6.638 31.243-16.85v15.01h17.713V41.701H39.977v17.222h19.925c-1.84 9.223-9.968 16.362-19.808 16.362-10.947 0-19.808-8.862-19.808-21.776V40.222c0-12.67 9.468-22.02 22.754-22.02 10.33 0 19.553 5.659 22.627 13.903l18.702-6.52C79.199 9.84 62.476 0 43.168 0 18.818 0 .606 16.361.606 40.222v13.287c.01 22.988 16.978 39.966 37.892 39.966zm172.909-66.401h-19.903v28.69h19.903v-28.69zM235.396 1.84h-68.147v18.085h68.147V1.84zM33.829 195.887h20.17v-34.063l33.817-55.721H65.061l-21.275 36.775-21.032-36.775H0l33.829 55.966v33.818zM211.407 62.923h-19.903v28.68h19.903v-28.68zM364.87 195.887l-24.478-34.318c11.936-3.692 20.297-14.149 20.297-26.935 0-16.234-13.403-28.542-30.382-28.542h-11.808v18.201h11.074c5.904 0 10.457 4.671 10.457 10.819 0 6.149-4.553 10.83-10.457 10.83h-11.074v17.222l21.893 32.723h24.478zm-99.964 14.35h-29.648v89.912h29.648c27.796 0 47.477-19.063 47.477-44.892 0-25.829-19.681-45.02-47.477-45.02zm1.595 71.827h-11.074v-53.753h11.074c15.01 0 25.212 11.563 25.212 26.935 0 15.372-10.202 26.818-25.212 26.818zm78.104-17.956h33.328v-17.957h-33.328v-17.712h36.775v-18.074h-56.945v89.784h57.562v-18.085h-37.392v-17.956zm-32.137-98.582-10.426-14.776 10.287-14.946-10.425-14.766 10.298-14.935-20.797.01-10.298 15.095 10.436 14.777-10.298 14.946 10.436 14.765-10.297 14.957 11.074 15.372h21.02l-11.308-15.542 10.298-14.957zm-45.924-4.564v-54.859h-20.053v55.232c0 10.329-7.383 17.957-17.467 17.957-10.085 0-17.468-7.628-17.468-17.957v-55.232h-20.052v54.859c0 21.159 15.872 36.776 37.52 36.776 21.648 0 37.52-15.627 37.52-36.776zM156.452 265.586c0 10.33-7.383 17.957-17.468 17.957-10.084 0-17.467-7.627-17.467-17.957v-55.232h-20.053v54.86c0 21.159 15.872 36.775 37.52 36.775 21.649 0 37.52-15.616 37.52-36.775v-54.86h-20.052v55.232zm-116.475 1.851h19.925c-1.84 9.223-9.968 16.361-19.808 16.361-10.946 0-19.807-8.861-19.807-21.775v-13.287c0-12.67 9.467-22.021 22.754-22.021 10.33 0 19.553 5.66 22.627 13.904l18.701-6.521c-5.17-15.744-21.892-25.584-41.2-25.584-24.35 0-42.563 16.361-42.563 40.222v13.287C.606 285.022 17.584 302 38.488 302c13.042 0 24.478-6.638 31.244-16.85v15.01h17.712v-49.935H39.977v17.212z' fill='%23F53'/%3E%3Cpath d='M132.102 104.252v18.946c14.765 0 26.446 12.053 26.446 27.797s-11.681 27.797-26.446 27.797c-14.755 0-26.446-12.053-26.446-27.797h-20.67c0 26.201 20.915 46.743 47.105 46.743 26.201 0 47.105-20.542 47.105-46.743 0-26.202-20.893-46.743-47.094-46.743zm82.497 148.377c2.978-2.691 7.968-7.191 7.968-15.435 0-8.245-4.99-12.744-7.968-15.436a9.787 9.787 0 0 0-.373-.33c-1.489-1.563-1.744-3.808-1.776-4.872v-6.319h-20.201v8.404h.01c0 .107-.01.202-.01.309 0 8.244 4.989 12.744 7.967 15.435 2.139 1.936 2.139 2.032 2.139 2.809 0 .776 0 .872-2.139 2.808-2.861 2.585-7.574 6.862-7.925 14.532h-.021c0 .148-.021.287-.021.425 0 .085.01.16.01.234 0 .085-.01.16-.01.234 0 .149.01.287.021.426h.021c.351 7.67 5.064 11.946 7.925 14.531 2.139 1.936 2.139 2.032 2.139 2.808 0 .777 0 .873-2.139 2.809-2.978 2.691-7.967 7.191-7.967 15.435 0 .107 0 .213.01.309h-.01v8.404h20.201v-6.319c.032-1.053.287-3.308 1.776-4.872.117-.107.234-.213.373-.33 2.978-2.691 7.968-7.191 7.968-15.436 0-8.244-4.99-12.744-7.968-15.435-1.904-1.713-2.117-1.989-2.138-2.564.021-.574.234-.851 2.138-2.564z' fill='%23F53'/%3E%3C/svg%3E" alt="Castillo del Loira" class="rounded-lg shadow">
        <p class="text-gray-500 text-xs mt-2 inline-flex items-center justify-center gap-1">
          🤝 <span>Colabora con nuestra web mediante estos enlaces</span>
        </p>
        <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

      </div>
    </div>

    <!-- Aside derecho -->
    <aside class="hidden lg:block bg-white shadow-lg rounded-l-lg p-4 space-y-4 sticky top-32 h-fit">
      <h4 class="font-bold text-emerald-700 mb-2">Patrocinado</h4>
      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?restaurant" alt="Publicidad 3" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Restaurante recomendado</p>
      </a>
      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?wine,loire" alt="Publicidad 4" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Vinos del Loira</p>
      </a>
    </aside>

  </div>
</main>



  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/footer/footer-generico.php"; ?>

  </footer>

  <script>
    feather.replace();
  </script>
</body>

</html>