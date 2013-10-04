<link rel="shortcut icon" type="image/x-icon" href="../resources/images/favicon.ico"/>
<link href="../resources/css/responsive-layout-framework.css" type="text/css" rel="stylesheet" />
<link href="../resources/css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../resources/js/jquery_min[version17].js"></script>
<script type="text/javascript" src="../resources/js/jqueryCycle-slideshow.js"></script>

<script type="text/javascript">
$(document).ready(function(){

		$('#slides').cycle({
				fx: 'fade',
				speed: 500,
				timeout: 4000,
				next:'.next',
				prev:'.prev',
				pager:'#pager'
	});
	});
</script>