$(document).ready(function () {


    // Слайдер на Главной
    (function() {
        $('.slider').slick({
            slidesToScroll:1,
            slidesToShow:1,
            speed: 2000,
            pauseOnHover:true,
            arrows:true,
            autoplay:true,
            dots:true,
            fade:true, 
        });

        $('.slider').on('beforeChange', addAnimate);

        function addAnimate() {
            // Анимация Текста:
            $('.slide__info_pic').animate({'left': '100%'}, 500, function() {
                $('.slide__info_pic').animate({'left': '0px'}, 500);
            });

            // Анимация Картинки:
            $('.slide__info_left').animate({'right': '100%'}, 500, function() {
                $('.slide__info_left').animate({'right': '0px'}, 500);
            });
        }

    })();




    var show = true;
    var countbox = "#counts";

    if( $(countbox).length )
    {
        $(window).on("scroll load resize", function(){
 
            if(!show) return false;                   // Отменяем показ анимации, если она уже была выполнена
     
            var w_top = $(window).scrollTop();        // Количество пикселей на которое была прокручена страница
            var e_top = $(countbox).offset().top;     // Расстояние от блока со счетчиками до верха всего документа
     
            var w_height = $(window).height();        // Высота окна браузера
            var d_height = $(document).height();      // Высота всего документа
     
            var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
     
            if(w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){
                $(".spincrement").spincrement({
                    thousandSeparator: "",
                    duration: 8000
                });
     
                show = false;
            }
        });
    }


        // Меню гамбургер
        var touch  = $('.btn-toggle');
         var menu  = $('.menuVertical');
         
         $(touch).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
         });
         
         $(window).resize(function(){
            var w = $(window).width();
            if(w >320 && menu.is(':hidden')) {
             menu.removeAttr('style');
            }
         });

         $('.table').basictable({breakpoint: 720});


         // аккордион
    $("#menuVertical > ul > li > a").on("click", function(){
        var XX=$(this).parent("li");
        if(!XX.hasClass("act")){
            $("#menuVertical > ul > li.act > ul").slideUp(400);
            $("#menuVertical > ul > li.act").removeClass("act");
            XX.addClass("act");
            XX.children("ul").slideDown(500);
        }
        return false;
    });


    $('.project__list').imagesLoaded( function() {
            $('.project__list').masonry({
                    itemSelector: '.project__item',
                    singleMode: true,
                    isResizable: true,
                    transitionDuration: 0,
            });
    });

             // Слайдер проекты
        $('.project__slider').slick({
            slidesToScroll:1,
            slidesToShow:1,
            pauseOnHover:true,
            arrows:true,
            dots:false,
            // autoplay:true,
 
        });

        $(".single_image").fancybox();

        $("a[rel=group]").fancybox({
               'transitionIn' : 'none',
                'transitionOut' : 'none',
               'titlePosition' : 'over',
                'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
               }
            });

        $('input, select').styler();


        // модалка
        $(document).ready(function(){
            $(".modalbox").fancybox();
            $("#f_contact").submit(function(){ return false; });
            $("#f_send").on("click", function(){
                 
                // тут дальнейшие действия по обработке формы
                // закрываем окно, как правило делать это нужно после обработки данных
                $("#f_contact").fadeOut("fast", function(){
                    $(this).before("<p><strong>Ваше сообщение отправлено!</strong></p>");
                    setTimeout("$.fancybox.close()", 1000);
                });
            });
        });



    

  
});
