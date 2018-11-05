-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 08:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'C'),
(2, 'C++'),
(3, 'Java'),
(4, 'Php');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 10, '', '', '', 'unapproved', '2018-10-14'),
(2, 10, 'Dqas', 'hjkh', 'jhjkhj', 'unapproved', '2018-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(10, 1, 'Let Us C', 1, '2018-01-06', 'house.jpg', '<p><strong>About C</strong></p><p><strong>:</strong></p><p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <sub>-by xyz</sub></p><p><br></p>', 'pointers,structs,c', 2, 'published'),
(11, 1, 'Pointers in C', 1, '2018-01-06', 'lotus.jpg', '<p><strong>Title</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><hr><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-by abc</p>', 'Ponters,*', 0, 'published'),
(12, 2, 'LET C++', 1, '2018-01-06', 'night.jpg', '<p><strong>TITLE</strong></p><p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</strong></p><p><strong><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.<u>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</u></em></strong></p><p><strong><em><u><span style="color: rgb(85, 57, 130);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</span></u></em></strong></p>', 'class and objects', 0, 'published'),
(13, 3, 'Something about JAVA', 3, '2018-01-06', 'river.jpg', '<p>JAVA is very good</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.<span style="color: rgb(41, 105, 176);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</span></p>', 'string and strrems', 0, 'published'),
(14, 1, 'C is too good', 3, '2018-01-06', 'sea.jpg', '<blockquote><p>Hey this is something about c</p></blockquote><p>cnhbdbshcbLorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</p>', 'pragmas', 0, 'published'),
(15, 4, 'SEE PHP', 2, '2018-01-06', 'snow.jpg', '<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.<span class="fr-emoticon fr-deletable fr-emoticon-img" style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f615.svg);">&nbsp;</span>&nbsp;</p></blockquote>', 'mysqli,mysql', 0, 'published'),
(16, 3, 'JAVA C', 2, '2018-01-06', 'trees.jpg', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.<span style="font-family: Impact,Charcoal,sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</span></strong></p>', 'javac a compiler', 0, 'published'),
(17, 4, 'PHP WORLD', 2, '2018-01-06', 'waves.jpg', '<p style="text-align: right;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.<u>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque velit deleniti ratione perspiciatis adipisci nostrum magni totam! Aperiam animi asperiores accusamus distinctio laudantium aut quaerat iure architecto quo suscipit.</u></p>', 'What should you echo', 0, 'published'),
(18, 10, 'JAVA', 1, '2018-02-09', '15181579968447293757247003112562.jpg', '<p>JJJJJajajshshsdhshsjjshsshshsjjjjs&nbsp;<strong>ssssss&nbsp;</strong></p>', 'Hshah', 0, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(4, 'dhano', '$2y$10$frJ3r418RgrHDzZdg4q1xeOSPMhBtXPou0uDBLGNRDls46F.9Yfae', 'Dhananjay', 'Ghumare', 'dhananjay62.dg@gmail.com', 'pratik.jpg', 'admin', ''),
(5, 'glyen', '$2y$10$LGX8zedmEfS63p3EZS81Ae.eOa.mpSphO4HXYQWKQltMTNjB1Wot6', 'Glyen', 'dontkn0w', 'anything@gmail.com', 'pratik.jpg', 'subscriber', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`, `user_id`) VALUES
(24, 'mur16blulo18a3f98evl9khbo0', '1515226620', 2),
(25, 'lcdglcedhao93sltkrilor9ne2', '1515478593', 3),
(26, 'b6ia5g48ts8digp7skln36pjd2', '1516109837', 1),
(28, 'd29di2su4jf5vbn983qs1mtca7', '1517037102', 1),
(29, '64i870ik2hnghv63q9mtocoj15', '1518157862', 1),
(33, 'oqepflt6ijnv003ai9gtr5svi3', '1539496535', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
