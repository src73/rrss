<?php
    $db = new SQLite3('rrss.db');
    $results = $db->query("SELECT * FROM f where ts <= datetime('now','-3 Hour') order by ts desc limit 400;");
    $data = array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        array_push($data, $row);
    }
    echo json_encode($data);
?>