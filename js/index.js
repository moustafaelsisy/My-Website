  //Set size of the tiles' background font-awesome to the size of the tile, and position accordingly

var tileResize = function() {
  $(".tile-lower").each(function(index){
    var height =  $(this).parent().css("height");
    //Set tile-lower's position from bottom to height of the parent tile
    $(this).css({"bottom": height});
    //Set size of the font-awesome background icon to height of parent tile
    $(this).children($("i")).css({"font-size": height});
  });
}

$(document).ready(function(){
  tileResize(); //in the case of refreshes, body.onload is not called
  document.body.onload = tileResize;
  [document, window].forEach(function(element){
    element.addEventListener('resize', tileResize);
  })
})
