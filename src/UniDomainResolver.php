<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\DomainResolver;

//----------------------------------------------------------------------------------------------------------------------
/**
 * Domain resolver for website with a single domain (a.k.a. company abbreviation) only.
 */
class UniDomainResolver implements DomainResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * {@inheritdoc}
   */
  public function getDomain()
  {
    return 'SYS';
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
