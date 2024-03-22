$(function(){
    $(".popup_change").hide();
    j = 7; 

    $("#dark_back").click(function(){
        if($("#dark_back").css("display") === "block"){
            $("#dark_back").hide();
            $("#popup_page").hide();
            $("#char_page_"+num).hide();            
            $("#char_back1_"+num).hide();
            $("#char_back2_"+num).hide();
            $("body").css({overflow: "auto"});            
        }
    });
//    $(".char_img").click(function(){
//       
//    });
});   

function clickBox(ev){
    num = ev;
    $("body").css({overflow: "hidden"});
    $("#dark_back").show();
    $("#popup_page").show(); 
    $("#popup_char_"+num).show();        
    $("#char_page_"+num).show();
    $("#char_back1_"+num).show();
}