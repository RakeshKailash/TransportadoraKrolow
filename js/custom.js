var window_height = $(window).innerHeight();

$(document).ready(function () {
	var home_section = $("#section_home")
	, header = $(".uk-navbar-container.uk-navbar")
	, quote = $("#quote_section")
	;

	initSlideshow();

	$("#home_parallax,#section_home").css('height', ((window_height-$(header).innerHeight()) - $(quote).innerHeight()));
	$(window).scroll(function () {
		var top_distance = $(window).scrollTop();
		if (top_distance > $(home_section).height()) {
			$(header).addClass("dshadow");
			$(header).css("height", "60px");
		} else {
			$(header).removeClass("dshadow");
			$(header).css("height", "auto");
		}
	});

	$("#form_contato").submit(function () {
		var message_config = {
			1: {
				type: "success",
				title: "Mensagem enviada com sucesso!"
			},
			0: {
				type: "error",
				title: "Erro ao enviar a mensagem"
			}
		}
		, result = 1
		;

		swal({
			title: message_config[result]["title"],
			type: message_config[result]["type"],
			timer: 3000,
			showConfirmButton: false
		});
	});
})

function initSlideshow ()
{
	var menus = $(".uk-navbar-nav")
	, section_padding = $("#section_imagens").innerHeight() - $("#section_imagens").height()
	, slideshow_height = window_height - (($("#slideshow_imagens").siblings("h1").innerHeight() + 60) + section_padding);
	;

	$("#slideshow_imagens").css('maxHeight', slideshow_height);
	$("#slideshow_imagens").find('.uk-slideshow-items,.uk-cover').css('maxHeight', slideshow_height);

	$("#thumbs_slideshow").css('height', ($("#thumbs_slideshow").parent().innerHeight() - 65));
	$("#thumbs_slideshow").find(".uk-thumbnav").css('height', ($("#thumbs_slideshow").parent().innerHeight() - 65));
	$("#thumbs_slideshow").find(".uk-thumbnav").find("li").click(function () {
		$("#thumbs_slideshow").animate({
			top: "100%"
		}, 300);

		$("#btn_thumbs").removeClass('hidden');
	});

	$(menus).find('li').click(function () {
		$(this).siblings().removeClass('uk-active');
		$(this).addClass('uk-active')
	})

	$("#btn_thumbs").click(function () {
		var top_value = ($("#thumbs_slideshow").parent().innerHeight() - $("#thumbs_slideshow").innerHeight())
		;

		if (top_value >= 0) {
			$("#thumbs_slideshow").animate({
				top: top_value
			}, 300);
		} else {
			$("#thumbs_slideshow").animate({
				top: "0"
			}, 300);
		}

		$("#btn_thumbs").addClass('hidden');
	});

	$("#close_thumbs").click(function () {
		$("#thumbs_slideshow").animate({
			top: "100%"
		}, 300);

		$("#btn_thumbs").removeClass('hidden');
	});
}