#BASE DE DATOS:

1. **Tabla `alumnos`**:
   - `id` (PK)
   - `nombre`
   - `apellido`
   - `correo_electronico`
   - `fecha_nacimiento`
   

2. **Tabla `maestros`**:
   - `id` (PK)
   - `nombre`
   - `apellido`
   - `correo_electronico`
   
3. **Tabla `cursos`**:
   - `id` (PK)
   - `nombre`
   - `descripcion`
   - `maestro_id`(FK)
   

4. **Tabla `matriculas`**:
   - `id` (PK)
   - `alumno_id`(FK)
   - `curso_id`(FK)
   - `nota`
   
5. **Tabla `asistencias`**:
   - `id` (PK)   
   - `matricula_id`(FK)
   - `fecha`
   - `asistio` (A,T,F)


#Rutas:

  POST      api/alumno ....................................................... AlumnoController@store
  GET|HEAD  api/alumno/{id} ................................................... AlumnoController@show
  PUT       api/alumno/{id} ................................................. AlumnoController@update
  DELETE    api/alumno/{id} ................................................ AlumnoController@destroy
  GET|HEAD  api/alumnos ...................................................... AlumnoController@index

  POST      api/asistencia ............................................... AsistenciaController@store
  GET|HEAD  api/asistencia/{id} ........................................... AsistenciaController@show
  PUT       api/asistencia/{id} ......................................... AsistenciaController@update
  DELETE    api/asistencia/{id} ........................................ AsistenciaController@destroy
  GET|HEAD  api/asistencias .............................................. AsistenciaController@index

  POST      api/curso ......................................................... CursoController@store
  GET|HEAD  api/curso/{id} ..................................................... CursoController@show
  PUT       api/curso/{id} ................................................... CursoController@update
  DELETE    api/curso/{id} .................................................. CursoController@destroy
  GET|HEAD  api/cursos ........................................................ CursoController@index

  POST      api/docente ..................................................... DocenteController@store
  GET|HEAD  api/docente/{id} ................................................. DocenteController@show
  PUT       api/docente/{id} ............................................... DocenteController@update
  DELETE    api/docente/{id} .............................................. DocenteController@destroy
  GET|HEAD  api/docentes .................................................... DocenteController@index
  
  POST      api/matricula ................................................. MatriculaController@store
  GET|HEAD  api/matricula/{id} ............................................. MatriculaController@show
  PUT       api/matricula/{id} ........................................... MatriculaController@update
  DELETE    api/matricula/{id} .......................................... MatriculaController@destroy
  GET|HEAD  api/matriculas ................................................ MatriculaController@index
