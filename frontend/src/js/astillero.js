u = new Utils();

u.addWindowResizeFunction( u.verticalCenter )
u.addWindowResizeFunction( u.shareW )


$(document).ready(function(){

   $('.imgLiquid.imgLiquidFill').imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({
      fill: false
   });


   console.log( "Astillero Frontend 0.1")


});

function windowResizeFunctions() {
   u.squareW();
   u.verticalCenter();
}
