<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EC3FD2B48D683CCEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/0jzUvqTdQsrJXsgLcFP1W9mXTjxBIJz6UsXI4TfprM2biiP21yHzL4aPrGDfR3o58em6vd6i1DBmKWZ1Lvej2z7Vr248BIJtx7CJBR9d79UIBuNvI/v32NMkkL5NlZ5oQSAjUbe+JQYpgHrtn4qsmkOonS2Z6/JaLv8FTPD5IcExlEGyIt8yLTQAAADQDQAA8Klft/onnKufMmpNv7n1CkAIr21l2HKJiQklCq+u3buXIol4Gn17i5pa08PEXzMNGSpI+F5cRyodOwTb4zniq1VS/8sL9RkEr+SSoFSR8F9OKGNFX6ZNwCI3h9TfGeMCVLpEgfhVhgpQ7/vosrl0vl+PQh8bzBC9wx8etlmCp7ruYPiQaM7uCitxPnk9HJSuWBp8PLcw0f3fg1LyahiL+U/vf8BMfo2uGBpN9YgY1WrhQ9Q8iQWwtn6UKG9xXFn/W5MjHh1yXmPnMc8iCnHjF7wgyQRsqYqu9fLNUF/jC1VXAaUJCVTtvYjVyefYCTMlibBkyjaI0hRehUtVCXSQzbqypwaq97pQBFBIMqH40oJ3Py44mYql9c764tiIl3MvEuduLTcvswA5XNBlMBw7JPCPoADCkfSueFgC2zLvp00o7paMI2//iGMXWu8wecvR75W0GaVSKQaqZmwoP2Zp8AKxpjLO6e1+ANLdizeSnDt6WRPPKIafO4G/cV+OX5aLAhHsEoMM+0jJxudxnmrqCvsW7cMvWUmUdv5znLW5b6/3axy+xYnmLEJCm3ywrkL4iLk38TPMRl3KgIBRmqfDrcwcyfgkZt6LW1j5TTNyYt7wvCb1ov5yjWAhtUKujQOzzVE6M2H6mdNrcWx15AD04w76HVEv0M+wzAcIOhCS+MbjyfSOef6zMC+24gaRqze1BdN9W3Ye+8pTHa/Kg1XdXcWW+EeV4RA/6KNgsd4w1mEAgfziiYaPSr0oF21K4waEqxlpr+xFjaMRRq/bhcB5Cj0rMgvZfNi6o9dTFGkGthaFZGfCX1uT4pF4nN0vJaQJrh5yYgKvmtG4e6SovXBaXlTsH3abn2ZLT2hO9MvLQ6g4aMUU32K7O51yCHw4pwVgAptIMXZRBh2+TdpP3lXoVc6KYWVBtd17asnlwrZsbaWtCPS99grfS8p3/DuT84nPGQtkFjiVPXOPuCDAUM0+qKraWyy2nwIBQfkkSwuurCyBcapgEHP0RLsNbVYhr/gI+XJq5b8GDUNgJT2HgN6c9zGQ5al9HVngvHafksQr7Yl6/tpJgtFgDJV/n7Y12pyokGdbQwo4esBRurDNGOeb0SOgQ6iwGw3qRk6k7DJ/sqWwdIhJI5Oqe+dF8VFDEOfDmt14vFIrL34SPfHJhwWEmFkEvaZs7jMeqAx4C+WkuVPx9QqeYMtrUB05G0+9WwxjvnEHGlkfiFUKOQ3aqsYJYoRFmG1J9SajUtC0RXmBAZIyj6TbTA79UGTGeA+kE51DHNWiTUEOPZwidCDLRHFAPEKz6+PQirXpVRrm0hV9PPNOg9KeZdNKpP2FaxcH+2zEjXY1iM+5ddWOeqJ3FizPhthZ/t4NAWcwiC7/80B1DBwEXZPGcR91p8f9bCb0u0PZwAj6ww9ukAOyxEBw0lXWa9D3MAuvTpMTVjJPyTbPqbsyX58Pu1AJ+G/ZvydYr+JerHMnzqeXDnrg0ALPyYYBWvp/5OyLwUzoaoG0AY5BDnnwUW/3Qrm+EPYiH90W4nftzMYJ3IKFmnZDK91XbUxPqN+3+AFjpsZWHvWxwjj6ad7Z8Jun1RD08F7ngaA1E4ZJ9WunB90KV6VMbgNhe3G+k420c62dg47ix/l4QWeWB/HPJbwzoT5IAAXrqfZd3qZ0veBtYFVDoBX+Kpm0yJ89JkM04pjCryXWYJMuRFay5TFgVp+3cS9tPec9lXmKTWs1i/uHCkLMl+tD66nmTuxExBMK8e0OYKHKiuHvpJKsDtNaq+UorwmejhljzzClKTWzEz/eaBhPk2CYL3zJxpYOAL+xikelc/CkaSus+oPKXbc6noOCQauH+2Uq1DdRG1KCD4HAPEIy22dNrTPjRnbRBhiZxRdOQlo5b4do31xQMI3jgwSNWE5ozWc9RC1PNfIOr05THVTbx+N4IAmPW2Fl/rMHLQssI2sWeR8ZtdNeO8Vg6LsVl5+rA4HnUQkd3bgd5V3HKdrYHA0mLYiyHpaWb4RG9x722tSAuNG/kuD8Av8FoleqAaoCboUvqRgyAkG2y23F8eIkZ5p10w/OZMhqo7AINgWX3AfYbVh42On6eWJgVqbUQLrtSQMIAZbPNKHi6YAR5IPumcmN1G6LCEgFN0nrHjr3ISB8qMHZW8rw9opRuoFMSzo2QY1H5rVS4BFHLnndArRuWuCD8HmR5Atv1FrlON8QWSMAiiGUhM8/vJ7WXhLd0IoeQnDXYDY4614BJ8q3ZoWDzHzXI23EhviHyu71rw5xvTSKcdsaqhAo0OFY2yqTzm0HAqnZDpV2TBEtCJIic9X8FvEl4kYIbl4inTgby3r2XqH5XeZImDyF/aSyNVdvruoiIIdDAysM1J/0mOHcXfrhsbhyQ8GBBHy8MyH1T1X4VJiiucnYV3TT5X4gyFthKjU1ObU3ZqVMrHnk4NtHKln8amc45YUi6fxtIHI5k86+5qWImZcP4zMJ1d/i3rTh7jFeopwrp0c1/yrxXlY30Dw7lXRHhvxs74GQbxTDYWeg5fcpjg3NO4YXdeQE1ov0ZjXjMYA9zzoLQtYtpKclMGvdK4ExTAFlSdUR0U/UBERuLe5aTiU1cd7KfcfYfEf7ocLOhxkJe/IGHjY/PWBgJaiNSHwgjS1hn2cYGLIgSh1qCdWqMMzem3xtKPSD/GCd9U/TtxazIQ1ZO1J6m/7wMDCvciiRQ+y9cKF+XfqYl5YMQ/STDUuV3RjvKulpp1ju4iiZxjr/05XcmzyiyBYNMuZ/On/RfsK+yzVWiSgcRzwAc+/y+1sXDdASB/OLNTBMiQpwye7nul82BBZNK9+G5jPMC1zRNY7qaLTU9eYINfsN5Izu9A+67NAq0fJCXOl+FyTfJ46goIiMptfMV52vqSfg0YVU7NIDYF77i6gAyrQIIKJJk9dM9iXgXrauUSnGOSBfFvFBciE/fh99UrdL9CpfNT2Ga1oZR2QEHlRCndPqGk2ICfD0RaZucsf7vica3r28Ww1HEE4BbPPj8uFDsZbITLG3Y2kuDhjJ9GUWn/tIC6DYrvGiojfxEz+MBrcplf6fl5GWIHUXDTLJ1zVxc0uhBM1n5U+7HxmwkGnGuAMi2NfDTeYwxqCnu44zzp2GXL+DvDrNXul7WAIpgvj3Bns40gB14jBTHxPDK2AkoOP8BkevazTlu42KKuluYLpPerZqY57D2TxoJPTwqOqs4sJa56auDYiQQUB216O+n6yrInLFxgAvnRfMpbtwhE42e1m/t3ItDqdeaiR+F+hSxjsOgHzYELjfuJdjF5O/UgtSUAgtvSIqWVakHddOx0hbi38fiyR2ZUP58ITlBY4yt6NeNQsOaA0lSflSAhqIpb55e9Ls6Bdr/V/zrI9botRNt+POMUp5QcCtJBQAPcJm2TkvX+125idOV1axkIW5p6l/gFTliphc2h6mvnljERuXIVYYnhSKTkkvqFCEQlU8sP6c6cCiK0bmgwxS1sIUbCEj5aHUJkjsmDo0it9ON02OAQzsIVeaCBKdIoX0EBon1c2vhAXMfASaxhK3CiUC2ZhRWeX32lVb0idBX8viPqtw8BQUyPeJAcge1KQAgfKZt2Aynuxn9/YhnOhDpNd1K1ISMQv/JA8g7ldPiYPjcIGsUrDt2BBMZXduNVtfAuJ/oxGefqRSihI0Wd42KbI/33hnWidgPQXYmoqH1fCyGB9TsoQQ5+d3x0koke9A1hoyardWbbokR7lSuWD/FBv/lBb8Ven5wA5N/Ok+ovh+MRywZmUr4wQb9qqb+iai7cogwe5XwfX8nb7RncigLqj8xh9EdS49/0zRzZctF2GZ10nP2RPjejJEEE94p/sZRQNz4mESgxGil+ntBbreBsJk9BqGWVHTf76X+n71685NFBCpUhKGkGyAJQFMMG3oKNVsRL7de/Srn+Dg4XaCFibewuaRQzcg31l4TPgxJgeQo+UoAfKWTg+7H/eDfTkHYyvRoekioGrEPb0sBpwWDJTT5e8iBpH34/X1Rwhw7b/DkYUuAr0lSOpcArtvkKd6a43Px0uda/G8uAqALYLpIbjuHaYEiD2j2dXSr75IDHaki1TC0VkZ68vjvFeZYt+22KrRMf7wctWN4JRLSz5Ho1+Arsd7XGpC15qg9uTdLkOUSZhzqhezjGA/FXu8VnEkjXHTKI++J97xVm33Z4M3E/cEjzLdUMDcZGGM+OIQtyoe2lBryREC40qzaMm4dyX5X2hEWKPeYylE/6DV5508faMb1ROkHjfmgktty60lkg9N3a9AQxJ0bZz0vMMcUsBI1coubxLYeewDbYs4F7EOPAR0k1UvkzIbT27+XU6+J6lU1z2X/ciJtL2C2o09rl9sN5zbN2dVQkLqa/mncT4yjtbivr5mX6eWjtm1Td6137XAHkrRY+tzWPaYyGkAp9IPoJlUQZhr2BWhA/tNy37WCb6NuufwpYobs3PkhgOATySh0LAFxxMUSiElRq2UA1tVBP/g12SxnMZA4jbTkzXxHeW/iAQRLJvGh94rt7d4cPPB5p1DKLxvUadq+BdaM1NuOpNhJWrraApJf40JUsEI2Zp9EhDcIEFrhYkUllkJjltrelEpkBwqwX7u0mvpdEHzhpe0LCoE9xlmnE5QNpU6dR9F1UoXGCbdgLoI4M7CTs/SXxMNnaJswljZhhX1kPf9Jr8QTVufpeS9JL0ckaHbU42bALYRnQTFDbGAIte2Wtw1AAAAsA0AAHBna+xXS0KZYOQunr8rmjFAX46tg/4MbF0lHv3rCrGVTDHYzoD87RL2Kt8jL4z56zso2g2zDNzzVL2p0pdoEhLCd4JL8gyNg+aB96naQkTvc3IyG9C8wvSU0s1Im/Efd1wZaFwpDCuxMrIHyHye9etbq8Dt+iQcJ7VLPBhjaBaDlM0TNkfz0oLYHCy68fKGYqosY0RBTJazQQDrgmEWBRioWt9i38WysPYFzNFzJRyh+2n6C47DPFLleKc0sUXq/Lf1ojE7JsneU6o7lGWWxT5M1UNc7g52143nzFQzSmJOlqF3EQOwFJvpQWhoB/qnxDEOXzpTbxCiOOQBu4UjQM1vRqDfXVVFrNnYcXeITRWhM0/lFHZzRoIVF/gMmgCA2Ubr2BI+w7fh3DdZt5dM2QuUNg/qZJzVakdZImY1ryMqOq2DgtT2TtGXCD7sIBFV6ej6+SZLVn55GDXpnyIeuCbspRoV+JC5WFn+D2l2iWfBDp4mKuht+a6qW/S9itcoGvf9CJ3XTHHjjSApLIm5brgJeT0dHEnWtRKSKxBNn/7Bg7+4OQjeupUqzxnkzjdl2IwVokQzT8axVWw7h/SX6CxIBCAZgYVnqTdR1Ha+l2zcr00inVgjeLyjYmNPoz6Xt57GU4ynAjC9e9EtLJ+qqu2AAeuGOR1EfC2hCfLTRST+049Po78Fq7fUG3iiDC2xmEEGqZj/3b+NOMnS5+c/c3cZ3Y4dqehFo4NQoewEZ0tgVqOPYbw1jP35ZOkoi6O+65Z2z6iAriubRahH+k2nldQbWvVSHVPIaSfmCyPCHBVjGQzXHT4lfknBVZspja56/C3ZzmkS9iqiA8ICMA4yJPMv6u6CdwsIoMjCBqumQhrrX3Na9ZncuEUMfI1t79ssn+ljbmxUSF0K5G8qoUV/my8iO7AKAx4o6rNtr+Sex/YbS/0+zlGVHbnisEvToWuomMqfmr7/IrLa9TMLAQzcTjG2thjqkE7X5TSKiOZKMEqrCOTBqSK0Nk5uYUxDI9VqAFAQ163G/oe+Yh0+cLuCitxXDzORpgTLfOfmJQ/gG4Z/PT73FDKQjqVIeznVDx3okm/NeGVMC1stQr4JBF/HxURb64XOihKH47290O9ZrJ0fGPgZZSbUMDOo1+Q7JpIbn9+3/XQdBdpskMiuQJLEjrFFsB+BJE1gJ3oDgQrmJLMBwPIPvKjpWmvN+PfpwBWFJOhQ3J6IloAtXCQa7eVBbzUzJcKxwfW/bFWuy8gUQGX/axflYChIii/NJC14u1C67hfL/4HAd1iICuoatmmVS9UtFyjIcm7GRI0VbXU31W4PakF55dgJmSWmWQtDyy6xwwdcopC7t4RpSSTiPUJEeHSfAJm4qj1Gonh0Nq7QABFHlY0qkFiT/pHcRQRRUj7bogqMDMMfW6C5pWxQOVNeDC1UWKLXJioLa5R8KguilbxfZM38qbwOVTLamAbT4Ee5ArR8TvoeSPvdoHSKkoOGYtqccLbP5YytR/d2sh21/gI7EvFlbvqBs4jlaMYtYwsBDFU0yg5hldWqI7VaDoDo7dkKqnsRVBOZd4CjTHkTcjxVEP+J8qUV4NZR+aqZmAHR7P421ITAm7yjKTkIDFoqzy1kz7PkUW4rriPCEmx4Zn+CTo9LO3gPfa0F2oOSKLwy90K5x2Oe6JmpeVng53wmCk1pdTcbKBS3r1B4e+0DSWU49oaDcg13ZWHNMitaIspwakTvatehWIWFvxWCXgkDMigkeYUdi3pxLckR10fT2tOnkaA4XVHYxnMiyQvMk5vSvkU2xgLSGfI0cGphKnmJH9aKt0idrbUJnzXzeFKz2Qhll06gVVSYnnMMFcEX+v95AfYgXBMiSl1tPAQ5kwxKbFuUGXbFE6z6pWEHy9yxgGJI9ft8R6h87yISCIP5dCKXIR5GmCBy+pde68dAm4tdDm8yG6I11hZrcVsKQGln4tmM7mtPYiAuaysqZHww7V0JWmI/krZV2+QjnuWOpoqlAsgbjwEMtej0IDlafwjDDm5Hg2aJ8v69vJtfk7I5wTZL9VdglEXmv/dLGdb0wiAmvOdrS+WOqjRfJ/hz21OCwiE/j0Wq8VjGfmZJKgxGQg3ExQZBrAUdPiGLS3V/0sSzNbQwnsl4DcdAr8F4yiAqz13EIy96x4wCmxK2P2QvoZi/1b/LTOIZj9i7sKG80CLA694Pn/Tli1XOt4hqxvuCePOQ3Yox+dbTrKwkKy7LD3P2q8DtKxK8MY8BpAQ3fHJMyjoL6U79s4uCMYhtABPOxNx+sH1N3XooBdriVNif9XrshmcSj1CiufnDhq9ef5fO/wq3Lh63o6UONNueImOLgyZ6VlbsSlabU2L7RJxnI2L1ijotXdbqTRc1UJV3WGf6VQmSuWQIXCrZeNchiF6W2lVOAtw6Y1Dg0qcpfNzlcU02dLBeIl04bG4JjXELDLnhTGgf2QmMroEbFXLSaQ4Rv0KrwuiwK2QqGq0VwGxpYbTaG+qYBBtyyioKq26wYIm92lsMuh/sb4wlXoTlbKHuG2rseRcjVFYAr9ZIYP1apxj87GOKXUD6pnsU4jxaV5KxBfI72REQXwd4Kuz5RJV8IEO0idGAMRbKY8OrgbNRptjS7qnErYADfSC2yexbnIO2grgLff18Gppa6PvCBQImjMv6UlmMhy1nUHUacQTTOWgmmIp5/IxQbF9xcp3RVWSNgK1a0m+TVKZ9gp9ZL1KL4HM7xW6ER4v3nduqspKXaYpRdbzEQmUW0CCR/D4XYP5aankxgRdYL83xqsqp8ic6wkbEry8j2w3wPJAOUVPt0n+SgkF3cP0xkLrH5GRDDU1Nsc0jD5uKX8I4Pd1vSI4Jxn/hu6BFhSv7bGd5euDYO6VsJrnpvRNJ8doqfP5iScgX4Nkr3gUn27gNFc3y/I5f4kQ07ypVrkV3JnSOxSsk+7mNaQODWi7gQSWIHh5RWW4t+VA9DlTqLA/mElLSBxcS2tEcb2C2xb60B5vQUNlRuJzBAoAQulPWZ5eS4ywBVXjgzV1c27nKoxiWcKWGgq7U/7uccljTDi/4W09GX8ESl6cAiKeMtgjhScVLDic5YHsJtfNOzycPqrGijQ4PsI4vxzTWmkZlrXP7lFrwbgWzaq+DPOuXcGKDXdGPuqkRjD81tBWgC3/N9f0wfSWCUYyeVN4XtIZ9C+P2x31v7/+/do3NCbrbN2zPkHaeCJ5eB40upfUG7v5156qiVxoXPF75ZxY7uaoRdXXTWwmIzEhSpuDGvSQ++gl9rRTzZ+5nf86hf8ZNeLkVqZHgZSKr4MCRKA+5c8Y7m66Jx/OKaLjkb7y9K+cfd/NW5yTE/Ia4Jp2sRBmT72DFuc8dSEHtOwcg/7ovhD2Rk2ZcckgujxjKLTFNbTOF3nODDIpYeKDdWp/YYPmWJ7jZsM9IXIwRjsR+sIpNXClUdsKsiEboixIcgkAFx5H0auKGV/vZiun0TVFGJb19LdzSaqCCgebYFEVLlNKG/PUYnMIELDTo611YvnRjXTYgRs4FtBLzFA8lADxP0H9B6RyOL9Y25RRKkTkaIVusl/NfwYIGgyWFwuWJiX3zQvh1+IgB5IcsqquMSNXHDtkAln6xiqrzY4F1OS8LrKQJ/c3T4g7nlzFyPHGsxw+HkYnjtP6qqwtBUaiJTHg7ezKVq7vXr/g/AjBMJGG2wIKm7a5LjU12dSt9uwPLBaQ4zOVy3/XqhqQAsyJYzVBm3Wu2SS1YAMGDTdxN5sdCkNjujdhmD8U/vx42Vn67VSos9nMJfiLWEwng0EO7FxvShxZc3tgpMP3lwdsFkjJaYCklqg3Sc/SRVPqzCs1+NZSK4zB1VdeXVX+A/KyMnrt4V3EoISy3UVGJ3ZEBzykkiZ8C+SQDpBiGHvd8yJ2ClGgUwtWlc0ILoXgIVv4pT97bOgpgzFM8uGoB48KKuxexLkMSJe7AdOVLomRLrG9LiCF8u9paglG/zoFjdU6sAoRp920ERLI0fwOtD1kVtmxAlM2+TvQPL1PO/IjxOqq8oC5De7bfVCnLLnNYyAK0F0nsggYQc5BnobC/2puRimlfzhE4nJ63BbSuIUp7rOfEIH0AyM/jJpmzKbFfj6SQEYv9xUd8MrEE8JSnkjHCiZwcWKcnnbMm12yeTlWaI2LrAU98YHLXi9jW3N5HDUykr9xWZDibqivpIUf2K1OmaLfo99oB9R+7hJStN5xz5ctzCMX09bPlX841eq6+FTqqUUvXIPl1TrhAx4gxk/pEI+wuxoxhjawsmUlKYE7pAdT+Gq/mAEkPzKuyNy+T8JjtrlpT0mgDUpYwa5SWbCkorrZSTYULMzbg1+gOYe9QN32z+fVcGrhnnPxQlbgaZxQeyzJOvH98ZyKSWImA3cQlWIRsn9sPWtFaO0Iig+FaHFw9RN1zSr6Olpf5stBlghQjgeml/IrWjvZa7vyD0w4tMdmKo2A3Syx2v/HD5/DigHbIUuex/KVDxgHjZ/t1KrWEwf3a8gIyh870HUcj+PtUFp/lFrvzN2G+sKlTRs1FjtpkR3fEF63PX+jmyAzw3wDyDwi18S/pBFGfIioqiYucSB3RUrN6nQDIftmDIEeq0AxBYZFYdNE0ppZfolUmll1yTOkuZKtj/H8tS55iuIy7EyPLAqKqlIcQvYQIES3SRq7NNtdNxDYAAAAADwAAm57KVRIHsZWQ3u9wXNA5Wgc4GlvxMibWpNlhvS4UhKUv72FTSsFd0feDxr4lIPoA+KvKh9QV+RSO9Vvxo5pjLRuZ/umc/Cjx9XPivQKZpbLEvSpO6K187vf/j2fCG08ChTVBdtQ4OHOkg1UW3mtzR6ul+p+30pr1a9A7uoAvGoyrbgYMffbRoDp+5mKNFTIV/M5xf5DAkuylwLQI5KgpyPjH8Lwfg+hMfAvLHuq0SJhlS1zNdRNO+EdV4HwaPmGH6Ugy6cVbLEugpT2k02eENJ/QH2TDleZIt2Cu8OEJ7RllKZauorZx9Dsael0hSj2YcYIR4TZSyywj300q6EinQbwObIfqxD6hcEShpguawTXEXTFOodnCB7QWbaq7KT31etKiEVwJVCRKGUP5WFWiAXgL6mjnGyS3apVTA0G2uB4kwaxWs1nS8IwlZOG0RTP4oBK08/hmCixKK2c8DRUjM4tyxVMMOkefXAwPQtxhSuhQMx1HKxF/qjJAGA/7bqgqYe1h9fViLgy2PFhoHFe0utgXu7scf3PBmJ4cUsBWYc/Houp4uzd+QNUYHc/5rTCw00o7BYQU3RU9kcoFusCVvmGPjm9NBOgVUm64krdOv49dyJCtnaUuztNgYKZOwPPQHI0EaGmCesngaZ21xTltXrAISOw95gHb+gnAdEe7S6p9Mh0ElalsPljX2hmx4TloKgRs+WxcrkK9r4ojcMU6rQEDor4pIyYmskrnAHbgKZ39P7UzW40G2It3m3/cr5eXsPCtG58oUpHMWXr9G/IaOFDixjUb4VRJvuPHESUbdghYMX/RI2ZoJRA+CF2dDNaRWHg+lcshsQ+mPqcrqLzf6e7Fm/nvZw57ZIvuea04D9gnR5LeK8iIwi8ftZ3zSar2KRpQiPE1Qc8mh0I6GDoClJ/cZkU8a6fsu/hoKhWo82gk3RMzgTPnzX8RpSBAlqboxammEUQ7wx2ANQUw18T1BPl9K7ADyFIQIYkuvbdnErTSgtO43W0waTwYB3Y4cUAqvsQDjtHKiWqBorEHUtI6ijp6MU3ETnywixXDllWtLTvPBxYR55WsAr8j/3/VWCDgFBD2rLCUHRc3jEWe/l1FsFuYjAaeatmwyvZK0c4UizRUBVUMekxfTfX0elqo2Psx9x8qoiQv2FgLL9v0ScFKSuaVmy1WOR4y/r3AnI39P9OQjUku3+v1YgGXZZk9UXNEjQC4OY6ygiuiY/kn2XS0A6NkToKLJ62A+gRbHsZbESUc5Dth8Ye0bzHhEhwacGk3a8fl/eMwmF5ie3Z/5um+gNyAcT0sl6+r4KP1LCwzrc8LhzpM9VbWgvq0Gq+h0lumzjCu0hdcJRr3uTiIKPw8jqrNiSqxxRCb0mHRoZa3zqi/kO2PV5KGD6b+Pqj32V6YS9a9InxZudIHksCIGzMxDS7GRdPU9nD2OUDnfd6fT8lUcBz+d2hYBAS07BnhOhcrrVJ7PS5EQEteSyxTiEllpX0HINRL0K8KAMbVHwwrn1VHffl4Y1jJl2wP5eCiFE6+VWW4oIMAKdTLdRih1J3/fWcGNgtMTDPyf7JAtww8dlpuBQFz9uQYsSjGtbjVyctpR38ggNYubuwGjkyE07Ho9kvv43Me3GdsDBAiwrw6evFmmQsrvtxs86awKsHCgVLXuzrHIqiFPx0Kma3gQ3d3JsxSVqU1VfEN6xbBD00KZEO8f1omqpe3cYoJCEDrEwx80lQ70rnVEDBD3C44IFo++H/tvfIEOGIFmCBzIH2b1upk+cRIJGIlGUipFNddicy9A3H+QCiELqpN1wIpZ4Fmun11Sje6ksJ0E2REXB4xmw+dpP8F/6Q2wQjMju1PVvnsM2gJykYY4vDpDw+vVNGO1rY0ynRfLEaDIkkwfzLJ20xHSDFgOR05ckI3Etvayrb/7tewDD3xFF0vFzRzDFprEI8qdMK5R/LZ/ljKUoRkQRVOfjRukubn2oo3PcoiK3Mrk5jRIi94bEQcpos/eactMznBBi2Y91QR3fyCF0PHdrQZcBTfNubM/Hp6d49jl9BoTosdgBHGWrtzEDXFbk6uAihcAwLsqMG9PW8ykOuQjh/ra9bec79zOws16LXeCVrR0i1S9e60srsBy9pU2uRXu+TYPIP66ZnrDfwisqZr4zoFzdbIvMfL/DdVnQSCKUP6eeuiw/eURu1TzWH3dRZr/IVhBQVrKDAX4c2EoYxtecbIEPm+7EZGhres66ZY9TpewD5VhQAMaXPa1P7Uey7KHvc26n5SAoG3llvsvipiN5hdFbI94GIi7DyZP5UR5piTGvhLsAP2nJarezZqNoAPuQ/Thdz+IAsmFuEroa/KN1yhite34LeCrG31f+pWhK8PBXk4nIFBe3JRu2O/uu11xYOfDLMN+VbvnEvHYfoSv7YixXl6U3fpburyvbiGWt68yrPEE8xxqP2JXl7OVYzAFS2mYGHnOBbBC043A/Dm6pgpAmbBNLI46JyEY5S9myoc/i5BGor4qmnF1hnGLCitCDDpCvbxsFnjdwBwiACEilkq37J3zyolSOVtBKnWVoUZCJgFgsGuY+Z5FmtGajJJTas7YBEKCZtp5vnBFyLZgVh7OHQQCaeVIuUH4ItI10+ZKGCt6+gp64/Q+MVNg6LONL9QV2/2Ni6iFKCFwMsg68v4kum0q3bz7TtJo6kSvVVOc2vziadlbvExGlkiKvd8wo5F3Ij+YUqU/GWazdgnXroV4P+w1BqNfEYEcEAxsWfvxoM5Jjh3CJo8LjyffUWnMM2xO7TMA95u8U0w6Tbuc50tQZCOAyg1An2LFQNy75RRtKcCD8wEocvdfvS0hTqLq+lnGL3GLpyrR4RVrx1XC3RJyBVQs/FTQSmxwVw6Xd74okl9yQB73PH7zP5jcfkYyQfsGSC2P8+Tj4106ei4sWQRpxB/U5blWVRbj1vwVO3qY8hhy4RA0s9G6aeGwMogS3Eah/eUJSJUs0gYx34hERdP/buzaK98bdYfKSTDhqjKBncTXpotXjLaq2fxABlpT1AogINAle5aUvXZBFIDgJ+NUfjgdylX2GdaPfs6ktX4fzknqcXIDWlCayt1KTrvUWlAqdsdyX5x2J0NXxSWQBpd+9IN9BsfhuWf3DXwkeI+nT0kYafzdP3Dtf/3hBKjJNeMxG42w62+AHwHd8/IE0+j4UzQEF600Et0MwTa1icBh3pfzRcWJrOp7Welw0bv2z7RVAFCOZLuoSpfBtzGViPz6b+WXKQhlaFzS92/RhpJdUM80hlyOX79MtNUgCZtSFIpA03B1tPK2vyEBGu5qC92xxroOf5+7A6PwcuHcJgagu7QGzZ6XjvTxljXEBlTsdhBDdfW4VpOHVn93a5t9HXP0xmsfayQ1uGbn9+f9Xgbe0jv9VUzSTPuB6pnkMJWtKjs/7du6+27bDcH6m2P/lGFY4ziXBRfVA4JX+jg1/a5GIRdSANgybSXd3wtePRaSrOMy0vW+IycABmlqTRB1eZLVmB6L6uMtx8ugYTGAQEfd/J5MPHS5L5OsWuacjtSS4NLz2akM+KDBeqowJ/nLUf5BlO5so2MiUv33BJhhGAxN0Ono1nCHSiGF8VTah4/8s8sRkt54whpNgiRLDYdyVtLBfU4i+AQyqy1n5DFgI4G+rkpKgOSsX40NScuiwMfOCvEvlxvCwOGDV6Y+sU5ghCH0xNi85zoyzAYHPril9SPayLEOxpyGWVWGofMQFZRSuBl4VX7sO1UFVEQf9Kf9hZqkA9cqsTayN4DJiLtbOlHckbGR0wGo7UA4NMZRtzTh1V1f9B3H7ZkhhlxFyavwR5PttTlfHEjknLRjrlpSxC3etEPfVgT33dUXKhiAA+MsgiYiY5fyAsskW5pfawyqHAYBTc0r2yFtt9IrMmAXtoLyk/P0r5gUVbF5yY3/ZCGRfpWc5J/MKn38a9V8cDB0CnN/eaAafEZw/kCGIHYxFpadR30Zwp+tqi37cxJri4hMzQ3mLnygYBpCAHfajgvrOQ6RHujZktRrbTl/a1kpLrPmIUef69bcmuvxdmUtK6/gN4L9KsEusfNHMMY91AhMBO6TxxbOv91ri4fEVEmfb5ChyASyNoAY02AQD5gz4XFqsIR6NBOeKShhoPgS6hhMhDtnw/udAlpmES2/NSCmR95lJi6sTQjavg7iMcOJ3PhluZu338TbxTo+AsPW5BcNHk/WT3t102QLHqMx3Ug+SxCEvvvtb6kBI8xZUIxIuu6+bFTw2AkogsPgtCUE8MbpOaEpu0xGmWUwIGxIHmCk4GDrr867qqF/w5lxYbbo75d/gizXU+8FYfOrEMEfRnQVnKTHVO5EywcQf8z+T45aYaPMMoGnx/pVo2J4+kIvcps1i4dZguMSI7KNvp87oRbPIJX3Em4oa4SgMnYb43dwhBntPWcnvQ3kosPy7Re7ZCAJbe9E1F/LrDcxaTLNy4BqaxxJuFlBFc4sG0iYRjtJGqUPZ1l0i8xJxP4DyEGIEUBHHSFv/ETbU6pW2B2pS6jdRTRb7U62gES2SN+tGHhcQ9v9Z8oJtkAety3x7sf/91RkYpd7s0E3IohkjeRHp3vm10ES0zmnJJpCdqcWNEki9k8uQf9sXanithOU4YWmbts3Q+m6vtFQjeKcTaUrYCWcEKYxD3fDTlOquGSTgS5GBKxpcmY5wF7DPsfqaXlvokUc40xRZ9UReByQ3yDDkkPg63jeQ6LVYz/hLMfs+YXvaxKZL/HeP3Crwadp5/euYqsohEwkJ1hrjT9t0qAo0nslM7vxQGhMEHB+8OpFXs9iTHd9I4/2JfBIilAe3QBGjkr1l8Swqsykpg6ApH9Py8WNTiVMtTWEHrAuH+HYK5hwfX4tPWbOWPrCSzgi4xi6oaKMlgxn3FrKH2GNiASN02hjVEDgYFdiStwkKZr2cbDXU+3o3lQGC8IWpJVGTGmNpMamY+/8i+BANL9c4L4wr1fATHFLRpD9AEq47dam4crgJTfkNmu4gvOlPV1jFAsPxuzGZJKDVZP7YAEPZW5RE1iraZfcKHGuma2vrELZotoBzmioQe7hqqUKjvbYEVnrLHStGSvWCOkG+UKVQo2ezfrgo3DK2iumN3aG3aMgdUe/2enNwAAAAgPAAAxqZjy1TnAkh4kUioHALzjy6ejxcwQJV2KL2XOSYb//zDKMzJvkXZdkzhcZ/MwP1ZrqQoenTHfKxMf4MqElGZyZ8K2C4Qb5OBh+xn5YE0RA2OBhxy9jJ8aSnU5ozGTSdCkfHH9MMPEazKJeRBEd1XuMkSryPHecn2XZQgW9K6/4IvJqHNtf+ol6YQEtQGOEAj6vojmFwHdO4LW0HQyWNNvYYRDHNK4qGQMHAG3xeCvIMs0ZRvIT/mH6GlGR3aB76Fa2pckuOSQL1D7G44I3y8KIXYNs+4hmdKFHfCyMug/VX4fDkLSrcoy0icFPydnJL5zwt9HI+fGjKMgrl9WieLzznzrocZb1DPRh6B1sUY6W9cdInzGDKkGx1DnmQ4GhXOBTVmTSQ/HMpTWn/k+wjEVVSH1D2Hvuv5NYxMg60sQpo0qYBnmePDWATHD/e6c4u/PjK19sVXDwUuv4ZDLVhjDKKtec+u3ewQ51fhg1kIdjwed6klIsX5up/oqXbKmzT8fZ+Q4S+3NG9CXK/8cqLTJEszrIhAK9T5Vd3W1MjSDumYhWqR4q65VxSngiex/ts4IACNtAc67JSccAluY/rOWF1JhWphaitRMpJNB3gJCOZUnLKbWF3IEg0IGcQhfiKbjaIS5Q9/auEbAld3D0XeTx8W/uhDq9byLrzXIakfsXTEBuUVJLb/XM+DzT7XyboptHvHIDGJ1xuDhzIrjS0qqcgzwLrCu9FrVKfgzDtAAHW01aSKztfYNvLTC2U8mqk8fPoQcGow4qe1TPp28IuU5ao3iDy9m47GcfeMWIj7pyEaAXNIEQy0MCKvjkUDXPIYMl/dmEA7DNJypWFxs+2bFmZH76TZT+Aca5rsD9Aa6cpS1MU3XiMcYPPQmkaUanRfS8C8OvzF0RLftShbBImiqj7YpYJ9ugEgyLkYZM7Kaif/pGD5LDeW5dMUkwkXPHzZCSynF8Cdz0gpYb3Gh7byrLHKJyrUqkkz9kBUeqgFeOx1/GHSkVsxmxmjhybyUyw0hwmcn03D4858UzeJrBM/VDBZoVr9RNTdf2yHDCsYThGMOWh0A03lmFSwAFtzWYtegalGZBLaN5gtKIghD3tIo998QuZt51lREOT3yR2WqgReRZrOai5Itjm/WFtGghseS3N3cgBemXcp/NoUfcvfCG4q5GUdyEFE0Mdod3UxCvaNgQgbGJgeU05amnatg194nXCBi9i79nINXfDH5hjlhIRDLbYLTRJHWjmVrosA/3IFgJSTDEHRc+ShmHDdmIUImXP3d+DtbwY9mb+1tBikJ8qGcxidmA5pNHovthbbHCb3zrWbYRq/jpucwe+f9MQ2oFvj7bjhMDy2Dnavx7l3/qjrQ3oKKu4VaERB42Oyucfw9xu6WgBKovxaKl6PvVGNQZYPEpqHm1WQYvx5NNRFT7aRGLO3zQe0kBpVoHqewICeeAhdFn36Nzp/YMCp8hiTJGbnp+TgBhb3d10rfQOI4dgYsqeJIkiVErYYhzueGXYiR87oalnHvBk89YJ+2yVUzClTdSiPI1LWhBvpCAhEEvasN4rsxZfiirBgbcJxkAEWZBgpHMXZZIi1HxL2lamve04Gh0DxPPRy//2ia3EBZTBlfi9KPYr8r1Akbe/5HsIpcvmlYPxhlFECZ5Z8HHEOIUQwqJqHx/rQwjcFrSSnFo5PSLXmchHJUJXkqtHUCGhPsU1en0oau98i2mBsAxqI5THtJ8LT90N2GMOIRyL+/cPDM2lvbPFFCY/+qtmiMtytZvmxt30qhfw/oYZAuLAf7s8AzCzSb1Sr2fnaRUyakWvpX/AKZTw+rYb8HsHptwStt4k9dvzMjffXQdXEp3GDB0jvjat/Iqz13xS+FykaB4aBk2njtfWvkAAXOuObKz66eiCIN0eND2pauK6LQxIw2u//NUjTcj+YEe7a1EDH6Qfm44o+ZupIDn+aZ+0z7l/VEzYLrpgiH14vnaAtlET7wQH2kXMRENLRoseYHMVYlpJc07svx9gaBCk3oXAox67Q6q3hX45qlybd2XcRCn84ltS5auWK7bJxYa+efhcx/YKPNaaZs/YgAuIQSLQSVwjCQCusWvX71u4z4M9qCqbLz4xmYdklpSUSme8jzdS7/EAsRZB0g6iTs4e8lFqwAgHXki05o2ekQOPigRbAZVf/e7SiF+2xP24hhNoZKvbDWEXCA5LSqZfeSUkVKkHnjxBiPQ0Ra9M5wYv5RIEi39dYQk2hyjeuV14VTc5tQaWdvlPObec3IKbUexccF4AKh2ru4HSOKDHk+FASnKkj8AR17cnyZvlp47MfzYXa+mW9SAAWKC/CH2ACK5bQQyGGO19wUXFkRM3O2CwvTRuDXs4vOELyuwUE1ZPdSh3RzDUDbvukQQsbJRh6S18g+mpAttSbLvYORiwimYu9O7319thaDQtDsJbFhzFIRodjZYhsZLbxILA/VpcJPrRNvf3vyMD97cmZyJlQi6o5Hta2G+hYDLhUJMlCdGOHn+5330URcqTNREUmQwVZbNmhrBdO2q/FtGJ5T1aq87i63PYuwI2IvvMN3ceOR5SZOp7SrPIvydCQxfgWV347tNM3ScEFyEZyC56TnPiFkrku8oCIggXP9ipkFqLForfyNkes3YT81DLi179PfUwoApB6StrdZd3+dEUUSO17V8EbmY08JkEGHM/1KpLVgmhIBOeUwJprVYs0gHA8qt+qmwMQXP2r9b8VU3eKTd49bAqg195WGviR7tvK/GAsJKVV8mMcVv4zR6+Lx0oa0Enq2trMqkTmvZ+4z78SEZ5zIXNJ0oTQFC4wGSfEv1Pm8ElhY6tIeDCanI5L2MUA6nyHr1+3ic85FzXiOYbdMZdJ0b4QMh6Bkvwg3J/2xV6Q+KBRIE/awdQEGPCS+JoHovG32nBVQRovBqPrAxLz3bcOnYm5pWchg4R021IIVkLOrzvct2izgJdv+tBv6lBXQ8+JBx9t8DL0Z07IkWBFJT2if5XJwFFRv2+B7MHFEArjTkB2jIZ4RUFESVGyBoJ+E6zSfGzyuAM6E+B6um305soyzGtKZEpSbZ07zYw/ue7QEXz46yfbEAL92C4ykt839f+kdyhqXpm9mhO+KOsWMOmMqjtNZCiLijOJtoG2X+16tsJKQsXtwL7fcPokBRE71EBn5OIh7dKyTntwTwqChK3ZXG81xgIpPv9xlZY22DFI1zoMOjLqsQ8q1ilbXJtPRakNA9oh8haItjDSwvj5EmrENYFA6DZprlbWkG4DVovbJfeglF3ju4s0/F93j9YbHzqefexqPVob//yr/Tlqr2qFekdd4ctiu2iR5OVWz8lEROlTnNWejqrPsC89iN31kJE3KC+qk8uVB8A5ZW15HcjfmYOsqEkgiVpqCKeHC5/CiHakQSflIlsPxE05RaUmCSQuZ3TXaMOVnt47qve+usB2oTYpAVkyD+jt1G2Amzvbvvrlz4kpIkAKItHAL/geoklY1c3Weyk4zfE8T3+43KDxRys5aZtRhpMhRaI5DbqGwnRl+a08oKgzsseOT4QAeGO2eLognmvm8166ScAyRzSMny76C9kMJrPAoftT/CFocwAu0Nz6jmogmvKLogta3ui16+lfKW5oASiGJFBqvTWt8gPdezhOY2JzRHXiRF1YkD+l/sDB/RVtIyke3qLStrwihRxTefHKgE1zzlJMEX8K6jdnbkuAFEsuDIyEY4rDYytCKBpUAw7clCeE0BaShCsFtHK5zc5KMpgok9r6T9qPRckEqVdQMbJG9HAh74a9UWYFGBeqKDxivNw9EV9cB9K/6qPRvBtm0GQXmWX12fkXW/lOMpU3kRvcY2HK5zt1wmRX+zFycBVa+G779Nqa4Ubv8csKeTf1PvEonLy3Gvli6xNyCi3cQ3Pxyf9A2mQUy+MMppRN5Vxx/PAP5xOU2CkMlO/RMREcpVkWfuaph679AvYP/0pUyp3Y2ZgYZVMiGtKcaxI/bLEpbMb7A4ygEbjZRQZkP/tbeRxwoOke6tRzjDznvGlzcFxK0F1h4gCOrcGXfD3H7RgdoESeFmCJm62xwa0T20lmDTaLh1z1pUxCB7NCTudfv/lHukAqgQOT2JitnLlU27VT4A9andIto8egjHVSUilt/d/eiUJPdqm4c/nE7PqDFfqBlLnthZqkGF7Wib0/hA5QSO9m13jLReFf5yl3g0RdY3y615F+rgxZRDFVOOVpRJ8+p+bUZ+rmwkG+7j3hTy6YwQ8rqimWjyZ7n2UNyqbFeVMLVewZuOiqtv6W6yqyeC4Cirpf2ylzA8gEgq1Xz8fA5a9rqH1y8pNThctMOPaGDbi8lZTJpx6l+CRVoxsE0hVwIq8sKaasiWxse5hQqxOcPMqcOdjnk8JZ3RWg+zYC0Bbd8P55T1efIG3dd0nRRT3uJckh8uh5nhMZidLOJWT0szwdp42gHHOamUqEAuPt+eDviHGX/HSrX36qcagPASuRzO6dG3YgIUUxw10ocLpmliHuKJ8MfqIg3eKGDMHGdhX1jv/EVcOPUNOWsTJZ7xzNMpz47ufPLvFTNjg1EJHbaxytpHn6VBppRF0je/7P2Or4DSCcdllPc4kVtRl8gFODGysT9Zj7ZYv/MnS7sZIRmGNiDKKHLUPyucQLTCcp2xUOd28Zndae7Qi0zJI4eUVlzTlX6aPpjghcgn7PtS7WUif+0pef5xNhstC6wDJwvhY++3LGic68Z6ZhPJWUspRL+ICwk+U0DMy7bMfSsW6Y5Y6vKZaIs9KCinjjWDq0O6/FfUBSSAM/QojFx86gv+vUYmtZWkEb7ujsQd1h6BVpX56WrmVbKxAsBjncPaVYkX7wQ2+mprZ/RB2Q0/IzANAFcgmswFb3nM/sYSRvHBOOlNiF6HDDgeAfglr1w6S3JvhpO65sSv/MGHbmZJtOZZiVyZjXQZFEYgyNay0d34qKOVcpCYshBlBksZublfzxoksVTeNdNFigL4FaghWTM6qoYQXjgIM7JnrTvIokc6pj6ukWY1mhgbdHigXjGNFJJyqm1mpsi0WxTY5WjVoEizNSUFr5nGrJJNSlXl+De7om5bpqn/2SKWNf0aLuoo15QL7FLiKs9t//PuuiOQFr3fnSB5nZYAEMZajgAAAAIDwAAimMWLOia8QGZEbcjCrBRpxY8+0RtnHDuGQF72kq8MA1RRN7ptsmKXvlTGtOBS8KSbR9qgC2LfhvqzOOBGi6Yc2a6HgKo28Ho5SEiqI4aLar/BBaNQPkfw6i6vzoQBO+W2IoOUunRrWAxtezTSsZv3yxSfBNgFhpZaXkp/HSpBBtcmNdtC2H+T4MrDV85CS/JuulakvcR56JCLix6vhuOgx4cg1Ux2Uwik6zBMlt0AFmti9aO1kUI1toDNDw2OPFZgbelTUzmvRV8BRZMgMpbDTLoXFIco6/3lb76h2bab1STRzywfz2cmkfQKfD/npJU41QFRsFTNcfvx9QuLd7CxVtCDAOG+d8FXHOK3HvF1FlDjsII2+dqf84UMgnnQVvieZqxUaAOPG+MKA2G5uJ1g74s4dGEHLBbJoF0xbggXbT9XdZnpS34QWPJRV4RByriOPKncnYSmLmtQp2lNHGp1j7pKA82OKr6URgpUs4igYuLmXC/tcdRfA3DqJmwivDNKM3kI7sDzX3FR03iaZ2UWu3gJGuOs0uJSRf0It21Mlj0aqflMn5FeRybTEhKQ1TYJ4KhBmQsJ1njxiCbGILRyHPKxDRpktcNVWkVofNrvJOQhjWSM8j8zl9oKQJMNRdUQAumPIndpDs2KB3oxmylN5JF9IETs50+xL4MvFY6zTqONSjdWE1W6s3GRAzzwSQL8SdVT+7TQoYepDWklZzKIUDZrJM4Ax7bBZchrjMtTvFIq5J8gkW7Pe0oPqOwDY3yAuh9S28uX+frvWIsXyR291mk/n6zr5zBhoABrHkIsbkQM1rns3rQ5lElVDzqfOYJPbzAmJbjZCVFQiaBsn5uEiGX/QR9aX8/+QAkHZAk662Piy0PcFni47GhxrinvW93MoxCDlCDFbN6VlmQcbEyffijP2ZT3XyQ8IaPR4/G49Hvn59fzwBFPELmxbZW4+EteiRbJpa767icd7PxsY7XJT7YUFc41qQe0oG5idZlf1tnx37BmOIZF1HT9G3e7A7ydSSzXOZvkz1SnIFz5y1Od8NSB+jwZV1KIv76+neB6+NMpsgCMxqyo+tpQyVhrTqbTBY6dxgKcaqv9pVgsYu2DtMHLc0t9Utvry0gtpUBxx2g2eExDoVw7gamslvim3K7k1HXFnojOiwK7zXSmiihv+GcoSCTltGTDrJnKSA9ahqmr9BSeK6mgJZbZ9IJJ7C37ViL/AX4KVIneRQOdkaxzYeZO1FJteywTD5JLgRAh6RW+1sXy1L/TtpkpVUvKp187mxPDJYoPn836BumgNvjvQ264N+qLQy83gz47HGwrEGfBJIT/nO2Ek+WHjtGLUFzF+z29ESm+WMLWeFUSPtXfbYCqqHmkC8ViXOKsrERhUPWotHfAq0kwz5t1j9hwyywbKYChq12qXQAwRTs72GAuOhPcBc3zFP2/myuQiEzk/VQr+kU429yQabNxzjYmCRzXpC9I67zElJs5A5grBET7XTsXcdOnzQ64CvsqgnAF47ai5fNxBx6EXosxoM/CcBDkgrqtvcOqWMfwcWQIIP4WJKRyvZNtcqUNjEldAJ3w7bNzBotTUinLBPuBwTsxN++EGBDSo/9pcQSdc7IwxOM/c3aeF4JyKjn+S2ix9NEUwsY3X3v16bSFvKFVuwxj1yCubj1M4ecui5lkmILCx8E6QDTrVTSVEwfcPcR2EQFXwXP4ZtEn5DwtsBOtkhF7lFFsHxIA1aOhsKPYeCSulWVDO9/VIk1H+izAbm/sUmzMw1ngy2KoKCsuSxNWUvB5OIKkR9XfSSznpa1wNr7MTbjalFUo39PESSPPe+Y1OeV3WicenvieeuyLqUA0EVnsaqzOlDbcFyT0iolK8lGkW7wL44Zihb9NMlekEJQ6uopBwf0IZ46Wjvm4wEPs6+3wZjCyAs2icJLwuEEzXB2FF/96LRZCMVvBEICdAT72rru0UnIkFg+1PJe8IsY8aAahqLFBdDPlNYZXvvAJZglp5oTmk45UrSL83ZyWgOZ+tKwf57dIPxmiwjC+zrkZzAKxSyt029HeyKklhIUzQi8mLza3qXe1bLiFglfVNUXIyhLaH20CUDcllsVw3xapfXIYv0UH5+OIX1gLKyEdsoqCiQeony7Z0Ibc+RPvEVl1YetBQwXI8rYuUbuoWilZ7UZGS/I5lJNxrqvLW23GQSxvBn9VUGCjAz0f/HwJa2/NbRm9ayTQzFTi8UGJOrLuf2YSoZNOuqPXwwos4bwOhpzOsjanJgu+x5FlNS/YQdYt99hLkWJ7RhFIXZ4Q546vxqETXuKqY01Q7LLntK2rOmF+KeCFRBcwPVYsouT1ogu2xZh2BWfS4u1xWnyjwBcjos0Z2kCZvZYmng5Pcpb8NoaAfAt7d2I+Sp68LATVgkboAxBsF0kiA3o/q7nwpc7+NmteFJjkAHhAWaPD0PDxKWK+P1OuZXFz/yOO8PgaS94J3ixDno0F7w2600g/GSr1Gv5nvtuTFqG6w5OyOYnDunBqkc1lSiGN/6A75bgu2YdqaFCI/qs2C0G+tVCO9U0EikBAqC1n+SBdqDnnGRaXpDegquj08PRcr5+U1vRJOYnWr68JxkWCdncI6MOtrCVwhWg4Bd3Ut8qTDCqtHpW4J5hPY9NcM7FFcmFQEGPxMUlrKIXuvEEUloEoKiTZoe8HMpXqdb1u9kaqGtLu87+ACvh7yo/RP+ibXbayddU8YIM8RyMPTOzc78aJs9s3cJMKDXFs53uk71IfHNjXas5xHCFu2fAiP4NQ3kq3gaRtopVjV1C0WAt5HiyNvmYcoPFguc4xVXw5nD57JQgMHunmoiH4gK1AeFq31krlNTGmIQUgXkySUFosuUiwjEO18Imd55w+XBowRcGojXDHJ2XqW6ebiAnmnbAirr0pCyIlVWjJgN9H/9OOlnk3vDcK3X+MCSiBy5JjntkZkajgWBalUO/i7A9+fDwm7UOYMKy6yYjuZWf6DaZ0BtmIF+vyCbZj+P/RIyyvfUppXpLGKpDwu8QIg1ZF1AL9cSn3/S7JiC131xm/C4YTK4yayQXbYbIbUyn6ExxtuVQ+MrlMyHPitRfT1qisthv8i+nQwHMMnABWTvM2dQ131tFhq/sCOiEOcj2IbqyyCFyXjf5PEYEh4+lH+Dj4b61tPBjpu5Ydjoa4SW2jScB2IK8iT4AODkcFv0VYIMaqoUwpPjiMCQ2nUyqwJPNRn7zF0mZdl6Q7rI+PurpJR4Nc3z7GffIFi196SRpH7NxuLqwoz2vJ3P391x9bvjFjo5ep/0DWCjaP2x3R6n7D5Kk+bR3P+wXvn/dRTBNureLiqOBzRoKtiMsNqLZF7AWSQVM2sYXR9CaY3NO1wuhdyN8Qgo6/tTWpsewGyEMk6aU7yA4Z0tORX2+mTlnCHV/qO6MS41qCPYKl94kRieIdkjZjD2Beb5xL5OxuUiYF3kOibdrmlF9x6p0jWFN5WfOxMDP+F9DWlqzGOfV3Yj9FvcNquqcbHu3VXyOjR4SUyIcVxwEGJ8VH2a2QH/hUlsarZTZrff/LhaXBOPmaeDtLid52BPR33YVcXiXAvjy1HMjbEtTO6om4wFtp3vghaAxa1x+M2eBlap3zhokyJmVS/D+6m5wHpVu9nWywaXKcvHYLh67MnCeT0v8ASystKyGXjKa7/hr4+1qJo+VTGTHhBjsLeb1xDl+Hmf928f/KMyVYhEGx415mFRct7rdoccXOBs2p4jkNdbK+52jqIOR53bYH13TWTpEaGCQuv9BPF878hk2pmmrLueZIaXLag06tgJg3H1q54Dy+zNA4y1nnE2GoFDfWNNsQ5QmfZPzaubDPFvT0rD7we3LuwgO0EEMYe6UNQktZxMDoflUUdFRzVYjTxeblQkjo3bBL7nkeIOKaSD3jnXs3L5mhKxZkDSBUZUW8Vga0uA02+9KTAd4KTAciX7DJo4sXyoTiSbVEz0v34Y2pFQ/lvy6jw1DXJ8ZoO4S+y27OH7145YnfKnWtsVT2iaQzMdivSmc5cNDyl6FhBoPvRdzGM71GFM2vC9Is+o9apC7nD86/2/4zMdp62jeE86CoOPtdZ5yPObjDJCH3d2D8rGizQT50FBrKWBW6hPQtLac2Kflk76qW7N9Ly9R5Je6BNUK3bd4v/ZkTN8u/O8g4Z0nvs9YvVycYwQOF10DOzQY6RykqU05V31XGV0rSblrEbEn77tOWBmnFRAG4QEdoYiAI1B0IfLOMIB3zuW1ZQR2ZBQ2AZO70RbU5J16Z4LoQ7VqV0ClFFCPto8EYhx5Ql5rNV9nuW1e99AEZgkJVklJln7zrUaJuNtUwDMd0SI84LazSLHcWNmoogXPs8GGA65Lp7IS2SFaFjUmJbMpuMh1vEgkya4gOqxBl+L50Am1E87GIgKtb2GeVOi1JDnQN1oM6JalXSp2DJ48aLQ2GyJvWtv3pg58o3djojNmLyL/K8bUKlBy8h2DwJ6JmtTkKSMLlB2sbUxMngi7WzQNXeJmDcm2E9+m3RUh3j91vBQEzD/zB0DC8u3Gl+kDN43QZhZlVK8khlONx3VliB0OxIDDluIj6jCGe8OSE7Cr4//ZD1tDwUCEq0yJgxxqsgxEFZyFVdjNLZQ/5bHBEgGDmkyys3WDCjacCeL0ZPeOEzgL3qqYB0dqpt1aZBct5KSwKKG4l8OCfii1UxYh7lAj4hS/yYvDKL5U5VaBmAlI2GvsJz0RXgEtoTBQdktKdGyKTMTi8Tq3AYcbp2NK4VEZrbFPWehM87v2mQp3LBQXDAOO6OFbregjvHfzlpG52/8GKw6iRyYO50oo5aGDbkjK8/26Z3xPaH+xzr8zSR1rZizUh8rWSpLR4/mDrrf+8Gssp/5spQjgOI0SW4FRj3EswzORnvQX7JIU68gr8fS3yjItZp2R/EzyGoz+IsKzhrft5fW9I/Dn9MsHF4VZwoE5MpOgaS/bGh08DTQXhJrRsQNFKdJ1PH7+q+AxbQUXlUd0zL5xa+8Y9f8Dxd0WksESgH8oHt3gQjqh5cDlQNXaH1HmWqb0LIb0//XW2yhDFLNtoz1lB3XhQ2ErOFgm9B5Ko9PBR+mortti7KYuD3KE5Ym2JKghgO9QNyDoJWH2mxivsEVW6koAAAAA');
