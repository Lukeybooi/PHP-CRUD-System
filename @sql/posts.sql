DROP DATABASE IF EXISTS `phpblog`;

CREATE DATABASE `phpblog`;
USE `phpblog`;

DROP TABLE IF EXISTS `posts`;


--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created_at`) VALUES
(1, 'Post One', 'This is the first post', 'Jack Dickson', '2019-01-05 20:00:41'),
(2, 'Post Two', 'This is my second blog', 'John Doe', '2018-12-09 17:53:47'),
(3, 'Post Three', 'This is an interesting post that should be read.', 'Mark Harris', '2018-12-12 22:28:14'),
(4, 'Post Four', 'I am the fourth blog post.', 'Jerry Manson', '2018-12-12 22:33:35'),
(5, 'Post Five', 'Five Alive. The fifth post', 'Bobby Barker', '2018-12-12 22:39:02'),
(6, 'Post Six', 'One of our greatest blog posts are available here', 'Jack Martin', '2018-12-12 22:53:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
-- COMMIT;