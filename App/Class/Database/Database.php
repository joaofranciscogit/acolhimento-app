<?php

    namespace Autoload\Class\Database;

    use PDO;
    use PDOException;

    class Database
    {
    
        private array $_CONNECTION;
        private string $dbDriver;
        private string $dbHost;
        private string $dbName;
        private string $dbCharset;
        private string $dbUser;
        private string $dbPassword;
    
        public function __construct(
            array $_CONNECTION
        )
        {
            $this->dbDriver    = $_CONNECTION['DRIVER'];
            $this->dbHost      = $_CONNECTION['HOST'];
            $this->dbName      = $_CONNECTION['NAME'];
            $this->dbCharset   = $_CONNECTION['CHARSET'];
            $this->dbUser      = $_CONNECTION['USER'];
            $this->dbPassword  = $_CONNECTION['PASSWD'];
        }
    
        public function mysqlExe($query, $parametros = null) {
            $resultados = null;
            $ligacao = new PDO($this->dbDriver.':host=' . $this->dbHost . ';dbname=' . $this->dbName . ';charset=' . $this->dbCharset, $this->dbUser, $this->dbPassword, array(PDO::ATTR_PERSISTENT => TRUE));
            $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
                if ($parametros != null) {
                    $classCrud = $ligacao->prepare($query);
                    $classCrud->execute($parametros);
                    $resultados = $classCrud->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $classCrud = $ligacao->prepare($query);
                    $classCrud->execute();
                    $resultados = $classCrud->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (PDOException $e) {
                $e->getMessage();
                $resultados = false;
            }
            $ligacao = null;
            return $resultados;
        }
    
        public function mysqlNon($query, $parametros = null) {
            $ligacao = new PDO($this->dbDriver.':host=' . $this->dbHost . '; dbname=' . $this->dbName . ';charset=' . $this->dbCharset, $this->dbUser, $this->dbPassword, array(PDO::ATTR_PERSISTENT => TRUE));
            $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $ligacao->beginTransaction();
            try {
                if ($parametros != null) {
                    $classCrud = $ligacao->prepare($query);
                    $classCrud->execute($parametros);
                } else {
                    $classCrud = $ligacao->prepare($query);
                    $classCrud->execute();
                }
                $ligacao->commit();
            } catch (PDOException $e) {
                $e->getMessage();
                $ligacao->rollBack();
                return false;
            }
            $ligacao = null;
            return true;
        }
    
    }
    