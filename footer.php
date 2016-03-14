<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BaoRu
 */

?>
	<footer class="contact" id="contact">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	          <div class="our_contact">
	            <span>Контакты:</span>
	            <div class="mobile_number">
	              +380689844688
	            </div>
	            <div class="our_email">
	              hello@baodigital.com
	            </div>
	            <div class="skype">
	              baodigital.com
	            </div>
	            <div class="social">
	              <a href="https://www.facebook.com/groups/980153008714941/"><i class="soc fb"></i></a>
	              <a href="https://twitter.com/bao_digital"><i class="soc tw"></i></a>
	              <a href="https://vk.com/baodigital"><i class="soc vk"></i></a>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	          <img src="<?php echo get_template_directory_uri(); ?>/img/footer.contact.png" alt="footer.contact" class="contact-img img-responsive center-block">
	        </div>
	      </div>
	    </div>
	    <!-- Yandex.Metrika counter -->
	    <script type="text/javascript">
	        (function (d, w, c) {
	            (w[c] = w[c] || []).push(function() {
	                try {
	                    w.yaCounter33701544 = new Ya.Metrika({
	                        id:33701544,
	                        clickmap:true,
	                        trackLinks:true,
	                        accurateTrackBounce:true,
	                        webvisor:true
	                    });
	                } catch(e) { }
	            });

	            var n = d.getElementsByTagName("script")[0],
	                s = d.createElement("script"),
	                f = function () { n.parentNode.insertBefore(s, n); };
	            s.type = "text/javascript";
	            s.async = true;
	            s.src = "https://mc.yandex.ru/metrika/watch.js";

	            if (w.opera == "[object Opera]") {
	                d.addEventListener("DOMContentLoaded", f, false);
	            } else { f(); }
	        })(document, window, "yandex_metrika_callbacks");
	    </script>
	    <noscript><div><img src="https://mc.yandex.ru/watch/33701544" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	    <!-- /Yandex.Metrika counter -->
	</footer>
	<script> <!-- google analitics -->
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-70373631-1', 'auto');
	  ga('send', 'pageview');

	</script> 

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
