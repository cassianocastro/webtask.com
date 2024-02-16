INSERT INTO
    city (cityName, state)
VALUES
    ('Porto Alegre', 'RS'),
    ('Canoas', 'RS'),
    ('', ''),
    ('', ''),
    ('', ''),
    ('Rio de Janeiro', 'RJ');

INSERT INTO
    district (districtName, cityName)
VALUES
    ('Sarandi', 'Porto Alegre'),
    ('Rubem Berta', 'Porto Alegre'),
    ('Moinhos de Vento', 'Porto Alegre'),
    ('Cavalhada', 'Porto Alegre'),
    ('Nonoai', 'Porto Alegre'),
    ('Auxiliadora', 'Porto Alegre'),
    ('Partenon', 'Porto Alegre'),
    ('São José', 'Porto Alegre'),
    ('Belem Novo', 'Porto Alegre'),
    ('Belem Velho', 'Porto Alegre'),
    ( '', ''),
    ( '', ''),
    ( '', ''),
    ( '', ''),
    ( '', ''),
    ( '', ''),
    ( '', '');

INSERT INTO
    employee (completeName, registration, admission, wage, childs, office)
VALUES
    ('Teste', '123', '2021-07-01', 1500, 2, '2'),
    ('Teste2', '001', '2021-07-05', 3000, 3, '0'),
    ('José da Silva', '002', '2021-07-02', 3000, 5, 'Gerente'),
    ('João da Silva', '003', '2021-07-20', 10000, 3, 'Motorista');

INSERT INTO
    people (firstName, lastName, age, childs)
VALUES
    ('Teste', 'da Silva', 14, 3),
    ('Teste2', 'da Silva2', 15, 1),
    ('João', 'da Silva', 43, 2);