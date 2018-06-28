var noOfIcons = 3;

function toggleNav() {
    var menuStats = parseInt($("nav #menu-icons ul li").eq(0).css('left'));

    if(menuStats == '-100') {
        $("nav #menu-icons ul li").each(function() {
            var index = $("nav #menu-icons ul li").index(this);
            var left = $("nav #menu-bar").width() + 40;
            
            i = 0;
            while(i < index) {
                left += parseInt($("nav #menu-icons ul li").eq(i).width());
                i++;
            }
            
            $(this).animate({
                'left':left + 'px'
            },200);
        });
        
        $("nav #menu-bar #bar-1").css({
            'transform' : 'rotate(45deg) translate(5px,5px)'
        });
        
        $("nav #menu-bar #bar-2").css({
            'width' : '80%',
            'transform' : 'rotate(-45deg) translate(4px,-4px)'
        });
    }
    else {
        $("nav #menu-icons ul li").each(function() {
            $("nav #menu-icons ul li").each(function() {
                $(this).animate({
                    'left' : '-100px'
                },200);
            });
            
            $("nav #menu-bar #bar-1").css({
                'transform' : 'rotate(0deg)'
            });

            $("nav #menu-bar #bar-2").css({
                'width' : '60%',
                'transform' : 'rotate(0deg)'
            });
        });
    }
}