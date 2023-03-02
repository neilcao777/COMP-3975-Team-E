<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s1 = new \App\Models\dailyNewsletter([
            'title' => 'Nordstrom closing down in Canada',
            'body' => "Nordstrom Inc. says it is winding down its Canadian operations and closing all 13 of its stores in the country.

            The company, which launched in Canada in 2014, has six Nordstrom stores and seven Nordstrom Rack locations.
            
            All stores will close and all the company's staff in Canada — roughly 2,330 people — will lose their jobs, the company said Thursday.
            
            In court filings, the company says Nordstrom's Canadian business has lost money every single year it has been in operation.
            Gift cards will be honoured until the end of liquidation for in-store purchases. No new gift cards can be purchased after Thursday.

            The company's Nordstrom.ca site has stopped sales effective immediately. Any orders placed online before Thursday will be filled, but no new orders will be processed online. After March 17, all sales are final and returns and exchanges will no longer be permitted.",
            'pictureUrl' => 'https://i.cbc.ca/1.6766080.1677793236!/fileImage/httpImage/image.jpg_gen/derivatives/16x9_780/cf-toronto-eaton-centre-nordstrom-store-stox.jpg'
        ]);
        $s1->save();
        
        $s2 = new \App\Models\dailyNewsletter([
            'title' => 'Home sales in Vancouver area up 77% from January',
            'body' => "The Real Estate Board of Greater Vancouver says the number of homes sold in February was up 76.9 per cent from January, but down 47.2 per cent compared to the same month last year.

            The board says sales for the month in the area it covers totalled 1,808, down from 3,424 in February 2022 and roughly 33 per cent below the 10-year February sales average.
            
            The board says the numbers reflect a continued reluctance from prospective home sellers to list their properties, pushing sales well below historical norms.
            
            However, the total number of homes listed for sale in the region has continued inching upwards, moving up by 16.7 per cent from February 2022 and 5.2 per cent from January 2023.",
            'pictureUrl' => 'https://i.cbc.ca/1.6765753.1677784158!/cpImage/httpImage/image.jpg_gen/derivatives/16x9_780/real-estate-forecast-bc-20230206.jpg'
        ]);
        $s2->save();
        
        // $s3 = new \App\Models\dailyNewsletter([
        //     'title' => 'Tom',
        //     'body' => "Max",
        //     'pictureUrl' => 'Nursing'
        // ]);
        // $s3->save();
        
        // $s4 = new \App\Models\dailyNewsletter([
        //     'title' => 'Tom',
        //     'body' => "Max",
        //     'pictureUrl' => 'Nursing'
        // ]);
        // $s4->save();
        
        // $s5 = new \App\Models\dailyNewsletter([
        //     'title' => 'Tom',
        //     'body' => "Max",
        //     'pictureUrl' => 'Nursing'
        // ]);
        // $s5->save();
        
        // $s6 = new \App\Models\dailyNewsletter([
        //     'title' => 'Tom',
        //     'body' => "Max",
        //     'pictureUrl' => 'Nursing'
        // ]);
        // $s6->save();
        
    }
}
