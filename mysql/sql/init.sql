DROP SCHEMA IF EXISTS teamdev;

CREATE SCHEMA teamdev;

USE teamdev;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  user_img VARCHAR(255) UNIQUE NOT NULL,
  company_id INT NOT NULL,
  name VARCHAR(255) UNIQUE NOT NULL,
  department_name VARCHAR(255) NOT NULL,
  tel VARCHAR(255) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO
  users
SET
  user_img = 'https://www.yomiuri.co.jp/media/2021/02/20210204-OYT1I50029-1.jpg?type=x-large',
  company_id = 1,
  name = 'ポセ男',
  department_name = '人事部',
  tel = '000-1111',
  email = 'test@posse-ap.com',
  password = sha1('password');
INSERT INTO
  users
SET
  user_img = 'https://www.yomiuri.co.jp/media/2021/02/20210204-OYT1I50029-1.jpg?type=x-large',
  company_id = 2,
  name = '西山直輝',
  department_name = 'マーケティング部',
  tel = '090-2066-9112',
  email = 'naoki1010nissy@gmail.com',
  password = sha1('nn20001010');


DROP TABLE IF EXISTS events;
CREATE TABLE events (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO
  events
SET
  title = 'イベント1';
INSERT INTO
  events
SET
  title = 'イベント2';


DROP TABLE IF EXISTS apply_info;
  CREATE TABLE `apply_info` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` TEXT NOT NULL ,
  `kana` TEXT NOT NULL ,
  `tel` TEXT NOT NULL ,
  `mail` TEXT NOT NULL ,
  `college` TEXT NOT NULL ,
  `faculty` TEXT NOT NULL ,
  `graduate_year` TEXT NOT NULL ,
  `adress` TEXT NOT NULL ,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


DROP TABLE IF EXISTS userpassreset;
  CREATE TABLE `userpassreset` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `token` TEXT NOT NULL ,
  `mail` TEXT NOT NULL ,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


DROP TABLE IF EXISTS agent;
CREATE TABLE `agent` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `agent_name` TEXT NOT NULL ,
  `link` TEXT NOT NULL ,
  `image` TEXT NOT NULL ,
  `publisher_five` INT NOT NULL ,
  `decision_five` INT NOT NULL ,
  `speed_five` INT NOT NULL ,
  `registstrant_five` INT NOT NULL ,
  `place_five` INT NOT NULL ,
  `publisher` INT NOT NULL ,
  `decision` INT NOT NULL ,
  `speed` INT NOT NULL ,
  `registstrant` INT NOT NULL ,
  `place` INT NOT NULL ,
  `main` TEXT NOT NULL ,
  `sub` TEXT NOT NULL
);
INSERT INTO
    `agent` (`agent_name`,`link`,`image`,`publisher_five`,`decision_five`,`speed_five`,`registstrant_five`,`place_five`, `publisher`,`decision`,`speed`,`registstrant`,`place`,`main`,`sub`)
VALUES
    ('マイナビ', 'https://mynabi.com', 'mynabi',2,3,4,5,1, 30000, 50000, 2, 100000, 8, '就活はひとりじゃない、ともに進む就活', '就活サイトでは掲載されてない求人' ),
    ('リクナビ', 'recruitnavi.com', 'recruit',1,2,3,4,5, 12000, 60000, 3, 800000, 15, '専任アドバイザーと、見つけよう', 'まだここにない出会い' ),
    ('キャリタス', 'caritas.com', 'caritas',3,4,5,1,2, 15000, 30000, 1, 400000, 4, '大手・準大手、優良企業への就職なら', '就職活動の軸探しに役立つ就職支援サービスです' ),
    ('doda', 'dodashukatsu.com', 'doda.png',4,5,1,2,3, 12000, 60000, 3, 800000, 15, '見つけた!!私にとっての「NO.1企業」', '就活のプロの視点を' ),
    ('type', 'type.com', 'type.png', 12000,5,1,2,3,4, 60000, 3, 800000, 15, 'ビジネスを知る、キャリアを考える', '学生のためのキャリア研究サイト' );
CREATE TABLE
    `tag` ( `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  `tag_name` TEXT NOT NULL);
INSERT INTO
    `tag` (`tag_name`)
VALUES
    ('面札対策'),
    ('ES添削'),
    ('1on1'),
    ('オンライン'),
    ('対面'),
    ('非公開求人'),
    ('IT'),
    ('マスコミ'),
    ('商社'),
    ('金融'),
    ('外資'),
    ('総合'),
    ('スタートアップ'),
    ('ベンチャー'),
    ('大手'),
    ('首都圏'),
    ('関西'),
    ('地方');
CREATE TABLE
    `agent_tag` ( `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  `agent_id` INT NOT NULL ,  `tag_id` INT NOT NULL);
INSERT INTO
    `agent_tag` (`agent_id`,`tag_id`)
VALUES
    (1,1),
    (1,5),
    (2,2),
    (2,5),
    (2,10),
    (3,4),
    (3,9),
    (3,11),
    (4,3),
    (4,6),
    (4,7),
    (4,8),
    (5,1),
    (5,3),
    (5,5),
    (5,6);
CREATE TABLE
    `agent_user` ( `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , `agent_id` INT NOT NULL , `user_id` INT NOT NULL);

