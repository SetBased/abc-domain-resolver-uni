<?php
declare(strict_types=1);

namespace Plaisio\CompanyResolver;

/**
 * Company resolver for website with a single domain only.
 */
class UniCompanyResolver implements CompanyResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * The ID of the company.
   *
   * @var int
   */
  private $cmpId;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   *
   * @param int $cmpId The ID of the company.
   *
   * @api
   * @since 1.0.0
   */
  public function __construct(int $cmpId)
  {
    $this->cmpId = $cmpId;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the company.
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function getCmpId(): int
  {
    return $this->cmpId;
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
