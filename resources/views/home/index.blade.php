@extends('layouts.home')

@section('content')

   <main>
      <!--carousel begin-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <picture>
                  <source srcset="/img/fon/1.jpg" media="(min-width: 768px)">
                  <img class="w-100" src="/img/fon/carousel1-mob.jpg" alt="Labo from front view (mobile version)">
               </picture>
               <div class="carousel-caption">
                  <h5>SULTAN AVTO BIZNES</h5>
                  <p>Barchasini tez, a'lo va eng qulay narxlarda bajaramiz</p>
               </div>
            </div>
            <div class="carousel-item">
               <picture>
                  <source srcset="/img/fon/2.jpg" media="(min-width: 768px)">
                  <img class="w-100" src="/img/fon/carousel2-mob.jpg" alt="Labo from side view (mobile version)">
               </picture>
               <div class="carousel-caption">
                  <h5>SULTAN AVTO BIZNES</h5>
                  <p>Ko'p yillik tajriba, biz doim oxirgi texnik yangiliklardan xabardormiz</p>
               </div>
            </div>
            <div class="carousel-item">
               <picture>
                  <source srcset="/img/fon/3.jpg" media="(min-width: 768px)">
                  <img class="w-100" src="/img/fon/carousel3-mob.jpg" alt="Labo from front view (mobile version)">
               </picture>
               <div class="carousel-caption">
                  <h5>SULTAN AVTO BIZNES</h5>
                  <p>O'zbekiston bo'yicha eng a'lo sifat</p>
               </div>
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                 data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                 data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
      <!--carousel-end -->

      <!--About firm begin-->
      <div class="container-fluid col-sm-12 about" id="aboutUs">
         <div class="row">
            <div class="col-md-6 about__firm-pic">
               <img class="w-100 image" src="/img/chevrolet_labo_1.jpg" alt="Chevrolet labo image"
                    style="opacity: 0.7;">
               <h3 class="aboutUs-h3">4</h3>
               <h4>yil</h4>
               <h5 class="aboutUs">O'zbekiston bozorida</h5>
            </div>
            <div class="about__firm-text col-md-6 text-center col-sm-12">
               <h1 class="my-3">SULTAN AVTO BIZNES</h1>
               <p>Bizning firma 2018-yildan buyon o'z faolyatini olib burmoqda. Shu vaqtga qadar
                  2500dan ziyod mashinalarga xizmat ko'rsatgan. O'zebekiston bo'yicha uz standart agentligi
                  setifikatsiyasidan o'tgan. Respublika gaidan guvohnoma taqdim etiladi. Bizning
                  mijozlarimiz: karzinka, Makro, Xolasut, Melek, To'xtaniyoz-Ota, Sayxun Sut, ArzonApteka</p>
            </div>
         </div>
      </div>
      <!--About firm end-->

      <!--Good sides begin-->
      <h1 class="good__sides__h1">Ustun ta'raflari</h1>
      <div class="container my-5 text-center advantages">
         <div class="row">

            <div class="col-md-3 text-center col-sm-12 good__sides">
               <h4>Arzon narx</h4>
               <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" fill="orange" class="bi bi-cash-coin"
                    viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                        d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                  <path
                     d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                  <path
                     d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
               </svg>
               <p>Biz sizga o'z xizmatlarimizni arzon narxlarda taqdim etamiz</p>
            </div>
            <div class="col-md-3 text-center col-sm-12 good__sides">
               <h4>Professionalizim</h4>
               <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" fill="orange" class="bi bi-tv-fill"
                    viewBox="0 0 16 16">
                  <path
                     d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z"/>
               </svg>
               <p>Bizning professionalizmimizning asosi o'z an'analarimizni asrab-avaylash va dunyo yangiliklaridan
                  foydalanishdir.</p>
            </div>
            <div class="col-md-3 text-center col-sm-12 good__sides">
               <h4>Firmamiz tajribasi</h4>
               <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" fill="orange"
                    class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                  <path
                     d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
               </svg>
               <p>Biz mahsulotlarimiz sifatini isbotlashimiz shart emas. Sizning e'tirofingiz biz uchun buni amalga
                  oshiradi.</p>
            </div>
            <div class="col-md-3 text-center col-sm-12 good__sides">
               <h4>Asbob uskunalar</h4>
               <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" fill="orange" class="bi bi-hammer"
                    viewBox="0 0 16 16">
                  <path
                     d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
               </svg>
               <p>Biz foydalanadigan uskunaning texnologik ustunligi Sultan Avto Biznes ning ajralib turadigan
                  xususiyati.</p>
            </div>
         </div>
      </div>
      <!--Good sides end-->

      <!--Products begin-->
      <div class="swiper-container mySwiper my-5" id="example" style="max-width: 90vw; margin: auto;">
         <h1 class="text-center example__title">Mahsulotlarimizdan namunalar</h1>
         <div class="photos">
            <div class="photo1"><img src="/img/rp/4.jpg" alt="labo mahsulotlardan na'muna" loading="lazy"></div>
            <div class="photo2"><img src="/img/rp/5.jpg" alt="labo mahsulotlardan na'muna" loading="lazy"></div>
            <div class="photo3"><img src="/img/rp/6.jpg" alt="labo mahsulotlardan na'muna" loading="lazy"></div>
            <div class="photo4"><img src="/img/rp/1.jpg" alt="labo mahsulotlardan na'muna" loading="lazy"></div>
            <div class="photo5"><img src="/img/rp/2.jpg" alt="labo mahsulotlardan na'muna" loading="lazy"></div>
            <div class="photo6"><img src="/img/rp/3.jpg" alt="labo mahsulotlardan na'muna" loading="lazy"></div>
         </div>
      </div>
      <!--Products begin-->

      <!--Price beegin-->
      <div class="container my-5" id="prices">
         <div class="price-images row text-center">
            <h1 class="text-center" aria-label="">Mahsulot turlari</h1>
            <div class="col-md-3 col-sm-6 price__effect1">
               <img src="/img/product1.jpg" alt="Labo Bortli furgon narxi" width="200px" height="200px" loading="lazy">
               <h5>Bortli furgon</h5>

            </div>
            <div class="col-md-3 col-sm-6 price__effect2">
               <img src="/img/product2.jpg" alt="Labo Furgon narxi" width="200px" height="200px" loading="lazy">
               <h5>Furgon</h5>

            </div>
            <div class="col-md-3 col-sm-6 price__effect3">
               <img src="/img/product3.jpg" alt="Labo Izotermik narxi" width="200px" height="200px" loading="lazy">
               <h5>Izotermik</h5>

            </div>
            <div class="col-md-3 col-sm-6 price__effect4">
               <img src="/img/product4.jpg" alt="Labo Sendvich-refregirator narxi" width="200px" height="200px" loading="lazy">
               <h5>Sendvich-refregirator</h5>
            </div>
         </div>
      </div>
      <!--Price end-->
   </main>

   <div class="footer__title">
      <h1 class="text-center" id="contact">Kontaktlarimiz</h1>
   </div>
   <footer class="footer">
      <div class="container-fluid" id="footer">
         <div class="row">
            <div class="col-md-12 card">
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.003117073551!2d69.22583131492235!3d41.243490012867085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae61cfc82e9e79%3A0x5e5c305c5d07e5ac!2sLabo%20Center!5e0!3m2!1sru!2s!4v1625403024044!5m2!1sru!2s"
                  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  title="Labo Center location"></iframe>
            </div>

            <div class="row footer_contact">
               <div class="col-md-4 logo-container">
                  <img src="/img/LOGO.png" alt="" class="labo-lagatip" style="width: 100px; height: 100px;">
               </div>

               <div class="col-md-4">
                  <div class="footer-about_firm">
                     <div class="footer-about_firm-title">
                        Xizmatlar
                     </div>
                     <div class="footer-about_firm-text">
                        O’tgаn yillаr dаvоmidа SULTAN AVTO BIZNES kоmpаniyasi sifatli xizmat ko'rsatib,
                        ishоnchli vа mаs’uliyatli hаmkоr ekаnini ko’rsаtdi
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="contactss">
                     <div class="footer-about_firm-title">
                        Muloqot uchun
                     </div>
                     <div class="contacts-icon">
                        <div class="contacts-icon_svg">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door" viewBox="0 0 16 16">
                              <path
                                 d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                           </svg>
                        </div>
                        <p class="footer-icon_text">Toshkent sh., Zangiota tuman,Navoiyfizot</p>
                     </div>

                     <div class="contacts-icon">
                        <div class="contacts-icon_svg">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telegram" viewBox="0 0 16 16">
                              <path
                                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                           </svg>
                        </div>
                        <p class="footer-icon_text">@Labo_Center</p>
                     </div>

                     <div class="contacts-icon">
                        <div class="contacts-icon_svg">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                           </svg>
                        </div>
                        <p class="footer-icon_text">(93) 552-55-21 (97) 778-55-21</p>
                     </div>

                     <div class="contacts-icon">
                        <div class="contacts-icon_svg">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock" viewBox="0 0 16 16">
                              <path
                                 d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                           </svg>
                        </div>
                        <p class="footer-icon_text">D. - Sh.: 9:00 - 19:00 gacha</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

@endsection