-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 12:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
`islandContentID` int(4) NOT NULL,
`islandOfPersonalityID` int(4) NOT NULL,
`image` varchar(50) DEFAULT NULL,
`content` varchar(1000) NOT NULL,
`color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'volley1.jpg', 'While we didn’t make it to the podium in our first season, our rookie year was a valuable
learning experience. It gave us the opportunity to build chemistry as a team, develop our skills, and understand the
competition better. We faced challenges and setbacks, but each game taught us lessons that will help us improve and come
back stronger next season. We’re excited about the progress we’ve made and are ready to continue our journey with
renewed determination and drive.', '#020079'),
(2, 1, 'volley2.png', 'In our second season, we emerged as silver medalists! Despite not reaching the top spot, we made
incredible progress as a team and worked tirelessly to improve our skills. Winning the silver medal was a testament to
our hard work, dedication, and resilience throughout the season. Each match brought us closer together and strengthened
our bond as a team. We’re thrilled with what we’ve accomplished and are motivated to keep striving for even greater
success in the future.', '#020079'),
(3, 1, 'volley3.jpg', 'In our second season, we experienced great success by clinching the first-place trophy! Our hard
work and determination paid off as we dominated the competition, showing the culmination of our growth and teamwork.
Each player contributed to this achievement, pushing themselves beyond their limits to secure victory. It was a moment
of pride for our team, and we’re excited to build on this success and aim even higher in the seasons to come.',
'#020079'),
(4, 2, 'puerto1.jpg', 'Nestled in the heart of Puerto Galera, Little Boracay boasts powdery white sand, turquoise
waters, and a lively tropical vibe reminiscent of its famous namesake. Perfect for swimming, snorkeling, or simply
unwinding under the sun, this hidden gem offers a slice of paradise without the bustling crowds. Whether you’re seeking
adventure or relaxation, Little Boracay is the perfect spot to enjoy the beauty of Puerto Galera. Come and experience
its charm for yourself!', '#A4AC3C'),
(5, 2, 'puerto2.jpg', 'Puerto Galeras caves, natural wonders filled with beauty and intrigue. These caves offer a
glimpse into the island’s rich geological history, with fascinating rock formations and hidden chambers waiting to be
explored. Whether you are an adventurer or a nature enthusiast, the caves of Puerto Galera promise a journey into the
heart of the island’s natural treasures. Join me as we uncover their secrets!', '#A4AC3C'),
(6, 2, 'puerto3.jpg', 'RORO (Roll-On, Roll-Off) transportation, a vital link connecting the islands of the Philippines.
Designed for both passengers and vehicles, RORO ferries make island-hopping seamless, offering a reliable way to explore
the country’s stunning destinations like Puerto Galera. Whether you are traveling for leisure or business, RORO provides
a practical and scenic journey across the archipelago.', '#A4AC3C'),
(7, 3, 'instrument1.jpg', 'Kulintang, a traditional Philippine instrument. This ancient gong ensemble, originating from
Mindanao, features a row of small, horizontally-laid gongs played melodically. The Kulintang reflects the rich cultural
heritage of the Philippines, used in ceremonies, celebrations, and storytelling. Join me as we explore its vibrant
rhythms and the deep traditions it represents in Filipino art and music.', '#382EBB'),
(8, 3, 'instrument2.jpg', 'Kudyapi, a traditional Philippine two-stringed lute cherished by indigenous groups like the
Maranao and T’boli. Known for its unique, soulful melodies, the kudyapi reflects the artistry and cultural heritage of
the Philippines. Often used in storytelling and ceremonies, it embodies the deep connection between music and Filipino
tradition. Join me as we explore its rich history and captivating sound.', '#382EBB'),
(9, 3, 'instrument3.jpg', 'Tongali, a traditional nose flute from the Cordillera region of the Philippines. Played with
grace and precision, this instrument produces soft, melodic tones that reflect the beauty of nature and the soul of
Filipino tradition. Often used in courtship and storytelling, the Tongali is a testament to the creativity and cultural
depth of the Philippines. Join me as we uncover its history and charm.', '#382EBB'),
(10, 4, 'art1.jpg', 'Spoliarium by Juan Luna, a powerful painting that captures the dramatic aftermath of a gladiatorial
fight. Created in 1884, it symbolizes Filipino nationalism and struggle for freedom. Join me as we delve into this
masterpiece’s history and impact on Philippine art.', '#348520'),
(11, 4, 'art2.jpg', 'Manunggul Jar, a remarkable artifact from the Neolithic period in the Philippines. This ancient
burial jar, found in the Tabon Caves on Palawan, dates back to around 890-710 BCE. Its beautifully intricate design,
featuring human figures rowing a boat, symbolizes the journey to the afterlife. The Manunggul Jar is not only an
important archaeological find but also a testament to the rich cultural heritage and early artistic expression of the
Philippines. Join me as we explore its history and significance in the context of Philippine art.', '#348520'),
(12, 4, 'art3.jpg', 'The traditional practice of planting rice, an essential aspect of Philippine agricultural life.
This artwork captures the laborious yet harmonious process of rice cultivation, from planting the seeds to nurturing the
fields, reflecting the deep connection between the Filipino people and the land. It embodies the strength, community
spirit, and cultural significance of rice farming in the Philippines. Join me as we delve into the artistry and
storytelling behind this evocative piece, which speaks to the resilience and rich heritage of Filipino farmers.',
'#348520');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
`islandOfPersonalityID` int(4) NOT NULL,
`name` varchar(40) NOT NULL,
`shortDescription` varchar(300) DEFAULT NULL,
`longDescription` varchar(2000) DEFAULT NULL,
`color` varchar(10) DEFAULT NULL,
`image` varchar(50) DEFAULT NULL,
`status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`,
`image`, `status`) VALUES
(1, 'Volley Island', 'About Volley Island', 'On this island, I bring my passion for volleyball to life, showcasing my
talent, experience, and competitive spirit. Whether you\'re here to learn about my journey, see my highlights, or find
inspiration for your own game, you\'re in the right place. I compete at various levels and bring a dedication to
excellence that drives me to continuously improve and perform at my best. Join me on this volleyball journey and let\'s
dive into the world of fierce competition, camaraderie, and unforgettable moments.', '#1D2951', 'volley1.jpg',
'active'),
(2, 'Puerto Galera Island', 'About Puerto Galera Island', 'Discover the tropical paradise of Puerto Galera, a stunning
island destination in the Philippines. Known for its crystal-clear waters, vibrant coral reefs, and lush landscapes,
Puerto Galera offers a perfect escape for beach lovers, divers, and adventurers alike. Whether you\'re exploring its
hidden coves, enjoying water sports, or soaking in breathtaking sunsets, this island is a haven of natural beauty and
serenity. Join me as we journey through its wonders and uncover why Puerto Galera is a must-visit destination.',
'#1D2951', 'puerto1.jpg', 'active'),
(3, 'Instrument Island', 'About Instrument Island', 'Dive into the harmonious world of Philippine instruments, where
tradition and music come alive. From the rhythmic beats of the kulintang to the soulful melodies of the kudyapi, this
island celebrates the rich cultural heritage and artistry of Filipino music. Join me as we explore the sounds, stories,
and significance of these timeless instruments that resonate with the heart of the Philippines.', '#1D2951',
'instrument1.jpg', 'active'),
(4, 'Art Island', 'About Art Island', 'Welcome to Art Island! Discover the rich and vibrant world of Philippine art
right here on Art Island. This is where I showcase the diverse artistic expressions, traditions, and creativity of the
Philippines. From contemporary masterpieces to traditional crafts, I share my passion for Filipino art and culture. Join
me as we explore the stories behind each artwork, celebrate our heritage, and delve into the artistic process that
defines the Filipino spirit. Whether you\'re an art enthusiast or simply curious, this is the place to immerse yourself
in the beauty of Philippine artistry.', '#1D2951', 'art1.jpg', 'active');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;