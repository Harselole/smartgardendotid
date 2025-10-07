<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SmartGarden.ID</title>
  <link rel="icon" href="images/logo-sg.png" type="image/png" />
  <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
  x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'b eh': darkMode === true}">
  <!-- ===== Header Start ===== -->
  <header class="g s r vd ya cj" :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
    @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
    <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
      <div class="vd to/4 tc wf yf">
        <a href="index.html">
          <img class="om" src="images/logo-sg-long.png" style="width: 250px" alt="Logo Light" />
        </a>

        <!-- Hamburger Toggle BTN -->
        <button class="po rc" @click="navigationOpen = !navigationOpen">
          <span class="rc i pf re pd">
            <span class="du-block h q vd yc">
              <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
              <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
              <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
            </span>
            <span class="du-block h q vd yc lf">
              <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
              <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
            </span>
          </span>
        </button>
        <!-- Hamburger Toggle BTN -->
      </div>

      <div class="vd wo/4 sd qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
        <nav>
          <ul class="tc _o sf yo cg ep">
            <li><a href="index.html" class="xl" :class="{ 'mk': page === 'beranda' }">Beranda</a></li>
            <li class="c i" x-data="{ dropdown: false }">
              <a href="#!" class="xl tc wf yf bg" @click.prevent="dropdown = !dropdown"
                :class="{ 'mk': page === 'agro' || page === 'sensor' || page === 'ai' || page === 'labs'}">
                Produk

                <svg :class="{ 'wh': dropdown }" class="th mm we fd pf" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                </svg>
              </a>
              <!-- Dropdown Start -->
              <ul class="a" :class="{ 'tc': dropdown }">
                <li><a href="agro.html" class="xl" :class="{ 'mk': page === 'agro' }">SmartGarden Agro</a></li>
                <li><a href="sensor.html" class="xl" :class="{ 'mk': page === 'sensor' }">SmartGarden Sensor</a></li>
                <li><a href="ai.html" class="xl" :class="{ 'mk': page === 'ai' }">SmartGarden AI</a></li>
                <li><a href="labs.html" class="xl" :class="{ 'mk': page === 'labs' }">SmartGarden Labs</a></li>
              </ul>
              <!-- Dropdown End -->
            </li>
            <li><a href="index.html#features" class="xl">Tentang Kami</a></li>
            <li><a href="index.html#features" class="xl">Karir</a></li>
            <li><a href="index.html#support" class="xl">Berita & Artikel</a></li>
          </ul>
        </nav>

        {{-- <div class="tc wf ig pb no">

          <ul class="tc wf cg">
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    src="images/facebook.png" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    src="images/instagram.png" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    src="images/youtube.png" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24"
                    src="images/linkedin.png" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
            </ul>
        </div> --}}
      </div>
    </div>
  </header>

  <!-- ===== Header End ===== -->