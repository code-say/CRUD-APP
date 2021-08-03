<?php 
    error_reporting(0);
?>
<html>
    <head>
        <title>Student Management</title>
    </head>
    <body>
        <form method="post" action="<?php echo base_url(); ?>studentt/<?php echo isset($modify)?"update_student":"add_studentt"; ?>">
            <input type="hidden" name="hid" value="<?php echo $modify['id']; ?>">
            <center>
                <h1><center>Insert,Update,Delete</h1>
                <table border="1px" cellspacing="5px" cellpadding="5px">
                    <tr>
                        <td>Student Name</td>
                        <td><input value="<?php echo $modify['username']; ?>" type="text" name="username" placeholder="Student Name"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input value="<?php echo $modify['email']; ?>" type="email" name="email" placeholder="Email Address"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input value="<?php echo $modify['phone']; ?>" type="mobileno" name="mobileno" placeholder="Student Contact"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="submit"></td>                    
                    </tr>
                </table>
            </center>
        </form>
        <center>
            <table border="1px">
                <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                   <th>Action</th> 
                </tr>
                <?php 
                foreach ($stu as $s)
                { ?>
                <tr>
                   <td><?php echo $s['id']; ?></td>
                   <td><?php echo $s['username']; ?></td>
                   <td><?php echo $s['email']; ?></td>
                   <td><?php echo $s['phone']; ?></td> 

                    <td>
                    <a onclick="return confirm('Are You sure to modify data ?');" href="<?php echo base_url() ?>studentt/modify/<?php echo $s['id'];?>">Modify</a>
                    <a onclick="return confirm('Are You sure to remove data ?');" href="<?php echo base_url() ?>studentt/remove_studentt/<?php echo $s['id'];?>">Delete</a>
                    </td>
                </tr>
                <?php }?>
        </center>
    </body>
</html>