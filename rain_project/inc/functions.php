<?php



function post($e){
  
if(isset($_POST[$e]) and !empty($_POST[$e]))
{

return $_POST[$e];
}
}	
?>