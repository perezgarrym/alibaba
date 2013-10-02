
<div class="row-fluid">
	<div class="span6">
		<h1>Login</h1>
		<br />
		<?php echo $this->Form->create('User', array('action' => 'login')); ?>
		<?php echo $this->Form->input('username', array('class' => 'form-control', 'autofocus' => 'autofocus')); ?>
		<br />
		<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
		<br />
		<?php echo $this->Form->button('Login', array('class' => 'btn btn-primary')); ?>
		<?php echo $this->Form->end(); ?>
		<br />
		<br />
		<br />
	</div>
	<div class="span6 offset2" id="home-user">
		<div id="register-user">
		<?php echo $this->Form->create(null,array('action'=>null, 'class'=>'form-horizontal', 'id'=>'home-register','name'=>'home-register'));?>
			<div class="control-group">
				<div class="controls">
				<h4 class="lead " id='create-header' data-load-text="Creating account...">Create an account</h4>		
			</div>
			</div>
			<div class="control-group">
			 
			  <label class="control-label" for="names">Full Name</label>
				<div class="controls">
					
				  <input type="text" vname="data[%][first_name]" id='first-name' placeholder="First Name" class="span4" required />
				  <input type="text" vname="data[%][middle_name]" id='middle-name' placeholder="Middle Name" class="span4" />
				  <input type="text" vname="data[%][last_name]"  id='last-name' placeholder="Last Name"  class="span4" required/>
				</div>
			  </div>
			<div class="control-group">
				 <label class="control-label" for="basicinfo">Basic Info</label>
				<div class="controls">
				  <input type="text" vname="data[%][birthday]" id='birthday' placeholder="Birthday" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" class="span3" required />
				  <select vname="data[%][gender]" id="gender" class="span4">
					<option value="">Select Gender</option>
					<option value="M">Male</option>
					<option value="F">Female</option>
				  </select>
				   <select vname="data[%][user_type]" id="user-type" class="span5">
					<option value="">Select User type</option>
					<option value="E">Employee</option>
				  </select>
				</div>
			  </div>
			<div class="control-group">
				 <label class="control-label" for="accountinfo">Account Info</label>
				<div class="controls">
					<span class="input-prepend span4">
						<span class="add-on"><i class="icon-user "></i></span><input type="text" id="username" vname="data[User][username]" placeholder="Username"  pattern="^[a-zA-Z0-9]{6,15}$" class="span9" required>
					</span> 
				   <input type="password" id="password" vname="data[User][password]" placeholder="Password"  pattern="^[a-zA-Z0-9]{8,12}$" class="span4" required>
				   <input type="password" id="confirm-password" vname="data[User][confirm_password]"  placeholder="Confirm Password" class="span4" required>
				</div>
			  </div> 	
			<div class="control-group">
			<div class="controls text-right">
			<div id="alert-msg" class="alert alert-error text-left hide">
					<a href="#" class="close">&times;</a>
					<strong>Warning!</strong> All fields are required, please fill out.
				</div>
			  <button type="submit" class="btn btn-medium " id="register">Register</button>
			  
			  <button type="button" class="btn btn-medium btn-primary" id="learn-more">Learn More</button>
			 
			</div>
		  </div>
		<?php echo $this->Form->end(); ?>
		<?php echo $this->Form->create(null,array('action'=>null, 'class'=>'form-horizontal hide', 'id'=>'user-details','name'=>'user-details'));?>
		<div class="control-group">
			<div class="controls">
			<h4 class="lead " id='confirm-header' data-load-text="Confirming...">Confirm account</h4>		
			<p class="muted">Please enter your <span class="user-type-title">---</span> number to confirm your registration. </p>
			</div>
			 <label class="control-label" for="names"><span class="user-type-title">---</span> No</label>
			<div class="controls ">
			<span class="input-append">
			  <input type="hidden" vname="data[%][id]"  />
			  <input type="text" vname="data[%][x_no]" id='no' placeholder="#####-######" class="span12" required />
			  <button class="btn btn-info" id="confirm">Confirm</button>
			 </span>
			</div>
		</div>
		<div class="control-group">
		 
		  </div>
		<?php echo $this->Form->end(); ?>
		<div class="form-horizontal hide" id="thank-you">
			<div class="control-group">
				<div class="controls"><h4 class="lead ">Thank you!</h4>	
				<p>Please wait until your account has been confirmed.</p>
				</div>
			</div>
		</div>		
		</div>
	</div>
</div>