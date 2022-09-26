<?php

if (isset($_POST['addSeries'])) {

   
    include('../db.php');
    
    $name = $_POST['name'];
    $genre = implode(", ", $_POST["genre"]);
    $realease = $_POST['realease'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];
    
    $query = mysqli_query(
        $con,
        "INSERT INTO series(name, genre, realease, episode, season, synopsis)
 VALUES
 ('$name', '$genre', '$realease', '$episode' ,'$season', '$synopsis')")
        or die(mysqli_error($con)); 

    if ($query) {
        echo
        '<script>
            alert("Create Series Success"); window.location = "../page/listSeriesPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Create Series Failed");
            </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}