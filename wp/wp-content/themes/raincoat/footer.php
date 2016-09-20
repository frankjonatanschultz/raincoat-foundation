      </div>
      	
      <footer class="blue-bg">
        <div class="columns">
          <div class="column col-left">
            <div class="vcard">
              <?php the_field('footer_left', 'option'); ?>
            </div>
          </div>
          <div class="column col-right">
            <div class="vcard">
              <?php the_field('footer_right', 'option'); ?>
            </div>
          </div>
        </div>
      </footer>
    
    </div>
    
    <?php wp_footer(); ?>
  
  </body>
</html>