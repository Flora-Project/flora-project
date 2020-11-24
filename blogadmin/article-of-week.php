<h1>Add new Article of the week</h1>
<table class="table">
<thead>
<tr>
<td>Article Title</td>
<td>Article tag</td>
<td>Article status</td>
<td>Article date</td>
</tr>
</thead>

<tbody>
<?php
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs";
   
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
<td><a href="article-of-week-add.php?id=<?php echo $row['id']?>">Make it New article of the week</a></td>
</tr>
<?php
 }
?>
</tbody>
 </table>
<h1>Present Article of the week</h1>
<table class="table">
<thead>
<tr>
<td>Article Title</td>
<td>Article tag</td>
<td>Article status</td>
<td>Article date</td>
</tr>
</thead>

<tbody>
<?php
$con=mysqli_connect("localhost", "root", "", "blog_admin_db");
$query="Select * from blogs where article_week=1";
   
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
<span class='deleteappoint' data-id='<?= $id;?>'>Remove this Article of the week</span>
</td>
</tr>
<?php
 }
?>
</tbody>
 </table>
