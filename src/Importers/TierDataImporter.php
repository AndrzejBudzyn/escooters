<?php

declare(strict_types=1);

namespace EScooters\Importers;

use DOMElement;
use EScooters\Exceptions\CityNotAssignedToAnyCountryException;
use EScooters\Utils\HardcodedCitiesToCountriesAssigner;
use Symfony\Component\DomCrawler\Crawler;

class TierDataImporter extends DataImporter
{
    protected Crawler $sections;

    public function getBackground(): string
    {
        return "#0E1A50";
    }

    public function extract(): static
    {
        $html = file_get_contents("https://www.tier.app/en/where-to-find-us");
        $crawler = new Crawler($html);
        $this->sections = $crawler->filter("div.mx-auto > section > li > div > div > div> p");
        //html/body/div[1]/div[1]/main/div[3]/     div[2]/section/li[1]/div[2]/div/div[1]
        return $this;
    }

    public function transform(): static
    {
        /** @var DOMElement $section */
        foreach ($this->sections as $section) {
            $country = null;
            $cityName = trim($section->nodeValue);
            if ($cityName) {

                    if ($cityName == $city=html_entity_decode("&nbsp;Lębork")) {
                        $cityName="Lębork";
                    }
                    if ($cityName == $city=html_entity_decode("&nbsp;Skawina")) {
                        $cityName="Skawina";
                    }
                    if ($cityName == $city=html_entity_decode("&nbsp;Żory")) {
                        $cityName="Żory";
                    }
                    try {
                        $hardcoded = HardcodedCitiesToCountriesAssigner::assign($cityName);
                        if ($hardcoded) {
                            $country = $this->countries->retrieve($hardcoded);
                        }
                    } catch (CityNotAssignedToAnyCountryException $exception) {
                        echo $exception->getMessage() . PHP_EOL;
                        continue;
                    }
                }
                $city = $this->cities->retrieve($cityName, $country);
                $this->provider->addCity($city);
            }

        return $this;
    }
}
