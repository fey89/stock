@extends('layouts.app')

@section('sidebar')
	@parent

@endsection

@section('content')
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="jumbotron">
        <h1>Upload de fichier</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

       

       <!-- {!! Form::open(['url' => 'upload', 'method' =>'POST', 'files' => true]) !!} -->
 <?php 
 			/*
        	echo Form::label('Attachedfile', 'Attach file :', ['class' => 'col-md-3 control-label']);
        	echo Form::file('image', ['class' => 'col-md-8']);
        	echo Form::submit('Upload');
        	*/
?>
        <!--{!! Form::close() !!}-->
        

        <!--
        <form method="POST" action="your view" class="form-horizontal custm-form" role="form" 
enctype="multipart/form-data">
        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="col-md-3 control-label">Attach file:</label>
                            <div class="col-md-8">
                                <input  type="file" id="resume" name="resume_link" placeholder="Resume" required class=""/>
                                <span class="required" id='spnFileError'></span>
                            </div>
                        </div>                
                    </div>
          <div class="modal-footer">
            <div class="col-xs-5">
              <p style="margin:0;text-align:left;color: green;display:none;" id="successMsg">Submitted Successfully!</p>
            </div>
            <button type="submit" id="btnUpload" class="custm-btn btn-primary">Submit</button>
            <button type="button" class="custm-btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
        -->


    <div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif
        
        {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
         <div class="col-md-3"></div>
          <div class="controls col-md-5">
          {!! Form::file('image') !!}
		  <p class="errors">{!!$errors->first('image')!!}</p>
			@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
			@endif
        </div>
        </div>
        <div id="success"> </div>
        <div class="col-md-4">
      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
      </div>
      {!! Form::close() !!}
      </div>
     </div>
	</div>























      </div>


	<div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

    

@endsection