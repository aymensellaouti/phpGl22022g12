<?php
    include_once 'autoload.php';
class Repository
{
    protected $bd;

    public function __construct(protected $tableName) {
        $this->bd = ConnexionBD::getInstance();
    }
    public function findAll() {
        $request = "select * from $this->tableName";
        echo 'Request : <br>'.$request;
        $reponse = $this->bd->prepare($request);
        $reponse->execute([]);
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }
    public function findOneById($id) {
        $request = "select * from $this->tableName where id = :id";
        $reponse = $this->bd->prepare($request);
        $reponse->execute(['id' => $id]);
        return $reponse->fetch(PDO::FETCH_OBJ);
    }
    public function deleteById($id) {
        $request = "delete from $this->tableName where id = :id";
        $reponse = $this->bd->prepare($request);
        $reponse->execute(['id' => $id]);
    }
    public function insert($data) {
//        INSERT INTO `user` (`id`, `username`, `email`, `name`) VALUES (NULL, ?, ?, ?);
        if (count($data)) {
            $request = "INSERT INTO $this->tableName ";
            $keys = array_keys($data);
            $values = array_values($data);
            $params = array_fill(0, count($data), '?');
            $keysString = implode(',', $keys);
            $paramString = implode(',', $params);
            $request.= "(id, $keysString) VALUES (NULL, $paramString)";
            $response = $this->bd->prepare($request);
            // Je passe le tableau de paramètres
            $response->execute($values);
        }
    }
}