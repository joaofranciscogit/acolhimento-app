INSERT INTO conta (
    conta_id, 
    conta_codigo, 
    conta_nome, 
    conta_estado, 
    conta_email, 
    conta_senha, 
    conta_data
) VALUES
(NULL, 'C0001', 'Admin', 'ACTIVO', 'admin@centro.com', '1234', current_timestamp());

INSERT INTO crianca (
    crianca_codigo,
    crianca_nome,
    crianca_data_nascimento,
    crianca_idade,
    crianca_sexo,
    crianca_numero_cedula,
    crianca_numero_bilhete,
    crianca_historico,
    crianca_motivo_entrada,
    crianca_foto,
    crianca_raca,
    crianca_origem,
    crianca_filiacao,
    crianca_estado,
    conta_id
) VALUES
('C001', 'Ana Silva', '2015-06-10', 9, 'Feminino', '123456789', 'B12345678', 'Histórico médico bom', 'Motivo de acolhimento: abandono', 'ana_silva.jpg', 'Mestiça', 'Luanda', 'João Silva e Maria Silva', 'Ativa', 1),
('C002', 'Carlos Santos', '2017-02-20', 7, 'Masculino', '987654321', 'B87654321', 'Histórico médico satisfatório', 'Motivo de acolhimento: situação de risco', 'carlos_santos.jpg', 'Negro', 'Benguela', 'Paulo Santos e Isabel Santos', 'Ativo', 1),
('C003', 'Luana Pereira', '2016-11-15', 8, 'Feminino', '456789123', 'B34567890', 'Histórico médico regular', 'Motivo de acolhimento: abandono', 'luana_pereira.jpg', 'Branca', 'Huíla', 'Ricardo Pereira e Teresa Pereira', 'Ativa', 1);
