<?php
    $db = new PDO("sqlite:".__DIR__."/rrss.db");
    $db->exec("PRAGMA journal_mode=WAL;");

    $tz = new DateTimeZone('America/Los_Angeles');
    $date = new DateTime();
    $date->setTimezone($tz);

    $results = $db->query("SELECT * FROM f where ts <= '" . $date->format('c') . "' order by ts desc limit 400;");
    $data = array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        array_push($data, $row);
    }
    file_put_contents('rrss.json', json_encode($data))
?>