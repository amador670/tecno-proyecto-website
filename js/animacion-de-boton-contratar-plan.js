$(document).ready(function(){

 //El evento each() nos permite recorrer todos los elementos seleccionados.
 $(".cambiarIcono").each(function(){
  $(this).mouseenter(function(){
   $(this).html('<span>Contratar</span> <i class="fa fa-check" aria-hidden="true" ></i>');
  });
 });

 //El evento eq() nos permite seleccionar un elemento en especifico.
 $(".cambiarIcono").eq(0).mouseleave(function(){
  $(this).html('<span>Contratar</span> <i class="fa fa-thumbs-o-up" aria-hidden="true" ></i>');
 });

 $(".cambiarIcono").eq(1).mouseleave(function(){
  $(this).html('<span>Contratar</span> <i class="fa fa-heart-o" aria-hidden="true" ></i>');
 });

 $(".cambiarIcono").eq(2).mouseleave(function(){
  $(this).html('<span>Contratar</span> <i class="fa fa-money" aria-hidden="true" ></i>');
 });

});
