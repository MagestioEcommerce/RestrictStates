<?php

namespace Magestio\RestrictStates\Model\Config;

use Magento\Directory\Api\CountryInformationAcquirerInterface;

class RegionInformationProvider{
    /**
     * @var CountryInformationAcquirerInterface
     */

    protected $countryInformationAcquirer;

    protected $addressRepository;

    /**
     * RegionInformationProvider constructor.
     * @param CountryInformationAcquirerInterface $countryInformationAcquirer
     */
    public function __construct(
        CountryInformationAcquirerInterface $countryInformationAcquirer
    ) {
        $this->countryInformationAcquirer = $countryInformationAcquirer;
    }

    public function toOptionArray()
    {
        $countries = $this->countryInformationAcquirer->getCountriesInfo();
        $regions = [];
        foreach ($countries as $country) {
            // Get regions for this country:
            if ($availableRegions = $country->getAvailableRegions()) {
                foreach ($availableRegions as $region) {
                    $regions[] = [
                        'value' => $region->getName(),
                        'label' => $region->getName()
                    ];
                }
            }
        }
        return $regions;
    }
}