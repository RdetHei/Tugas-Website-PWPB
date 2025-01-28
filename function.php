<?php

    //membuat function sederhana

    /* 
    FUNCTION TERBAGI MENJADI DUA
    -Function yang tidak mengembalikan nilai
    -Function yang mengembalikan nilai
    */

    //function yang tidak mengembalikan nilai
    function menampilkan(){
        echo "Hello PHP ";
        $a = 10;
        $hasil = $a * $a;
        echo $hasil;
        echo "%";
    }
    
    //function yang mengembalikan nilai
    function perkalian($a, $b){
    $hasil = $a * $b;
    echo "\n";
    echo $hasil;
    return $hasil;
}

    //memanggil function
   // menampilkan();
  //  perkalian(10, 100);
    ?>

<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create
    function create($conn, $name, $email) {
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Read
    function read($conn) {
        $sql = "SELECT id, name, email FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    // Update
    function update($conn, $id, $name, $email) {
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Delete
    function delete($conn, $id) {
        $sql = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // Close connection
    $conn->close();
    ?>
