<nav class="bg-gray-200 shadow-md">
  <div class="max-w-6xl mx-auto flex items-center justify-between h-16 px-4">
    <!-- Logo -->
    <div class="flex items-center">
      <img class="h-12 w-auto" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
    </div>

    <!-- Menu utama (desktop) -->
    <ul id="nav-links" class="hidden md:flex items-center space-x-6 font-medium">
      <li><a href="/" class="nav-link transition {{ request()->is('/') ? 'border-b-2 border-blue-700 text-blue-700': ' text-black hover:text-blue-700'}} ">Beranda</a></li>
      <li><a href="{{ route('tentang') }}" class="nav-link transition {{ request()->is('tentang') ? 'border-b-2 border-blue-700 text-blue-700': ' text-black hover:text-blue-700'}}">Tentang</a></li>
      <li><a href="{{ route('index') }}" class="nav-link transition {{ request()->is('hotel') ? 'border-b-2 border-blue-700 text-blue-700': ' text-black hover:text-blue-700'}}">Hotel</a></li>
      <li><a href="{{ route('kontak') }}" class="nav-link transition {{ request()->is('kontak') ? 'border-b-2 border-blue-700 text-blue-700': ' text-black hover:text-blue-700'}}">Kontak</a></li>
    </ul>

    <!-- Tombol hamburger (mobile) -->
    <button id="menu-btn" class="md:hidden focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-black" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Menu mobile -->
  <div id="menu" class="hidden md:hidden bg-gray-100 px-4 py-3 space-y-2 transition duration-300">
    <a href="/" class="nav-link block text-black hover:text-blue-700">Beranda</a>
    <a href="{{ route('tentang') }}" class="nav-link block text-black hover:text-blue-700">Tentang</a>
    <a href="{{ route('index') }}" class="nav-link block text-black hover:text-blue-700">Hotel</a>
    <a href="{{ route('kontak') }}" class="nav-link block text-black hover:text-blue-700">Kontak</a>
  </div>
</nav>

<script>
  const btn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");
  const navLinks = document.querySelectorAll(".nav-link");

  // Toggle menu mobile
  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });

  // Highlight active link
  navLinks.forEach(link => {
    link.addEventListener("click", () => {
      navLinks.forEach(l => l.classList.remove("border-b-2", "border-blue-700", "text-blue-700"));
      link.classList.add("border-b-2", "border-blue-700", "text-blue-700");
    });
  });
</script>
