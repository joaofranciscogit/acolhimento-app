CREATE TABLE conta(
    conta_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    conta_codigo VARCHAR(255) UNIQUE NULL,
    conta_nome VARCHAR(255) NOT NULL,
    conta_estado VARCHAR(255) NULL,
    conta_email VARCHAR(255) UNIQUE NULL,
    conta_senha VARCHAR(255) NOT NULL,
    conta_data DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE crianca (
    crianca_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    crianca_codigo VARCHAR(255) UNIQUE NULL,
    crianca_nome VARCHAR(255) NOT NULL,
    crianca_data_nascimento DATE NULL,
    crianca_idade INT NULL,
    crianca_sexo VARCHAR(20) NOT NULL,
    crianca_numero_cedula VARCHAR(50) NULL,
    crianca_numero_bilhete VARCHAR(50) NULL,
    crianca_historico TEXT NULL,
    crianca_motivo_entrada TEXT NULL,
    crianca_foto VARCHAR(255) NULL,
    crianca_raca VARCHAR(50) NULL,
    crianca_origem VARCHAR(255) NULL,
    crianca_filiacao VARCHAR(255) NULL,
    crianca_estado VARCHAR(255) NULL,
    crianca_data DATETIME DEFAULT CURRENT_TIMESTAMP,
    conta_id INT NOT NULL,
    FOREIGN KEY (conta_id) REFERENCES conta(conta_id)
);