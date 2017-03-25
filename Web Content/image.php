<html>
<?php

$pageMin = 0;
$pageMax = 803;

$page = $_GET['page'];

if (!is_numeric($page)) {
$page = $pageMin;
}

$page = round($page);

if($page < $pageMin) {
$page = $pageMin;
}

if($page > $pageMax) {
$page = $pageMax;
}

$page1 = 2 * floor($page/2);
$page2 = $page1 + 1;

$width1 = 800;
$height1 = 600;

$width2 = 1600;
$height2 = 1200;

$width = $_GET['width'];

if(!is_numeric($width)) {
$width = $width1;
}

$width = round($width);

if($width == $width2) {
$height = $height2;
$otherWidth = $width1;
$otherSize = "Smaller";
} else {
$width = $width1;
$height = $height1;
$otherWidth = $width2;
$otherSize = "Larger";
}

$title = sprintf("Rotenberg Ledger, Pages %d-%d, Size %dx%d", $page1, $page2, $width, $height);

$imgFormat = "http://rotenbergledger.jgstoronto.com/images-%dx%d/page%03d-%03d.JPG";
$imgUrl = sprintf($imgFormat, $width, $height, $page1, $page2);

$linkFormat = "%s?page=%d&width=%d";
$firstLink = sprintf($linkFormat, $_SERVER['SCRIPT_NAME'], $pageMin, $width);
$lastLink = sprintf($linkFormat, $_SERVER['SCRIPT_NAME'], $pageMax, $width);

$page1Prev = $page1 - 2;
$prevLink = sprintf($linkFormat, $_SERVER['SCRIPT_NAME'], $page1Prev, $width);

$page2Next = $page2 + 2;
$nextLink = sprintf($linkFormat, $_SERVER['SCRIPT_NAME'], $page2Next, $width);

$otherLink = sprintf($linkFormat, $_SERVER['SCRIPT_NAME'], $page1, $otherWidth);

?>
<head>
<title><?php echo $title ?></title>
<link rel="stylesheet" href="jgs.css" type="text/css">
</head>
<body>

<table border="0" cellpadding="5" cellspacing="0">
	<tr background="TopBannerbkgd.gif">
	
		<td><a href="http://jgstoronto.ca"><img src="JGSTor2.gif" border="0"></a></td>
		
		<td><a href="http://jgstoronto.ca"><img src="JGSTitle1.gif" border="0" alt="Jewish Genealogical Society (Toronto)"></a></td>
	
                <td><img src="Cunard_Line_small.jpg" border="0"></td>
        </tr>
</table>

<div>&nbsp;</div>

<div>
[ <a href="http://jgstoronto.ca">Home</a>
| <a href="./">Index</a>
| <a href="<?php echo $firstLink ?>">First</a> 
| <a href="<?php echo $prevLink ?>">Previous</a>
| <a href="<?php echo $nextLink ?>">Next</a>
| <a href="<?php echo $lastLink ?>">Last</a> ]
</div>

<div>&nbsp;</div>

<form>
  Page: 
  <input type="text" size="3" name="page" value="<?php echo $page ?>">
  <input type="hidden" name="width" value="<?php echo $width ?>">
  <button>Go</button>
</form>

<h2><?php echo $title ?> (<a href="<?php echo $otherLink ?>"><?php echo $otherSize ?></a>)</h2>

<p>
<img src="<?php echo $imgUrl ?>" alt="<?php echo $title ?>" />
</p>

</body>
</html>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    