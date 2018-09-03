<?php
//Abrufen des RSS-Feeds von Destatis

$url_destatis = 'https://www.destatis.de/Aktuelles.xml';

//$url_destatis = 'https://www.bbsr.bund.de/SiteGlobals/Functions/RSSFeed/BBSR/DE/BBSRRaumentwicklung/RSS_BBSRRaumentwicklung_Generator.xml?nn=405942';



//header('Content-Type:text/json');
$content_destatis =  file_get_contents($url_destatis);

//Lade XML

$xml=simplexml_load_string($content_destatis);

if ($content_destatis === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
//    header('Content-Type:text/html');
    //Parse XML nach 
$channel= $xml->channel[0];
 $post = $channel->item;
 
        foreach($post as $posts) {
         //Für jeden Post werden Titel, Link und Beschreibung ausgegeben
     
                $destatis_posts[] =  "<a href='" . $posts->link . "' target='_blank'>" . $posts->title . "</a><br/>" . $posts->description . "<br /><br />";
     
    
        }    
}
$url_bbsr = 'https://www.bbsr.bund.de/SiteGlobals/Functions/RSSFeed/BBSR/DE/BBSRRaumentwicklung/RSS_BBSRRaumentwicklung_Generator.xml?nn=405942';



//header('Content-Type:text/json');
$content_bbsr =  file_get_contents($url_bbsr);

//Lade XML

$xml_b=simplexml_load_string($content_bbsr);

if ($content_bbsr === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error_b) {
        echo "<br>", $error_b->message;
    }
} else {
//    header('Content-Type:text/html');
    //Parse XML nach 
$channel_b= $xml_b->channel[0];
 $post_b = $channel_b->item;
 
        foreach($post_b as $posts_b) {
         //Für jeden Post werden Titel, Link und Beschreibung ausgegeben
     
                $bbsr_posts[] =  "<a href='" . $posts_b->link . "' target='_blank'>" . $posts_b->title . "</a><br/>" . $posts_b->description . "<br /><br />";
     
    
        }    
}



/*
else {
    foreach($xml->children() as $item) {
        foreach($item->children() as $posts) {
            echo $posts->title . ", ";
            echo $posts->link . ", ";
           
            echo $posts->description . "<br />";
        }
    } */
?>