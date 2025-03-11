<?php
    $db = new SQLite3('rrss.db');
    $db->exec("PRAGMA journal_mode=WAL;");

    $tz = new DateTimeZone('America/Los_Angeles');
    $date = new DateTime();
    $date->setTimezone($tz);

    $results = $db->query("SELECT * FROM f where ts <= '" . $date->format('c') . "' order by ts desc limit 400;");
    $data = array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        array_push($data, $row);
    }
    echo json_encode($data);
?>