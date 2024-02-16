CREATE TABLE city (
    cityID   INT(11) NOT NULL,
    cityName VARCHAR(100) NOT NULL,
    state    VARCHAR(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE district (
    districtID   INT(11) NOT NULL,
    districtName VARCHAR(100) NOT NULL,
    cityName     VARCHAR(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE employee (
    employeeID   INT(11) NOT NULL,
    completeName VARCHAR(300) NOT NULL,
    registration VARCHAR(100) NOT NULL,
    admission    DATE NOT NULL,
    wage         FLOAT DEFAULT NULL,
    childs       INT(11) DEFAULT 0,
    office       VARCHAR(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE people (
    personID  INT(11) NOT NULL,
    firstName VARCHAR(50) DEFAULT NULL,
    lastName  VARCHAR(100) DEFAULT NULL,
    age       INT(11) DEFAULT NULL,
    childs    INT(11) DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;