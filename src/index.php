<?php
require("dbconnect.php");
?>




<!-- SELECT
        study_languages.study_language, SUM(study_data.study_hour) as sum_study_time, study_languages.color
    FROM
        study_data
    JOIN
        study_languages ON study_data.study_language_id = study_languages.id
    WHERE
        DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')
    GROUP BY
        study_languages.study_language, study_languages.color" -->