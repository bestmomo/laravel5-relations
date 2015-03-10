	<script>

		$(function(){
			// Delete an author line
			$(".btn-danger").click(function() {
				// Delete if at least 2
				if($('.line').length > 1) $(this).parents('.row .line').remove();	
			});
			// Add an author line
			$("#add").click(function() {
				// Check for last id
				var max = id = 0;
				$('.line').each(function(){
					id = parseInt(($(this).attr('id')).slice(-1));
					if(id > max) max = id;
				});
				// First line
				var clone = $('#lineauthors' + max).clone(true);
				// Change id
				clone.attr('id', 'lineauthors' + ++max);
				// Change label for
				clone.find('label').attr('for', 'author' + max);
				// Change select id
				clone.find('select').attr('id', 'author' + max);
				// Add line
				$('#lineauthors' + id).after(clone);			
			});
			// Change editor/format
			$('input[type="radio"]').change(function () {
				$('.toggle').toggleClass('show hidden');
			});

			// Submission 
			$(document).on('submit', 'form', function(e) {  
				e.preventDefault();
				$.ajax({
					method: $(this).attr('method'),
					url: $(this).attr('action'),
					data: $(this).serialize(),
					dataType: "json"
				})
				.done(function(data) {
					window.location.href = '{!! url('books') !!}';
				})
				.fail(function(data) {
					$.each(data.responseJSON, function (key, value) {
						if(key == 'name') {
							$('.help-block').eq(0).text(value);
							$('.form-group').eq(0).addClass('has-error');							
						}						
					});
				});
			});
		})

	</script>

