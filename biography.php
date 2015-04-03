﻿<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="stylesheetM.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="stylesheetB.css" />
    <link rel="shortcut icon" href="/Images/favicon.ico">
    <script type="text/javascript" src="/Scripts/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/Scripts/main.js"></script>
    <title>Mary Jansen: Biography</title>
</head>
<body>
    <header>
        <!--<hgroup>
            <h1>Mary Jansen</h1>
            <h2>Artist Extraordinaire</h2>
        </hgroup>-->
        <img class="banner" src="Images/koi head.jpg" alt="Koi Painting" />
        <nav>

                <div class="menubox"><a href="index.php">Home</a></div>
                <div class="menubox dropper"><a href="productDisplay.php?category=watercolors">Galleries</a>
                   <ul class="submenu">
<?php
// This php reads the mysql table to see what types of products are to be displayed on the gallery sub-menu.
	$host = "localhost";
	$user = "marymjan_root";
	$password = "brainHurts5294#";

	$cxn = mysql_connect($host,$user,$password) or die(mysql_error());
 
	mysql_select_db ("marymjan_maryart" , $cxn);
 
	$sql = "SELECT DISTINCT category FROM mj_typeMaster
	        WHERE displayOrder < 9990
	        ORDER BY displayOrder";

	$result = mysql_query($sql, $cxn);

	while($row = mysql_fetch_array($result)) {
		$category = $row['category'];
		echo '                    <li><a href="productDisplay.php?category=' . $category . '">' . $category . '</a></li>' . "\r\n";
	}
?>    
                   </ul></div>                
                <div class="menubox dropper"><a href="services.php">Services</a>
                   <ul class="submenu">
                      <li><a href="critiques.php">Critiques</a></li>
                      <li><a href="tutorials.php">Tutorials</a></li>
                   </ul></div>  
                <div class="menubox">Biography</div>
                <div class="menubox"><a href="contact.php">Contact Us</a></div>
        </nav>
    </header>
    <hr><br><br><br>
    <section>
        <img id="bioImage" src="Images/MaryChair.jpg" alt="Mary with Squirrel" width="250" />
        <h1>Mary Jansen</h1>
        <p>
            Mary grew up in culturally diverse San Francisco Bay Area and indulged in all forms of creative stimulation ranging from music and dance to visually rich trips to local museums. She acquired a BFA in Graphic Design at CCA in 1986 to learn the discipline of graphic design as well as other visual fine arts. Though she graduated just before the dawn of computer graphics applications Mary has always felt blessed to have been one of the last students taught the disciplines of exacting, hands-on graphics skills. Students were trained to apply strict adherence to detail and Zen-like focus utilizing precise execution. This disciplined arts oriented ideology has influenced her approach not only to what she does in the studio but to life in general. Of course, she has now learned computer graphics. Mary appreciates one of the most amazing and flexible tools available to the modern day artist/designer. She only hopes her work reflects that of carefully thought-out artistry and evokes sentiments of beauty and balance as good design is meant to do. Hopefully her passion for thought-provoking art coupled with love of the outdoors brings you visual contentment and joy.
        </p>
    </section>
    <br /><hr />
    <article>
        <h1>What Others Say About Mary</h1>
        <h2>Awards and Honors from Juried Shows</h2>
        <h3>2014</h3>
        <p>IWS- Illinois Watercolor Society- honorable mention "Wild Waterfowl"</p>
        <p>TWSA- Transparent Watercolor Society of America- "Koi Ahoy"</p>
        <p>MPSGS- Miniature Painters, Sculptors and Gravers Society of Washington D.C. International show. honorable mention"Logging Out" Voted signature membership.</p>
        <p>MASF- Miniature Art Society of Florida International Show. Award-2nd Transparent Watercolor "Where's Mom?"</p>
        <p>Cider Painters of America- Award- Leonards Claim Service Award "Guarded Submission".</p>
        <p>Splash 16 Best of Watercolor- publication. "Koi Ahoy"</p>
        <h3>2013</h3>
        <p>TWSA- Transparent Watercolor Society of America- Award- Lakes Region Watercolor Guild "Midas Touch"</p>
        <p>MPSGS- Miniature Painters, Sculptors and Gravers Society of Washington D.C. International show- Award- 3rd Watermedia "Rook on the Rocks"</p>
        <p>MASF- Miniature Art Society of Florida International Show. Award- Honorable Mention "Spring Canyon"</p>
        <p>Cider Painters of America- Award-Americana Award "Weathering the Storms"</p>
        <p>Snow Goose Gallery- annual Miniature show</p>
        <p>Oak Park Arboretum- solo show</p>
        <p>Carrie's Creations- Carrie Waller's online Friday Feature Artist interview article</p>
        <h3>2012</h3>
        <p>MPSGS- Miniature Painters, Sculptors and Gravers Society of Washington D.C. International show</p>
        <p>MASF- Miniature Art Society of Florida International Show. Award-3rd Watercolors "Red-Eyed Flight"</p>
        <p>Cider Painters of America</p>
        <p>Parklane Miniature Show</p>
        <p>Artistic Designs Gallery- miniature show. Award 1st Watercolor "Rook on the Rocks"</p>
        <p>Snow Goose Gallery- annual Miniature show</p>
        <p>Seaside Miniature Show</p>
        <p>The Waterfront- online featured artist interview.</p>
        <h3>2011</h3>
        <p>MPSGS- Miniature Painters, Sculptors and Gravers Society of Washington D.C. International show- Award-3rd Watercolor "On Golden Pond"</p>
        <p>MASF- Miniature Art Society of Florida International Show. Award- Excellence in All Entries and 1st Botanicals "Royal Beauty"</p>
        <p>Seaside Miniature Show</p>
        <h3>2010</h3>
        <p>MASF- Miniature Art Society of Florida International Show</p>
        <p>Seaside Miniature Show- Award Best Drawing "On Watch"</p>
        <p>Parklane Miniature Show</p>
        <p>Riverside Public Library-solo show</p>
        <h3>2009</h3>
        <p>MPSGS- Miniature Painters, Sculptors and Gravers Society of Washington D.C. International show.</p>
        <p>Seaside International Miniature Art Show- Best in Watercolor award "Quiet Repose"</p>
        <p>Parklane Miniature Show- Award President's Award "Afternoon at the Fair"</p>
        <p>Riverside Town Hall - solo show</p>
    </article>
</body>
</html>