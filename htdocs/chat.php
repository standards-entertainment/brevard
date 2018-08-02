<?php
include 'includes/connect.php';
include 'includes/functions.php';
include 'header.php';


$nickname = $username;
// ================================Driver Select Code================================
if(loggedin()){
// ============================= CHAT CODE ===============================
?>
        <title>Brevard Medical Equipment :: Instant Communication</title>
        <div align=center>    
        <h2>Instant Communication</h2>

    
    <link rel="stylesheet" href="chatstyle1.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = "<?PHP echo $username; ?>";
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Unknown User";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  																																															});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    			  }
             });
            
    	});
    </script>
</head>
<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap" align=center>

        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>
</br></br></br></br></br></br>  
<?PHP
// ================================ !CHAT CODE ===============================
}

include 'footer.php';
?>
