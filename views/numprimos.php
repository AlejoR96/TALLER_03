<!--VISTA NUMPRIMOS-->
<p class="styleTitulosubMenu">Numeros primos</p>
<!--TITULO -->

<div>

    <form action="../controller/controllerCalculoNumPrimos.php" method="post">

        <div>
            <div>
                <label>No: </label>
            </div>

            <div>
                <input type="number" name "varInt" placeholder="Digite un numero">
            </div>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>

    </form>

</div>

<div>

    <?php

       if(isset($respuesta)){
           echo $respuesta; 
       }
       

    ?>


</div>