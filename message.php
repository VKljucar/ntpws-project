<?php

function message($type, $message){

    if ($type == 1){
        echo '<div class="message" onclick="remove(this)" style="border: 1px solid #07d78b; width: 300px; position: fixed; right: 20px; top:20px; text-align: center; font-weight: bold; border-radius: 5px; background-color: #07d78b; color:white;cursor:pointer;">
        <p>' . $message . '</p>
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
    }else if($type == 2){
        echo '<div class="message" onclick="remove(this)" style="border: 1px solid #ff6f448c; width: 400px; position: fixed; right: 20px; top:20px; text-align: center; font-weight: bold; border-radius: 5px; background-color: #ff6f448c; color:white;cursor:pointer;">
             <p>' . $message . '</p>
             </div>
			 <style>
			 .message {
				animation-name: message;
				animation-duration: 0.5s;
                z-index: 9999;
			  }
			  
			  @keyframes message {
				from {width: 0px;}
				to {width: 400px;}
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