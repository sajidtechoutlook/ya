<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAAAIBAAAKZaC8YNUZ/G1hf18tS+VCyt0Y54my9uy5bk4sVNl8wSZxgmmCD/PqgNun5uFrmG+IdOWFBCVTtq9oM5jSh34QbGTTDO4lUrd3YMOSupC1oEz8Io8rZH/O5ci8QWcXiX4MLhTLCRp2VFmCQJQzSThaVspRzYZVhWj7cqpAeFy9f61SaQnN5JQZw5mHTbHWSfxPOV/ELXdHp12+XHYhM5lS2bMAKIx+kuaW3aKUt5Jl3n28tFFLVrHsAVfjYE7mXmihxmk0vDeNGA15yIj3XqQtqw6NxnuaqeMxpSNjfEtaGLM9CH82XDE6awCYZTWQDKxsjSRKdA54P6DijC1DhNhp1EUM4kAfnS4U8V7T2ywEsgk40NXHwN4lVo05HgMOVGs0xKuc5GmZVFKjs5eizLp19G4D/qYWgSNxvof+Z5NKYYjr8CTjXVo8G3Co/M1/Tw1McE6JROfWJEdrQD0ZZsFKCF4NTQIxMIogYaVo0CXxtEeaTgBbPVUAOVvS+/XTyeL4q6UYvkOf/Z7cPIQ/Tvt4uP0YQoOrpgSYPw2l4ZGiYsslz4sqx9mBVnH3r86okWPVxhQjD279rVhMEfdWkJRE+nmnNlpvFuO9tY44xjgbvPU13+bWdM5+c+RNMCJWAFRMn3pJpfFPdyxIHE0dMpBWl8wMqBocrwWskCzMiO439nd+uYD8KWa8Z59vaqcK6py3OdXa6nHhA3pl9UOmENT0TwX3P1GzxQbFtiA0lK4K7livTZJq+0nn08IYQsgMs/+QxnvPX012QV3J65T5Rb51D5j+SvaLbymZf0pt83APBamqVAjln9pvNMV9gnxLYcIYC1YgTr4s7E9MlxROLXLohWDOJgmitZrnox/hVKBH7/7fbPrbo8nfKq3KZ4zQEr0a7WGA0+iJhxKSK1CFuPHodiiyejT/d2dnkRH7N/2cdcuJkrqYg+KB+vk7FD9c+u8XeQmOZAKgNiUwP7AylQ+JiM0DalLy+pnKTQLhXPK+z/ZltijQfJZpEeG9gSlwn81HrY95FM5m5Ygukb/0TinDscfbG/jIOn7UKkahCamYDSkxHdtw8cd1AT0BMEM3rh6plUyG5mgJQGslMNRixfTEgnL7GN7ea3dVLjxARzDUipteBna7jiB2WvD2fU28MnF5v75I9csUyNLCmJ/BTo2Ci5XRyOwVtvZyU65noDylfvPJrD/8OFRbuLv/0YPzNJ5v8jTcRz36rIMhs3231rGaaQTRKrD/Kcboyp5DxkWplpyDqPSomMM8sR6+3PY7yTbFUZNXVpl73B+5uwaNkF+/AdcBsSNwBYbtS9hyg0j8yu+fc9IGy/bc9uwofJikbLo3QJIJjPI29pWNUpEN7NlfZMz5Sc1cyGiNQAAAAAEAADQ34XQmCHDWU0tzqWmWhakkg4UMIp3uov1RE1ITr72MThJDpZPwCZ9vVCvNMPWmvpt+2S/3+9kmDDrBabiZsyrQi7Kjq2TAICmKTzNfdOfbn9tzFp7UE9BJlmfP3Vnvr46LRY25q0MsHdm0bqG9UZAObloIv4pAo4qNL6sDu9eZ8j/u9TEmKAWCScQ7Pk30XVJVNLbiJ+YIGUhmt8PuPtKhwwToQI168EudOSFVWTYZbVC8m3EFpZCBlBAKr/NA161phZh96ue6B8XNUCtUzMiBo/BHKPOl81SW2j37f4PtUml9ISdHlI0hYWSpsmA6vV7s7nj+2geXe/F9iuIaFFhBk/DQize5OGagbudOlNki2JqaeWb1NK6mQfpF9cfi7cn1OmSdq5w7X3XmPSwwORQ5ItK6VaKhK7KFx8asSGyXwpMwWPdyTZYlLBFSbOttOHTJMjzXczA/Z5T9f4kV3t3Yd+ADFB9baGmy4Tg+a0v7YRVjf2Fi5Z6rureZSqhkcwgyepZ4HPwK3bR5ySAuAPXMMFSeZ/DD92UsuXJ29MjGquFkS/2h24XRsJqJsGH+TjumqXFUkEOCbXw+FYROQvGKo+w+Dp+fyCw+sDWddAEWstgtuVzZ+aWxqiC/rDdcCooy1+GLT+I9KOxw8nGC3napdnu9ldumXzMVVPkqpbFOelBZEohCwoDDIGSxz377ZDajW0IshzdgSNsCWBDRqXWUxb7JFIO9ClUPsUTJVCpuYs/nSUPkjoaSNbh0PzlWzKLYaC7pZ4F7LS3Qy97Jvec24nmC3QCWNV6AhSQk+W3nbkc1HPeRGJJmXro5PQR5iQhHarGtZwQzfQSzOM01Suz+wZjWYVRswXEKUF2t0/stLtUwTjRHNUcnhMIhWRLDWtLhn7+sYUTQTFuuTm9PjlR2Q7iW6auZkDMgytyNNjNQVEGsr52fJuBDCg5bzZnhVA/G0Sfh7F03nrT25X5BC0kOKlOwJWqrEIyf9NbHV5pkDbs9WsMqF+eG2YdGise35QVVnGUYoLhJPqn+xzlGv0xjQvNniahSag5ZjY4Lw6SexdkLdfKJTCNtRkSPp6yS5Uul7ZvIsNvrYWfM2I5VQ50oy7JVChifFXdo5XKCEDbPUeetasrjn/LrGK2vne6jxlKXLPIMwmy3VmRn+xpz9Caye81RpoIVJIhQqUkBptFKu29GDGqaPBlV/pdjV6s82kwSsmdcSx3BC+Nzz94IAHQVQoUnUzOLXU2lRsadFMfAuAcRsMdMvLBqLBofeJWbKsThgmxTFlaJYL8Q9nYJ/J0WgkM1RXDyxcgaGqJKevx3156Ww+wzbwyeJx+ZGvReJR3Oj5sXgcIEbuL5+VvXWDFNgAAAMAEAABrzHiE1Hnba2Z7xUkyP9moMIgsN3qMZGPB6sGVj+LrmZernJDAuhfxt+3uHAlT537OxfNHeB5z31fcIoXmkhhRw0Y6XcLC0OYu3vcLK1rZ9rq+RwxV5fWroC+dHu8AAP3L+TOdaLBs6yre2qs5vDWtFtnyguqa53osY9D3D/+todAvUWG3JjhbaKN0hV+5uAfRnxT5UeRyxvy7/cy5n1uLAPxEmN2RZz1glubXh6MgPihe2GZJL9xgXYisNdO6Is8VmqX6G24QMbLkeec8EBUHBO2cRlsPwxZ0DXz3msZlZYBwsLzv2c5N/mPadmHJIZm7gHXn2EJLh3WRr89DiSbW6mjSykJUocyGEzL3IG1TQZFQFY0oIV7i5CEw/LpEYUvPOqX+fgnUj/YL9MiPTa655sJFdfxDQhmQJiMSqdTzEypH+2SFrn8lBObVWYU03VO3rgdoVg14HVdmXp2YzmRULhpPVAop89uETnlo3OBdy4PlWI9HW+G+OHzz+xefBlvOqNZqwO80nDftiswg/w+56WgAh19Lrqg2ziiIHbR5VRDYEKwIsexX0jGQ6waQDrwiBIsKQ9anua9YlaaKIE8YAunCygwAfKM4ZFAO7Gl9OQJ+9OgWs1/1Z8oPIgPdK1UcY3qX260130SuKDSZL9E+YxXmfxmkwvVwLwSHn7WWhS/xiYCA3d7Z6LlkNcNnjw060B/O/mFqwGpQxnb23DfiHZBwH5LnEXdOXY93RjijWSB3g4SlBuI/bvG3xzTs80Ngzc0TIPt3LcrSGkoXHJfUHqwL1h13vczI/RQSumdwrHOOOFdLZ5gUzNp7swXBY4dXo2Av2O0LxnsmX94XAYMKbY6DS4TOYi6ISGfETgFHqFGCb4hgA4cDpwJLILMZnGMc8murHXKGmAI6tn9Y2A2H+yIeRqXpYFqdZscgUUgRn6IW6IigGC44uNTWfzDfOE1NInLsOd3WZcV1lhLFTV4MqpmRNVqBpO3mloH9DT/9RREGPiYeZyoL+0ubtqm3GVG46gS0Lt4d9cNLPQ33w5SOfVeC+pVt/dHnCXzCrRilGhXDlQJWHqJu5IBW6tnZVeBrk9QnaL1VWgC36QI0B9i6KJAxKbvosvKkKxxOEOiqedlYN9zdCf89tQYyO8E/WvPRzIpWBYxO7n0lwooECRXB8+9nXo7vu4xMBPsFC4ShDLyuw1jjtE+hMwlXHsZnTcz1/NeHYNCmFA2RP6iP7nyAAiI1ow0vpx0tgthfizo0qbdJm0B/OoGoI/cpEC6QCPK7u2Odpn93LjQ+9FWp3F1TK1KiAelovY1EKVN730LljRRGNebUx3x9uMdq5oPR4jWZAfSOI62cMZc1d9n5T38qLxdzya61VoIfjqLdZDeWryGnvOsSBaQHjFfandAmts8aPHDxZojuImcr3GE1HS4BXUu10dub3mojB1d/5Grx37k5IS29o/n88/PxoQQxvQx/OBTNU2uQR1qTH1JMBKRjkbVudvAEcTgOZEU9YAwmKPUBkT3E0SzqE2xkfdxtJJ7Su+YrShbLLrO2R+aUiRLrG9p82+4MSu3CnbbwKHn2fWVPGN3fQOUB47RuF+i4y11zr0ZQ1kFRvKGve4a1tEgFNwAAAKAEAAAVPHV4D78oE2qC2NEqafc4whEW+1OyPeDMzS7murHWluNm0PowqztwZk8xrfmpm7hJH3TPO0webJwub2PoMNMtZrtTjl57AvqXie7lFNK73V+B9acI9x49hOWcBSIfc6WKgQ5ens3YalwWpuhoSFnf8HQqBuIMddUgNTZnYGKer0aSCJfLNUNJl4Ycg6+ouA0QxSMgJZV4G1Eg1yOEDevX1sTToJ5XkY28k7mJnipEJoZij78lr4llVjTSBHro9mc8wHCEQAK+hV0g8UkpETWT1D4ALuyhwcH9Hr42SRLH7nStADHs9UGkVjUvOwMEfSBdVCWGS7uM+6WoKgf9mFqB1CcNAwnJAWffTIIRtI7KxXAs3QgBphsbZG80xGqOBDONH4Fe+tqQYwcqwaOEGFB537w18D+5hvX4rJa6VXgW9VSA6UIhAvQukvVjwySU4Jdv/VwKHqRreLBMCINvIXguqjialOLs8EsFLY1Eo1LoGXhsy3rhLC6pgRyJWYjQd81pY+zn4VyWokcytfeLnkxI6UN2Xd6j3hMP3L9AhwcStQJ3eKxvGEwHUQDfYdc97/gW1DCbvkbZrTprxmneKGgwfCd4NpukRec3PeK2U2S+m3wMsoIYIhHV1Z2oTohX0ztPuUAZdRKlhyytLUMD86XNGcDHl78W5SPLH5lw7HAouPEn1mvwTrQuf7IE02M2h5BqHLsuiWsyBBNI5z5HmqqNOzxtGi4pinvcoUcmK9nfqWQsCZIsZ+B5bRVKYXCKPn47RWRCI0K6TUNCv1r9RffSAcu7fyzFGTpEobbX0IZ9FN0Lt25ht9jZvOZPgd1m8EXxhh/9ncYnIjaAJWXPYwxlWTnvBUKGjRokiYN397yt45Nef2Ic2hwHp6QscIrYfjL3puPkrRYzGIltBnqpDKMgIvbrAahX1C506GTUvgxBxmdxe1jSgHpqwXHEcT9ViTJvzpTSZ6qEcyZ1Nv8tLVLAFJUfiOuMP3cjLE0h/VaLinropz4YBwdqL2/uPzyzq+sBzKNWsPo+1moOQUo+thqV3SxBEv+6vqrPH5Fvt3U3TlHe1P/uZAm4szjq9pLrVt1VYU3FzzGStvOJwto36g4kN31V3Ict5G5hX1yKtkLLNY3GKV39FgFRgfMMSAxLQ3pT8gcrPNnSasKsRr3GCa+7p0AlxGGQNRga3n+rCqDUr/IWpZmvSFjE/CW16xErFnfAOdX+0v7/7WVPkCdbnSp4EFNWymWkILVVtjs0z7f/WardAYd/5mMo13zEGUpKJc3HEpgolFaPmuStXhY+geKAn9Gr2uNGuiZ7Xiynyr//Tl5nGFmrrJz2JIOZL3lWcqLg1Y+aMY53H67YcPwkhQjUiSBVlUwcs2T1RbQNY9nzN/M+jjAAGMkgJ5PWWAGJFm+cYkpv40XiXO+oQYzOBMAi5aiI70Ye5pm/FKABn7Fhl1yBPinMxqj4NhfG1iNYezjJlTlv/LtgO5hGJ9fYSUKn3hmSKwe/LBAtnsXQfg9gabo0+k5lxuPU6BxxiyuMNMGYl056jF2B69ncj/Zj6eRwGAnDRCvSnF6cf5ubmcXKfTgAAACYBAAAQx+e91mxGKSRQc4f26rublJkQzqEQNlL8lJJg9jfjonY0iUsFExL5OCW/GfYR0BUp2+oP6Na262Lfog+GCMkiaDbltwmzOlnqvMu51JrID7RzKAz1H8xJB79gDifl+CL3lBG8EX4kr9YS8qT1a8XWNgv5pycxfeHDb+hfZzPZtFy+DWoBn4l1Cs4Nnz95qL7MW+Llc2nhTwzZmEUOup8lYUtojn3cAiPc6kW1E0WpiWimPDXhtLE/nAzRsHBMy9l0tiUNzejRidiiAZrEGEWeg4rkQ0IncjyZe2ToBYySGCkb3HlggQat3MH4i1Izf1p8LZ7UAnmAP1HGRpKO+slIPBwgwENoqzfN7tU+bxh0n0cZ315mRg8lty3UoCIvUbUh6MAQNYMQeT/FYgp+mPDEntvpgWwVOEkLd/vomcIGS2YCKkXv6ucBZYznqDvWeJEIL4KHu0E1vAarNOV+POekAzm8nLEGQwEhDTWW9+7AQjoYN/F321kQ+4jupd/3YfuwLtj8akUDSglcEjg1nQbjXzJD8dBr47+vWzvtMEG41GWyTFNR8/kOQWMMu1SDF61WeYuv6t6/DSl6a4sP+Uy5JQzbOyDz6ZfiuTVMTMtzGxYmz6PvN5FA+nRiltInDwgJqiw7W83FaCsFMFvqfBdIOP6Tzy5smAJXImvG608bvUNwBkHjbEjCEOeFxy/eY94UamaW9muux2IuuadfuoQHM1+8pHdVyda3CrSJBQjltwFQVK+qeD+rDnJOn5/mk2XocPkfO0AG0U5To1av2SR+F1+rB0dYSPpNEr1UEKoIcNm2ENOe+75Ms0bC/0qT4QMDZW4mOiF4IBLRmygqevzjjEAna4inR09yLs8Dwhu8oGf9IIQ0iyn8lHPl283TCNieMlZYE23EGjJ1M/BsCKw6GhgqkboCeJZ/rF4hgKvkKL0e9ntFdHMIciVrH2NbqYIf9o5hYUQ0ldEcUxgPtONuStOyxyWUgELzzptNd7ObaYI9HLLm3Lsrgr9lH/Nfw2nLGAuq3oMTWV/dc0swqLH6YkyzrJ/IX9R/Mp2bpSplErzchKNy1sTB0LopKlrCf4gkLdhTapeWf5FguZHI0fDsvngxaaughIa9xcOzH5RQyBZKk9OhIjOoQe2PyzT5qFusjrWNs/e9JMm6AxixeZBVKqahLNh/HCLS4Eux0uBOEWW/s5RAK/F59XJ2LbRwY9W1jaT7RdmKqltHpfVq8soNx5vX40ZPY3BzwGVWWoIR/+v9YiS6pWwMiJs/V5E9keFviHRyT650gIZX+sQjeHgI0JnctuYF+gyEIFZdqrzxk+muNOTc+ixNnax0eNihi0kFgtdjBwTRUiE8Z9ZG66ECfBM++Wedxxa5WWRvJbi3hBJpgvSr+MwapLzY82zidXb+qLt1bcw1DLX69zZ/I5aEBLOW5ubdtRWjsoozcpdNhiOPMycCxUubbKRmbHefatDHojaXwrr14el5a6K3oJpZACE3t0ltal/CV+MeNvSAdz6d2Giu3hCI8k0XW6uQ2QxvtIQ4f0jPDejWWOhMsO8TueLm9IsYDKyAAAAAA==');
