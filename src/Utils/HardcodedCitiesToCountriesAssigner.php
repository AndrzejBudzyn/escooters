<?php

declare(strict_types=1);

namespace EScooters\Utils;

class HardcodedCitiesToCountriesAssigner
{
    public static function assign(string $name): ?string
    {
        return match ($name) {
            "Aalst" => "Belgium",
            "Aprilia" => "Italy",
            "Bretigny-sur-Orge" => "France",
            "Canterbury" => "United Kingdom",
            "Charleroi" => "Belgium",
            "Erfurt" => "Germany",
            "Ferrara" => "Italy",
            "Firenze" => "Italy",
            "Liege" => "Belgium",
            "Neckarsulm" => "Germany",
            "Neu-Ulm" => "Germany",
            "Orange" => "France",
            "Pesaro" => "Italy",
            "Pforzheim" => "Germany",
            "Porto" => "Portugal",
            "Redditch" => "United Kingdom",
            "Regensburg" => "Germany",
            "Tarragona" => "Spain",
            "Ulm" => "Germany",
            "Viareggio" => "Italy",
            "Villemomble" => "France",
            "Viry-Chatillon" => "France",
            "Würzburg" => "Germany",
            "Zaragoza" => "Spain",
            "Givatayim" => "Israel",
            "Ramat Gan" => "Israel",
            "Chemnitz" => "Germany",
            "Heilbronn" => "Germany",
            "Kassel" => "Germany",
            "Palermo" => "Italy",
            "Rostock" => "Germany",
            "Troisdorf" => "Germany",
            "Varese" => "Italy",
            "Catania" => "Italy",
            "Monza" => "Italy",
            "Padua" => "Italy",
            "Antwerp"=> "Belgium",
            "Tel Aviv" => "Israel",
            "Verona" =>"Italy",
            "Cascais" => "Portugal",
            "Espinho" => "Portugal",
            "Faro" => "Portugal",
            "Évora" => "Portugal",
            "Maia" => "Portugal",
            "Rimini" => "Portugal",
            "Tomar" => "Portugal",
            "Vila Franca de Xira" => "Portugal",
            "Vila Nova de Gaia" => "Portugal",
            "Melbourne" => "Australia",
            "Gold Coast" => "Australia",
            "Christchurch"=>"New Zealand",
            "Hamilton"=>"New Zealand",
            "Tauranga"=>"New Zealand",
            "Hutt Valley"=>"New Zealand",
            "Palmerston North"=>"New Zealand",
            "Auckland"=>"New Zealand",
            "Sydney"=>"Australia",
            "Kelowna"=>"Canada",
            "North Vancouver"=>"Canada",
            "Richmond, BC"=>"Canada",
            "Edmonton"=>"Canada",
            "Busan"=>"South Korea",
            "Daejeon"=>"South Korea",
            "Incheon"=>"South Korea",
            "Seoul"=>"South Korea",
            "Aachen"=>"Germany",
            "Böblingen"=>"Germany",
            "Dachau"=>"Germany",
            "Dresden"=>"Germany",
            "Flensburg"=>"Germany",
            "Göttingen"=>"Germany",
            "Heildelberg"=>"Germany",
            "Hildesheim"=>"Germany",
            "Kiel"=>"Germany",
            "Mainz"=>"Germany",
            "Mulheim"=>"Germany",
            "Neuss"=>"Germany",
            "Recklinghausen"=>"Germany",
            "Schwäbisch Gmünd"=>"Germany",
            "Stuttgart"=>"Germany",
            "Wiesbaden"=>"Germany",
            "Wolfsburg"=>"Germany",
            "Augsburg"=>"Germany",
            "Bonn"=>"Germany",
            "Darmstadt"=>"Germany",
            "Duisburg"=>"Germany",
            "Frankfurt"=>"Germany",
            "Hamburg"=>"Germany",
            "Heilbronn"=>"Germany",
            "Ingolstadt"=>"Germany",
            "Mannheim / Ludwigshafen"=>"Germany",
            "Munich"=>"Germany",
            "Nuremberg"=>"Germany",
            "Paderborn"=>"Germany",
            "Reutlingen"=>"Germany",
            "Sindelfingen"=>"Germany",
            "Wilhelmshaven"=>"Germany",
            "Brunswick"=>"Germany",
            "Detmold"=>"Germany",
            "Düsseldorf"=>"Germany",
            "Frechen"=>"Germany",
            "Hamm"=>"Germany",
            "Herne"=>"Germany",
            "Kaiserslautern"=>"Germany",
            "Meersbusch"=>"Germany",
            "Munster"=>"Germany",
            "Oberhausen"=>"Germany",
            "Pforzheim"=>"Germany",
            "Rostock"=>"Germany",
            "Solingen"=>"Germany",
            "Berlin"=>"Germany",
            "Cologne"=>"Germany",
            "Dortmund"=>"Germany",
            "Essen"=>"Germany",
            "Gelsenkirchen"=>"Germany",
            "Hannover"=>"Germany",
            "Hilden"=>"Germany",
            "Kassel"=>"Germany",
            "Lubeck"=>"Germany",
            "Mönchengladbach"=>"Germany",
            "Neckarsulm"=>"Germany",
            "Oldenburg"=>"Germany",
            "Potsdam"=>"Germany",
            "Ruhrpott"=>"Germany",
            "St Augustin"=>"Germany",
            "Witten"=>"Germany",
            "Klagenfurt"=>"Austria",
            "Linz"=>"Austria",
            "Vienna"=>"Austria",
            "Wels"=>"Austria",
            "Opfikon"=>"Switzerland",
            "Uster"=>"Switzerland",
            "Zug"=>"Switzerland",
            "Basel"=>"Switzerland",
            "Winterthur"=>"Switzerland",
            "Zurich"=>"Switzerland",
            "Alba Iulia" => "Romania",
            "Arad" => "Romania",
            "Brasov" => "Romania",
            "Brno" => "Czechia",
            "Bucharest"=>"Romania",
            "Budapest"=>"Hungary",
            "Burgas"=>"Bulgaria",
            "Bydgoszcz"=>"Poland",
            "Ceske Budejovice" => "Czechia",
            "Chelm" => "Poland",
            "Cluj-Napoca" => "Romania",
            "Constanta" => "Romania",
            "Deva" => "Romania",
            "Gabrovo" => "Bulgaria",
            "Gliwice" => "Poland",
            "Iasi" => "Romania",
            "Katowice" => "Poland",
            "Kedzierzyn" => "Poland",
            "Kielce" => "Poland",
            "Krakow" => "Poland",
            "Legionowo" => "Poland",
            "Leszno" => "Poland",
            "Liberec" => "Czechia",
            "Lodz" => "Poland",
            "Minsk" => "Belarus",
            "Olomouc" => "Czechia",
            "Ostrava" => "Czechia",
            "Pardubice" => "Czechia",
            "Piaseczno" => "Poland",
            "Plovdiv" => "Bulgaria",
            "Poznan" => "Poland",
            "Prague" => "Czechia",
            "Pruszkow" => "Poland",
            "Râmnicu Vâlcea" => "Romania",
            "Rybnik" => "Poland",
            "Rzeszow" => "Poland",
            "Sibiu" => "Romania",
            "Siedlce" => "Poland",
            "Sofia" => "Bulgaria",
            "Stara Zagora" => "Bulgaria",
            "Szczecin" => "Poland",
            "Szeged" => "Hungary",
            "Szekesfehervar" => "Hungary",
            "Targoviste" => "Romania",
            "Târgu Mureș" => "Romania",
            "Torun" => "Poland",
            "Tricity" => "Poland",
            "Varna" => "Bulgaria",
            "Veszprem" => "Hungary",
            "Warsaw" => "Poland",
            "Wroclaw" => "Poland",
            "Brussels" => "Belgium",
            "Le Havre" => "France",
            "Marseille" => "France",
            "Paris" => "France",
            "Rotterdam" => "Netherlands",
            "Eilat" => "Israel",
            "Petach Tikva" => "Israel",
            "Holon" => "Israel",
            "Rio de Janeiro" => "Brazil",
            "Santiago" => "Chile",
            "Dubai" => "United Arab Emirates",
            "Doha" => "Qatar",
            "Helsinki" => "Finland",
            "Odense" => "Denmark",
            "Copenhagen" => "Denmark",
            "Stockholm" => "Sweden",
            "London" => "United Kingdom",
            "Greater Manchester" => "United Kingdom",
            "Milton Keynes" => "United Kingdom",
            "Castlebar" => "Ireland",
            "Cadiz" => "Spain",
            "Naples" => "Italy",
            "Rome" => "Italy",
            "Seville" => "Spain",
            "Madrid" => "Spain",
            "Lisbon" => "Portugal",
            "Milan" => "Italy",
            "Turin" => "Italy",
            "Baltimore" => "United States",
            "Bloomington" => "United States",
            "Cincinnati" => "United States",
            "Cleveland" => "United States",
            "Columbus" => "United States",
            "Detroit" => "United States",
            "Evansville" => "United States",
            "Grand Rapids" => "United States",
            "Hampton, VA" => "United States",
            "Indianapolis" => "United States",
            "Lansing" => "United States",
            "New York" => "United States",
            "Norfolk, VA" => "United States",
            "Omaha" => "United States",
            "Richmond, VA" => "United States",
            "Roanoke, VA" => "United States",
            "Rochester" => "United States",
            "St. Louis" => "United States",
            "Washington, DC" => "United States",
            "Atlanta" => "United States",
            "Austin" => "United States",
            "Bartlesville" => "United States",
            "Boulder" => "United States",
            "Charleston" => "United States",
            "Charlotte" => "United States",
            "Colorado Springs" => "United States",
            "Corpus Christi" => "United States",
            "Denver" => "United States",
            "Edinburg" => "United States",
            "Little Rock" => "United States",
            "Louisville" => "United States",
            "Lubbock" => "United States",
            "Nashville" => "United States",
            "Oklahoma City" => "United States",
            "Orlando" => "United States",
            "Raleigh/Durham" => "United States",
            "Statesboro" => "United States",
            "Tampa" => "United States",
            "Tulsa" => "United States",
            "Boise" => "United States",
            "Los Angeles" => "United States",
            "Oakland" => "United States",
            "Ogden" => "United States",
            "Provo" => "United States",
            "Sacramento" => "United States",
            "Salt Lake City" => "United States",
            "San Diego" => "United States",
            "San Francisco" => "United States",
            "San José" => "United States",
            "Santa Barbara" => "United States",
            "Seattle" => "United States",
            "Spokane Valley, WA" => "United States",
            "Portland, OR" => "United States",
            "Newport, WA" => "United States",
            "Airway Heights, WA" => "United States",
            default => null,
        };
    }
}
