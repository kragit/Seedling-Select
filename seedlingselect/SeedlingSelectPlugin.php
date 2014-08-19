<?php

namespace Craft;

class SeedlingSelectPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Seedling Select');
	}

	function getVersion()
	{
		return '0.1';
	}

	function getDeveloper()
	{
		return 'Adam Kragt';
	}

	function getDeveloperUrl()
	{
		return 'http://adamkragt.com';
	}

	public function hasCpSection()
	{
		return false;
	}

}