<?php  
/*
**
*	Header con parametro de sub directorio asignable
**
*/
?>
			<header id="header" class="header-transparent header-effect-shrink header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}" style="height: 100px;">
				<div class="header-body border-top-0 box-shadow-none gradient-background-left" style="position: fixed; top: 0px; height: auto;">
					<div class="header-container container" style="height: 100px; min-height: 0px;">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}" style="animation-delay: 100ms;">
										<a href="/lpessagno/" class="goto-top"><img alt="Porto" width="102" height="45" data-sticky-width="82" data-sticky-height="36" data-sticky-top="0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header/logo.png" data-plugin-lazyload="" data-plugin-options="{'threshold': 500}" data-original="img/landing/logo.png" class="lazy-load-loaded img-fluid" style="animation-duration: 1s;"></a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<button class="ham"><i class="fas fa-bars"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			
			<nav class="navbar">
				<button class="showClose"><i class="fas fa-times"></i></button>
				<div> 
					<ul style='padding:0px'>
						<li><a class="" href="/lpessagno/">Home</a></li>
						<li><a class="" href="/lpessagno/cv">CV</a></li>
						<li><a class="hashoption1" href="/lpessagno/#works">Works</a></li>
						<li><a class="hashoption2" href="/lpessagno/#footer">Contact</a></li>
					</ul>
				</div>
			</nav>

			<script>

				var navbar = document.querySelector(".navbar")
				var ham = document.querySelector(".ham")
				var closenav = document.querySelector(".showClose")
				var hashoption1 = document.querySelector(".hashoption1")
				var hashoption2 = document.querySelector(".hashoption2")

				ham.addEventListener("click", toggleHamburger)
				hashoption1.addEventListener("click" , closeHamburger )
				hashoption2.addEventListener("click" , closeHamburger )
				closenav.addEventListener("click" , closeHamburger )

				// toggles hamburger menu in and out when clicking on the hamburger
				function toggleHamburger(){
					navbar.classList.toggle("showNav")
				}

				var menuLinks = document.querySelectorAll(".menuLink")
				menuLinks.forEach( 
					function(menuLink) { 
					menuLink.addEventListener("click", toggleHamburger) 
					}
				);  

				function closeHamburger(){
					navbar.classList.remove("showNav");
				}
			
			</script>