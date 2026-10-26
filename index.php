<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de Grupo</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f6fc;
            color: #243247;
        }

        header {
            background: linear-gradient(135deg, #0878d1, #54c6eb);
            color: white;
            padding: 25px 15px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 8px;
        }

        nav {
            background: white;
            padding: 16px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            box-shadow: 0 3px 10px #00000010;
        }

        nav a {
            text-decoration: none;
            color: #0878d1;
            font-weight: bold;
            padding: 10px 16px;
            border-radius: 20px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #0878d1;
            color: white;
        }

        main {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .bienvenida {
            text-align: center;
            margin-bottom: 30px;
        }

        .cuadros {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .tarjeta {
            background: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 5px 20px #17365d15;
            border-top: 5px solid #1689df;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .tarjeta:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px #17365d25;
        }

        .icono {
            font-size: 38px;
        }

        .tarjeta h2 {
            color: #0878d1;
        }

        button {
            background: #0878d1;
            color: white;
            border: none;
            padding: 12px 16px;
            border-radius: 9px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover {
            background: #055a9e;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px;
            border: 1px solid #ccd7e5;
            border-radius: 8px;
            font-family: inherit;
        }

        input:focus, textarea:focus {
            outline: 2px solid #80c8ff;
            border-color: #0878d1;
        }

        .datos {
            background: #eef8ff;
            padding: 12px;
            border-radius: 10px;
            margin-top: 15px;
            overflow-wrap: anywhere;
        }

        .oculto {
            display: none;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #64748b;
        }

        @media (max-width: 800px) {
            .cuadros {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>💻 Nuestro Proyecto Web</h1>
    <p>Un espacio para compartir información y trabajar en equipo</p>
</header>

<nav>
    <a href="#inicio">🏠 Inicio</a>
    <a href="#nosotros">👥 Nosotros</a>
    <a href="#formulario">📝 Formulario</a>
    <a href="#perfil">👤 Perfil</a>
</nav>

<main id="inicio">

    <section class="bienvenida">
        <h2>¡Bienvenidos a nuestra página!</h2>
        <p>Registra tus datos y participa en nuestro proyecto grupal.</p>
    </section>

    <section class="cuadros">

        <!-- CUADRO 1 -->
        <article class="tarjeta" id="nosotros">
            <div class="icono">👥</div>
            <h2>Nosotros</h2>
            <p>Conoce a las integrantes de nuestro equipo.</p>

            <form id="formNosotros">
                <label for="nombreEquipo">Nombre de la integrante</label>
                <input id="nombreEquipo" required
                       placeholder="Escribe tu nombre">

                <label for="funcionEquipo">Función en el equipo</label>
                <input id="funcionEquipo" required
                       placeholder="Ej. Programadora">

                <button type="submit">Registrar integrante</button>
            </form>

            <div class="datos" id="listaIntegrantes">
                Todavía no hay integrantes registradas.
            </div>
        </article>

        <!-- CUADRO 2 -->
        <article class="tarjeta" id="formulario">
            <div class="icono">📝</div>
            <h2>Formulario</h2>
            <p>Ingresa información para nuestro proyecto.</p>

            <form id="formProyecto">
                <label for="titulo">Título</label>
                <input id="titulo" required
                       placeholder="Nombre del proyecto">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" required rows="3"
                          placeholder="Describe tu aporte"></textarea>

                <button type="submit">Guardar información</button>
            </form>

            <div class="datos" id="resultadoProyecto">
                Todavía no hay información registrada.
            </div>
        </article>

        <!-- CUADRO 3 -->
        <article class="tarjeta" id="perfil">
            <div class="icono">👤</div>
            <h2>Perfil</h2>
            <p>Completa tu perfil para presentarte al equipo.</p>

            <form id="formPerfil">
                <label for="nombrePerfil">Nombre completo</label>
                <input id="nombrePerfil" required
                       placeholder="Escribe tu nombre">

                <label for="especialidad">Especialidad</label>
                <input id="especialidad" required
                       placeholder="Ej. Desarrollo de sistemas">

                <label for="objetivo">Mi objetivo</label>
                <textarea id="objetivo" required rows="3"
                          placeholder="¿Qué deseas aprender?"></textarea>

                <button type="submit">Guardar perfil</button>
            </form>

            <div class="datos" id="resultadoPerfil">
                Todavía no hay un perfil registrado.
            </div>
        </article>

    </section>
</main>

<footer>
    <p>Proyecto académico de desarrollo web | Trabajo en equipo</p>
</footer>

<script>
    // Recuperar los registros guardados en este navegador.
    const integrantes = JSON.parse(
        localStorage.getItem("integrantes") || "[]"
    );

    function mostrarIntegrantes() {
        const contenedor = document.getElementById("listaIntegrantes");
        contenedor.replaceChildren();

        if (integrantes.length === 0) {
            contenedor.textContent = "Todavía no hay integrantes registradas.";
            return;
        }

        integrantes.forEach(function (persona) {
            const parrafo = document.createElement("p");
            parrafo.textContent = persona.nombre + " — " + persona.funcion;
            contenedor.appendChild(parrafo);
        });
    }

    document.getElementById("formNosotros").addEventListener("submit",
        function (evento) {
            evento.preventDefault();

            integrantes.push({
                nombre: document.getElementById("nombreEquipo").value.trim(),
                funcion: document.getElementById("funcionEquipo").value.trim()
            });

            localStorage.setItem("integrantes", JSON.stringify(integrantes));

            mostrarIntegrantes();
            this.reset();
        }
    );

    document.getElementById("formProyecto").addEventListener("submit",
        function (evento) {
            evento.preventDefault();

            const titulo = document.getElementById("titulo").value.trim();
            const descripcion =
                document.getElementById("descripcion").value.trim();

            const resultado = document.getElementById("resultadoProyecto");
            resultado.replaceChildren();

            const encabezado = document.createElement("h3");
            encabezado.textContent = titulo;

            const texto = document.createElement("p");
            texto.textContent = descripcion;

            resultado.append(encabezado, texto);

            localStorage.setItem("proyecto", JSON.stringify({
                titulo: titulo,
                descripcion: descripcion
            }));

            this.reset();
        }
    );

    document.getElementById("formPerfil").addEventListener("submit",
        function (evento) {
            evento.preventDefault();

            const nombre = document.getElementById("nombrePerfil").value.trim();
            const especialidad =
                document.getElementById("especialidad").value.trim();
            const objetivo = document.getElementById("objetivo").value.trim();

            const resultado = document.getElementById("resultadoPerfil");
            resultado.replaceChildren();

            [nombre, especialidad, objetivo].forEach(function (dato) {
                const parrafo = document.createElement("p");
                parrafo.textContent = dato;
                resultado.appendChild(parrafo);
            });

            localStorage.setItem("perfil", JSON.stringify({
                nombre: nombre,
                especialidad: especialidad,
                objetivo: objetivo
            }));

            this.reset();
        }
    );

    mostrarIntegrantes();
</script>

</body>
</html>