 <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
       
		<?php dynamic_sidebar('left_footer'); ?>
	   
	   </div>
      <div class="col c2">
	  
        <?php dynamic_sidebar('mid_footer'); ?>
		
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Somrat</a>. All Rights Reserved</p>
      <p class="rf">Get More <a target="_blank" href="http://www.free-css.com/">Free CSS Templates</a> By <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo  get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"> </script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
   </script>
   
 <?php wp_footer(); ?>  
</body>
</html>
