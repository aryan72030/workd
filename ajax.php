<?php
include 'conn.php';


if (isset($_POST['country_id'])) {
    $country_id = $_POST['country_id'];
    $sql = "select sid, state from state where cou_id = '$country_id'";
    $result = mysqli_query($con, $sql);

    echo '<option value="">select state</option>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['sid'] . '">' . $row['state'] . '</option>';
    }
}



if(isset($_GET['imgid'])){
$id=$_GET['imgid'];
$sql="delete from img where id='$id'";
mysqli_query($con,$sql);
}
?>
