<?php

function checkInputName($input, $issue = "", &$arr){
	$input = htmlspecialchars(stripslashes(trim($input)));
	if (strlen($input) < 2){
		$arr[] = $issue;
		return false;
	}
	else{
		return $input;
	}
}

function checkInputEmail($email, $issue = "", &$arr){		// Нашел на просторах Интернет.. Вцелом нравится.. Чуток переделал..   
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $arr[] = $issue;
      return false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
      	$arr[] = $issue;
        return false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
        $arr[] = $issue;
        return false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
        $arr[] = $issue;
        return false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
        $arr[] = $issue;
        return  false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
        $arr[] = $issue;
        return false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
        $arr[] = $issue;
        return false;
      }
      else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","", $local))){
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","", $local)))
         {
            $arr[] = $issue;
            return false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
        $arr[] = $issue;
        return false;
      }
   }
   return $email;
}

function checkInputPass($pass, $issue = "", &$arr){
	$pass = htmlspecialchars(stripslashes(trim($pass)));
	if (strlen($pass) < 6){
		// так же можно добавить регулярку для сложности пароля
		$arr[] = $issue;
		return false;
	}
	else{
		return $pass;
	}
}
?>