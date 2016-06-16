<!-- Login -->
<div class="row">
  <div class="col s12 m5">
    <div class="row" id="iconos">
      <div class="col s4 m12">
        <a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/fb.png" alt="" id="redes"></a>
      </div>
      <div class="col s4 m12">
        <a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/tw.png" alt="" id="redes"></a>
      </div>
      <div class="col s4 m12">
        <a href="#" class="btn-floating btn-large" id="btn_red"><img src="../imagenes/yt.png" alt="" id="redes"></a>
      </div>
    </div>
  </div>
  <div class="col s12 m6">
    <form action="../../WEBAPP/Controller/controller.php" method="POST" id="login">
      <label for="documento" class="text-black">Nº Documento:</label>
      <input type="text" placeholder="Ingrese numero de documento" id="documento" name="log_doc" required="">
      <br>
      <label for="contrasena" class="text-black">Contraseña:</label>
      <input type="password" placeholder="Ingrese Contraseña" id="contrasena" name="log_pass" required="">
      <button type="submit" class="waves-effect waves-light btn orange darken-3" value="INGRESAR" style="height: 40px;" name="action">INGRESAR</button>
    </form>
  </div>
</div>
<!-- Recomendaciones -->
<div class="row">
  <section class="card-panel z-depth-2">
      <h2 class="white center" >Recomendaciones De Salud</h2>
    <div class="row">
      <article class="col s6 m3 border-right">
        <h4 class="center-align flow-text">CORRER</h4>
        <img src="../imagenes/recomendacion1.jpg" class="responsive-img">
        <p class="justify">Correr en la calle o en una banda caminadora proporciona varios beneficios para la salud, incluyendo la disminución de la presión arterial, una mejor función pulmonar y rendimiento cardiovascular. Sin embargo, de que correr al aire libre tiene una ligera ventaja sobre el uso de la banda caminadora. Con base en un estudio publicado en el Diario de Psicología, la resistencia del viento y la necesidad de recorrer las curvas y vueltas en la calle causa que el corredor gaste más energía al aire libre que cuando corre en una banda caminadora.</p>
      </article>
      <article class="col s6 m3 border-right">
        <h4 class="center-align flow-text">PESO</h4>
        <img src="../imagenes/recomendacion2.jpg" class="responsive-img">
        <p class="justify">Primero, necesitas determinar cuál es tu objetivo. En el caso de que sea aumentar la resistencia, deberías realizar entre 12 y 20 repeticiones. Si lo que quieres es incrementar la fuerza o la potencia de explosión, debes reducir el número de repeticiones (entre 1 y 8 ) y aumentar la carga. Una vez definido el objetivo, solo tienes que comprobar cuál es la carga que te permite finalizar las repeticiones manteniendo la tensión en los últimos movimientos. Si las 2 últimas repeticiones no te son difíciles de completar, es porque aún puedes aumentar más la carga.</p>
      </article>
      <article class="col s6 m3 border-right">
        <h4 class="center-align flow-text">DIETA</h4>
        <img src="../imagenes/recomendacion3.jpg" class="responsive-img">
        <p class="justify">Bajar de peso, aumentar masa muscular, tonificar o simplemente tener un momento de recreación son los incentivos más comunes de aquellos que deciden asistir a un gimnasio, trotar en el parque o montar en bicicleta. Pero, aunque todas estas motivaciones son válidas, si se quiere resultados es indispensable una dieta específica. Los que quieren sólo un momento de esparcimiento, no deben tener tantas restricciones en cuanto a la alimentación,aunque ésta sí debe ser balanceada</p>
      </article>
      <article class="col s6 m3 ">
        <h4 class="center-align flow-text" >CALENTAMIENTO</h4>
        <img src="../imagenes/recomendacion4.jpg" class="responsive-img">
        <p class="justify">Bajar de peso, aumentar masa muscular, tonificar o simplemente tener un momento de recreaciónson los incentivos más comunes de aquellos que deciden asistir a un gimnasio, trotar en el parque o montar en bicicleta.Pero, aunque todas estas motivaciones son válidas, si se quiere resultados es indispensable una dieta específica.	Los que quieren sólo un momento de esparcimiento, no deben tener tantas restricciones en cuanto a la alimentación,aunque ésta sí debe ser balanceada</p>
      </article>
    </div>
  </section>
</div>
