<?php
/**
 * @package    quantummanagericon
 * @author     Dmitry Tsymbal <cymbal@delo-design.ru>
 * @copyright  Copyright © 2019 Delo Design & NorrNext. All rights reserved.
 * @license    GNU General Public License version 3 or later; see license.txt
 * @link       https://www.norrnext.com
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;

/**
 * Class plgQuickiconQuantummanagericon
 */
class plgQuickiconQuantummanagericon extends JPlugin
{

	public function onGetIcons($context)
	{

		if (
			$context !== $this->params->get('context', 'mod_quickicon') ||
			!Factory::getUser()->authorise('core.manage', 'com_quantummanager')
		)
		{
			return;
		}

		JLoader::register('QuantummanagerHelper', JPATH_ROOT . '/administrator/components/com_quantummanager/helpers/quantummanager.php');

		$icon = 'folder-open';

		if (!QuantummanagerHelper::isJoomla4())
		{
			$icon = 'icon-folder-open';
		}

		return [
			[
				'link'  => 'index.php?option=com_quantummanager',
				'image' => $icon,
				'text'  => 'Quantum Manager',
				'id'    => 'plg_quickicon_quantummanageicon',
			]
		];
	}


}
