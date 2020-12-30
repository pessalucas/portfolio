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
									<div class="header-nav header-nav-links header-nav-light-text header-nav-dropdowns-dark">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-mobile-dark header-nav-main-effect-1 header-nav-main-sub-effect-1 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}" style="animation-delay: 100ms;">
											<nav class="closed collapse" style="">
												<ul class="nav nav-pills" id="mainNav">
															<li>
																<a class="dropdown-item" href="/lpessagno/cv/">
																	CV
																</a>
															</li>												
															<li>
																<a class="dropdown-item" href="#footer">
																	Contacto
																</a>
															</li>	
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav collapsed" data-toggle="collapse" data-target=".header-nav-main nav" aria-expanded="false"><i class="fa fa-bars"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

