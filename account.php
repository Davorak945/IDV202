<?php include "base.php"; ?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="home.css"/>   
        <link rel="stylesheet" type="text/css" href="account.css"/> 
    </head>
    <body>
        <header>
            <nav>
                <ul>
                <a href="about%20us.html">About us</a>
                <a>Login</a>
                <a href="sign-in.php">Sign up</a>
                <a href="account.php">Account</a>
                </ul>
            </nav>
        </header>
        <main>
            
            <figure class="avatar">
                <img src="avatar_basic.png" >
            </figure>
            <!--<figcaption><a  action="upload.php" id="fileToUpload" href="">Change Your Avatar</a></figcaption>-->
            
            <?php/*   $usersData = my_sql_fetch(getId($_SESSION['username']));
                    $displayname = my_sql_fetch($_PULL[""]);
                    */
                    $query = mysql_query("SELECT * FROM users");
                    
                    
            ?> 
            <strong><u>Update Your Name</u></strong>
            <form action="account.php?update=name" id="user_id" method="post">
                Display Name: <input class="data_entry" type="text" name="Name" value="<?php? echo $usersData['displayname']; ?>" ><br />
                Name: <input class="data_entry" type="text" name="fName" value="<?php? echo $usersData['name']; ?>"  > <br />
                Email Address: <input class="data_entry" type="email" name="lName" value="<?php? echo $usersData['lastname']; ?>" > <br />
                Role: $role <br />
                Reputation: <!-- Find out how to do this... --> <br />
                
                <input type="submit" name="Submit" value="Update" />
        </main>
    </body>
</html>