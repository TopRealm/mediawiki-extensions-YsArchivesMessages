<?php

namespace MediaWiki\Extension\YsArchivesMessages;

use MediaWiki\Hook\BeforePageDisplayHook;
use OutputPage;
use Skin;

class Hooks implements
	BeforePageDisplayHook
{

	/**
	 * Handler for BeforePageDisplay hook.
	 *
	 * @param OutputPage $out
	 * @param Skin $skin Skin being used.
	 */
	public function onBeforePageDisplay($out, $skin): void
	{
		$out->addModules(['ext.ysarchivesmessages']);
	}
}