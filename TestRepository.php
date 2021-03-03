<?php



require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";
require_once __DIR__ . "/GetConnection.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

/*
 * ACTION UNTUK INSERT DATA
 * $comment = new Comment(email: "repository@test.com", comment: "hellow");
 * $newComment = $repository->insert($comment);
 *
 * var_dump($newComment->getId());
 */

/*
 * ACTION UNTUK MENCARI DATA BERDASARKAN ID
 *
 * $comment = $repository->findById(1);
 * var_dump($comment);
 * */


/*
 * ACTION UNTUK MENCARI KESELURUHAN DATA
 *
 * $comment = $repository->findAll(1);
 * var_dump($comment);
 * */







$connection = null;

