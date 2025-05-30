<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
</head>
<body>

<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
  <?php
    $image_folder = "images"; // Nama folder tempat gambar disimpan
    $filename_prefix = "majalah_page-";
    $filename_suffix = ".jpg";
    $total_pages = 76;

    for ($i = 1; $i <= $total_pages; $i++) {
        // Format nomor halaman dengan padding nol menjadi 4 digit (misal: 0001, 0010, 0076)
        $page_number_padded = str_pad($i, 4, '0', STR_PAD_LEFT);
        $image_path = "{$image_folder}/{$filename_prefix}{$page_number_padded}{$filename_suffix}";
        
        echo '    <div style="background-image:url(' . $image_path . ')"></div>' . "\n";
    }
    ?>
		</div>
	</div>
</div>


<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['lib/turn.js'],
	nope: ['lib/turn.html4.min.js'],
	both: ['css/basic.css'],
	complete: loadApp
});

</script>

</body>
</html>