SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  time_zone = "+00:00";

--
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `personalVeterinaria`
--
CREATE TABLE IF NOT EXISTS `personalVeterinaria` (
  `id` int(11) NOT NULL,
  `documentoIdentidadPersonalVet` int(15) NOT NULL UNIQUE,
  CONSTRAINT `PK_documentoIdentidadPersonalVet` PRIMARY KEY CLUSTERED(`documentoIdentidadPersonalVet`),


  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `estado_civil` varchar(10) NOT NULL,
  `hijos` varchar(5) NOT NULL,
  `intereses` varchar(50) NOT NULL
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8;


