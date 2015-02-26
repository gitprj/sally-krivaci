					
					<?php if ( ! is_404() && ! is_singular( 'uxbarn_portfolio' ) && ! is_tax( 'uxbarn_portfolio_tax' ) ) : ?>
						
						</div>
						<!-- End: id="inner-content-container" -->
					
					<?php endif; ?>
					
				</div>
				<!-- End: id="content-container" -->
				
			
				<!-- Footer Section -->
				<div id="footer-root-container" class="columns-content-width">
					
				<?php
				
					$display_footer_widget_area = 'true';
					$footer_widget_area_columns = 4;
					
					if ( function_exists( 'ot_get_option' ) ) {
						
						$display_footer_widget_area = ot_get_option( 'uxbarn_to_setting_display_footer_widget_area' );
						$footer_widget_area_columns = (int)ot_get_option( 'uxbarn_to_setting_footer_widget_area_columns' );
						
					}
					
					$has_any_widgets = false;
					
					for ( $i = 1; $i <= $footer_widget_area_columns; $i++ ) {
						
						$sidebar_id = 'uxbarn-footer-widget-area-' . $i;
						
						// Check if the current sidebar has any widgets
		                if ( is_active_sidebar( $sidebar_id ) ) {
		                    $has_any_widgets = true;
		                }
						
		            }
		            
		        ?>
					
				<?php if ( $display_footer_widget_area == 'true' && $has_any_widgets ) : ?>
		                
	                <hr class="layout-divider double-line content-width" />
					
						<!-- Footer Widget Area -->
		                <div id="footer-content-container">
	                        <div id="footer-content" class="row">
	                            
	                            <?php
	                                
	                                $col_num = 12 / $footer_widget_area_columns;
	                                
	                                for ( $i = 1; $i <= $footer_widget_area_columns; $i++ ) {
	                                    
	                                    $sidebar_id = 'uxbarn-footer-widget-area-' . $i;
	                                    
	                                    ?>
	                                    
	                                    <div class="uxb-col large-<?php echo $col_num; ?> columns">
	                                        <?php dynamic_sidebar( $sidebar_id ); ?>
	                                    </div>
	                                    
	                                    <?php
	                                    
	                                }
	                            
	                            ?>
	                            
	                        </div>
		                </div>
		                <!-- End id="footer-content-container" -->
		                
		            <?php endif; ?>
				
					<!-- <hr class="layout-divider content-width" /> -->
					
				</div>
				<!-- End id="footer-root-container" -->
		
			</div>
			<!-- End id="root-container" -->

		</div>
		<!-- End id="root-border" -->
		
		<?php wp_footer(); ?>
		
	</body>
</html>
