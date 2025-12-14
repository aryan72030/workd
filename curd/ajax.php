<?php  
$con=mysqli_connect("localhost","root","","ajax");

if(isset($_POST['del_id'])){
    $id = $_POST['del_id'];
    mysqli_query($con,"DELETE FROM stu WHERE id='$id'");
}


    if(isset($_POST['name'])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    mysqli_query($con,"insert into stu(name,lname,email,password)value('$name','$lname','$email','$pass')");
    }

    $data=mysqli_query($con,"select * from stu");
?>
 <?php while($row=mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <button class="del" data-id="<?php echo $row['id']; ?>">Delete</button>
                    <button class="upd" data-uid="<?php echo $row['id']; ?>">update</button>
                </td>
            </tr>
            <?php } ?>

            