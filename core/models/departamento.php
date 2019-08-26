<?php

class Departamento extends Validator
{
    private $Id = null;
    private $departamento = null;

    //Métodos para sobrecarga de propiedades
	public function setId($Id)
	{
		if ($this->validateId($Id)) {
			$this->Id = $Id;
			return true;
		} else {
			return false;
		}
	}

	public function getId()
	{
		return $this->Id;
    }
    

    public function setDepartamento($departamento)
    {
        if($this->validateAlphabetic($departamento, 1, 50)) {
            $this->departamento = $departamento;
            return true;
        } else {
            return false;            
        }
        
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function createDepartamento()
    {
        $sql = 'INSERT INTO Departamento (Nombre_departamento) VALUES (?)';
        $parametros = array($this->departamento);
        return Database::executeRow($sql, $parametros);
    }

    public function updateDepartamento()
    {
        $sql = 'UPDATE Departamento SET Nombre_departamento = ? WHERE Id_deprtamento = ?';
        $parametros = array($this->departamento, $this->Id);
        return Database::executeRow($sql, $parametros);
    }

    public function deleteDepartamento()
    {
        $sql = 'DELETE FROM Departamento WHERE Id_departamento = ?';
        $parametros = array($this->Id);
        return Database::executeRow($sql, $parametros);        
    }
    
    public function getDepartamentoUp()
    {
        $sql = 'SELECT * FROM Departamento WHERE Id_departamento = ?';
        $parametros = array($this->Id);
        return Database::getRow($sql, $parametros);
    }

    public function readDepartamento()
    {
        $sql = 'SELECT * FROM Departamento ORDER BY Nombre_departamento';
        $parametros = array($this->Id);
        return Database::getRows($sql, $parametros);
    }

    public function searchDepartamento($value)
    {
        $sql = 'SELECT * FROM Departamento WHERE Nombre_departamento LIKE ? ORDER BY Nombre_departamento';
        $parametros = array("%$value%");
        return Database::getRows($sql, $parametros);        
    }
}
