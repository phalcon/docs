<?php

namespace Phalcon\Acl;

/**
 * Phalcon\Acl\Resource
 *
 * This class defines resource entity and its description
 *
 */
class Resource implements Phalcon\Acl\ResourceInterface
{
/**
 * Phalcon\Acl\Resource constructor
 *
 * @param string $name
 * @param string $description
 */
public function __construct($name, $description) {}

/**
 * Returns the resource name
 *
 * @return string
 */
public function getName() {}

/**
 * Returns resource description
 *
 * @return string
 */
public function getDescription() {}

/**
 * Magic method __toString
 *
 * @return string
 */
public function __toString() {}

}