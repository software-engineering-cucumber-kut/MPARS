/*新規アカウント登録情報の送信 */



const newAccount = () => {
    if($_POST['student']){
        isstudent = 1;
        let newAccount_json = { 
            isstudent: 1,
            id: $('#sUserid').val() ,
            name: $('#sname').val() ,
            phonenumber: $('#sphonenumber').val() ,
            password: $('#password').val() 
        };
        let sending_string = JSON.stringify(newAccount_json);
    } else {
        isstudent = 0;
        let newAccount_json = { 
            isstudent: 0,
            id: $('#Userid').val() ,
            name: $('#name').val() ,
            phonenumber: $('#phonenumber').val() ,
            password: $('#password2').val(), 
            address: $('#address').val() ,
            birthday: $('#birthday').val() ,
            mail: $('#mail').val()  
        };
        let sending_string = JSON.stringify(newAccount_json);
    }

        $.ajax({
          type: 'POST',
          url: 'http://localhost:8888/putCustomer.php',
          datatype: 'json',
          data: sending_string
        }).done((res) => {
            if (JSON.parse(res).success) {
                location.href = "http://localhost:8888/loginCustomer.php";
           } else {
               console.log("newAccount sending failed");
           }
        });
};


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