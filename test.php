<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 17-10-2016
 * Time: 06:27 AM
 */
require_once ('singleobj.php');
$s=new single();
$sen= $s->getObjName();
echo $sen;