

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


--
-- Database: `lab5`
--

--P
-- Table structure for table `gallery`
--

CREATE TABLE `gallery`
(
  `user_id` int
(11) NOT NULL,
`username` varchar
(15) NOT NULL,
  `email` varchar
(64) NOT NULL,
  `first_name` varchar
(30) NOT NULL,
  `last_name` varchar
(30) NOT NULL,
  `password` varchar
(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
ADD UNIQUE KEY
(`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `user_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

