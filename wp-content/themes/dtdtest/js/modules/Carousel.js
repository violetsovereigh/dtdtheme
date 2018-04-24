$(function() {
    
var total = $('.carousel .carousel-inner div.carousel-item').length;
    append_li();
    function append_li()
    {
        var li = "";
        var get_ac = $( ".carousel .active" );
        var ac =  $( ".carousel .carousel-inner div" ).index( get_ac );

        for (var i=0; i <= total-1; i++){
            if(i == (ac)/2){
                li += "<div data-target='#mycarousel' data-slide-to='"+i+"' class='active'></div>";
            }else{
                li += "<div data-target='#mycarousel' data-slide-to='"+i+"' class=''></div>";
                }
            }
            $(".carousel-indicators").append(li);
        }

    });