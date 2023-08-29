

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `email`, `address`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'Admin', '1234567890', 'admin@ghorergarage.com', '123 Admin adress', 'admin', 'admin', 'admin'),
(5, 'User', 'User', '1234567890', 'user@example.com', '123 user St', 'user', '1234', 'user'),
(9, 'Naima', 'Khan', '123456789', 'naima@gmail.com', 'ECB', 'naima', '$2y$10$XKu2eVNvuO.L.9GchEAtI.q8AWVJUjRId/9r9NagS1QB.Csmamxj.', 'user'),
(10, 'abroor', 'niloy', '123456789', 'abroor@acb', 'mirpur', 'niloy', '$2y$10$vCFFf7vAechSagEWV2hQyeigZJPoDjEocPIi4cn7GfI2iefA0.hLS', 'user');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;


