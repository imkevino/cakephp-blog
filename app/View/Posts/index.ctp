<?php echo $this->Html->css('style'); ?>
<div class="container">
	<img  class="img-responsive blue" width="800px"  src="<?php echo $this->webroot; ?>img/bluereview(3).png" / >
	<div class="tablecontainer">
		<div class="question col-md-10"><p>Tell us what you thought of your stay</p>
	</div>
	<div class="postlink col-md-1">
		<button type="button" class="btn btn-success"><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></button>
	</div>
	
	    <div class="wrapper">
	  <div class="popup">
	    <div class="popup__inner">
	      <h1>Hello</h1>
	      <p>
	        You can do many things within this element.
	        Maybe a long terms of service positioned near the trigger.
	        this clever box doesn't hide the rest of your website.
	        It's positioned near related content.
	        If we keep filling in content, we will eventually get a scroll bar.
	        My Sass can definitely become smarter. Please copy/improve/dismantle/criticise.
	        <br />
	        <br />
	        Ps. I now use the latest version of Velocity and my problems with stopping the animation from running display none have been fixed.
	        <br />
	        <br />
	        Pps. I split out the overflow on the "&__inner" so that the bottom scroll bar would not appear during animation.
	      </p>
	    </div>
	  </div>
	  <button class="trigger">
	    Click me
	  </button>
	</div>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://cdn.jsdelivr.net/jquery.velocity/0.3.0/jquery.velocity.min.js'></script>

	        <script src="js/index.js"></script>
	
	<table>
		<tr id ="tableheader">
			<th id="title">Title</th>
			<th id="action">Action</th>
			<th id="created">Created</th>
		</tr>
		<?php foreach ($posts as $post): ?>
		<tr>
			
			<td>
				<?php
				echo $this->Html->link(
				$post['Post']['title'],
				array('action' => 'view', $post['Post']['id'])
				);
				?>
				<br />
				
			</td>
			<td>
				<button type="button" class="btn btn-info"><?php
				echo $this->Html->link(
				'Edit', array('action' => 'edit', $post['Post']['id'])
				);
				?></button>
				<!-- Indicates a successful or positive action -->
				<button type="button" class="btn btn-danger">
				<?php
				echo $this->Form->postLink(
				'Delete',
				array('action' => 'delete', $post['Post']['id']),
				array('confirm' => 'Are you sure?')
				);
				?></button>
			</td>
			
			<td>
				<?php echo $post['Post']['created']; ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	
	
</div>
</div>