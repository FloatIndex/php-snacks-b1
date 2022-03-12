<?php

$paragraph = "Lorem ipsum dolor sit amet. Cum quas doloribus aut omnis officiis ut repellat laudantium eum nihil dicta non quas voluptatem sed iure culpa in inventore eius. Quo rerum voluptatibus eum itaque quos quo quasi consequatur aut doloremque corporis ut incidunt illum ut similique corrupti sit dolore quae? Qui consequatur eligendi non sint et distinctio maiores qui placeat voluptatem qui dolor voluptatem eum natus incidunt qui voluptas nihil! Et dolore debitis et repellat delectus qui ratione suscipit et reprehenderit consectetur 33 excepturi voluptatum ut quia corporis quo nemo quae? Et sunt mollitia rem similique debitis At dolorem delectus et nihil placeat in culpa facilis 33 maiores voluptates. Eos amet voluptatem nam eaque doloribus qui deserunt sint qui sequi consectetur ea eveniet possimus aut sunt molestiae id deserunt assumenda.";

echo "<h2>Paragrafo originale:</h2>";
echo "<p>$paragraph</p>";

$exploded = explode('.', $paragraph);
echo "<br><br><h2>Paragrafo esploso:</h2>";
for($i=0; $i<count($exploded); $i++) {
    if($exploded[$i] != '') {
        echo "<p>$exploded[$i]</p>";
    }
}


?>