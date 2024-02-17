INSERT INTO
    region (name)
VALUES
    ('Norte'),
    ('Sul'),
    ('Nordeste'),
    ('Sudeste'),
    ('Centro-Oeste');

INSERT INTO
    state (UF, name, region)
VALUES
    ('RS', 'Rio Grande do Sul', 2),
    ('SP', 'São Paulo', 4),
    ('RJ', 'Rio de Janeiro', 4);

INSERT INTO
    address (state, city, district, street, number, cep, complement)
VALUES
    ('RS', 'Porto Alegre', 'Sarandi', '', 10, 12345000, NULL),
    ('RS', 'Porto Alegre', 'Rubem Berta', '', 323, 12345000, NULL),
    ('RS', 'Porto Alegre', 'Moinhos de Vento', '', 410, 12345000, NULL),
    ('RS', 'Porto Alegre', 'Cavalhada', '', 600, 12345000, NULL);

INSERT INTO
    contract (registration, admission, wage, office)
VALUES
    ('001', '2021-07-05', 3000, 'Encarregado'),
    ('002', '2021-07-02', 3000, 'Gerente'),
    ('003', '2021-07-20', 1000, 'Motorista'),
    ('004', '2021-07-01', 1500, 'Auxiliar');

INSERT INTO
    employee (CPF, name, surname, age, sons, address, contract)
VALUES
    (12345678900, 'José', 'da Silva', 34, 3, 2, 1),
    (98765432100, 'Ana' , 'Moura'   , 18, 1, 3, 4),
    (12312312300, 'João', 'da Silva', 43, 2, 1, 2),
    (45645645600, 'Bia' , 'Barroso' , 27, 0, 2, 3);