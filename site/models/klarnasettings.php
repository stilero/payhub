<?php
/**
 * Description of PayHub
 *
 * @version  1.0
 * @author Daniel Eliasson Stilero Webdesign http://www.stilero.com
 * @copyright  (C) 2012-sep-30 Stilero Webdesign, Stilero AB
 * @category Components
 * @license	GPLv2
 * 
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * 
 * This file is part of klarnas.
 * 
 * PayHub is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * PayHub is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with PayHub.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.model');
 
class PayHubModelKlarnasettings extends JModel{
    protected $_settings;
    private $_table;
    static private $_tableName = '#__payhub_klarna_settings';

    public function __construct() {
        parent::__construct();
        $db =& JFactory::getDbo();
        $this->_table = $db->nameQuote(self::$_tableName);
    }
    public function getSettings(){
        $db =& JFactory::getDbo();
        $query = "SELECT * FROM ".$this->_table;
        $db->setQuery($query);
        $this->_settings = $db->loadObjectList();
        return $this->_settings;
    }
}