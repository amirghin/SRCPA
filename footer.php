		</div>
	</body>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/parsley.min.js" type="text/javascript"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$( "#datepicker" ).datepicker();
			$( "#datepicker" ).datepicker( "option", "dateFormat", 'yy-mm-dd' );
			$("#mostrar").click(function(){
				$("#entrada_expediente").show();
			})

		})
	</script>
</html>