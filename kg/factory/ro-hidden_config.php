<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8576E8DE8D682838AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Rb0QA9Wf95Ot+G3kLdCurEaHutHTx4CroFRBuS4CjvAETI94Fe2a7LwXT0l5mMsvQf/hm21i2YubpUC4RPHLrQpvwZSqfxTu2OcwJj5zAfPxRPDrCzleyJ6IwSFWtWWK0c2owoFFSf9etG59VCMiaQd6FzMOePGQZGNykJwbalTi+cwf4XPnwzQAAAAgBAAAYTaAgKAFhJjgkfRRGwFZdE+cP3uGcJ/Ug2Yu+7tdlNJxIEIGSQbt3lDTdW1SZsal+UwQyTowgWGKQfysOYW0Bf3Xzd4WPdxEPRdXsuvMigm0HYVMxV1XEyZIE5kpXUORA4a+O8mge2soUTPt1zoxQYAIs2RSfSKO3AwdGW9jCob9PAtNMc8EUy61nWfl3ngazQpLtzbST19j3sbIe0EZ9d5Y+30LQpY9pizo3aWPdf/raUZiUAtLkE9N5N1Pyj1IcLhIqaZmVDE42Z97Vq3PKsgxk+5PYQbVPph2APmX/h85FnwOAYfAf/WHbUDIzTgmQL7hG+RaVuqJMDye4ktIATtWjI4gKFZe85wT7Ne1DbmhM2MPzDLgRIIsSMT6Yhatj/zngaVpJRHDsq6JHMESyflGxoB13VuE0g8n+u8YUfpnuLfZw/icgy1Bupn6bNgUkaT3FbVvvfGlzaO5f+We4mbaVWtEhczOP2EnmtbXBAp/PxM+41izk0Wfw3CMcM2xcnBwYffNlKAOJ3P2Mr9rDVqSy7kr8DEvx2EIFM7SFbsuwcj/fwtKnWEe3n6zKqlIN+XxdFkCIbI2S0ApJSJf5Nei+z1zMLYiozIb0VgDEeU1ldZWatNiWm27DbZ269uB2h2BF3u2F2IKSGl8OXzteHIRaomFtZwFJIxOl6S5x3QEZg6V2SX48NZuo1phYG6CfBR+rMGksoXcgccTSgtxfmBjvf2FSBlGLbsiqwRZzX+bY8xuEdWb4x62zx7mu07h77D7MFUf/p8v5nUdCbAsiRzGH+H46+dfeP9hDp5Qq4g+xIWi6+3Lc1gpgbkFF2M8AMd8UYCcH5vagOBG0C441ShQwub3aVcxr2gS9XuQY4omF0T75PTMAjok8QFVMvdODieXSaTry4xyCQni9N2rKc9domLwddLGDT6AAw0EKuuEVf5YWVZHFLS4u790TvtzJXUlD//7l7WRsriACSmSH/h/uzTyDL5w6leNH2Hfv78r08gym9A16gBvcpNO+qSlN+e32V1nE6tIweirKSwtkDhTCcqLwzNhhAzQw3Gxm+7TbwBp9bRHb+iq2gKxqpsgFZzevSCtABlbINBZyUOFbUnZBCTJex4+dI6rGLy6nbLvlLbwwQ7gkElH43Hpjoc5kxrlANNS9t3rOa7OqDVRvBi8hqgE2SjVmtSMVS2ob6WrH7SJDFzmqqjDv6R+j/x5LbWcHh9TBOjVmy5pS6Eg+gwncq2NFHEWczLn0RWO7uNf+72awZ5QBp8nZgxIXUUN+ESMFOJKPaSPWbMdoc3+PrGDR7tZjyZF5pkJ6l4ErLpNxUh/nIr40g6AnLgESQTaM5rHWMc+1INarTLuhh57MjOYVLpV005HxQ6s7eI4pl0s4/g8Xf+61DYYToWtmlsjNQAAACgEAABCVKe506s1cwKvtsvFa+hsZAwYZkmj7tejZlRSuwkxVXtC2D9t0ttH+A9a6K58zMfs5O086LAr+S1XJco6u9Q8J+0fxTzG9uMU05wLhoImB/5xdobnl8X18KYnjShn8EDdrp+fIBzQRP1k101RWMrClq0hmhnpHTANsZvocVfrHEPa8QBEA4KIW9/8R7bBjIgllXZ9yxYtyvBuh9yvzK262cuS7Ra1sMhO/D5XLr+RBy6JhoAJtXeSpNX/UwxNzbrPClD5u7xkLcHHpkwb/YnVLpV6g2bWpX5ijRZYhpX3yD1ty+rxEVC7DT4S9p7bzUeXdIF67ZIrUj82yqscfVxYDnLoZJrSeJMf4c0mUrWhrrtLIhMPuasNKHBjc9Yxe9zGPNhYtZdiArorU1ixJ3aVMtAcCb2PafnsOU9G/yo+FzktfrylbW3x9wpAuxZkUWlUFQuUdWagU/WhtP4v2oIVXNkMNW4dAFZubCtZvCuTQjISnpg7CXiPPZzNE7p59fvm4kS530gZlWex5zfXUCXRLvmcycKUuCEcS6RgI7xpJTKf67aJsBcu70MMiHPkrrJb9/inf9+tVvLoTsl3TDQ1yQyZuE1QjrvjrpHU/BRqZ0cmwby3bDBUR3d+JXX71gG2vrFB/52v+jneUNEKmOOOm2eWNrecv9VDzb3pfFftplnCpm+6Q27yrEuO15TquvB4zvIBIDjgyL1YMZUSkfQGw+ka3Oyh0W8563ygQFSx8gPpgNAoTNmu6rF15JkkORwvQrkO2jDn7zcB94R5UEQWK/DsHFSlPUbfi/6h4ORaBERJXs7Z4nfrVA5uh+QbGz2piZwbRgJ5dm37CywpIJ3yHVYx5t1A6P8E7UmTqUn5CzOCVzpT5pwSqWoMxA3YbgvrYAL5irJtOMsEb8f53KTgpMeRitl817NuputlwDtdxBdNpjLBcaBX7kjAczcb8c6dLILMAznIBRC5e0nuIk7BZ7O3XkgfK5iWPiBKsxeK/4KJpI3CDEiCRRUZL3Nk7CcSXEjm8MVkd0OGb7P8xFDCfBWAfQurnsj/A22MafeTyzFur51ESxGavdLwb7eJwUkvGLnKWdzOHA32a2EDNMoDKCmSkUP2KKvJkhjcXW5bHf2+5ilgs2vE3VAjLmRrLXPOya6vmhm07DhQprx9KxJGp4iDiWMUeds1ffTvMYcwEOzp5YUZdcOYm4ls6M5i+bDDQjR2lcmbUYobBY4AgEI1BjqEpw0AS86sS1flvDPb0njKOsm8JkTduxdMsA0zDwHfR6hKsnwtBMK7wk0gGChMpYfLILFLKfutORUGOXcSTyFjpzW01R9RnCYBRqX3JeePsZJA1ccqU65oZNJBp2zWixdXgCE+Wx6FKPTBIvDPEALydzpxNEcSLupjuuxxstvN+yRx/ToHCzYAAADwBAAAbnA8fb3ez6lEMGdbCkSwJBH8ZVWrl+0cQi8oakQHd8PJZHhUl+DjUYdisCZjF3qUt5w075WMQ4CLmtp6n7jWp22Ykl/SPqmALfLn4Z9NKp8ysuXVYxTgoOhuJPy4cyCEawnnvK3ofsT1t+bK82TEBGMiptfG0xuUZndP55fUAiZYHHRa+R70dvrThLecnbDFdpvB8yBGRtARM3F0byv40FbYJy4yQYSYHSTXV6c4uIG2IaZh4YXLgQK5kjvFAqp/aBKenU1U8YGurPHrrBF1k+aPoZ3TDEBqoKhrE8LHm2XiAnsGeuAVcaxCrdx6JSE48Mv9jL6cAgrNdC+/JPHyGFehnmzlGS/ZtU/kuCeYWJZp/mS2M/rttozVSIHoh2NmTUmeBa/1P7HnYWObChuT4aB/50o5a4f8bGLt99mtzgpwKVUESywpuiKQpArKBhcTMuU9LHPwW5LZbIoiZjbUlT+Tct4w/rUTdrEKeNVCE20fWR3xjWkX+VCqiPenj4mqmgcoEAaYADjC2mBCvlm0sC0x0DcNOhs22oZrif4+9IVSK9wyzqMkKEbagsQeKvhJ7l+mxhqPevXxvZEcDEgtwfVDkAhLh44hRarXibT7NyRUk8ojcooYFHyzfHJ0gUw9o8ofg6CF22Sdl5uPOIGUWfNaQaVJBkMRhIu1p4h1G73md2eg2ISTK/iurUQxubT9RNXulT5JG55oj9DVySFEdCRu4ROloh6EVOlxwiiYdD4TDJoRc3mYK+hf0WY08qO/fnt2YqacKvHL6FFQHDl0dDC3tmgBMP2wovxBNh5rImK2IO1NK/emq+8oDUU3bJXzKRA/k77uDHUvbFuBZSXZI1K5uwmaV0LkiW3AKSCtoEy8VVCQZx3d78pn4VrkJR/2jQpz8BYWqGKWzClQe/HTBnBDLpJCpk/JQK5Lhy55heV+dk/6Q1Tpov6yhwPv2tU6l0vPBKWGGZU8BhrKr3SpZpGF8xrZpBNuW9AFtD1nALq/uXsJIfnxTTUvW3B/eW+CZnVtWmfbNIiXaZsioKeVuTLAnvGlLAPerQ76BQ/LYE7jDtnhsLXKAgcRHfGgtwYzjAdPt4e6hfJytN+bi3SE9pikWwjYkermCfiShpAqiVjPXCbjLO6S/1dfefwGgyEVxhfC3fgddWvi8un3s6E5tbwbPKS/sMKihGVeSSzzPgY0QzsQCqn2ozwhoAYevHhnmGUrl21V/Qpt6IsT9/v7qvZCM2i45/hYeNDJwyh16L+mj75wrUzgEDB8+lY7pDdF3eRxdoa7woTCD13N10cYJj8/HxJiWnkAtL6ADCCFf/UqRbTYgRTq7esJmdw41yFBg42c70HcVw2HbIGt0NLSg0zj7waIh4GhBBaiF2lzFv2qPyJMlEmThk4fAaSuQG16fLWxi3QzR/zjm99uLfJhL3PfICvyxyfYllMAUWBe83WzvW83UXlwWOwODfjQzFDQzvACqoDjwpyy/iG0nY69e6LutvMV5X3syniDpG3fgoDqz5xcuOFWgKqfBoYtk/G1fEmHhbgCp7111M+Y3Jo2HPzwTVcXzEXthLQ/ncY/gZXNFjCBPXYOiNCRHzQkDMI72UBV1J0SkyoKQKyDwENFEPifvre9zsUUXHObNXo9/pDF6SiWxMQjBUP4bWN27Irxcb5ljXBfDcmcfGZZd9c0kzcAAADABAAApujKVhgQyFnf8UeIVvXSqZHUjG7u/T+nBja6kBK+rtPbXsFpbw9bGxRD9vCpuy2ezKHuQ5A9gW4gGdn4y6/SmWVGt6GQWAudV4sXwXZ9NGiCzh+BPd6wLXjYmVShcj30/Ly0ui0I81Ewer/q2/8W6OhRP9N8AbCXsc3d+aj3VlnZfNsbkgbNuyvXJ5PT6ze2Ktvnr7poB5EuvTkvYesJuNti5Osaaqvjdcz/gqw4e7JahJErPDumutwFdDn0S3WmOA7CRmsaCT7xaYs1Y5KWAG/5sKmAPew3M3GH3T0RskdJwaXDP+mhn5R4L83wSIMBu5V4jc2HLESaErCWboz54OTuz3YHuNOa/06ljUwbPLR1uJ8w3RI5HyZICHaftj14MaY3EmleB506XkVc5B2rMmXaAibFsnRqd6Vpl9CnoF+ZvSiE8Uv87ZzydiDcbakMYGaDWeGRAceo0cCDKdGkq1mRmMyd52+gqAY1Uh74kdMJCoG7V49nx9O08EtNTtdRrjtc8UZ242hsclRdVRWJ3xYIlTG1DYn2I1t8E+Z5G4YwM8Djqn2cwP+lQwgI0IELe01TjPfq/Vd+8XhRU6KUzgLoV3AQYkjJCtkRcueyjbUHXGEaoYky245I5ODkimLmvP6ULS++sMy+snJ5QQdnamjeYVnsM7ji9cSXbzRUVq2qtJwfRFdL4WUQsuGWAw18pJLkHIS5SGXvmiQdJYvBjO1wrAS6LlVFu4TXyAArhfRNLyUbg6ue2U3fBbfIEDAkJL3+rnTqkhDJlzlFZsF2nOjhnoPcuFsEhWvQUyPRDDpKcmNJDRY1MUNk/KNaWQSDHygid5OmtmxnRL4OAVAyoLKVNCBjdP+/f1IarcpPG3Ssn+i3DqQ0gLKa5L9z4ow4DKXyzeBO0/0VrYU2rWDFgBZhp813NUdqLOw2pyVFxOszzh/OLLJ7ReVxQMf2m+60VOkLyvLpNdO4OlZyzhB/AembLoQeSYYDhu8iPrOdY8Iy4eG10tuyjKjlplLw9KhkzSO5JJZKHOkmytfYNs7jkWflkjGJF4WOvm+xV+iLhUgzGGdwlvv6mYuInhoPYKar7cdjzb1KnjedRFjvllfZdTXgYznlKvB+04pM22C6o9bbvbzcgdOXKdAXLZ6UAyAibDrX3d+QlN1bl0sY9xoYTKeb9bQmpUKCN4Dyur5qvJ162I31CsnMPQaSGH1V40l9+P+30rlhzETE0oAjwp6fOLTfzZX44qUz/SW36EiiZc1XU4l+9z51gTtPXw/CyNpj1+VYoHOVXfrG71fCYH2U1pt7B873bMgaAvxyu/orRi0mjp0pKhDw9NUw6/XnA2wFPD9Q0zKVFt9/V2PMN1g7mL4ciNF5nm1nTHwBPKMcifC3Oou77DI0zREB8Q5ZjjL4l797QAZGCufogpOlFNmBE8ZzYRxWyDeJtBayOU3MGY2yrRX+KKqOju3RY3t05a6ql4UjegyzhsN9Bu0QMKCyKaHJLLPtz5L3sh0z+n100TvKIeikfj+4wEpT67itoIS+DKhQy+GoV6Om5rzzhkUjlWQhNKieH9Hf8KWcWPIM1XE2voP5ostmegXckflmKlJP7D4rsqPEitMuUq78ZJ8OUDgAAADABAAAnn4mA/uwi1lV3NhXbxHMcLyOEAIXrxNWVarE3agl702qbPYS88sPN29S/k0rSD1kePjX2k2Sx4Ked28MaejmQMC4Yl8kAV4ZebZQBXqFcw7ichnyq+EOdGzPwRYmDwA1+5Bljxuo4RSsKD+cLIpq3CXJd8bXIMSSdkNB7Gx2ZAMRAZRGDOMViGeselxS9rl1RHgZn5wxexbmXOIP8epMf0EjrjZuWwcgg5/rLHG9oMRYV3mwMx4D9HWVcgZ+0zi6ZaWEMAhMXIwTqWar15YtSfDWFdapFVHeuoSiTy07aAPmGVjnL7mCwPVAHFAA+hwafnkfqhHDs0DgVuKnQYGsnkrNOLF/58fLVZqPGIgPCL1t3o7w6cYLDtSo1sNEbi4DGvVQkwQh6zGyVLH7C4dZ5GjUZrYJCtw+rD4iHafN2vMY0x9vF9JW9JiHd34V6LhOhK+9cs5PuPxN7mYF2F7H7k7GyiwwOB4dMuFimdFqSkS42I5Pi8zli2Dm7iJkA37ZFictCkzbZJtd0cu7/IndBHOgiOoBsSgsJJvlWNkOPJi8sZ/dwXN1mZCDDu9azEeZ1ycxL6xcYGNm4kkSDUeZqAqLvjJRPg4RS5OM/Zfr66gferlCDKrjlIpDl0KAw3wr9OQb8SxT4vbPQBIgmR6vaKUlEGitV1xspE36o27o4TrEKva9TaTrN6Sbry5uKpIg1eGfRViJ8IhA4YIU4O8as5OmabNo4XmSDyoLSWELdLvg8m73n6ZaljD0C7x1J7GoyP43iIaebYuMsR3ncfRxRyRPrZDhrfDB8riOe7XCcffSzzm0VE14hGUnME/UQI7Qg7IlOl/HmOIUV9kJEIIPFyFIXiMil3aGvHIIqraUcd96ZLrzu4G0IdtbVAz2KHatSl7kNF4mjOturGOjMqNtXRF5pF1YkHBFnXQLbmwwLbttGM5Rfxqqnr6Mugx1+mNfH585rdq9oViIcGNyoKIz38UInzXyhqTmWcU06cMPWLw31Ag4mZLTikYpla4MT4+XmEKumuvP/RATJMCHvlAsCok2QDm5H8Z6bpN/IX9w7CqqhTFoTEWj6fG/4ql3u9TN0+JcuQnwDA8hBtg6oi00+2Uk/rvOqdL14WgAj7ePzPnAbgPVPdAleRP56sAfZgSXdIvfJrE/7gR4ilib7csh/4J/vx63orV9Bs4xyFhqbGGb9C6oWW82dKh6Xx8kUZ1Q7qphhGj2tDn3x4iEQBgfEmFwbD6Vr2oIKcJRBqCIGpV1js6r5W7ROGIbjat59NmQSS60jvqF/cmNe6pJ8K06Su35weJJQF+/8AANVlS+aeazVAnXEzk4kliGktougP1OGrWryg1GV0O9+NSqmx5T5yTIzgk6f+rSyVz4uLBEVHWPrxSmmlKTB0vcpOhwvD0yaUKwaGQRQK1a0Dl4ryu9+PFAZVNpl2E102ezLOFvdfcOlwqa1nDktf6mpsyJshwWyIpQktRBkisRQ9Ag6BP+8ihobHb84xUffKKTD3SyQ5WSdccsi2Uz8G8bcYEBE6BvnR8xfEf+V1WzgdhzBLrfSBSkbfTahzL3dgL5vDf08YRm7WXZZZQqFYj9gMVTY2+I3mkibc4YEjH+Hqy5gq5tUwAAAAA=');
