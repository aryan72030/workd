<?php
    $con=mysqli_connect("localhost","root","","ajax");
    $data=mysqli_query($con,"select * from stu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" id="frm">
    <table>
        
            <tr>
                <td>Enter name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Enter lname</td>
                <td><input type="text" name="lname" id=""></td>
            </tr>
            <tr>
                <td>Enter email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Entre password</td>
                <td><input type="password" name="pass" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" id=""></td>
            </tr>
    </table>
</form>
<table border="">
    <th>id</th>
    <th>name</th>
    <th>lname</th>
    <th>email</th>
    <th>password</th>


    <tbody id="ans">
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
    </tbody>
</table>
</body>
</html>
<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
<script type="text/javascript">
    $(document).on('submit','#frm',function(e){
        e.preventDefault();

        var data=$(this).serialize();

        $.ajax({
            type:"POST",
            url:"ajax.php",
            data:data,
            success:function(res){
                $('#ans').html(res);
            }
        })
    })
$(document).on('click','.del',function(){
    var id = $(this).data('id');

    $.ajax({
        type:"POST",
        url:"ajax.php",
        data:{del_id:id},
        success:function(res){
            $('#ans').html(res);
        }
    });
});

</script>

