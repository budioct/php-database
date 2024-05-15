<?php

namespace Repository {

    use entity\Comments;

    interface CommentRepository
    {

        function insert(Comments $comment): Comments;

        function findById(int $id): ?Comments;

        function findAll(): array;

    }

    class CommentRepositoryImpl implements CommentRepository
    {

        public function __construct(private \PDO $connection)
        {
        }

        public function insert(Comments $comments): Comments
        {
            $sql = "INSERT INTO comments(email, comment) VALUES (?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$comments->getEmail(), $comments->getComment()]);

            $id = $this->connection->lastInsertId();
            $comments->setId($id);

            return $comments;
        }

        public function findById(int $id): ?Comments
        {
            $sql = "SELECT * FROM comments WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);

            if ($row = $statement->fetch()) {
                return new Comments(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            } else {
                return null;
            }
        }

        public function findAll(): array
        {
            $sql = "SELECT * FROM comments";
            $statement = $this->connection->query($sql);

            $array = [];

            while ($row = $statement->fetch()) {
                $array[] = new Comments(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            }

            return $array;
        }

    }

}