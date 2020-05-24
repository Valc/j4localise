<?php
/**
 * @package     Com_Localise
 * @subpackage  com_localise.script
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerScript;

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @package  Localise
 * @since    4.0
 */
class Com_LocaliseInstallerScript extends InstallerScript
{
	/**
	 * The extension name. This should be set in the installer script.
	 *
	 * @var    string
	 * @since  4.0.32
	 */
	protected $extension = 'com_localise';
	/**
	 * Minimum PHP version required to install the extension
	 *
	 * @var    string
	 * @since  4.0.32
	 */
	protected $minimumPhp = '7.2.5';
	/**
	 * Minimum Joomla! version required to install the extension
	 *
	 * @var    string
	 * @since  4.0.32
	 */
	protected $minimumJoomla = '4.0';
}
