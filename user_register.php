
<?php
    
    if(isset($_POST['submit'])){
        register();
    } 

function register(){
    include ("dbcon.php");

$query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (firstname, lastname, email, username, password, coutry_id, user_type_id)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "', '" . $_POST['user'] . "')";
			$result = @mysqli_query($MySQL, $query);
		
        
        echo '<div class="message" onclick="remove(this)" style="border: 1px solid #07d78b; width: 300px; position: fixed; right: 20px; top:20px; text-align: center; font-weight: bold; border-radius: 5px; background-color: #07d78b; color:white;cursor:pointer;">
             <p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ' registered!</p>
             </div>
			 <style>
			 .message {
				animation-name: message;
				animation-duration: 0.4s;
			  }
			  
			  @keyframes message {
				from {width: 0px;}
				to {width: 300px;}
			  }
			 </style>
			 <script>
				function remove(el) {
					var element = el;
					element.remove();
				}
			 </script>
			 ';

			 header( "refresh:0.5;url=index.php?menu=6" );
		}
		else {
			echo '<div class="message" onclick="remove(this)" style="border: 1px solid #ff6f448c; width: 300px; position: fixed; right: 20px; top:20px; text-align: center; font-weight: bold; border-radius: 5px; background-color: #ff6f448c; color:white;cursor:pointer;">
             <p>User ' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ' already exist!</p>
             </div>
			 <style>
			 .message {
				animation-name: message;
				animation-duration: 0.4s;
			  }
			  
			  @keyframes message {
				from {width: 0px;}
				to {width: 300px;}
			  }
			 </style>
			 <script>
				function remove(el) {
					var element = el;
					element.remove();
				}
			 </script>
			 ';
		}

		

}

?>