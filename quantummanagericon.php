<?php
/**
 * @package    quantummanagermedia
 * @author     Dmitry Tsymbal <cymbal@delo-design.ru>
 * @copyright  Copyright © 2019 Delo Design & NorrNext. All rights reserved.
 * @license    GNU General Public License version 3 or later; see license.txt
 * @link       https://www.norrnext.com
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
				'image' => 'folder-open',
				'text' => 'Quantum Manager',
				'id' => 'plg_quickicon_quantummanageicon',
			)
		);
	}
}
