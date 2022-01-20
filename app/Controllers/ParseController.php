<?php

namespace App\Controllers;

class ParseController extends BaseController
{
    public function index()
    {
        return view('parse.php');
    }
    
    function parse(){
         
        $datareturned['jumia'] = jumia_scrape();
        
        return view('fetch',$datareturned);
        
    }
    
    
}