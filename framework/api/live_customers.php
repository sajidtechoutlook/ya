<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('A3C149A78D683168AAQAAAAWAAAABIgAAACABAAAAAAAAAD/+p3AKmc6b9OHIfUhvr4B4hzXyJCdlc13+w/0N8L8py7BCRtQ1Hyzict1H3foEbVWH9EuAHF/tZU3M8DAxi5bG8VRrlJhDEKKmbfrWwOsXVfSn/gM5/ZfmCO5PwTYoDkYahgrf/FH5oDNdC8T6d08fkVf2lOD8M2IvVYJbR+ZCC9MYd7u9XuMnzQAAAD4BgAAv322zFR11MdDTTCAhBkwIwuKuGqFfABj8Vwaw0LTJ8o7yThetsie4iEtkA/ZkYg6VMwUCX6aV1WIh3HoUu3GJ94LP36+uLzXk3jqlWlMEldFbAiLbMNRwYQN7vbh81B2/A4aoE1wiRLo74CHo6M5UtuV65NXtg2+Y3BElZ07SScVj6avrAX+p4t0GMRFNotH6yXe82iot7FP1mFH2IKxlt+IAf2C82MP3rs4h3r5sljMeiW+b/Q+0rHdCb7axG6gBQONn+Rvff+hBjZWh2fH1F1hDN5nhFgE8pyUcln26eWcWXrZT9hNx3xKtDyVlJqFR52bxOsRPNMutiq9GL0te59Igb5pU82g/EfFVeNRqWcCP0yu7ZzkGCMcS2iUc/gxKpkBx8CJkSlS2mlBaf4AoX4qbpDDIFofqRTep38rWyWdJJnPeRjvMNIDVpvqfet34QBV9tkQbuvJvBQ/+6nE3GlZ5Xy++m3CziLMzoeBT/c4hPUIybOa7tsdccZYUxdzeXsSDGPY8BEko5t+E+slkWiIzBqTRc1xEPMGfohcZ6stPacOn2uLoMSCk1bANktvcY+kcgSh1x9s+xcGGU39gByxBgXh28hBJ0DIgWVAZaztfOJxo4XnNhmDtwHJbNsNXsGnNcHcVOV3uU/yi4++mrXrT1+ntNL/VioZplH+Gof+QGAPtfpOcS0Quik64RX/6pmDtdUSz3PT1A+jSqQs75MXXNMbqBzgfdl38QYC3gK1sHkW61FOu2aksPjHlQnh5odDLETcWxA+bH2GTBwfCLKRa61JCUTbrGy3tlhg0x4gvJPDsbyftsV/ZjPZGbCKRREz0o0DrScdDTYfm2fZc/x+WugNkxOAIoGWo5Bu10Tj/3MavbqQGZVatFAAbWV59yjd+/a5cLEQqFQrrSvT7tMTVrk43xthLfw1m9fZdK40UIw8ZwLXhVeEbFxts+fjdidtkILft+PrkDU3XL8fGMttRhYKOvvGayYc2UUCTmKVTW6u8L1LZJEEOoJZqJQfBYkGUsoGC1GMU9IsQsvVros3h+LWNn0qwLkeOkGcDZyByshKIsrmS8mu9D8/AIL5I1T9ED1OX7dZC6l05fc3YsPVQYtaKFcNd3muJkAKHj8A9tS8XXCC3wia5pcUzAW3G2uTs+zUNk5FVrpI7KRekwGCkWSQYWIMGN0S2IRGP5IAfQBM5YWFd5gfSb8Q8YbTcAxF66U9C0sGjPj/GZ9ZIiGc+fuytLu+AWFmDS7x/d26Owkf0rDktZ8kgyb3zixuNenYahr7iZtnJx76EeTlRhnLL7AtsVVikF2QZaBrATGXxYFhfdfKUcgt5c7B64AjVAwOy7IVNSXJBpRgi63HwPUDEox64ZCTIHwvoJyX6Z00LEQYUKhltWqtW9eQLV79C4Q8NimagwnQAgTB0UwnD0wJxZkr7WPPLvA72Wr3c8NKL0V5CeAdAGjtiNPmXkslzkED6nWoXtBwB7A0nTq5Dos5zGM217YIPaZIfCiDRFb8KzY+IANiWLwyPpXBZdjqd0rI2sUDRAYB9AieUBgzWlSAxL96cxwfGewQ0I1Rlf2qshe6xHKxLnvq7OWdjuFV+Sd6J8zlCrsBGVsFUZ66TIEF4JmA4+9nQt9vyVMXsS6mrXnNgunkQZ1qP2fA5iEGTCXJyV4DGPQB+b5dtweke+r57MIWUWPz4H2/TyDyKzhdSzAYKg3zFLZgBL64WYkvR+KKENQK0o4t31YN1jXYQBS58VTO/uGGbcAaQL/+iR2MAn+1+FNXFuuCbeMI2d1ndWiDOVhyuOo7qgMhRWjMsj93kJqUuJIvKA1FCItnwYmvsj3buJtVK11MPVszC4qxVwoyfvhQRzzzjwXNoDw69IKCa/rJnDrs3T552tO3J8UDFYdHxwSPuCTDBEWHf1XLVFtb0DSskOxRQem7LPpw/IKG9Isarvz3ONX/yHKRwFFZiD4q0/x7XIGqvu8Y3h8KkcvsmIfwVYLGvgwljCtibbupzhCWcsfwXRNyGA9TbpEdHjm5RL4McifQvx9gZpwj5wvsZ5fPau9iij4cVQ9mWgXGS/ipWYVCFZZtPSkdsYMDiMW2bd0wsUgaHNw1+lKwheWvPc/PUVrwZyhciWU2/BDobAbtGwm82vkargwF1nYRQzugh/K70akARRPYKzMt8M/JzgqnPQwRG4WRyOHJOdRl8/uwtUwd3e9npDDxnfbVOGBDoybFrqx0H1qHKiAn5vlvxdqAa7b8JAjhp4OE0BLobsySHffhji0Xtv7bFd6coaRiPopJjFvYS6ua7+tzXz6uIHQo+/VEMuRDlTR37AWxjQ/mD1y2F9S5Ow/uTkES/bsA/FU11Q3Lj9yRyvD+KWf9vpFgbjE1AAAAAAcAALZrKjVaM+BE20C4/cCmzEjFDm7CGgfZQ0DBDQDjkrBazSkJIll046812CSJyDKplKnC48sA2265vmh/lJlWkD8Awk6WjMpUjh7f2RUBF9v9g9TUHnR5NVZ0Qt2Fk8r/UAr6L+O0kQIWcffcgG1/b9mEwIQ5ux/0x1yIfO8whl0b4ac+CClumY/fNgkbcUpi12u6qpzeq1kgFH7MXShg1/4XDEeGcHR20+LjpzHozSwhqjm9avSRPn4KADXfup2DC2E96DaUASBLjs/v27OuxPBg3YmGYPteMrz2L4uGZ8I2+2GgDALdUYd6gSQChOX0Hq81gRdgDMh+eAUWZURB05OQ34aLbtPFuVmxzWfxvo+MVqzUAOvzffgNDw8ujc6vs4QCa3KY+Hz6JbMNgIjwbXYPVOF0cBWjqtFzP3Ci05RwyzDV/q7C7bF5arYS6Ze/rXfCWW0ICklagHj5MyqDMT69CVvyVX1ivBaT9Bb8PwooQpI3+5UZFNtJFLMguhD3IBEn8FjLmfRkJ8GUdQfCfqcTYZkgg/RcE3rTl4ZAZXhnpWrj5CGlgkKdLmmi47buqa0XUQzG5sQbj7VwxK1ToBr6TmDY9IU47FPR8AboqJUt/ZwoBNAnhKorbv9VJzYy/EyMbVk5VobojJ/xXoYLBZbzZWmBzvOybd9NRgNViRo8Z9mUfxBe+NTdy51CTLcqjUmi9yUQ7qZzt92KuYzdjVaQbymTcCDtvns68AKad9rqTeJltL3IlZpuBIzooqAA9KPXeLN8PJ/aJAdFhKSfAxpxjGMc/LUERX5W7njdLM1RJFKG0ELFQ0f/2lSFYsWHFtZMSD+Q6bObsnQOWr17Xs/78+hRA6GCx6SPfowGkM+/nWLRnMSjgNWYS/hQAboyH02F99c0/w/Zib7WTZFqkaXLBSEFDV4s0zsyfJdA2D30xO4igi1zsDGI5S0lcgr/hiUdmjE1tIuP/3qGHiqYZW7J/z6NRDufRkbIB1Rx/MVTsSE+srW4R2mbsCxsm9npDO5pUT2WjCesZKe2hS0IQ9GAHUha+vExaCppnewUutnozZ8iG0UvPwFaMrXQaqrzXRUnJcFy7ZZpQ2xdWhNcmrSb2H453ld60La2c34W3jS8VEt/No6WCBbAskvVv1b7ELw98E8uK/oNS9zm/WJ8Dfc2cSbtACc+9SPu+IC69kLhFQZdfWXl2D2RDbSdaEmgq555jz/jS/+vlI2ESheJlUae4K0760Xm+3rQHXR36IoKTuhKJY8hrbhXOMymSvLUDPQHvYjAIbeQdj54S2FVzEQz81+evVc4jnRJrmV8hA+z7YYe6Y73+q4gT7kOwliFO/Q7jaAS38atVbnWvcTpYYvrKwQxE8JaXPsBwBWoaOi8lDmwWbJdnxmOJMBJENgcA0ESXuBG1qBujb56c8rhvh7+IrBt727lIlgW0EIAGllTP2NrW2DBeZWOKewqXlINhyPU1GTeNydKq8pGE//kZGRCDkD+KeRA27MLYV5FGJm5PE2/aVsvkzP9RlZJBg7O2KtYWlKE6kBLCRviKZBlKZDrvpwSqQhJ+XT9SkmcW7IGkkTDm1kw0d0I9RQL05bQckmwSR4dx4o2Wca0U/3rN3U9JUq7+NPSpiKkpjLwT9jnHE4K16kwYgoZ+x/DmZwnbWv19hkY5o2kILtWjj836fVt9i6RdKaF166cvvxMk+epCMWH3WjgKKhAvI5Q9BO04QTnZCj1E6M2ofUTn5HMRamcilhwJdsWNp4TJwpZdt6O8A3ffhUdCAyG4pI6vuviYW/hQNtAxyzGoYxZEQ+nEn2pjW59SrbuCDBeMwnMz5n8Pvpi5hn7s+vdQXT/7QHY+A1qw181y/nTHnqd24MszZIU/7/RCOCEn3BFUpci9LBqsYIdlptP3nRUEua5L9Q0M4obaPXHu9Ft0zXVeKUMcG8mw2Yi1x7Ss/qyC/omVgNGmmjxmSpPpuFLk0iNQAUOk1mnRcQxX9jEm6P3l9/yKOnTu3BoMH+OCw0/L5UnbhBVELYkQlTskT1315gl6WSieV6LravRw98K+pNV2TbEO+MPCc3O6D/TjNFYWUlVN9gGaODlmptX44W+JF1lPQplGRMdldbCgEgg0Hl7u1C6zTJUjTa9rL7k9uV+ISd7Rjx64VXrEMqKYYBEUsAtjn8oNlfXsyWXpP/ZEWYrO+2i0iG1hLKyWRVfXSeJcKUNzPiPCqoO9B78wYArEdE0GD9UoPz5eCSWv3SBFyc7EpqO3RyQMsWEcmaO5+xc3dDqUd9ZlN0TE8zZDZR59XOBj5kZw83RRJBaDidRzayrJbytGF8hG7ADVWmwEjExaRXWeu2CKIeaoV62MM4DoHXq9O2nkqdRgC9EiF3qEKcsfJN6MH02AAAAkAcAAImTQaXeFzUqJCm1KmbEwVLVfNnSVBJQeqgCJJS8surWGnmPLuJG2TU4HRSffswfrVy5ctHi1qYAvOSOW8FXNh1gcK2g66H0jqj3K2WzSL1TxWUEmEWiRmI+FIx6MRhMsAhWrAuopUNa3pZSPCen7eVLWRUIuCOUibsETLlprw576BoQ8/oOloc2bGOqYCjcI67WTHUgO1EP2RXwUqLaxqoLahOYJAmF/JGjY63jfBddzR49NiWHyuNPUBNsu4l+QVOzUJUEFNbyj4N52BTfay+MSvJVxb0Y5O/+99yefj+X727Cj1n6BmGc95kduwp4UWmtCCbsoC1lWzZkvgPNzOOdCnqaSHj/Qsrawx6Nvls687qhYYgGs/8HbERFYraq4d360qbHbxGyf2Ejp6Vtcd7iEeB2gVsYlVLjFbgCou1mo4wqVAqrILQKA11kCOYIg6ACJDypU9OFFn2wFOb9MyJRHNHXXpgNn3PUF8PCHIo/8ESQ+yQc7IF/aK82fAdEFCOtqakFunZmaeT9cGKsl5BsYGibWjeIHMgtD0Q2SSKaJA/n5e0SEtkhby2383RIzfuBDugJUwTXo3AXTtsYrkD/Yx0Wf0RB8wy5eLcKWtFWOU3/fCvir6NfzSZWIMlc4SLDQMtjzhyiuFx0vmurJgDsvuyz25tGD4K+crV1e+iCXUSAzz5OX0wHG+eHQnVkif+AHAADlX8tfASX/ovnUXMI2TSy5VBeeJiwxAiWrhKU13Uw1XSxm+x6fnRUlI5swwP7s9joCtJ3enObOASpeDMPLPjL2VVec9OxbUUzYwq2VLRclU7HP5txo8lgXBHmOHDeqaoj/OZl0DJPKFOVFJpApmW3jf1puHlp5ZFzOXcLqctntfjgGzlaWPocHrF4pxLfZpFE/F3rgepSUcTz6f/Bndp3Yu4Qh2FxWpUO/k7v34lMaKNekO8twt0/ILOEAwFHpZ6S4r7GPiZBRv25VN1OtjbjQsMS96rf4GB+25DvoFmZV1mYPbgya2qwBMeszYB7oYVUph1IG4wG9as83LrNNoZ70S91vOOo/jxWquErVICnQIS6N4RBv2lnS5yLbnj/evRaBvoJmTlxNNACINlDb4iDhmkKBR76LZy0oW/djIPAqyYOp35/oAC7mPH0r18/BeRjZG8e6s8KPfGkXlIo+BJtKUUOWw0PkNUUOnLBHa6UNKbdJ9pBTqc36TSOX7Q9ezg2amg1XLxumOzKEnS0tdvbf9e24TjbquNajSDGFfr6uDp5AdQ0GGjGQmuAGfAyWdLWMtPCtBEzLIKMuiZB7rKoYEcwADI0UYeON8IX47kdf6Og+77K3kss6MF4gBt4gSc0zpJV4ybudqnTPyph475ZHhDDeMtk+dvhqQugUp+IBgakf/7e/zo2Bclsp/2LhmpQbzHm148arTDIrpG3+zWiCpNTyJCDwmcdITKwgki1UR/7HDuYbQOUn5an2yLES7+7vQu88J4fDkeSFRPCNWhbvgQkYeJsV9UemYPZF/lFwrbGjsTCeVCPjJI43Lr+d0RGtGSbr13ZplWemJbBiHOHipo0lxFgBG2SPJ755EMQ2nWTV9Sv8N1XQF0WdfE2VrrXclyRFUHzTCbvttwiVz99jzKsP8y44wa8gCMfywpdJ5dPTFTycpnaMbtbuT7xeIj1qI8jjNHcVrfPJefnLYdzJga6MDmlGG1TGL/Iu2r35A8VJeb9H8EyqN+W0RgKqdI3H7GSQMUA72C9c5PZ0hXaQuoQj7fMVsjst8/hY+h/gE64aMuG8PnWf3qwcmGfZhqrZBif05HLpLd2jHdv5kp0k9zoktgNAsEn1mCXVOefBrWtuaerG/6/DDwBEVm8kzprS5dEBMWZN7Ef+4i9GpH6j1CIBm3FouM65RyYDWOg24prm1NhTdYqK5ZueoStIHYD9by2XLZUs74k5WeEIVpLic3M09nQl0vRZMxs3OXsu7Fd1gL2X4goHq1dDT2Z2jKyTpia2HCHTPKH26sxNDZGRl7qGV71kVORxwtSqVuAEVo85q0gupS8YS8LBZ8xst8vht15ApSzALtAl2Jzl4CLLbN5PjrltMNyKe+RczCbMn2xluopzjUFldGHvHgyQ0WulOsGx1MblIU3wo83NQ12VzkEzH7b4W6uN9wC/y0iEwEZL43PuATAMlcS4ZeUh9Hgk8f9Sb6TAiwnqNC8U2w1F/FJel6X+4iyNgGiH6eqMU32rP3ohJyHROx+UGNaU0mgpJfbmJhJPw0R7BhwkQVImEjdi+b7M7G6l5FG252Dbqa0W3TmmEx5SOiSdPtCS+tkzHOJ7arVonQHs4MqIsEw9mtI+36FNEksqR0LJ5E9d2TsP9wWg7AHrTccPHIZeetX9CHZmIdkqLV3YaYEJqaEz6pZ6MJ8l91YAK6y40fEK3QrcEHgnHMXDoZM8RTIHn6X0EU3bFBygtcQihFUtSHjQkZNkuXZ0iz1pBROTwHcESeC4U2E7REwstqCnXNMtGuMOZkeXcXqbnS8lHHRh5h+SLLJD2gw7nJ17cOf1gVXLASTNm/vZnBdYocdNnEv6sHuqv7qlnM/wP2Rfnc3AAAAiAcAALUaXq2U9ndlq473g8Eml1BNacj12Mhz4boJflI+ro85KE3D3BeV2TYJo1niiarBMWp7/OkFdJtqydTOUAp9bPBi+3ZFZimaXq8K8RE/H5TeBh5TsI8fCoGL+uByPRqu3WWRxES7JUIa3uT23Bxg35/U2hg4WoTefy8kJh9AM4mN7Qa9OJ54nOhJ6IcYerrUADNCBCLlwpRm3jTYP+p6aLRZUSblCxzHsWa7A1B/Nf40TBpOkweKtTuzkmORW+TgkKf+CUHjM/zrx3e46b5IkufR98Xxb0jF17KXZfuW1+OYwHCA3H1r76tMP4f3TKwup9jkRmDJKfb5IslwI7J4pmuapMlD2lqjsfc7I0DzAmty/BgOCCt17Nvmfn6nKFDCfBEWyVASrWd37SCZO1LW3GvCmhS3p665RjkIKxVjqWyO35TvBpQy8wNRgo9mkQ3pzQloHB0Fy2o8jdgT9m8J4V1emRXJISi8O2d05Z6veJ6X5MkVraeZeGJlrP2y5pc//MiJ/JotIeQcvN3kbm0ejpdke23sW/rFl3wI0ubUHw/OGqihuDWX897h96J19/Ogh4dITr1KJ2uL1S4YBrRetX+q13nU1brNhOf9pubnkZbbkCkeioGEju7hjhTbyF7+ERl8+hfYd5cIKp8/h/AE6/9FDUFsh21xDNM27rxaEUpZN/VxYn5H9iOTehJSfwUBU/M3Vq1wZBQMsqJanUirfSWTHZ1v8saFpbqXHN0xlTPZ5GxmZdwFyZXaI/SaHuB81qzcvK4twAqDH+6bY9Doy8ukVSIZSBzKeDaLeI7phU9GwhJiTZ9QOoiJfeDf3f5q4wRy5j8g2Rw+kKjPOBL4LJLiZ9ZV/cQshGQCh3V8yI5cyzchxs8TawLvlnixc/wavW+ZDVWyX2UPy49nZtYn8/aJrz8pEq++9GJEKntl/mVvd3s9ZBwZV5uabVQJ7LE06oc4pgCQwnFP2MbWMkKTzH3x3R9jh3EZiyKci+sg4WwzFJsIn4EDQk5AHD6R4mKZ8JymRM2DwXags+UGWfrrJYiy325YbN/TMr+KI03cWCfQC6nLcNmu+boy27TqzMXFA89SpIjwMTi1Fu+NvkqNl1AWvHncjYtFTi5lbJrb9JAX7fyT+lHWKeTVwoorvhvNWJEKOPeS2qwYR1siw80tiEz6+TYeDg0Prr3bUKnKXN3yILuJ8e55W0dg4uWER7uHGMAbCVvQKzHqlh9myLw0EFVxkO7EIAMYWUEQsX5suTtxJhHFuC5YZeamvx30YMKGMS/SwAbmtwsayHss5x+fZ5ZsfBnfGpqEnkHCGTn9Fb9sHtKD5HIW7IVJaC0T8CMfx2Bxg9vGjFTNuunMMC+o6E3ys+zR9UOYfdWJRAm0dFjf6Xy2pX+/MZpOZy4SMzGc8gAvEnWE7VgSM5rb0pzL9C4sVmSgYjmgtOZFngg0liEg8S6S1k0qkxMGI1FLk/4rR1v0pcMeeR29r9aTqyT12qQUw/T1I1V0CQJeeo232UYinVr2UcmTmQo9xXta01qtoVTSVPAWIZNAgrWM+9LibfTn3SJmPxqXa46cLHITLLcw0A+hiISsFgt1NglAyEriqalZW63RSY4+v026xjbjDnHZLcYv6OBFJ5UAKw9CtDnhm73X93WzTlMY5W/8d/V7Hal+q2GpkYEaTZFqZSPu/UbEo8ftBp4Ns7hMXvQ9V3vyYWC4ClPkjk2eRiyHZAknZ35FKbBVpx1UD2ZzZfM5MJdzUR5O8bMCe4HLcrWrtkuYZsmiLUouUp/3Edx1gDZYAbfmt9Sf01Lpcq2d5IkZMxqFGF6ogH5xwwD4LomYmYGEPHv2d9thNHCpvK/gn3hr2U+ocWvFaKMc9FimUuXrNAbIb8Az6/FyZoMgdXjPBqK2pUiQI2F/41bBrgay2dCeWTyY4l8B6X9APyl4C1QFCeQgn8SfjIDK3EV56kdyd97jnr81IrjysW+41YyjRZml0rYNvICoMoQbTmD4SiDVOV3/epH4lBjVIWuZhvcIR0oWtYM0NCScZu1M+gHTNGXhGlv0VhHbo9CIUTKdmyaUZOOm06TLlnr4+PG1flBcPELOZoDz9gAmBNtRGrU4R75z66KgPmqkx3kL8SsTWMwjOxTQlFs02cfOOiGkCwoTqDqshl71D8IwdIVziwbmaXf5na99lI5RHzVjz2JCKu0FMVapDse+hodHsuPgtn+Yd8kC7i4aZ221LSDbUXc1xlX1JGpQvtQJTlP2QEGlm6u9cx1qmHDTl7GiUp9jsF55biBTvDC6Px07Builci2UozxjnsobwYST+cxqvDdAWphyPN7VpK5qnF3wpSQt5XHtDhMns3RP/lyuQWJ7rDctLPDClulZ7gDQ+uk0RCQ96Y0EJKEGZfkQGg4g+TFN7MMclBrlmbyCUK2bjv7m/G0YaRSucg6OJVk5dL+dgdNJYR0786mugW/8abOC+TerkjLe+L77O3B+qw00rdzbgMtehQMjYRN3qJoKpah9EeOw6YWvtbJVvVkmbxbMyhu59B+Jynt+H2s2XpG553NwhBYMxNmU+LUL2NXFsC9zOAAAAIgHAABJ9KHCeBav1pK7jq+G/BuJ4Rcao65EOeiIbVmxuNHgq0uBwKMfB2pX5cs/mhcvaf+JC6tTaN+8i3IYFFy+z+NKcjx8pbFMsMJeO2+1KKmllzdsYlk7KSGHSmX0oIS5zmFOjcXqHyI4MBpi48RWXOr9Zg+FtVQXSzwwI+IiIDsKlrkFWttROm9R2EWrH3Zyhu9gBpM3Ciavu9vRttsqjTykzWxvTmq0QVxsus6ck0T3AYuNLeWjacRCBdfr9Pt4bRHeMY/lOiXvE1AFXdBUiN4Y3CorHt/DoJHG0DdqBUTjsHmFDXw/6yA6nDwQYUlhwlb48jK3cEeImLsbqy0/vT5UguFJPrHsq+o1jvL0214Emf4kvkqN78Ik1Zw+luliqwn+NpdX3wQxYt7oj7s8pYXG1fam2Xt0CbloMZxzrUwnHEynAYuFdYtTbwPbtd+LyBUcXqYgmjLwnbOkKtXnmFmh0/8CqIw5YklUnpeXi4vFzwYgU7KSWO+9ErFxvW77e8a9+by5X1XfU7MIlaoRDswHvrYSm5gvRfr3Iguo7U1kiO2BJcLj84hZJf2j3Jmdk/ybhnKNa7xBm/kNvYxzrQkxaKCc1lDsNfx+4CAJBrDUVhnpyv9rZFEsOovPyTipiCn9hs0Ug6872kpFRXiOf39Srwol1A+qg8r5s+mEXj+7CXkFv0ptnN3XyeDhtl6lz5ZF4GaZ2N4Ti+e1yxNybUhBXRuuPcfY5M8Aqjf4nU1ONkgDlDy2+FHBpTWEHEUNrj68v8E46nsPmQH+5/CIOFJ/XLDazM/BwA8jZY49UNfLiGdQ5k1Ryzu3hIxa03j2N5ladH7/wu5+E/2pWz/f9UDBZpDWFj6Z7FTLk7jm9JK43K5DPCkMlsG7alIuqLNHwYUkPNAjrZ6Ys51fiITEVhXLRdnWY7qn4YR3W6mdqew2CtO+Gw9HPB9M19uhCZDZRBo3v3I0H3nMs5nali0PkfVi3iDnBSOidO4YOttg+cHpVFfpvu/MkxgKZM0Pf+sMHuX0yGI8ClpsEs59qeZiBle7VwfZNU/+jOD+i2ln0X1RFWCm+UnJ6UfHPz0Xg6wK9ofT0g/zgagaYUB7Iahi88PaQl/p5IRi6/4BeUW1H/5swAgNMcsWK6GI97LA5xzmu3pUJKDcIs1z1UCSzpOjbPeBzorMf5EF7+gHGL6IjtuCkP2D4KdtBXLfgaO9ydvZ9OHI81LleOMl/7KvLXVPk1Ll4Dd6vxREARRUd82vK5l0Ca4jU5SboGtO41Z5yhdWkNBMp7Rgs5y1wnTlfD4G6rTpvymRxjYhS/lKkx2aYHWE0zzWKXis7BKVYmmrxC1bxF8TJMhPeOulpehy8cCCV23dkAyLkBy7JBsP4/tsluoBiHXT5y30NHvSXrFqruc3IGsjCg9orVTo4zlImtZIsADogZAcMxNgv+jMHG+e07MIcxcf77iQQWFRiuA2BeCQ8uTLR8dQmePzaZncPKUX7W5EnOC0HTtuhjqYyWDzSwcY5JT2U5U3E2JJF3GdIXYdRbHsUNJq/kPPsQyOKw6Z5E4oDUVvsEpTEc73FxQCG/1WFNylNrvw1+OKWgFkrtVbnMh8AEHR+oN+ZaHSaJY0Hd3vsgKkrLZFfFm7oSCjzbJ8X+Xwos2r7of89IIaXqbQBRrcnZPN2iK6LeuK9uWnbYPz87kWvl8S3yaNXDcyTeAH0h0YKMJla3RS2w2vHbHFUqweovDYx7KOGTuhASOYImxEdBlXhqLqmR0Qnb1t3mWe+VItrrW1kuVMffVSLRpRtMTBD73uRLablpm4xanOogZWBPEs5nSwl5CuV/z17ygBaruAPTu7le4XjX+EczXxCkIxDjd+MY2NefsxD+MG9bTLvSsgQi0Ru7Dwnvyi/29ie3VI6s4OUzOhIKy7gR+WrQlAF2qTJI4/eAeKSanODhIGr3dphdK38DZImziEbZEOGLmij0G+GwwAt6IUJjGrv/enTl9U8gM9CWHeWQ6jofxnpolqX2KdEPKyRfAoNujKF4wTjynqKpmyqHwwNs1NXnDpZ1XDxAulaL0HBIQgnp2q1SY+zhUyEPq18R9W0s6gS3qav8qdRryu55B3gy2JVR5WSa4z/5WQD2nNHXYch6tdunbW3DencFPXQ6Jk6IvunA03v2YZAQNony4jsbClotW5O9GemlOHgAZkOb3z9FtPImKJloG1drs4JEDsTD5G5kZaODtb36+tcvKBxqjyIww25LkDXZaqNZuUL6TqOZTnpntNaJCuhq3FkEIm+9wHiPGMErtCVR4kSxnoZfkEbVzGMtOdqWsK9L7ALesOyH5Tvi78E1eM8BYjUwJSRlQ/L4D21+6giLA17riII/QWKd5mMwX2vPshwVfy2Jiik+eMNyusIdhb2ip+MZ9kRSkelidceCvPXq1N+t8pAJrIcdfi1rUA8SveVe+VrtgBRxbGkwcykOt8kttHtsID+gtKccpye7R5eEnbCx2Y35VBYlBI3xuhfGiQA5sHYSlPlgVGQ+t7wjIqMfF9CdeUzvglIZPPeTK/6ScjqSo02hO0Rtqp0HOeoQ04iAAAAAA=');
