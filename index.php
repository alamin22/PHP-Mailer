
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style type="text/css">
	*{
		margin:0;
		padding: 0;
	}
	body{
		margin-top: 120px;
		font-family: arial;
	}
	form{
	margin-left: 76px;
	text-align: center;
	}
	#email_id{
		width: 48%;
		height: 450px;

	}
	#button{
	margin-left: 76px;

	}
	
</style>

<body>
<center>

<div class="well"  id="email_id">
	<h3>Send your Mail</h3><br>
 <form  class="form-horizontal" action="action.php " method="post">
    <div class="form-group">
      <label class="control-label" for="email"></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label" for="subject"></label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="subject" placeholder="subject" name="subject">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label" for="message"></label>
      <div class="col-sm-10">          
        <textarea cols="16" rows="6" class="form-control" id="message" placeholder="write your comment ..." name="message"></textarea> 
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2">
        <input type="submit" class="btn btn-success col-sm-4" name="email_data" value="Send" id="button" >
      </div>
    </div>
  </form>
</div>

	</div>

</div>
</center>
</body>
</html>


