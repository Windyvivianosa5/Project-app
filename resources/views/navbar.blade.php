<nav class="bg-gray-300 ">
    <div class="flex items-center justify-between max-w-5xl m-auto h-18 open-sans mb-3">
      <div class="w-70 flex items-center justify-between ">
        <img class="logo" src="assets/img/logo.png" alt="">
      </div>
      <div>
        <ul class="flex items-center justify-between w-75">
          <li><a href="/"
              class="no-underline text-black hover:text-blue-700 transition duration-150 ease-in-out">Beranda</a>
          </li>
          <li><a href="{{ route('tentang') }}"
              class="no-underline text-black hover:text-blue-700 transition duration-150 ease-in-out">Tentang</a>
          </li>
          <li><a href="{{ route('index') }}"
              class="no-underline text-black hover:text-blue-700 transition duration-150 ease-in-out">Hotel</a>
          </li>
          <li><a href="{{ route('kontak') }}"
              class="no-underline text-black hover:text-blue-700 transition duration-150 ease-in-out">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
