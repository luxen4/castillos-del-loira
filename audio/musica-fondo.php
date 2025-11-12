<!-- 🎶 Música de fondo -->
<audio id="bg-music" autoplay loop muted>
    <source src="../../audio/musica-ambiental-1.mp3" type="audio/mpeg">
</audio>

<div class="fixed bottom-4 right-4 z-50">
    <button id="toggle-sound" class="px-4 py-2 bg-emerald-600 text-white rounded-full shadow-lg hover:bg-emerald-700 transition">
        🔊 Activar sonido
    </button>
</div>

<script>
    const audio = document.getElementById("bg-music");
    const btn = document.getElementById("toggle-sound");
    btn.addEventListener("click", () => {
        audio.muted = !audio.muted;
        btn.textContent = audio.muted ? "🔊 Activar sonido" : "🔈 Silenciar";
        if (!audio.muted) audio.play();
    });
</script>