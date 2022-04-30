DROP SCHEMA IF EXISTS quizy;
CREATE SCHEMA quizy;
USE quizy;


SET CHARACTER_SET_CLIENT = utf8;
SET CHARACTER_SET_CONNECTION = utf8;


-- prefecturesテーブルを作る
DROP TABLE IF EXISTS prefectures;
-- もしprefecturesが存在していたら削除する
CREATE TABLE prefectures(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    -- レコード（横列）に１から順に番号をつける
    name varchar(255) NOT NULL
);

INSERT INTO prefectures (name) VALUES
('東京都の難読地名クイズ'),
('広島県の難読地名クイズ');


DROP TABLE IF EXISTS questions;
CREATE TABLE questions (
    prefecture_id INT NOT NULL,
    question_id INT NOT NULL,
    choice1 VARCHAR(255) NOT NULL,
    choice2 VARCHAR(255) NOT NULL,
    choice3 VARCHAR(255) NOT NULL,
    img VARCHAR(255) NOT NULL
);

INSERT INTO question (prefecture_id, question_id, choice1, choice2, choice3, img) VALUES
(1, 1, 'たかなわ', 'こうわ', 'たかわ', '1.png'),
(1, 2, 'かめいど', 'かめど', 'かめと', '2.png'),
(1, 3, 'こうじまち', 'かゆまち', 'おかとまち', '3.png'),
(1, 4, 'おなりもん', 'おかどもん', 'ごせいもん', '4.png'),
(1, 5, 'とどろき', 'たたりき', 'たたら', '5.png'),
(1, 6, 'しゃくじい', 'いじい', 'せきこうい', '6.png'),
(1, 7, 'ぞうしき', 'ざっしき', 'ざっしょく', '7.png'),
(1, 8, 'おかちまち', 'こみとちょう', 'ごしろちょう', '8.png'),
(1, 9, 'ししぼね', 'ろっこつ', 'しこね', '9.png'),
(1, 10, 'こぐれ', 'こしゃく', 'こばく', '10.png'),
(2, 1, 'むかいなだ', 'むこうひら', 'むきひら', '1.png');