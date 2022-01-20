<?php

include APPPATH . '\ThirdParty\simple_html_dom.php';
$jumia = array();

function jumia_scrape()
{

    $html = file_get_html(APPPATH . '\ThirdParty\web_pages\jumia.html');

    foreach ($html->find('ul li a') as $a_tag) {

        $jumia['image'][] = $a_tag->href;
        $jumia['product_name'][] = $a_tag->plaintext;
        
    }
    // dd($jumia);
    return $jumia;
}

// ===========================================================================================================