var choices = new Array();
choices.push(['たかなわ','こうわ','たかわ']);
choices.push(['かめいど','かめど','かめと']);
choices.push(['こうじまち','かゆまち','おかとまち']);
choices.push(['おなりもん','おかどもん','ごせいもん']);
choices.push(['とどろき','たたりき','たたら']);
choices.push(['しゃくじい','いじい','せきこうい']);
choices.push(['ぞうしき','ざっしき','ざっしょく']);
choices.push(['おかちまち','こみとちょう','ごしろちょう']);
choices.push(['ししぼね','ろっこつ','しこね']);
choices.push(['こぐれ','こしゃく','こばく']);

// question_number：問題番号、1問目の場合は[1]を受け取る
// pushed_number：回答の選択肢配列を受け取る
// answer_number：正解番号、正解の選択肢の番号を受け取る。先頭の選択肢が正解の場合は1となる
function show_result(question_number,pushed_number,answer_number){
  document.getElementById("choices"+question_number+"-"+pushed_number).classList.add('choice-false')
  document.getElementById("choices"+question_number+"-"+answer_number).classList.add('choice-true')
  document.getElementById("answer-box-"+question_number).style.display="block"
  
  if (pushed_number==answer_number){
      document.getElementById("answer-title-"+question_number).innerHTML="正解！"
      document.getElementById("answer-title-"+question_number).classList.add('answer-title-true')
  } else {
      document.getElementById("answer-title-"+question_number).innerHTML="不正解！"
      document.getElementById("answer-title-"+question_number).classList.add('answer-title-false')
  }
  document.getElementById("choices"+question_number+"-1").classList.add('choice-after-click')
  document.getElementById("choices"+question_number+"-2").classList.add('choice-after-click')
  document.getElementById("choices"+question_number+"-3").classList.add('choice-after-click')
}

function making_question(question_number,answer_number){
  
  const main = document.getElementById("main");

    main.insertAdjacentHTML('beforeend','<h1 class="question">'+(question_number+1)+'.この地名なんて読むでしょう？</h1>'
    + '<img src="./img/'+(question_number+1)+'.png">'
    +'<ul class="choice" id="question'+(question_number+1)+'">'
    +'<li id="choices'+(question_number+1)+'-1" onclick="show_result('+(question_number+1)+',1,'+answer_number+')">'+choices[question_number][0]+'</li>'
    +'<li id="choices'+(question_number+1)+'-2" onclick="show_result('+(question_number+1)+',2,'+answer_number+')">'+choices[question_number][1]+'</li>'
    +'<li id="choices'+(question_number+1)+'-3" onclick="show_result('+(question_number+1)+',3,'+answer_number+')">'+choices[question_number][2]+'</li>'
    +'</ul>'
    +'<div class="answer-box" id="answer-box-'+(question_number+1)+'">'
    +'<p class="answer-title" id="answer-title-'+(question_number+1)+'"></p>'
    +'<p class="answer-text" id="answer-text-'+(question_number+1)+'">正解は「'+choices[question_number][answer_number-1]+'」です！！！</p>'
    +'</div>'
    );
}

function arrayShuffle(array,question_number) {
  let answer_index = array[0]
    for(var i = (array.length - 1); 0 < i; i--){
  
      // 0〜(i+1)の範囲で値を取得
      var r = Math.floor(Math.random() * (i + 1));
  
      // 要素の並び替えを実行
      var tmp = array[i];
      array[i] = array[r];
      array[r] = tmp;
    }
    console.log(array.indexOf(answer_index)+1)
    making_question(question_number,array.indexOf(answer_index)+1)
    return array;
  }
  
  // 配列を選択肢の数だけシャッフルする
  for(var i=0; i < choices.length; i++) {
    arrayShuffle(choices[i],i);
  }