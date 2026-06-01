<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourPackage;

class TourPackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'name'          => 'Patar Beach Day Tour',
                'description'   => 'Experience the breathtaking white sand and powdery shores of Patar Beach in Bolinao. Includes a guided beach walk, swimming, and a fresh seafood lunch by the shore.',
                'location'      => 'Patar Beach, Bolinao',
                'price'         => 1200.00,
                'duration_days' => 1,
                'max_guests'    => 20,
                'type'          => 'beach',
                'rating'        => 4.9,
                'status'        => 'active',
            ],
            [
                'name'          => 'Bolinao Falls Adventure',
                'description'   => 'Trek through lush forests to reach the stunning Bolinao Falls. Enjoy a refreshing swim in natural pools surrounded by towering rock formations.',
                'location'      => 'Bolinao Falls, Bolinao',
                'price'         => 950.00,
                'duration_days' => 1,
                'max_guests'    => 15,
                'type'          => 'nature',
                'rating'        => 4.7,
                'status'        => 'active',
            ],
            [
                'name'          => 'Cape Bolinao Lighthouse Tour',
                'description'   => 'Visit the oldest and tallest lighthouse in the Philippines. Enjoy panoramic views of the South China Sea from the top of Cape Bolinao.',
                'location'      => 'Cape Bolinao Lighthouse, Bolinao',
                'price'         => 600.00,
                'duration_days' => 1,
                'max_guests'    => 25,
                'type'          => 'heritage',
                'rating'        => 4.6,
                'status'        => 'active',
            ],
            [
                'name'          => 'Hundred Islands Day Trip',
                'description'   => 'Island-hopping adventure to the famous Hundred Islands National Park just from Bolinao. Visit Governor, Quezon, and Children\'s Island.',
                'location'      => 'Hundred Islands, Alaminos (via Bolinao)',
                'price'         => 2500.00,
                'duration_days' => 1,
                'max_guests'    => 12,
                'type'          => 'island',
                'rating'        => 5.0,
                'status'        => 'active',
            ],
            [
                'name'          => 'Bolinao Marine Sanctuary Snorkeling',
                'description'   => 'Explore the vibrant coral reefs at the Bolinao Marine Sanctuary. Snorkeling gear provided. Great for beginners and experienced snorkelers alike.',
                'location'      => 'Bolinao Marine Sanctuary, Bolinao',
                'price'         => 1500.00,
                'duration_days' => 1,
                'max_guests'    => 10,
                'type'          => 'adventure',
                'rating'        => 4.8,
                'status'        => 'active',
            ],
            [
                'name'          => 'Bolinao 2D1N Heritage & Beach Package',
                'description'   => 'A full weekend escape combining the Cape Bolinao Lighthouse, Patar Beach sunset, local Pangasinan cuisine dinner, overnight stay at a beachfront cottage, and Bolinao Falls on day two.',
                'location'      => 'Bolinao, Pangasinan',
                'price'         => 3800.00,
                'duration_days' => 2,
                'max_guests'    => 8,
                'type'          => 'beach',
                'rating'        => 4.9,
                'status'        => 'active',
            ],
        ];

        foreach ($packages as $pkg) {
            TourPackage::create($pkg);
        }
    }
}
