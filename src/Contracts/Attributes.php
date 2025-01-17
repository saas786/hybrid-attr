<?php
/**
 * Attributes contract.
 *
 * Defines the contract that classes for building HTML attributes must adhere to.
 * Extends the `Renderable` and `Displayable` contracts for handling output.
 * Attributes are meant to be used for HTML elements.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2021, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Attr\Contracts;

use Hybrid\Contracts\Renderable;
use Hybrid\Contracts\Displayable;

/**
 * Attributes interface.
 *
 * @since  1.0.0
 * @access public
 */
interface Attributes extends Renderable, Displayable {

	/**
	 * Returns an array of HTML attributes in name/value pairs. Attributes
	 * are not expected to be escaped. Escaping should be handled on output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function all();

	/**
	 * Returns a single, unescaped attribute's value.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @return string
	 */
	public function get( $name );

	/**
	 * Adds custom data to the attribute object.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string|array  $name
	 * @param  mixed         $value
	 * @return $this
	 */
	public function with( $key, $value = null );
}
