// b1
            var obj_form = document.querySelector('#form');
            obj_form.addEventListener('submit', function(){
            var error = '';
            var result = '';
            // var form_email = /^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/;
            var obj_first_name = document.querySelector('#First_Name');
            var First_Name = obj_first_name.value;
            var obj_Last_Name = document.querySelector('#Last_Name');
            var Last_Name = obj_Last_Name.value;
            var obj_Email = document.querySelector('#Email');
            var Email = obj_Email.value;
            var obj_Telephone = document.querySelector('#Telephone');
            var Telephone = obj_Telephone.value;
            if (First_Name == '' || Last_Name == '' || Email == '' || Telephone == ''){
                error = 'first name va last name , email, telephone khong duoc de trong';
            } else if (!/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/.test(Email)) {
                error = 'email khong dung dinh dang';
            } else if (First_Name.length < 4 || Last_Name.length < 4){
                error = 'first name va last name  > 3 ky tu';
            }
            if (error == '') {
                result += "first name : " + First_Name;
                result += "<br>last name : " + Last_Name;
                result += "<br>email : " + Email;
                result += "<br>sdt : " + Telephone;
            }
            document.querySelector('#error').innerHTML = error;
            document.querySelector('#result').innerHTML = result;
            event.preventDefault();
        });
// bai2
var obj_form_2 = document.getElementById('form_2');
obj_form_2.addEventListener('submit', function(){
    var errorb2 = '';
    var resultb2 = '';
    var obj_UserName = document.getElementById('UserName');
    var UserName = obj_UserName.value;
    var obj_PassWord = document.getElementById('PassWord');
    var PassWord = obj_PassWord.value;
    var obj_Emailb2 = document.getElementById('Emailb2');
    var Emailb2 = obj_Emailb2.value;
    var obj_BirthDay = document.getElementById('BirthDay');
    var BirthDay = obj_BirthDay.value;
    var obj_Profession = document.getElementById('Profession');
    var option_val = obj_Profession.value;
    var content = obj_Profession.options[obj_Profession.selectedIndex].text;
    if (UserName == ''|| PassWord == ''|| Emailb2 == ''|| BirthDay == ''){
        errorb2 = 'chua nhap du thong tin';
    }else if (!/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/.test(Emailb2)) {
        errorb2 = 'email khong dung dinh dang';
    }else if (!/^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/.test(BirthDay)){
        errorb2 = 'ngay sinh khong dung dinh dang'
    }if (errorb2 == ''){
        resultb2 += "username :" + UserName; 
        resultb2 += "<br> mk: " + PassWord;
        resultb2 += "<br> email: " + Emailb2;
        resultb2 += "<br> birthday: " + BirthDay;
        resultb2 += "<br> ma nghe: " + option_val;
        resultb2 += "<br> nghe nghiep: " + content;
    }
    document.getElementById('errorb2').innerHTML = errorb2;
    document.getElementById('resultb2').innerHTML = resultb2;
    event.preventDefault();
})
// b3
var obj_b3 = document.querySelector('#b3');
    obj_b3.addEventListener('submit', function(){
        var obj_FullNameb3 = document.querySelector("#FullNameb3").value;
        var obj_Emailb3 = document.querySelector("#Emailb3").value;
        var obj_UserNameb3 = document.querySelector("#UserNameb3").value;
        var obj_PassWordb3 = document.querySelector("#PassWordb3").value;
        var obj_sex = document.forms.b3.elements["sex"].value;
        var errorb3 = '';
        var resultb3 = '';
        if (obj_FullNameb3 == '' || obj_Emailb3 == '' || obj_UserNameb3 == '' || obj_PassWordb3 == '' || obj_sex == '') {
                errorb3 = ' chua nhap du thong tin';
        }else if (obj_FullNameb3.length < 4 || obj_UserNameb3.length < 4){
                errorb3 = 'fullname va user name nhieu hon 3 ky tu';
        }else if (!/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/.test(obj_Emailb3)){
            errorb3 = 'email khong dung dinh dang';
        }if (errorb3 == '') {
            resultb3 += "FullName :" + obj_FullNameb3; 
            resultb3 += "<br> email: " + obj_Emailb3;
            resultb3 += "<br> UserName: " + obj_UserNameb3;
            resultb3 += "<br> mk: " + obj_PassWordb3;
            resultb3 += "<br> gioi tinh: " + obj_sex;
        }
        document.querySelector('#errorb3').innerHTML = errorb3;
        document.querySelector('#resultb3').innerHTML = resultb3;
        event.preventDefault();
    })
// b4
var obj_b4 = document.querySelector('#b4');
obj_b4.addEventListener('submit', function(){
    var errorb4 ='';
    var resultb4 = '';
    var obj_UserNameb4 = document.querySelector('#UserNameb4').value;
    var obj_PassWordb4 = document.querySelector('#PassWordb4').value;
    var obj_Emailb4 = document.querySelector('#Emailb4').value;
    var obj_Nameb4 = document.querySelector('#Nameb4').value;
    var obj_Phone = document.querySelector('#Phone').value;
if (obj_UserNameb4 == '' || obj_PassWordb4 == '' || obj_Emailb4 == '' || obj_Nameb4 == ''){
    errorb4 = "khong được de trong o co *"
}else if(obj_PassWordb4.length < 4 || obj_PassWordb4.length > 8){
    errorb4 = 'mk it nhat 4 va nhieu nhat 8 ky tu '
}else if(!/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/.test(obj_Emailb4)){
    errorb4 = 'email khong dung dinh dang';
}if (errorb4 == ''){
    resultb4 += "UserName :" + obj_UserNameb4; 
    resultb4 += "<br> mk: " + obj_PassWordb4;
    resultb4 += "<br> email: " + obj_Emailb4;
    resultb4 += "<br> Name: " + obj_Nameb4;
    resultb4 += "<br> Phone: " + obj_Phone;
}
        document.querySelector('#errorb4').innerHTML = errorb4;
        document.querySelector('#resultb4').innerHTML = resultb4;
        event.preventDefault();
})
// b5
document.getElementById("b5").addEventListener("submit", function(){

    var UserNameb5 = document.getElementById("UserNameb5").value;
    var PassWordb5 = document.getElementById("PassWordb5").value;
    var RePassWordb5 = document.getElementById("RePassWordb5").value;
    var familyNameb5 = document.getElementById("familyName").value;
    var Nameb5 = document.getElementById("Nameb5").value;
    var Emailb5 = document.getElementById("Emailb5").value;
    var Phoneb5 = document.getElementById("Phoneb5").value;
    var errorb5 ='';
    if (!UserNameb5 || !PassWordb5 || !RePassWordb5 || !familyNameb5 || !Nameb5 || !Emailb5 || !Phoneb5) {
        errorb5 = "Xin vui lòng nhập đầy đủ thông tin.";
    }else if (PassWordb5.length < 4 || PassWordb5.length > 8){
        errorb5 = 'mật khẩu ít nhất 4 ký tự và nhiều nhất 8 ký tự '
    }else if(PassWordb5 !== RePassWordb5){
        errorb5 = "Mật khẩu và nhập lại mật khẩu phải giống nhau."
    }else if (!/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/.test(Emailb5)){
        errorb5 = 'email khong dung dinh dang'
    }else if (familyNameb5.length < 2 || Nameb5.length < 3){
        errorb5 = "  ho phải ít nhất 2 hoặc Tên 3 ký tự."
    }
    if (errorb5 == ''){
        document.querySelector('#resultb5').innerHTML ="UserName :" + UserNameb5 + "<br> mk: " + PassWordb5+ "<br> ho: " + familyNameb5+ "<br> Name: " + Nameb5+ "<br> email: " + Emailb5+ "<br> Phone: " + Phoneb5;
        
    }
        document.querySelector('#errorb5').innerHTML = errorb5;
        event.preventDefault();
    })
    // b6 
    var obj_b6 = document.querySelector('.main');
        obj_b6.addEventListener('submit', function () {
            var title = document.querySelector('#Title').value;
            var description = document.querySelector('#des').value;
            var authorName1 = document.querySelector('#nameb6').value;
            var authorRemarks1 = document.querySelector('#remarks').value;
            var authorName2 = document.querySelector('#name_2').value;
            var authorRemarks2 = document.querySelector('#remarks_2').value;
            
            document.querySelector('#resultb6').innerHTML = "Title: " + title + "<br>" + 
            "Description: " + description + "<br>" + 
            "Author 1: " + authorName1 + " - " + authorRemarks1 + "<br>" +
            "Author 2: " + authorName2 + " - " + authorRemarks2;
            event.preventDefault();
        });