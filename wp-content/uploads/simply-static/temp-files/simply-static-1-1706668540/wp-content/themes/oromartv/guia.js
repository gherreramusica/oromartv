


// TV GUIDE
        
/*function actualizarGuia() {
  
    const guiaElemento = document.getElementById('timetable');
    guiaElemento.innerHTML = '';
  
    // Obtener la hora actual
    const ahora = new Date();
    const horaActual = ahora.getHours();  + ':' + ahora.getMinutes(); // Formato 'HH:MM'
  
  
    // Simulación de datos de programación (puedes obtener estos datos de una fuente real)
    const programacion = [
    { programa: 'Desde Tempranito', hora: '6', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/11/4.jpeg'},
    { programa: 'Noticias Oromar', hora: '7', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/11/2.jpeg' },
    { programa: 'Ranger de Texas', hora: '8', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ranger.jpeg' },
    { programa: 'Ranger de Texas', hora: '9', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ranger.jpeg' },
    { programa: 'No me Olvides', hora: '10', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/nomeolvides.jpeg' },
    { programa: 'Acorralada', hora: '11', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/acorralada.jpeg' },
    { programa: 'Noticias Oromar', hora: '12', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/11/3.jpeg' },
    { programa: 'Gran Chaparral', hora: '13', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/granchaparral.jpeg' },
    { programa: 'Gran Chaparral', hora: '14', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/granchaparral.jpeg' },
    { programa: 'Bonanza', hora: '15', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/bonanza.jpeg' },
    { programa: 'Bonanza', hora: '16', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/bonanza.jpeg' },
    { programa: 'Ranger de Texas', hora: '17', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ranger.jpeg' },
    { programa: 'Ranger de Texas', hora: '18', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ranger.jpeg' },
    { programa: 'Duele Amar', hora: '19', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/dueleamar.jpeg' },
    { programa: 'Pedro Escamoso', hora: '20', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/escamoso.jpeg' },
    { programa: 'Noticias Oromar', hora: '21', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/11/5.jpeg'},
    { programa: 'Ranger de Texas', hora: '22', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ranger.jpeg'},
    { programa: 'Espacio Contratado', hora: '23', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ESPACIO-CONTRATADO.jpg'},
    { programa: 'Espacio Contratado', hora: '24', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ESPACIO-CONTRATADO.jpg'},
    { programa: 'Espacio Contratado', hora: '1', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ESPACIO-CONTRATADO.jpg'},
    { programa: 'Espacio Contratado', hora: '2', minutos: '00', duracion:'60', imagen: 'http://cientist84.es/wp-content/uploads/2023/12/ESPACIO-CONTRATADO.jpg'},
    
    
      // ... Otros programas ...
    ];
  
    let programaActual = null;
    let programaSiguiente = null;
    let programaUltimo = null;
    let programaFinal = null;
  
    for (let i = 0; i < programacion.length; i++) {
      if (programacion[i].hora >= horaActual) {
        programaActual = programacion[i];
        programaSiguiente = programacion[i + 1];
        programaUltimo = programacion[i + 2];
        programaFinal = programacion[i + 3];
        break;
      }
    }
  
    if (programaActual && programaSiguiente && programaUltimo) {
      const duracionTotal = parseInt(programaActual.duracion); // Duración total del programa en minutos
    const horaActualEnMinutos = ahora.getHours() * 60 + ahora.getMinutes(); // Hora actual en minutos
    const horaInicioEnMinutos = parseInt(programaActual.hora) * 60 + parseInt(programaActual.minutos); // Hora de inicio del programa en minutos
    const tiempoTranscurrido = horaActualEnMinutos - horaInicioEnMinutos;
    const porcentajeProgreso = (tiempoTranscurrido / duracionTotal) * 100;
    const tiempoFaltante = (duracionTotal - tiempoTranscurrido);
      const contenido = `
      <div class="row-header">
      <div>
          <div class="featured-program">
              <img width="75px" height="75px" src="${programaActual.imagen}" alt="">
              <div class="overlay"></div>
          </div>
      </div>
  </div>
  <div class="timeline">
      <div class="active-program">
          <div>
              <h4>Estas Viendo</h4>
              <p>${programaActual.programa}</p>
              
          </div>
          <div class="viendo-ahora">
              <div><p>Faltan ${tiempoFaltante} minutos </p></div>
              <progress value="${porcentajeProgreso}" max="100"></progress>
              <div class="envivo-timeline"><p>EN VIVO</p></div>
          </div>
      </div>
      <div class="item-middle">
          <div>
              <h4>A continuación</h4>
              <p>${programaSiguiente.programa}</p>
          </div>
          <div>
              <p>${programaSiguiente.hora} : ${programaSiguiente.minutos}</p>
          </div>
      </div>
      <div class="item-final">
          <div><h4>Más adelante</h4>
              <p>${programaUltimo.programa}</p>
          </div>
          <div>
              <p>${programaUltimo.hora} : ${programaSiguiente.minutos}</p>
          </div>
      </div>
      <div class="item-final">
          <div><h4>Más adelante</h4>
              <p>${programaFinal.programa}</p>
          </div>
          <div>
              <p>${programaFinal.hora} : ${programaFinal.minutos}</p>
          </div>
      </div>
  </div>
      
      `;
      guiaElemento.innerHTML = contenido;
    } else {
      guiaElemento.innerHTML = '<p>No hay programas disponibles en este momento.</p>';
    }
  
  }
  // Llamada inicial y actualización periódica de la guía de televisión (cada 1 minuto en este caso)
  actualizarGuia();
  
  
  setInterval(actualizarGuia, 60000); // 60000 milisegundos = 1 minuto

  
  
 


  
    
 