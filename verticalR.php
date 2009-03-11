<?php header("Content-type: text/css"); ?>
<?php
function rhythm($FontSize, $BaseLineHeight, $MarginTop, $MarginBottom, $BorderTop, $BorderBottom)
{
// calculate the new line-height
$NewLineHeight = $BaseLineHeight / $FontSize;
//How much is 1px in ems?
$PixelBase = 1 / $FontSize;
// calculate how much the borders are in ems
$emBorderTop = $BorderTop * $PixelBase;
$emBorderBottom = $BorderBottom * $PixelBase;
// calculate how much the margins are in ems
$MarginTop = ($MarginTop * $NewLineHeight);
$MarginBottom = ($MarginBottom * $NewLineHeight);
// Subtract the border widths from the margins
$MarginTop = $MarginTop - $emBorderTop;
$MarginBottom = $MarginBottom - $emBorderBottom;
// If the line-height is smaller than the font-size, double it
if ($NewLineHeight < 1) {
$NewLineHeight = $NewLineHeight * 2;
}
echo "line-height: " . $NewLineHeight . "em;\n";
echo "margin-top: " . $MarginTop . "em;\n";
echo "margin-bottom: " . $MarginBottom . "em;\n";
echo "border-bottom-width: " . $BorderBottom . "px;\n";
echo "border-top-width: " . $BorderTop . "px;\n";
};

/* -----  Usage ------------

The first argument is the current font-size in px.
The second argument is the (parents) line-height in px.
The third and fourth arguments are the margins (top/bottom) in multiples of lineheight (so 2 would mean 2xline-height).
The fifth and sixth argument are the borders (top/bottom) in pixels.

*/

 echo "Body:<br>";
	rhythm (14.4,21.456,.671,.671,0,0);
?> 
