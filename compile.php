<?php
    include_once('DragonLiveC');
    $com = new DragonLive($argv);
    $com->loadFile('./helloworld.dl');
    $com->compile();    
?>
