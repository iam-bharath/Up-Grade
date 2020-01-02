<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>

<?php

    $contacts = mysqli_query("SELECT * FROM users ORDER BY ID ASC") or die( mysqli_error() );

    // If results
    if( mysqli_num_rows( $contacts ) > 0 )
    ?>

    <table id="contact-list">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CREATED_ON</th>
                <th>CONTRIBUTION</th>
  <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php while( $contact = mysqli_fetch_array( $contacts ) ) : ?>



            <tr>
                <td class="contact-name"><?php echo $contact['name']; ?></td>
                <td class="contact-email"><?php echo $contact['email']; ?></td>
                <td class="contact-telephone"><?php echo $contact['telephone']; ?></td>
                <td class="contact-address"><?php echo $contact['address']; ?></td>
                <td class="contact-delete"><form action='delete.php' method="post">
<input type="hidden" name="name" value="">
<input type="submit" name="submit" value="Delete">
</form></td>                
            </tr>

        <?php endwhile; ?>

        </tbody>
    </table>
    ?>