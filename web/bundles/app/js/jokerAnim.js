$(function(){
    var add = $("body").width() - 1280;
    $("#outerBox").css({width : 6400+(add*5)+"px"});    
    $(".contentBox").css({width : 1280+add+"px"});
    $.jInvertScroll([".scroll"]);
    
    init(5);
});

 
function scrolling(page){
    
//    var scrBuffer = 317;
    var scrBuffer = $("body").height()-$(window).height();
    var target = Math.floor(scrBuffer/4*page);
    $("body,html").stop().animate({scrollTop: target +"px"}, 2000, 'easeInQuart', function(){
        console.log(target, $("#content1").offset().top);
        $(".rembutton").removeClass("selected");
        $("#rem"+(page+1)).addClass("selected");
    });    
    return false;
};

function init(page){
    
    arax = new Jarallax();
    var per = [];
    for(var i=0; i < page; i++){
        per[i] = (100/(page-1)*i) +"%";
    }    
    arax.setDefault("#content2, #content3, #content4, #content5", {opacity : "0px"});
    arax.addAnimation('#content1', [{progress: per[0] , opacity : 1}, {progress: per[1], opacity : 0}]);
    arax.addAnimation("#whatsthis", [{progress: per[0], left : "25px"}, {progress: per[1], left : "-600px"}]);
    arax.addAnimation("#updateInfo", [{progress: per[0], left : "362px"}, {progress: per[1], left : "-600px"}]);
    arax.addAnimation("#facebook", [{progress: per[0], left : "323px"}, {progress: per[1], left : "-600px"}]);
    arax.addAnimation("#sidebar", [{progress: per[0], left : "50px"}, {progress: per[1], left : "-600px"}]);
    arax.addAnimation("#joker", [{progress: per[0], left : "660px"}, {progress: per[1], left : "-1200px"}]);
    arax.addAnimation('#content2', [{progress: per[0] , opacity : 0}, {progress: per[1], opacity : 1}, {progress: per[2], opacity : 0}]);  
    arax.addAnimation('#sgk_bg', [{progress: per[0], left : "2200px"}, {progress: per[1], left : "64px"}, {progress: per[2], left : "-1000px"}]);
    arax.addAnimation('#hs_bg', [{progress: per[0], left : "800px"}, {progress: per[1], left : "650px"}, {progress: per[2], left : "-1660px"}]);    
    arax.addAnimation('#sgk_panel', [{progress: per[0], left : "2200px"}, {progress: per[1], left : "100px"}, {progress: per[2], left : "-1000px"}]);
    arax.addAnimation('#hs_panel', [{progress: per[0], left : "800px"}, {progress: per[1], left : "680px"}, {progress: per[2], left : "-1660px"}]);
    arax.addAnimation('#sgk_des', [{progress: per[0], bottom : "1650px"}, {progress: per[1], bottom : "0px"}, {progress: per[2], bottom : "1600px"}]);
    arax.addAnimation('#hs_des', [{progress: per[0], bottom : "1250px"}, {progress: per[1], bottom : "0px"}, {progress: per[2], bottom : "1240px"}]);
    arax.addAnimation('#content3', [{progress: per[1] , opacity : 0}, {progress: per[2], opacity : 1}, {progress: per[3], opacity : 0}]);        
    arax.addAnimation('#philo1', [{progress: per[1], left : "800px"}, {progress: per[2], left : "300px"}, {progress: per[3], left : "-800px"}]);
    arax.addAnimation('#philo2', [{progress: per[1], left : "1260px"}, {progress: per[2], left : "100px"}, {progress: per[3], left : "-1600px"}]);
    arax.addAnimation('#philo3', [{progress: per[1], left : "1420px"}, {progress: per[2], left : "400px"}, {progress: per[3], left : "-2000px"}]);
    arax.addAnimation('#ceoPhoto', [{progress: per[1], top : "-1300px"}, {progress: per[2], top : "164px"}, {progress: per[3], top : "1010px"}]);
    arax.addAnimation('#content4', [{progress: per[2] , opacity : 0}, {progress: per[3], opacity : 1}]);       
    arax.addAnimation('#teamPhoto', [{progress: per[2], top : "1600px"}, {progress: per[3], top : "164px"}, {progress: per[4], left : "-800px"}]);
    arax.addAnimation('#profile', [{progress: per[2], left : "1600px"}, {progress: per[3], left : "80px"}, {progress: per[3], left : "-1600px"}]);
    arax.addAnimation('#access', [{progress: per[2], top : "-900px"}, {progress: per[3], top : "455px"}, {progress: per[3], left : "-2000px"}]);
    arax.addAnimation('#content5', [{progress: per[3] , opacity : 0}, {progress: per[4], opacity : 1}]);
}