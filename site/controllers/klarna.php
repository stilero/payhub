<?php
/**
 * Description of Klarna Controller
 *
 * @version  1.0
 * @author Daniel Eliasson Stilero Webdesign http://www.stilero.com
 * @copyright  (C) 2012-sep-28 Stilero Webdesign, Stilero AB
 * @category Components
 * @license	GPLv2
 * 
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * 
 * This file is part of klarna.
 * 
 * Klarna Controller is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Klarna Controller is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Klarna Controller.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class PayhubControllerKlarna extends JController{
    public function display($cachable = false, $urlparams = false){
        $view	= JRequest::getCmd('view', 'default');
        JRequest::setVar('view', $view);        
        $layout = JRequest::getCmd('layout', 'default');
        JRequest::setVar('layout', $layout);
        parent::display();

        return $this;
    }
    
    public function getAdress(){
        $view	= JRequest::getCmd('view', 'default');
        JRequest::setVar('view', $view);        
        $layout = JRequest::getCmd('layout', 'address');
        JRequest::setVar('layout', $layout);        
        parent::display();
    }
    
    public function processPayment(){
        $view	= JRequest::getCmd('view', 'default');
        JRequest::setVar('view', $view);        
        $layout = JRequest::getCmd('layout', 'payment');
        JRequest::setVar('layout', $layout); 
        $task = JRequest::getCmd('task', 'processPayment');
        JRequest::setVar('task', $task);
        $itemId = JRequest::getInt('itemId', null);
        JRequest::setVar('itemId', $itemId);
        
        //$personnr = JRequest::getVar('inputPersnr');
        //JRequest::setVar('inputPersnr', $personnr);
        parent::display();
    }
}
