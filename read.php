<?php
$conn new mysqli("localhost", "root", "","note_todolist");
$query mysqli_query($conn, "select * from note_todolist");
$data mysqli_fetch_all($query, MYSQLI_ASSOC);
echo json_encode($data);

?>