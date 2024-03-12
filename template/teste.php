
<input type="number" id="livro" value="" style="Width: 50px;">

<button class="btn btn-primary" value="Guardar" onclick="GuardaLivro()">guardar</button>



<script>
    function GuardaLivro(){

        const livro = document.getElementById("livro").value;

              url="guardaCookie.php?l=" + livro
              //alert(url)
              fetch(url)
              
              

            
  
     

    }
</script>


