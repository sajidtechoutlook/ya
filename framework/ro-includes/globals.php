<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('13DA53AC8D6823A0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/YVZVlMVmMSCRbEMsYl3iZuqZTu+Q/xn3uS9FkqW4/exOo/t9ZUP6Fz40whZm5K50r94WPM8ngHL8kSOwHnrPPkvIxtqmWDRcLks2rz0imuJImmBSmU8FOgakOGsfJJHaKj5LHmIBckvsgooTg2I+7Xx7+hO0x7Oys23hY4qINA1X90XeDRMsBzQAAAAwAQAAibGkiDJKLWw9cXReIY3Q34H+ufg0q6wziFVSQZ0JkkR2P/XqnZyMgOUdKKDcPMySFJ7gbMbYaebOJ6CCciAbCbjl10p4O/cSRxhD2nK7Z+/aXgGfzn7XbhoZsiAXfJV7rf2+j6haE9QHXnz8czb/akZNSEHgh7V/g42g0uL5TjELRnFS3t3J0vTYhrxaJbu/124N3y5SQgF5xfe36WzmT+Yzeb8gfHwSzqqBxHDLtyG0X2N5KTrYNfKwsY1nf03gfZvWvbULJz45ANRqcXqapttBK1n02ig4KZQxnF/ZqIChOVODdOmUrs7Kn6rFXzMyiuC1EGp4ucskk0Y9On82fvYBJU7aTpdqhPpC0vBwn8nReh0n7Yk8+09MkYUf5mKHwWCvduIWaf24NvpcC7pKDTUAAAAoAQAArZNOogljqKjlJG1dvIjW4nIC4C96NUrB76yl3kOWiVVRu4/XTLrnGZHl+l4AK978Yb/WElHWZ9M0U3kkqybzkWbRHv1KTpROmSU2FHliC+kASpJBRHhpsmqP2AMj3spqdZbqa9JH56h9Hzeiw5ZaKBSmgzoHNaSkIEcs7q5GLKNqUcuU2Vt3dLWNIMe7c70J5Eo/h0sArkxlnV8IPRtcZAuG8wgdH9U5S8Ig03iM6jKHHS8Z0bs8yQcark2R+H4gcubNT1ztD2hYRLCKYdnADsSo1SB0HekZqPBsgV7QWRxrKhy0yZgOJHhtd+tWt2GmepVTc3gbszOMkdphbgflazSOlEhCDXYWPMeSdhpmIZ+NxtL6sJvJJxkkGrhCYRvEj8OVsjW0ios2AAAAKAEAALcgLHZG6iKxvVE5HOo6kJB7EZ5f0C73CMgz/4bsElyjeYjF8uCBQvJUQ2WC4yrm4w/r/hMoA4pzvUp1NufHDkGEaL+vRp2RUXltQLUDNE3bX3rUymEmRlWWkuGBtLGXnM7eWndrSVWr6ArmTiOCKXJmI4JFyoC2pdFg/LY6PoIhX/DAJEEN7mesSWHmo+zJHh7h99CLgDp+Qh1BJ0qWbf5LBTLvGjLlmABI5CrECTiaCfwFOIAiirPAkkHCl+ZJT37uzHAJZR9sgErLueIdP7igFS+0gGuj44aMbVJ5sI9PVoxEcF/rqswNXn4XAqMBh4+PXcMEzWijL+FOkhIBNL2+tMIE4Darvkjj07Fo6SxkCV1pcYEEB+INmkQp7CABBm+Gq/pYPtHiNwAAADABAACmG7gqcX2Jgj8W5HrE1SA+vBoJz+rULpca9eeN3jaxLzFaXB3bxEsde4u754KYdZAJOd+PknZzqlX2Wov7QI4S61SZrdr5JYnx1b3zBnPLFLbJWnZJesOHstQtValCVvS2e6LIFr7U5nOKe5FYKls4pihJlHs2raPEIuk8pBdvvbsqiXRFsBCAGuXjL62FUfTle8/iYTRdG4UVYEX3DZFrfHBu/jB3mvR2PXlltO7rsIOuq1DFV1N5KzF0YHSfo4FqEf3EqtJFBIMd2ujE66nv72eoVo8sZMGM6CmWkOimfOP5q+TaXt59otw/0/NTJen7l5JTj4HcuvdiocEBvNdKIYvbXs2Z551ks2jgEIUekvU0lRWJpA6NeTEkPBh1GtPDpPTCH9N4NdyLp88AF0RwOAAAADABAABMsVm6Gm2W5odPv56ZciBLsS2p9VLgxgteCjlAFKe4g61k95B4pJFMqTV0E11ytGq7G/A8AjAeQAvxhDpOKROSK9MtJNq8n8RLZyIZXUV1v8FMaoWzNfqtHHgBK53+N8Z3XG/3G4M2KIP8jsRENbnroqjhifkhqZ/Yq/q2+02x6PlN59OiviJqPu28ywogJxbQ6yn1G9qmwbhoF2LMeT89H3bZXWNzlSspPrhtNO8Ht/yR89rx3U/mjH+NtKOLFVSpLQm8WdaV8XOAqCKiyKHNavqJdlqTLJguapDC+aI20dcixHpg+T0wswvZMNaSUatKHm0evYzFNIAUTa8nXpH0+GrLwXtcIv74gaeSyyKwuME76BT/gdC8uvLiTu9dKYBFM6CMg2JIJglomptpYai3AAAAAA==');
