<?php

include_once '/../../../util/class.util.php';
include_once '/../../../bao/class.videoinfobao.php';


$_VideoBAO = new VideoBAO();
$_DB = DBUtil::getInstance();
//$Video = new Video();
/* saving a new Term account*/



/* reading an existing Term information */
if(isset($_POST['search']))
{
	$Video = new Video();	
	$Video->setTag($_DB->secureInput($_POST['txtsearch']));
	$tag = $Video->getTag();
	//$Video->setTag($_POST['txtsearch']);
	
	header("Location: view.videoinfo.php?tag=".$tag); //reading the Term object from the result object
}

/*updating an existing Term information*/




//echo '<br> log:: exit blade.video.php';

?>