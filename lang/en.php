<?php
return [
    'site' => [
        'name' => 'RedTravel Adventures',
        'tagline' => 'Discover Indonesia with Passion',
        'description' => 'Your premier travel agency for unforgettable Indonesian adventures. Experience the beauty, culture, and diversity of Indonesia with our expertly crafted tours.'
    ],

    'nav' => [
        'home' => 'Home',
        'tours' => 'Tours',
        'travel_styles' => 'Travel Styles',
        'bucket_list' => 'Bucket List',
        'about' => 'About',
        'sustainability' => 'Sustainability',
        'faq' => 'FAQ',
        'contact' => 'Contact',
        'language' => 'Language'
    ],

    'hero' => [
        'title' => 'The Indonesian Adventure of Your Dreams Starts Here',
        'subtitle' => 'Discover pristine beaches, ancient temples, vibrant cultures, and breathtaking landscapes across the Indonesian archipelago.',
        'title_2' => 'Experience the Magic of Indonesia',
        'subtitle_2' => 'From Bali\'s spiritual beauty to Komodo\'s ancient dragons, create memories that will last a lifetime.',
        'cta_primary' => 'Explore Tours',
        'cta_secondary' => 'Travel Styles',
        'cta_contact' => 'Contact Us'
    ],

    'welcome' => [
        'greeting' => 'Selamat Datang',
        'title' => 'Welcome to Indonesia',
        'text_1' => 'Indonesia, the world\'s largest archipelago, offers an incredible diversity of experiences packed into over 17,000 islands.',
        'text_2' => 'Relax on pristine beaches, explore ancient temples, and immerse yourself in rich cultural traditions.',
        'text_3' => 'From the spiritual heart of Bali to the wild adventures of Borneo, Indonesia has something special for every traveler.'
    ],

    'travel_styles' => [
        'title' => 'Explore Indonesia Your Way',
        'description' => 'Indonesia offers a variety of travel experiences to suit every style and preference. Choose your adventure and discover what makes this archipelago so special.',
        'styles' => [
            [
                'name' => 'Cultural Heritage',
                'slug' => 'cultural',
                'description' => 'Discover ancient temples, traditional arts, and rich cultural traditions.',
                'image' => 'https://ext.same-assets.com/3037775497/3490837470.jpeg'
            ],
            [
                'name' => 'Island Paradise',
                'slug' => 'beach',
                'description' => 'Relax on pristine beaches and explore crystal-clear waters.',
                'image' => 'https://ext.same-assets.com/3037775497/3480226330.jpeg'
            ],
            [
                'name' => 'Adventure & Wildlife',
                'slug' => 'adventure',
                'description' => 'Trek through jungles and encounter unique wildlife like Komodo dragons.',
                'image' => 'https://ext.same-assets.com/3037775497/2789562138.jpeg'
            ],
            [
                'name' => 'Luxury Experience',
                'slug' => 'luxury',
                'description' => 'Indulge in world-class resorts and exclusive experiences.',
                'image' => 'https://ext.same-assets.com/3037775497/2151977197.jpeg'
            ],
            [
                'name' => 'Family Adventures',
                'slug' => 'family',
                'description' => 'Create unforgettable memories with family-friendly activities.',
                'image' => 'https://ext.same-assets.com/3037775497/688580463.jpeg'
            ],
            [
                'name' => 'Romantic Getaway',
                'slug' => 'romance',
                'description' => 'Share intimate moments in Indonesia\'s most romantic destinations.',
                'image' => 'https://ext.same-assets.com/3037775497/220314189.jpeg'
            ]
        ]
    ],

    'featured_tours' => [
        'title' => 'Featured Indonesian Tours',
        'description' => 'Explore our most popular Indonesian destinations and experiences. Each tour is carefully crafted to showcase the best of Indonesia.'
    ],

    'tours' => [
        [
            'id' => 1,
            'name' => 'Bali Cultural Discovery',
            'slug' => 'bali-cultural-discovery',
            'duration' => '7 days / 6 nights',
            'short_description' => 'Explore ancient temples, traditional villages, and vibrant art scenes in the heart of Bali.',
            'image' => 'https://ext.same-assets.com/3037775497/1871084676.jpeg',
            'price_display' => '$899',
            'featured' => true,
            'category' => 'Cultural',
            'itinerary' => [
                'Day 1: Arrival in Denpasar - Transfer to Ubud',
                'Day 2: Ubud Temple Tour - Monkey Forest - Art Villages',
                'Day 3: Sunrise at Mount Batur - Traditional Cooking Class',
                'Day 4: Rice Terraces - Traditional Markets',
                'Day 5: Beach Day in Sanur - Sunset at Tanah Lot',
                'Day 6: Free Day - Shopping in Seminyak',
                'Day 7: Departure'
            ],
            'includes' => ['Accommodation', 'Daily Breakfast', 'Transportation', 'English Guide', 'Entrance Fees'],
            'gallery' => [
                'https://ext.same-assets.com/3037775497/1871084676.jpeg',
                'https://ext.same-assets.com/3037775497/3480226330.jpeg',
                'https://ext.same-assets.com/3037775497/621702335.jpeg'
            ]
        ],
        [
            'id' => 2,
            'name' => 'Java Heritage Explorer',
            'slug' => 'java-heritage-explorer',
            'duration' => '8 days / 7 nights',
            'short_description' => 'Discover the ancient kingdoms of Java with visits to Borobudur, Prambanan, and Yogyakarta.',
            'image' => 'https://ext.same-assets.com/3037775497/407596124.jpeg',
            'price_display' => '$1,199',
            'featured' => true,
            'category' => 'Cultural',
            'itinerary' => [
                'Day 1: Arrival in Jakarta - City Tour',
                'Day 2: Fly to Yogyakarta - Sultan Palace',
                'Day 3: Borobudur Temple - Mendut Temple',
                'Day 4: Prambanan Temple - Ratu Boko',
                'Day 5: Batik Workshop - Silver Village',
                'Day 6: Mount Merapi Tour',
                'Day 7: Solo City Tour - Traditional Markets',
                'Day 8: Departure from Yogyakarta'
            ],
            'includes' => ['Accommodation', 'Daily Breakfast', 'Domestic Flights', 'Transportation', 'English Guide'],
            'gallery' => [
                'https://ext.same-assets.com/3037775497/407596124.jpeg',
                'https://ext.same-assets.com/3037775497/3188466586.jpeg'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Komodo National Park Adventure',
            'slug' => 'komodo-adventure',
            'duration' => '5 days / 4 nights',
            'short_description' => 'Encounter the legendary Komodo dragons and explore pristine marine parks.',
            'image' => 'https://ext.same-assets.com/3037775497/2789562138.jpeg',
            'price_display' => '$1,499',
            'featured' => true,
            'category' => 'Adventure',
            'itinerary' => [
                'Day 1: Arrive Labuan Bajo - Sunset cruise',
                'Day 2: Komodo Island - Dragon spotting',
                'Day 3: Rinca Island - Pink Beach snorkeling',
                'Day 4: Padar Island hiking - Manta Point diving',
                'Day 5: Departure from Labuan Bajo'
            ],
            'includes' => ['Boat accommodation', 'All meals', 'Snorkeling gear', 'National park fees', 'Local guide'],
            'gallery' => [
                'https://ext.same-assets.com/3037775497/2789562138.jpeg'
            ]
        ]
    ],

    'testimonials' => [
        'title' => 'What Our Travelers Say',
        'reviews' => [
            [
                'text' => 'Our Indonesian adventure exceeded all expectations! The cultural experiences in Bali were absolutely magical, and our guide was incredibly knowledgeable.',
                'name' => 'Sarah Johnson',
                'location' => 'Australia'
            ],
            [
                'text' => 'Seeing the Komodo dragons in their natural habitat was a once-in-a-lifetime experience. The boat crew was fantastic and the diving was world-class.',
                'name' => 'Mark Chen',
                'location' => 'Singapore'
            ],
            [
                'text' => 'The temples of Java are breathtaking. Borobudur at sunrise is something I\'ll never forget. Perfect organization from start to finish.',
                'name' => 'Emma Williams',
                'location' => 'United Kingdom'
            ]
        ]
    ],

    'common' => [
        'learn_more' => 'Learn More',
        'view_details' => 'View Details',
        'add_to_bucket' => 'Add to Bucket List',
        'view_all_tours' => 'View All Tours',
        'from' => 'From',
        'featured' => 'Featured',
        'days' => 'days',
        'nights' => 'nights',
        'includes' => 'Includes',
        'itinerary' => 'Itinerary',
        'gallery' => 'Photo Gallery',
        'book_now' => 'Book Now',
        'send_inquiry' => 'Send Inquiry',
        'contact_info' => 'Contact Information',
        'follow_us' => 'Follow Us',
        'all_rights_reserved' => 'All rights reserved',
        'bucket_list' => 'Bucket List',
        'remove' => 'Remove',
        'clear_all' => 'Clear All',
        'send_request' => 'Send Request'
    ],

    'contact' => [
        'title' => 'Contact Us',
        'subtitle' => 'Ready to start your Indonesian adventure? Get in touch with our travel experts.',
        'address' => 'Jl. Raya Ubud No. 123, Bali, Indonesia 80571',
        'phone' => '+62 361 123456',
        'email' => 'info@redtravel.id',
        'hours' => 'Mon - Fri: 9:00 AM - 6:00 PM',
        'form' => [
            'name' => 'Full Name',
            'email' => 'Email Address',
            'phone' => 'Phone Number',
            'subject' => 'Subject',
            'message' => 'Message',
            'submit' => 'Send Message'
        ]
    ]
];
?>
