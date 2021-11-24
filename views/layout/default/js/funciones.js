function countChars(obj, valor){
        let minLength = valor
        let strLength = obj.value.length;

        document.getElementById("charNum").innerHTML = obj.value.length+' caracteres';

        if(strLength < minLength){
            document.getElementById("charNum").innerHTML = 'El minimo es ' + minLength + ' caracteres';
        }

    }