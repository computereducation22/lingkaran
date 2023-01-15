
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css" >
    <title>Hitung Lingkaran</title>
</head>
<body>
    <div class="col d-flex justify-content-center mt-5">
        <div class="card " style="width: 30rem;">
            <div class="card-body ">
                <h1>Hitung Luas Lingkaran</h1>
                <h5>Masukan Nilai:</h5>  
                    <form action="./" method="POST" enctype="multipart/form-data">
                        <table>
                            <div class="mb-3">
                                <tr>
                                <label class="form-label ">Jari-jari Lingkaran</label>
                                <input type="text" class="form-control" name="jari" required>
                                </tr>
                            </div>
                            <div class="mb-3">
                                <tr>
                                <td></td>
                                <td></td>
                                <input class="btn btn-primary" type="submit" name="submit" value="Hitung" size=5 />
                                <input class="btn btn-danger" type="reset"  value="Hapus" size=5 />
                                </tr> 
                            </div> 
                        </table>
                    </form>
                    <?php
                        if(isset($_POST['submit'])){
                            $jari = $_POST['jari'];
                            $phi  = 22/7;
                            
                            //hitung luas lingkaran
                            $luas_lingkaran = $phi*($jari*$jari);
                            
                            echo "<br>Hasil hitung luas lingkaran adalah sebagai berikut:<br/>";
                            echo "Diketahui:<br />";
                            echo "Jari-jari lingkaran = $jari <br/>";
                            echo "Phi = $phi<br />";
                            echo "Maka luas lingkaran adalah [ $phi x $jari x $jari ] = $luas_lingkaran";
                        }
                    ?>
            </div>
        </div>
    </div>

    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>