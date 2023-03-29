<?php

require "../../Login_register/conexion.php";
session_start();

?>


<div class="agenda">
		<h1>Agendar Comidas</h1>
		<form id="formAgenda">
			<label for="fecha">Fecha:</label>
			<input type="date" id="fecha" name="fecha">
			<label for="hora">Hora:</label>
			<input type="time" id="hora" name="hora">
			<label for="dia">Día:</label>
			<select id="dia" name="dia">
				<option value="Lunes">Lunes</option>
				<option value="Martes">Martes</option>
				<option value="Miércoles">Miércoles</option>
				<option value="Jueves">Jueves</option>
				<option value="Viernes">Viernes</option>
				<option value="Sábado">Sábado</option>
				<option value="Domingo">Domingo</option>
			</select>
            <label for="dia">Comidas a recibir:</label>
                <div class="flexchekcomidas"> <input type="checkbox" value="Desayuno"> <p>Desayuno</p> </div>
                <div class="flexchekcomidas"> <input type="checkbox" value="Almuerzo"> <p>Almuerzo</p> </div>
                <div class="flexchekcomidas"> <input type="checkbox" value="Snak"> <p>Snak</p> </div>
                <div class="flexchekcomidas"> <input type="checkbox" value="Comida"> <p>Comida</p> </div>
                <div class="flexchekcomidas"> <input type="checkbox" value="Segundo Snak"> <p>Segundo Snak</p> </div>
                <div class="flexchekcomidas"> <input type="checkbox" value="Cena"> <p>Cena</p> </div>
			<input type="submit" value="Finalizar pedido" onclick="changeFecha()">
		</form>
</div>

	<!-- Calendario -->

	<div class="calendar">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>

    <div class="calendar__week">
        <div class="calendar__day calendar__item">Lunes</div>
        <div class="calendar__day calendar__item">Martes</div>
        <div class="calendar__day calendar__item">Miércoles</div>
        <div class="calendar__day calendar__item">Jueves</div>
        <div class="calendar__day calendar__item">Viernes</div>
        <div class="calendar__day calendar__item">Sábado</div>
        <div class="calendar__day calendar__item">Domingo</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>
