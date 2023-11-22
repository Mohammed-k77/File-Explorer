<?php 

// $file = $_GET['fileName'];

// $file=dir("./files");
// while($file $dir->read()){

// }

?>
<html>
    <head>

        <link rel="stylesheet" href="./assets\lib\fontawesome-v6.4.2\css\all.css">
        <link rel="stylesheet" href="./assets\lib\bootstrap.min.css">
        <title>File Explorer</title>
    <style>

        header{
            height:  5.6rem;;
        }

        nav{
            background-color: #2196f3;
            color: #fff;
        }

        nav .logo .bars-icon{
            font-size: 2.3rem;
        }

        nav .navigation .plus-icon,
        nav .navigation .elipss-icon{
            font-size: 1.9rem;
        }

        main{
            min-height: 33.15rem;
        }

        main .folder-icon,
        main .file-icon{
            font-size: 5rem;
            color: #4f4f4f;
        }

        footer{
            background-color: #2196f3;
            color: #fff;
        }


    </style>
    </head>
    <body>
        <header>
            <nav class="py-3 px-5 gap-2 position-fixed w-100">
                <div class="logo d-flex flex-direction-column align-items-center float-start">
                    <i class="fa-solid fa-bars me-3 bars-icon" role=button></i>
                    <h1 role=button>Files</h1>
                </div>
                <div class="navigation d-flex p-2 flex-direction-column align-items-center gap-4 float-end ">
                    <i class="fa-solid fa-plus plus-icon" role=button ></i>
                    <i class="fa-solid fa-ellipsis-vertical elipss-icon" role=button></i>
                </div>
            </nav>
        </header>
        <main class="d-flex gap-3 p-3 flex-wrap">
        <div class="folder-content d-flex flex-column align-items-center" role=button>
                <i class="fa-solid fa-folder folder-icon m-2"></i>
                <h5>name</h5>
            </div>
            <div class="folder-content d-flex flex-column align-items-center" role=button>
                <i class="fa-solid fa-folder folder-icon m-2"></i>
                <h5>name</h5>
            </div>
            <div class="folder-content d-flex flex-column align-items-center" role=button>
                <i class="fa-solid fa-folder folder-icon m-2"></i>
                <h5>name</h5>
            </div>
            <div class="folder-content d-flex flex-column align-items-center" role=button>
                <i class="fa-solid fa-folder folder-icon m-2"></i>
                <h5>name</h5>
            </div>
            <div class="folder-content d-flex flex-column align-items-center" role=button>
                <i class="fa-solid fa-folder folder-icon m-2"></i>
                <h5>name</h5>
            </div>
            <div class="folder-content d-flex flex-column align-items-center" role=button>
                <i class="fa-solid fa-folder folder-icon m-2"></i>
                <h5>name</h5>
            </div>
            <div class="folder-content d-flex flex-column align-items-center" role=button>
                <i class="fa-solid fa-folder folder-icon m-2"></i>
                <h5>name</h5>
            </div>
        </main>
        <footer class="bottom-0">
            <div class="p-3 text-center">
                <h6>Copy right &copy; 2023 Mohammed Khaled Bin-hazim</h6>
            </div>
        </footer>
    </body>
        
</html>
