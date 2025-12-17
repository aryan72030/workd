<?php
include 'conn.php';

$id = $name = $lname = $email = $password = $phone = "";
$mesname = $lnameerro = $emailerror = $phoneerror = "";
$success_message="";

// $uid=$_GET['u_id'];

if (isset($_GET['u_id'])) {
    $id = $_GET['u_id'];
    $quer = "select * from register where id='$id'";
    $excut = mysqli_query($con, $quer);
    $res = mysqli_fetch_assoc($excut);
    
    if ($res) {
        $name = $res['name'];
        $lname = $res['lname'];
        $email = $res['email'];
        $password = $res['password'];
        $phone = $res['phone'];
        $image=$res['image'];
        $cont_id=$res['countrie'];
        $stid=$res['state'];

        $lang=explode(',',$res['language']);
      
    }
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $countrie=$_POST['countrie'];
    $state=$_POST['state'];
    $language=implode(',',$_POST['lng']);


    if(!empty($_FILES['image']['name'][0])){
         if (isset($_GET['u_id'])) {
            $imgid=$res['image'];
            $sql="select * from img where id in($imgid)";
            $ex=mysqli_query($con,$quer);

        while($oldimg=mysqli_fetch_assoc($ex)) {
            $oldImagePath = "image/" . $oldimg['image'];
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        mysqli_query($con,"delete from img where id in($imgid)");
    }
     foreach ($_FILES['image']['name'] as $key=>$val){
        $temp_name = $_FILES['image']['tmp_name'][$key];
        $ext = pathinfo($_FILES['image']['name'][$key], PATHINFO_EXTENSION);
        $newimagename = uniqid() . '.' . $ext;
        $path = "image/" . $newimagename;
        move_uploaded_file($temp_name, $path);
        $image = $newimagename;
          $sql="insert into img (image) values('$image')";
          $run=mysqli_query($con,$sql);
          if($run){
            $imageIds[] = mysqli_insert_id($con);
          }
    }
}
else{
    if(isset($_GET['u_id']) && !empty($res['image'])){
        $imageIds=explode(',',$res['image']);
    }
}
    $imageid=implode(',',$imageIds);


    $isValid = true;
    
    if (empty($name)) {
        $mesname = "Name is required";
        $isValid = false;
    }

    if (empty($lname)) {
        $lnameerro = "Last name is required";
        $isValid = false;
    }
    
    if (empty($email)) {
        $emailerror = "Email is required";
        $isValid = false;
    }
    
    if (empty($phone)) {
        $phoneerror = "Phone number is required";
        $isValid = false;
    }

if (!empty($email)) {
    $quer = "select * from register where email='$email'";
    $excut = mysqli_query($con, $quer);
   
    if (mysqli_num_rows($excut) > 0) {    
        if (isset($_GET['u_id'])) {
            $cid = $_GET['u_id'];
            $check = "select * from register where email='$email' and id='$cid'";
            $check_exec = mysqli_query($con, $check);
            
            if (mysqli_num_rows($check_exec) > 0) {
                $isValid = true;
            } else {
                $emailerror = "Email is already registered by another user";
                $isValid = false;
            }
        } else {
            $emailerror = "Email is already registered";
            $isValid = false;
        }
    }
}
    
    if ($isValid) {
        if (isset($_GET['u_id'])) {
            $id = $_GET['u_id'];
            $quer = "UPDATE register SET name='$name', lname='$lname', email='$email', password='$password', phone='$phone',state='$state',countrie='$countrie',language='$language',image='$imageid' WHERE id='$id'";
            $_SESSION['succes'] = "Data updated successfully!";
        } else {
            $quer ="INSERT INTO register (name, lname, email, password, phone,countrie,state,image,language) VALUES ('$name', '$lname', '$email', '$password', '$phone','$countrie','$state','$imageid','$language')";
            $sql="inset into img (image) value('$image')";
             $_SESSION['succes'] = "Data inserted successfully!";
        }
        $excut = mysqli_query($con, $quer);
            header('location:index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>Register Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Enter name</td>
                <td>
                    <input type="text" name="name" value="<?php echo $name; ?>" id="">
                    <span class="error"><?php echo $mesname; ?></span>
                </td>
            </tr>
            <tr>
                <td>Enter last name</td>
                <td>
                    <input type="text" name="lname" value="<?php echo $lname; ?>" id="">
                    <span class="error"><?php echo $lnameerro; ?></span>
                </td>
            </tr>
            <tr>
                <td>Enter email</td>
                <td>
                    <input type="email" name="email" value="<?php echo $email; ?>" id="">
                    <span class="error"><?php echo $emailerror; ?></span>
                </td>
            </tr>
            <tr>
                <td>Enter password</td>
                <td>
                    <input type="password" name="password" value="<?php echo $password; ?>" id="">
                </td>
            </tr>
            <tr>
                <td>Enter phone number</td>
                <td>
                    <input type="number" name="phone" value="<?php echo $phone; ?>" id="">
                    <span class="error"><?php echo $phoneerror; ?></span>
                </td>
            </tr>
             <tr>
                <td>countries</td>
                <td>
                    <select name="countrie" id="countrie">
                        <option value="">select county</option>
                        <?php
                            $sql="select * from countrie";
                            $exc=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($exc)){  ?>
                                <option value="<?php echo $row['cid']; ?>"<?php echo (@$row['cid']==@$cont_id) ?  "selected" : '';  ?>><?php echo $row['countrie']; ?></option>
                        <?php } ?>  
                    </select>
                </td>
            </tr>

            <tr>
                <td>state</td>
                <td>
                    <select name="state" id="state">
                        <option value="">selected state</option>
                        <?php 
                        if(isset($_GET['u_id'])){    
                            $sql="select * from state where cou_id='$cont_id'";
                            $exc=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($exc)){  ?>
                                <option value="<?php echo $row['sid']; ?>"<?php echo ($row['sid']==$stid) ?  "selected" : '';  ?>><?php echo $row['state']; ?></option>
                               <?php } 
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>language</td>
                <td>
                    <input type="checkbox" name="lng[]" value="english"<?php if(isset($_GET['u_id'])){if(in_array("english",$lang)){echo "checked";}} ?>>english
                    <input type="checkbox" name="lng[]" value="hindi"<?php if(isset($_GET['u_id'])){if(in_array("hindi",$lang)){echo "checked";}} ?>>hindi
                    <input type="checkbox" name="lng[]" value="gujrati"<?php if(isset($_GET['u_id'])){if(in_array("gujrati",$lang)){echo "checked"; }} ?>>gujrati
                </td>
           </tr>
            <tr>
                <td>select image</td>
                <td><input type="file" name="image[]" multiple id=""></td>
            </tr>
            <?php 
            if(isset($_GET['u_id']) && !empty($res['image'])){
                $imgid = $res['image'];
                $sql = "select * from img where id IN ($imgid)";
                $result = mysqli_query($con, $sql);
            ?>
            <tr>
                <td>current image:</td>
                <td>
                    <?php
                    while($imageData = mysqli_fetch_assoc($result)){
                    ?>
                        <span><img src="image/<?php echo $imageData['image']; ?>" alt="" class="uimg"></span>
                        <button id="image" data-img_id="<?php echo $imageData['id']; ?>">remove</button>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>

            <tr>
                <td><a href="index.php">home</a></td>
                <td><input type="submit" name="save" value="Save" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>
<style>
    .uimg{
        width: 100px;
        height: inherit;
    }
</style>

<script src="jquery-3.7.1.min.js"></script>
<script>
    
    $(document).ready(function() {
    $('#countrie').change(function() {
        var countrieid = $(this).val();
        if (countrieid) {
            $.ajax({
                type: 'POST',
                url: 'ajax.php', 
                data: { country_id: countrieid },
                success: function(res) {
                    $('#state').html(res);
                }
            });
        } 
    });
})
</script>
<script>
$(document).on("click","#image",function(e){
    e.preventDefault() 
    var id=$(this).data('img_id');
    var row = $(this).closest('span');
    $.ajax({
        url:"ajax.php",
        type:"GET",
        data:{imgid:id},
        success: function(response){
            row.remove();
        }
    })
})
</script>