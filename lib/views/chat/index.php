<div class="hero-unit">
<form class="well" method="post" action="/auth/register">
	<fieldset>
		<legend>Registration</legend>
		<div class="control-group">
			<label class="control-label" for="username">Username</label>
			<div class="controls">
				<input type="text" class="input-xlarge" id="username" name="username" placeholder="Your screen name...">
				<p class="help-block">You will also login with your username. Do not forget it!</p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input type="password" class="input-xlarge" id="password" name="password" placeholder="Your Password...">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="email">Email</label>
			<div class="controls">
				<input type="text" class="input-xlarge" id="email" name="email" placeholder="Your Email Addres...">
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary" id="enter">Submit</button>
			<button class="btn">Cancel</button>
		</div>
	</fieldset>
</form>
</div>
