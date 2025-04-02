<?php
function conn()
{
    $user = 'Farhad';
    $db = 'frutan';
    $host = 'localhost';
    $password = 'Farhad@1161997';
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    if ($conn) {
    } else {
        echo 'Not Good';
    }
    return $conn;
}
class db
{
    protected $pdo;
    private $dbname;
    private $user;
    private $pass;
    private $tbl;
    public function __construct($dbname = 'frutan', $user = 'Farhad', $pass = 'Farhad@1161997')
    {
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
        $this->connection();
    }
    public function connection()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=localhost;dbname={$this->dbname};",
                $this->user,
                $this->pass
            );
        } catch (Exception $e) {
            $e->getMessage('There Is Error');
        }
    }
    public function setTbl($tbl)
    {
        $this->tbl = $tbl;
    }
    public function SelectData($data)
    {
        if (is_array($data)) {
            if (is_array($data)) {
                $data = "'" . implode("','", $data) . "'";
                $sql = $this->pdo->prepare("SELECT {$data} FROM {$this->tbl}");
            } else {
                $sql = $this->pdo->prepare("SELECT {$data} FROM {$this->tbl}");
            }
            $sql->execute();
            $rows = $sql->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }
    }
}
$sss = new db();
$sss->setTbl('contact');
$sss->SelectData(['name']);

?>