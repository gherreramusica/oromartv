                    <div class="horarios">
                            <div class="id"><img src="<?php bloginfo('template_url') ?>/imagenes/OTV400.png" alt=""></div>
                
                
                            <?php
                                date_default_timezone_set('America/Guayaquil');
                                include 'tvguide.php';

                                $numero_dia_semana = date('N');

                                // Obtener la hora actual
                                $hora_actual = time();

                                // Verificar si hay programación para el día de la semana actual

                                $programa_actual = null;

                                date_default_timezone_set('America/Guayaquil');
                                $dia_actual = strtolower(date('l')); // Obtener el nombre del día en minúsculas (lunes, martes, etc.)
                                $hora_actual = strtotime(date('H:i')); // Obtener la hora actual en formato de tiempo UNIX

                                $programa_actual = null;
                                $programa_siguiente = null;
                                $programa_posterior = null;
                                $programa_otro = null;
                                                

                                foreach ($programas[$dia_actual] as $programa) {
                                    $hora_inicio_programa = strtotime($programa['hora_inicio']);
                                    $hora_fin_programa = $hora_inicio_programa + ($programa['duracion'] * 60);
                                    $tiempo_faltante = $hora_fin_programa - $hora_actual;
                                    $tiempo_faltante_minutos = round($tiempo_faltante / 60);
                                    // Calcular la duración total del programa en segundos
                                    $duracion_total_programa = ($programa['duracion'] * 60);

                                    // Calcular el tiempo transcurrido del programa actual en segundos
                                    $tiempo_transcurrido_segundos = $hora_actual - $hora_inicio_programa;

                                    // Calcular el porcentaje de tiempo transcurrido
                                    $porcentaje_transcurrido = ($tiempo_transcurrido_segundos / $duracion_total_programa) * 100;
                                                        

                                    if ($hora_actual >= $hora_inicio_programa && $hora_actual < $hora_fin_programa) {
                                        $programa_actual = $programa;

                                        $index_siguiente = array_search($programa, $programas[$dia_actual]) + 1;
                                        if (isset($programas[$dia_actual][$index_siguiente])) {
                                            $programa_siguiente = $programas[$dia_actual][$index_siguiente];
                                        }

                                        $index_posterior = array_search($programa, $programas[$dia_actual]) + 2;
                                        if (isset($programas[$dia_actual][$index_posterior])) {
                                            $programa_posterior = $programas[$dia_actual][$index_posterior];
                                        }

                                        $index_otro = array_search($programa, $programas[$dia_actual]) + 3;
                                        if (isset($programas[$dia_actual][$index_otro])) {
                                            $programa_otro = $programas[$dia_actual][$index_otro];
                                        }

                                        break; // Termina el bucle una vez que se ha encontrado el programa actual
                                    }
                                }

                            ?>
                <div class="horarios-wrapper">
                    <div class="row-header">
                        <div class="active-program active-program-fp">
                            <div class="program-info">
                                <p id="hora"></p>
                                <p id="hora"></p>

                                    <script>
                                                function mostrarHoraConSegundos() {
                                            var elementoHora = document.getElementById('hora');
                                            var fecha = new Date(); // Obtiene la fecha y hora actual
                                            var hora = fecha.getHours();
                                            var minutos = fecha.getMinutes();
                                            var segundos = fecha.getSeconds();

                                            // Agrega un cero delante si los minutos o segundos son menores que 10
                                            minutos = minutos.toString().padStart(2, '0');
                                            segundos = segundos.toString().padStart(2, '0');

                                            var horaConSegundos = hora + ":" + minutos + ":" + segundos;

                                            // Muestra la hora actualizada con minutos y segundos de dos dígitos
                                            elementoHora.textContent = horaConSegundos;
                                        }

                                        // Actualiza la hora cada segundo
                                        setInterval(mostrarHoraConSegundos, 1000);

                                        // Muestra la hora actual en el momento de cargar la página
                                        mostrarHoraConSegundos();
                                    </script>
                                <h4>Al Aire Ahora</h4>
                                <p><?php echo $programa_actual['nombre']; ?></p>
                                <p style="color: white; text-transform:none; font-size: 18px; font-family: 'Archivo', sans-serif; font-weight: 400; line-height: 25px; "><?php echo $programa_actual['descripcion'] ?></p>
                        
                            </div>
                            <div class="viendo-ahora">
                                <div>
                                    <p>Faltan <?php echo $tiempo_faltante_minutos ?> minutos </p>
                                </div>                           
                            </div>
                        </div>
                        
                        <div class="featured-program  featured-program-fp">
                            <a href="<?php echo site_url('/livestream') ?>"><img  src="<?php echo $programa_actual['imagen']?>" alt="">
                            <progress value="<?php echo $porcentaje_transcurrido?>" max="100"></progress>
                            <div class="overlay"></div></a>
                        </div>
                        
                    </div>
                    <div class="timeline timeline-frontpage">
                    
                        <div class="item-middle item-middle-fp">
                            <div>
                                <h4>A continuación</h4>
                                <p><?php echo $programa_siguiente['nombre']; ?></p>
                            </div>
                            <div>
                                <p><?php echo $programa_siguiente['hora_inicio'];?></p>
                            </div>
                        </div>
                        <div class="item-final item-final-fp">
                            <div><h4>Más adelante</h4>
                                <p><?php echo $programa_posterior['nombre']; ?></p>
                            </div>
                            <div>
                                <p><?php echo $programa_posterior['hora_inicio']; ?></p>
                            </div>
                        </div>
                        <div class="item-final item-final-fp">
                            <div><h4>Más adelante</h4>
                                <p><?php echo $programa_otro['nombre']; ?></p>
                            </div>
                            <div>
                                <p><?php echo $programa_otro['hora_inicio']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="titulo-vertical-horarios">TV EN VIVO<p>
                </div> 