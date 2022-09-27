<?php 
  global $base_url;
  global $mybase;
  $mybase = url(path_to_theme(),array('absolute'=>true));
  $mybase = trim($mybase,'/');
?>
<div class="container">
  <table class="wrap">
    <tr>
      <td id="top1" class="topborder">&nbsp;</td>
    </tr>
    <tr>
      <td id="top2"><img src="<?php echo $mybase; ?>/images/newsletter/logo.gif" alt="" /></td>
    </tr>
    <tr>
      <td id="top3"><img src="<?php echo $mybase; ?>/images/newsletter/visual.jpg" alt="" /></td>
    </tr>
    <tr>
      <td id="top4" class="td_padding"><b><?php echo $title; ?></b></td>
    </tr>
    <?php print render($page['content']); ?>
    <tr>  
      <td>
        <table class="footer">
          <tr>
            <th colspan="2" scope="col">EHRI partners</th>
          </tr>
          <tr>
            <td class="institution_list">
              <ul>
		<li>KNAW – NIOD Institute for War, Holocaust and Genocide Studies (NL)</li>
		<li>KNAW – DANS Data Archiving and Networked Services (NL)</li>
		<li>Belgian State Archives/CegeSoma (BE)</li>
		<li>Masaryk Institute and Archives of the Czech Academy of Sciences (CZ)</li>
		<li>Yad Vashem (IL)</li>
		<li>Leibniz Institute for Contemporary History (DE)</li>
		<li>King's College London (UK)</li>
		<li>Holocaust Documentation Center (SK)</li>
		<li>Kazerne Dossin (BE)</li>
		<li>The Wiener Holocaust Library (UK)</li>
		<li>’Elie Wiesel’ National Institute for the Study of the Holocaust in Romania (RO)</li>
		<li>Vienna Wiesenthal Institute for Holocaust Studies (AT)</li>
	      </ul>
            </td>
            <td class="institution_list">
              <ul>
		<li>Shoah Memorial (FR)</li>
		<li>Jewish Historical Institute (PL)</li>
		<li>US Holocaust Memorial Museum (US)</li>
		<li>National Research Council (IT)</li>
		<li>Arolsen Archives (DE)</li>
		<li>Federal Archives (DE)</li>
		<li>Inria – team ALMAnaCH (FR)</li>
		<li>Polish Center for Holocaust Research (PL)</li>
		<li>Contemporary Jewish Documentation Center Foundation (IT)</li>
		<li>Aristotle University of Thessaloniki (GR)</li>
		<li>Vilna Gaon Museum of Jewish History (LT)</li>
		<li>Hungarian Jewish Museum and Archives (HU)</li>
		<li>Center for Urban History of East Central Europe (UA)</li>
		<li>Jewish Museum in Prague (CZ)</li>
		<li>Jewish Museum of Greece (GR)</li>
	     </ul>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="border">
              <p>EHRI, European Holocaust Research Infrastructure, NIOD. Institute for War, Holocaust and Genocide Studies, Herengracht 380, NL-1016 CJ Amsterdam, The 
Netherlands, +31(0)20-5233800 &copy; 2011 EHRI</p>
            </td>
          </tr>
	  <tr>
	    <td colspan="2">&nbsp;</td>
	  </tr>
<tr>
<td colspan="2" id="video">
Watch a <a class="active" target="_blank" href="https://youtu.be/IUFqR7l5qW8">video introduction to the EHRI Portal</a> 
</td>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
</tr>
	  <tr>
	    <td id="social">
<a href="https://twitter.com/EHRIproject">
<img border="0" alt="EHRI on Twitter" src="<?php echo $mybase; ?>/images/newsletter/follow-us-on-twitter.jpg" width="100" height="50">
</a>
	    </td>
 <td id="social">
<a href="https://facebook.com/EHRIproject">
<img border="0" alt="EHRI on Facebook" src="<?php echo $mybase; ?>/images/newsletter/find-us-on-facebook.png" width="100" heigth="50">
</a>
            </td>
	  </tr>
        </table>
      </td>
    </tr>
  </table>
</div>

