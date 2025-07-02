<?php
return [
    'site' => [
        'name' => 'RedTravel Adventures',
        'tagline' => 'Jelajahi Indonesia dengan Penuh Semangat',
        'description' => 'Agen perjalanan terdepan untuk petualangan Indonesia yang tak terlupakan. Rasakan keindahan, budaya, dan keragaman Indonesia dengan tur yang dirancang ahli.'
    ],

    'nav' => [
        'home' => 'Beranda',
        'tours' => 'Tur',
        'travel_styles' => 'Gaya Perjalanan',
        'bucket_list' => 'Daftar Impian',
        'about' => 'Tentang',
        'sustainability' => 'Keberlanjutan',
        'faq' => 'FAQ',
        'contact' => 'Kontak',
        'language' => 'Bahasa'
    ],

    'hero' => [
        'title' => 'Petualangan Indonesia Impian Anda Dimulai Di Sini',
        'subtitle' => 'Temukan pantai-pantai murni, candi-candi kuno, budaya yang semarak, dan pemandangan yang menakjubkan di seluruh nusantara Indonesia.',
        'title_2' => 'Rasakan Keajaiban Indonesia',
        'subtitle_2' => 'Dari keindahan spiritual Bali hingga naga purba Komodo, ciptakan kenangan yang akan bertahan seumur hidup.',
        'cta_primary' => 'Jelajahi Tur',
        'cta_secondary' => 'Gaya Perjalanan',
        'cta_contact' => 'Hubungi Kami'
    ],

    'welcome' => [
        'greeting' => 'Selamat Datang',
        'title' => 'Selamat Datang di Indonesia',
        'text_1' => 'Indonesia, kepulauan terbesar di dunia, menawarkan keragaman pengalaman luar biasa yang dikemas dalam lebih dari 17.000 pulau.',
        'text_2' => 'Bersantai di pantai-pantai murni, jelajahi candi-candi kuno, dan berendamlah dalam tradisi budaya yang kaya.',
        'text_3' => 'Dari jantung spiritual Bali hingga petualangan liar Kalimantan, Indonesia memiliki sesuatu yang istimewa untuk setiap wisatawan.'
    ],

    'travel_styles' => [
        'title' => 'Jelajahi Indonesia dengan Cara Anda',
        'description' => 'Indonesia menawarkan berbagai pengalaman perjalanan untuk setiap gaya dan preferensi. Pilih petualangan Anda dan temukan apa yang membuat nusantara ini begitu istimewa.',
        'styles' => [
            [
                'name' => 'Warisan Budaya',
                'slug' => 'cultural',
                'description' => 'Temukan candi-candi kuno, seni tradisional, dan tradisi budaya yang kaya.',
                'image' => 'https://ext.same-assets.com/3037775497/3490837470.jpeg'
            ],
            [
                'name' => 'Surga Pulau',
                'slug' => 'beach',
                'description' => 'Bersantai di pantai-pantai murni dan jelajahi perairan yang jernih.',
                'image' => 'https://ext.same-assets.com/3037775497/3480226330.jpeg'
            ],
            [
                'name' => 'Petualangan & Satwa Liar',
                'slug' => 'adventure',
                'description' => 'Trekking melalui hutan dan temui satwa liar unik seperti komodo.',
                'image' => 'https://ext.same-assets.com/3037775497/2789562138.jpeg'
            ],
            [
                'name' => 'Pengalaman Mewah',
                'slug' => 'luxury',
                'description' => 'Manjakan diri dengan resort kelas dunia dan pengalaman eksklusif.',
                'image' => 'https://ext.same-assets.com/3037775497/2151977197.jpeg'
            ],
            [
                'name' => 'Petualangan Keluarga',
                'slug' => 'family',
                'description' => 'Ciptakan kenangan tak terlupakan dengan aktivitas ramah keluarga.',
                'image' => 'https://ext.same-assets.com/3037775497/688580463.jpeg'
            ],
            [
                'name' => 'Liburan Romantis',
                'slug' => 'romance',
                'description' => 'Berbagi momen intim di destinasi paling romantis di Indonesia.',
                'image' => 'https://ext.same-assets.com/3037775497/220314189.jpeg'
            ]
        ]
    ],

    'featured_tours' => [
        'title' => 'Tur Indonesia Unggulan',
        'description' => 'Jelajahi destinasi dan pengalaman Indonesia paling populer kami. Setiap tur dirancang dengan hati-hati untuk menampilkan yang terbaik dari Indonesia.'
    ],

    'tours' => [
        [
            'id' => 1,
            'name' => 'Penemuan Budaya Bali',
            'slug' => 'bali-cultural-discovery',
            'duration' => '7 hari / 6 malam',
            'short_description' => 'Jelajahi candi-candi kuno, desa-desa tradisional, dan kancah seni yang semarak di jantung Bali.',
            'image' => 'https://ext.same-assets.com/3037775497/1871084676.jpeg',
            'price_display' => 'Rp 13.500.000',
            'featured' => true,
            'category' => 'Budaya',
            'itinerary' => [
                'Hari 1: Tiba di Denpasar - Transfer ke Ubud',
                'Hari 2: Tur Candi Ubud - Hutan Monyet - Desa Seni',
                'Hari 3: Sunrise di Gunung Batur - Kelas Memasak Tradisional',
                'Hari 4: Terasering Sawah - Pasar Tradisional',
                'Hari 5: Hari Pantai di Sanur - Sunset di Tanah Lot',
                'Hari 6: Hari Bebas - Berbelanja di Seminyak',
                'Hari 7: Keberangkatan'
            ],
            'includes' => ['Akomodasi', 'Sarapan Harian', 'Transportasi', 'Pemandu Bahasa Inggris', 'Tiket Masuk'],
            'gallery' => [
                'https://ext.same-assets.com/3037775497/1871084676.jpeg',
                'https://ext.same-assets.com/3037775497/3480226330.jpeg',
                'https://ext.same-assets.com/3037775497/621702335.jpeg'
            ]
        ],
        [
            'id' => 2,
            'name' => 'Penjelajah Warisan Jawa',
            'slug' => 'java-heritage-explorer',
            'duration' => '8 hari / 7 malam',
            'short_description' => 'Temukan kerajaan-kerajaan kuno Jawa dengan kunjungan ke Borobudur, Prambanan, dan Yogyakarta.',
            'image' => 'https://ext.same-assets.com/3037775497/407596124.jpeg',
            'price_display' => 'Rp 18.000.000',
            'featured' => true,
            'category' => 'Budaya',
            'itinerary' => [
                'Hari 1: Tiba di Jakarta - Tur Kota',
                'Hari 2: Terbang ke Yogyakarta - Kraton Sultan',
                'Hari 3: Candi Borobudur - Candi Mendut',
                'Hari 4: Candi Prambanan - Ratu Boko',
                'Hari 5: Workshop Batik - Desa Perak',
                'Hari 6: Tur Gunung Merapi',
                'Hari 7: Tur Kota Solo - Pasar Tradisional',
                'Hari 8: Keberangkatan dari Yogyakarta'
            ],
            'includes' => ['Akomodasi', 'Sarapan Harian', 'Penerbangan Domestik', 'Transportasi', 'Pemandu Bahasa Inggris'],
            'gallery' => [
                'https://ext.same-assets.com/3037775497/407596124.jpeg',
                'https://ext.same-assets.com/3037775497/3188466586.jpeg'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Petualangan Taman Nasional Komodo',
            'slug' => 'komodo-adventure',
            'duration' => '5 hari / 4 malam',
            'short_description' => 'Temui komodo legendaris dan jelajahi taman laut yang murni.',
            'image' => 'https://ext.same-assets.com/3037775497/2789562138.jpeg',
            'price_display' => 'Rp 22.500.000',
            'featured' => true,
            'category' => 'Petualangan',
            'itinerary' => [
                'Hari 1: Tiba Labuan Bajo - Sunset cruise',
                'Hari 2: Pulau Komodo - Melihat komodo',
                'Hari 3: Pulau Rinca - Snorkeling Pink Beach',
                'Hari 4: Hiking Pulau Padar - Diving Manta Point',
                'Hari 5: Keberangkatan dari Labuan Bajo'
            ],
            'includes' => ['Akomodasi kapal', 'Semua makanan', 'Peralatan snorkeling', 'Tiket taman nasional', 'Pemandu lokal'],
            'gallery' => [
                'https://ext.same-assets.com/3037775497/2789562138.jpeg'
            ]
        ]
    ],

    'testimonials' => [
        'title' => 'Apa Kata Wisatawan Kami',
        'reviews' => [
            [
                'text' => 'Petualangan Indonesia kami melampaui semua ekspektasi! Pengalaman budaya di Bali benar-benar magis, dan pemandu kami sangat berpengetahuan.',
                'name' => 'Sarah Johnson',
                'location' => 'Australia'
            ],
            [
                'text' => 'Melihat komodo di habitat aslinya adalah pengalaman sekali seumur hidup. Kru kapal fantastis dan diving-nya kelas dunia.',
                'name' => 'Mark Chen',
                'location' => 'Singapura'
            ],
            [
                'text' => 'Candi-candi di Jawa sangat menakjubkan. Borobudur saat sunrise adalah sesuatu yang tidak akan pernah saya lupakan. Organisasi sempurna dari awal hingga akhir.',
                'name' => 'Emma Williams',
                'location' => 'Inggris'
            ]
        ]
    ],

    'common' => [
        'learn_more' => 'Pelajari Lebih Lanjut',
        'view_details' => 'Lihat Detail',
        'add_to_bucket' => 'Tambah ke Daftar Impian',
        'view_all_tours' => 'Lihat Semua Tur',
        'from' => 'Mulai dari',
        'featured' => 'Unggulan',
        'days' => 'hari',
        'nights' => 'malam',
        'includes' => 'Termasuk',
        'itinerary' => 'Itinerari',
        'gallery' => 'Galeri Foto',
        'book_now' => 'Pesan Sekarang',
        'send_inquiry' => 'Kirim Pertanyaan',
        'contact_info' => 'Informasi Kontak',
        'follow_us' => 'Ikuti Kami',
        'all_rights_reserved' => 'Hak cipta dilindungi',
        'bucket_list' => 'Daftar Impian',
        'remove' => 'Hapus',
        'clear_all' => 'Hapus Semua',
        'send_request' => 'Kirim Permintaan'
    ],

    'contact' => [
        'title' => 'Hubungi Kami',
        'subtitle' => 'Siap memulai petualangan Indonesia Anda? Hubungi ahli perjalanan kami.',
        'address' => 'Jl. Raya Ubud No. 123, Bali, Indonesia 80571',
        'phone' => '+62 361 123456',
        'email' => 'info@redtravel.id',
        'hours' => 'Sen - Jum: 09:00 - 18:00',
        'form' => [
            'name' => 'Nama Lengkap',
            'email' => 'Alamat Email',
            'phone' => 'Nomor Telepon',
            'subject' => 'Subjek',
            'message' => 'Pesan',
            'submit' => 'Kirim Pesan'
        ]
    ]
];
?>
