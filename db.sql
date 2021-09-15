--* users table
CREATE TABLE users (
  id INT NOT NULL UNIQUE AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  surname VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(60) NOT NULL,
  PRIMARY KEY (id)
)

INSERT INTO users (name, surname, email, password) VALUES ('test', 'user', 'test@test.com', 'test1234')

--* quiz table
CREATE TABLE quizzes (
  id INT NOT NULL UNIQUE AUTO_INCREMENT,
)

-- id
-- image *
-- name *
-- bonus: drap-n-drop image
-- description *
-- category *
-- passing grade
-- lesson text
-- lesson image
-- bonus: multiple images
-- bonus: youtube video instead of text
-- hashtags
-- questions
-- answers