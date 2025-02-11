// <!-- Design and develop by Priyessh rai  -->
// <!-- my linkedin 👉 "https://www.linkedin.com/in/priyesh-rai/" -->
// <!-- contact me here ☝ -->

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".links-wraper li a");
  const currentPath = window.location.pathname;

  links.forEach((link) => {
    if (link.getAttribute("href") === currentPath) {
      link.classList.add("active");
    }
  });

  $(document).ready(function () {
    $(".product-slider").slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      dots: true,
      arrows: true,
      infinite: true,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  });

  const btn_container = document.querySelector(".menu-btn-container");
  const menu_btn = document.querySelectorAll(".menu-btn");
  const overlay = document.querySelector(".overlay");
  const mobileMenu = document.querySelector(".links-container");
  const body = document.body;

  btn_container.addEventListener("click", function () {
    classAdder()
  });

  overlay.addEventListener("click", function () {
    classRemover()
  });

  function classAdder() {
    menu_btn.forEach((btn) => {
      btn.classList.toggle("active-btn");
    });
    overlay.classList.toggle("overlay-active");
    mobileMenu.classList.toggle("active-mobile-menu");
    if (mobileMenu.classList.contains("active-mobile-menu")) {
      body.style.overflow = "hidden";
    } else {
      body.style.overflow = "auto";
    }
  }

  function classRemover() {
    mobileMenu.classList.remove("active-mobile-menu");
    overlay.classList.remove("overlay-active");
    body.style.overflow = "auto";
    menu_btn.forEach((btn) => {
      btn.classList.remove("active-btn");
    });
  }
});
