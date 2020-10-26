-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 10:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `logins_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `logins_id`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(50) NOT NULL,
  `isbn_no` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `stock_quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `isbn_no`, `code`, `title`, `author`, `description`, `publisher_name`, `year`, `price`, `category_id`, `stock_quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'E34942', 'E34942', 'In Search of Lost Time ', 'Marcel Proust', 'Swann\'s Way, the first part of A la recherche de temps perdu, Marcel Proust\'s seven-part cycle, was published in 1913. In it, Proust introduces the themes that run through the entire work. ', 'Penguin Classics', 2004, '690', 2, 98, '2018-11-08 06:54:37', NULL, NULL),
(2, 'ISBN13: 9780061122415', 'ISBN13: 9780061122415', 'The Alchemist', 'Paulo Coelho', 'Paulo Coelho\'s masterpiece tells the mystical story of Santiago, an Andalusian shepherd boy who yearns to travel in search of a worldly treasure. His quest will lead him to riches far different—and far more satisfying—than he ever imagined.', 'HarperCollins', 1988, '1450', 2, 50, '2018-11-08 07:27:31', NULL, NULL),
(3, 'ISBN13: 9780525478812', 'ISBN13: 9780525478812', 'The Fault in Our Stars', 'John Green', 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. ', 'Dutton Books', 2012, '1450', 2, 50, '2018-11-08 07:32:27', NULL, NULL),
(4, 'ISBN13: 9780439064866', 'ISBN13: 9780439064866', 'Harry Potter and the Chamber of Secrets', 'J.K Rowling', 'The Dursleys were so mean and hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he\'s packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike', 'Arthur A. Levine Books', 1999, '2500', 3, 500, '2018-11-08 07:34:34', NULL, NULL),
(5, 'ISBN13: 9780142437209', 'ISBN13: 9780142437209', 'Jane Eyre', ' Charlotte Bronte', 'Fiery love, shocking twists of fate, and tragic mysteries put a lonely governess in jeopardy in JANE EYRE  Orphaned as a child, Jane has felt an outcast her whole young life. Her courage is tested once again when she arrives at Thornfield Hall, where she has been hired by the brooding, proud Edward Rochester to care for his ward Adele. ', 'Penguin Classics', 1995, '450', 2, 50, '2018-11-08 07:38:17', NULL, NULL),
(6, 'ISBN13: 9781594480003', 'ISBN13: 9781594480003', 'The Kite Runner', ' Khaled Hosseini', 'Amir is the son of a wealthy Kabul merchant, a member of the ruling caste of Pashtuns. Hassan, his servant and constant companion, is a Hazara, a despised and impoverished caste. ', 'Riverhead Books', 2003, '1500', 4, 120, '2018-11-08 07:41:12', NULL, NULL),
(7, 'ISBN13: 9780439023498', 'ISBN13: 9780439023498', 'Catching Fire', 'Suzanne Collins', 'Against all odds, Katniss has won the Hunger Games. She and fellow District 12 tribute Peeta Mellark are miraculously still alive. Katniss should be relieved, happy even. After all, she has returned to her family and her longtime friend, Gale. Yet nothing is the way Katniss wishes it to be.', 'Scholastic Press', 2009, '650', 2, 50, '2018-11-08 07:43:30', NULL, NULL),
(8, 'ISBN13: 9780307277671', 'ISBN13: 9780307277671', 'The Da Vinci Code', ' Dan Brown', 'While in Paris, Harvard symbologist Robert Langdon is awakened by a phone call in the dead of the night. The elderly curator of the Louvre has been murdered inside the museum, his body covered in baffling symbols. ', 'Anchor ', 2003, '450', 3, 50, '2018-11-08 07:45:24', NULL, NULL),
(9, 'ISBN13: 9780439655484', 'ISBN13: 9780439655484', 'Harry Potter and the Prisoner of Azkaban', 'J.K Rowling', 'Harry Potter\'s third year at Hogwarts is full of new dangers. A convicted murderer, Sirius Black, has broken out of Azkaban prison, and it seems he\'s after Harry. Now Hogwarts is being patrolled by the dementors, the Azkaban guards who are hunting Sirius. But Harry can\'t imagine that Sirius or, for that matter, the evil Lord Voldemort could be more frightening than the dementors themselves', 'Scholastic Inc', 2004, '2500', 3, 50, '2018-11-08 07:47:16', NULL, NULL),
(10, 'ISBN13: 9780439139601', 'ISBN13: 9780439139601', 'Harry Potter and the Goblet of Fire', 'J.K Rowling', 'Harry Potter is midway through his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup. He wants to find out about the mysterious event that\'s supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn\'t happened for a hundred years. ', 'Anchor ', 2004, '2500', 3, 50, '2018-11-08 07:48:24', NULL, NULL),
(11, 'ISBN13: 9780439358071', 'ISBN13: 9780439358071', 'Harry Potter and the Order of the Phoenix', 'J.K Rowling', 'There is a door at the end of a silent corridor. And it’s haunting Harry Pottter’s dreams. Why else would he be waking in the middle of the night, screaming in terror?', 'Anchor ', 2004, '2500', 3, 50, '2018-11-08 07:49:54', NULL, NULL),
(12, 'ISBN13: 9780439785969', 'ISBN13: 9780439785969', 'Harry Potter and the Half-Blood Prince', 'J.K Rowling', 'When Harry Potter and the Half-Blood Prince opens, the war against Voldemort has begun. The Wizarding world has split down the middle, and as the casualties mount, the effects even spill over onto the Muggles. Dumbledore is away from Hogwarts for long periods, and the Order of the Phoenix has suffered grievous losses. And yet, as in all wars, life goes on.', 'Anchor ', 2004, '2500', 3, 50, '2018-11-08 07:50:53', NULL, NULL),
(13, 'ISBN13: 9780545010221', 'ISBN13: 9780545010221', 'Harry Potter and the Deathly Hallows', 'J.K Rowling', 'Harry Potter is leaving Privet Drive for the last time. But as he climbs into the sidecar of Hagrid’s motorbike and they take to the skies, he knows Lord Voldemort and the Death Eaters will not be far behind.', 'Arthur A. Levine Books', 2004, '2500', 3, 50, '2018-11-08 07:52:05', NULL, NULL),
(14, 'ISBN13: 9780316015844', 'ISBN13: 9780316015844', 'Twilight', 'Stephenie Meyer', 'In the first book of the Twilight Saga, internationally bestselling author Stephenie Meyer introduces Bella Swan and Edward Cullen, a pair of star-crossed lovers whose forbidden relationship ripens against the backdrop of small-town suspicion and a mysterious coven of vampires. This is a love story with bite.', 'Little, Brown and Company ', 2006, '2400', 3, 50, '2018-11-08 07:53:22', NULL, NULL),
(15, 'ISBN13: 978006189562', 'ISBN13: 978006189562', 'Steve Jobs', 'Walter Isaacson', 'Steve Jobs is the authorized self-titled biography book of Steve Jobs. The book was written at the request of Jobs by Walter Isaacson, a former executive at CNN and TIME who has written best-selling biographies of Benjamin Franklin and Albert Einstein.', 'Simon & Schuster (U.S.)', 2011, '680', 1, 30, '2018-11-08 07:58:18', NULL, NULL),
(16, 'ISBN13: 978006185623', 'ISBN13: 978006185623', 'Long Walk to Freedom', 'Nelson Mandela', 'Long Walk to Freedom is an autobiography written by South African President Nelson Mandela, and first published in 1994 by Little Brown & Co. The book profiles his early life, coming of age, education and 27 years in prison. ', 'Penguin Classics', 1994, '490', 1, 50, '2018-11-08 08:00:09', NULL, NULL),
(17, 'ISBN13: 9780142435662', 'ISBN13: 9780142435662', 'Fundamentals of Physics', ' David Halliday', 'Fundamentals of Physics is a calculus-based physics textbook by David Halliday, Robert Resnick, and Jearl Walker. The textbook is currently in its tenth edition.', 'Orelly', 1990, '450', 5, 50, '2018-11-08 08:02:22', NULL, NULL),
(18, 'ISBN13: 978014543645', 'ISBN13: 978014543645', 'Chemistry for Dummies', 'John T. Moore', 'Banish bafflement in this tough subject! From formulas and lab techniques to the periodic table, Chemistry for the Utterly Confused focuses on the areas of maximum confusion and breaks down the most difficult chemistry topics into easy-to-understand concepts', 'CoAuthor Publishers', 2013, '850', 5, 60, '2018-11-08 08:04:26', NULL, NULL),
(19, 'ISBN13: 97808978189562', 'ISBN13: 97808978189562', 'Love Story', 'Erich Segal', 'Love Story is a 1970 romance novel by American writer Erich Segal. The book\'s origins lay in a screenplay that Segal wrote, and that was subsequently approved for production by Paramount Pictures. Paramount requested that Segal adapt the story into novel form as a preview of sorts for the film. ', 'Harper & Row (USA), Hodder & Stoughton (UK)', 1970, '560', 6, 50, '2018-11-08 08:06:15', NULL, NULL),
(20, 'ISBN13: 978046577209', 'ISBN13: 978046577209', 'Fifty Shades Darker', 'E. L. James', 'Fifty Shades Darker is a 2012 erotic romance novel by British author E. L. James. It is the second installment in the Fifty Shades trilogy that traces the deepening relationship between a college graduate, Anastasia Steele, and a young business magnate, Christian Grey.', 'Audilib', 2012, '690', 6, 50, '2018-11-08 08:07:57', NULL, NULL),
(21, 'ISBN13: 9787383185623', 'ISBN13: 9787383185623', 'Fallen', 'Lauren Kate', 'Fallen is the first novel in the Fallen series written by Lauren Kate. It is a young adult, fantasy, paranormal romance published in 2009 under Delacorte Press. ', 'Debra Bogart', 2009, '460', 6, 50, '2018-11-08 08:09:31', NULL, NULL),
(22, 'ISBN13: 89416131264', 'ISBN13: 89416131264', 'Oxford English Dictionary', 'Oxford', 'The Oxford English Dictionary is the principal historical dictionary of the English language, published by Oxford University Press. ', 'Oxford University Press', 0000, '990', 7, 100, '2018-11-08 08:11:17', NULL, NULL),
(23, 'ISBN: 9780071453875', 'ISBN: 9780071453875', 'Easy French Step-by-Step', 'Myrna Bell Rochester', 'Get up and running with French Easy French Step-by-Step proves that a solid grounding in grammar basics is the key to mastering a second language. You are quickly introduced to grammatical rules and concepts in order of importance, which you can build on as you progress through the book.', 'Mc Grow Hill', 2008, '450', 7, 50, '2018-11-08 08:13:28', NULL, NULL),
(24, 'ISBN:9780241292808', 'ISBN:9780241292808', 'Peppa Pig ', 'Lady Bird', 'Ladybird Read It Yourself: Peppa Pig Story Collection', 'Read It Yourself', 2008, '1500', 8, 60, '2018-11-08 08:18:32', NULL, NULL),
(25, 'ISBN13: 9780658122415', 'ISBN13: 9780658122415', 'Planet Earth', 'Lady Bird', 'Hi-Res Cover Read it Yourself with Ladybird: Level 3: Planet Earth', 'Read It Yourself', 2008, '200', 8, 60, '2018-11-08 08:20:17', NULL, NULL),
(26, 'ISBN13: 9780056875623', 'ISBN13: 9780056875623', 'Twilight Saga - New Moon', 'Stephenie Meyer', 'I stuck my finger under the edge of the paper and jerked it under the tape. \'Shoot,\' I muttered when the paper sliced my finger. A single drop of blood oozed from the tiny cut. It all happened very quickly then. \'No!\' Edward roared ... Dazed and disorientated, I looked up from the bright red blood pulsing out of my arm - and into the fevered eyes of the six suddenly ravenous vampires.', 'Kindle Edition', 2006, '2560', 3, 20, '2018-11-09 11:08:01', NULL, NULL),
(27, 'ISBN13: 954656185623', 'ISBN13: 954656185623', 'Twilight Saga - Eclipse', 'Stephenie Meyer', 'Bella?\' Edward\'s soft voice came from behind me. I turned to see him spring lightly up the porch steps, his hair windblown from running. He pulled me into his arms at once, and kissed me again. His kiss frightened me. There was too much tension, too strong an edge to the way his lips crushed mine - like he was afraid we had only so much time left to us.', 'Kindle Edition', 2007, '2560', 3, 20, '2018-11-09 11:11:30', NULL, NULL),
(28, 'ISBN13: 9754375875623', 'ISBN13: 9754375875623', 'Twilight Saga - Breaking Dawn', 'Stephenie Meyer', 'To be irrevocably in love with a vampire is both fantasy and nightmare woven into a dangerously heightened reality for Bella Swan. Pulled in one direction by her intense passion for Edward Cullen, and in another by her profound connection to werewolf Jacob Black, she has endured a tumultuous year of temptation, loss and strife to reach the ultimate turning point. Her imminent choice to either join the dark but seductive world of immortals or pursue a fully human life has become the thread from which the fate ', 'Kindle Edition', 2008, '2560', 3, 20, '2018-11-09 11:12:57', NULL, NULL),
(30, 'ISBN13: 975435675623', 'ISBN13: 975435675623', 'Evermore The Immortals', ' Alyson Noel', 'After a horrible accident claimed the lives of her family, sixteen-year-old Ever Bloom can see people\'s auras, hear their thoughts, and know someone\'s entire life story by touching them. Going out of her way to avoid human contact and suppress her abilities, she has been branded a freak at her new high school?but everything changes when she meets Damen Auguste.', 'Kindle Edition', 2009, '2580', 3, 20, '2018-11-09 11:19:33', NULL, NULL),
(31, 'ISBN13: 954675885623', 'ISBN13: 954675885623', 'Wind Rider Tales of a New World', 'P. C. Cast', ' New York Times bestselling author of the House of Night series, P.C. Cast, brings us Wind Rider, an epic fantasy set in a world where humans, their animal allies, and the earth itself has been drastically changed. A world filled with beauty and danger and cruelty…  Mari, Nik, and their newly formed Pack are being hunted. Thaddeus and the God of Death will stop at nothing until they are obliterated from the earth. But Mari and Nik have one goal: to reach the plains of the Wind Riders, in order to band together to stop Thaddeus from destroying all that Mari and Nik hold dear.', 'Hardcover – Deckle Edge', 2018, '2680', 3, 20, '2018-11-09 11:22:15', NULL, NULL),
(32, 'fiefb6879', 'fiefb6879', 'The Journey Book', 'Aaron Becker', 'Follow a girl on an elaborate flight of fancy in a wondrously illustrated, wordless picture book about self-determination -- and unexpected friendship.', 'Candlewick Press', 2013, '80', 9, 50, '2019-01-26 19:12:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_image`
--

CREATE TABLE `book_image` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `file_ext` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_image`
--

INSERT INTO `book_image` (`id`, `book_id`, `file_path`, `file_ext`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/In_Search_of_Lost_Time__51A685AMYoL.jpg', '.jpg', '2018-11-08 06:54:37', NULL),
(2, 2, 'uploads/The_Alchemist_865.jpg', '.jpg', '2018-11-08 07:27:31', NULL),
(3, 3, 'uploads/The_Fault_in_Our_Stars_81yAo5ElQlL.jpg', '.jpg', '2018-11-08 07:32:27', NULL),
(4, 4, 'uploads/Harry_Potter_and_the_Chamber_of_Secrets_15881.jpg', '.jpg', '2018-11-08 07:34:34', NULL),
(5, 5, 'uploads/Jane_Eyre_d86150f8993b77fe8135f91a0fb016015707cb2d.jpg', '.jpg', '2018-11-08 07:38:18', NULL),
(6, 6, 'uploads/The_Kite_Runner_77203.jpg', '.jpg', '2018-11-08 07:41:12', NULL),
(7, 7, 'uploads/Catching_Fire_Catching_Fire_(Suzanne_Collins_novel_-_cover_art).jpg', '.jpg', '2018-11-08 07:43:30', NULL),
(8, 8, 'uploads/The_Da_Vinci_Code_968.jpg', '.jpg', '2018-11-08 07:45:24', NULL),
(9, 9, 'uploads/Harry_Potter_and_the_Prisoner_of_Azkaban_5.jpg', '.jpg', '2018-11-08 07:47:16', NULL),
(10, 10, 'uploads/Harry_Potter_and_the_Goblet_of_Fire_6.jpg', '.jpg', '2018-11-08 07:48:24', NULL),
(11, 11, 'uploads/Harry_Potter_and_the_Order_of_the_Phoenix_9780439358071_mres.jpg', '.jpg', '2018-11-08 07:49:54', NULL),
(12, 12, 'uploads/Harry_Potter_and_the_Half-Blood_Prince_1.jpg', '.jpg', '2018-11-08 07:50:54', NULL),
(13, 13, 'uploads/Harry_Potter_and_the_Deathly_Hallows_136251.jpg', '.jpg', '2018-11-08 07:52:05', NULL),
(14, 14, 'uploads/Twilight_41865.jpg', '.jpg', '2018-11-08 07:53:22', NULL),
(15, 15, 'uploads/Steve_Jobs_81VStYnDGrL.jpg', '.jpg', '2018-11-08 07:58:18', NULL),
(16, 16, 'uploads/Long_Walk_to_Freedom_images.jpg', '.jpg', '2018-11-08 08:00:09', NULL),
(17, 17, 'uploads/Fundamentals_of_Physics_images_(1).jpg', '.jpg', '2018-11-08 08:02:22', NULL),
(18, 18, 'uploads/Chemistry_for_Dummies_images_(2).jpg', '.jpg', '2018-11-08 08:04:26', NULL),
(19, 19, 'uploads/Love_Story_images_(3).jpg', '.jpg', '2018-11-08 08:06:15', NULL),
(20, 20, 'uploads/Fifty_Shades_Darker_images_(4).jpg', '.jpg', '2018-11-08 08:07:58', NULL),
(21, 21, 'uploads/Fallen_images_(5).jpg', '.jpg', '2018-11-08 08:09:31', NULL),
(22, 22, 'uploads/Oxford_English_Dictionary_images_(6).jpg', '.jpg', '2018-11-08 08:11:17', NULL),
(23, 23, 'uploads/Easy_French_Step-by-Step_images_(7).jpg', '.jpg', '2018-11-08 08:13:28', NULL),
(24, 24, 'uploads/Peppa_Pig__PPRI.jpg', '.jpg', '2018-11-08 08:18:32', NULL),
(25, 25, 'uploads/Planet_Earth_9780241237380.jpg', '.jpg', '2018-11-08 08:20:17', NULL),
(26, 26, 'uploads/Twilight_Saga_-_New_Moon_41IB9Mmv4EL.jpg', '.jpg', '2018-11-09 11:08:02', NULL),
(27, 27, 'uploads/Twilight_Saga_-_Eclipse_41jatCu13eL.jpg', '.jpg', '2018-11-09 11:11:30', NULL),
(28, 28, 'uploads/Twilight_Saga_-_Breaking_Dawn_41N9nGmLPpL.jpg', '.jpg', '2018-11-09 11:12:57', NULL),
(30, 30, 'uploads/Evermore_The_Immortals_hubvjfb.jpg', '.jpg', '2018-11-09 11:19:33', NULL),
(31, 31, 'uploads/Wind_Rider_Tales_of_a_New_World_dgngrnrg_.jpg', '.jpg', '2018-11-09 11:22:15', NULL),
(32, 32, 'uploads/The_Journey_Book_journey-aaron-becker-1.jpg', '.jpg', '2019-01-26 19:12:17', NULL),
(33, 34, 'C:/xampp/htdocs/ashbooks/uploads/hdike_0_ZzW3tuOa7XDezaEk.png', '.png', '2019-01-28 16:42:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_view_history`
--

CREATE TABLE `book_view_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `category_created_at`, `updated_at`) VALUES
(1, 'Bibliography', '2018-11-07 10:08:47', '2018-11-07 10:08:39'),
(2, 'Novels', '2018-11-07 10:08:48', '2018-11-07 10:08:40'),
(3, 'Science Fictions and Fantasy', '2018-11-07 10:08:49', '2018-11-07 10:08:31'),
(4, 'Short Stories and Anthologies', '2018-11-07 10:08:51', '2018-11-07 10:08:32'),
(5, 'Education', '2018-11-07 10:08:52', '2018-11-07 10:08:30'),
(6, 'Romantic Fictions', '2018-11-07 10:08:54', '2018-11-07 10:08:29'),
(7, 'Language', '2018-11-07 10:08:55', '2018-11-07 10:08:26'),
(8, 'Kids', '2018-11-07 10:08:57', '2018-11-07 10:08:27'),
(9, 'Journey', NULL, NULL),
(11, 'Fanfictions', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(50) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(11) NOT NULL,
  `user_data_text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `session_id`, `name`, `timestamp`) VALUES
(1, 'ktuo8pn7emje2mre2rl8aedphpb9hrmm', 'admin', NULL),
(2, 'rm13mjsn7tt2aga2rnq87fro5o9i3uif', 'admin', NULL),
(3, 'ktuo8pn7emje2mre2rl8aedphpb9hrmm', 'admin', NULL),
(4, '60lu6cphlj7ce2mimfavnd358oc2smv8', 'admin', NULL),
(5, '60lu6cphlj7ce2mimfavnd358oc2smv8', 'admin', NULL),
(6, '60lu6cphlj7ce2mimfavnd358oc2smv8', 'admin', NULL),
(7, 't3s749bbht2ikg23fhcu780krfb3kv8s', 'admin', NULL),
(8, '0u19pfiajrpmol199220rk1fsr3k6lg0', 'admin', NULL),
(9, 'bkfol9av996kdt8frp3nhfutf031vr16', 'admin', NULL),
(10, 'bkfol9av996kdt8frp3nhfutf031vr16', 'admin', NULL),
(11, 'bkfol9av996kdt8frp3nhfutf031vr16', 'admin', '2018-11-06 07:05:07'),
(12, '20u7355r9qsb7c9sbl41lopa63pt09uv', 'admin', NULL),
(13, 't6qomsb11nkjcvv5emqpovtur0pr4lm1', 'admin', NULL),
(14, 't6qomsb11nkjcvv5emqpovtur0pr4lm1', 'admin', NULL),
(15, 'lb1a36uem9kvj267morbolhkg455buco', 'admin', NULL),
(16, 'bh445fu7ft7mo4vanpo1r0iscnuhgm18', 'admin', NULL),
(17, '9rbksq2vumfsqsr2n7jmdpavehsu52e8', 'admin', NULL),
(18, 'lq7kfmbhus16up56f39jk0h0jvevac6q', 'admin', NULL),
(19, '72c0k8skip5d5g417185gherajnjjb4h', 'admin', NULL),
(20, 'm0aersl8qu2155b89qj2m1ejuug87f09', 'admin', NULL),
(21, 'mt4uqgioccajjhg8d08m2ib9np5rcht5', 'admin', NULL),
(22, 'fsdje5k64r5l5pub96s0uoh0s483auu7', 'admin', NULL),
(23, 'fsdje5k64r5l5pub96s0uoh0s483auu7', 'admin', NULL),
(24, 'mlafvekrcq7t1jmbnfdutn7hoabc2v1u', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `user_id`, `book_id`, `quantity`, `session_id`, `total`, `timestamp`) VALUES
(1, 'glhbn9tmacvalj462ug71nag5t98pcdc', 15, 1, '9bf31c7ff062936a96d3c8bd1f8f2ff3', '680', '2019-01-27 12:20:53'),
(2, 'e62vj66c82pbce28b35ruquojabql9v9', 9, 1, '45c48cce2e2d7fbdea1afc51c7c6ad26', '2500', '2019-01-27 12:21:25'),
(3, 'e62vj66c82pbce28b35ruquojabql9v9', 9, 1, '45c48cce2e2d7fbdea1afc51c7c6ad26', '2500', '2019-01-27 12:21:29'),
(5, 'e62vj66c82pbce28b35ruquojabql9v9', 9, 1, '45c48cce2e2d7fbdea1afc51c7c6ad26', '2500', '2019-01-27 12:21:31'),
(7, 'vsnqm3a7pds08i5kv0d7t2lkac0pmhll', 9, 1, '45c48cce2e2d7fbdea1afc51c7c6ad26', '2500', '2019-01-27 12:31:42'),
(8, 'vsnqm3a7pds08i5kv0d7t2lkac0pmhll', 5, 1, 'e4da3b7fbbce2345d7772b0674a318d5', '450', '2019-01-27 12:31:42'),
(15, 'ub6iicod2dslv0mpdi3ls86ek1iu4ths', 24, 2, '1ff1de774005f8da13f42943881c655f', '3000', '2019-01-27 13:17:47'),
(16, 'e9d6esh7cm7n6nmea3e842lm98ugtsop', 24, 2, '1ff1de774005f8da13f42943881c655f', '3000', '2019-01-27 13:22:15'),
(17, 'e9d6esh7cm7n6nmea3e842lm98ugtsop', 5, 1, 'e4da3b7fbbce2345d7772b0674a318d5', '450', '2019-01-27 13:22:15'),
(18, '1u2m5s3ihh4isegqft3lrmurgfh5kapo', 24, 2, '1ff1de774005f8da13f42943881c655f', '3000', '2019-01-27 13:25:34'),
(19, '1u2m5s3ihh4isegqft3lrmurgfh5kapo', 5, 1, 'e4da3b7fbbce2345d7772b0674a318d5', '450', '2019-01-27 13:25:34'),
(20, '1u2m5s3ihh4isegqft3lrmurgfh5kapo', 3, 4, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '5800', '2019-01-27 13:25:35'),
(21, 'm153g5dov5p3fl9lildit7jhj65m44ft', 24, 2, '1ff1de774005f8da13f42943881c655f', '3000', '2019-01-27 13:36:11'),
(22, 'm153g5dov5p3fl9lildit7jhj65m44ft', 5, 1, 'e4da3b7fbbce2345d7772b0674a318d5', '450', '2019-01-27 13:36:11'),
(23, 'm153g5dov5p3fl9lildit7jhj65m44ft', 3, 4, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '5800', '2019-01-27 13:36:11'),
(24, 'm153g5dov5p3fl9lildit7jhj65m44ft', 25, 1, '8e296a067a37563370ded05f5a3bf3ec', '200', '2019-01-27 13:36:11'),
(25, 't982iheihsi6om6l6ogg1d0i51b4lpn3', 18, 1, '6f4922f45568161a8cdf4ad2299f6d23', '850', '2019-01-28 00:11:28'),
(26, 't982iheihsi6om6l6ogg1d0i51b4lpn3', 18, 1, '6f4922f45568161a8cdf4ad2299f6d23', '850', '2019-01-28 00:11:32'),
(28, 't982iheihsi6om6l6ogg1d0i51b4lpn3', 18, 1, '6f4922f45568161a8cdf4ad2299f6d23', '850', '2019-01-28 00:11:34'),
(30, 't982iheihsi6om6l6ogg1d0i51b4lpn3', 18, 1, '6f4922f45568161a8cdf4ad2299f6d23', '850', '2019-01-28 00:11:48'),
(32, 't982iheihsi6om6l6ogg1d0i51b4lpn3', 24, 1, '1ff1de774005f8da13f42943881c655f', '1500', '2019-01-28 00:11:49'),
(36, 'a6klnbhvo4sqvlqopdata5sf56rcm4i2', 8, 5, 'c9f0f895fb98ab9159f51fd0297e236d', '2250', '2019-01-28 11:08:50'),
(37, 'a6klnbhvo4sqvlqopdata5sf56rcm4i2', 8, 5, 'c9f0f895fb98ab9159f51fd0297e236d', '2250', '2019-01-28 11:09:06'),
(38, '2lrsngv83f3a5g6t7tb4c8q0he7oi5vj', 1, 2, 'c4ca4238a0b923820dcc509a6f75849b', '1380', '2020-10-24 03:45:42'),
(39, 'mlafvekrcq7t1jmbnfdutn7hoabc2v1u', 4, 2, 'a87ff679a2f3e71d9181a67b7542122c', '5000', '2020-10-24 11:27:52'),
(40, 'g1ab3gegbe8klti09cckvb065lpqa7a4', 1, 1, 'c4ca4238a0b923820dcc509a6f75849b', '690', '2020-10-24 11:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unique_user_id` varchar(255) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_user_id`, `book_id`, `timestamp`) VALUES
(41, '5be8f22a1d97f', 4, '2018-11-11 23:02:01'),
(42, '5be8f22a1d97f', 4, '2018-11-11 23:02:51'),
(43, '5be8f22a1d97f', 4, '2018-11-11 23:04:31'),
(44, '5be8f22a1d97f', 4, '2018-11-11 23:05:05'),
(45, '5be8efbfa2798', 4, '2018-11-11 23:05:13'),
(46, '5be8efbfa2798', 5, '2018-11-11 23:05:27'),
(47, '5be8f22a1d97f', 4, '2018-11-11 23:05:31'),
(48, '5be8efbfa2798', 5, '2018-11-11 23:05:43'),
(49, '5be8f22a1d97f', 4, '2018-11-11 23:06:49'),
(50, '5be8efbfa2798', 5, '2018-11-11 23:15:33'),
(51, '5be8efbfa2798', 5, '2018-11-11 23:15:55'),
(52, '5be8efbfa2798', 5, '2018-11-11 23:16:50'),
(53, '5be8f22a1d97f', 4, '2018-11-11 23:16:57'),
(54, '5be8efbfa2798', 18, '2018-11-11 23:17:08'),
(55, '5be8f22a1d97f', 4, '2018-11-11 23:17:12'),
(56, '5be8efbfa2798', 18, '2018-11-11 23:17:18'),
(57, '5be8f22a1d97f', 16, '2018-11-11 23:17:26'),
(58, '5be8efbfa2798', 18, '2018-11-11 23:17:31'),
(59, '5be8efbfa2798', 21, '2018-11-11 23:17:37'),
(60, '5be8efbfa2798', 25, '2018-11-11 23:17:49'),
(61, '5be8f22a1d97f', 16, '2018-11-11 23:17:53'),
(62, '5be8efbfa2798', 6, '2018-11-11 23:18:11'),
(63, '5be8f22a1d97f', 16, '2018-11-11 23:18:14'),
(64, '5be8f22a1d97f', 16, '2018-11-11 23:26:00'),
(65, '5be8f22a1d97f', 6, '2018-11-11 23:26:02'),
(66, '5be8efbfa2798', 1, '2018-11-12 02:30:51'),
(67, '5be8efbfa2798', 2, '2018-11-12 02:30:59'),
(68, '5be8efbfa2798', 2, '2018-11-12 02:31:07'),
(69, '5be8efbfa2798', 15, '2018-11-12 02:31:29'),
(70, '5be8efbfa2798', 2, '2018-11-12 02:31:38'),
(71, '5be8efbfa2798', 3, '2018-11-12 02:31:45'),
(72, '5be8efbfa2798', 3, '2018-11-12 02:32:21'),
(73, '5be8f22a1d97f', 25, '2018-11-12 02:35:26'),
(74, '5be8f22a1d97f', 25, '2018-11-12 02:35:39'),
(75, '5be8f22a1d97f', 2, '2018-11-12 02:35:43'),
(76, '5be926738ce34', 15, '2018-11-12 02:36:40'),
(77, '5be926738ce34', 25, '2018-11-12 02:36:51'),
(78, '5be9973256a04', 26, '2018-11-12 10:38:38'),
(79, '5be9973256a04', 26, '2018-11-12 10:40:56'),
(80, '5be9973256a04', 15, '2018-11-12 10:41:09'),
(81, '5be9973256a04', 15, '2018-11-12 10:41:21'),
(82, '5be9973256a04', 21, '2018-11-12 10:45:54'),
(83, '5be99a0de1ab1', 7, '2018-11-12 10:50:11'),
(84, '5be99a0de1ab1', 7, '2018-11-12 10:50:15'),
(85, '5be9973256a04', 21, '2018-11-12 10:50:22'),
(86, '5be99a0de1ab1', 7, '2018-11-12 10:50:32'),
(87, '5bf42dd90b37f', 16, '2018-11-20 11:24:55'),
(88, '5bf50cec44fda', 16, '2018-11-21 03:14:49'),
(89, '5bf58306563cb', 1, '2018-11-21 11:38:38'),
(90, '5bf58306563cb', 22, '2018-11-21 11:39:04'),
(91, '5bf583415d9c1', 1, '2018-11-21 11:40:08'),
(92, '5bf583415d9c1', 31, '2018-11-21 11:40:28'),
(93, '5bf58306563cb', 22, '2018-11-21 11:40:43'),
(94, '5c1a282d631c1', 31, '2018-12-19 06:44:53'),
(95, '5c43fe6f3bb55', 15, '2019-01-20 00:52:01'),
(96, '5c4ca21b09d70', 32, '2019-01-26 13:43:40'),
(97, '5c4ca21b09d70', 32, '2019-01-26 13:45:26'),
(98, '5c4ca49148908', 31, '2019-01-26 13:48:57'),
(99, '5c4ca49148908', 20, '2019-01-26 13:49:15'),
(100, '5c4d68e003d28', 15, '2019-01-27 03:46:38'),
(101, '5c4d68e003d28', 18, '2019-01-27 05:46:54'),
(102, '5c4d68e003d28', 25, '2019-01-27 05:47:14'),
(103, '5c4d68e003d28', 20, '2019-01-27 05:53:45'),
(104, '5c4d68e003d28', 2, '2019-01-27 06:09:38'),
(105, '5c4d68e003d28', 3, '2019-01-27 07:16:56'),
(106, '5c4d68e003d28', 17, '2019-01-27 07:19:22'),
(107, '5c4db432e2fad', 15, '2019-01-27 09:08:03'),
(108, '5c4db432e2fad', 1, '2019-01-27 11:07:56'),
(109, '5c4db432e2fad', 8, '2019-01-27 11:12:19'),
(110, '5c4db432e2fad', 3, '2019-01-27 11:17:39'),
(111, '5c4db432e2fad', 16, '2019-01-27 11:20:00'),
(112, '5c4db432e2fad', 3, '2019-01-27 11:30:06'),
(113, '5c4db432e2fad', 3, '2019-01-27 11:56:13'),
(114, '5c4db432e2fad', 7, '2019-01-27 12:02:46'),
(115, '5c4ddd4bb499d', 3, '2019-01-27 12:03:15'),
(116, '5c4ddd4bb499d', 5, '2019-01-27 12:03:23'),
(117, '5c4ddd4bb499d', 16, '2019-01-27 12:16:07'),
(118, '5c4ddd4bb499d', 25, '2019-01-27 12:17:31'),
(119, '5c4ddd4bb499d', 15, '2019-01-27 12:20:49'),
(120, '5c4ddd4bb499d', 9, '2019-01-27 12:21:22'),
(121, '5c4ddd4bb499d', 5, '2019-01-27 12:31:39'),
(122, '5c4ddd4bb499d', 21, '2019-01-27 12:49:26'),
(123, '5c4ddd4bb499d', 12, '2019-01-27 12:49:36'),
(124, '5c4ddd4bb499d', 21, '2019-01-27 13:14:24'),
(125, '5c4ddd4bb499d', 24, '2019-01-27 13:17:43'),
(126, '5c4ddd4bb499d', 5, '2019-01-27 13:22:12'),
(127, '5c4ddd4bb499d', 3, '2019-01-27 13:25:30'),
(128, '5c4ddd4bb499d', 25, '2019-01-27 13:36:07'),
(129, '5c4e87e749dff', 18, '2019-01-28 00:11:17'),
(130, '5c4e87e749dff', 24, '2019-01-28 00:11:43'),
(131, '5c4efb2d988af', 20, '2019-01-28 08:23:01'),
(132, '5c4efb2d988af', 16, '2019-01-28 09:26:57'),
(133, '5c4efb2d988af', 16, '2019-01-28 11:07:29'),
(134, '5c4efcf099f44', 8, '2019-01-28 11:08:09'),
(135, '5c4efcf099f44', 6, '2019-01-28 11:09:02'),
(136, '5f93aa3edebd9', 1, '2020-10-24 03:44:20'),
(137, '5f93aa3edebd9', 1, '2020-10-24 03:45:21'),
(138, '5f93aa3edebd9', 1, '2020-10-24 03:45:32'),
(139, '5f93aa3edebd9', 15, '2020-10-24 04:01:32'),
(140, '5f944093b0437', 4, '2020-10-24 11:27:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_image`
--
ALTER TABLE `book_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_view_history`
--
ALTER TABLE `book_view_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity` (`last_activity`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `book_image`
--
ALTER TABLE `book_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `book_view_history`
--
ALTER TABLE `book_view_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
