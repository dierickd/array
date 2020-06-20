<?php


namespace App\Source;

class Activity
{

    /**
     * @return array|string[]
     */
    public function getClient(): array
    {
        return [
            'Bernard Gumble',
            'Bruce Devits',
            'Emmet Granitz',
            'Marge Simpson',
            'Michael nolann',
            'Mickael Ford',
            'John Bole',
            'Oliver Monroe',
            'Jane Kravitz',
            'Pauley Perrette',
            'Stacy Denat',
            'Tom Quatz',
            'Willy crout',
            'Robert Walsh',
            'Dylan Walker',
            'Travis Grump',
            'Stan Shit',
            'Donney Fork',
            'Berny Grant',
            'Polla Apdul',
            'Liam Stanford',
            'Dan Pakiston',
            'Robbi Donwey',
            'Marty McFly',
        ];
    }

    /**
     * @return array|array[]
     */
    public function getQuantity(): array
    {
        return [
            [
                'Beamish' => 109,
                'Caffreys\'s' => 135,
                'George Killian\'s' => 122,
                'Guinness' => 96,
                'Harp' => 95,
                'Irish Red Ale' => 162,
                'Murphy\'s' => 206,
            ],
            [
                'Beamish' => 165,
                'Caffreys\'s' => 200,
                'George Killian\'s' => 206,
                'Guinness' => 139,
                'Harp' => 165,
                'Irish Red Ale' => 269,
                'Murphy\'s' => 302,
            ],
            [
                'Beamish' => 96,
                'Caffreys\'s' => 164,
                'George Killian\'s' => 136,
                'Guinness' => 106,
                'Harp' => 142,
                'Irish Red Ale' => 199,
                'Murphy\'s' => 206,
            ],
            [
                'Beamish' => 90,
                'Caffreys\'s' => 200,
                'George Killian\'s' => 100,
                'Guinness' => 65,
                'Harp' => 103,
                'Irish Red Ale' => 162,
                'Murphy\'s' => 196,
            ],
        ];
    }

    /**
     * @return array
     */
    public function getSold():array
    {
        return [
            'Beamish' => [
                'price' => 5,
                'quantity' => 365,
            ],
            'Caffreys\'s' => [
                'price' => 6.5,
                'quantity' => 462,
            ],
            'George Killian\'s' => [
                'price' => 5.5,
                'quantity' => 556,
            ],
            'Guinness' => [
                'price' => 5.5,
                'quantity' => 921,
            ],
            'Harp' => [
                'price' => 6,
                'quantity' => 587,
            ],
            'Irish Red Ale' => [
                'price' => 7,
                'quantity' => 982,
            ],
            'Murphy\'s' => [
                'price' => 6,
                'quantity' => 905,
            ],
        ];
    }
}
