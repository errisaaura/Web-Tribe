<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Baju Adat</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <style>
        *{
            font-family: 'Poppins';

        }
        h2{
            padding-top: 15px;
        }
        
    </style>
   
</head>

<body style="background-image: url('bg home.jpg'); background-size: cover; background-attachment: fixed; background-repeat: no-repeat;">
    <h2 class="text-center font-monospace m-1 " style="color: black;">Daftar Pakaian Adat</h2>
    <br>
    <div class="row align-items-center" style="padding-left: 15px; padding-right: 15px">
        <?php
        include 'koneksi.php';
        $qry_pakaian = mysqli_query($conn, "select * from pakaian where id_pakaian = id_pakaian");
        $no = 0;
        while ($data_pakaian = mysqli_fetch_array($qry_pakaian)) {
            $no++;
        ?>
            <!-- Satu -->
            <div class="col-sm-4 ">
                <div class="card mb-4" style="max-width: 540px;">
                    <div class="row g-0 shadow-lg" style="background-color: #EEEEEE;" >
                        <div class="col-md-4">
                            <img src="<?php echo $data_pakaian['gambar_pakaian']?>" class=" " alt="..." style="width: 100%; height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data_pakaian['nama_pakaian']?></h5>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>

                                <p class="card-text"><?php echo substr($data_pakaian['deskripsi_pakaian'] , 0,130)?>...</p>

                                <a href="sewa_pakaian.php?id_pakaian=<?php echo$data_pakaian['id_pakaian'] ?>" class="btn btn-primary">Sewa</a>
                                <a href="#" class="btn btn-danger">Rp. <?php echo $data_pakaian['harga'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

        <!-- Dua -->
        <div class="col-sm-4">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0 shadow-lg">
                    <div class="col-md-4 shadow-lg">
                        <img src="pakaian/Pakaian Adat jawa.jpg" class="" alt="..." style="width: 100%; height: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Pakaian Adat Jawa</h5>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>

                            <p class="card-text">[EXAMPLE] 
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <a href="#" class="btn btn-primary">Sewa</a>
                            <a href="#" class="btn btn-danger">Rp. 500.000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="d-grid gap-2" style=" padding: 15px; ">
        <!-- <button class="btn btn-primary" type="button"><a href="tambah_pakaian.php" >Create</a></button> -->
        <a class="btn btn-primary" href="tambah_pakaian.php" role="button">Create </a>
    </div>

    </div>


</body>

</html>