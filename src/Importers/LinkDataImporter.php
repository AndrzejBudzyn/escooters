<?php

declare(strict_types=1);

namespace EScooters\Importers;

use DOMElement;
use EScooters\Importers\DataSources\HtmlDataSource;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class LinkDataImporter extends DataImporter implements HtmlDataSource
{
    protected Crawler $sections;

    public function getBackground(): string
    {
        return "#DEF700";
    }

    public function extract(): static
    {
        $client = new Client();
        $html = $client->get("https://superpedestrian.com/locations")->getBody()->getContents();

        $crawler = new Crawler($html);
        $this->sections = $crawler->filter(".row sqs-row > p ");

        return $this;
    }

    public function transform(): static
    {
        /** @var DOMElement $section */
        foreach ($this->sections as $section) {
            foreach ($section->childNodes as $node) {
                $countryName = trim($node->nodeValue);
                $country = $this->countries->retrieve($countryName);

                foreach ($node->parentNode->parentNode->parentNode->childNodes as $i => $cityName) {
                    if ($i === 0 || !trim($cityName->nodeValue)) {
                        continue;
                    }

                    $name = $cityName->nodeValue;
                    if ($country->getId() === "us" && str_contains($name, ", ")) {
                        $name = explode(",", $name)[0];
                    }

                    $cities = [];
                    if (str_contains($name, "(") && str_contains($name, ")")) {
                        $names = explode("(", $name)[1];
                        $names = explode(")", $names)[0];
                        $names = explode(", ", $names);
                        foreach ($names as $name) {
                            $cities[] = str_replace("*", "", $name);
                        }
                    } else {
                        $cities[] = $name;
                    }

                    foreach ($cities as $name) {
                        $city = $this->cities->retrieve($name, $country);
                        $this->provider->addCity($city);
                    }
                }
            }
        }

        return $this;
    }
}
