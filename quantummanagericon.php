<?php
/**
 * @package    Quantummanagericon
 *
 * @author     Cymbal <cymbal@delo-design.ru>
 * @copyright  Copyright (C) 2019 "Delo Design". All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://delo-design.ru
 */

defined('_JEXEC') or die('Restricted access');
?>

<?php

/**
 * Class plgQuickiconQuantummanagericon
 */
class plgQuickiconQuantummanagericon  extends JPlugin
{

	public function onGetIcons($context)
	{

		if ($context !== $this->params->get('context', 'mod_quickicon') || !JFactory::getUser()->authorise('core.manage', 'com_quantummanager'))
		{
			return;
		}

		return array(
			array(
				'link' => 'index.php?option=com_quantummanager',
				'image' => 'pictures',
				'text' => 'Quantum Manager',
				'id' => 'plg_quickicon_quantummanageicon',
			)
		);
	}
}
