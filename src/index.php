<?php
    $page_title = "Spotifail";
    $page_date = "20/03/22";

    include "./include/header.inc.php";
    include "./include/functions.inc.php";

    $last_visited = get_last_visited();
?>
    <main>
        <section>
            <h2>La musique, sans l'écoute</h2>
            <article>
                <h3>Qu'est ce que Spotifail ?</h3>
                <p>Chez Spotifail, pas d'écoute, mais beaucoup d'infos ! Vous pouvez retrouver ici toutes les informations
                    sur vos musiques et chansons préférées, ainsi que des statistiques sur les chansons et les artistes 
                    les plus écoutés, tout cela mis à jour régulièrement !</p>
            </article>
            <?php
                if(!empty($last_visited)) {
                    $track = get_track_info($last_visited[0], $last_visited[1]);
                    $name = str_replace(" ", "+", $last_visited[0]);
                    $artist = str_replace(" ", "+", $last_visited[1]);
                    echo "<article>\n";
                    echo "\t\t\t\t<h3>Dernier titre visité</h3>\n";
                    echo "\t\t\t\t\t<figure>\n";
                    echo "\t\t\t\t<a href=\"./details.php?type=track&name=".$name."&artist=".$artist."\">\n";
                    echo "\t\t\t\t\t\t<img src=\"".$track["album"]["image"]["3"]["#text"]."\"/>\n";
                    echo "\t\t\t\t\t\t<figcaption>".$track["name"]."</figcaption>\n";
                    echo "\t\t\t\t</a>\n";
                    echo "\t\t\t\t\t</figure>\n";
                    echo "\t\t\t</article>\n";
                }
            ?>
        </section>
    </main>
<?php
    include "./include/footer.inc.php";
?>