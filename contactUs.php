<?php require('header.php') ?>

<section class="bg-white dark:bg-gray-900">
  <div class="">
    <div class="container mx-auto">
      <!--contact-title-->
      <div class="head text-center" data-aos="fade-up" data-aos-duration="1200">
        <h5>Bizimle İletişime Geçin</h5>
      </div>
      <div class="contact-area flex flex-col md:flex-row">
        <!--contact-img-->
        <div class="contact-img md:w-1/2" style="padding-bottom:20px;" data-aos="fade-right" data-aos-duration="1200">
          <img src="./assets/images/blog-2.png" alt="">
        </div>
        <!--contact-form-->
        <div class="contact-form md:w-1/2 md:ml-8 m-4 md:m-1" data-aos="fade-left" data-aos-duration="1200">
          <form id="offer-form" data-href="" action="">
            <div class="input-group flex flex-wrap">
              <div class="input-element w-full sm:w-1/2">
                <label class="block" for="">Yetkili Adı</label>
                <div class="icon-input-element relative">
                  <div class="input-icon absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path
                        d="M256 288c-154 0-239 73-239 205 0 11 9 19 19 19h440c10 0 19-8 19-19 0-132-85-205-239-205zM55 475c8-99 75-149 201-149s193 50 201 149H55zM256 0c-71 0-124 54-124 126 0 75 56 135 124 135s124-60 124-135C380 54 327 0 256 0zm0 224c-48 0-87-44-87-98 0-51 37-89 87-89 49 0 87 39 87 89 0 54-39 98-87 98z">
                      </path>
                    </svg>
                  </div>
                  <input type="text" id="authorized-name" name="authorized-name" placeholder="">
                  <input type="hidden" id="type" value="offer">
                </div>
              </div>
              <div class="input-element w-full sm:w-1/2">
                <label class="block" for="">Kurum Adı</label>
                <div class="icon-input-element relative">
                  <div class="input-icon absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path
                        d="M282 166h46c6 0 10-4 10-10v-46c0-5-4-10-10-10h-46c-6 0-10 5-10 10v46c0 6 4 10 10 10zm10-46h26v26h-26zm-101 46h46c6 0 10-4 10-10v-46c0-5-4-10-10-10h-46c-5 0-10 5-10 10v46c0 6 5 10 10 10zm10-46h26v26h-26zm81 148h46c6 0 10-4 10-10v-46c0-6-4-10-10-10h-46c-6 0-10 4-10 10v46c0 6 4 10 10 10zm10-46h26v26h-26zm-101 46h46c6 0 10-4 10-10v-46c0-6-4-10-10-10h-46c-5 0-10 4-10 10v46c0 6 5 10 10 10zm10-46h26v26h-26zm81 148h46c6 0 10-5 10-10v-47c0-5-4-10-10-10h-46c-6 0-10 5-10 10v47c0 5 4 10 10 10zm10-47h26v27h-26zm-55 47c6 0 10-5 10-10v-47c0-5-4-10-10-10h-46c-5 0-10 5-10 10v47c0 5 5 10 10 10zm-36-47h26v27h-26z">
                      </path>
                      <path
                        d="M464 492h-9V190c0-6-5-10-10-10h-65V56c0-6-5-10-10-10h-22V10c0-6-4-10-10-10H181c-5 0-10 4-10 10v36h-21c-6 0-10 4-10 10v192H85c-6 0-10 5-10 10v234H48a10 10 0 1 0 0 20h416a10 10 0 1 0 0-20zM191 20h137v26H191zM95 268h45v224H95zm65-202h200v426h-50v-66c0-6-5-10-10-10h-80c-6 0-10 4-10 10v66h-50zm70 426v-56h60v56zm150 0V200h55v292z">
                      </path>
                    </svg>
                  </div>
                  <input type="text" id="company-name" name="company-name" placeholder="">
                </div>
              </div>
              <div class="input-element w-full">
                <label class="block" for="">Telefon</label>
                <div class="icon-input-element relative">
                  <div class="input-icon absolute">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M368 512c-17 0-33-3-49-9A522 522 0 0 1 9 193 142 142 0 0 1 26 62 146 146 0 0 1 144 0a16 16 0 0 1 16 13l25 117a16 16 0 0 1-4 15l-43 42c40 81 106 147 187 187l43-43a16 16 0 0 1 14-4l117 25a16 16 0 0 1 13 16 143 143 0 0 1-62 118c-18 13-39 21-61 25a142 142 0 0 1-21 1zM132 33c-32 3-61 20-80 47-21 30-26 67-13 102a485 485 0 0 0 291 291 111 111 0 0 0 149-93l-95-20-45 45a16 16 0 0 1-18 3 453 453 0 0 1-217-217 16 16 0 0 1 3-18l45-45z">
                      </path>
                    </svg>
                  </div>
                  <input type="text" id="phone" name="phone" placeholder="">
                </div>
              </div>
              <div class="input-element w-full">
                <label class="block" for="">E-posta</label>
                <div class="icon-input-element relative">
                  <div class="input-icon absolute">
                    <svg viewBox="0 0 479 479" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M434 60H45C20 60 0 80 0 105v269c0 25 20 45 45 45h389c25 0 45-20 45-45V105c0-25-20-45-45-45zm0 30 6 1-200 174L39 91a15 15 0 0 1 6-1zm0 299H45c-8 0-15-6-15-15V123l200 173a15 15 0 0 0 19 0l200-173v251c0 9-7 15-15 15z">
                      </path>
                    </svg>
                  </div>
                  <input type="text" id="mail" name="mail" placeholder="">
                </div>
              </div>
              <div class="input-element w-full">
                <label class="block" for="">Mesajınız</label>
                <textarea name="message" id="message"></textarea>
              </div>
              <div class="input-element w-full">
                <button type="button" id="offer-submit" class="focus:outline-none engintag_contact">Gönder</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--social-media-icons-->
    <div class="flex flex-col md:flex-row items-center justify-center md:space-x-3 mt-16">
      <!--facebook-->
      <button
        class="bg-gray-800 w-48 mb-4 py-2 font-semibold text-white inline-flex items-center justify-center space-x-2 rounded">
        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
        </svg>
        <span>Facebook</span>
      </button>
      <!--twitter-->
      <button
        class="bg-gray-800 w-48  mb-4 py-2 font-semibold text-white inline-flex items-center justify-center space-x-2 rounded">
        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
        </svg>
        <span>Twitter</span>
      </button>
      <!--reddit-->
      <button
        class="bg-gray-800 w-48  mb-4 py-2 font-semibold text-white inline-flex items-center justify-center space-x-2 rounded">
        <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z" />
        </svg>
        <span>Reddit</span>
      </button>
      <!--pinterest icon-->
      <button
        class="bg-gray-800 w-48  mb-4 py-2 font-semibold text-white inline-flex items-center justify-center space-x-2 rounded">
        <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <title>Pinterest icon</title>
          <path
            d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z" />
        </svg>
        <span>Pinterest</span>
      </button>
    </div>
  </div>
</section>

<?php require('footer.php') ?>