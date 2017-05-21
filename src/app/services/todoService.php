<?php
namespace App\Service;

use App\Config\Connect;
//use App\Model\CommentsModel;
use PDO;

class TodoService
{
    protected $connect;

    function __construct()
    {
        $this->connect = new Connect();
    }

    public function getAll()
    {
        $data = null;
        $sql="SELECT body, email, created_at  FROM todos ORDER by created_at desc";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, "App\\Model\\Comment");
            $pdo = null;
        }

        return $data;
    }

    public function add($comments)
    {
        $count = 0;
        $sql = 'INSERT INTO todos (email, body) VALUES (:email, :body)';
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $sth = $pdo->prepare($sql);
            $count = $sth->execute(array(':email' => $comments->email, ':body' => $comments->body));
            $pdo = null;
        }
        return $count;
    }

    public function sortdescemail()
    {
        $data = null;
        $sql="SELECT username, body,email, created_at  FROM comments WHERE accepted = 1 ORDER by email desc";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, "App\\Model\\Comment");
            $pdo = null;
        }

        return $data;
    }

    public function sortascemail()
    {
        $data = null;
        $sql="SELECT username, body,email, created_at  FROM comments WHERE accepted = 1 ORDER by email asc";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, "App\\Model\\Comment");
            $pdo = null;
        }

        return $data;
    }

    public function sortdescdate()
    {
        $data = null;
        $sql="SELECT username, body,email, created_at  FROM comments WHERE accepted = 1 ORDER by created_at desc";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, "App\\Model\\Comment");
            $pdo = null;
        }

        return $data;
    }

    public function sortascdate()
    {
        $data = null;
        $sql="SELECT username, body,email, created_at  FROM comments WHERE accepted = 1 ORDER by created_at asc";
        $pdo = $this->connect->getDb();
        if(!is_null($pdo)) {
            $data = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, "App\\Model\\Comment");
            $pdo = null;
        }

        return $data;
    }
}
