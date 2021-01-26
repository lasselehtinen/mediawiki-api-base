<?php

namespace Mediawiki\Api;

/**
 * @since 2.2
 * @license GPL-2.0-or-later
 * @author Addshore
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface ApiRequester {

	/**
	 * @since 2.2
	 *
	 * @param Request $request The GET request to send.
	 *
	 * @return mixed Normally an array
	 */
	public function getRequest( Request $request );

	/**
	 * @since 2.2
	 *
	 * @param Request $request The POST request to send.
	 *
	 * @return mixed Normally an array
	 */
	public function postRequest( Request $request );

}
