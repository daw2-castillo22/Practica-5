<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (4, "2018-12-04", "Elver Galarga", "It's a good film about parasyte aliens who transform their hosts 
	into killing machines and giving them superhuman powers.", 2),
    (5, "2016-04-26", "Thomas Turbado", "I cryed... a lot...", 5),
    (6, "2020-10-30", "Elsa Patito", "I downloaded it from uTorrent to see it in my halloween party
	and I have to say that the film was a completly succes! Everyone was very sacred!", 4)
ENDSQL;
mysqli_query($db, $query) or die (mysqli_error($db));

echo 'Movie database successfully updated!';
?>