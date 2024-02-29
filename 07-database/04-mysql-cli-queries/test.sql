--- Create a post table 
CREATE TABLE posts (
   id INT AUTO_INCREMENT PRIMARY KEY,
   title VARCHAR(255) NOT NULL,
   body TEXT NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INSERT DATA INTO post table 
INSERT INTO posts (`title`, `body`) 
VALUES ('Post 3', 'This is post 3 body'),
('Post 4', 'This is post 4 body'),
('Post 5', 'This is post 5 body'),
('Post 6', 'This is post 6 body'),
('Post 7', 'This is post 7 body');