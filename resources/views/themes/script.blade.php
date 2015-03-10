	<script>

		$(function(){		

			// Number of categories et periods at the begining
			var cat_number = $('#cats .line').length;
			var per_number = $('#pers .line').length; 

			// Delete a line
			$(document).on('click', '.btn-danger', function(){ 
				$(this).parents('.row .line').remove();	
			});

			// Add a categorie line
			$("#add_cat").click(function() {
				var id = 'categorie' + cat_number;
				var html = '<div class="row line" id="line' + id + '">\n<div class="form-group">\n'
				+ '<label for="categorie' + cat_number + '" class="col-md-2">Catégorie :</label>\n'
				+ '<div class="col-md-8">\n'
				+ '{!! Form::select('categories[]', $categories, null, ['class' => 'form-control', 'id' => 'id_temp']) !!}\n'
				+ '</div>\n<div class="col-md-2">\n<button type="button" class="btn btn-danger pull-right">Delete</button>\n</div>\n</div>\n';
				++cat_number;
				$('#cats').append(html);	
				$('#id_temp').attr('id', id);	
			});

			// Add a period line
			$("#add_per").click(function() {
				var id = 'period' + per_number;
				var html = '<div class="row line" id="line' + id + '">\n<div class="form-group">\n'
				+ '<label for="period' + per_number + '" class="col-md-2">Période :</label>\n'
				+ '<div class="col-md-8">\n'
				+ '{!! Form::select('periods[]', $periods, null, ['class' => 'form-control', 'id' => 'id_temp']) !!}\n'
				+ '</div>\n<div class="col-md-2">\n<button type="button" class="btn btn-danger pull-right">Delete</button>\n</div>\n</div>\n';
				++per_number;
				$('#pers').append(html);	
				$('#id_temp').attr('id', id);	
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
					window.location.href = '{!! url('themes') !!}';
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

