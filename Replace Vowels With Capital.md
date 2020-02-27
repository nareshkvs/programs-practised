    <html>
      <script>
        let str = "god is great";
        //let str = "god is awesome";
        //let str = "god is gooood";
        let vowels = ['a', 'e', 'i', 'o', 'u'];
        let vowelsIndexInString = [];
        let vowelsInString = [];
        let nextIndex = 0;

        function isVowel(letter) {
          return letter === "a" || letter === "e" || letter === "i" || letter === "o" || letter === "u";
        }

        for(let index=0; index < str.length; index++){
          let x = String.fromCharCode(str[index]);
          console.log('--'+x);
        }

        function checkIsNextCharacterVowel(i, j){
          return isVowel(str[j]);
        }

        let nextCharacter = '';

        let newStr = str.replace(/[aeiou]/gi, function(x, index, strr) {
          console.log(x+1+'--'+index+'--'+strr);
          //console.log(str.charCodeAt())
          //x= String.fromCharCode(1+x.charCodeAt(0))
          nextIndex = index+1;
          //alert(index+'--'+nextIndex);
          let isVowel = checkIsNextCharacterVowel(index, nextIndex);
          if(nextCharacter=='' && isVowel) {
            str[nextIndex] = String.fromCharCode(1+x.charCodeAt(0));

            prevLetter = String.fromCharCode(x.charCodeAt(0)-1);
            nextLetter = String.fromCharCode(strr[nextIndex].charCodeAt(0)+1);
            //alert(prevLetter+'--'+nextLetter);	
            x = prevLetter;
            nextCharacter = nextLetter;
          } else {
            if(nextCharacter!='')
              x = nextCharacter;

            nextCharacter = '';
          }



          //vowelsInString.push(x.charCodeAt(0));
          //vowelsIndexInString.push(index);
          return x.toUpperCase();
        });

        alert(newStr);

      </script>
    </html>
