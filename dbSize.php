<?php
    $db = new SQLite3('rrss.db');
    $results = $db->query('SELECT 1.0 * page_count * page_size / 1000000 as size_mb FROM pragma_page_count(), pragma_page_size();');
    $data = array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        array_push($data, $row);
    }
    echo json_encode($data);
?>