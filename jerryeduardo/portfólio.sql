CREATE TABLE `usuario` (
  `id_usuario` int(1) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nome_usuario` varchar(60) UNIQUE NOT NULL,
  `senha_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `senha_usuario`) VALUES
(1, 'jerry.edu', '1q2w3e4r');

CREATE TABLE `logo` (
  `id_logo` int(1) PRIMARY KEY NOT NULL,
  `title_logo` varchar(120) NOT NULL,
  `alt_logo` varchar(120) NOT NULL,
  `url_logo` varchar(400) NOT NULL,
  `width_logo` varchar(5) NULL,
  `height_logo` varchar(5) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `logo` (`id_logo`, `title_logo`, `alt_logo`, `url_logo`, `width_logo`, `height_logo`) VALUES
(1, 'Jerry Eduardo', 'Logo', 'https://logospng.org/download/correios/logo-correios-2048.png', '150px', '30px');

DROP TABLE `usuario`
DROP TABLE `logo`