<?php

foreach($values as $value):    
    echo "<h1>".$value->name."<h1>";
    echo "<p>".$value->price."</p>";
    echo "<a href='javascript:history.back()'>back to the preview page</a>";
endforeach;