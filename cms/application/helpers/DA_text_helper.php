<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Extended for text helper */
function post_brief($posttext, $line, $charline)
{
    $brief = character_limiter($posttext,$line*$charline);
    $text = explode('<br />', nl2br($posttext));
//    foreach($text as $line=>$linetext) {
        
//    }
    
    return $brief;  
}

function word_banned($str, $banwords, $replacement = '#') 
{
    if(!is_array($banwords)) {
        return $str;
    }
    
    foreach($banwords as $badword){
        $str = str_replace($badword, str_repeat($replacement, strlen($badword)), $str);
    }
    
    return $str;
}
/* End of file DA_text_helper.php */
/* Location: ./system/helpers/DA_text_helper.php */