/*新規アカウント登録情報の送信 */

let accountType = '';

const newAccount = () => {
    let sending_string = '';
    if(accountType === 'student'){
        let newAccount_json = { 
            isstudent: 1,
            id: $('#sUserid').val() ,
            name: $('#sname').val() ,
            phonenumber: $('#sphonenumber').val() ,
            password: $('#password').val() 
        };
        sending_string = JSON.stringify(newAccount_json);
    } else if(accountType === 'general') {
        isstudent = 0;
        let newAccount_json = { 
            isstudent: 0,
            name: $('#name').val() ,
            phonenumber: $('#phonenumber').val() ,
            password: $('#password2').val(), 
            address: $('#address').val() ,
            birthday: $('#birthday').val().replace(/(年|月|日)/g, '-') ,
            mail: $('#mail').val()  
        };
        sending_string = JSON.stringify(newAccount_json);
    }

    $.ajax({
        type: 'POST',
        url: 'http://localhost:8888/data/putCustomer.php',
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
