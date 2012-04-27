<?php
/**
 * Secondary Sidebar Template
 *
 * Displays widgets for the Secondary dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package happystraps
 * @subpackage Template
 */

if ( is_active_sidebar( 'secondary' ) ) : ?>

	<?php do_atomic( 'before_sidebar_secondary' ); // prototype_before_sidebar_secondary ?>

  <div class="well sidebar-nav">
        <div class="widget">
          <h5>The Loop</h5>
          <ul class="nav nav-list">
            <li><a href="#">Explanation</a></li>
            <li><a href="#">Official Codex</a></li>
            <li><a href="#">Great Resources</a></li>
          </ul>
         </div>
         <div class="widget">
          <h5>Loop Examples</h5>
         <ul class="nav nav-list">
            <li><a href="#">Default Loop</a></li>
            <li><a href="#">WP_Query</a></li>
            <li><a href="#">query_posts</a></li>
            <li><a href="#">get_posts</a></li>
            <li><a href="#">Misc.</a></li>
          </ul>
         </div>
          <div class="widget">
          <h5>Find Happy Loops</h5>
          <ul class="nav nav-list">
            <li><a href="#">On Twitter</a></li>
            <li><a href="#">Subscribe to Everything</a></li>
            <li><a href="#">Subscribe to just Loops</a></li>
            <li><a href="#">Subscribe to just Blog</a></li>
          </ul>
<ul class="nav nav-tabs">
<li><a href="#home" data-toggle="tab">Left</a></li>
<li><a href="#profile" data-toggle="tab">Profile</a></li>
<li><a href="#messages" data-toggle="tab">Messages</a></li>
<li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="left">tab 1</div>
  <div class="tab-pane" id="profile">tab 2</div>
  <div class="tab-pane" id="messages">tab 3.</div>
  <div class="tab-pane" id="settings">tab 4</div>
</div>
         </div>
          <div class="widget">
          <h5>Get the Newsletter</h5>
          <p>Don't worry. I don't bug you much. I just email awesome.</p>
        </div>
        </div>



	<?php do_atomic( 'after_sidebar_secondary' ); // happystrap_after_sidebar_secondary ?>

<?php endif; ?>
