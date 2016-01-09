<?php
	//index.php
  $page_name="index.php";
	
	$title="Index";

?>
<!doctype html>
<html lang="en-uk">
<?php
	//includind the head tag
	require 'head.php';
?>
<body>
<?php
	// including the header of the document
	require 'header.php';
	// including the blog layout 
?>
<div>
	<div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">
         <?php
              include 'display/functions/otr.func.php';
              otr('hello','hello world','index.php');

              include 'display/functions/amazing.func.php';
              amazing('I couldn’t take any pictures but this was an amazing thing…','hello world','index.php');
         ?>
          <div class="mdl-card shopping mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">Shopping</a></h3>
            </div>
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div>
          <nav class="demo-nav mdl-cell mdl-cell--12-col">
            <div class="section-spacer"></div>
            <a href="entry.html" class="demo-nav__button" title="show more">
              More
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_forward</i>
              </button>
            </a>
          </nav>
        </div>
    <?php
    	require 'footer.php';
    ?>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
</div>
</body>
<?php
	require 'script.php';
?>
</html>