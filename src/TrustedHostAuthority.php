<?php
declare(strict_types=1);

namespace Plaisio\TrustedHostAuthority;

/**
 * Interface for determining whether a remote host (i.e. the next hop) is a trusted host.
 *
 * A concrete implementation must always decide the remote host is NOT a trusted host, unless the remote host is trusted
 * reverse proxy.
 */
interface TrustedHostAuthority
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns whether the remote host (i.e. the next hop) is a trusted host.
   *
   * @param string $ip The IP address of the remote host.
   *
   * @return bool
   */
  public function isTrustedHost(string $ip): bool;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
