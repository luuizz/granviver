        var $slickElement = $('.galeria-fotos');
        var totalSlides = $slickElement.find('.slick-slide').length;
        var middleSlideIndex = Math.floor(totalSlides / 2);

        var lastIndex = totalSlides - 1;

        $slickElement.slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: false,
            variableWidth: true,
            initialSlide: 1,
            arrows: true,

        });