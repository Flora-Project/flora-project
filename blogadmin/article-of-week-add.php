<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs where id=$id";
$res = mysqli_query($con, $query);
$row=mysqli_fetch_array($res); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article of the week</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
</head>
<style>
.nav.navbar-dark.bg-dark {
    color: white !important;
    height: 62px;
}
.nav-link {
    padding-top: 17px;
    color: white;
}
.card.article {
    margin-top: 162px;
}
.btn.btn-dark {
    margin-top: 14px;
}
.card-header {
    background-color: black;
    color: white;
    font-size: 22px;
}
</style>
<body>
<nav class="nav navbar-dark bg-dark">
  <a class="nav-link active" href="index.php">Admin Panel</a>
  <a class="nav-link" href="blogs_view.php">Blogs</a>
  <a class="nav-link" href="blog_categories_view.php">Categories</a>
  <a class="nav-link" href="blogs_view.php">Published</a>
  <a class="nav-link" href="article-of-week">Article of week</a>
</nav>
<div class="col-md-12">
<div class="container">
<div class="card article">
  <div class="card-header">
    Add Article of the Week
  </div>
  <div class="card-body">
  <form action="" method="post">
 <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>" readonly>
 <input type="hidden" value="1" name="article_week" />
 <button type="submit" class="btn btn-dark" name="btnSave">Click to publish as article of the week</button>
 <button type="submit" class="btn btn-dark" name="btntop">Click to Make it Top article</button>
</form> 
  </div>
</div>
 
</div>
</div>

</body>
</html>


 <?php 
if(isset($_POST['btnSave']))
{
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$article=1;
$query="UPDATE `blogs` SET `article_week`='$article' WHERE id=$id";
$res = mysqli_query($con, $query);
    if($res)
    {
        echo "<script>window.location='article-of-week.php';</script>";
    }
    else
    {
        echo "invalid";
    }
}
?>
<?php 
if(isset($_POST['btntop']))
{
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$article=1;
$query="UPDATE `blogs` SET `top`='$article' WHERE id=$id";
$res = mysqli_query($con, $query);
    if($res)
    {
        echo "<script>window.location='article-of-week.php';</script>";
    }
    else
    {
        echo "invalid";
    }
}
?>
