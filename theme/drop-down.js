/*
* Drop Down Menu
* from
* http://www.howtocreate.co.uk/tutorials/javascript/incorporate
*/

var timeout    = 500;
var closetimer = 0;
var ddmenuitem = 0;

function pagestab_open()
{  pagestab_canceltimer();
   pagestab_close();
   ddmenuitem = $(this).find('ul').css('visibility', 'visible');}

function pagestab_close()
{  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function pagestab_timer()
{  closetimer = window.setTimeout(pagestab_close, timeout);}

function pagestab_canceltimer()
{  if(closetimer)
   {  window.clearTimeout(closetimer);
      closetimer = null;}}

$(document).ready(function()
{  $('#pagestab > li').bind('mouseover', pagestab_open)
   $('#pagestab > li').bind('mouseout',  pagestab_timer)});

document.onclick = pagestab_close;

