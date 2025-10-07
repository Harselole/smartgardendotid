@include('layout.header')
  <main>
    <!-- ===== Hero Start ===== -->
    <section class="gj do ir hj sp jr i pg">
      <!-- Hero Images -->
      <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
        <img src="images/shape-01.svg" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
        <img src="images/shape-02.svg" alt="shape" class="xc 2xl:ud-block h u p va" />
        <img src="images/shape-03.svg" alt="shape" class="xc 2xl:ud-block h v w va" />
        <img src="images/shape-04.svg" alt="shape" class="h q r" />
        <img src="images/foto_1.png" alt="Woman" class="h q r ua" />
      </div>

      <!-- Hero Content -->
      <div class="bb ze ki xn 2xl:ud-px-0">
        <div class="tc _o">
          <div class="animate_left jn/2">
            <h1 class="fk vj zp or kk wm wb">Smart Agriculture for a Smarter Indonesia</h1>
            <p class="fq">
              SmartGarden.ID memadukan teknologi dan kecerdasan buatan untuk menghadirkan pertanian
              tropis berbasis data yang cerdas, efisien, dan berkelanjutan; dari irigasi pintar hingga panen buah
              premium.
            </p>

            <div class="tc tf yo zf mb">
              <a href="#!" class="ek jk lk gh gi hi rg ml il vc _d _l">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Hero End ===== -->

    {{-- <!-- ===== Small Features Start ===== -->
    <section id="features">
      <div class="bb ze ki yn 2xl:ud-px-12.5">
        <div class="tc uf zo xf ap zf bp mq">
          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg mh">
              <img src="images/icon-01.svg" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">24/7 Support</h4>
              <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
          </div>

          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg nh">
              <img src="images/icon-02.svg" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">Take Ownership</h4>
              <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
          </div>

          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg oh">
              <img src="images/icon-03.svg" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">Team Work</h4>
              <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Small Features End ===== --> --}}

    <!-- ===== About Start ===== -->
    <section class="ji gp uq 2xl:ud-py-35 pg">
      <div class="bb ze ki xn wq">
        <div class="tc wf gg qq">
          <!-- About Images -->
          <div class="animate_left xc gn gg jn/2 i">
            <iframe width="625" height="350"
              src="https://www.youtube.com/embed/RAEwTFN3h8M?si=9LUGLKx8lJZtfcbI"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen>
            </iframe>
          </div>

          <!-- About Content -->
          <div class="animate_right jn/2">
            <h2 class="fk vj zp pr kk wm qb">Kenapa Memilih Kami</h2>
            <p class="uo">Kami mewujudkan ekosistem pertanian cerdas berbasis AI dan IoT untuk meningkatkan produktivitas,
            keberlanjutan, dan kesejahteraan petani Indonesia.</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== About End ===== -->

    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq">
      <!-- Section Title Start -->
      <div
        x-data="{ sectionTitle: `Berita & Artikel Terbaru`, sectionTitleText: ``}">
        <div class="animate_top bb ze rj ki xn vq">
          <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
          </h2>
          <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


      </div>
      <!-- Section Title End -->

      <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
          <!-- Blog Item -->
          <div class="animate_top sg vk rm xm">
            <div class="c rc i z-1 pg">
              <img class="w-full" src="images/blog-01.png" alt="Blog" />

              <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
              </div>
            </div>

            <div class="yh">
              <div class="tc uf wf ag jq">
                <div class="tc wf ag">
                  <img src="images/icon-man.svg" alt="User" />
                  <p>Musharof Chy</p>
                </div>
                <div class="tc wf ag">
                  <img src="images/icon-calender.svg" alt="Calender" />
                  <p>25 Dec, 2025</p>
                </div>
              </div>
              <h4 class="ek tj ml il kk wm xl eq lb">
                <a href="blog-single.html">Free advertising for your online business</a>
              </h4>
            </div>
          </div>

          <!-- Blog Item -->
          <div class="animate_top sg vk rm xm">
            <div class="c rc i z-1 pg">
              <img class="w-full" src="images/blog-02.png" alt="Blog" />

              <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
              </div>
            </div>

            <div class="yh">
              <div class="tc uf wf ag jq">
                <div class="tc wf ag">
                  <img src="images/icon-man.svg" alt="User" />
                  <p>Musharof Chy</p>
                </div>
                <div class="tc wf ag">
                  <img src="images/icon-calender.svg" alt="Calender" />
                  <p>25 Dec, 2025</p>
                </div>
              </div>
              <h4 class="ek tj ml il kk wm xl eq lb">
                <a href="blog-single.html">9 simple ways to improve your design skills</a>
              </h4>
            </div>
          </div>

          <!-- Blog Item -->
          <div class="animate_top sg vk rm xm">
            <div class="c rc i z-1 pg">
              <img class="w-full" src="images/blog-03.png" alt="Blog" />

              <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
              </div>
            </div>

            <div class="yh">
              <div class="tc uf wf ag jq">
                <div class="tc wf ag">
                  <img src="images/icon-man.svg" alt="User" />
                  <p>Musharof Chy</p>
                </div>
                <div class="tc wf ag">
                  <img src="images/icon-calender.svg" alt="Calender" />
                  <p>25 Dec, 2025</p>
                </div>
              </div>
              <h4 class="ek tj ml il kk wm xl eq lb">
                <a href="blog-single.html">Tips to quickly improve your coding speed.</a>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Blog End ===== -->

    
  </main>
  @include('layout.footer')