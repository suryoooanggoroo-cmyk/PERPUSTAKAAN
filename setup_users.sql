CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`username`, `password`, `nama_lengkap`)
VALUES ('admin', '$2y$10$ZmRviiArATCvs4MYChgR9eD8D2MbcdiIX5KZTd/RYXq6LyR/6yDZq', 'Administrator');
