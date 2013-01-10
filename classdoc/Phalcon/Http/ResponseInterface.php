<?php

namespace Phalcon\Http;

/**
 * Phalcon\Http\ResponseInterface initializer
 */
interface ResponseInterface {
/**
 * Sets the HTTP response code
 *
 * @param int $code
 * @param string $message
 * @return Phalcon\Http\ResponseInterface
 */
public function setStatusCode($code, $message);

/**
 * Returns headers set by the user
 *
 * @return Phalcon\Http\Response\Headers
 */
public function getHeaders();

/**
 * Overwrites a header in the response
 *
 * @param string $name
 * @param string $value
 * @return Phalcon\Http\ResponseInterface
 */
public function setHeader($name, $value);

/**
 * Send a raw header to the response
 *
 * @param string $header
 * @return Phalcon\Http\ResponseInterface
 */
public function setRawHeader($header);

/**
 * Resets all the stablished headers
 *
 * @return Phalcon\Http\ResponseInterface
 */
public function resetHeaders();

/**
 * Sets output expire time header
 *
 * @param DateTime $datetime
 * @return Phalcon\Http\ResponseInterface
 */
public function setExpires($datetime);

/**
 * Sends a Not-Modified response
 *
 * @return Phalcon\Http\ResponseInterface
 */
public function setNotModified();

/**
 * Sets the response content-type mime, optionally the charset
 *
 * @param string $contentType
 * @param string $charset
 * @return Phalcon\Http\ResponseInterface
 */
public function setContentType($contentType, $charset);

/**
 * Redirect by HTTP to another action or URL
 *
 * @param string $location
 * @param boolean $externalRedirect
 * @param int $statusCode
 * @return Phalcon\Http\ResponseInterface
 */
public function redirect($location, $externalRedirect, $statusCode);

/**
 * Sets HTTP response body
 *
 * @param string $content
 * @return Phalcon\Http\ResponseInterface
 */
public function setContent($content);

/**
 * Appends a string to the HTTP response body
 *
 * @param string $content
 * @return Phalcon\Http\ResponseInterface
 */
public function appendContent($content);

/**
 * Gets the HTTP response body
 *
 * @return string
 */
public function getContent();

/**
 * Sends headers to the client
 *
 * @return Phalcon\Http\ResponseInterface
 */
public function sendHeaders();

/**
 * Prints out HTTP response to the client
 *
 * @return Phalcon\Http\ResponseInterface
 */
public function send();

}