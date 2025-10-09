<!-- ===== Footer Start ===== -->
  <footer class="bg-gray-100">
    <div class="bb ze ki xn 2xl:ud-px-0">
      <!-- Footer Top -->
      <div class="ji gp">
        <div class="tc uf ap gg fp">
          <div class="animate_top zd/2 to/4">
            <a href="/">
              <img src="{{ asset('images/logo-sg-long.png') }}" alt="Logo" class="om" />
            </a>

            <p>Jl. Nakula Raya</p>
            <p>smartgardendotid@gmail.com</p>
            <p>085157559464</p><br><br>

            <ul class="tc wf cg">
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    src="{{ asset('images/facebook.png') }}" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    src="{{ asset('images/instagram.png') }}" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    src="{{ asset('images/youtube.png') }}" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
              <li>
                <a href="#!">
                  <img class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24"
                    src="{{ asset('images/linkedin.png') }}" xmlns="http://www.w3.org/2000/svg">
                  </img>
                </a>
              </li>
            </ul>
          </div>

          <div class="vd ro tc sf rn un gg vn">
            <div class="animate_top">
              <h4 class="kk wm tj ec">Menu</h4>

              <ul>
                <li><a href="/" class="sc xl vb">Beranda</a></li>
                <li><a href="/about" class="sc xl vb">Tentang Kami</a></li>
                <li><a href="/career" class="sc xl vb">Karir</a></li>
                <li><a href="/news" class="sc xl vb">Berita & Artikel</a></li>
              </ul>
            </div>

            <div class="animate_top">
              <h4 class="kk wm tj ec">Produk</h4>
              <ul>
                <li><a href="/agro" class="sc xl vb">SmartGarden Agro</a></li>
                <li><a href="/sensor" class="sc xl vb">SmartGarden Sensor</a></li>
                <li><a href="/ai" class="sc xl vb">SmartGarden AI</a></li>
                <li><a href="/labs" class="sc xl vb">SmartGarden Labs</a></li>
              </ul>
            </div>
            <div class="animate_top">
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Top -->

      <!-- Footer Bottom -->
      <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
        <div class="animate_top">
        </div>

        <div class="animate_top">
          <p>&copy; 2025 SmartGarden.ID. All rights reserved.</p>
        </div>
      </div>
      <!-- Footer Bottom -->
    </div>
  </footer>

  <!-- ===== Footer End ===== -->

  <!-- ====== Back To Top Start ===== -->
  <button class="xc wf xf ie ld vg sr gh tr g sa ta _a" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc' : scrollTop }">
    <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path
        d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
    </svg>
  </button>

  <!-- ====== Back To Top End ===== -->

  <script>
    //  Pricing Table
    const setup = () => {
      return {
        isNavOpen: false,

        billPlan: 'monthly',

        plans: [
          {
            name: 'Starter',
            price: {
              monthly: 29,
              annually: 29 * 12 - 199,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
          },
          {
            name: 'Growth Plan',
            price: {
              monthly: 59,
              annually: 59 * 12 - 100,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
          },
          {
            name: 'Business',
            price: {
              monthly: 139,
              annually: 139 * 12 - 100,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
          },
        ],
      };
    };
  </script>
  <script defer src="{{ asset('bundle.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- SwiperJS JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>