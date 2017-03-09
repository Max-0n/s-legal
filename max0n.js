$(document).ready(function() {
	console.log( "ready!" );
	activator();

	$('.header .line label').textillate({
		in: {
			delay: 30,
			effect: 'fadeInDown',
			shuffle: true,
			sync: false
		},
		loop: false
	});

	
});

$(window).scroll(function(){
	activator();
	//$('#console').html( ($('.slide1').offset().top - $(window).scrollTop()) + 'px -> height = '+$(window).height() );
});


function moveTo(block){
	//alert($('#p'+num).offset().top);
	
	//$("body").stop().animate({scrollTop: $(block).offset().top}, '500', 'easeInOutQuad');
	$('body').animate({
		scrollTop: $(block).offset().top+"px"
	}, {
		duration: 500,
		easing: "swing"
	});
}


function activator(){
	$('body *:not(.wrapper):not(label *):not(p *):not(.line):not(.part)').each(function(index){
		var pos = $(this).offset().top - $(window).scrollTop();

		if( pos < $(window).height() && pos > $(window).height()*(-1) && $(this).hasClass('ready') ){


			if( $(this).prop("tagName") == 'LABEL' || $(this).prop("tagName") == 'P' ){
			//if( $(this).hasClass('topLabel') && !$(this).hasClass('ready') ){

				$(this).textillate({
					in: {
						delay: 10,
						effect: 'fadeInDown',
						shuffle: true,
						sync: false
					},
					loop: false
				});

			}else{
				$(this).addClass('animated fadeInDown');
			}
			$(this).removeClass('ready');
			//alert($('.slide1').offsetTop());
		}

	});
}


function moveToBlock(num){
	//alert($('#p'+num).offset().top);
	$("html, body").animate({
		scrollTop: $(num).offset().top +"px"
	}, {
		duration: 2000,
		easing: "swing"
	});
}



ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),

    // Создаем геообъект с типом геометрии "Точка".
        myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [55.8, 37.8]
            },
            // Свойства.
            properties: {
                // Контент метки.
                iconContent: 'Я тащусь',
                hintContent: 'Ну давай уже тащи'
            }
        }, {
            // Опции.
            // Иконка метки будет растягиваться под размер ее содержимого.
            preset: 'islands#blackStretchyIcon',
            // Метку можно перемещать.
            draggable: true
        });

    myMap.geoObjects
        .add(myGeoObject)
        .add(new ymaps.Placemark([55.684758, 37.738521], {
            balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
        }, {
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }))
        .add(new ymaps.Placemark([55.833436, 37.715175], {
            balloonContent: '<strong>серобуромалиновый</strong> цвет'
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#735184'
        }))
        .add(new ymaps.Placemark([55.687086, 37.529789], {
            balloonContent: 'цвет <strong>влюбленной жабы</strong>'
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        }))
        .add(new ymaps.Placemark([55.782392, 37.614924], {
            balloonContent: 'цвет <strong>детской неожиданности</strong>'
        }, {
            preset: 'islands#circleDotIcon',
            iconColor: 'yellow'
        }))
        .add(new ymaps.Placemark([55.642063, 37.656123], {
            balloonContent: 'цвет <strong>красный</strong>'
        }, {
            preset: 'islands#redSportIcon'
        }))
        .add(new ymaps.Placemark([55.826479, 37.487208], {
            balloonContent: 'цвет <strong>фэйсбука</strong>'
        }, {
            preset: 'islands#governmentCircleIcon',
            iconColor: '#3b5998'
        }))
        .add(new ymaps.Placemark([55.694843, 37.435023], {
            balloonContent: 'цвет <strong>носика Гены</strong>',
            iconCaption: 'Очень длиннный, но невероятно интересный текст'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.790139, 37.814052], {
            balloonContent: 'цвет <strong>голубой</strong>',
            iconCaption: 'Очень длиннный, но невероятно интересный текст'
        }, {
            preset: 'islands#blueCircleDotIconWithCaption',
            iconCaptionMaxWidth: '50'
        }));
}


