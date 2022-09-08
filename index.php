<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Sidebars · Bootstrap v5.2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="sidebars.css" rel="stylesheet">
    
  </head>
  <body>
    
<main class="d-flex flex-nowrap">
  
  <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <a href="" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      
      <span class="fs-5 fw-semibold">FILE SYSTEM EXPLORER</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
      <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#documents-collapse" aria-expanded="false">
          Documents
        </button>
        <div class="collapse show" id="documents-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <?php include("directorisL.php");?>  
          </ul>
        </div>
      </li>
    </ul>
  </div>

  <!-- dashboard-->
  <div class="my-3 p-3 bg-body rounded shadow-sm container-xl">
    <div><h6 class="border-bottom pb-2 mb-0">Suggestions</h6></div>
    
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        </div>
  </div>
  </div>
  </div>
  
</main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

      <script src="sidebars.js"></script>
  </body>
</html>
