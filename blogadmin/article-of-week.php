<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
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
h1 {
    padding-top: 45px;
    text-align: center;
    padding-bottom: 29px;
}
.table.table-two {
    margin-bottom: 50px;
}
thead {
    background-color: black;
    color: white;
}
</style>
<body>
<!--navigation-->
<nav class="nav navbar-dark bg-dark">
  <a class="nav-link active" href="index.php">Admin Panel</a>
  <a class="nav-link" href="blogs_view.php">Blogs</a>
  <a class="nav-link" href="blog_categories_view.php">Categories</a>
  <a class="nav-link" href="blogs_view.php">Published</a>
  <a class="nav-link" href="article-of-week">Article of week</a>
</nav>
<!--tables for data-->
<div class="col-md-12">
<div class="container">
<h1>Active Articles of the week</h1>
<table class="table table-one">
<thead>
<tr>
<th>Article Title</th>
<th>Article tag</th>
<th>Article status</th>
<th>Article date</th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>

<tbody>
<?php
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs where article_week=1 ";

$res = mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
{
$id = $row['id'];
?>
<tr>
<td><?php echo $row['title']?></td>
<td><?php echo $row['tags']?></td>
<td><?php echo $row['posted']?></td>
<td><?php echo $row['date']?></td>
<td>
<td><a href="article-of-week-remove.php?id=<?php echo $row['id']?>">Remove article of the week</a></td>
</td>
</tr>
<?php
 }
?>
</tbody>
 </table>
 <h1>Top blogs</h1>
<table class="table table-one">
<thead>
<tr>
<th>Article Title</th>
<th>Article tag</th>
<th>Article status</th>
<th>Article date</th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>

<tbody>
<?php
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs where top=1 ";

$res = mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
{
$id = $row['id'];
?>
<tr>
<td><?php echo $row['title']?></td>
<td><?php echo $row['tags']?></td>
<td><?php echo $row['posted']?></td>
<td><?php echo $row['date']?></td>
<td>
<td><a href="article-of-week-remove.php?id=<?php echo $row['id']?>">Remove Top blog</a></td>
</td>
</tr>
<?php
 }
?>
</tbody>
 </table> 
<h1>Add new Article of the week</h1>
<table class="table table-two">
<thead>
<tr>
<th>Article Title</th>
<th>Article tag</th>
<th>Article status</th>
<th>Article date</th>
<th></th>
<th></th>

</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs where article_week=0";
   
$res = mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
{
$id = $row['id'];
?>
<tr>
<td><?php echo $row['title']?></td>
<td><?php echo $row['tags']?></td>
<td><?php echo $row['posted']?></td>
<td><?php echo $row['date']?></td>
<td><a href="article-of-week-add.php?id=<?php echo $row['id']?>">Make article of the week</a></td>
</tr>
<?php
 }
?>
</tbody>
 </table>
 </table> 
<h1>Add Top Blog</h1>
<table class="table table-two">
<thead>
<tr>
<th>Article Title</th>
<th>Article tag</th>
<th>Article status</th>
<th>Article date</th>
<th></th>
<th></th>

</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs where top=0";
   
$res = mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
{
$id = $row['id'];
?>
<tr>
<td><?php echo $row['title']?></td>
<td><?php echo $row['tags']?></td>
<td><?php echo $row['posted']?></td>
<td><?php echo $row['date']?></td>
<td><a href="article-of-week-add.php?id=<?php echo $row['id']?>">Add it Top Blog</a></td>
</tr>
<?php
 }
?>
</tbody>
 </table>
</div>
</body>
</html>
