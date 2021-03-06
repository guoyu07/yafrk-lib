<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Yafrk\Mail\Protocol\Exception;

use Yafrk\Mail\Exception;

/**
 * Exception for Zend_Mail component.
 */
class InvalidArgumentException extends Exception\InvalidArgumentException implements
    ExceptionInterface
{}
