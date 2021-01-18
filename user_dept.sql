

  -- https://www.phpmyadmin.net/
  -- Host: 127.0.0.1
 
  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  SET AUTOCOMMIT = 0;
  START TRANSACTION;
  SET time_zone = "+00:00";

  -- Database: `user_deptn`
  CREATE Database user_deptn;
  -- Table structure for table `user1`
  CREATE TABLE user1 (user_id INT PRIMARY KEY AUTO_INCREMENT, 
  email VARCHAR(255) NOT NULL, 
  name VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL ,
  registeration_date DATE NOT NULL);

  -- Table structure for table `dept`
  CREATE TABLE dept (dept_id INT PRIMARY KEY AUTO_INCREMENT, 
  name VARCHAR(255) NOT NULL, 
  description VARCHAR(255) NOT NULL
);



  COMMIT;




