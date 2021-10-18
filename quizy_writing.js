var question_list = new Array();
question_list.push(['たかなわ','こうわ','たかわ']);
question_list.push(['かめいど','かめど','かめと']);
question_list.push(['こうじまち','かゆまち','おかとまち']);
question_list.push(['おなりもん','おかどもん','ごせいもん']);
question_list.push(['とどろき','たたりき','たたら']);
question_list.push(['しゃくじい','いじい','せきこうい']);
question_list.push(['ぞうしき','ざっしき','ざっしょく']);
question_list.push(['おかちまち','こみとちょう','ごしろちょう']);
question_list.push(['ししぼね','ろっこつ','しこね']);
question_list.push(['こぐれ','こしゃく','こばく']);


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
      create_html(question_number,array.indexOf(answer_index)+1)
      return array;
    }
    
    // 配列を選択肢の数だけシャッフルする
    for(var i=0; i < question_list.length; i++) {
      arrayShuffle(question_list[i],i);
    }
  

function create_html(question_number,valid_id){

    const main = document.getElementById("main");

    main.insertAdjacentHTML('beforeend','<h1 class="question">'+(question_number+1)+'.この地名なんて読むでしょう？</h1>'
    +'<img src="./img/'+(question_number+1)+'.png">'
    +'<ul class="choice" id="question'+(question_number+1)+'">'
    +'<li id="choices_'+(question_number+1)+'-1" onclick="show_result('+(question_number+1)+',1,'+valid_id+')">'+question_list[question_number][0]+'<li>'
    +'<li id="choices_'+(question_number+1)+'-2" onclick="show_result('+(question_number+1)+',2,'+valid_id+')">'+question_list[question_number][1]+'<li>'
    +'<li id="choices_'+(question_number+1)+'-3" onclick="show_result('+(question_number+1)+',3,'+valid_id+')">'+question_list[question_number][2]+'<li>'
    +'</ul>'
    +'<div class="answer-box" id="answer-box-'+(question_number+1)+'">'
    +'<p class="answer-title" id="answer-title-'+(question_number+1)+'"></p>'
    +'<p class="answer=text" id="answer-text-'+(question_number+1)+'">正解は「'+question_list[question_number][valid_id-1]+'」です！！！</p>'
    +'</div>'
    );
}

function show_result(question_number,pushed_number,valid_id) {
    document.getElementById("choices"+question_number+"-"+pushed_number).classList.add('choice-false')
    document.getElementById("choices"+question_number+"-"+valid_id).classList.add('choice-true')
    document.getElementById("answer-box-"+question_number).style.display="block"
    
    if (pushed_number==valid_id){
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