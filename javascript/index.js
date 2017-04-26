$(function(){
  //!!On-document load statements for tuning rendering of given elements!!

  //Set size of the tiles' background font-awesome to the size of the tile, and position accordingly
  $(".tile-lower").each(function(index){
    var height =  $(this).parent().css("height");
    //Set tile-lower's position from bottom to height of the parent tile
    $(this).css({"bottom": height});
    //Set size of the font-awesome background icon to height of parent tile
    $(this).children($("i")).css({"font-size": height});
  });
})
