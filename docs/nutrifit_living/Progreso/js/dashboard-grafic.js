
  const crearPorcentajes = ( porcent, progres, porcentMax ) => {

    const progreso = document.getElementById(`${progres}`)
    const porcentaje = document.getElementById(`${porcent}`)

    let cantidad1 = 0;
    let cantidad2 = 265;

    const tiempo = setInterval(() => {

        cantidad1+=1;

        let value = Math.ceil(cantidad2 = cantidad2 - 2.65)

        porcentaje.textContent = cantidad1 + '%'

        progreso.style.strokeDashoffset = `${value}`

        if(cantidad1 === porcentMax)
        {
            clearInterval(tiempo)
        }
    }, 28);

}
       
crearPorcentajes('percentage', 'progress', 38);

crearPorcentajes('percentage1', 'progress1', 14);

crearPorcentajes('percentage2', 'progress2', 20);

crearPorcentajes('percentage3', 'progress3', 28);