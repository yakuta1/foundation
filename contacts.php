<?php include("core/init.php"); ?>  
<?php
	$db = new Database();
    $query = "SELECT * FROM contacts";
    $result = $db->select($query);
    
?> 


 

    

    <div class="row">
        <div class="large-12 columns">
            <table>
	<thead>
			<tr>
				<th width="200">Name</th>
				<th width="130">Phone</th>
				<th width="200">Email</th>
				<th width="250">Address</th>
				<th width="100">Group</th>
				<th width="150">Action</th>
			</tr>	
	</thead>
	<tbody>
    <?php if($result) :?>
    <?php while($row = $result->fetch_assoc()) : ?>
		<tr>
				<td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['address1']; ?> <?php echo $row['address2']; ?> <?php echo $row['city']; ?></td>
				<td><?php echo $row['contact_group']; ?></td>
				<td>
                    <ul class="button-group">
                    <li><a class="button tiny" data-reveal-id="myModal">Edit</a></li>
                    <li><a class="button tiny alert">Delete</a></li>
                    </ul>
                </td>
			</tr>
            
     <?php endwhile; ?>
    <?php else : ?>
    <h2>No records</h2>
    <?php endif; ?>       		
	</tbody>
</table>
        </div>
    </div>