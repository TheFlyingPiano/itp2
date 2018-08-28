var jquery = require(["node_modules/jquery/dist/jquery"]);


function load(UID){
		$.ajax({
           type: "POST",
           url: 'ajax.php',
           data:{action:'load', UID:UID},
		   
           success:function(data) {
             document.getElementById("content").innerHTML = data;
           }

      });
			
			
}

//TODO: SPLIT UP CONTENT DIV, CREATE DIVS FOR EACH USER AND SAVE USERID 
function showUser(UID){
	
	$.ajax({
           type: "POST",
           url: 'ajax.php',
           data:{action:'users', UID:UID},
		   
           success:function(data) {
             document.getElementById("content").innerHTML = data;
           }

      });
			
			
	
	
	
	
}

function changeUser(UserID){
	
	
	
	
	}