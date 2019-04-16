CREATE TABLE IF NOT EXISTS comments (
    `id` INT,
    `body` VARCHAR(255) CHARACTER SET utf8,
    `senario_id` INT
);
INSERT INTO comments VALUES
    (1,'testing this is a comment',1);
