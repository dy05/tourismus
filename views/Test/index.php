<?php

echo "<h1>".$info['title']."</h1>";
echo "<div class='alert alert-info'>Page d'accueil de test !</div>";
?>
<table>
    <thead>
        <tr>
            <th>Nom marchandise</th>
            <th>Price</th>
        </tr>
    <thead>
    <tbody>
<?php
foreach($values as $value):    
    echo "<tr>";
    echo "<td><a href='".WEBROOT."test/view/".$value->id."'>".$value->name."</a></td>";
    echo "<td>".$value->price."</td>";
    echo "</tr>";
endforeach;
?>
</tbody>
<table>
