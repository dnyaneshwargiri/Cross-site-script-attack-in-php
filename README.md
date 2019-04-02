# Cross-site-script-attack-in-php
Demonstration of simple cross site script attack in php

How to execute =><br/>
Following steps shows xss attack on simple book serach app<br/><br/>

1] Copy and paste php files xss.php and searchbook.php in your php directory.<br/>
2] Import the book.sql database in order to have functional book search.<br/>
3] On normal and valid query page gives valid results as below.<br/>
   [alt text](https://github.com/dnyaneshwargiri/Cross-site-script-attack-in-php/blob/master/1.png)<br/><br/>
   [alt text](https://github.com/dnyaneshwargiri/Cross-site-script-attack-in-php/blob/master/2.png)<br/><br/>

4] On giving vulnerable js script to page it misbehaves or may produce unwanted / malicious tasks.<br/>
 e.g
 <script>
    var i;
    for(i=0;i<1000;i++)
    {alert('System Crahsed !');
    }
  </script>


[alt text](https://github.com/dnyaneshwargiri/Cross-site-script-attack-in-php/blob/master/4.png)<br/><br/>

[alt text](https://github.com/dnyaneshwargiri/Cross-site-script-attack-in-php/blob/master/3.png)
