<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="metrik-new.css" />
	</head>
	<header>
		<div class="header-container">
			<div class="header-section logo-wrap">
				<div class="image-stack-logo">
					<img src="logo_minimal.png" class="icon_logo base-img" />
					<img src="logo_minimal_red.png" class="icon_logo hover-img" />
				</div>
			</div>
			<div class="header-divider"></div>
			<div class="header-section menu-wrap">
				<a href="menu.php" class="menu-text">ME<br>NU</a>
			</div>
			<div class="header-divider"></div>
			<div class="header-section album-wrap">
				<a href="portfolio.php?filters=Album">
					<div class="image-stack">
						<img src="icon_image.png" class="icon_album base-img" />
						<img src="icon_image_red.png" class="icon_album hover-img" />
					</div>
				</a>
			</div>
			
			
		</div>
	</header>
	<body>
		<div class="page-wrapper">
		
			<div class="top-line"></div>

			<div class="section-block">
				<div class="row-content">
					<div class="left-col">
						<a href="portfolio.php?filters=Logistik - Verwaltung - Produktion" data-image="logistik.jpg">LOGISTIK - VERWALTUNG - PRODUKTION</a>
						<a href="portfolio.php?filters=Städtebau" data-image="staedtebau.jpg">STAEDTEBAU</a>
					</div>
					<div class="center-line"></div>
					<div class="right-col">
						<a href="portfolio.php?filters=Wettbewerbe" data-image="wettbewerbe.jpg">WETTBEWERBE</a>
					</div>
				</div>
			</div>

			<div class="section-block">
				<div class="category-label">INNENARCHITEKTUR</div>
				<div class="row-content">
					<div class="left-col">
						<a href="portfolio.php?filters=Innenarchitektur - Klassik" data-image="innen_klassik.jpg">KLASSIK</a>
						<a href="portfolio.php?filters=Innenarchitektur - Gastronomie" data-image="innen_gastronomie.jpg">GASTRONOMIE</a>
					</div>
					<div class="center-line"></div>
					<div class="right-col">
						<a href="portfolio.php?filters=Innenarchitektur - Modern" data-image="innen_modern.jpg">MODERN</a>
					</div>
				</div>
			</div>

			<div class="section-block">
				<div class="category-label">WOHNBAU</div>
				<div class="row-content">
					<div class="left-col">
						<a href="portfolio.php?filters=Wohnbau - Villadesign Klassik" data-image="wohnbau_villa.jpg">VILLADESIGN KLASSIK</a>
					</div>
					<div class="center-line"></div>
					<div class="right-col">
						<a href="portfolio.php?filters=Wohnbau - München/Shanghai/FFB" data-image="wohnbau_ms.jpg">MUENCHEN - SHANGHAI</a>
					</div>
				</div>
			</div>
			
			
			
		<div id="hover-preview">
			<img src="" alt="Preview" id="preview-img">
		</div>
		<script>
			const thumb = document.getElementById('custom-scrollbar-thumb');
			const container = document.getElementById('custom-scrollbar-container');

			window.addEventListener('scroll', () => {
				const scrollTop = window.scrollY;
				// Entire height minus the part we can actually see
				const docHeight = document.documentElement.scrollHeight - window.innerHeight;
				const scrollPercent = scrollTop / docHeight;

				const containerHeight = window.innerHeight; // Use viewport height
				const thumbHeight = thumb.offsetHeight;
				const maxMove = containerHeight - thumbHeight;

				const moveY = scrollPercent * maxMove;
				
				// Using requestAnimationFrame for high-performance scrolling
				window.requestAnimationFrame(() => {
					thumb.style.transform = `translateY(${moveY}px)`;
				});
			});
			
			const preview = document.getElementById('hover-preview');
			const previewImg = document.getElementById('preview-img');

			// 1. Move the preview box with the cursor
			window.addEventListener('mousemove', (e) => {
				// Offset by 20px so it's "under" the cursor and doesn't flicker
				preview.style.left = (e.clientX + 20) + 'px';
				preview.style.top = (e.clientY + 20) + 'px';
			});

			// 2. Handle hover on links
			// Add a data-image attribute to your <a> tags in HTML, e.g., data-image="house.jpg"
			document.querySelectorAll('.row-content a').forEach(link => {
				link.addEventListener('mouseenter', () => {
					const imageSrc = link.getAttribute('data-image');
					if (imageSrc) {
						previewImg.src = imageSrc;
						preview.style.opacity = '1';
					}
				});

				link.addEventListener('mouseleave', () => {
					preview.style.opacity = '0';
				});
			});
		</script>
	</body>
</html>
