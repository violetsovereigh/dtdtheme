var items = $('.carousel .carousel-inner .carousel-item'), heights = [], tallest, bwidth, height, width;

    if( items.length ) {
        function normalizeHeights() {
            bwidth = $('.carousel').width();
            items.each(function() {
                height = $(this).height();
                width = $(this).width();
                if( width > bwidth ) {
                    height = height * ( bwidth / width );
                }
                heights.push(height);
            });
            tallest = Math.max.apply(null, heights);
            if( tallest > bwidth ) {
                tallest = bwidth;
            }
            items.each(function() {
                $(this).css('height', tallest + 'px');
            });
        };
        normalizeHeights();
        $(window).on('resize', function() {
            bwidth = $('.carousel').width();
            heights = [];
            items.each(function() {
                $(this).css('height', 'auto');
            });
            normalizeHeights();
        });
    }