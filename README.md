CREATE A DATABASE 
CHANGE .env

** PLEASE RUN THIS SQL ON DATABASE **

DROP TABLE IF EXISTS cruds; CREATE TABLE IF NOT EXISTS cruds ( id int NOT NULL AUTO_INCREMENT, name varchar(100) NOT NULL DEFAULT '', age int NOT NULL DEFAULT '0', gender varchar(20) NOT NULL, willing_to_work tinyint(1) NOT NULL DEFAULT '0', language_1 tinyint(1) NOT NULL DEFAULT '0', language_2 tinyint(1) NOT NULL DEFAULT '0', language_3 tinyint(1) NOT NULL DEFAULT '0', language_4 tinyint(1) NOT NULL DEFAULT '0', created_date datetime DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO cruds (id, name, age, gender, willing_to_work, language_1, language_2, language_3, language_4, created_date) VALUES (8, 'Namshad', 24, 'Male', 1, 1, 0, 0, 0, '2021-11-25 14:57:55'); COMMIT;

