INSERT INTO
    state (name)
VALUES
    ('RS'),
    ('RS'),
    ('RJ');

INSERT INTO
    address (state, city, district, street, number, complement)
VALUES
    (1, 'Porto Alegre', 'Sarandi', '', 0, NULL),
    (1, 'Porto Alegre', 'Rubem Berta', '', 0, NULL),
    (1, 'Porto Alegre', 'Moinhos de Vento', '', 0, NULL),
    (1, 'Porto Alegre', 'Cavalhada', '', 0, NULL),
    (1, 'Porto Alegre', 'Nonoai', '', 0, NULL),
    (1, 'Porto Alegre', 'Auxiliadora', '', 0, NULL),
    (1, 'Porto Alegre', 'Partenon', '', 0, NULL),
    (1, 'Porto Alegre', 'São José', '', 0, NULL),
    (1, 'Porto Alegre', 'Belem Novo', '', 0, NULL),
    (1, 'Porto Alegre', 'Belem Velho', '', 0, NULL);

INSERT INTO
    employee (name, surname, age, childs)
VALUES
    ('José', 'da Silva', 14, 3),
    ('Ana' , 'Moura', 15, 1),
    ('João', 'da Silva', 43, 2);

INSERT INTO
    contract (registration, admission, wage, office)
VALUES
    ('001', '2021-07-05', 3000, 'Encarregado'),
    ('002', '2021-07-02', 3000, 'Gerente'),
    ('003', '2021-07-20', 1000, 'Motorista'),
    ('004', '2021-07-01', 1500, 'Auxiliar');