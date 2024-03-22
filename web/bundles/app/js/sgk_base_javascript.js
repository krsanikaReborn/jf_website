$(function(){
    var $back = $("#background1");
    var height = $(document).height();
    $cBox = $("#content_body").height();
    $back.css({height : height-60+"px"});

    $(".submenu").hide();
    $("#dark_back").hide();
    $("#popup_page").hide();
    $(".world_video").hide();    
    $("#fox00").hide();
    $("#menu_session").click(function(){
        if($("#submenu1").css("display") === "block"){
            $("#submenu1").hide();
            for(var i=1;i<5;i++){
                $("#sgk"+i).css({top: "0px"});
            }                
        }else{
            $("#submenu1").show();
            for(var i=1;i<5;i++){
                var sum = 65;
                var k=sum*i;
                var j=100*i;
                $("#sgk"+i).animate({top: k+"px"}, 1000-j, "easeOutBounce");                
            }
        }
        if($("#submenu_line").css("display") === "block"){
            $("#submenu_line").hide();
            $("#submenu_line").css({top: "0px"});              
        }else{
            $("#submenu_line").show();
            $("#submenu_line").animate({top: 400+"px"}, 1000, "easeOutBounce");                
        }        
     });
    
    $("#top_button").on('click',function(){
        $(document).scrollTop('0');
    });
});

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&appId=779799958726036&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));