<?php namespace Joomla\Plugin\QuickIcon\QuantumManagerIcon\Extension;
/**
 * @package    quantummanagericon
 * @author     Dmitry Tsymbal <cymbal@delo-design.ru>
 * @copyright  Copyright © 2019 Delo Design & NorrNext. All rights reserved.
 * @license    GNU General Public License version 3 or later; see license.txt
 * @link       https://www.norrnext.com
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Class QuantumManagerIcon
 */
class QuantumManagerIcon extends CMSPlugin
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

		return [
			[
				'link'  => 'index.php?option=com_quantummanager',
				'image' => 'icon-folder-open',
				'text'  => 'Quantum Manager',
				'id'    => 'plg_quickicon_quantummanageicon',
			]
		];
	}

}
