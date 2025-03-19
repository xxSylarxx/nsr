<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	:root {
		--white-text: #fff;
		--background: #c8e8f1;
		--black-text: rgb(68, 66, 66) --prueba: (180deg, #F51832, #c21328);
	}

	.background1-left-column {
		background: linear-gradient(180deg, #F51832, #c21328);
	}


	.background2-left-column {
		background: linear-gradient(180deg, #F51832, #c21328);
	}

	* {
		padding: 0;
		margin: 0;
		text-decoration: none;
		box-sizing: border-box;
		border: none;
	}


	body {
		font-family: Arial, Helvetica, sans-serif;
	}

	.contenedor {
		display: flex;
		justify-content: center;
		height: 34vh;
		align-items: center;
	}

	.card1 {
		background-color: var(--white-text);
		border-radius: 1rem;
		box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.2);
		display: flex;
		margin: 1.5rem;
		overflow: hidden;
		width: 39rem;
		height: 14rem;
		transition: .3s;
	}

	.card1:hover {
		transform: scale(1.06);
	}


	.card1 h6 {
		opacity: 0.6;
		letter-spacing: .1rem;
		text-transform: uppercase;
	}

	.card1 h2 {
		letter-spacing: .1rem;
		margin: 1rem 0;
		color: var(black-text);
	}

	.left-column {
		color: var(--white-text);
		padding: 2rem;
		max-width: 10rem;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: space-between;
	}

	.left-column h2 {
		color: var(--white-text);
	}

	.left-column i {
		font-size: 5rem
	}

	.right-column {
		padding: 30px;
		width: 100%;
		display: flex;
		flex-direction: column;
		align-items: start;
		justify-content: space-between;

	}

	.right-column p {
		font-size: .9rem;
		color: var(--black-text)
	}

	.botton {
		border-radius: 3rem;
		box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
		color: var(--white-text);
		font-size: 1.2rem;
		padding: .8rem 1.5rem;
		letter-spacing: .1rem;
		align-self: flex-end;
	}



	/*media queries*/

	@media (max-width: 1030px) {
		.contenedor {
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: auto;
		}
	}

	@media (max-width: 650px) {
		.card1 {
			width:10rem;
		}
	}
</style>

<body>

	<div class="contenedor">

		<div class="card1">
			<div class="left-column background1-left-column">
				<h6>Capacidad</h6>
				<h4 style="font-size:18px;color:white;">Cognoscitiva</h4>
				<img src="./assets/img/icons/cognoscitiva.png" height="80" width="80" alt="">
			</div>

			<div class="right-column">
				<!-- <div>
					<h4>Capacidad</h4>
					<h6>Cognoscitiva</h6>

				</div>
				<h2>Aprende GitHub en 3 semanas</h2> -->
				<p>Busca estimular destrezas básicas para el aprendizaje como son:
					la percepción, la memoria, la atención – concentración, relaciones espaciales,
					razonamiento lógico matemático y capacidades metacognitivas: Busca desarrollar las
					destrezas básicas para la lecto-escritura, la adquisición de conceptos, nociones básicas y
					las relaciones espacio temporales.</p>

			</div>

		</div>

		<div class="card1">
			<div class="left-column background2-left-column">
				<h6>Capacidad</h6>
				<h4 style="font-size:18px;color:white;">Linguística</h4>
				<img src="./assets/img/icons/linguistica.png" height="80" width="80" alt="">
			</div>

			<div class="right-column">
				<!-- <div>
					<h4>Capacidad</h4>
					<h6>Cognoscitiva</h6>

				</div>
				<h2>Aprende GitHub en 3 semanas</h2> -->
				<p>Busca desarrollar el pensamiento de la causa–efecto;
					así como su lenguaje expresivo y comprensivo a un nivel
					más abstracto. Los niños aprenden a utilizar las palabras
					para comunicarse, escuchar y participar en conversaciones,
					comprender el propósito de lo escrito, reconocer las letras y
					las palabras, y comenzar a escribir con un fin determinado, tanto
					en español como en inglés.</p>

			</div>

		</div>

	</div>
	<div class="contenedor">

		<div class="card1">
			<div class="left-column background1-left-column">
				<h6>Capacidad</h6>
				<h4 style="font-size:18px;color:white;text-align:center;">Socio Emocional</h4>
				<img src="./assets/img/icons/emocional.png" height="80" width="80" alt="">
			</div>

			<div class="right-column">
				<!-- <div>
					<h4>Capacidad</h4>
					<h6>Cognoscitiva</h6>

				</div>
				<h2>Aprende GitHub en 3 semanas</h2> -->
				<p>Adquirir independencia, confianza en sí mismos y
					autocontrol; seguir reglas y rutinas; hacer amigos;
					inculcar valores éticos y morales.</p>

			</div>

		</div>

		<div class="card1">
			<div class="left-column background2-left-column">
				<h6>Capacidad</h6>
				<h4 style="font-size:18px;color:white;">Motora</h4>
				<img src="./assets/img/icons/movimienot.png" height="80" width="80" alt="">
			</div>

			<div class="right-column">
				<!-- <div>
					<h4>Capacidad</h4>
					<h6>Cognoscitiva</h6>

				</div>
				<h2>Aprende GitHub en 3 semanas</h2> -->
				<p>Busca que durante la actividad del movimiento del cuerpo se manifieste y se modifique funciones motoras, desarrollando el ritmo, el control postural, la coordinación visomotriz y el esquema corporal. Fortalece las destrezas y habilidades de motricidad gruesa (mantener el equilibrio, saltar, correr, lanzar y atrapar) y fina (abotonar, enhebrar cuentas, cortar, dibujar, escribir).</p>

			</div>

		</div>

	</div>


</body>

</html>