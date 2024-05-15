<?php

require_once __DIR__ . '/ConnectionDB.php'; // require_once __DIR__ . '/namaClass.php';
require_once __DIR__ . '/entity/Comments.php';
require_once __DIR__ . '/repository/CommentRepository.php';

use Repository\CommentRepositoryImpl;
use entity\Comments;

$PDO = getConnection(); // open koneksi ke driver mysql

$repository = new CommentRepositoryImpl($PDO);

//$comments = new Comments(email: "rizki@test.com", comment: "mas rizki");
//$newComment = $repository->insert($comments);
//var_dump($newComment->getId()); // int(30)

//$comments = $repository->findById(30);
//var_dump($comments);

$comments = $repository->findAll();
var_dump($comments);

$PDO = null;

/**
 * result:
 * // insert(Comments $comments): Comments
 * int(30)
 *
 * object(entity\Comments)#3 (3) {
 * ["id":"entity\Comments":private]=>
 * int(29)
 * ["email":"entity\Comments":private]=>
 * string(19) "repository@test.com"
 * ["comment":"entity\Comments":private]=>
 * string(2) "Hi"
 * }
 *
 * // findById($id) : ?Comments
 * object(entity\Comments)#4 (3) {
 * ["id":"entity\Comments":private]=>
 * int(30)
 * ["email":"entity\Comments":private]=>
 * string(14) "rizki@test.com"
 * ["comment":"entity\Comments":private]=>
 * string(9) "mas rizki"
 * }
 *
 * // findAll() : array
 * [19]=>
 * object(entity\Comments)#23 (3) {
 * ["id":"entity\Comments":private]=>
 * int(30)
 * ["email":"entity\Comments":private]=>
 * string(14) "rizki@test.com"
 * ["comment":"entity\Comments":private]=>
 * string(9) "mas rizki"
 * }
 * [20]=>
 * object(entity\Comments)#24 (3) {
 * ["id":"entity\Comments":private]=>
 * int(31)
 * ["email":"entity\Comments":private]=>
 * string(14) "rizki@test.com"
 * ["comment":"entity\Comments":private]=>
 * string(9) "mas rizki"
 * }
 */
