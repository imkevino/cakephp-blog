<div class="row-fluid form">
<h1>Add Post</h1>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('Image',array('type'=>'file'));
echo $this->Form->end('Save Post');
?>
		
	
</div>