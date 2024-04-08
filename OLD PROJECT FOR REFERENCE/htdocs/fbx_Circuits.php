<?php
/****************************************************************
 Class   : fbx_Circuits.php
 Author  : Geoff Lee
 Created : 14 July 2004
 Purpose : Fusebox file for determining the paths for fuseaction circuits
 Modification History:
 Version     Date     Author  Description
   0.1    14/07/2004    GL    Started fusebox
   0.2    16/07/2004 GL,TL,JC Added other circuits to fusebox
****************************************************************/
/*
<fusedoc fuse="fbx_Circuits.php">
  <responsibilities>
    I define the Circuits structure used with Fusebox 3.0.  Use slashes ("/") to delimit the circuit mapping, i.e.: $Fusebox["circuits"]["red"] = "home/folder/redCircuit";
  </responsibilities>
  <io>
    <out>
      <string name="$Fusebox['circuits'][*]" comments="set a variable for each circuit name" />
    </out>
  </io>
</fusedoc>
*/

$Fusebox["circuits"]["home"] = "home";
$Fusebox["circuits"]["login"] = "login";
$Fusebox["circuits"]["register"] = "register";
$Fusebox["circuits"]["tutorial"] = "home/sit_Tutorial";
$Fusebox["circuits"]["modelling"] = "home/sit_Modeller";
$Fusebox["circuits"]["quiz"] = "home/sit_Quiz";
$Fusebox["circuits"]["reference"] = "home/sit_KeyTerms";
$Fusebox["circuits"]["scenario"] = "home/sit_Scenarios";

$Fusebox["circuits"]["admin"] = "home/adm_QuestionMgr";

$Fusebox["circuits"]["error"] = "home/sit_Error";

$Fusebox["circuits"]["review"] = "home/sit_Review";


?>