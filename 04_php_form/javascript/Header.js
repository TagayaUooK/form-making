document.getElementById("melt").onclick = function() {
  $(".Iv").css({'display':'grid'});
  $("nav .sp_nav").css({'display' : 'grid'});
};
document.getElementById("SI1").onclick = function() {
  $(".Iv").css({'display':'grid'});
  $(".SiB").css({'display' : 'grid'});
};
$lol=0;
document.getElementById("SI2").onclick = function() {
  $(".Iv").css({'display':'grid'});
  $(".SiB").css({'display' : 'grid'});
  $lol=1;
};
document.getElementById("overlay").onclick = function() {
  if($lol==1){ $("nav .sp_nav").css({'display' : 'none'});
  }else{
    $(".Iv").css({'display':'none'});
    $("nav .sp_nav").css({'display' : 'none'});
    $(".SiB").css({'display' : 'none'});
  };
  $lol=0;
};
