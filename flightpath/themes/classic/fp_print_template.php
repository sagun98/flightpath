<?php
/*
	This is very similar to the fp_template, except this is formatted
	to be used with content which is supposed to get printed out.
*/

if ($page_title == "")
{ // By default, page title is this...
	$page_title = $GLOBALS["fp_system_settings"]["school_initials"] . " FlightPath";
}

$theme_location = $GLOBALS["fp_system_settings"]["base_u_r_l"] . "/" . $GLOBALS["fp_system_settings"]["theme"];

print "
<link rel='stylesheet' type='text/css' href='$theme_location/style.css'>";

 // Load any extra CSS files which addon modules might have added.
 if (is_array($page_extra_css_files) && count($page_extra_css_files) > 0) {
   foreach ($page_extra_css_files as $css_file_name) {
     print "<link rel='stylesheet' type='text/css' href='$css_file_name'>";
   }
 }



print "
<title>$page_title</title>
";

?>
<body style='background-color: white;'>
<!-- TEXT LOGO -->
<table width='500' border='0'>
	  <td valign='middle'>
	    <span style='font-size: 10pt;'><i>
	    electronic student advising system
	    </i></span>
	   </td>
	   <td valign='middle'>
	     <span style='font-family: Times New Roman; font-size: 30pt;'><i>flightpath</i>
	     	 <font color='#660000'><?php print $GLOBALS["fp_system_settings"]["school_initials"]; ?></font></span>
	   </td>
  </table>
<!-- PRINT BUTTON -->
<div style='margin-bottom:10px;' class='print-graphic hand' onClick='window.print();'>
&nbsp;
</div>

<table border='0' width='650' cellspacing='0' cellpadding='0'>
<td valign='top'>
<!-- PAGE CONTENT -->
<?php print $page_content; ?>
</td> 
</table>

</body>