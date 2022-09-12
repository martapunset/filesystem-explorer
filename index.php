<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ezequiel Zvirgzdins, Marta Punset">
    <script src="https://kit.fontawesome.com/0ab380fc49.js" crossorigin="anonymous"></script>
    <title>File Explorer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="sidebars.css" rel="stylesheet">
    
    <?php  require_once("openFolder.php");?>
    <?php require_once("directoriesL.php");?>


</head>
<header>
<nav class="mx-4 bg-light py-2 pt-4">
  <div class="d-flex mb-3 ">
  <form class="d-flex me-auto " role="search">
        <input class="form-control me-2" id="search" name="search" type="text" placeholder="Type here">
        <input class="btn btn-outline-success" id="submit" type="submit" value="search"></input>
      </form>
    <a class="me-4 fs-4 "><i class="fa-solid fa-trash text-secondary"></i></a>
    <a class="fs-4 "><i class="fa-regular fa-file"></i></a>
    </div>
  </div>
</nav>
</header>
<body>

    <main class="d-flex align-items-stretch w-100 p-3">

        <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">

                <span class="fs-5 fw-semibold">FILE SYSTEM EXPLORER</span>
            </a>
            <ul class="list-unstyled ps-0 dir-list">
                <li><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add
                        files</button></li>


                <!--<button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#documents-collapse" aria-expanded="false">
      
        </button> -->
                <a class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                    href="index.php?name=ROOT"
                    aria-expanded="false">ROOT</a>
                <div class="collapse show" id="documents-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                      <?php dirList($thisEntry);?>

                    </ul>
                </div>

            </ul>
        </div>


        <!-- dashboard-->

        <div class=" my-3 mh-100 bg-body rounded shadow-sm container-xl">
            <div class="border-bottom pb-2 mb-0 row ">
                <h6 class="col text-start">File</h6>
                <h6 class="col text-center">Size</h6>
                <h6 class="col text-end">Modified</h6>
            </div>
            <?php
            openFolder();
            
            ?>
        </div>



    </main>
    <!--<footer class="footer mt-auto py-3 bg-light ">
  <div class="container">
    <span class="text-muted">footer</span>
  </div>
</footer>-->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create folder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="createDir.php" method="post" id="createItems">
                        <div class="mb-3">
                          <!--Select dropdown-->
                        <label for="formGroupExampleInput" class="form-label">Select folder</label>
                        <?php include("selectFolders.php");?>
                        


 

                            <label for="formGroupExampleInput" class="form-label">Folder Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder" name="folder-name">
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Create folder</button>

                        </div>



                        <div class="custom-file">
                            <input type="file" class="custom-file-input">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add File</button>

                </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script src="sidebars.js"></script>
</body>

</html>