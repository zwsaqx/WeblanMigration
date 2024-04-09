<?php
/*
<fusedoc fuse="DefaultLayout.cfm">
  <responsibilities>
    I'm just a typical layout file to show how I can wrap my layout around the content in the variable, fusebox.layout.
  </responsibilities>	
  <io>
    <in>
      <string name="$Fusebox['layout']" />
    </in>
  </io>
</fusedoc>
*/
?>

<?php //print trim($Fusebox["layout"]); ?>


<table width="100%" border="0" cellpadding="2" cellspacing="0" class="NormalText">
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="99%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="MainHeader">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BodyTitle; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php print trim($Fusebox["layout"]); ?>
