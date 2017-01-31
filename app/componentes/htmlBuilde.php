<?php

namespace TeachMe\componentes;
use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class htmlBuilde extends CollectiveHtmlBuilder {
   
    public function menu (){
        
        return view('partials.menu');
        
    }
    
    
}
