<?php
/**
 * AngularZF1
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/bsd-license.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category    AngularZF1
 * @package     AngularZF1_Js
 * @subpackage  View
 * @copyright  Copyright (c) 2016 Rosina Bignall (http://www.rosina.me)
 * @license     http://opensource.org/licenses/bsd-license.php     New BSD License
 */

/**
 * Angular Global Class holding constants and static convienience methods.
 *
 * @package    AngularZF1_Js
 * @copyright  Copyright (c) 2016 Rosina Bignall (http://www.rosina.me)
 * @license    http://opensource.org/licenses/bsd-license.php     New BSD License
  */
class AngularZF1_Js
{

    /**
     * Which parts of the the Js library should be rendered on echo'ing
     * the Js library to the View. The constants act as bit-mask. This
     * way the Js autogenerated code can be refactored based on personal needs.
     *
     * @see AngularZF1_Js_Helper_Js::setRenderMode
     * @const Integer
     */
    const RENDER_LIBRARY         = 1;
    const RENDER_SOURCES         = 2;
    const RENDER_JAVASCRIPT      = 4;
    const RENDER_JS_ON_LOAD      = 8;
    const RENDER_ALL             = 255;

    /**
     * Js-enable a view instance
     *
     * @param  Zend_View_Interface $view
     * @return void
     */
    public static function enableView(Zend_View_Interface $view)
    {
        if (false === $view->getPluginLoader('helper')->getPaths('AngularZF1_Js_View_Helper')) {
            $view->addHelperPath('AngularZF1/Js/View/Helper', 'AngularZF1_Js_View_Helper');
        }
    }

}