DROP SCHEMA IF EXISTS webapp;

CREATE SCHEMA webapp;

USE webapp;

DROP TABLE IF EXISTS `study_languages`;

CREATE TABLE `study_languages` (
  `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `study_language` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
);

INSERT INTO
  `study_languages` (`study_language`, `color`)
VALUES
  ('JavaScript', 'b29ef3'),
  ('CSS', '0f70bd'),
  ('PHP', '4a17ef'),
  ('HTML', '0445ec'),
  ('Lalavel', '3005c0'),
  ('SQL', '20bdde'),
  ('SHELL', '3ccefe'),
  ('情報システム基礎知識（その他)', '6c46eb');




DROP TABLE IF EXISTS `study_contents`;

CREATE TABLE `study_contents` (
  `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `study_content` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
);

INSERT INTO
  `study_contents` (`study_content`, `color`)
VALUES
  ('ドットインストール', '20bdde'),
  ('N予備校', '0445ec'),
  ('POSSE課題', '0f70bd');




DROP TABLE IF EXISTS `study_data`;

CREATE TABLE `study_data` (
  `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `study_date` datetime NOT NULL,
  `study_language_id` INT NOT NULL,
  `study_content_id` INT NOT NULL,
  `study_hour` INT
);

INSERT INTO
  `study_data` (
    `study_date`,
    `study_language_id`,
    `study_content_id`,
    `study_hour`
  )
VALUES
  ('2022-1-17', 4, 1, 1),
  ('2022-1-17', 3, 2, 1),
  ('2022-1-17', 2, 3, 2),
  ('2022-1-17', 3, 1, 2),
  ('2022-2-17', 4, 1, 3),
  ('2022-2-17', 3, 2, 3),
  ('2022-2-17', 2, 3, 3),
  ('2022-3-05', 1, 1, 1),
  ('2022-3-06', 3, 2, 1),
  ('2022-3-07', 4, 3, 1),
  ('2022-3-08', 2, 1, 1),
  ('2022-3-09', 1, 1, 2),
  ('2022-3-10', 5, 2, 2),
  ('2022-3-11', 6, 3, 2),
  ('2022-3-12', 7, 3, 2),
  ('2022-3-13', 3, 1, 3),
  ('2022-3-14', 3, 2, 3),
  ('2022-3-15', 8, 3, 3),
  ('2022-3-16', 3, 2, 4),
  ('2022-5-01', 3, 2, 4),
  ('2022-5-02', 4, 1, 5),
  ('2022-5-07', 5, 3, 2);