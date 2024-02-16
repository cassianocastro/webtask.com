INSERT INTO
    city (cityID, cityName, state)
VALUES
    (1, 'Porto Alegre', 'RS'),
    (2, 'Canoas', 'RS'),
    (3, '', ''),
    (4, '', ''),
    (5, '', ''),
    (6, 'Rio de Janeiro', 'RJ');

INSERT INTO
    district (districtID, districtName, cityName)
VALUES
    (1, 'Sarandi', 'Porto Alegre'),
    (2, 'Rubem Berta', 'Porto Alegre'),
    (3, 'Moinhos de Vento', 'Porto Alegre'),
    (4, 'Cavalhada', 'Porto Alegre'),
    (5, 'Nonoai', 'Porto Alegre'),
    (6, 'Auxiliadora', 'Porto Alegre'),
    (7, 'Partenon', 'Porto Alegre'),
    (8, 'São José', 'Porto Alegre'),
    (9, 'Belem Novo', 'Porto Alegre'),
    (10, 'Belem Velho', 'Porto Alegre'),
    (11, '', ''),
    (12, '', ''),
    (13, '', ''),
    (14, '', ''),
    (15, '', ''),
    (16, '', ''),
    (17, '', '');

INSERT INTO
    employee (employeeID, completeName, registration, admission, wage, childs, office)
VALUES
    (1, 'Teste', '123', '2021-07-01', 1500, 2, '2'),
    (2, 'Teste2', '001', '2021-07-05', 3000, 3, '0'),
    (3, 'José da Silva', '002', '2021-07-02', 3000, 5, 'Gerente'),
    (4, 'João da Silva', '003', '2021-07-20', 10000, 3, 'Motorista');

INSERT INTO
    people (personID, firstName, lastName, age, childs)
VALUES
    (1, 'Teste', 'da Silva', 14, 3),
    (2, 'Teste2', 'da Silva2', 15, 1),
    (3, 'João', 'da Silva', 43, 2);