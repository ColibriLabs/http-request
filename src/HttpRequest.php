<?php

namespace Colibri\HttpRequest;

use Colibri\URI\Parser;

/**
 * Class HttpRequest
 *
 * @package Colibri\HttpRequest
 */
abstract class HttpRequest
{

  const METHOD_GET = 'GET';

  const METHOD_POST = 'POST';

  const METHOD_PUT = 'PUT';

  const METHOD_DELETE = 'DELETE';

  const VERSION = '1.0.0';

  const USER_AGENT = 'ColibriHttpClient v%s Provider/%s';

  /**
   * @var Parser
   */
  protected $uri = null;

  /**
   * HttpRequest constructor.
   */
  public function __construct()
  {

  }

  /**
   * @param $uri
   * @return $this
   */
  public function uri($uri)
  {
    $this->setUri(new Parser($uri));

    return $this;
  }

  /**
   * @return Parser
   */
  public function getUri()
  {
    return $this->uri;
  }

  /**
   * @param Parser $uri
   * @return static
   */
  public function setUri(Parser $uri)
  {
    $this->uri = $uri;

    return $this;
  }

}