<?php include('include/header.php');?>
<script>
	function validate(){
		var category = $("#category").val()
		if(category == ''){
			alert('Please Select User Type.');
			return false;
		}
		
		var name = $("#name").val();
		if(name == ''){
			alert("Please Enter The Name");
			return false;
		}

		var n = document.getElementById('name');
		var filteru = /^[A-Za-z]/;
		if (!filteru.test(n.value)) {
			alert('Please Provide a Valid Name');
			em.focus;
			return false;
		}

		var login= $("#login").val();
		if(login==''){
			alert("Please Enter The UserName");
			return false;
		}
		var n1 = document.getElementById('login');
		var fil = /^[A-Za-z]/;
		if (!fil.test(n1.value)) {
			alert('Please Provide a Valid UserName');
			em.focus;
			return false;
		}

		var password= $("#password").val();
		if(password==''){
			alert("please Enter The Password");
			return false;
		}

	/*	var p=document.getElementById('password');
		var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;  
		if(!decimal.test(p.value))   
		{   
			alert('Please provide password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character ');  
			return false;  
		}  */

		var email= $("#email").val();
		if(email==''){
			alert("Please Enter The Email");
			return  false;
		}
		var em = document.getElementById('email');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(em.value)) {
			alert('Please Provide a Valid Email Address');
			em.focus;
			return false;
		}
		
		var enabled=$("#enabled").val();
		if(enabled==''){
			alert("Please Choose One Option");
			return false;
		}
		
		
		$('#form').submit();
	}
</script>
<div class="main-content">
<div class="row">
<div class="col-xs-12 col-sm-12">
  <ol class="breadcrumb bc-3">
		<li><a href="<?php echo $base_url;?>home"><i class="entypo-arrow"></i>Home</a></li>
		<li class="active"><strong>Add Users</strong></li>
  </ol>
  </div>
  </div>
  <?php if($L_strErrorMessage) { ?><div class="warning"><?php echo $L_strErrorMessage; ?></div> <?php } ?>
  <div class="row">
 	<div class="col-md-12">
 		<div class="panel panel-primary" data-collapsed="0">
 			<div class="panel-heading fill">
				<div class="panel-title">
                <div class="col-6 col-sm-4 col-lg-2">
					 Add Users
                     </div>
                    <div class="col-6 col-sm-4 col-lg-2 firm">
                      <button class="btn btn-default" onclick="javascript:window.location.href='<?php echo $base_url;?>users/list_user'">Cancel</button>
                      <button class="btn btn-scoend" type="submit" onclick="javascript:validate();return false;">Submit</button>
                      </div>
 				</div>
 			</div>
<form class="form-horizontal form-groups-bordered" role="form" id="form" name="form" method="post" action="<?php echo $base_url;?>users/add">
		 <div class="panel-body">
		<INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand();?>">
		<INPUT TYPE="hidden" NAME="action" VALUE="add_users">
		
		
				<div class="form-group">
						<label class="col-sm-1 control-label" for="select">User Category :</label>
						<div class="col-sm-6">
						  <span id='prod2'>
                          
                           <select id="category" name="ucategory" class="form-control">
								<option value="">Select User Category</option>
								<?php for($i=0;$i<count($utype_list);$i++)
					{
					?>
										<option value='<?php echo $utype_list[$i]->id; ?>' >
					<?php echo $utype_list[$i]->cname; ?>
					</option>
								<?php  }  ?>
						   </select>
                           
						</span>
						</div>
					</div>
					
				<div class="form-group">
					<label class="col-sm-1 control-label" for="inputEmail"> Name:</label>
					<div class="col-sm-6">
					  <input type="text" id="name" name="name" class="form-control" value="<?php echo $name;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="inputEmail">User Name:</label>
					<div class="col-sm-6">
					  <input type="text" id="login" name="login" class="form-control" value="<?php echo $login;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="inputEmail">Password:</label>
					<div class="col-sm-6">
					  <input type="password" id="password" name="password" class="form-control" value="<?php echo $password;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="inputEmail">Email:</label>
					<div class="col-sm-6">
					  <input type="text" id="email" name="email" class="form-control" >
					</div>
				</div>
				 
				<div class="form-group">
					<label class="col-sm-1 control-label" for="inputEmail">Status:</label>
					<div class="col-sm-6">
                    <div class="radio">
                        <label>
                        <input type="radio" id="enabled" name="enabled" value="1" checked="check"> 
                         Active
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" id="enabled" name="enabled"  value="0">
                          Inactive
                        </label>
                      </div>
                      
					 <!-- <input type="radio" id="enabled" name="enabled" class="form-control" value="1"> Active
					  <input type="radio" id="enabled" name="enabled" class="form-control" value="0"> Inactive-->
					</div>
				</div>
			
			</div>
		 </form>
 		</div>
 	</div>
</div>

 </div>
<?php include('include/footer.php');?>
</body>
</html>
