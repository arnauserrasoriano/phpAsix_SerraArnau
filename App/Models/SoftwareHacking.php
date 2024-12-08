<?php
namespace App\Models;

use Core\App;
use PDO;

class SoftwareHacking{
    protected static $table = "hacking_software";

    public $id;
    public $name;
    public $type;
    public $description;
    public $platform;
    public $license;
    public $official_url;
    public $data;


    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->name = $data['name'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->platform = $data['platform'] ?? null;
        $this->data = $data['data'] ?? null;
        $this->license = $data['license'] ?? null;
        $this->official_url = $data['official_url'] ?? null;
    }


    public function save() {
        $db = App::get('database')->getConnection();

        if ($this->id) {
            // Actualizar un registro existente
            $statement = $db->prepare('
        UPDATE ' . static::$table . ' 
        SET name = :name, 
            type = :type, 
            description = :description, 
            platform = :platform,
            data = :data, 
            license = :license, 
            official_url = :official_url 
        WHERE id = :id
        ');
            // Usar bindParam para evitar inyección SQL
            $statement->execute([
                ':name' => $this->name,
                ':type' => $this->type,
                ':description' => $this->description,
                ':platform' => $this->platform,
                ':data' => $this->data,
                ':license' => $this->license,
                ':official_url' => $this->official_url,
                ':id' => $this->id
            ]);
        } else {
            // Crear un nuevo registro
            $statement = $db->prepare('
        INSERT INTO ' . static::$table . ' 
        (name, type, description, platform, license, official_url, data) 
        VALUES (:name, :type, :description, :platform, :license, :official_url, :data)
        ');
            $statement->execute([
                ':name' => $this->name,
                ':type' => $this->type,
                ':description' => $this->description,
                ':platform' => $this->platform,
                ':license' => $this->license,
                ':official_url' => $this->official_url,
                ':data' => $this->data
            ]);

            // Asignar el ID del registro recién insertado
            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $software_hh = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $software_hh[] = new self($result);
        }
        return $software_hh;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = ' . $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id, PDO::PARAM_INT); // Usar bindValue para asegurar que es un entero
        $statement->execute();
    }



}
