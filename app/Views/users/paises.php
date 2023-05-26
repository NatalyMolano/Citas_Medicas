<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" src="../css/cover.css">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Compra</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link href="CSS/diseño.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link href="CSS/diseño.css" rel="stylesheet" type="text/css"/>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet"/>
        <script>
            function copiarDatos() {
                var numeroid = document.getElementById("ND").value;
                var url = numeroid + '.pdf';
                window.open(url, 'Download');
            }
        </script>
        <style>
            div.fixed {
                position: fixed;
                bottom: 0;
                right: 0;
                width: 100px;
                height: 50px;
            }

        </style>

    </head>
<style>
      body
      {
        background-image: url("https://cdn.create.vista.com/api/media/small/5330469/stock-photo-earth-planet");
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
      }
      .fondo
      {
        background-color : black;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>
<body class="d-flex h-100 text-center text-bg-dark">


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" >
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0"></h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#"></a>
        <a class="nav-link fw-bold py-1 px-0" href="#"></a>
        <a class="nav-link fw-bold py-1 px-0" href="#"></a>
      </nav>
    </div>
  </header>
  <main class="px-3">
    <h1>Paises Americanos</h1>
    <p class="lead">Lista de paises</p>
    <div  class="d-flex justify-content-center align-items-center" >
    <table id="example" style="width:100%" class="fondo">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Subcontinente</th>
            </tr>
        </thead>
        <tbody >
            <tr>
                <td>Canadá</td>
                <td>Otawwa</td>
                <td>América del Norte</td>
            </tr>
            <tr >
                <td>Estados Unidos</td>
                <td>Washington DC</td>
                <td>América del Norte</td>
            </tr>
            <tr>
                <td>México</td>
                <td>México DF</td>
                <td>América del Norte</td>
            </tr>



            <tr>
                <td>Belice</td>
                <td>Belmopán</td>
                <td>América Central</td>
            </tr>
            <tr>
                <td>Costa rica</td>
                <td>San José</td>
                <td>América Central</td>
            </tr>
            <tr>
                <td>El Salvador</td>
                <td>San Salvador</td>
                <td>América Central</td>
            </tr>
            <tr>
                <td>Guatemala</td>
                <td>Ciudad de Guatemala</td>
                <td>América Central</td>
            </tr>
            <tr>
                <td>Honduras</td>
                <td>Tegucigalpa</td>
                <td>América Central</td>
            </tr>
            <tr>
                <td>Nicaragua</td>
                <td>Managua</td>
                <td>América Central</td>
            </tr>


            <tr>
                <td>Panamá</td>
                <td>Panamá</td>
                <td>América Central</td>
            </tr>
            <tr>
                <td>Argentina</td>
                <td>Buenos Aires</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Bolivia</td>
                <td>Sucre</td>
                <td>América del Sur</td>
            </tr>

            <tr>
                <td>Brasil </td>
                <td>Brasilia</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Chile</td>
                <td>Santiago de Chile</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Colombia</td>
                <td>Bogotá</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Ecuador</td>
                <td>Quito</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Paraguay </td>
                <td>Asunción</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Perú </td>
                <td>Lima</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Surinam</td>
                <td>Parabarimo</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Trinidad y Tobago</td>
                <td>Puerto España</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Uruguay</td>
                <td>Montevideo</td>
                <td>América del Sur</td>
            </tr>
            <tr>
                <td>Venezuela</td>
                <td>Caracas</td>
                <td>América del Sur</td>
            </tr>
           
        </tbody>
        
    </table>
   </div> 
  </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
