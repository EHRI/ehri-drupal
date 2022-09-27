
 <script type="text/javascript" src="/misc/form.js"></script> 
<script type="text/javascript" src="/misc/collapse.js"></script> 

<form>
  <div>
    <fieldset class="collapsible collapsed form-wrapper">
      <legend>
        <span class="fieldset-legend">Source:


</span>
      </legend>
      <div class="fieldset-wrapper"><?php
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="sourcefield <?php print $classes;?> clearfix">



  <<?php print $left_wrapper ?> id="grleft" class="group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>

  <<?php print $right_wrapper ?> id="grright" class="group-right<?php print $right_classes; ?>">
    <?php print $right; ?>
  </<?php print $right_wrapper ?>>


</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?></div>
    </fieldset>
  </div>
</form>