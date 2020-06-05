<?php

namespace FondOfSpryker\Glue\CompaniesCompanyUsersRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CompanyUserTransfer;

interface CompanyCompanyUserSearchValidatorPluginInterface
{
    /**
     * Specification:
     * - Checks if the CompanyUser is valid as Search response for the company
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @return bool
     */
    public function validate(
        CompanyUserTransfer $companyUserTransfer
    ): bool;
}
