// Identificar o clique no menu
// Verificar o item que foi clicado e fazer referência com o alvo
// Verificar a distância entre o alvo e o topo
// Animar o scroll até o alvo

// Scroll suave para link interno
if($(window).width() >= 992){
	// Animação da Navbar
	$(window).scroll(function(){
		if($(this).scrollTop() > 60) {
			$('.navbar').css('borderBottom', '0.5px solid rgb(245, 245, 245)');
			$('.navbar').css('height', '60px');
			$('.container-logo').css('marginTop', '14px');
			$('.page').css('marginTop', '1px');
		} else {
			$('.navbar').css('borderBottom', 'none');
			$('.navbar').css('height', '80px');
			$('.container-logo').css('marginTop', '24px');
			$('.page').css('marginTop', '11px');	
		}
	});

	$(window).scroll(function(){
        if($(this).scrollTop() > 200) {
            $('.page-up').fadeIn();
        } else {
            $('.page-up').fadeOut();
        }
	});
	
	$('.container-logo a, .container-pages a, .page-up a').click(function(e){
		e.preventDefault();
		
		/*
		$('a').each(function () {
            $(this).removeClass('active-link');
        })
		$(this).addClass('active-link');
		*/
		
		var id = $(this).attr('href'),
				menuHeight = $('nav').innerHeight(),
				targetOffset = $(id).offset().top;
		$('html, body').animate({
			scrollTop: targetOffset - 80
		}, 700);
	});
} else {
	// Animação da Navbar
	$(window).scroll(function(){
		if($(this).scrollTop() > 20) {
			$('.navbar').css('borderBottom', '0.5px solid rgb(245, 245, 245)');
			$('.navbar').css('height', '55px');
			$('.container-logo').css('marginTop', '12px');
			$('.container-pages').css('marginTop', '1px');
			$("label[for='menu']").css('marginTop', '17px');
		} else {
			$('.navbar').css('borderBottom', 'none');
			$('.navbar').css('height', '75px');
			$('.container-logo').css('marginTop', '22px');
			$('.container-pages').css('marginTop', '11px');
			$("label[for='menu']").css('marginTop', '25px');
		}
	});

	$(window).scroll(function(){
        if($(this).scrollTop() > 200) {
            $('.page-up').fadeIn();
        } else {
            $('.page-up').fadeOut();
        }
	});
	
	$('.container-logo a, .container-pages a, .page-up a').click(function(e){
		e.preventDefault();
		var id = $(this).attr('href'),
				menuHeight = $('nav').innerHeight(),
				targetOffset = $(id).offset().top;
		$('html, body').animate({
			scrollTop: targetOffset - 75
		}, 700);
	});
}

// Webp
Modernizr.on('webp', function (result) {
    if (result) {
        $('.img-webp').each(function () {
            this.src = $(this).data('webp');
        });
    } else {
        $('.img-webp').each(function () {
            this.src = $(this).data('original');
        });
    }
});