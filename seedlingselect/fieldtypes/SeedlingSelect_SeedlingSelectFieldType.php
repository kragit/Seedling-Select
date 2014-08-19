<?php

namespace Craft;

class SeedlingSelect_SeedlingSelectFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Seedling Select');
	}

	public function getInputHtml($name, $value)
	{
		if (craft()->plugins->getPlugin('sproutforms')) {
			return craft()->templates->render('seedlingselect/select', array(
				'name' => $name,
				'value' => $value,
				'options' => $this->_getSections()
			));
		}else{
			return craft()->templates->render('seedlingselect/select', array(
				'name' => 'Not Installed',
				'value' => 'ni',
				'options' => 'notInstalled'
			));
		}
	}

	private function _getSections()
	{
		$sections = craft()->db->createCommand()
					->select('handle, name')
					->from('sproutforms_forms')
					->order('name')
					->queryAll();

		return $sections;
	}
}