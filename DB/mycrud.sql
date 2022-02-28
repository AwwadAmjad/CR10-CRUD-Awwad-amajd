-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 10:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycrud`
--

CREATE TABLE `mycrud` (
  `id` int(13) NOT NULL,
  `Titel` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `publisherName` varchar(20) DEFAULT NULL,
  `publisher_date` datetime DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `type` enum('Book','CD','DVD') DEFAULT 'Book',
  `statut` enum('available','reserved') DEFAULT 'available',
  `authorName` varchar(15) NOT NULL,
  `size` enum('Big','Medium','Small') DEFAULT 'Medium',
  `picture` varchar(255) DEFAULT NULL,
  `IsbnCode` int(50) NOT NULL,
  `description` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycrud`
--

INSERT INTO `mycrud` (`id`, `Titel`, `publisherName`, `publisher_date`, `address`, `type`, `statut`, `authorName`, `size`, `picture`, `IsbnCode`, `description`) VALUES
(1, 'The Hobbit    ', 'Houghton Mifflin ', '1980-08-12 00:00:00', 'SaukCity 19', 'Book', 'reserved', 'J. R. R. Tolkie', 'Medium', '621d289b89c25.jpg', 2147483647, ' we will only consider specific subsets of book information at various stages throughout this section in order to demonstrate different ideas about databases'),
(2, '1984', 'Arkham House ', '1979-12-04 00:00:00', 'Sauk City 19', 'Book', 'available', 'Gerorge Orwell', 'Small', '621d2a8087a98.jpg', 618260307, ' 1984 is a dystopian novella by George Orwell published in 1949 which follows the life of Winston Smith a low ranking member of the Party  who is frustrated by the omnipresent eyes of the party and its ominous ruler Big Brother Big Brother controls every aspect of peoples lives '),
(3, 'Anna Karenina', 'Back Bay Books', '1998-11-07 00:00:00', 'Boulder CO80', 'DVD', 'reserved', 'Leo Tolstory ', 'Small', '621d2b0d98db5.jpg', 2147483647, ' The story centers on an extramarital affair between Anna and dashing cavalry officer Count Alexei Kirillovich Vronsky that scandalizes the social circles of Saint Petersburg and forces the young lovers to flee to Italy in a search for happiness, but after they return to Russia, their lives further unravel'),
(4, 'The Adventures of to', 'Arcade Publishing ', '1999-11-08 00:00:00', 'Boulder CO80', 'DVD', 'available', 'Mark Twain ', 'Medium', '621d2b938f55d.jpg', 2147483647, ' An imaginative and mischievous boy named Tom Sawyer lives with his Aunt Polly and his half-brother, Sid, in the Mississippi River town of St. Petersburg, Missouri. After playing hooky from school on Friday and dirtying his clothes in a fight, Tom is made to whitewash the fence as punishment on Saturday'),
(5, 'Ulysses', 'Berkly Publishing ', '2010-05-06 00:00:00', 'Sauk City 19', 'CD', 'available', 'Jemes Joyce ', 'Big', '621d2ca89f7f9.jpg', 2147483647, 'Ulysses is the Latinised name of Odysseus the hero of Homers epic poem the Odyssey and the novel establishes a series of parallels between the poem and the novel  with structural correspondences between the characters and experiences of Bloom and Odysseus Molly Bloom and Penelope and Stephen Dedalus and Telemachus'),
(6, 'The Brothers Karan ', 'Berkly Publishing ', '2012-07-04 00:00:00', 'SaukCity 19', 'Book', 'reserved', 'Doso', 'Big', '621d2d3476473.jpg', 2147483647, 'Brothers is a 2015 Indian Hindi-language sports drama film, based on Mixed Martial arts (MMA) directed by Karan Malhotra and produced by Dharma Productions'),
(7, 'On the Road ', 'Back Bay Books', '2005-12-30 00:00:00', 'SaukCity 19', 'DVD', 'available', 'Jack Kerouac', 'Big', '621d2dc0544c3.jpg', 2147483647, 'The free-form book describes a series of frenetic trips across the United States by a number of penniless young people who are in love with life, bem and who have absolute contempauty jazz, drugs speed, and mysticist for alarm clocks timetables road maps mortgages pensions and all traditional'),
(8, 'War and Peace ', 'Back Bay Books', '2001-11-08 00:00:00', 'SaukCity 82B', 'DVD', 'reserved', 'Leo Tolstory ', 'Big', '621d2e78e90cd.jpg', 2147483647, 'War and Peace broadly focuses on Napoleons invasion of Russia in 1812 and follows three of the most well-known characters in literature: Pierre Bezukhov, the illegitimate son of a count who is fighting for his inheritance and yearning for spiritual fulfillment Prince Andrei Bolkonsky'),
(9, 'The Metamorphosis', 'Farrar Straus and Gi', '1998-03-09 00:00:00', 'USA City 19', 'Book', 'available', 'Franz Kafka ', 'Medium', '621d2f4a0a546.jpg', 2147483647, 'One of Kafkas best-known works Metamorphosis tells the story of salesman Gregor Samsa, who wakes one morning to find himself inexplicably transformed into a huge insect (ungeheueres Ungeziefer, lit.monstrous vermin and subsequently struggles to adjust to this new condition'),
(10, 'The Illiad ', 'LB Books', '1998-07-05 00:00:00', 'Boulder CO80', 'DVD', 'reserved', 'Homer ', 'Big', '621d2fbde75ad.jpg', 2147483647, 'he Iliad is an epic poem in 24 books that is traditionally attributed to the ancient Greek poet Homer. The epic is about the wrath of the Greek hero Achilles. The subject of this poem is the Trojan War'),
(11, 'The Odyssey ', 'Jeremy P.Tracher', '1999-08-06 00:00:00', 'Boulder 9852', 'DVD', 'available', 'Homer ', 'Small', '621d302355883.jpg', 2147483647, 'The Odyssey is an epic poem in 24 books traditionally attributed to the ancient Greek poet Homer. The poem is the story of Odysseus, king of Ithaca, who wanders for 10 years (although the action of the poem covers only the final six weeks) trying to get home after the Trojan Wa'),
(12, 'The Hobbit    ', 'Houghton Mifflin ', '1970-02-18 00:00:00', 'Boulder UK80', 'Book', 'available', 'J. R. R. Tolkie', 'Medium', '621d313b199c1.jpg', 2147483647, 'Characteristics. Tolkien describes hobbits as between two and four feet (0.6–1.2 m) tall, with the average height being three feet six inches (110 cm). They dress in bright colours, favouring yellow and green'),
(13, ' Slinky Malinki ', 'Mallinson Rendel ', '2005-05-18 00:00:00', 'Sauk City 9870', 'CD', 'available', 'Lynley Dodd', 'Small', '621d31a7e376a.jpg', 2147483647, 'Adventurous cat. By day Slinky Malinki is an adventurous cat, cheeky and cheerful, friendly and fun. But at night he becomes a thief, stealing everything from squishy bananas to milk bottles and pottery smocks'),
(14, 'Hairy Maclary from D', 'Jove Publication ', '1980-05-19 00:00:00', 'SaukCity4S70', 'Book', 'available', 'Darrell Huff', 'Big', '621d32578ce9a.jpg', 2147483647, 'This book addresses the most basic form of irrational fear and raises essential questions about the nature of emotion itself. When Hairy Maclary and his companions are out on a walk around the neighborhood, they see a cat and all run back to their homes'),
(15, 'Mechanical Harry  ', 'Pluma ', '1970-12-20 00:00:00', 'Boston-01', 'Book', 'available', 'Bob Kerr', 'Big', '621d32c04b1e1.jpg', 2147483647, 'Meet Harry Newton. My name is Harry Newton. His ancestor Isaac Newton reckoned that every action has an equal reaction'),
(16, 'My Cat Likes to Hide', 'Penguin USA ', '2017-10-12 00:00:00', 'Sauk City los angelus ', 'DVD', 'available', 'Eva Sutton', 'Small', '621d3349acc43.jpg', 2147483647, 'Cats love to get themselves into small spaces like drawers, sinks, under beds and in boxes because those places make them feel warm, safe and secure. ... Cats often love being up high so think secure shelves, a comfortable bed on a table or in a cupboard as these are often places cats will like');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycrud`
--
ALTER TABLE `mycrud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mycrud`
--
ALTER TABLE `mycrud`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
