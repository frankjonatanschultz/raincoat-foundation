
(function($) {
    

    var iframe = document.querySelector('.section-video_embed iframe');
    var player = new Vimeo.Player(iframe);
    
    $('.video-embed .overlay').on('click', function() {
        var wrapper = $(this).closest('.video-embed');
        if(wrapper.hasClass('fold-out')) {
            player.play().then(function() {
                wrapper.find('.overlay').fadeOut(300);
                wrapper.addClass('playing');
            });
        }
        else {
            player.play().then(function() {
                $('.video-embed .overlay').fadeOut(300);
            });
        }
    });

	
})( jQuery );