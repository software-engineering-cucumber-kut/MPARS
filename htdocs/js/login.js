/*顧客ログイン・管理者ログインの認証を行う*/

/*生徒ログイン認証 */
function loginStudent_checkForm(){
    if(document.form1.input01.value == "" 
    || document.form1.input02.value == ""){
        alert("IDとパスワードを入力して下さい。");
	return false;
    }else{
    Student_login(); 
    }
}

/*一般ログイン認証 */
function loginGeneral_checkForm(){
    if(document.form1.input01.value == "" 
    || document.form1.input02.value == ""){
        alert("IDとパスワードを入力して下さい。");
	return false;
    }else{
    General_login(); 
    }
}

/*管理者ログイン認証*/
function loginManager_checkForm(){
    if(document.form1.input01.value == "" 
    || document.form1.input02.value == ""){
        alert("IDとパスワードを入力して下さい。");
	return false;
    }else{
    Manager_login();  
    }
}



const Student_login = () => {
    let login_json = { 
        accountType: "student",
        id: $('#id').val(),
        password: $('#password').val()};
    let sending_string = JSON.stringify(login_json);
    /*送信データ確認用 
    $( '#result' ).html( sending_string );
    */
    $.ajax({
        type: 'POST',
        url: 'data/login.php',
        datatype: 'json',
        data: sending_string
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = "/reserveproducts.php";
        } else {
            console.log("request sending failed");
            alert("IDもしくはパスワードが間違っています。"); 
        }
    });
};

const General_login = () => {
    let login_json = { 
        accountType: "general",
        name: $('#id').val(),
        password: $('#password').val()};
    let sending_string = JSON.stringify(login_json);
    /*送信データ確認用 
    $( '#result' ).html( sending_string );
    */
    $.ajax({
        type: 'POST',
        url: 'data/login.php',
        datatype: 'json',
        data: sending_string
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = "/reserveProducts.php";
        } else {
            console.log("request sending failed");
            alert("IDもしくはパスワードが間違っています。"); 
        }
    });
};

const Manager_login = () => {
    let login_json = { 
        accountType: "manager",
        id: $('#id').val(),
        password: $('#password').val()};
    let sending_string = JSON.stringify(login_json);
    /*送信データ確認用 
    $( '#result' ).html( sending_string );
    */
    $.ajax({
        type: 'POST',
        url: 'data/login.php',
        datatype: 'json',
        data: sending_string
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = "/manager.php";
        } else {
            console.log("request sending failed");
            alert("IDもしくはパスワードが間違っています。"); 
        }
    });
};