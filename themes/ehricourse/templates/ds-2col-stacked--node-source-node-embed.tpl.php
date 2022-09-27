 <div class="source-in-chapter">
 <script type="text/javascript" src="/misc/form.js"></script> 
<script type="text/javascript" src="/misc/collapse.js"></script> 

<form>
  <div>
    <fieldset class="collapsible collapsed form-wrapper">
      <legend>
        <div class="fieldset-legend"> 
    <?php print $left; ?>


    <div class="source-plaatje"><?php print $right; ?></div>

</div>
      </legend>
      <div class="fieldset-wrapper"><?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>



 

  <div class="sourceinfo source-links"> <?php print $footer; ?></div>

 <div class="sourceinfo source-rechts"> <div class="source-plaatje-onder"><?php print $right; ?></div></div>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
</div>
    </fieldset>
  </div>
</form>
</div>
