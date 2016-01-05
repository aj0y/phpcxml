<?php

namespace cxml\entities;

/**
 * Class Entity
 * @package cxml\entities
 */
abstract class Entity
{
  /** @var string */
  protected $xml = '';

  /**
   * @return mixed
   */
  abstract public function toXML();



}
