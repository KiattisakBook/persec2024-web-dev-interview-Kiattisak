<script>

    function hexadecimal_to_rgb(hex) { // Ex. hexadecimal_to_rgb('#FFF')

        var r = "";
        var g = "";
        var b = "";

        if(hex.length === 4){ // ถ้าเป็นแบบย่อ

          r = hex.slice(1,2);
          g = hex.slice(2,3);
          b = hex.slice(3,4);

          r = parseInt(r+r, 16);
          g = parseInt(g+g, 16);
          b = parseInt(b+b, 16);

        }else{ // ถ้าเป็นแบบเต็ม
            r = parseInt(hex.slice(1, 3), 16);
            g = parseInt(hex.slice(3, 5), 16);
            b = parseInt(hex.slice(5, 7), 16);
        }

        return '{r:'+r+',g:'+g+',b:'+b+'}';
      
    }

</script>