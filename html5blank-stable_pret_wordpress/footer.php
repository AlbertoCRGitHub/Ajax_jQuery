			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright 
				<p class="copyright">
					&copy; <-?php echo date('Y'); ?> Copyright <-?php bloginfo('name'); ?>. <-?php _e('Powered by', 'html5blank'); ?>
					
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				 /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->

		
		<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
		<script >


		function obtenirTodos(data,status) {  
			//console.log( data);
			//[] array
			//{} objet
			let todos = $('#MesTodos');

			$(data).each(function(position, todo){
				let li = $('<li/>');
				li.text(todo.post_title) ;
				todos.append(li);
			});

		}

		function nouveauTodo(data, status) {
			console.log(data);
			console.log(status);
			
			 let todos = $('#MesTodos');   //no funciona
			if (status == "success") {
				let li = $('<li/>')
				li.text(data) ;
				todos.append(li);  
			}

		}


		$(document).ready(function(){

			$.ajax({
				'url' : '/?rest_route=/dswt/todo',
				'method' : 'GET',
				'success' : obtenirTodos  //para obtener los todos
			});

			$('#btnNT').click(function(){
				let todoText = $('#nouveauTodoHTML').val();
				$('#nouveauTodoHTML').val('');
				
				$.ajax({
					'url' : '/?rest_route=/dswt/todo',
					'method' : 'POST',
					'data' : { 'titre' : todoText},
					//'data' : { 'titre' : "aaa"},
					'success' : nouveauTodo
				});
			});

	});		
		


		//para TODO list 1
/* 			$(document).ready(function(){

				$('#buttonSubmit').click(function() {
					let newTache = $('#taches').val();  
					$('.liste ol').append('<li><input type="checkbox" />'+ newTache +'</li>'); 
					//$('.liste ol').append('<input type="checkbox" ><li>'+ newTache +'</li></input>');
					$("#taches").val("");  
				});
			
				$("#buttonEffacer").click(function() {    
					$('input[type=checkbox]').each(function () {
						if (this.checked)
							$(this).parents('li').remove('li');
					});
				});

				$("#buttonModifier").click(function() {
					$('input[type=checkbox]').each(function () {
						if (this.checked){
							var aaa = $(this).parents('li').text();
							$("#taches").val(aaa);
							$(this).parents('li').remove('li');
						};
					});
				});

				$("#buttonComplet").click(function() {
					$('input[type=checkbox]').each(function () {
						if (this.checked){
							$(this).parents('li').css("color", "red");
							alert("La tâche était terminée!");  
						};
					});
				});
			});   
  */


			
    	</script>
	</body>
</html>
