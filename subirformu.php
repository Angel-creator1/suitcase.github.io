<?php


include 'sesiones.php';


 ?>

<br>
 <center><div><table>

 	<td>
 		<br>


<center><a href="javascript:abrir()" style="color: rgb(232, 25, 5);font-size:250%; ">Ayuda</a></center>
<br>
<br>
 	<h1 color="red" class="c"><center> Crear cuestionario</center></h1>
 	<form method="POST" action="subirformu2.php" enctype="multipart/form-data">

  <h2>Crear o digitar id de cuestionario </h2>
   <input type="text" name="id" placeholder="id cuestionario"></input><h3 style="color:rgba(255, 1, 1, 0.82)">*Importante*</h3>
   <br>
   <h2>Crear CONTRASEÑA de cuestionario</h2><h3 style="color:rgba(255, 1, 1, 0.82)">*Opcional*</h3>
   <h4>"Si no creas contraseña para tu cuestionario cualquier persona podra realizarlo"</h4>
    <input type="text" name="pass" placeholder="Contraseña"></input>
<BR>
<br>
<br>
 		<h2>Nombre del cuestionario</h2>
 		<input type="text" name="nombrecues" placeholder="Nombre cuestionario"></input>

<nav class="tuto" id="inst">

<h4 style="color:rgba(48, 48, 48, 0.94); text-align:left;" >AYUDA:
  Aquí podras crear tu propio cuestionario, con tus propias preguntas.
  Para ver el resultado y empezar a llenar las preguntas puedes ir a la pestaña CREAR y ver,editar o eliminar tus cuestionarios creados
  </h4>
 <center><a href="subirformu.php" ><h2 style="color:rgb(190, 24, 24);">Cerrar</h3></a></center>

</nav>
<h2>Cantidad de preguntas del cuestionario</h2>
<h5><p>Aquí colocaras el numero de preguntas sobre el cual sera
  calificado tu cuestionario</p></h5>
  <h5><p>NOTA quien diligencie el cuestionario debera responder el mismo o menor numero de preguntas aquí estipuladas
  si no lo hace se le restaran 90 puntos </p></h5>
<select name="numpreguntas">
   <center><option name="numpreguntas"   value="nada">...</option></center>
<center><option name="numpreguntas"   value="1"> 1</option></center>
<center><option name="numpreguntas"   value="2"> 2</option></center>
<center><option name="numpreguntas"   value="3"> 3</option></center>
<center><option name="numpreguntas"   value="4"> 4</option></center>
<center><option name="numpreguntas"   value="5"> 5</option></center>
<center><option name="numpreguntas"   value="6"> 6</option></center>
<center><option name="numpreguntas"   value="7"> 7</option></center>
<center><option name="numpreguntas"   value="8"> 8</option></center>
<center><option name="numpreguntas"   value="1"> 9</option></center>
<center><option name="numpreguntas"   value="10"> 10</option></center>
<center><option name="numpreguntas"   value="11"> 11</option></center>
<center><option name="numpreguntas"   value="12"> 12</option></center>
<center><option name="numpreguntas"   value="13"> 13</option></center>
<center><option name="numpreguntas"   value="14"> 14</option></center>
<center><option name="numpreguntas"   value="15"> 15</option></center>
<center><option name="numpreguntas"   value="16"> 16</option></center>
<center><option name="numpreguntas"   value="17"> 17</option></center>
<center><option name="numpreguntas"   value="18"> 18</option></center>
<center><option name="numpreguntas"   value="19"> 19</option></center>
<center><option name="numpreguntas"   value="20"> 20</option></center>
<center><option name="numpreguntas"   value="21"> 21</option></center>
<center><option name="numpreguntas"   value="22"> 22</option></center>
<center><option name="numpreguntas"   value="23"> 23</option></center>
<center><option name="numpreguntas"   value="24"> 24</option></center>
<center><option name="numpreguntas"   value="25"> 25</option></center>
<center><option name="numpreguntas"   value="26"> 26</option></center>
<center><option name="numpreguntas"   value="27"> 27</option></center>
<center><option name="numpreguntas"   value="28"> 28</option></center>
<center><option name="numpreguntas"   value="29"> 29</option></center>
<center><option name="numpreguntas"   value="30"> 30</option></center>
<center><option name="numpreguntas"   value="31"> 31</option></center>
<center><option name="numpreguntas"   value="32"> 32</option></center>
<center><option name="numpreguntas"   value="33"> 33</option></center>
<center><option name="numpreguntas"   value="34"> 34</option></center>
<center><option name="numpreguntas"   value="35"> 35</option></center>
<center><option name="numpreguntas"   value="36"> 36</option></center>
<center><option name="numpreguntas"   value="37"> 37</option></center>
<center><option name="numpreguntas"   value="38"> 38</option></center>
<center><option name="numpreguntas"   value="39"> 39</option></center>
<center><option name="numpreguntas"   value="40"> 40</option></center>
<center><option name="numpreguntas"   value="41"> 41</option></center>
<center><option name="numpreguntas"   value="42"> 42</option></center>
<center><option name="numpreguntas"   value="43"> 43</option></center>
<center><option name="numpreguntas"   value="44"> 44</option></center>
<center><option name="numpreguntas"   value="45"> 45</option></center>
<center><option name="numpreguntas"   value="46"> 46</option></center>
<center><option name="numpreguntas"   value="47"> 47</option></center>
<center><option name="numpreguntas"   value="48"> 48</option></center>
<center><option name="numpreguntas"   value="49"> 49</option></center>
<center><option name="numpreguntas"   value="50"> 50</option></center>
<center><option name="numpreguntas"   value="51"> 51</option></center>
<center><option name="numpreguntas"   value="52"> 52</option></center>
<center><option name="numpreguntas"   value="53"> 53</option></center>
<center><option name="numpreguntas"   value="54"> 54</option></center>
<center><option name="numpreguntas"   value="55"> 55</option></center>
<center><option name="numpreguntas"   value="56"> 56</option></center>
<center><option name="numpreguntas"   value="57"> 57</option></center>
<center><option name="numpreguntas"   value="58"> 58</option></center>
<center><option name="numpreguntas"   value="59"> 59</option></center>
<center><option name="numpreguntas"   value="60"> 60</option></center>
<center><option name="numpreguntas"   value="61"> 61</option></center>
<center><option name="numpreguntas"   value="62"> 62</option></center>
<center><option name="numpreguntas"   value="63"> 63</option></center>
<center><option name="numpreguntas"   value="64"> 64</option></center>
<center><option name="numpreguntas"   value="65"> 65</option></center>
<center><option name="numpreguntas"   value="66"> 66</option></center>
<center><option name="numpreguntas"   value="67"> 67</option></center>
<center><option name="numpreguntas"   value="68"> 68</option></center>
<center><option name="numpreguntas"   value="69"> 69</option></center>
<center><option name="numpreguntas"   value="70"> 70</option></center>
<center><option name="numpreguntas"   value="71"> 71</option></center>
<center><option name="numpreguntas"   value="72"> 72</option></center>
<center><option name="numpreguntas"   value="73"> 73</option></center>
<center><option name="numpreguntas"   value="74"> 74</option></center>
<center><option name="numpreguntas"   value="75"> 75</option></center>
<center><option name="numpreguntas"   value="76"> 76</option></center>
<center><option name="numpreguntas"   value="77"> 77</option></center>
<center><option name="numpreguntas"   value="78"> 78</option></center>
<center><option name="numpreguntas"   value="79"> 79</option></center>
<center><option name="numpreguntas"   value="80"> 80</option></center>
<center><option name="numpreguntas"   value="81"> 81</option></center>
<center><option name="numpreguntas"   value="82"> 82</option></center>
<center><option name="numpreguntas"   value="83"> 83</option></center>
<center><option name="numpreguntas"   value="84"> 84</option></center>
<center><option name="numpreguntas"   value="85"> 85</option></center>
<center><option name="numpreguntas"   value="86"> 86</option></center>
<center><option name="numpreguntas"   value="87"> 87</option></center>
<center><option name="numpreguntas"   value="88"> 88</option></center>
<center><option name="numpreguntas"   value="89"> 89</option></center>
<center><option name="numpreguntas"   value="90"> 90</option></center>
<center><option name="numpreguntas"   value="91"> 91</option></center>
<center><option name="numpreguntas"   value="92"> 92</option></center>
<center><option name="numpreguntas"   value="93"> 93</option></center>
<center><option name="numpreguntas"   value="94"> 94</option></center>
<center><option name="numpreguntas"   value="95"> 95</option></center>
<center><option name="numpreguntas"   value="96"> 96</option></center>
<center><option name="numpreguntas"   value="97"> 97</option></center>
<center><option name="numpreguntas"   value="98"> 98</option></center>
<center><option name="numpreguntas"   value="99"> 99</option></center>
<center><option name="numpreguntas"   value="100"> 100</option></center>
<center><option name="numpreguntas"   value="101"> 101</option></center>
<center><option name="numpreguntas"   value="102"> 102</option></center>
<center><option name="numpreguntas"   value="103"> 103</option></center>
<center><option name="numpreguntas"   value="104"> 104</option></center>
<center><option name="numpreguntas"   value="105"> 105</option></center>
<center><option name="numpreguntas"   value="106"> 106</option></center>
<center><option name="numpreguntas"   value="107"> 107</option></center>
<center><option name="numpreguntas"   value="108"> 108</option></center>
<center><option name="numpreguntas"   value="109"> 109</option></center>
<center><option name="numpreguntas"   value="110"> 110</option></center>
<center><option name="numpreguntas"   value="111"> 111</option></center>
<center><option name="numpreguntas"   value="112"> 112</option></center>
<center><option name="numpreguntas"   value="113"> 113</option></center>
<center><option name="numpreguntas"   value="114"> 114</option></center>
<center><option name="numpreguntas"   value="115"> 115</option></center>
<center><option name="numpreguntas"   value="116"> 116</option></center>
<center><option name="numpreguntas"   value="117"> 117</option></center>
<center><option name="numpreguntas"   value="118"> 118</option></center>
<center><option name="numpreguntas"   value="119"> 119</option></center>
<center><option name="numpreguntas"   value="120"> 120</option></center>

</select>
<br>
<h2>Subir link de video a recomendar</h2>
<input type="text" name="video" placeholder="link video">
<br>
<br>
<h1 class="c">Sube la primera pregunta</h1>
  <h1 class="c">de tu cuestionario</h1>
  <h1><?php echo $_POST['id']; ?></h1>
  <br>
 <h2>Número de pregunta a digitar</h2>

 <select name="numpregunta">

 <center><option name="numpregunta"   value="nada">...</option></center>
 <center><option name="numpregunta"   value="pregunta 1">pregunta 1</option></center>


        </select>
 <br>
 <h2>Contextualización</h2>
 <h2>Imagen</h2>
 <center><input type="file" name="imagenc"></input><h3>Sube una imagen para la Contextualización</h3></center>
 <center><textarea name="contextualizacion2" rows="4" cols="20" placeholder="Contextualización" class="context"></textarea></center>
 <h2>Pregunta</h2>
 <h2>Imagen</h2>
 <center><input type="file" name="imagenp"></input><h3>Sube una imagen para la Pregunta</h3></center>
 <center><textarea name="pregunta2" rows="4" cols="20" placeholder="Pregunta" class="pregunta"></textarea></center>
 <br>
 <h4 style="color:rgb(222, 62, 27);">Recuerda que las opciones apareceran en orden aleatorio</h4>
 <br>
 <br>
 <h3>opcion1</h3>
 <center><textarea name="opcion1" rows="4" cols="20" placeholder="opcion 1" class="opciones"></textarea></center>
 <h3>OPCIÓN CORRECTA</h3>
 <center><textarea name="opcion2" rows="4" cols="20" placeholder="OPCION CORRECTA" class="opciones"></textarea></center>
 <h3>opcion3</h3>
 <center><textarea name="opcion3" rows="4" cols="20" placeholder="opcion 3" class="opciones"></textarea></center>
 <h3>opcion4</h3>
 <center><textarea name="opcion4" rows="4" cols="20" placeholder="opcion 4" class="opciones"></textarea></center>

 <br>
 <br>
 <br>

 <input type="submit" value="<?php  echo $_POST['id']; ?>" class="i2" name="id"></input>

</center>
 <script>

   function abrir() {

     document.getElementById("inst").style.display="block";


 }



 </script>
</body>

 </html>

 <input type="submit" value="Crear" class="i2"></input>


 <script>

   function abrir() {

     document.getElementById("inst").style.display="block";


 }



 </script>
</body>

 </html>
