<?php 

?>
<html>
    <head>
    <title>Edit Gym info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https//unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <style>
        .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: whitesmoke;
        border-radius: 10px;
        box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
        }

        .center h1{
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid silver;
        }
        .center form{
        padding: 0 40px;
        box-sizing: border-box;
        }

        .edit-name{
            text-align: center;
            width: 100%;
            height: 900px;
            padding: 10px;
        }

                form .txt_field{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
        }
        .txt_field input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
        }
        .txt_field label{
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s;
        }
        .txt_field span::before{
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #000;
        transition: .5s;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
        top: -5px;
        color: #000;
        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before{
        width: 100%;
        }

            .input[type="submit"]{
            width: 30%;
            height: 50px;
            border: 1px solid;
            background: #185A56;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700px;
            cursor: pointer;
            outline: none;
            float: center;
            }
            .input[type="submit"]:hover{
            border-color: #185A56;
            transition: .5s;
            }

        @media screen and (max-width: 768px){

        .edit-name{
            text-align: center;
            width: 100%;
            height: 900px;
            padding: 10px;
        }
            
        }
     </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="container-fluid ">
            <div class="edit-name row">
              <div class="col">
                <div class="center">
                <div class="arrow1">
                <a href="manageGymInfo.php><i class="bi bi-arrow-left-short"></i></a>
                </div>
                   <h1>Edit Gym</h1><br>
                   <form method="POST" action="">
                    <div class="txt_field">
                        <input type="text" required>
                        <span></span>
                        <label>Contact Person</label>
                    </div>
                    <div class="txt_field">
                        <input type="email" required>
                        <span></span>
                        <label>Email</label>
                    </div>
                    <div class="txt_field">
                        <input type="number" required>
                        <span></span>
                        <label>Contact Number</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" required>
                        <span></span>
                        <label>Location</label>
                    </div>
                    <div class="save-btn">
                        <input type="submit" value="save">
                    </div>
                   </form>
                </div>
              </div>
        </div>
    </div>
    </body>
</html>