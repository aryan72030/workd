<?php
include 'conn.php';





if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qu=mysqli_query($con,"select * from register where id=$id");
    $res=mysqli_fetch_assoc($qu); 
    $imgid=$res['image'];
    
    $re=mysqli_query($con,"select * from img where id in($imgid)");
    while($dis=mysqli_fetch_assoc($re)){
         if(!$res['image']==""){
          unlink("image/".$res['image']);
    }
    }
   mysqli_query($con,"delete from img where id in($imgid)");
    $deleteQuer = "DELETE FROM register WHERE id='$id'";
    mysqli_query($con, $deleteQuer);
    $_SESSION['succes']="Record deleted successfully";

    $red = "index.php?page=1&serch=" . urlencode($_GET['serch'] ?? '');
    header("Location: $red");

}
if(isset($_POST['btndele'])&& !empty($_POST['dele'])){
    $ids=$_POST['dele'];
    $idsstr=implode(',',array_map('intval',$ids));

        $qu=mysqli_query($con,"select * from register where id in($idsstr)");
    while($res=mysqli_fetch_assoc($qu)){
          if(!$res['image']==""){
        unlink("image/".$res['image']);
      }
    }
  

    $delet="delete from register where id in($idsstr)";
    mysqli_query($con,$delet);

    header('location:index.php');
}


$limit = 4; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

  $search_term = isset($_GET['serch']) ? $_GET['serch'] : '';

if(isset($_GET['serch'])){
    $name=$_GET['serch'];
    $res = mysqli_query($con, "SELECT COUNT(*) AS total FROM register where CONCAT(name,lname,email) LIKE '%$name%'");
}
else{
    $res = mysqli_query($con, "SELECT COUNT(*) AS total FROM register");
}
$row = mysqli_fetch_assoc($res);
$totalRecords = $row['total'];

 $totalPages = ceil($totalRecords / $limit);

 $stat = ($page - 1) * $limit;


if(isset($_GET['btn'])){
    $serch=$_GET['serch'];
   $quer = "SELECT * FROM register WHERE CONCAT(name,lname,email) LIKE '%$serch%' LIMIT $stat,$limit";
}
else{
    $quer = "SELECT * FROM register LIMIT $stat, $limit";
}
$excut = mysqli_query($con, $quer);

$success_message = "";
if(isset($_SESSION['succes'])) {
    $success_message = $_SESSION['succes'];
    unset($_SESSION['succes']);
}

?>

<a href="store.php" class="a">Add Data</a>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title></title>
</head>
<link rel="stylesheet" href="style.css">
<style>
    .dele{
        margin-left: 510px;
        margin-top: 5px;
    }
    .img{
        width: 100px;
        height: 100px;
    }
</style>
<body>
 <?php echo @$success_message   ?>
    <br>
   <div class="cont">
    <form action="" method="get">
     <input type="text" name="serch" value="<?php echo @$name; ?>" placeholder="serach name last name email" id="">
     <input type="submit" name="btn" id="">
     <input type="button" value="Reset" onclick="window.location.href='index.php';" />
     
     </form>
   </div>
    <table border="1">
        <thead>
            <tr>
                <th>selectd</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="post">
        <?php 
        if(mysqli_num_rows($excut)>0){
        while($res = mysqli_fetch_assoc($excut)) { ?>
            <tr>
                <td><input type="checkbox" name="dele[]" value="<?php echo $res['id']; ?>" id=""></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['lname']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['password']; ?></td>
                <td><?php echo $res['phone']; ?></td>
                <td>
                    <?php
                    if(!empty($res['image'])){
                       $imgid=$res['image'];
                        $sql = "select * from img where id in ($imgid)";
                       $rest=mysqli_query($con,$sql);
                       while($image=mysqli_fetch_assoc($rest)){  ?>
                            <img src="image/<?php echo $image['image']; ?>" class="img" alt="">
                        <?php }}
                    ?>
               </td>
                <td>
                    <a href="store.php?u_id=<?php echo $res['id']; ?>" class="su">Update</a>
                     <a href="#" class="delte re" data-reg_id="<?php echo $res['id']; ?>">deleted</a>
                </td>
            </tr>
        <?php }} else{ ?>
            <h2>recode not found</h2>
            <?php } ?>    
        </tbody>
       
    </table>
            <?php if(mysqli_num_rows($excut) > 0): ?>
                <div class="dele">
                <input type="submit" name="btndele" value="Delete Selected" 
                       onclick="return confirm('Are you sure delete selected records?')">
                </div>
            <?php endif; ?>
        </form>
   

     <div class="pagination">
        <?php if($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?><?php echo !empty($search_term) ? '&serch=' . urlencode($search_term) . '&btn=Search' : ''; ?>" class="a">Previous</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $totalPages; $i++): ?>
            <?php if($i == $page): ?>
                <strong><?php echo $i; ?></strong>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?><?php echo !empty($search_term) ? '&serch=' . urlencode($search_term) . '&btn=Search' : ''; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?><?php echo !empty($search_term) ? '&serch=' . urlencode($search_term) . '&btn=Search' : ''; ?>" class="a">Next</a>
        <?php endif; ?>
    </div>
</body>
</html>

<script src="jquery-3.7.1.min.js"></script>
<script>
$(document).on('click', '.delte', function(e) {
    e.preventDefault();
    if (confirm("Are you sure you delete this record?")) {
        var did = $(this).data('reg_id');
        var row = $(this).closest('tr');
        var currentPage = <?php echo $page; ?>;    
        $.ajax({
            url: 'index.php', 
            type: 'GET',
            data: { id: did },
            success: function(res) {
                row.remove(); 
                var remainingRows = $('tr').length;
                if(remainingRows == 1){
                    var newPage = currentPage > 1 ? currentPage - 1 : 1;
                    window.location.href = 'index.php?page=' + newPage;
                }
            },
         
        });
    }
});
</script>
