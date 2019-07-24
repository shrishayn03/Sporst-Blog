
<?php
	session_start();
include("includes/connect.php");	
	?>
	
	<table>
	<thead>
	<tr>
		<th width="8%;" class="text-center">Image</th>
	
	
	<th width="17%;"  class="text-center">Title</th>
<th width="14%;"  class="text-center">Author</th>	
	<th width="12%;"  class="text-center">Edit/Delete</th>
		
		<th width="8%;"  class="text-center">Post Status</th>
	</tr>
	</thead>
	
<?php

$result5 = mysqli_query($con,"select * from posts ");
		$numrows = mysqli_num_rows($result5);


while($row = mysqli_fetch_array($result5))
		{
			$Postid = $row['Post_id'];
			$category_id= $row['category_id'];
			$Post_title= $row['Post_title'];
			$Post_author = $row['Post_author'];
			$Post_date = $row['Post_date'];
			$Post_image= $row['Post_image'];
			$Post_content = $row['Post_content'];
			$Post_tags= $row['Post_tags'];
			$Post_comment_count = $row['Post_comment_count'];
			$Post_status = $row['post_status'];

?>

	
	
	<tbody>
	<tr>
		<td><center><img src="images/<?php echo $Post_image; ?>" width="44%"></center></td>
		<td  class="text-center"><?php echo $Post_title; ?></td>
		<td  class="text-center"><?php echo $Post_author; ?></td>
		<td  class="text-center"><i class="fas fa-edit fa-spin"></i>&nbsp&nbsp&nbsp&nbsp&nbsp   <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $Postid; ?>" href="javascript:void(0)"><i class="fas fa-trash fa-spin"></i></a> </td>
		<td  class="text-center"><?php echo $Post_status; ?></td>
	
	</tr>
		<?php } ?>
	</tbody>
</table>