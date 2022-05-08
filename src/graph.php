<?php

use JetBrains\PhpStorm\Language;

$bar_stmt = $db->prepare("SELECT study_date,sum(study_hour) as sum_study_hour
  FROM study_data
  GROUP BY study_date
  HAVING DATE_FORMAT(study_date, '%Y%m')=DATE_FORMAT(NOW(), '%Y%m')");
$bar_stmt->execute();
$bars = $bar_stmt->fetchAll();


$language_stmt = $db->prepare("SELECT study_languages.study_language,study_languages.color,sum(study_data.study_hour) as sum_study_hour
  FROM study_data
  JOIN study_languages ON study_data.study_language_id = study_languages.id
  WHERE DATE_FORMAT(study_date, '%Y%m')=DATE_FORMAT(NOW(), '%Y%m')
  GROUP BY study_languages.study_language,study_languages.color");
$language_stmt->execute();
$languages = $language_stmt->fetchAll();

// var_dump($languages);

$content_stmt = $db->prepare("SELECT study_contents.study_content,study_contents.color,sum(study_data.study_hour) as sum_study_hour
  FROM study_data
  JOIN study_contents ON study_data.study_content_id = study_contents.id
  WHERE DATE_FORMAT(study_date, '%Y%m')=DATE_FORMAT(NOW(), '%Y%m')
  GROUP BY study_contents.study_content,study_contents.color");
$content_stmt->execute();
$contents = $content_stmt->fetchAll();



?>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
  "use strict";

  // COLUMN CHART

  const column = document.getElementById("column").getContext("2d");

  var gradient = column.createLinearGradient(0, 0, 0, 300);
  gradient.addColorStop(0, "rgba(54, 206, 254, 1)");
  gradient.addColorStop(1, "rgba(17,115,189, 1)");

  const myColumnChart = new Chart(column, {
    // label: 'none',

    type: "bar",
    data: {
      labels: [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21,
        22, 23, 24, 25, 26, 27, 28, 29, 30,
      ],
      datasets: [{
        data: [
          <?php
          foreach ($bars as $bar) {
            if (!isset($bar["sum_study_hour"])) {
              echo $bar = 0 . ",";
            } else {
              echo $bar["sum_study_hour"] . ",";
            }
          } ?>
          // 3, 4, 5, 3, 0, 0, 4, 2, 2, 8, 8, 2, 2, 1, 7, 4, 4, 3, 3, 3, 2, 2, 6,
          // 2, 2, 1, 1, 1, 7, 8,
        ],
        backgroundColor: gradient,
        borderRadius: 50,
        borderSkipped: false,
      }, ],
      // barPercentage: 0.3
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          grid: {
            display: false,
            drawBorder: false,
          },
          ticks: {
            // min: 2,
            // maxTicksLimit: 15,
            color: "#bdd1e1",
            autoSkip: false,
            min: 1,
            max: 30,
            padding: 0,
            // stepSize: 2,
            callback: function(val, index) {
              // Hide the label of every 2nd dataset
              return index % 2 === 1 ? this.getLabelForValue(val) : "";
            },
            maxRotation: 0,
            minRotation: 0,
          },
          // barPercentage: 0.3
        },
        y: {
          grid: {
            display: false,
            drawBorder: false,
          },
          max: 8,
          min: 0,
          ticks: {
            stepSize: 2,
            callback: function(value) {
              return value + "h";
            },
            color: "#bdd1e1",
          },
        },
      },
      plugins: {
        legend: {
          display: false,
        },
      },
    },
  });



  // DONUT CHART

  // STUDY LANGUAGE

  const donut1 = document.getElementById("donut_lang").getContext("2d");

  const myFirstDonutChart = new Chart(donut1, {
    type: "doughnut",
    data: {
      labels: [
        // "HTML",
        // "CSS",
        // "SQL",
        // "SHELL",
        // "Javascript",
        // "その他",
        // "PHP",
        // "Laravel",
      ],
      datasets: [{
        data: [
          <?php
          foreach ($languages as $language) {
            echo $language['sum_study_hour'] ?> , <?php
          }
          ?>
          // 30, 20, 20, 20, 10, 10, 5, 5
        ],
        backgroundColor: [
          <?php
          foreach ($languages as $language) { ?>
            "#<?php echo $language['color'] ?>" , <?php
          }
          ?>
          // "#0445ec",
          // "#0f70bd",
          // "#20bdde",
          // "#3ccefe",
          // "#b29ef3",
          // "#6c46eb",
          // "#4a17ef",
          // "#3005c0",
        ],
        borderColor: "transparent",
      }, ],
    },
    plugins: [ChartDataLabels],
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false,
        },
        datalabels: {
          color: "#fff",
          formatter: function(value) {
            return value;
          },
        },
      },
    },
  });

  // STUDY CONTENT

  const donut2 = document.getElementById("donut_content").getContext("2d");

  const mySecondDonutChart = new Chart(donut2, {
    type: "doughnut",
    data: {
      labels: [
        // "N予備校", "課題", "ドットインストール"
      ],
      datasets: [{
        data: [
          <?php
          foreach ($contents as $content) {
            echo $content['sum_study_hour'] ?> , <?php
          }
          ?>
          // 40, 40, 20
        ],
        backgroundColor: [
          <?php
          foreach ($contents as $content) { ?>
            "#<?php echo $content['color'] ?>" , <?php
          }
          ?>
          // "#0445ec", "#0f70bd", "#20bdde"
        ],
        borderColor: "transparent",
      }, ],
    },
    plugins: [ChartDataLabels],
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false,
        },
        datalabels: {
          color: "#fff",
          formatter: function(value) {
            return value;
          },
        },
      },
    },
  });
</script>