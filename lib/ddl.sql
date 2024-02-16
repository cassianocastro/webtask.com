CREATE TABLE `city` (
  `cityID` int(11) NOT NULL,
  `cityName` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `district` (
  `districtID` int(11) NOT NULL,
  `districtName` varchar(100) NOT NULL,
  `cityName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `completeName` varchar(300) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `admission` date NOT NULL,
  `wage` float DEFAULT NULL,
  `childs` int(11) DEFAULT 0,
  `office` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `people` (
  `personID` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `childs` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;