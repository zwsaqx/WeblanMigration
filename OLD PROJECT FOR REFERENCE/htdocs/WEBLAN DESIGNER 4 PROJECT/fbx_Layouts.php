<?php
/****************************************************************
 Class   : fbx_Layouts.php
 Author  : Geoff Lee
 Created : 14 July 2004
 Purpose : Fusebox file for selecting layout file for a given circuit
 Modification History:
 Version     Date     Author  Description
   0.1    14/07/2004    GL    Started fusebox
   0.2    26/08/2004    GL    Inserted layout file selection code
****************************************************************/
/*
<fusedoc fuse="fbx_Layouts.php">
  <responsibilities>
    this file contains all the conditional logic for determining which layout file, if any, should be used for this circuit. It should result in the setting of the Fusebox public API variables $Fusebox['layoutDir'] and $Fusebox['layoutFile']
  </responsibilities>
  <io>
    <out>
      <string name="$Fusebox['layoutDir']" />
      <string name="$Fusebox['layoutFile']" />
    </out>
  </io>
</fusedoc>
*/

// Default layout
if (($Fusebox["fuseaction"]=="model1")||
    ($Fusebox["fuseaction"]=="model2")||
    ($Fusebox["fuseaction"]=="model3")||
    ($Fusebox["fuseaction"]=="model4")) {
  $Fusebox["layoutDir"] = "";
  $Fusebox["layoutFile"] = "lay_Blank.php";
} else {
  $Fusebox["layoutDir"] = "";
  $Fusebox["layoutFile"] = "lay_Default.php";
}
?>