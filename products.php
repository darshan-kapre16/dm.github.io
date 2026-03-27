<?php
include('config/db.php');

$result = $conn->query("SELECT * FROM products");

while($row = $result->fetch_assoc()){
    echo "
    <div>
        <img src='uploads/{$row['image']}' width='200'>
        <h3>{$row['name']}</h3>
        <p>{$row['description']}</p>
    </div>
    ";
}
?>