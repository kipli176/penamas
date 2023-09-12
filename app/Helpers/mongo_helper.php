<?php

use App\Libraries\Db;

function getOne($a, $b)
{
    $connection = new Db();
    $database = $connection->getDatabase();
    $collection = $database->$a;
    try {
        $cursor = $collection->findOne(['username' => $b]);

        return $cursor;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while fetching books: '.$ex->getMessage(), 500);

        // return 'Error while fetching books: '.$ex->getMessage();
    }
}

function getId($a, $b)
{
    $connection = new Db();
    $database = $connection->getDatabase();
    $collection = $database->$a;
    try {
        $cursor = $collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($b)]);

        return $cursor;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while fetching books: '.$ex->getMessage(), 500);

        // return 'Error while fetching books: '.$ex->getMessage();
    }
}

function saveData($a, $b)
{
    $connection = new Db();
    $database = $connection->getDatabase();
    $collection = $database->$a;
    try {
        $insertOneResult = $collection->insertOne($b);

        if ($insertOneResult->getInsertedCount() == 1) {
            return true;
        }

        return false;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while creating a book: '.$ex->getMessage(), 500);
    }
}


function getAll($a, $limit = 100)
{
    $connection = new Db();
    $database = $connection->getDatabase();
    $collection = $database->$a;
    try {
        $cursor = $collection->find([], ['limit' => $limit]);
        $books = $cursor->toArray();

        return $books;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while fetching books: '.$ex->getMessage(), 500);
    }
}

function deleteId($a,$b)
{
    $connection = new Db();
    $database = $connection->getDatabase();
    $collection = $database->$a;
    try {
        $result = $collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($b)]);

        if ($result->getDeletedCount() == 1) {
            return true;
        }

        return false;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while deleting a book with ID: '.$id.$ex->getMessage(), 500);
    }
} 




function getBooks($tabel, $limit = 10)
{
    $connection = new Db();
    $database = $connection->getDatabase();
    $collection = $database->$tabel;
    try {
        $cursor = $collection->find([], ['limit' => $limit]);
        $books = $cursor->toArray();

        return $books;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while fetching books: '.$ex->getMessage(), 500);
    }
}

function getBook($tabel, $a, $b)
{
    $connection = new Db();
    $database = $connection->getDatabase();
    $collection = $database->$tabel;
    try {
        // $book = $collection->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);
        $book = $collection->findOne(['username' => $a, 'password' => $b]);

        return $book;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while fetching book with ID: '.$id.$ex->getMessage(), 500);
    }
}

function insertBook($title, $author, $pages)
{
    try {
        $insertOneResult = $collection->insertOne([
            'title' => $title,
            'author' => $author,
            'pages' => $pages,
            'pagesRead' => 0,
        ]);

        if ($insertOneResult->getInsertedCount() == 1) {
            return true;
        }

        return false;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while creating a book: '.$ex->getMessage(), 500);
    }
}

function updateBook($id, $title, $author, $pagesRead)
{
    try {
        $result = $collection->updateOne(
            ['_id' => new \MongoDB\BSON\ObjectId($id)],
            ['$set' => [
                'title' => $title,
                'author' => $author,
                'pagesRead' => $pagesRead,
            ]]
        );

        if ($result->getModifiedCount()) {
            return true;
        }

        return false;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while updating a book with ID: '.$id.$ex->getMessage(), 500);
    }
}

function deleteBook($id)
{
    try {
        $result = $collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($id)]);

        if ($result->getDeletedCount() == 1) {
            return true;
        }

        return false;
    } catch (\MongoDB\Exception\RuntimeException $ex) {
        show_error('Error while deleting a book with ID: '.$id.$ex->getMessage(), 500);
    }
} 