<?php

namespace cxml;

use cxml\exceptions\CXMLException;
use cxml\exceptions\EmptyRequestException;
use cxml\requestheaders\Header;
use cxml\requests\Request;
use Exception;

/**
 * Class CXML
 *
 *
 */
class CXML
{
  /** @var string */
  private $xml = '';

  /** @var array associative array of objects representing xml hierarchy */
  private $xmlTree = array();

  /** @var Header */
  private $header;

  /** @var Request */
  private $request;

  /**
   * converts the internal object representation into a valid xml string
   * @return string
   */
  public function toXML()
  {
    return "";
  }

  private function generateHeader()
  {
  }

  public function addHeader(Header $header)
  {
  }

  public function addRequest(Request $Request)
  {
  }

  /**
   *
   * @throws CXMLException
   * @throws Exception
   */
  public function send()
  {
    if (empty($xmlTree)) {
      throw new EmptyRequestException();
    }
  }
}
