AOS.init({
  disable: function () {
    return window.innerWidth < 1024;
  },
}),
  $(document).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.header').addClass('header-after');
      $('.header-img').hide();
    } else {
      $('.header').removeClass('header-after');
      $('.header-img').show();
    }
  });

const mainSlide = new Swiper('.main-slide', {
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: '.main-slide-next',
    prevEl: '.main-slide-prev',
  },
  loop: true,
  effect: 'fade',
});

// Tab
$('.tab-nav ul li').click(function () {
  const tabId = $(this).attr('data-number');
  $('.tab-nav ul li a').removeClass('tab-nav-active');
  $('.tab-content').removeClass('tab-active');
  $(this).children('a').addClass('tab-nav-active');
  $(`#${tabId}`).addClass('tab-active');
});

$('.benefits-tab-head').click(function () {
  const display = $(this).next().is(':visible') ? 1 : 0;
  $('.benefits-tab-content').hide();
  $('.benefits-tab-head button').css('transform', 'rotate(0deg)');
  if (display) {
    $(this).next().hide();
    $(this).children('button').css('transform', 'rotate(0deg)');
  } else {
    $(this).next().show();
    $(this).children('button').css('transform', 'rotate(45deg)');
  }
});

// DATA FETCH
fetch('./assets/data.json')
  .then((response) => response.json())
  .then((data) => {
    var products = document.getElementById('products');
    if (products) {
      data.forEach((product) => {
        products.innerHTML += `
      <div class=" lg:w-1/5 w-full p-4 rounded shadow-md">
        <a href="productDetail.php" class="block relative h-[40px] w-[600px] h-[600px] rounded">
          <img alt="ecommerce" class="object-center h-full block"
            src ="./assets/color-variant/${product.image}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Gold Glasses</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">${product.name}</h2>
          <p class="mt-1">${product.price}</p>
        </div>
      </div>
        `;
      });
    }
  });

  // swiper.js

  var swiper = new Swiper(".mySwiper", {
        slidesPerView: 7,
        spaceBetween: 40,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 4,
      spaceBetween: 40,
      }
    },
    autoplay: {
    delay: 1000,
  },
      });