<!DOCTYPE html>
<html lang= "en">

<head>
    <meta charset= "utf-8">
    <meta http-equiv= "X-UA Compatible" content= "IE= edge">
    <meta name= "viewport" content= "width = device-width, intial-scale=1.0">
    <title>Form Login RECOF</title>
    <!-- <link rel= "stylesheet" href= "style.css"> -->
    <link href="<?= base_url()?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div class= "container">
        <div class= "row">
            <div class= "col-md-12">
                <?php if(session()->getFlashdata('msg')):?>
                <div class= "alert alert-danger"><?= session()->getFlashdata('msg')?></div>
                
                <?php endif ;?>
                <form action="<?= base_url('login')?>" method= "post">
                <form class="card shadow mb-3 border-left-info align-text-center">
                    <h3 class="card-title">Form Login RECOF</h3>
                    <div class="card-body">
                        <div class= "form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="Username" id="Username" class="form-control">
                        </div>
                        <div class= "form-group">
                                <label for="Password">Password</label>
                                <input type="Password" name="Password" id="Password" class="form-control">
                        </div>
                    </div>
                    <div class= "card-footer">
                        <button type= "submit" class= "btn btn-info">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
