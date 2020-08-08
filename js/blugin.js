$(document).ready(function(){
    var height = $(".Services .display-sm .content1"),
        totalHeight = height.innerHeight()*4 + 60
    $(".Services .line").css("height", totalHeight);
    $(".last ul li").on({
        click:function(){
            $(this).addClass("active").siblings().removeClass("active");
        }
    })
    $(".last .mix").on({
        mouseenter:function(){
            $(this).find(".overup").fadeIn(500)
        },
        mouseleave:function(){
            $(this).find(".overup").fadeOut(500)
        }
    })
})