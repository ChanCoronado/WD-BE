-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 06:06 PM
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
(1, 1, 'elementary1.jpg', 'This photo was taken when I was in grade 6 with my classmates. It became a core memory for me because they were my first true friends, my companions, and my support system during my elementary days.', NULL),
(2, 1, 'elementary2.jpg', 'When I was in Grade 4, I started joining extracurricular activities in school, and one of them was becoming part of the drum and lyre ensemble. This became a core memory for me because it taught me how to listen to the right tempo, beat, and rhythm in music, as well as how to play the drums. It was even more memorable because our school achieved 3rd place in our very first competition during the Bangkero Festival in Pagsanjan, Laguna.', NULL),
(3, 1, 'elementary3.jpg', 'During my elementary years, I started representing my school in badminton competitions when I was in Grade 4. This became a core memory for me because it marked the start of my journey as a student-athlete and gave me the opportunity to showcase my passion and skills in the sport I loved. What made it even more special was the pride and joy of playing for my school, creating fun and unforgettable experiences that completed my elementary years.', NULL),
(4, 2, 'hs1.jpg', 'This photo was captured during my 3rd year of high school alongside my class adviser. It wasn’t my first time joining a pageant—it was actually my fourth. However, I consider this a core memory because it was the moment I truly felt the overwhelming support of everyone around me. Their encouragement became my motivation to deliver my best, which led to an unforgettable outcome. I received multiple awards, including Darling of the Crowd, Best in Casual Wear, and 1st Runner-Up, making this experience deeply meaningful to me.', NULL),
(5, 2, 'hs2.jpg', 'When I reached high school, I continued my journey as a student-athlete. I gained new friends, unforgettable experiences, and the opportunity to lead as a team captain. This became one of my core memories because it taught me invaluable life lessons. I learned to stay humble, accept defeat gracefully, and build confidence and trust in both my teammates and myself. It was a chapter that shaped my character and fueled my growth in ways I’ll never forget.', NULL),
(6, 2, 'hs3.jpg', 'There are many moments I could consider core memories from high school, but this one stands out. This photo captures the time I represented our school in a dance competition, where we proudly secured 2nd place. It was more than just a victory—it was an unforgettable experience filled with teamwork, passion, and pride. The joy and excitement we felt during that event left a lasting mark on me, making it a memory I\'ll always cherish.', NULL),
(7, 3, 'srhs1.jpg', 'During my senior high school days, this moment became an unforgettable part of my core memories. It was the day we took the National Certificate II in Computer System Servicing. Out of 14 students, I was one of the four chosen to take the exam first, a privilege granted due to the trust our class adviser had in me. This experience not only boosted my confidence but also inspired me to strive for continuous self-improvement, leaving a lasting impact that I will carry with me in my journey ahead.', NULL),
(8, 3, 'srhs2.jpg', 'Whenever I see this photo, it takes me back to the struggles and sacrifices I made during that time. It marks the first moment I achieved high academic recognition—a dream I had long aspired for. This memory holds a special place in my heart because, despite the immense challenges of studying during the pandemic, I not only managed to persevere but also earned an award I had worked so hard for. It’s a testament to my resilience and determination, making it a core memory I will always cherish.', NULL),
(9, 3, 'srhs3.jpg', 'In my senior high school days, when education was conducted entirely from home due to the pandemic, I joined a group of riders dedicated to providing aid and charity to those in need. This became a core memory for me because it taught me a profound lesson: no matter how stressful academics can be, nothing compares to the joy and smiles of the people you help. Their gratitude became my inspiration, fueling my determination to excel in my studies and continue extending a helping hand to others.', NULL),
(10, 4, 'college1.jpg', 'This photo marks a pivotal moment in my journey toward my dreams. It was taken during my first steps at the Polytechnic University of the Philippines Santo Tomas Campus (PUPSTC) during enrollment period. It became a core memory for me because setting foot in PUP taught me how to be an independent person, the value of prioritizing education, and the beauty of connecting with people from diverse backgrounds who share the same aspirations. This moment wasn\'t just the start of my academic journey; it was the beginning of my growth as a person. #PUPcutie', NULL),
(11, 4, 'college2.jpg', 'As time goes on, we meet people who become our support system, helping us move forward in life. In my college journey, this is one memory I’ll treasure forever. These people, especially our professor, “Sir Cjay,” have left an indelible mark on me. I’m deeply grateful for the experiences they’ve given me—things I never thought I’d encounter since childhood. This photo, taken at BGC, will always hold a special place in my heart and remain a core memory for a lifetime.', NULL),
(12, 4, 'college3.jpg', 'As I continue my college journey as a 3rd-year student, I’ve reached a point in life where I want to explore what I’m truly capable of. This photo holds a special place in my core memories because it reminds me to never be afraid to try new things. It’s a powerful reminder to believe in myself and always think, If they can do it, so can I.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'elementaryIsland', NULL, 'Elementary Island: The Foundation of Dreams \r\nDive into the cherished moments of my early years, where the first sparks of friendship blossomed, the rhythmic echoes of the drum and lyre band filled the air, and the joy of badminton ignited my passion. These are the memories that built the roots of my journey, shaping the person I am today. ', NULL, 'elem.jpg', NULL),
(2, 'highSchoolIsland', NULL, 'High School Island: A Journey to Confidence\r\nStep into the vibrant years where I broke free from my shell, stepping boldly onto pageant stages, smashing shuttlecocks in badminton courts, and dancing my heart out in competitions. This is the story of growth, courage, and finding the spotlight one leap of faith at a time. ', NULL, 'hs.jpg', NULL),
(3, 'seniorHighSchoolIsland', NULL, 'Senior High School Island: Fueled by Passion and Purpose \r\nJoin me as I reflect on the years where dedication to learning earned me an NCII Certificate, and a love for adventure led me to my first long ride with a Riders group committed to helping others. It\'s a journey of hard work, milestones, and meaningful connections on and off the road. ', NULL, 'srhs.jpg', NULL),
(4, 'collegeIsland', NULL, 'College Island: Dreams, Growth, and Discovery \r\nStep into the chapter where my PUP journey began, surrounded by friends who became family and experiences that shaped a new version of me. From chasing dreams to exploring uncharted passions, this island is all about growth, adventure, and self-discovery. ', NULL, 'college.jpg', NULL);

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
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
