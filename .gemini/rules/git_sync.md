# Sincronización Automática con GitHub al Finalizar Tareas

Al finalizar cualquier ciclo de modificación, refactorización o corrección de código solicitada por el usuario en el proyecto MateriaX:

1. **Auditoría de Cambios:** Verificar el estado del árbol de trabajo con `git status`.
2. **Staging:** Preparar todos los archivos afectados con `git add .` (o archivos específicos).
3. **Commit Semántico:** Generar un commit con un mensaje descriptivo y claro bajo el estándar conventional commits (`feat:`, `fix:`, `refactor:`, `docs:`, `style:`, etc.).
4. **Push Remoto:** Subir los cambios a la rama principal de GitHub:
   ```bash
   git push origin main
   ```
5. **Confirmación:** Informar al usuario el enlace al repositorio remoto (`https://github.com/manurisolo2-blip/MateriaX`) y el hash/mensaje del commit subido.
