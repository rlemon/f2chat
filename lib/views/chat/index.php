<?php if( !isset($this->userid) ): ?>
      <div class="hero-unit">
		<h2>Choose a name</h2>
        <form class="well" method="post" action="http://localhost/chat/signin/">
			<div class="control-group">
				<input type="text" class="span3" id="userid" name="username" placeholder="Username...">
				<span class="help-inline" id="status"></span>
				
				<p><button type="submit" class="btn" id="enter" disabled="disabled">Submit</button></p>
        	</div>
        </form>
      </div>
<?php endif; ?>
