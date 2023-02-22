$('#rectangle').submit(function() {
    event.preventDefault();
    var length = $('#length-rectangle').val();
    var width = $('#width-rectangle').val();
    var result = '';
    var error = '';
    if (!length || !width){
        error = 'Không được để trống dữ liệu'
    }else if ( isNaN(length) || isNaN(width)){
        error = 'Cần nhập dữ liệu là số'
    }
    if (!error) {
        var perimeter = (length * 1 + width * 1) * 2;
        var area = length * width;
        result += 'Chu vi = ' + perimeter + 'm'
        result += '<br>Diện Tích = ' + area +'m<sup>2</sup>'
        
    }
    $('#result').html(result);
    $('#error').html(error);
});
$('#square').submit(function() {
    event.preventDefault();
    var obj_side = $('#side-square').val();
    var side = obj_side * 1 ;
    var result_square = '';
    var error_square = '';
    if (!obj_side){
        error_square = 'Không được để trống dữ liệu'
    }else if ( isNaN(obj_side)){
        error_square = 'Cần nhập dữ liệu là số'
    }
    if (!error_square) {
        var perimeter = side * 4;
        var area = side ** 2;
        result_square += 'Chu vi = ' + perimeter + 'm'
        result_square += '<br>Diện Tích = ' + area +'m<sup>2</sup>'
        
    }
    $('#result-square').html(result_square);
    $('#error-square').html(error_square);
});
$('#circle').submit(function() {
    event.preventDefault();
    var obj_radius = $('#radius').val();
    var radius = obj_radius * 1 ;
    var pi = 3.14 ;
    var result_circle = '';
    var error_circle = '';
    if (!obj_radius){
        error_circle = 'Không được để trống dữ liệu'
    }else if ( isNaN(obj_radius)){
        error_circle = 'Cần nhập dữ liệu là số'
    }
    if (!error_circle) {
        var perimeter = 2 * radius * pi;
        var area = radius ** 2 * pi;
        result_circle += 'Chu vi = ' + perimeter + 'm'
        result_circle += '<br>Diện Tích = ' + area +'m<sup>2</sup>'
        
    }
    $('#result-circle').html(result_circle);
    $('#error-circle').html(error_circle);
});
$('#Prime').submit(function(){
    event.preventDefault();
    var result_Prime = '';
    var error_Prime = '';
    var obj_number = $('#number').val();
    var number = obj_number * 1;
    if (!obj_number){
        error_Prime = 'Không được để trống dữ liệu';
    }else if ( isNaN(obj_number)){
        error_Prime = 'Cần nhập dữ liệu là số';
    }
    else if (obj_number == 1){
        error_Prime = ' 1 không phải là số nguyên tố';
    }
    if (!error_Prime){
        function isPrime(a){
            if (a < 2){
                return  false;
            } 
            for (var i = 2; i <= Math.sqrt(a); i ++){
                if (a % i === 0) {
                    return  false;
                }
            }
            return true;
        }
        for (var i = 2;i <= number; i++){
            if (isPrime(i)){
                result_Prime += i + ', ';
            }
        }

        result_Prime ='Các số nguyên từ 1 - '+number + ' là : '+  result_Prime.slice(0,-2);
    }
    $('#result-Prime').html(result_Prime);
    $('#error-Prime').html(error_Prime);

})
$('#check').validate({
    rules: {
        check:{
            required: true,
            number: true,
        }
    },
    messages:{
        check:{
            required: 'phải nhập',
            number: 'phải là số',
        }
    }
});

$('#check').submit(function () { 
    if ($('#check').valid()){
        var check = $('#number-check').val();
        var oddnumber = '';
        var evennumber = '';
        for (var i = 1;i <= check;i++){
            if (i % 2 === 0){
                evennumber += i +', ';
            }else {
                oddnumber += i + ', ';
            }
        }
        evennumber = evennumber.slice(0,-2);
        oddnumber = oddnumber.slice(0,-2);
        $('#result-check').html(
            'Các số chắn từ 1 -' +check +' là: ' + evennumber 
            + '<br>'+ 'Các số lẻ từ 1 -'+check +' là: ' + oddnumber
            )
            // this.submit();
            event.preventDefault();
    }
});