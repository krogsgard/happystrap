<?php
/**
 * Header Sidebar Template
 *
 * Displays widgets for the Header dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package happystraps
 * @subpackage Template
 */

?>

	<?php do_atomic( 'before_sidebar_header' ); // prototype_before_sidebar_secondary ?>
	
<div class="row">
  <div class="span12 well">
  	<div class="row">
        <div class="widget span3">
          <h5>The Loop</h5>
          <ul class="">
            <li><a href="#">Explanation</a></li>
            <li><a href="#">Official Codex</a></li>
            <li><a href="#">Great Resources</a></li>
          </ul>
         </div>
          <div class="widget span3">
          <h5>Loop Examples</h5>
         <ul class="">
            <li><a href="#">Default Loop</a></li>
            <li><a href="#">WP_Query</a></li>
            <li><a href="#">query_posts</a></li>
            <li><a href="#">get_posts</a></li>
            <li><a href="#">Misc.</a></li>
          </ul>
         </div>
         <div class="widget span3">
          <h5>Find Happy Loops</h5>
          <ul class="">
            <li><a href="#">On Twitter</a></li>
            <li><a href="#">Subscribe to Everything</a></li>
            <li><a href="#">Subscribe to just Loops</a></li>
            <li><a href="#">Subscribe to just Blog</a></li>
          </ul>
         </div>
          <div class="widget span3">
          <ul class="">
          <span><script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://adsdash.gooroohq.com/dashboard/www/delivery/ajs.php':'http://adsdash.gooroohq.com/dashboard/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=9");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://adsdash.gooroohq.com/dashboard/www/delivery/ck.php?n=ad407ea9&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://adsdash.gooroohq.com/dashboard/www/delivery/avw.php?zoneid=9&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=ad407ea9' border='0' alt='' /></a></noscript></span>
          </ul>
        </div>
        </div>
      </div>  
</div>


	<?php do_atomic( 'after_sidebar_header' ); // prototype_after_sidebar_secondary ?>

