<!DOCTYPE html>
<html lang="en">
	<head>
		@include('includes.head_html.head_html')
	</head>
	<body>
		@include('includes.header.header_book')
			
		
		<div id="yield_content">
			@yield('content')
		</div>
			
		
		<script>
			//Resetter input[type=text] untuk seluruh modal
			//$('.modal').on('hidden.bs.modal', function (e) {
			  //alert('modal closed');
			  //-- fungsi untuk me-reset sluruh input[type=text] pada modal --
			//  $(this).find('input[type=text]').val('');
			//})
			
			
		</script>
	</body>
</html>