<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            1 => [ // Kandy
                ['Hoppers (Appa)', 'hoppers.jpg', 'Bowl-shaped pancakes made from fermented rice flour, often served with sambol.'],
                ['Kandyan Rice & Curry', 'rice-curry.jpg', 'Hill country-style curry with red rice, coconut, and local spices.'],
                ['Kavum & Kokis', 'kavum-kokis.jpg', 'Traditional Sinhala New Year sweets deep fried in oil.'],
                ['Wood Apple Juice', 'woodapple.jpg', 'A sweet-sour drink made from local wood apple fruit.'],
                ['Ceylon Tea', 'ceylon-tea.jpg', 'Freshly brewed tea from surrounding plantations.'],
                ['Kiribath', 'kiribath.jpg', 'Coconut milk rice served with chili paste.'],
            ],
            2 => [ // Down South
                ['Seafood Curry', 'seafood-curry.jpg', 'Spicy curry made with freshly caught seafood.'],
                ['Pol Sambol', 'pol-sambol.jpg', 'Coconut relish with chili and lime.'],
                ['Gotu Kola Salad', 'gotukola.jpg', 'Healthy green salad made with herbs and lime.'],
                ['Fish Ambul Thiyal', 'fish-ambul.jpg', 'Sour fish curry with goraka.'],
                ['Coconut Roti', 'coconut-roti.jpg', 'Flatbread with shredded coconut, served with curry.'],
                ['Watalappan', 'watalappan.jpg', 'Spiced jaggery custard dessert.'],
            ],
            3 => [ // Nuwara Eliya
                ['Highland Tea', 'highland-tea.jpg', 'Grown in the cool climates of Nuwara Eliya.'],
                ['Strawberry Dessert', 'strawberry.jpg', 'Fresh strawberries and cream from local farms.'],
                ['Vegetable Stew', 'veg-stew.jpg', 'Mildly spiced stew perfect for the climate.'],
                ['Roti with Lunumiris', 'roti-lunumiris.jpg', 'Flatbread with spicy onion-chili paste.'],
                ['Milk Rice (Kiribath)', 'kiribath.jpg', 'Traditional milk rice dish served with sambol.'],
                ['Fruit Salad', 'fruit-salad.jpg', 'A mix of upcountry fruits served chilled.'],
            ],
            4 => [ // Ella
                ['Jackfruit Curry', 'jackfruit-curry.jpg', 'Tender jackfruit slow-cooked with spices.'],
                ['Honey Roti', 'honey-roti.jpg', 'Thick roti drizzled with local honey.'],
                ['Banana Pancakes', 'banana-pancake.jpg', 'Popular with backpackers, filled with sweet bananas.'],
                ['Local Lentil Dhal', 'dhal-curry.jpg', 'Spiced red lentils served with rice or roti.'],
                ['Papaya Smoothie', 'papaya.jpg', 'Refreshing smoothie made with ripe papaya.'],
                ['Eggplant Moju', 'brinjal-moju.jpg', 'Sweet and tangy eggplant pickle.'],
            ],
            5 => [ // Sigiriya & Dambulla
                ['Traditional Rice & Curry', 'rice-curry.jpg', 'With multiple curries, sambol, and chutney.'],
                ['Thalapa', 'thalapa.jpg', 'Cornmeal porridge eaten with spicy sambol.'],
                ['Dry Fish Curry', 'dryfish.jpg', 'Salty and spicy, served with rice.'],
                ['Snake Gourd Curry', 'snakegourd.jpg', 'Soft cooked vegetable curry.'],
                ['Spiced Chickpeas', 'kadala.jpg', 'Common street food with onions and chili.'],
                ['Wood Apple Juice', 'woodapple.jpg', 'Served chilled in hot climate.'],
            ],
            6 => [ // Jaffna
                ['Jaffna Crab Curry', 'crab-curry.jpg', 'Spicy and rich Tamil-style curry.'],
                ['Jaffna Kool', 'jaffna-kool.jpg', 'Thick seafood soup with tamarind and crab.'],
                ['Palmyra Sweets', 'palmyra.jpg', 'Sweets made from Palmyra sap and milk.'],
                ['Idiyappam', 'idiyappam.jpg', 'String hoppers served with curry or coconut milk.'],
                ['Vadai', 'vada.jpg', 'Fried lentil fritters, crispy and spicy.'],
                ['Dosa with Sambar', 'dosa.jpg', 'Indian-style crepe served with lentil stew.'],
            ],
            7 => [ // Anuradhapura
                ['Herbal Porridge (Kola Kenda)', 'kola-kenda.jpg', 'A healthy green porridge served at temples.'],
                ['Rice & Curry with Mallung', 'mallung.jpg', 'Shredded leafy greens stir-fried with coconut.'],
                ['Kottu Roti', 'kottu.jpg', 'Chopped roti stir-fried with veggies and egg.'],
                ['Manioc Curry', 'manioc.jpg', 'Root vegetable cooked in coconut milk.'],
                ['Lunu Miris', 'lunu-miris.jpg', 'Spicy onion and chili sambol.'],
                ['Buffalo Curd & Treacle', 'curd.jpg', 'Served as a dessert or breakfast.'],
            ],
            8 => [ // Trincomalee & Nilaveli
                ['Crab Curry', 'crab-curry.jpg', 'Seafood special from the east coast.'],
                ['Fried Prawns', 'prawns.jpg', 'Crunchy prawns served with lime.'],
                ['Beachside BBQ', 'bbq.jpg', 'Grilled seafood on the beach.'],
                ['Coconut Sambol', 'pol-sambol.jpg', 'A side dish with almost every meal.'],
                ['Vegetable Fried Rice', 'fried-rice.jpg', 'Popular among travelers.'],
                ['Seaweed Salad', 'seaweed.jpg', 'Unique dish made from coastal ingredients.'],
            ],
            9 => [ // Colombo
                ['Kottu Roti', 'kottu.jpg', 'City favorite stir-fried dish with roti.'],
                ['Nasi Goreng', 'nasi-goreng.jpg', 'Spiced fried rice with meat and egg.'],
                ['Egg Hoppers', 'egg-hoppers.jpg', 'Crispy edges with soft center and egg.'],
                ['String Hoppers', 'string-hoppers.jpg', 'Steamed rice noodle nests.'],
                ['Cutlets', 'cutlets.jpg', 'Deep-fried balls of fish or vegetables.'],
                ['Pineapple Curry', 'pineapple-curry.jpg', 'Sweet and tangy tropical curry.'],
            ],
            10 => [ // Arugam Bay & East Coast
                ['Seafood Platter', 'seafood.jpg', 'A variety of grilled seafood on one plate.'],
                ['Coconut Pancakes', 'coconut-pancake.jpg', 'Filled with coconut and jaggery.'],
                ['Grilled Lobster', 'lobster.jpg', 'Served with lemon butter.'],
                ['Fish Roti', 'fish-roti.jpg', 'Stuffed and pan-fried roti.'],
                ['Iced Tea', 'iced-tea.jpg', 'Chilled tea brewed from local leaves.'],
                ['Banana Fritters', 'banana-fritters.jpg', 'Crispy and golden dessert.'],
            ],
        ];

        foreach ($foods as $regionId => $items) {
            foreach ($items as [$foodName, $image, $description]) {
                Food::create([
                    'region_id'   => $regionId,
                    'food_name'   => $foodName,
                    'image'       => "assets/images/food/$image",
                    'description' => $description,
                ]);
            }
        }
    }
}
