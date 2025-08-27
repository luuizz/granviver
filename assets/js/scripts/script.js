const btMobile = document.getElementById('js-btn-mobile');

btMobile.addEventListener('click', () => {
  btMobile.classList.toggle('is-active');
  document.documentElement.classList.toggle('menu-opened');
});

(function () {
  // Elementos DOM com verificação
  var ul = document.querySelector('nav ul');
  var bodyElement = document.querySelector('body');
  var logoImg = document.querySelector('.logo img');
  var originalOverflow = bodyElement ? bodyElement.style.overflow : '';

  // Pega parâmetros da URL
  var urlParams = new URLSearchParams(window.location.search);
  var successParam = urlParams.get('success');

  // Adiciona classe no scroll
  window.addEventListener('scroll', function () {
    var nav = document.querySelector('nav');
    if (nav) {
      if (window.scrollY > 150) {
        nav.classList.add('scrolling');
      } else {
        nav.classList.remove('scrolling');
      }
    }
  });

  // Envio simulado de formulário com SweetAlert para todos os .form-footer
  if ($('.form-footer').length) {
    $('.form-footer').submit(function (e) {
      e.preventDefault();

      Swal.fire({
        html: '<h3>Encaminhando E-mail...</h3>',
        width: 300,
        heightAuto: true,
        didOpen: () => {
          Swal.showLoading();
        },
        timer: 1500,
        timerProgressBar: true,
      }).then(() => {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'E-mail enviado com sucesso',
          showConfirmButton: false,
          timer: 1500,
        });

        // Limpa os inputs e textarea do formulário que foi submetido
        $(this).find('input, textarea').val('');
      });
    });
  }

  // Menu lateral (mobile)
  if ($('.sub-btn').length) {
    $('.sub-btn').click(function () {
      $(this).next('.sub-menu').slideToggle();
      $(this).find('.dropdown').toggleClass('rotate');
    });
  }

  if ($('.menu-t-btn').length && $('.side-bar').length) {
    $('.menu-t-btn').click(function () {
      $('.side-bar').addClass('active');
      $('.menu-t-btn').css('visibility', 'hidden');
    });

    $('.close-btn').click(function () {
      $('.side-bar').removeClass('active');
      $('.menu-t-btn').css('visibility', 'visible');
    });

    $('.item a').click(function () {
      $('.side-bar').removeClass('active');
      $('.menu-t-btn').css('visibility', 'visible');
    });
  }

  // Máscara de telefone
  var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  };

  var options = {
    onKeyPress: function (val, e, field, options) {
      field.mask(behavior.apply({}, arguments), options);
    },
  };

  if ($('.cont_telefone').length) $('.cont_telefone').mask(behavior, options);
  if ($('.cad_telefone').length) $('.cad_telefone').mask(behavior, options);
  if ($('.chat').length) $('.chat').mask(behavior, options);

  // Ativar item de menu (para uso externo)
  window.itemMenu = function (itemId) {
    var menuItems = document.querySelectorAll('.menu li a');
    if (menuItems.length) {
      for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].classList.remove('active');
      }

      if (itemId !== 'simulacao') {
        var activeItem = document.querySelector('.' + itemId);
        if (activeItem) {
          activeItem.classList.add('active');
        }
      }
    }
  };
})();
