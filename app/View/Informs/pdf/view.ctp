<html>


<head>
<meta charset="utf-8">
<?php $meses = array('1'=> 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'); ?>
<style>




p    {
	
	margin-left:3px;
}

#lee{
	
	padding-left:20%;
	padding-right: 30%;
}

table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 10px;     width: 480px; text-align: left;    border-collapse: collapse; }
caption { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
 	text-align:center; 
 }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }
h3 {
	font-size: 15px;     font-weight: normal;      text-align: justify;     

 }

 tr {
 	border:1 ; border-color: #000000;
 }

div.container {
    margin-left: 50px;
}
</style> 
</head>
<body>

<div class="container" >
 <img src="C:\logo-unerg.png"; width="25%"; height="100"; margin-left='10px'; margin-top='10px'; />
 <div align='center'>
		Republica Bolivariana de Venezuela <br>
		Universidad Nacional Experimental Romulo Gallegos <br>
		Direccion de Admision, Control y Evaluacion
</div>	
		


		<br>
		<br>
		<br>
		<br>

		<div align="center"><strong>CONSTANCIA DE ESTUDIO</strong></div>

		<br>
		<br>
		<br>

		<div text-align='justify'>
	
			Quien suscribe hace constar por medio de la presente que el Ciudadano Bachiller: <strong> <?php echo $inform['Inform']['conclusiones'] ;?> </strong> C.I.: <strong> <?php echo $inform['Inform']['conclusiones']; ?> </strong> Esta Inscrito como Alumno Regular de Esta Universidad, en la Carrera de Ingenieria en Informatica.

</div>	
	
	<br> <br> <br>
 <div align='center'>
		Constancia que se Expide a Peticion de Parte Interesada, En la Ciudad De San Juan , a los <strong> <?php echo date('j');?> </strong>  Dias del Mes <strong> <?php 
		
			for ($i=1; $i < 13; $i++) { 
				if ((date('n')) == $i ) {
					echo $meses[$i];
				}	
			}
		 ?>

		 </strong> del A&ntilde;o <strong><?php echo date('o'); ?> </strong>

		
</div>	
<br> <br> <br> <br> <br> <br>
<div align='center'>
	<strong>
	Prof. Alberto de Sousa <br>
	Coordinador (A) Oficina Sectorial. <br>
	Area de Ingenieria de Sistemas. 
</strong>
		
</div>	

</div>

<br> 
<br>
<div align='center'>
	 <font size="1"> </font>
	Este Documento sin el sello y la Firma de la Oficina Sectorial de Control de Estudios, no tiene validez.
	
</body>


</html>


