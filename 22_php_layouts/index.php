<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento Académico de Sistemas Computacionales</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

</head>
<body>
    <?php 
        include_once 'layouts/header.php';
    ?>

    <main>
        <section class="hero-container">
            <div class="hero-content">
                <h2 class="hero-title">HORARIOS DE CLASE 2024-II</h2>
                <p class="hero-text">Consulta las asignaciones y capacidades de aulas</p>
                <button class="hero-button">Click aquí</button>
            </div>
            
            <div class="hero-img">
                <img src="img/img-horarios.png">
            </div>
        </section>

        <section class="mission-vision-container">
            <div class="mission-vision-card">
                <h1 class="mission-vision-card-title">Misión</h1>
                <div class="mission-vision-card-content">
                    <p>Formar recursos humanos profesionales, innovadores y participativos, con un alto sentido ético y con capacidad crítica,
                    de análisis, de investigación y dirección, que con responsabilidad, honestidad y solidaridad aporten soluciones mediante
                    el diseño, desarrollo y aplicación de tecnologías computacionales y difundan la cultura con espíritu emprendedor,
                    comprometidos con el desarrollo integral sustentable de su entorno.</p>
                </div>
            </div>
            
            <div class="mission-vision-card">
                <h1 class="mission-vision-card-title">Visión</h1>
                <div class="mission-vision-card-content">
                    <p>Seremos un Departamento Académico que ofrecerá programas educativos de licenciatura y posgrado de alta calidad y
                    pertinentes, vinculados al sector productivo, público y social, reconocidos a nivel nacional e internacional, con sólida
                    formación académica y de desarrollo de investigación, que dé respuestas a las demandas del entorno regional, nacional e
                    internacional.</p>
                </div>
            </div>
        </section>
    </main>
    <?php include 'layouts/footer.php'; ?>
</body>
</html>