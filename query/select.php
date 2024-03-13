<?php 
function sql_select($table, $attributes = '*', $where = null, $order = null, $limit = null) {
    global $DB;

    // Connect to the database if not already connected
    if (!$DB) {
        sql_connect();
    }

    // Prepare the base query
    $query = "SELECT $attributes FROM $table";

    // Add WHERE clause if provided
    if ($where !== null) {
        $query .= " WHERE $where";
    }

    // Add ORDER BY clause if provided
    if ($order !== null) {
        $query .= " ORDER BY $order";
    }

    // Add LIMIT clause if provided
    if ($limit !== null) {
        $query .= " LIMIT $limit";
    }

    // Execute the query
    $result = $DB->query($query);

    // Check for errors
    $error = $DB->errorInfo();
    if ($error[0] != 0) {
        echo "Error: " . $error[2];
        return false; // Return false to indicate failure
    }

    // Fetch all rows if the query was successful
    $result = $result->fetchAll();

    // Return the result
    return $result;
}
