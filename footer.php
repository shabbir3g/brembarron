<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brembarron
 */

?>



                           <div class="et_pb_section et_pb_section_9 mozart_footer et_pb_with_background et_section_regular">
                              <div class="et_pb_row et_pb_row_15 et_pb_gutters1">
                                 <div class="et_pb_column et_pb_column_1_2 et_pb_column_28    et_pb_css_mix_blend_mode_passthrough">
                                    <div class="et_pb_module et_pb_text et_pb_text_8 et_pb_bg_layout_dark  et_pb_text_align_left">
                                       <div class="et_pb_text_inner">
                                          <p>Sign Up for our Latest Finance Report</p>
                                       </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                 </div>
                                 <!-- .et_pb_column -->
                                 <div class="et_pb_column et_pb_column_1_2 et_pb_column_29    et_pb_css_mix_blend_mode_passthrough">
                                    <div class="et_pb_module et_pb_signup_0 et_hover_enabled et_pb_newsletter_layout_left_right et_pb_newsletter et_pb_subscribe clearfix et_pb_bg_layout_dark  et_pb_text_align_center et_pb_no_bg">
                                       <div class="et_pb_newsletter_description">
                                          <h2 class="et_pb_module_header">Finance Report </h2>
                                       </div>
                                       <div class="et_pb_newsletter_form">
                                          <form method="post">
                                             <div class="et_pb_newsletter_result et_pb_newsletter_error"></div>
                                             <div class="et_pb_newsletter_result et_pb_newsletter_success">
                                                <h2>Success! Thank you for Subscribing to our Trade Report</h2>
                                             </div>
                                             <div class="et_pb_newsletter_fields">
                                                <p class="et_pb_newsletter_field et_pb_contact_field_last">
                                                   <label class="et_pb_contact_form_label" for="et_pb_signup_email" style="display: none;">Email</label>
                                                   <input id="et_pb_signup_email" class="input" type="text" placeholder="Email" name="et_pb_signup_email">
                                                </p>
                                                <p class="et_pb_newsletter_button_wrap">
                                                   <a class="et_pb_newsletter_button et_pb_button" href="#" data-icon="">
                                                   <span class="et_subscribe_loader"></span>
                                                   <span class="et_pb_newsletter_button_text">Subscribe</span>
                                                   </a>
                                                </p>
                                             </div>
                                             <input type="hidden" value="icontact" name="et_pb_signup_provider" />
                                             <input type="hidden" value="25368" name="et_pb_signup_list_id" />
                                             <input type="hidden" value="Numerian Capital" name="et_pb_signup_account_name" />
                                             <input type="hidden" value="true" name="et_pb_signup_ip_address" />
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .et_pb_column -->
                              </div>
                              <!-- .et_pb_row -->
                              <div class="et_pb_row et_pb_row_17 et_pb_gutters3">
							  
							  
							  
							  <?php dynamic_sidebar('footer-widget'); ?>
							  
							  
								 
								 
                              </div>
                              <!-- .et_pb_row -->
                              <div class="et_pb_row et_pb_row_18 et_pb_gutters1">
                                 <div class="et_pb_column et_pb_column_4_4 et_pb_column_34    et_pb_css_mix_blend_mode_passthrough et-last-child">
                                    <div class="et_pb_module et_pb_divider_0 et_pb_space et_pb_divider_hidden">
                                       <div class="et_pb_divider_internal"></div>
                                    </div>
                                 </div>
                                 <!-- .et_pb_column -->
                              </div>
                              <!-- .et_pb_row -->
                              <div class="et_pb_row et_pb_row_19 et_pb_gutters1">
                                 <div class="et_pb_column et_pb_column_4_4 et_pb_column_35    et_pb_css_mix_blend_mode_passthrough et-last-child">
                                    <div class="et_pb_module et_pb_text et_pb_text_10 et_pb_bg_layout_light  et_pb_text_align_left">
                                       <div class="et_pb_text_inner">
									   
									   <?php 
							$copy_right_text = get_field('copy_right_text', 'options');
							
							if($copy_right_text):

							echo $copy_right_text;
								

						endif; ?>
									   
									   
									   
                                        
                                       </div>
                                    </div>
                                    <!-- .et_pb_text -->
                                 </div>
                                 <!-- .et_pb_column -->
                              </div>
                              <!-- .et_pb_row -->
                           </div>
                           <!-- .et_pb_section -->			
                        
            <!-- #main-content -->
            <footer id="main-footer">
               <div class="container">
                  <div id="footer-widgets" class="clearfix">
                     <div class="footer-widget"></div>
                     <!-- end .footer-widget -->
                     <div class="footer-widget">
                        <div id="custom_html-12" class="widget_text fwidget et_pb_widget widget_custom_html">
                           <h4 class="title">BCH</h4>
                           <div class="textwidget custom-html-widget">
                              <div class="btcwdgt-chart" bw-cash="true" bw-theme="light"></div>
                           </div>
                        </div>
                        <!-- end .fwidget -->
                     </div>
                     <!-- end .footer-widget -->
                     <div class="footer-widget"></div>
                     <!-- end .footer-widget -->
                     <div class="footer-widget"></div>
                     <!-- end .footer-widget -->    
                  </div>
                  <!-- #footer-widgets -->
               </div>
               <!-- .container -->
               <div id="footer-bottom">
                  <div class="container clearfix">
                     <ul class="et-social-icons">
                        <li class="et-social-icon et-social-facebook">
                           <a href="https://www.facebook.com/Numerian-Capital-470496010091487/" class="icon">
                           <span>Facebook</span>
                           </a>
                        </li>
                        <li class="et-social-icon et-social-twitter">
                           <a href="https://twitter.com/NumerianCapital" class="icon">
                           <span>Twitter</span>
                           </a>
                        </li>
                        <li class="et-social-icon et-social-google-plus">
                           <a href="#" class="icon">
                           <span>Google</span>
                           </a>
                        </li>
                        <li class="et-social-icon et-social-rss">
                           <a href="feed/index.html" class="icon">
                           <span>RSS</span>
                           </a>
                        </li>
                     </ul>
                     <p id="footer-info">Designed by <a href="http://www.elegantthemes.com/" title="Premium WordPress Themes">Elegant Themes</a> | Powered by <a href="http://www.wordpress.org/">WordPress</a></p>
                  </div>
                  <!-- .container -->
               </div>
            </footer>
            <!-- #main-footer -->
         </div>
         <!-- #et-main-area -->
      
      <!-- #page-container -->
      <div id="msg_notification"></div>
     
      <script type='text/javascript'>
         /* <![CDATA[ */
         var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
         var et_shortcodes_strings = {"previous":"Previous","next":"Next"};
         var et_pb_custom = {};
         var et_pb_box_shadow_elements = [];
         /* ]]> */
      </script>
      <?php wp_footer(); ?>
   </body>
</html>