-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 04:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allphptricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
   `topic` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
    `image2` varchar(250) NOT NULL,
  `productname` varchar(250) NOT NULL,
   `price` double(9,2) NOT NULL,
   `quickview` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
 



  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `game` (`id`, `topic`, `image1`, `image2`, `productname`, `price`, `quickview`, `code`) VALUES
(1, 'Crayons', 'assets/anc.png', 'assets/anc1.png', 'Crayons', '150', 'arts/aquick1.php', 'Crayon1'),
(2, 'Canvas', 'assets/canvas.png', 'assets/canvas1.png', 'Handmade art canvas', '1500', 'arts/aquick2.php', 'Canvas2'),
(3, 'Brush', 'assets/brush.png', 'assets/brush1.png', 'Paint Brush set', '1000', 'arts/aquick3.php
', 'Brush3'),
(4, 'Paint', 'assets/markers paintset.png', 'assets/markerss.webp', 'markers paint set', '2150', 'arts/aquick4.php
', 'Paint4'),
(5, 'markers', 'assets/markers2.png', 'assets/permanentm.png', 'permanent paint markers', '1200', 'arts/aquick6.php
', 'markers5'),
(6, 'stick', 'assets/sticks.png', 'assets/sticks2.png', 'craft stick', '700', 'arts/aquick7.php', 'stick6'),
(7, 'stickers', 'assets/sticker.png', 'assets/sticker2.png', 'eyes sticker roll', '150', 'arts/aquick8.php', 'sticker7'),
(8, 'set', 'assets/journalingset.png', 'assets/journalset2.png', 'diy journaling set', '2850', 'arts/aquick5.php', 'set8')



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*Games*/
CREATE TABLE IF NOT EXISTS `gaming` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
   `topic` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
    `image2` varchar(250) NOT NULL,
  `productname` varchar(250) NOT NULL,
   `price` double(9,2) NOT NULL,
   `quickview` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
 


   

  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--
 
INSERT INTO `gaming` (`id`, `topic`, `image1`, `image2`, `productname`, `price`, `quickview`, `code`) VALUES
(10, 'ball', 'assets/game1.jpeg', 'assets/game.jpeg', 'cricket ball', '700', 'games/gquick.php', 'cricket'),
(11, 'skipping', 'assets/game.webp', 'assets/game4.jpeg', 'skipping rope', '500', 'games/gquick2.php', 'rope'),
(12, 'ball', 'assets/game7.webp', 'assets/game8.webp', 'volley ball', '1080', 'games/gquick3.php
', 'ball'),
(13, 'bat', 'assets/ga.webp', 'assets/ga1.webp', 'cricket bat', '1500', 'games/gquick4.php
', 'bat'),
(14, 'board', 'assets/ga4.jpeg', 'assets/ga5.jpeg', 'electronic-dartboard', '2850', 'games/gquick5.php
', 'board'),
(15, 'racket', 'assets/ga8.jpeg', 'assets/ga9.jpeg', 'badminton', '1800', 'games/gquick6.php', 'badminton'),
(16, 'darts', 'assets/games1.webp', 'assets/games2.webp', 'soft tip darts tri-p', '700', 'games/gquick7.php', 'dart'),
(17, 'ball', 'assets/games5.webp', 'assets/games6.webp', 'basketball', '1800', 'games/gquick8.php', 'basketball')



/*school*/
CREATE TABLE IF NOT EXISTS `school` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
   `topic` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
    `image2` varchar(250) NOT NULL,
  `productname` varchar(250) NOT NULL,
   `price` double(9,2) NOT NULL,
   `quickview` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
 


   

  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--
 
INSERT INTO `school` (`id`, `topic`, `image1`, `image2`, `productname`, `price`, `quickview`, `code`) VALUES
(18, 'spiral notebook', 'assets/school1.webp', 'assets/school2.webp', 'spiral-notebook', '500', 'schools/squick1.php', 'note'),
(19, 'pens', 'assets/pens.webp', 'assets/pens.webp', 'pens', '200', 'schools/squick2.php', 'pen'),
(20, 'binder', 'assets/ring.webp', 'assets/ring2.webp', 'ring binder black', '700', 'schools/squick3.php
', 'binder'), 
(21, 'ruler', 'assets/rular.webp', 'assets/rular1.webp', ' ruler', '20', 'schools/squick4.php
', 'bat'),
(22, 'case', 'assets/bags1.webp', 'assets/bags2.webp', 'pencil case', '600', 'schools/squick5.php
', 'case'),
(23, 'backpack', 'assets/bag1.webp', 'assets/bag2.webp', 'student backpack', '1800', 'schools/squick6.php', 'pack'),
(24, 'notebook', 'assets/bool.webp', 'assets/book.webp', 'notebook', '500', 'schools/squick7.php', 'notebook'),
(25, 'notebook', 'assets/copy.webp', 'assets/copy1.webp', 'notebook', '1000', 'schools/squick8.php', 'book')




/*office*/
CREATE TABLE IF NOT EXISTS `office` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
   `topic` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
    `image2` varchar(250) NOT NULL,
  `productname` varchar(250) NOT NULL,
   `price` double(9,2) NOT NULL,
   `quickview` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
 


   

  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--
 
INSERT INTO `office` (`id`, `topic`, `image1`, `image2`, `productname`, `price`, `quickview`, `code`) VALUES
(26, 'file folders', 'assets/off.jpeg', 'assets/nailcutter.jpeg', 'file folders', '350', 'offices/oquick1.php', 'file'),
(27, 'desk', 'assets/pic.jpeg', 'assets/pic1.jpeg', 'desk manager', '1500', 'offices/oquick2.php', 'desk'),
(28, 'paper', 'assets/pic2.jpeg', 'assets/pic3.jpeg', 'a4 size paper', '1000', 'offices/oquick3.php
', 'paper'), 
(29, 'tape', 'assets/pic4.jpeg', 'assets/pic5.jpeg', ' desk tape', '500', 'offices/oquick4.php
', 'tape'),
(30, 'stapler', 'assets/pic6.jpeg', 'assets/pic7.jpeg', 'duty standard stapler', '700', 'offices/oquick5.php
', 'stapler'),
(31, 'board', 'assets/pic8.jpeg', 'assets/pic9.jpeg', 'quartet dry-erase board', '1800', 'offices/oquick6.php', 'board'),
(32, 'note', 'assets/office.jpeg', 'assets/office1.jpeg', 'sticky note', '120', 'offices/oquick7.php', 'note'),
(33, 'envelopes', 'assets/office2.jpeg', 'assets/office3.jpeg', 'clasp envelopes', '50', 'offices/oquick8.php', 'clasp')




/*home*/
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
   `topic` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
    `image2` varchar(250) NOT NULL,
  `productname` varchar(250) NOT NULL,
   `price` double(9,2) NOT NULL,
   `quickview` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
 


   

  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--
 
INSERT INTO `home` (`id`, `topic`, `image1`, `image2`, `productname`, `price`, `quickview`, `code`) VALUES
(1, 'crayons', 'assets/anc.png', 'assets/anc1.png', 'Crayons ', '150', 'arts/aquick1.php', 'Crayon1'),
(2, 'canvas', 'assets/canvas.png', 'assets/canvas1.png', 'handmade art canvas', '1500', 'arts/aquick2.php', 'Canvas2'),
(3, 'brush', 'assets/brush.png', 'assets/brush1.png', 'paint brush set', '1000', 'arts/aquick3.php
', 'Brush3'), 
(10, 'ball', 'assets/game.jpeg', 'assets/game1.jpeg', ' cricket ball', '700', 'games/gquick.php
', 'cricket'),
(14, 'board', 'assets/ga5.jpeg', 'assets/ga6.jpeg', 'electronic-dartboard', '2850', 'games/gquick5.php
', 'board'),
(15, 'racket', 'assets/ga8.jpeg', 'assets/ga9.jpeg', 'badminton', '1800', 'games/gquick6.php', 'badminton'),
(30, 'stapler', 'assets/pic6.jpeg', 'assets/pic7.jpeg', 'duty standard stapler', '750', 'offices/oquick5.php', 'stapler'),
(31, 'board', 'assets/pic8.jpeg', 'assets/pic9.jpeg', 'quartet dry erase board', '2200', 'offices/oquick6.php', 'boards')


