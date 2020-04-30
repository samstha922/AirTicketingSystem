<?php

use Illuminate\Database\Seeder;

class TimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timezones')->insert([
            [
	            'id' =>1,
	            'offset' => 'UTC-12:00',
	            'location' => 'Baker Island, Howland Island'
            ],
            [
	            'id' =>2,
	            'offset' => 'UTC-11:00',
	            'location' => 'American Samoa, Niue'
            ],
            [
	            'id' =>3,
	            'offset' => 'UTC-10:00',
	            'location' => 'French Polynesia (most), United States (Hawaii)'
            ],
            [
	            'id' =>4,
	            'offset' => 'UTC-09:30',
	            'location' => 'Marquesas Islands'
            ],
            [
	            'id' =>5,
	            'offset' => 'UTC-09:00',
	            'location' => 'Gambier Islands'
            ],
            [
	            'id' =>6,
	            'offset' => 'UTC-08:00',
	            'location' => 'Pitcairn Islands'
            ],
            [
	            'id' =>7,
	            'offset' => 'UTC-07:00',
	            'location' => 'Canada (northeastern British Columbia), Mexico (Sonora), United States (most of Arizona)'
            ],
            [
	            'id' =>8,
	            'offset' => 'UTC-06:00',
	            'location' => 'Belize, Canada (most of Saskatchewan), Costa Rica, Ecuador (Galápagos Islands), El Salvador, Guatemala, Honduras, Nicaragua'
            ],
            [
	            'id' =>9,
	            'offset' => 'UTC-05:00',
	            'location' => 'Brazil (Acre), Colombia, Ecuador (continental), Haiti, Jamaica, Panama, Peru'
            ],
            [
	            'id' =>10,
	            'offset' => 'UTC-04:00',
	            'location' => 'Barbados, Bolivia, Brazil (most of Amazonas, Rondônia, Roraima), Dominican Republic, Puerto Rico, Trinidad and Tobago, Venezuela'
            ],
            [
	            'id' =>11,
	            'offset' => 'UTC-03:30',
	            'location' => 'Labrador (southeastern), Newfoundland'
            ],
            [
	            'id' =>12,
	            'offset' => 'UTC-03:00',
	            'location' => 'Argentina, Brazil (Bahia, Ceará, Maranhão, Pará, Pernambuco), Falkland Islands, Uruguay'
            ],
            [
	            'id' =>13,
	            'offset' => 'UTC-02:00',
	            'location' => 'Brazil (Fernando de Noronha), South Georgia and the South Sandwich Islands'
            ],
            [
	            'id' =>14,
	            'offset' => 'UTC-01:00',
	            'location' => 'Cape Verde'
            ],
            [
	            'id' =>15,
	            'offset' => 'UTC±00:00',
	            'location' => 'Ivory Coast, Ghana, Iceland, Saint Helena, Senegal, Mali'
            ],
            [
	            'id' =>16,
	            'offset' => 'UTC+01:00',
	            'location' => 'Algeria, Angola, Benin, Cameroon, Democratic Republic of the Congo (west), Gabon, Niger, Nigeria, Tunisia'
            ],
            [
	            'id' =>17,
	            'offset' => 'UTC+02:00',
	            'location' => 'Burundi, Egypt, Jordan, Malawi, Mozambique, Russia (Kaliningrad), Rwanda, South Africa, Swaziland, Zambia, Zimbabwe'
            ],
            [
	            'id' =>18,
	            'offset' => 'UTC+03:00',
	            'location' => 'Belarus, Ethiopia, Iraq, Kenya, Kuwait, Russia (most), Saudi Arabia, Somalia, Sudan, Tanzania, Turkey, Uganda, Yemen'
            ],
            [
	            'id' =>19,
	            'offset' => 'UTC+03:30',
	            'location' => 'Iran'
            ],
            [
	            'id' =>20,
	            'offset' => 'UTC+04:00',
	            'location' => 'Armenia, Azerbaijan, Georgia, Mauritius, Oman, Seychelles, United Arab Emirates'
            ],
            [
	            'id' =>21,
	            'offset' => 'UTC+04:30',
	            'location' => 'Afghanistan'
            ],
            [
	            'id' =>22,
	            'offset' => 'UTC+05:00',
	            'location' => 'Kazakhstan (west), Maldives, Pakistan, Russia (Sverdlovsk, Chelyabinsk), Uzbekistan'
            ],
            [
	            'id' =>23,
	            'offset' => 'UTC+05:30',
	            'location' => 'India, Sri Lanka'
            ],
            [
	            'id' =>24,
	            'offset' => 'UTC+05:45',
	            'location' => 'Nepal'
            ],
            [
	            'id' =>25,
	            'offset' => 'UTC+06:00',
	            'location' => 'Bangladesh, Bhutan, British Indian Ocean Territory, Kazakhstan (most), Russia (Omsk)'
            ],
            [
	            'id' =>26,
	            'offset' => 'UTC+06:30',
	            'location' => 'Cocos Islands, Myanmar'
            ],
            [
	            'id' =>27,
	            'offset' => 'UTC+07:00',
	            'location' => 'Cambodia, Indonesia (west), Laos, Russia (Krasnoyarsk), Thailand, Vietnam'
            ],
            [
	            'id' =>28,
	            'offset' => 'UTC+08:00',
	            'location' => 'Australia (Western Australia), Brunei, China, Hong Kong, Indonesia (central), Macau, Malaysia, Philippines, Russia (Irkutsk), Singapore, Taiwan'
            ],
            [
	            'id' =>29,
	            'offset' => 'UTC+08:30',
	            'location' => 'North Korea[10]'
            ],
            [
	            'id' =>30,
	            'offset' => 'UTC+08:45',
	            'location' => 'Australia (Eucla unofficial)'
            ],
            [
	            'id' =>31,
	            'offset' => 'UTC+09:00',
	            'location' => 'East Timor, Indonesia (east), Japan, Russia (most of Sakha), South Korea'
            ],
            [
	            'id' =>32,
	            'offset' => 'UTC+09:30',
	            'location' => 'Australia (Northern Territory)'
            ],
            [
	            'id' =>33,
	            'offset' => 'UTC+10:00',
	            'location' => 'Australia (Queensland), Papua New Guinea, Russia (Primorsky)'
            ],
            [
	            'id' =>34,
	            'offset' => 'UTC+10:30',
	            'location' => 'Australia (Northern Territory)'
            ],
            [
	            'id' =>35,
	            'offset' => 'UTC+11:00',
	            'location' => 'New Caledonia, Solomon Islands, Vanuatu'
            ],
            [
	            'id' =>36,
	            'offset' => 'UTC+12:00',
	            'location' => 'Kiribati (Gilbert Islands), Russia (Kamchatka)'
            ],
            [
	            'id' =>37,
	            'offset' => 'UTC+12:45 ',
	            'location' => 'New Zealand(Chatham Islands)'
            ],
            [
	            'id' =>38,
	            'offset' => 'UTC+13:00',
	            'location' => 'Kiribati (Phoenix Islands), Tokelau'
            ],
            [
	            'id' =>39,
	            'offset' => 'UTC+14:00',
	            'location' => 'Kiribati (Line Islands)'
            ],
        ]);
    }
}
