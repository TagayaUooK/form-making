document.getElementById("send_check").addEventListener("click",function() {
  var hold_name = $("#In_name").val();
  var hold_kana = $("#In_kana").val();
  var hold_tel = $("#In_tel").val();
  var hold_email = $("#In_email").val();
  var hold_body = $("#In_body").val();

  var Check_name = /^[\u3040-\u309f\u30a0-\u30ff\u30e0-\u9fc]{1,10}$/;
  var Check_kana = /^[\u30a0-\u30ff]{1,10}$/;
  var Check_email = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$/;
  var Check_tel = /^[0-9]{10,11}$/;
  let message = [];
  if(hold_name ==""){message.push("名前が未入力です。")
    }else if(!Check_name.test(hold_name))
      {message.push("漢字・ひらがなでスペースを入れずに入力してください")};
  if(hold_kana ==""){message.push("フリガナが未入力です。")
    }else if(!Check_kana.test(hold_kana))
      {message.push("カタカナでスペースを入れずに入力してください")};
  if(hold_tel ==""){message.push("電話番号が未入力です。")
    }else if(!Check_tel.test(hold_tel))
      {message.push("数字だけで10~11文字で入力してください")};
  if(hold_email ==""){message.push("メールアドレスが未入力です。")
    }else if(!Check_email.test(hold_email))
      {message.push("メールアドレスの形式が不正です。")};
  if(hold_body ==""){message.push("お問い合わせ内容が未入力です。")};
  if(message.length > 0){alert(message); return;}
/* <span>*</span>の間にmessage.pushの内容を入れる。
  PHP側での処理が良い？
  */
  else if(message.length == 0){
  sessionStorage.setItem("NAME",hold_name);
  sessionStorage.setItem("KANA",hold_kana);
  sessionStorage.setItem("TEL",hold_tel);
  sessionStorage.setItem("Email",hold_email);
  sessionStorage.setItem("BODY",hold_body);
  document.location.href = "confirm.php";
};
},false);

window.onload = function() {
document.getElementById("In_name").innerHTML = sessionStorage.getItem("NAME");
document.getElementById("In_kana").innerHTML = sessionStorage.getItem("KANA");
document.getElementById("In_tel").innerHTML = sessionStorage.getItem("TEL");
document.getElementById("In_email").innerHTML = sessionStorage.getItem("Email");
document.getElementById("In_body").innerHTML = sessionStorage.getItem("BODY");
sessionStorage.clear();
};
/*氏名～メールまで戻った後読み込まれるが、表示されず
  原因：Input？　textareaなら表示される。　統一するか？
      or Inputの後に<a>入れる？*/
