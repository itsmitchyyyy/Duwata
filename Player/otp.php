<!DOCTYPE html>
<head>
    <title>OTP Verification Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https//unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
     <script src="script.js" defer></script>

     <style>
    :where(.container,form, .input-field,header){  /*OTP*/
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
    }
     </style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="edit-profile row">
            <div class="col">
                <div class="container">
                    <header>
                        <i class="bx bxs-check-shield"></i>
                    </header>
                    <h4>Enter OTP Code</h4>
                    <form action="">
                        <div class="input-field">
                            <input type="number"  />
                            <input type="number" disabled />
                            <input type="number" disabled />
                            <input type="number" disabled />
                        </div><br>
                        <button class="active">Verify OTP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>