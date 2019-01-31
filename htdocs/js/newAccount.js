

/*新規アカウント登録情報の送信 */


function student_checkForm(){
    if(document.form1.input01.value == "" 
    || document.form1.input02.value == ""
    || document.form1.input03.value == ""
    || document.form1.input04.value == ""){
        alert("必須項目を全て入力して下さい。");
	return false;
    }else{
    student_newAccount();  
    }
}

function general_checkForm(){
    if(document.form2.input01.value == "" 
    || document.form2.input02.value == ""
    || document.form2.input03.value == ""
    || document.form2.input04.value == ""
    || document.form2.input05.value == ""
    || document.form2.input06.value == ""){
        alert("必須項目を全て入力して下さい。");
	return false;
    }else{
    general_newAccount();
    }
}



const student_newAccount = () => {
    let newAccount_json = { 
        isstudent: "1",
        id: $('#sUserid').val(),
        name: $('#sname').val() ,
        phonenumber: $('#sphonenumber').val() ,
        password: $('#password').val() 
    }

    let sending_string = JSON.stringify(newAccount_json);
    /*チェック用の項目
    $( '#result' ).html(sending_string);
    */
    $.ajax({
        type: 'POST',
        url: 'data/putCustomer.php',
        datatype: 'json',
        data: sending_string
      }).done((res) => {
          if (JSON.parse(res).success) {
              location.href = "/loginCustomer.php";
         } else {
             console.log("newAccount sending failed");
         }
      });
}



const general_newAccount = () => {
    let newAccount_json = { 
        isstudent: "0",
        id: "" ,
        name: $('#dname').val() ,
        phonenumber: $('#phonenumber').val() ,
        password: $('#password2').val(), 
        address: $('#address').val() ,
        birthday: $('#birthday').val().replace(/(年|月|日)/g, '-') ,
        mail: $('#mail').val() 
    }

    let sending_string = JSON.stringify(newAccount_json);
    /*チェック用の項目
    $( '#sresult' ).html( sending_string );
    */
    $.ajax({
        type: 'POST',
        url: 'data/putCustomer.php',
        datatype: 'json',
        data: sending_string
      }).done((res) => {
          if (JSON.parse(res).success) {
              location.href = "/loginCustomer.php";
         } else {
             console.log("newAccount sending failed");
         }
      });
}


/* newAccount.jsの送信データ
{
	“isstudent”:
	“id”:
	“name”:
	“phonenumber”:
	“password”:
	“birthday”:
	“address”:
	“mail”:
}
*/





