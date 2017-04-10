<?php $__env->startSection('title', 'Page Title'); ?>


<?php $__env->startSection('sidebar'); ?>
	##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

 	<p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>This is my body content.</p>
	     	<ul class="nav nav-pills" role="tablist">
			  <li role="presentation"><a href="#">Home <span class="badge">42</span></a></li>
			  <li role="presentation"><a href="#">Profile</a></li>
			  <li role="presentation" class="active"><a href="#">Messages <span class="badge">3</span></a></li>
			</ul>




			<?php echo Form::open(['url' => 'foo', 'method' => 'POST']); ?>

			    		
	     	<?php

	     	echo '<h3>Example heading <span class="label label-default">New</span></h3>';
	     	echo Form::token();

	     	echo '<div class="form-group">
			    </div>
			    <div class="alert alert-success" role="alert">
				    <span class="glyphicon glyphicon-thumbs-up"  aria-hidden="true"></span> &nbsp; hello world !
				</div>

				<div class="jumbotron">
				  <h1>Hello, world!</h1>
				  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				  			<div class="row">
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="';?><?php echo e(URL::to('/')); ?><?php echo'/images/0.png" alt="...">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="';?><?php echo e(URL::to('/')); ?><?php echo'/images/0.png" alt="...">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="';?><?php echo e(URL::to('/')); ?><?php echo'/images/0.png" alt="...">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="';?><?php echo e(URL::to('/')); ?><?php echo'/images/0.png" alt="...">
							    </a>
							  </div>
							
							</div>

				  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div>

				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Recipient\'s username" aria-describedby="basic-addon2" name="email2">
				  <span class="input-group-addon" id="basic-addon2">@example.com</span>
				</div>
				<br/>
				<div class="input-group">
				  <span class="input-group-addon">$</span>
				  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="amount">
				  <span class="input-group-addon">.00</span>
				</div>
				<br/>
				<label for="basic-url">Your vanity URL</label>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
				  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
				</div>
				<br/>
				<label>Comment nous avez-vous connus ?</label>
			    <div>
					<textarea class="form-control" name="infos"></textarea>
			    </div>
			   	<br>


				';


	     	echo Form::label('email', 'E-Mail Address : ', ['class' => 'awesome']);
    		//echo Form::text('email', 'example@gmail.com'); 
    		echo Form::email('email', $value = 'example@gmail.com', $attributes = []);
    		echo '<br>';
    		echo Form::label('sexe', 'Sexe :');
    		echo Form::label('sexe', 'Femme');
    		echo Form::radio('sexe', 'f');
    		echo Form::label('sexe', 'Homme');
    		echo Form::radio('sexe', 'h');
    		echo '<br>';
    		echo '<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" id="name" name="name">
				</div>';
    		echo '<br>';
    		echo Form::submit('Click Me!', ['class' => 'btn btn-primary']);

    		echo '<button class="btn btn-danger" type="reset">Annuler</button>';

    		?>
			<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>