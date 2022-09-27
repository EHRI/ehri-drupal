<table class="main">
  <tr>
    <td colspan="2">
	<div class="field field-title"><h2><?php print $fields["title"]->content; ?></h2></div>
    </td>
  </tr>
  <tr>
    <td class="inset">&nbsp;</td>
    <td>
	<div class="field field-photo"><?php print $fields["field_photo"]->content; ?></div>
 	<div class="field field-datum"><span class="date-display-single"><?php print $fields["field_datum"]->content; ?></span></div>
	<div class="field field-body"><?php print $fields["body"]->content; ?></div>
    </td>
  </tr>
  <tr>
    <td colspan="2"><span class="readmore"><?php print $fields["view_node"]->content; ?></span></td>
  </tr>
</table>
