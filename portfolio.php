<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="portfolio.css" />
	</head>
	<header>
   <div class="header-container">
        <div class="header-section logo-wrap interactable">
            <img src="logo_minimal.png" class="logo-img" />
        </div>
        <div class="header-divider"></div>
        <div class="header-section menu-wrap interactable">
            <a href="menu.php" class="menu-text">ME<br>NU</a>
        </div>
        <div class="header-divider"></div>
        <div class="header-section dice-wrap">
			<!-- Minimalist Linear Dice Icon -->
			<img src="icon_image.png" class="logo-img" />
		</div>
    </div>
</header>
	<body>
		<div id="custom-scrollbar-container">
		  <div id="custom-scrollbar-thumb"></div>
		</div>
		<div class="page-wrapper">
			<div class="filter-area">
			<div class="filter-cloud">
			</div>
			<button class="add-filter-btn">
				<span class="icon">+</span>
				<span class="hover-text">Apply Filter</span>
			</button>
		</div>
			<div class="portfolio-grid">
				<div class="portfolio-col col-small">
					<img src="img/log_1.jpg" class="portfolio-img" data-tags="Logistik - Verwaltung - Produktion">
					<img src="img/log_2.jpg" class="portfolio-img" data-tags="Logistik - Verwaltung - Produktion">
					<img src="img/wb_1.jpg" class="portfolio-img" data-tags="Wohnbau - München/Shanghai/FFB">
					<img src="img/wb_2.jpg" class="portfolio-img" data-tags="Wohnbau - München/Shanghai/FFB">
					<img src="img/ia_g_1.jpg" class="portfolio-img" data-tags="Innenarchitektur - Gastronomie">
					<img src="img/ia_g_2.jpg" class="portfolio-img" data-tags="Innenarchitektur - Gastronomie">
					<img src="img/ia_mod_1.jpg" class="portfolio-img" data-tags="Innenarchitektur - Modern">
					<img src="img/ia_mod_2.jpg" class="portfolio-img" data-tags="Innenarchitektur - Modern">
					<img src="img/ia_kla_1.jpg" class="portfolio-img" data-tags="Innenarchitektur - Klassik">
					<img src="img/ia_kla_2.jpg" class="portfolio-img" data-tags="Innenarchitektur - Klassik">
					<img src="img/staedtebau_1.jpg" class="portfolio-img" data-tags="Städtebau">
					<img src="img/staedtebau_2.jpg" class="portfolio-img" data-tags="Städtebau">
					<img src="img/wettbewerbe_1.jpg" class="portfolio-img" data-tags="Wettbewerbe">
					<img src="img/wettbewerbe_2.jpg" class="portfolio-img" data-tags="Wettbewerbe">
					<img src="img/wb_kla_1.jpg" class="portfolio-img" data-tags="Wohnbau - Villadesign Klassik">
					<img src="img/wb_kla_2.jpg" class="portfolio-img" data-tags="Wohnbau - Villadesign Klassik">
				</div>
				
				<div class="portfolio-col col-large">
					<img src="img/log_3.jpg" class="portfolio-img" data-tags="Logistik - Verwaltung - Produktion">
					<img src="img/log_4.jpg" class="portfolio-img" data-tags="Logistik - Verwaltung - Produktion">
					<img src="img/wb_3.jpg" class="portfolio-img" data-tags="Wohnbau - München/Shanghai/FFB">
					<img src="img/wb_4.jpg" class="portfolio-img" data-tags="Wohnbau - München/Shanghai/FFB">
					<img src="img/ia_g_3.jpg" class="portfolio-img" data-tags="Innenarchitektur - Gastronomie">
					<img src="img/ia_g_4.jpg" class="portfolio-img" data-tags="Innenarchitektur - Gastronomie">
					<img src="img/ia_mod_3.jpg" class="portfolio-img" data-tags="Innenarchitektur - Modern">
					<img src="img/ia_kla_3.jpg" class="portfolio-img" data-tags="Innenarchitektur - Klassik">
					<img src="img/staedtebau_3.jpg" class="portfolio-img" data-tags="Städtebau">
					<img src="img/wettbewerbe_3.jpg" class="portfolio-img" data-tags="Wettbewerbe">
					<img src="img/wb_kla_3.jpg" class="portfolio-img" data-tags="Wohnbau - Villadesign Klassik">
					<img src="img/wb_kla_4.jpg" class="portfolio-img" data-tags="Wohnbau - Villadesign Klassik">
				</div>
				
				<div class="portfolio-col col-small">
					<img src="img/log_5.jpg" class="portfolio-img" data-tags="Logistik - Verwaltung - Produktion">
					<img src="img/log_6.jpg" class="portfolio-img" data-tags="Logistik - Verwaltung - Produktion">
					<img src="img/wb_5.jpg" class="portfolio-img" data-tags="Wohnbau - München/Shanghai/FFB">
					<img src="img/wb_6.jpg" class="portfolio-img" data-tags="Wohnbau - München/Shanghai/FFB">
					<img src="img/ia_g_5.jpg" class="portfolio-img" data-tags="Innenarchitektur - Gastronomie">
					<img src="img/ia_mod_4.jpg" class="portfolio-img" data-tags="Innenarchitektur - Modern">
					<img src="img/ia_mod_5.jpg" class="portfolio-img" data-tags="Innenarchitektur - Modern">
					<img src="img/ia_kla_4.jpg" class="portfolio-img" data-tags="Innenarchitektur - Klassik">
					<img src="img/ia_kla_5.jpg" class="portfolio-img" data-tags="Innenarchitektur - Klassik">
					<img src="img/staedtebau_4.jpg" class="portfolio-img" data-tags="Städtebau">
					<img src="img/staedtebau_5.jpg" class="portfolio-img" data-tags="Städtebau">
					<img src="img/wettbewerbe_4.jpg" class="portfolio-img" data-tags="Wettbewerbe">
					<img src="img/wettbewerbe_5.jpg" class="portfolio-img" data-tags="Wettbewerbe">
					<img src="img/wb_kla_5.jpg" class="portfolio-img" data-tags="Wohnbau - Villadesign Klassik">
				</div>
			</div>
		</div>
		<div id="filter-modal" class="modal-overlay">
			<div class="modal-content">
				<div class="modal-header">
					<h1></h1>
					<button class="close-modal">CANCEL</button>
				</div>
				
				<div class="page-wrapper modal-graphic">
					<div class="top-line"></div>

					<div class="section-block">
						<div class="row-content">
							<div class="left-col">
								<a href="portfolio.php" data-image="logistik.jpg" class="filter-choice" filter="Logistik - Verwaltung - Produktion">LOGISTIK - VERWALTUNG - PRODUKTION</a>
								<a href="#" data-image="staedtebau.jpg" class="filter-choice" filter="Städtebau">STAEDTEBAU</a>
							</div>
							<div class="center-line"></div>
							<div class="right-col">
								<a href="#" data-image="wettbewerbe.jpg" class="filter-choice" filter="Wettbewerbe">WETTBEWERBE</a>
							</div>
						</div>
					</div>

					<div class="section-block">
						<div class="category-label">INNENARCHITEKTUR</div>
						<div class="row-content">
							<div class="left-col">
								<a href="#" data-image="innen_klassik.jpg" class="filter-choice" filter="Innenarchitektur - Klassik">KLASSIK</a>
								<a href="#" data-image="innen_gastronomie.jpg" class="filter-choice" filter="Innenarchitektur - Gastronomie">GASTRONOMIE</a>
							</div>
							<div class="center-line"></div>
							<div class="right-col">
								<a href="#" data-image="innen_modern.jpg" class="filter-choice" filter="Innenarchitektur - Modern">MODERN</a>
							</div>
						</div>
					</div>

					<div class="section-block">
						<div class="category-label">WOHNBAU</div>
						<div class="row-content">
							<div class="left-col">
								<a href="#" data-image="wohnbau_villa.jpg" class="filter-choice" filter="Wohnbau - Villadesign Klassik">VILLADESIGN KLASSIK</a>
							</div>
							<div class="center-line"></div>
							<div class="right-col">
								<a href="#" data-image="wohnbau_ms.jpg" class="filter-choice" filter="Wohnbau - München/Shanghai/FFB">MUENCHEN - SHANGHAI</a>
							</div>
						</div>
					</div>
				</div>
			</div>
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
			
			function getActiveFiltersFromUrl() {
			  const params = new URLSearchParams(window.location.search);
			  const filtersStr = params.get("filters");
			  return filtersStr ? filtersStr.split(",").map(s => s.trim()) : [];
			}

			function updateUrlWithFilters(activeFilters) {
			  const params = new URLSearchParams();
			  if (activeFilters.length > 0) {
				params.set("filters", activeFilters.join(","));
			  }
			  const newUrl = window.location.pathname + (params.toString() ? "?" + params.toString() : "");
			  window.history.pushState({}, "", newUrl);
			}

			function filterPortfolio() {
			  const activeFilters = getActiveFiltersFromUrl();
			  const images = document.getElementsByClassName("portfolio-img");

				for (const img of images) {
				  const tags = (img.dataset.tags || "").split(",").map(t => t.trim());
				  
				  // Wenn keine Filter aktiv → alles zeigen
				  if (activeFilters.length === 0) {
					img.style.display = "block";
					continue; // Use 'continue' instead of 'return' inside a loop
				  }
				  
				  // Bild anzeigen, wenn mindestens ein aktiver Filter im Bild vorhanden ist
				  const matches = activeFilters.some(f => tags.includes(f));
				  img.style.display = matches ? "block" : "none";
				}
			  
			  // Filter-Chips aktualisieren
			  renderFilterTags(activeFilters);
			}

			function renderFilterTags(activeFilters) {
			  const cloud = document.querySelector(".filter-cloud");
			  cloud.innerHTML = ""; // leeren

			  activeFilters.forEach(tag => {
				const span = document.createElement("span");
				span.className = "filter-tag";
				span.innerHTML = `
				  <span class="filter-text">${tag}</span>
				  <span class="remove-indicator">×</span>
				`;
				
				// Klick auf × → entfernen
				span.querySelector(".remove-indicator").addEventListener("click", () => {
				  let updated = activeFilters.filter(f => f !== tag);
				  updateUrlWithFilters(updated);
				  filterPortfolio(); // sofort filtern
				});

				// Optional: ganzer Tag klickbar zum Entfernen
				span.addEventListener("click", (e) => {
				  if (e.target.className !== "remove-indicator") {
					// hier könntest du z. B. toggle machen – aktuell nur remove
					let updated = activeFilters.filter(f => f !== tag);
					updateUrlWithFilters(updated);
					filterPortfolio();
				  }
				});

				cloud.appendChild(span);
			  });
			}
			
			document.addEventListener("DOMContentLoaded", () => {
				filterPortfolio();
				const modal = document.getElementById('filter-modal');
				const addBtn = document.querySelector(".add-filter-btn");
				const closeBtn = document.querySelector(".close-modal");

				// 1. Open Modal
				addBtn.addEventListener("click", () => {
					modal.style.display = "block";
					document.body.style.overflow = "hidden"; // Prevent background scroll
				});

				// 2. Close Modal
				const closeModal = () => {
					modal.style.display = "none";
					document.body.style.overflow = "auto";
				};
				closeBtn.addEventListener("click", closeModal);

				// 3. Handle Selecting a Filter
				document.querySelectorAll('.filter-choice').forEach(link => {
					link.addEventListener('click', (e) => {
						e.preventDefault();
						const selectedTag = link.getAttribute("filter");
						
						let currentFilters = getActiveFiltersFromUrl();
						
						// Add only if it doesn't exist
						if (!currentFilters.includes(selectedTag)) {
							currentFilters.push(selectedTag);
							updateUrlWithFilters(currentFilters);
							filterPortfolio();
						}
						
						closeModal();
					});
				});
				
				// ... (Your existing scroll and filter functions)
			});
		</script>
	</body>
</html>