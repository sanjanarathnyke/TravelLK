<?php

namespace Database\Seeders;

use App\Models\ThingsToDo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThingsToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ThingsToDo::insert([
            [
                'region_id' => 1,
                'name' => 'Kandy',
                'activity_1' => 'Watch Kandyan Dance Performance',
                'description_activity_1' => 'Experience traditional Sri Lankan cultural dance with elaborate costumes, fire dancing, and drumming performances.',
                'activity_2' => 'Visit Tea Factories',
                'description_activity_2' => 'Tour nearby tea plantations and factories to learn about Ceylon tea production and enjoy fresh tea tastings.',
                'activity_3' => 'Explore Local Markets',
                'description_activity_3' => 'Browse Kandy Market for fresh produce, spices, handicrafts, and traditional Sri Lankan items.',
                'activity_4' => 'Hiking & Nature Walks',
                'description_activity_4' => 'Trek through surrounding hills, visit Hanthana Mountain Range, or take peaceful walks in the forest reserve.',
            ],
            [
                'region_id' => 2,
                'name' => 'Down South',
                'activity_1' => 'Surfing in Weligama',
                'description_activity_1' => 'Catch waves at beginner-friendly surf spots with rental boards and instructors.',
                'activity_2' => 'Whale Watching in Mirissa',
                'description_activity_2' => 'Join an early morning boat ride to see blue whales and dolphins.',
                'activity_3' => 'Explore Galle Fort',
                'description_activity_3' => 'Walk the historic Dutch ramparts, visit museums, and enjoy sunset views.',
                'activity_4' => 'Snorkeling in Hikkaduwa',
                'description_activity_4' => 'Swim with turtles and view vibrant corals just offshore.',
            ],
            [
                'region_id' => 3,
                'name' => 'Nuwara Eliya',
                'activity_1' => 'Visit Gregory Lake',
                'description_activity_1' => 'Paddleboat or cycle around the picturesque lake in cool weather.',
                'activity_2' => 'Tour a Strawberry Farm',
                'description_activity_2' => 'See how strawberries are grown and enjoy fresh desserts.',
                'activity_3' => 'Explore Horton Plains',
                'description_activity_3' => 'Trek to World’s End for dramatic cliff views and misty plains.',
                'activity_4' => 'Enjoy High Tea at a Colonial Hotel',
                'description_activity_4' => 'Experience old-world charm with Sri Lankan tea and snacks.',
            ],
            [
                'region_id' => 4,
                'name' => 'Ella',
                'activity_1' => 'Hike Little Adam’s Peak',
                'description_activity_1' => 'A short scenic hike with panoramic views of Ella Valley.',
                'activity_2' => 'Visit Nine Arches Bridge',
                'description_activity_2' => 'Watch trains cross this iconic colonial-era bridge amidst lush jungle.',
                'activity_3' => 'Zip Line Adventure',
                'description_activity_3' => 'Ride Sri Lanka’s longest zip line over tea plantations.',
                'activity_4' => 'Visit Ravana Falls',
                'description_activity_4' => 'Cool off at this roadside waterfall with scenic photo spots.',
            ],
            [
                'region_id' => 5,
                'name' => 'Sigiriya and Dambulla',
                'activity_1' => 'Climb Sigiriya Rock Fortress',
                'description_activity_1' => 'Scale the lion-pawed rock for ancient ruins and 360° views.',
                'activity_2' => 'Explore Dambulla Cave Temples',
                'description_activity_2' => 'Admire ancient Buddha statues and cave art in five sanctuaries.',
                'activity_3' => 'Village Tour by Bullock Cart',
                'description_activity_3' => 'Experience rural life and traditional cooking demos.',
                'activity_4' => 'Cycle Around Ancient Reservoirs',
                'description_activity_4' => 'Ride past water tanks, paddy fields, and historical ruins.',
            ],
            [
                'region_id' => 6,
                'name' => 'Jaffna',
                'activity_1' => 'Visit Nallur Kandaswamy Kovil',
                'description_activity_1' => 'Attend Hindu rituals and festivals at this iconic temple.',
                'activity_2' => 'Explore Jaffna Fort',
                'description_activity_2' => 'Walk through colonial ruins with sea views.',
                'activity_3' => 'Taste Jaffna Crab Curry',
                'description_activity_3' => 'Try the most famous Tamil dish at a local restaurant.',
                'activity_4' => 'Island Hop to Delft',
                'description_activity_4' => 'See wild horses and coral fences on this remote island.',
            ],
            [
                'region_id' => 7,
                'name' => 'Anuradhapura',
                'activity_1' => 'Visit the Sacred Bodhi Tree',
                'description_activity_1' => 'Pray under the oldest historically documented tree in the world.',
                'activity_2' => 'Explore Ancient Stupas',
                'description_activity_2' => 'Visit massive domes like Ruwanwelisaya and Jetavanaramaya.',
                'activity_3' => 'Watch Pilgrims and Monks',
                'description_activity_3' => 'Observe rituals and peaceful Buddhist practices.',
                'activity_4' => 'Visit Archaeological Museum',
                'description_activity_4' => 'Understand ancient Sri Lankan civilization through artifacts.',
            ],
            [
                'region_id' => 8,
                'name' => 'Trincomalee and Nilaveli',
                'activity_1' => 'Relax at Nilaveli Beach',
                'description_activity_1' => 'Sunbathe or swim in crystal-clear waters with white sand.',
                'activity_2' => 'Snorkel at Pigeon Island',
                'description_activity_2' => 'Explore marine life and coral reefs with ease.',
                'activity_3' => 'Visit Koneswaram Temple',
                'description_activity_3' => 'Perched on a cliff with dramatic sea views.',
                'activity_4' => 'Watch Whales',
                'description_activity_4' => 'Take a seasonal boat tour to spot blue whales.',
            ],
            [
                'region_id' => 9,
                'name' => 'Colombo ',
                'activity_1' => 'Shop at Pettah Market',
                'description_activity_1' => 'Dive into Colombo’s busiest and most colorful street bazaar.',
                'activity_2' => 'Stroll Galle Face Green',
                'description_activity_2' => 'Eat street food and enjoy the ocean breeze.',
                'activity_3' => 'Visit Gangaramaya Temple',
                'description_activity_3' => 'A unique mix of Buddhist, Hindu, and modern architecture.',
                'activity_4' => 'Colombo City Tour',
                'description_activity_4' => 'Ride a tuk-tuk or bus through modern and colonial areas.',
            ],
            [
                'region_id' => 10,
                'name' => 'Arugam Bay and East Coast ',
                'activity_1' => 'Surf Arugam Bay Point',
                'description_activity_1' => 'World-famous wave for both beginners and pros.',
                'activity_2' => 'Explore Kumana National Park',
                'description_activity_2' => 'Go on safari to see elephants, leopards, and birds.',
                'activity_3' => 'Beach BBQ & Chill',
                'description_activity_3' => 'Relax with seafood grills, bonfires, and music.',
                'activity_4' => 'Visit Muhudu Maha Viharaya',
                'description_activity_4' => 'Buddhist temple ruins on the beach.',
            ],
        ]);
    }
}
