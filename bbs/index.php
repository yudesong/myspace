<?php
require(dirname(__FILE__)."/global.php");

$template = template( $isMobileRequest ? "mobile_index.html" : "index.html" );

$template->assign( 'PHPSayConfig', $PHPSayConfig );

$template->assign( 'loginInfo', $loginInfo );

$DB = database();

if( !$isMobileRequest )
{
		$template->assign( 'headerNavi', "home" );

		if ( $loginInfo['uid'] >= 1 )
		{
			$template->assign( 'favoriteNumber', PHPSay::getUserFavoriteNumber($DB,$loginInfo['uid']) );
		}

		$template->assign( 'sponsorList', PHPSay::getSponsor($DB,"show") );
}

if ( $loginInfo['uid'] >= 1 )
{
	$template->assign( 'notificationNumber', PHPSay::getUnreadNotificationNumber($DB,$loginInfo['uid']) );

	$template->assign( 'memberBalance', PHPSay::getMemberBalance($DB,$loginInfo['uid']) );
}

$clubList = PHPSay::getClubList( $DB, isset($_GET['cid']) ? intval($_GET['cid']) : 0 );

$template->assign( 'clubList', $clubList );

$template->assign( 'topicList', PHPSay::getTopic($DB,"club",$clubList,$currentPage,30) );

$DB->close();

$template->output();

?>