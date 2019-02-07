<?php
class SocialShare{
  /* Hello there, this a simple social media share button class made by https://twitter.com/discretematt .
                                    * it contains one static method, which means you don't have to instantiate the class before you can use.
                                    * 
                                    * ----To use it---
                                    * The static medthod takes two arguements :
                                    *       1. The link to be shared.
                                    *       2 The text describing the link 
                                    *
                                    * Example:
                                    *       echo   SocialShare::share('https://thaleni.com', "Thaleni is the easiest way to hire and grow faster");
                                    *  
                                    */                                  

public static function share($url,$text){
	$vran = 'style="margin-right:0px; "';
	return '<div class="list-group-item"><div class="container"><div class="row"> <a role="button" class="btn btn-primary col-md-4" href="https://www.facebook.com/sharer/sharer.php?u='.$url.'"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
	<a role="button" class="btn btn-primary col-md-4" '. $vran .'  href="https://linkedin.com/shareArticle?url='.$url.'&title='. urlencode($text) .'"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
	<a role="button" class="btn btn-primary col-md-4" '. $vran .' href="https://twitter.com/share?url='.$url.'&text='. urlencode($text) .'"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
	<a role="button" class="btn btn-success col-md-4" '. $vran .' href="whatsapp://send?text='. urlencode($text).'"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
	<a role="button" class="btn btn-danger col-md-4" '. $vran .' href="https://reddit.com/submit?url='.$url.'&title='.urlencode($text).'"><i class="fa fa-reddit" aria-hidden="true"></i> Reddit</a>
	<a role="button" class="btn btn-dark col-md-4" '. $vran .' href="http://digg.com/submit?url='.$url.'&title='. urlencode($text).'"><i class="fa fa-digg" aria-hidden="true"></i> Digg</a>
	<a role="button" class="btn btn-outline-primary col-md-4" '. $vran .' href="https://del.icio.us/post?url='.$url.'&title='. urlencode($text) .'&notes='. urlencode($text) .'"><i class="fa fa-delicious" aria-hidden="true"></i> Delicious</a>
	<a role="button" class="btn btn-primary col-md-4" '. $vran .' href="https://buffer.com/add?text='. urlencode($text) .'&url='.$url .'"><i class="fa fa-buffer" aria-hidden="true"></i> Buffer</a>   
 	<a role="button" class="btn btn-danger col-md-4" '. $vran .' href="https://plus.google.com/share?url='.'&url='.$url .'"><i class="fa fa-google-plus" aria-hidden="true"></i> Google Plus</a>   
 

        
        
        
        
        
        </div></div></div>';
                                     }
                                 }
                                 
                                 
     
                                 
                                 
                                 ?>
                                 
