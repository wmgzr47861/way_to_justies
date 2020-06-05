<?php if(count($errors)>0): ?>
     <div class="error" style="background-color:white;width:500px">
	 <?php foreach($errors as $error): ?>
	 <p style="color:#ff0040";><?php echo $error; ?></p>
	 <?php endforeach ?>
	 </div>
<?php endif ?>