Practica 
"Simular Tabla Post"

Post
-id
Titulo
-Contenido
-Autor



  
<?php $registros = array(
	0=>array(
	"Id"=>"1",
	"Titulo"=>"El Pais de las Maravillas",
	"Contenido"=>"Alicia y el Conejo Blanco",
	"Autor"=>"Sasha Grey"
	),

	1=>array(
	"Id"=>"2",
	"Titulo"=>"Hannibal",
	"Contenido"=>"Canibalismo",
	"Autor"=>"Doctor Who"
	),

	2=>array(
	"Id"=>"3",
	"Titulo"=>"Alejandro Magno",
	"Contenido"=>"Historia",
	"Autor"=>"Steven Spielberg"
	),

	3=>array(
	"Id"=>"4",
	"Titulo"=>"Napoleon Bonaparte",
	"Contenido"=>"Historia y Conquista",
	"Autor"=>"Hystr Channel"
	),

	4=>array(
	"Id"=>"5",
	"Titulo"=>"Alien",
	"Contenido"=>"Terror, Suspenso",
	"Autor"=>"Octavio Sangria"
	)
		);
?>	
    		


<?php foreach($registros as $registro){ ?>
   <div>
       <h1><?php echo $registro["Titulo"];?></h1>
       <p><?php echo $registro["Contenido"];?></p>
       <div><?php echo $registro["Autor"];?></div>

   </div>

<?php } ?>