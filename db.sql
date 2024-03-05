/*
CREATE DATABASE blog_engelss;
USE blog_engelss;
CREATE TABLE posts (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255) NOT NULL
);

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");

CREATE TABLE categories (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description TEXT 
);

INSERT INTO categories
(name, description)
VALUES
("sport", ""),
("music", ""),
("food", "");


ALTER TABLE posts 
ADD category_id INT NOT NULL REFERENCES categories(id);

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE NAME = "sport")
WHERE id = 1;

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE NAME = "food")
WHERE id = 2;
*/