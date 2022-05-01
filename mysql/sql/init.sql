DROP SCHEMA IF EXISTS quizy;

CREATE SCHEMA quizy;

USE quizy;

SET
  CHARACTER_SET_CLIENT = utf8;

SET
  CHARACTER_SET_CONNECTION = utf8;

-- prefecturesテーブルを作る
DROP TABLE IF EXISTS prefectures;

-- もしprefecturesが存在していたら削除する
CREATE TABLE prefectures(
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  -- レコード（横列）に１から順に番号をつける
  name varchar(255) NOT NULL
);

INSERT INTO
  prefectures (name)
VALUES
  ('東京都の難読地名クイズ'),
  ('広島県の難読地名クイズ');

DROP TABLE IF EXISTS questions;

CREATE TABLE questions(
  prefecture_id INT NOT NULL,
  question_id INT NOT NULL,
  choice1 varchar(255) NOT NULL,
  choice2 varchar(255) NOT NULL,
  choice3 varchar(255) NOT NULL,
  img varchar(255) NOT NULL
);

INSERT INTO
  questions (
    prefecture_id,
    question_id,
    choice1,
    choice2,
    choice3,
    img
  )
VALUES
  (1, 1, 'takanawa', 'kouwa', 'takawa', 'takanawa.png'),
  (1, 2, 'かめいど', 'かめど', 'かめと', 'kameido.png'),
  (1, 3, 'こうじまち', 'かゆまち', 'おかとまち', 'koujimati.png'),
  (1, 4, 'おなりもん', 'おかどもん', 'ごせいもん', 'onarimon.png'),
  (1, 5, 'とどろき', 'たたりき', 'たたら', 'todoroki.png'),
  (1, 6, 'しゃくじい', 'いじい', 'せきこうい', 'syakujii.png'),
  (1, 7, 'ぞうしき', 'ざっしき', 'ざっしょく', 'zousiki.png'),
  (1, 8, 'おかちまち','こみとちょう','ごしろちょう','okatimati.png'),
  (1, 9, 'ししぼね', 'ろっこつ', 'しこね', 'sisibone.png'),
  (1, 10, 'こぐれ', 'こしゃく', 'こばく', 'kogure.png'),
  (2, 1, 'むかいなだ', 'むこうひら', 'むきひら', 'mukainada.png');