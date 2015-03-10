			   	@if(session('message_success')) 
				    <div class="form-group">
				    	<div class="alert alert-success">
				    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				    		{{ session('message_success') }}
				    	</div>
			    	</div>			    	
			    @endif
			    @if(session('message_danger')) 
				    <div class="form-group">
				    	<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				    		{{ session('message_danger') }}
				    	</div>
			    	</div>			    	
			    @endif
