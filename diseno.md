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




