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
 	<h1 color="red" class="c"><center> Crear o editar cuestionario</center></h1>
 	<form method="POST" action="subirformu2.php" enctype="multipart/form-data">

  <h2>Crear o digitar id de cuestionario a actualizar</h2>
   <input type="text" name="id"></input><h3 style="color:rgba(255, 1, 1, 0.82)">*Importante*</h3>
   <br>
   <h2>Crear CONTRASEÑA de cuestionario</h2><h3 style="color:rgba(255, 1, 1, 0.82)">*Opcional*</h3>
   <h4>"Si no creas contraseña para tu cuestionario cualquier persona podra realizarlo"</h4>
    <input type="text" name="pass"></input>
<BR>
<br>
<br>
 		<h2>Nombre del cuestionario</h2>
 		<input type="text" name="nombrecues"></input>

<nav class="tuto" id="inst">

<h4 style="color:rgba(48, 48, 48, 0.94); text-align:left;" >AYUDA:
  Aquí podras crear tu propio cuestionario, con tus propias preguntas.
  Para ver el resultado puedes ir a la pestaña CREAR y ver tus cuestionarios creados
  ,si quieres editar o actualizar tu cuestionario lo puedes hacer aqui mismo llenando el id de cuestionario,
  el nombre de cuestionario y el numero de pregunta.Recuerda que Suitcase califica sobre 100

 NOTA:Si vas a actualizar cuestionarios tendras que  diligenciar el id del cuestionario que quieres cambiar y despues
  TODOS los datos a actualizar.</h4>
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
<br>
<br>
<br>
 <h1 class="c">Aquí empezaras a llenar</h1>
  <h1 class="c">  las preguntas de tu cuestionario</h1>
 <h2>Número de pregunta a digitar</h2>

 <select name="numpregunta">

 <center><option name="numpregunta"   value="nada">...</option></center>
 <center><option name="numpregunta"   value="pregunta 1">pregunta 1</option></center>
 <center><option name="numpregunta"  value="pregunta 11">pregunta 2</option></center>
 <center><option name="numpregunta"   value="pregunta 12">pregunta 3</option></center>
 <center><option name="numpregunta"   value="pregunta 13">pregunta 4</option></center>
 <center><option name="numpregunta"   value="pregunta 14">pregunta 5</option></center>
 <center><option name="numpregunta"   value="pregunta 15">pregunta 6</option></center>
 <center><option name="numpregunta"   value="pregunta 16">pregunta 7</option></center>
 <center><option name="numpregunta"  value="pregunta 17">pregunta 8</option></center>
 <center><option name="numpregunta"   value="pregunta 18">pregunta 9</option></center>
 <center><option name="numpregunta"   value="pregunta 19">pregunta 10</option></center>
 <center><option name="numpregunta"   value="pregunta 2">pregunta 11</option></center>
 <center><option name="numpregunta"   value="pregunta 20">pregunta 12</option></center>

 <center><option name="numpregunta"   value="pregunta 21">pregunta 13</option></center>
 <center><option name="numpregunta"  value="pregunta 22">pregunta 14</option></center>
 <center><option name="numpregunta"   value="pregunta 23">pregunta 15</option></center>
 <center><option name="numpregunta"   value="pregunta 24">pregunta 16</option></center>
 <center><option name="numpregunta"   value="pregunta 25">pregunta 17</option></center>
 <center><option name="numpregunta"   value="pregunta 26">pregunta 18</option></center>
 <center><option name="numpregunta"   value="pregunta 27">pregunta 19</option></center>
 <center><option name="numpregunta"  value="pregunta 28">pregunta 20</option></center>
 <center><option name="numpregunta"   value="pregunta 29">pregunta 21</option></center>
 <center><option name="numpregunta"   value="pregunta 3">pregunta 22</option></center>
 <center><option name="numpregunta"   value="pregunta 30">pregunta 23</option></center>
 <center><option name="numpregunta"   value="pregunta 31">pregunta 24</option></center>
 <center><option name="numpregunta"   value="pregunta 32">pregunta 25</option></center>
 <center><option name="numpregunta"   value="pregunta 33">pregunta 26</option></center>
 <center><option name="numpregunta"  value="pregunta 34">pregunta 27</option></center>
 <center><option name="numpregunta"   value="pregunta 35">pregunta 28</option></center>
 <center><option name="numpregunta"   value="pregunta 36">pregunta 29</option></center>
 <center><option name="numpregunta"   value="pregunta 37">pregunta 30</option></center>
 <center><option name="numpregunta"   value="pregunta 38">pregunta 31</option></center>
 <center><option name="numpregunta"   value="pregunta 39">pregunta 32</option></center>
 <center><option name="numpregunta"  value="pregunta 4">pregunta 33</option></center>
 <center><option name="numpregunta"   value="pregunta 40">pregunta 34</option></center>
 <center><option name="numpregunta"   value="pregunta 41">pregunta 35</option></center>
 <center><option name="numpregunta"   value="pregunta 42">pregunta 36</option></center>
 <center><option name="numpregunta"   value="pregunta 43">pregunta 37</option></center>

 <center><option name="numpregunta"   value="pregunta 44">pregunta 38</option></center>
 <center><option name="numpregunta"  value="pregunta 45">pregunta 39</option></center>
 <center><option name="numpregunta"   value="pregunta 46">pregunta 40</option></center>

 <center><option name="numpregunta"   value="pregunta 47">pregunta 41</option></center>
 <center><option name="numpregunta"  value="pregunta 48">pregunta 42</option></center>
 <center><option name="numpregunta"   value="pregunta 49">pregunta 43</option></center>
 <center><option name="numpregunta"   value="pregunta 50">pregunta 44</option></center>
 <center><option name="numpregunta"   value="pregunta 51">pregunta 45</option></center>
 <center><option name="numpregunta"   value="pregunta 52">pregunta 46</option></center>
 <center><option name="numpregunta"   value="pregunta 53">pregunta 47</option></center>
 <center><option name="numpregunta"  value="pregunta 54">pregunta 48</option></center>
 <center><option name="numpregunta"   value="pregunta 55">pregunta 49</option></center>
 <center><option name="numpregunta"   value="pregunta 56">pregunta 50</option></center>
 <center><option name="numpregunta"   value="pregunta 57">pregunta 51</option></center>
 <center><option name="numpregunta"   value="pregunta 58">pregunta 52</option></center>

 <center><option name="numpregunta"   value="pregunta 59">pregunta 53</option></center>
 <center><option name="numpregunta"  value="pregunta 60">pregunta 54</option></center>
 <center><option name="numpregunta"   value="pregunta 61">pregunta 55</option></center>
 <center><option name="numpregunta"   value="pregunta 62">pregunta 56</option></center>
 <center><option name="numpregunta"   value="pregunta 63">pregunta 57</option></center>
 <center><option name="numpregunta"   value="pregunta 64">pregunta 58</option></center>
 <center><option name="numpregunta"   value="pregunta 65">pregunta 59</option></center>
 <center><option name="numpregunta"  value="pregunta 66">pregunta 60</option></center>
 <center><option name="numpregunta"   value="pregunta 67">pregunta 61</option></center>
 <center><option name="numpregunta"   value="pregunta 68">pregunta 62</option></center>
 <center><option name="numpregunta"   value="pregunta 69">pregunta 63</option></center>
 <center><option name="numpregunta"   value="pregunta 70">pregunta 64</option></center>
 <center><option name="numpregunta"   value="pregunta 71">pregunta 65</option></center>
 <center><option name="numpregunta"   value="pregunta 72">pregunta 66</option></center>
 <center><option name="numpregunta"  value="pregunta 73">pregunta 67</option></center>
 <center><option name="numpregunta"   value="pregunta 74">pregunta 68</option></center>
 <center><option name="numpregunta"   value="pregunta 75">pregunta 69</option></center>
 <center><option name="numpregunta"   value="pregunta 76">pregunta 70</option></center>
 <center><option name="numpregunta"   value="pregunta 77">pregunta 71</option></center>
 <center><option name="numpregunta"   value="pregunta 78">pregunta 72</option></center>
 <center><option name="numpregunta"  value="pregunta 79">pregunta 73</option></center>
 <center><option name="numpregunta"   value="pregunta 80">pregunta 74</option></center>
 <center><option name="numpregunta"   value="pregunta 81">pregunta 75</option></center>
 <center><option name="numpregunta"   value="pregunta 82">pregunta 76</option></center>
 <center><option name="numpregunta"   value="pregunta 83">pregunta 77</option></center>

 <center><option name="numpregunta"   value="pregunta 84">pregunta 78</option></center>
 <center><option name="numpregunta"  value="pregunta 85">pregunta 79</option></center>
 <center><option name="numpregunta"   value="pregunta 86">pregunta 80</option></center>


 <center><option name="numpregunta"   value="pregunta 87">pregunta 81</option></center>
 <center><option name="numpregunta"  value="pregunta 88">pregunta 82</option></center>
 <center><option name="numpregunta"   value="pregunta 89">pregunta 83</option></center>
 <center><option name="numpregunta"   value="pregunta 90">pregunta 84</option></center>
 <center><option name="numpregunta"   value="pregunta 91">pregunta 85</option></center>
 <center><option name="numpregunta"   value="pregunta 92">pregunta 86</option></center>
 <center><option name="numpregunta"   value="pregunta 93">pregunta 87</option></center>
 <center><option name="numpregunta"  value="pregunta 94">pregunta 88</option></center>
 <center><option name="numpregunta"   value="pregunta 95">pregunta 89</option></center>
 <center><option name="numpregunta"   value="pregunta 96">pregunta 90</option></center>
 <center><option name="numpregunta"   value="pregunta 97">pregunta 91</option></center>
 <center><option name="numpregunta"   value="pregunta 98">pregunta 92</option></center>

 <center><option name="numpregunta"   value="pregunta 99">pregunta 93</option></center>
 <center><option name="numpregunta"  value="pregunta 9911">pregunta 94</option></center>
 <center><option name="numpregunta"   value="pregunta 9912">pregunta 95</option></center>
 <center><option name="numpregunta"   value="pregunta 9913">pregunta 96</option></center>
 <center><option name="numpregunta"   value="pregunta 9914">pregunta 97</option></center>
 <center><option name="numpregunta"   value="pregunta 9915">pregunta 98</option></center>
 <center><option name="numpregunta"   value="pregunta 9916">pregunta 99</option></center>
  <center><option name="numpregunta"   value="pregunta 9939">pregunta 100</option></center>
 <center><option name="numpregunta"  value="pregunta 9917">pregunta 101</option></center>
 <center><option name="numpregunta"   value="pregunta 9918">pregunta 102</option></center>
 <center><option name="numpregunta"   value="pregunta 9919">pregunta 103</option></center>
 <center><option name="numpregunta"   value="pregunta 9921">pregunta 104</option></center>
 <center><option name="numpregunta"   value="pregunta 9922">pregunta 105</option></center>
 <center><option name="numpregunta"   value="pregunta 9923">pregunta 106</option></center>
 <center><option name="numpregunta"   value="pregunta 9924">pregunta 107</option></center>
 <center><option name="numpregunta"  value="pregunta 9925">pregunta 108</option></center>
 <center><option name="numpregunta"   value="pregunta 9926">pregunta 109</option></center>
 <center><option name="numpregunta"   value="pregunta 9927">pregunta 110</option></center>
 <center><option name="numpregunta"   value="pregunta 9928">pregunta 111</option></center>
 <center><option name="numpregunta"   value="pregunta 9929">pregunta 112</option></center>
 <center><option name="numpregunta"   value="pregunta 9931">pregunta 113</option></center>
 <center><option name="numpregunta"  value="pregunta 9932">pregunta 114</option></center>
 <center><option name="numpregunta"   value="pregunta 9933">pregunta 115</option></center>
 <center><option name="numpregunta"   value="pregunta 9934">pregunta 116</option></center>
 <center><option name="numpregunta"   value="pregunta 9935">pregunta 117</option></center>
 <center><option name="numpregunta"   value="pregunta 9936">pregunta 118</option></center>

 <center><option name="numpregunta"   value="pregunta 9937">pregunta 119</option></center>
 <center><option name="numpregunta"  value="pregunta 9938">pregunta 120</option></center>
 <center><option name="numpregunta"   value="pregunta 9939">pregunta 121</option></center>





        </select>
 <br>
 <h2>Contextualización</h2>
 <h2>Imagen</h2>
 <center><input type="file" name="imagenc"></input><h3>Sube una imagen para la Contextualización</h3></center>
 <center><textarea name="contextualizacion2" rows="4" cols="20" placeholder="contextualizacion" class="context"></textarea></center>
 <h2>Pregunta</h2>
 <h2>Imagen</h2>
 <center><input type="file" name="imagenp"></input><h3>Sube una imagen para la Pregunta</h3></center>
 <center><textarea name="pregunta2" rows="4" cols="20" placeholder="pregunta" class="pregunta"></textarea></center>
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
 <h2>Subir link de video a recomendar</h2>
 <input type="text" name="video" placeholder="link video">
 <br>
 <br>
 <br>

 <input type="submit" value="Enviar o Actualizar" class="i2"></input>


 <script>

   function abrir() {

     document.getElementById("inst").style.display="block";


 }



 </script>
</body>

 </html>
