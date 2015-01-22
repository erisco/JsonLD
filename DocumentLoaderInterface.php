<?php

namespace ML\JsonLD;

use ML\JsonLD\Exception\JsonLdException;

interface DocumentLoaderInterface
{
  /**
   * Loads a remote document or context
   *
   * @param string $url The URL of the document to load.
   *
   * @return RemoteDocument The remote document.
   *
   * @throws JsonLdException If loading the document failed.
   */
  public function loadDocument($url);
}