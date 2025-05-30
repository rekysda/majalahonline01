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
    $filename_base = "majalah_page-";
    $filename_suffix_tag = "_11zon"; // Bagian akhir nama file sebelum ekstensi
    $file_extension = ".jpg"; // Asumsi ekstensi file
    $total_pages = 50;

    for ($i = 1; $i <= $total_pages; $i++) {
        // Format nomor halaman utama dengan padding nol menjadi 4 digit (misal: 0001, 0050)
        $page_number_padded = str_pad($i, 4, '0', STR_PAD_LEFT);
        
        // Angka kedua dalam nama file, diasumsikan sama dengan nomor halaman $i
        $middle_number = $i; 
        
        $image_path = "{$image_folder}/{$filename_base}{$page_number_padded}_{$middle_number}{$filename_suffix_tag}{$file_extension}";
        
        echo '    <div style="background-image:url(\'' . htmlspecialchars($image_path) . '\')"></div>' . "\n";
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