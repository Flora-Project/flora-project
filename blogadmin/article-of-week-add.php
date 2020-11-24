<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs where id=$id";
$res = mysqli_query($con, $query);
$row=mysqli_fetch_array($res); 
?>
<form action="" method="post">
<input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>">
 <input type="hidden" value="1" name="article_week" />
 <button type="submit" name="btnSave">Click to publish as article of the week</button>
</form>

 <?php 
if(isset($_POST['btnSave']))
{
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$article=1;
$query="UPDATE `blogs` SET `article_week`='$article' WHERE id=$id";
$res = mysqli_query($con, $query);
    if($res)
    {
        echo "<script>window.location='blogs_view.php';</script>";
    }
    else
    {
        echo "invalid";
    }
}
?>
