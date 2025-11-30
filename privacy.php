<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Política y Avisos — Val de Loire | Adrián Laya García</title>
  <meta name="description" content="Aviso legal, Política de Privacidad y Cookies de Val de Loire. Responsable: Adrián Laya García. Contacto: superlaya50@gmail.com" />
  <meta name="author" content="Adrián Laya García" />
  <meta name="robots" content="index,follow" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    html { scroll-behavior: smooth; }
    /* pequeña animación para el modal/menu */
    #mobileMenu { transition: transform .32s ease, opacity .32s ease; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

  <!-- Header -->
  <header class="bg-blue-700 text-white py-4 shadow-md relative">
    <div class="container mx-auto px-4 flex items-center justify-between">
      <a href="#top" class="flex items-center gap-3">
        <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-10 h-10 object-contain">
        <div>
          <h1 class="text-lg font-bold leading-tight">Val de Loire</h1>
          <p class="text-xs text-blue-200">Política y Avisos — Adrián Laya García</p>
        </div>
      </a>

      <!-- Botón hamburguesa -->
      <button id="menuBtn" class="lg:hidden flex flex-col gap-1.5 focus:outline-none">
        <span class="block w-6 h-0.5 bg-white transition-all"></span>
        <span class="block w-6 h-0.5 bg-white transition-all"></span>
        <span class="block w-6 h-0.5 bg-white transition-all"></span>
      </button>

      <!-- Nav (desktop) -->
      <nav id="mobileMenu" class="hidden lg:flex gap-6 items-center">
        <a href="#aviso" class="hover:underline">Aviso legal</a>
        <a href="#privacidad" class="hover:underline">Privacidad</a>
        <a href="#cookies" class="hover:underline">Cookies</a>
        <a href="#sobre-mi" class="hover:underline">Sobre mí</a>
        <a href="#contacto" class="hover:underline">Contacto</a>
      </nav>
    </div>
  </header>

  <!-- Mobile full-screen menu (hidden by default) -->
  <nav id="mobileOverlay" class="fixed inset-0 bg-blue-700 bg-opacity-95 text-white hidden z-50 flex flex-col items-center justify-center space-y-6 lg:hidden">
    <a href="#aviso" class="text-xl" onclick="toggleMenu()">Aviso legal</a>
    <a href="#privacidad" class="text-xl" onclick="toggleMenu()">Privacidad</a>
    <a href="#cookies" class="text-xl" onclick="toggleMenu()">Cookies</a>
    <a href="#sobre-mi" class="text-xl" onclick="toggleMenu()">Sobre mí</a>
    <a href="#contacto" class="text-xl" onclick="toggleMenu()">Contacto</a>
    <button class="mt-3 px-4 py-2 bg-white text-blue-700 rounded" onclick="toggleMenu()">Cerrar</button>
  </nav>

  <main id="top" class="container mx-auto px-4 py-10 space-y-8">

    <!-- Intro -->
    <section class="bg-white rounded-xl shadow p-6">
      <h2 class="text-2xl font-bold text-emerald-700 mb-2">Avisos legales y Política de Privacidad</h2>
      <p class="text-gray-600">Esta página recoge el Aviso Legal, la Política de Privacidad y la Política de Cookies de <strong>Val de Loire</strong>, sitio gestionado por <strong>Adrián Laya García</strong>. Si tienes dudas, contacta en <a href="mailto:superlaya50@gmail.com" class="text-blue-600 underline">superlaya50@gmail.com</a>.</p>
      <div class="mt-4 flex gap-3">
        <a href="#privacidad" class="px-4 py-2 bg-emerald-700 text-white rounded">Ver Privacidad</a>
        <a href="#cookies" class="px-4 py-2 border rounded">Ver Cookies</a>
      </div>
    </section>

    <!-- Aviso legal -->
    <section id="aviso" class="bg-white rounded-xl shadow p-6">
      <h3 class="text-xl font-semibold text-blue-600 mb-3">Aviso legal</h3>

      <p class="text-sm text-gray-700 mb-2"><strong>Responsable:</strong> Adrián Laya García.</p>
      <p class="text-sm text-gray-700 mb-2"><strong>Contacto:</strong> <a href="mailto:superlaya50@gmail.com" class="text-blue-600 underline">superlaya50@gmail.com</a></p>
      <p class="text-sm text-gray-700 mb-2"><strong>Actividad:</strong> Publicación de contenido turístico y guías del Valle del Loira.</p>

      <h4 class="mt-4 font-semibold">Condiciones de uso</h4>
      <p class="text-sm text-gray-700">El acceso y uso de este sitio web implica la aceptación de las presentes condiciones. El contenido se facilita con fines informativos; el autor no se hace responsable de errores, cambios en horarios o disponibilidad de servicios externos enlazados.</p>

      <h4 class="mt-4 font-semibold">Propiedad intelectual</h4>
      <p class="text-sm text-gray-700">Los textos, imágenes y código en este sitio son propiedad de su autor salvo donde se indique lo contrario. Queda prohibida la reproducción íntegra sin autorización.</p>
    </section>

    <!-- Política de Privacidad -->
    <section id="privacidad" class="bg-white rounded-xl shadow p-6">
      <h3 class="text-xl font-semibold text-blue-600 mb-3">Política de Privacidad</h3>
      <p class="text-sm text-gray-700 mb-2"><strong>Última actualización:</strong> <span id="fechaPrivacidad"></span></p>

      <h4 class="font-semibold mt-3">1. Responsable y datos de contacto</h4>
      <p class="text-sm text-gray-700">Responsable: <strong>Adrián Laya García</strong> — Correo: <a href="mailto:superlaya50@gmail.com" class="text-blue-600 underline">superlaya50@gmail.com</a>.</p>

      <h4 class="font-semibold mt-3">2. Datos que recopilamos</h4>
      <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1">
        <li>Datos que facilitas en formularios (nombre, correo, mensaje, datos del evento si aplica).</li>
        <li>Datos técnicos recopilados automáticamente: direcciones IP (temporal), navegador, dispositivo, páginas visitadas.</li>
      </ul>

      <h4 class="font-semibold mt-3">3. Finalidades</h4>
      <p class="text-sm text-gray-700">Responder consultas; publicar eventos sugeridos (si procede); mejorar el sitio; mostrar publicidad/afiliación relevante.</p>

      <h4 class="font-semibold mt-3">4. Legitimación</h4>
      <p class="text-sm text-gray-700">Consentimiento del usuario para formularios y consentimiento comercial para cookies publicitarias. Interés legítimo en analizar tráfico y mantener la web.</p>

      <h4 class="font-semibold mt-3">5. Cesiones y terceros</h4>
      <p class="text-sm text-gray-700">No se venden datos. Se pueden compartir con plataformas de publicidad y analítica (ej. Google, Amazon/afiliados) según consentimiento.</p>

      <h4 class="font-semibold mt-3">6. Conservación</h4>
      <p class="text-sm text-gray-700">Los datos se conservan el tiempo necesario para la prestación del servicio y atender obligaciones legales.</p>

      <h4 class="font-semibold mt-3">7. Derechos</h4>
      <p class="text-sm text-gray-700">Puedes solicitar acceso, rectificación, supresión, oposición, limitación y portabilidad escribiendo a <a href="mailto:superlaya50@gmail.com" class="text-blue-600 underline">superlaya50@gmail.com</a>. Responderé en un plazo máximo de 30 días.</p>

      <h4 class="font-semibold mt-3">8. Seguridad</h4>
      <p class="text-sm text-gray-700">Se adoptan medidas técnicas y organizativas razonables (HTTPS, acceso restringido). No obstante, ningún sistema es 100% infalible.</p>

      <h4 class="font-semibold mt-3">9. Menores</h4>
      <p class="text-sm text-gray-700">No se recopila información de menores de 14 años de forma intencionada. Si detectas datos de un menor, contacta para su eliminación.</p>

      <h4 class="font-semibold mt-3">10. Cambios</h4>
      <p class="text-sm text-gray-700">La política puede actualizarse; se indicará la última fecha de revisión en esta misma sección.</p>
    </section>

    <!-- Cookies -->
    <section id="cookies" class="bg-white rounded-xl shadow p-6">
      <h3 class="text-xl font-semibold text-blue-600 mb-3">Política de Cookies</h3>

      <p class="text-sm text-gray-700">Usamos cookies para mejorar la experiencia, medir visitas y, con tu consentimiento, personalizar publicidad y funciones. A continuación un resumen:</p>

      <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1 mt-3">
        <li><strong>Cookies técnicas:</strong> necesarias para el funcionamiento del sitio (no requieren consentimiento).</li>
        <li><strong>Cookies de análisis:</strong> (ej. Google Analytics) para medir uso y mejorar contenidos.</li>
        <li><strong>Cookies publicitarias:</strong> usadas por redes de anuncios y afiliación para mostrar contenido relevante.</li>
      </ul>

      <h4 class="font-semibold mt-3">Gestión de cookies</h4>
      <p class="text-sm text-gray-700">Puedes aceptar o rechazar las cookies mediante el banner. También puedes borrar cookies desde la configuración de tu navegador.</p>

      <div class="mt-4 flex gap-3">
        <button id="acceptCookies" class="px-4 py-2 bg-emerald-700 text-white rounded">Aceptar cookies</button>
        <button id="rejectCookies" class="px-4 py-2 border rounded">Rechazar cookies</button>
      </div>
    </section>

    <!-- Sobre mí -->
    <section id="sobre-mi" class="bg-white rounded-xl shadow p-6">
      <h3 class="text-xl font-semibold text-blue-600 mb-3">Sobre mí — Adrián Laya García</h3>
      <p class="text-sm text-gray-700">Soy el autor y mantenedor de este proyecto sobre el Valle del Loira. Escribo guías, rutas y contenidos turísticos con la intención de facilitar planes y experiencias a viajeros interesados en la región.</p>

      <p class="text-sm text-gray-700 mt-3">Si quieres colaborar, publicar un evento o proponer mejoras, escríbeme por correo o en LinkedIn.</p>

      <p class="mt-3 text-sm text-gray-700">
        Web creada por
        <a href="/val-de-loire/contacto.html" class="underline text-blue-600">Adrián Laya García</a>
        <span class="mx-2 text-gray-400">|</span>
        <a href="https://www.linkedin.com/in/adrianlaya/?originalSubdomain=es" target="_blank" class="underline text-blue-600">LinkedIn</a>
      </p>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="bg-white rounded-xl shadow p-6">
      <h3 class="text-xl font-semibold text-blue-600 mb-3">Contacto</h3>
      <p class="text-sm text-gray-700">¿Dudas o petición de eliminación de datos? Escribe a:</p>
      <p class="mt-2"><a href="mailto:superlaya50@gmail.com" class="text-blue-600 underline">superlaya50@gmail.com</a></p>

      <form id="contactForm" class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-3">
        <input id="name" type="text" placeholder="Nombre" class="p-3 border rounded" />
        <input id="email" type="email" placeholder="Email" class="p-3 border rounded" />
        <textarea id="message" rows="4" placeholder="Mensaje" class="p-3 border rounded md:col-span-2"></textarea>
        <div class="md:col-span-2 flex gap-3 items-center">
          <button type="button" id="sendBtn" class="px-4 py-2 bg-emerald-700 text-white rounded">Enviar</button>
          <small id="formStatus" class="text-sm text-gray-600">Los datos enviados se usarán solo para responder tu consulta.</small>
        </div>
      </form>
    </section>

  </main>

  <!-- Footer -->
  <footer class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
      <div>
        <p>© <span id="yearFooter"></span> Val de Loire — Adrián Laya García</p>
        <p class="mt-1">Contacto: <a href="mailto:superlaya50@gmail.com" class="underline text-blue-600">superlaya50@gmail.com</a></p>
      </div>
      <div class="flex items-center gap-4">
        <a href="#aviso" class="underline hover:text-blue-800">Aviso legal</a>
        <a href="#privacidad" class="underline hover:text-blue-800">Privacidad</a>
        <a href="#cookies" class="underline hover:text-blue-800">Cookies</a>
      </div>
    </div>
  </footer>

  <!-- Cookie banner bottom -->
  <div id="cookieBanner" class="fixed bottom-4 left-4 right-4 bg-white border rounded-lg shadow-lg p-4 flex flex-col md:flex-row items-center gap-3 z-50">
    <div class="flex-1 text-sm text-gray-700">
      Usamos cookies para mejorar tu experiencia, analizar tráfico y mostrar anuncios relevantes. Puedes aceptar o rechazar.
    </div>
    <div class="flex gap-2">
      <button id="cbAccept" class="px-3 py-2 bg-emerald-700 text-white rounded">Aceptar</button>
      <button id="cbReject" class="px-3 py-2 border rounded">Rechazar</button>
      <a href="#cookies" class="px-3 py-2 text-sm underline">Más info</a>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    // Fecha última actualización
    document.getElementById('fechaPrivacidad').textContent = new Date().toLocaleDateString('es-ES');

    // Footer year
    document.getElementById('yearFooter').textContent = new Date().getFullYear();

    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileOverlay = document.getElementById('mobileOverlay');
    menuBtn.addEventListener('click', toggleMenu);
    function toggleMenu() {
      mobileOverlay.classList.toggle('hidden');
    }

    // Cookie banner logic (localStorage)
    const cookieBanner = document.getElementById('cookieBanner');
    const cbAccept = document.getElementById('cbAccept');
    const cbReject = document.getElementById('cbReject');
    const acceptKey = 'vdl_cookies';

    function hideBanner() { cookieBanner.style.display = 'none'; }

    const saved = localStorage.getItem(acceptKey);
    if (saved === 'accepted' || saved === 'rejected') hideBanner();

    cbAccept.addEventListener('click', () => {
      localStorage.setItem(acceptKey, 'accepted');
      hideBanner();
      // aquí podrías inicializar analítica o trackers si quieres
    });

    cbReject.addEventListener('click', () => {
      localStorage.setItem(acceptKey, 'rejected');
      hideBanner();
      // eliminar cookies no esenciales si fuera necesario
    });

    // Buttons in cookies section (same actions)
    document.getElementById('acceptCookies').addEventListener('click', () => { localStorage.setItem(acceptKey,'accepted'); hideBanner(); alert('Cookies aceptadas'); });
    document.getElementById('rejectCookies').addEventListener('click', () => { localStorage.setItem(acceptKey,'rejected'); hideBanner(); alert('Cookies rechazadas'); });

    // Contact form (cliente-only demo)
    document.getElementById('sendBtn').addEventListener('click', () => {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();
      const status = document.getElementById('formStatus');

      if (!name || !email || !message) {
        status.textContent = 'Rellena nombre, email y mensaje.';
        status.classList.add('text-red-600');
        return;
      }

      // Demo: enviamos via mailto (cliente). En producción, sustituir por POST a servidor.
      const subject = encodeURIComponent('Contacto web: ' + name);
      const body = encodeURIComponent('Nombre: ' + name + '\nEmail: ' + email + '\n\n' + message);
      window.location.href = `mailto:superlaya50@gmail.com?subject=${subject}&body=${body}`;
    });
  </script>

</body>
</html>
