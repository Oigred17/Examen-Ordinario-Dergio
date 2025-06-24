<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con Validación</title>
    <style>
        .error { color: red; font-size: 0.9em; }
        .campo { margin-bottom: 15px; }
    </style>
</head>
<body>
    <form id="miFormulario" novalidate>
        <div class="campo">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre">
            <div id="error-nombre" class="error"></div>
        </div>
        <div class="campo">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email">
            <div id="error-email" class="error"></div>
        </div>
        <div class="campo">
            <label for="edad">Edad:</label><br>
            <input type="number" id="edad" name="edad">
            <div id="error-edad" class="error"></div>
        </div>
        <button type="submit">Enviar</button>
    </form>

    <script>
        document.getElementById('miFormulario').addEventListener('submit', function(e) {
            let valido = true;

            // Limpiar errores previos
            document.getElementById('error-nombre').textContent = '';
            document.getElementById('error-email').textContent = '';
            document.getElementById('error-edad').textContent = '';

            // Validar nombre
            const nombre = document.getElementById('nombre').value.trim();
            if (nombre === '') {
                document.getElementById('error-nombre').textContent = 'El nombre es requerido.';
                valido = false;
            }

            // Validar email
            const email = document.getElementById('email').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '') {
                document.getElementById('error-email').textContent = 'El email es requerido.';
                valido = false;
            } else if (!emailRegex.test(email)) {
                document.getElementById('error-email').textContent = 'El email no es válido.';
                valido = false;
            }

            // Validar edad
            const edad = parseInt(document.getElementById('edad').value, 10);
            if (isNaN(edad)) {
                document.getElementById('error-edad').textContent = 'La edad es requerida.';
                valido = false;
            } else if (edad < 18 || edad > 99) {
                document.getElementById('error-edad').textContent = 'La edad debe estar entre 18 y 99.';
                valido = false;
            }

            if (!valido) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>